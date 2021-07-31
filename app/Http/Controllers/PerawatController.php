<?php

namespace App\Http\Controllers;
use App\Models\Perawat;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;


class PerawatController extends Controller
{
    public function index()
    {
    	$data = Perawat::all();
    	return view('perawat.index',compact('data'));
    }

    public function add()
    {
    	return view('perawat.add');
    }

    public function store(Request $request)
	{
		 $request->validate([
            'nama_perawat'=>'required',
            'jeniskelamin'=>'required',
            'username'=>'required',
            'password'=>'required',
		 	'level'=>'required'
		 ]);

		 $perawat = new Perawat;
		 $perawat->nama_perawat= $request->nama_perawat;
		 $perawat->jeniskelamin= $request->jeniskelamin;
		 $perawat->username= $request->username;
         $perawat->password= $request->password;
         $perawat->level= $request->level;
		 if($perawat->save())
		 {
			Toastr::success('Data Berhasil Dimasukkan', 'Success');
			return redirect('perawat/');
		} else {
			Toastr::error('Data Gagal Dimasukkan', 'Error');
			return redirect('perawat/');
		}

	}

	public function edit($id_perawat,Request $request)
    {
    	$perawat = Perawat::find($id_perawat);
    	return view('perawat.edit',['data'=>$perawat]);
    }

    public function update(Request $request)
    {
    	$request->validate([
            'nama_perawat'=>'required',
            'jeniskelamin'=>'required',
            'username'=>'required',
            'password'=>'required',
		 	'level'=>'required'
		 ]);
    	
		 $perawat = Perawat::find($request->id_perawat);
		 $perawat->nama_perawat= $request->nama_perawat;
		 $perawat->jeniskelamin= $request->jeniskelamin;
		 $perawat->username= $request->username;
         $perawat->password= $request->password;
         $perawat->level= $request->level;
		 if($perawat->save())
		 {
			Toastr::success('Data Berhasil Diupdate', 'Success');
			return redirect('perawat/');
		} else {
			Toastr::error('Data Gagal DIupdate', 'Error');
			return redirect('perawat/');
		}
    }

	public function destroy($id_perawat)
	{
		$perawat = perawat::find($id_perawat);
		$perawat->delete();
		Toastr::success('Data Berhasil Dihapus', 'Success');
		return back();
	}
}
