<?php

namespace App\Http\Controllers;
use App\Models\Poli;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;


class PoliController extends Controller
{
    public function index()
    {
    	$data = Poli::all();
    	return view('poli.index',compact('data'));
    }

	public function add()
    {
    	return view('poli.add');
    }

    public function store(Request $request)
    {
    	$request->validate([
		 	'nama_poli'=>'required',
		 	'inventaris'=>'required'
		 ]);

		 $poli = new Poli;
		 $poli->nama_poli= $request->nama_poli;
		 $poli->inventaris= $request->inventaris;

		 if($poli->save())
		 {
			Toastr::success('Data Berhasil Dimasukkan', 'Success');
			return redirect('poli/');
		} else {
			Toastr::error('Data Gagal Dimasukkan', 'Error');
			return redirect('poli/');
		}
    }

    public function edit($id_poli,Request $request)
    {
    	$data = Poli::find($id_poli);
    	return view('poli.edit',compact('data'));
    }

    public function update(Request $request)
    {
    	$request->validate([
		 	'nama_poli'=>'required',
		 	'inventaris'=>'required'
		 ]);
    	
    	$poli = Poli::find($request->id_poli);
    	$poli->nama_poli = $request->nama_poli;
    	$poli->inventaris = $request->inventaris;

    	if($poli->save())
		{
			Toastr::success('Data Berhasil Diupdate', 'Success');
			return redirect('poli/');
		} else {
			Toastr::error('Data Gagal Diupdate', 'Error');
			return redirect('poli/');
		}
    }

    public function destroy($id_poli)
    {
        $poli = poli::find($id_poli);
		$poli->jadwal()->delete();
        $poli->delete();
		Toastr::success('Data Berhasil Dihapus', 'Success');
        return back();
    }

}
