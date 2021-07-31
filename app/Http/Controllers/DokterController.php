<?php

namespace App\Http\Controllers;
use App\Models\Dokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Brian2694\Toastr\Facades\Toastr;


class DokterController extends Controller
{
    public function index()
    {
    	$data = Dokter::all();
    	return view('dokter.index',compact('data'));
    }

    public function detail($id_dokter)
    {
        $data = Dokter::findorfail($id_dokter);
        return view('dokter.detail',compact('data'));
    }

	public function add()
    {
    	return view('dokter.add');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
		 	'nama_dokter'=>'required',
            'jeniskelamin'=>'required',
            'no_telp'=>'required',
		 	'alamat'=>'required',
            'institusi'=>'required',
            'jenjang'=>'required',
            'spesialis'=>'required',
            'tahun_lulus'=>'required'
		 ]);



		 $dokter = Dokter::create([
		 'nama_dokter'=> $request->nama_dokter,
         'jeniskelamin'=> $request->jeniskelamin,
         'no_telp'=> $request->no_telp,
		 'alamat'=> $request->alamat,
         'institusi'=> $request->institusi,
         'jenjang'=> $request->jenjang,
         'spesialis'=> $request->spesialis,
         'tahun_lulus'=> $request->tahun_lulus
     ]);

		 if($dokter->save())
		 {
            Toastr::success('Data Berhasil Dimasukan', 'Success');
            return redirect('dokter/');
        } else {
            Toastr::error('Data Gagal Dimasukan', 'Error');
            return redirect('dokter/');
        }
    }

    public function edit($id_dokter,Request $request)
    {
    	$data = dokter::find($id_dokter);
    	return view('dokter.edit',compact('data'));
    }

    public function update(Request $request)
    {
    	$request->validate([
		 	'nama_dokter'=>'required',
            'jeniskelamin'=>'required',
            'no_telp'=>'required',
            'alamat'=>'required',
            'institusi'=>'required',
            'jenjang'=>'required',
            'spesialis'=>'required',
            'tahun_lulus'=>'required'
		 ]);
    	
    	$dokter = dokter::find($request->id_dokter);
    	$dokter->nama_dokter= $request->nama_dokter;
        $dokter->jeniskelamin= $request->jeniskelamin;
        $dokter->no_telp= $request->no_telp;
        $dokter->alamat= $request->alamat;
        $dokter->institusi= $request->institusi;
        $dokter->jenjang= $request->jenjang;
        $dokter->spesialis= $request->spesialis;
        $dokter->tahun_lulus= $request->tahun_lulus;    	

    	if($dokter->save())
		 {
            Toastr::success('Data Berhasil Diupdate', 'Success');
            return redirect('dokter/');
        } else {
            Toastr::error('Data Gagal Diupdate', 'Error');
            return redirect('dokter/');
        }
    }

    public function destroy($id_dokter)
    {
        $dokter = dokter::find($id_dokter);
        $dokter->jadwal()->delete(); //biar yang di jadwal ikut terhapus
        $dokter->periksa()->delete();
        $dokter->delete();
        Toastr::success('Data Berhasil Dihapus', 'Success');
        return back();
    }

}
