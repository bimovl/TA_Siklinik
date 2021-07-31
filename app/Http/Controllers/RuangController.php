<?php

namespace App\Http\Controllers;
use App\Models\Ruang;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;



class RuangController extends Controller
{
    public function index()
    {
    	$data = Ruang::all();
    	return view('ruang.index',['data'=>$data]);
    }

    public function add()
    {
    	return view('ruang.add');
    }

    public function store(Request $request)
	{
		 $request->validate([
		 	'nama_ruang'=>'required',
		 	'fasilitas'=>'required',
		 	'jenis'=>'required',
			 'ketersediaan'=>'required'
		 ]);

		 $ruang = new Ruang;
		 $ruang->nama_ruang= $request->nama_ruang;
		 $ruang->fasilitas= $request->fasilitas;
		 $ruang->jenis= $request->jenis;
		 $ruang->ketersediaan= $request->ketersediaan;
		 if($ruang->save())
		 {
			Toastr::success('Data Berhasil Dimasukkan', 'Success');
			return redirect('ruang/');
		} else {
			Toastr::error('Data Gagal Dimasukkan', 'Error');
			return redirect('ruang/');
		}

	}

	public function edit($id_ruang,Request $request)
    {
    	$ruang = Ruang::find($id_ruang);
    	return view('ruang.edit',['data'=>$ruang]);
    }

    public function update(Request $request)
    {
    	$request->validate([
		 	'nama_ruang'=>'required',
		 	'fasilitas'=>'required',
		 	'jenis'=>'required',
			 'ketersediaan'=>'required'
		 ]);
    	
    	$ruang = Ruang::find($request->id_ruang);
    	$ruang->nama_ruang = $request->nama_ruang;
    	$ruang->fasilitas = $request->fasilitas;
    	$ruang->jenis = $request->jenis;
		$ruang->ketersediaan= $request->ketersediaan;
    	if($ruang->save())
		{
			Toastr::success('Data Berhasil Diupdate', 'Success');
			return redirect('ruang/');
		} else {
			Toastr::error('Data Gagal Diupdate', 'Error');
			return redirect('ruang/');
		}
    }

	

	public function destroy($id_ruang)
	{
		$ruang = ruang::find($id_ruang);
		$ruang->delete();
		Toastr::success('Data Berhasil Dihapus', 'Success');
		return back();
	}
}
