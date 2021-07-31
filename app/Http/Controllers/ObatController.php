<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Obat;
use Brian2694\Toastr\Facades\Toastr;


class ObatController extends Controller
{
    public function index()
    {
    	$data = Obat::all();
    	return view('obat.index',['data'=>$data]);
    }

    public function add()
    {
    	return view('obat.add');
    }

    public function store(Request $request)
    {
    	$request->validate([
		 	'nama_obat'=>'required',
		 	'jenis'=>'required',
		 	'kandungan'=>'required'
		 ]);

		 $obat = new Obat;
		 $obat->nama_obat= $request->nama_obat;
		 $obat->jenis= $request->jenis;
		 $obat->kandungan= $request->kandungan;

		 if($obat->save())
		 {
			Toastr::success('Data Berhasil Dimasukkan', 'Success');
			return redirect('obat/');
		} else {
			Toastr::error('Data Gagal Dimasukkan', 'Error');
			return redirect('obat/');
		}
    }

    public function edit($id_obat,Request $request)
    {
    	$obat = Obat::find($id_obat);
    	return view('obat.edit',['data'=>$obat]);
    }

    public function update(Request $request)
    {
    	$request->validate([
		 	'nama_obat'=>'required',
		 	'jenis'=>'required',
		 	'kandungan'=>'required'
		 ]);
    	
    	$obat = Obat::find($request->id_obat);
    	$obat->nama_obat = $request->nama_obat;
    	$obat->jenis = $request->jenis;
    	$obat->kandungan = $request->kandungan;

    	if($obat->save())
		{
			Toastr::success('Data Berhasil Diupdate', 'Success');
			return redirect('obat/');
		} else {
			Toastr::error('Data Gagal Diupdate', 'Error');
			return redirect('obat/');
		}
    }

	public function destroy($id_obat)
    {
    	$obat = obat::find($id_obat);
		$obat->resep()->delete();
    	$obat->delete();
		Toastr::success('Data Berhasil Dihapus', 'Success');
    	return back();
    }
}
