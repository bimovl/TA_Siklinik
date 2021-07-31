<?php

namespace App\Http\Controllers;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;


class PasienController extends Controller
{
    public function index()
    {
    	$data = Pasien::all();
    	return view('pasien.index',compact('data'));
    }

    public function add()
    {
    	return view('pasien.add');
    }

    public function store(Request $request)
	{
		 $request->validate([
            'nama_pasien'=>'required',
            'jeniskelamin'=>'required',
            'tgl_lahir'=>'required',
            'tempat_lahir'=>'required',
		 	'alamat'=>'required',
            'pekerjaan'=>'required'
		 ]);

		 $pasien = new Pasien;
		 $pasien->nama_pasien= $request->nama_pasien;
		 $pasien->jeniskelamin= $request->jeniskelamin;
		 $pasien->tgl_lahir= $request->tgl_lahir;
         $pasien->tempat_lahir= $request->tempat_lahir;
         $pasien->alamat= $request->alamat;
         $pasien->pekerjaan= $request->pekerjaan;
		 if($pasien->save())
		 {
			Toastr::success('Data Berhasil Dimasukkan', 'Success');
			return redirect('pasien/');
		} else {
			Toastr::error('Data Gagal Dimasukkan', 'Error');
			return redirect('pasien/');
		}

	}

	public function edit($id_pasien,Request $request)
    {
    	$pasien = Pasien::find($id_pasien);
    	return view('pasien.edit',['data'=>$pasien]);
    }

    public function update(Request $request)
    {
    	$request->validate([
            'nama_pasien'=>'required',
            'jeniskelamin'=>'required',
            'tgl_lahir'=>'required',
            'tempat_lahir'=>'required',
		 	'alamat'=>'required',
            'pekerjaan'=>'required'
		 ]);
    	
		 $pasien = Pasien::find($request->id_pasien);
		 $pasien->nama_pasien= $request->nama_pasien;
		 $pasien->jeniskelamin= $request->jeniskelamin;
		 $pasien->tgl_lahir= $request->tgl_lahir;
         $pasien->tempat_lahir= $request->tempat_lahir;
         $pasien->alamat= $request->alamat;
         $pasien->pekerjaan= $request->pekerjaan;
		 if($pasien->save())
		 {
			Toastr::success('Data Berhasil Diupdate', 'Success');
			return redirect('pasien/');
		} else {
			Toastr::error('Data Gagal Diupdate', 'Error');
			return redirect('pasien/');
		}
    }

	public function destroy($id_pasien)
	{
		$pasien = pasien::find($id_pasien);
        $pasien->periksa()->delete();
		$pasien->resep()->delete();
		$pasien->device()->delete();
		$pasien->delete();
		Toastr::success('Data Berhasil Dihapus', 'Success');
		return back();
	}
}
