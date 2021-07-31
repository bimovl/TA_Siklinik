<?php

namespace App\Http\Controllers;
use App\Models\Jadwal;
use App\Models\Poli;
use App\Models\Dokter;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;


class JadwalController extends Controller
{
    public function index()
    {
    	$data = Jadwal::with('poli','dokter')->get(); 
    	//$dokter = Jadwal::with('dokter')->get(); 
    	return view('jadwal.index',compact('data'));
    }

    public function add()
    {
        $data = Poli::get(); //tambahan +
        $dokter = Dokter::get();
    	return view('jadwal.add',compact('data','dokter'));
    }

    public function store(Request $request)
    {
    	$request->validate([
    		'hari'=>'required',
		 	'id_dokter'=>'required',
		 	'id_poli'=>'required',
		 	'jam'=>'required'
		 ]);

		 $jadwal = new Jadwal;
		 $jadwal->hari= $request->hari;
		 $jadwal->id_dokter= $request->id_dokter;
		 $jadwal->id_poli= $request->id_poli;
		 $jadwal->jam= $request->jam;

		 if($jadwal->save())
		 {
		 Toastr::success('Data Berhasil Dimasukkan', 'Success');
		 return redirect('jadwal/');
	 } else {
		 Toastr::error('Data Gagal Dimasukkan', 'Error');
		 return redirect('jadwal/');
	 }
    }

    public function edit($id_jadwal)    { //,Request $request
        $poli = Poli::all();
        $dokter = Dokter::all();
    	$jadwal = Jadwal::with('poli')->findorfail($id_jadwal); //
    	return view('jadwal.edit',compact('jadwal','poli','dokter'));
    }

    public function update(Request $request)
    {
    	$request->validate([
		 	'hari'=>'required',
		 	'id_dokter'=>'required',
		 	'id_poli'=>'required',
		 	'jam'=>'required'
		 ]);
    	
    	$jadwal = jadwal::find($request->id_jadwal);
    	$jadwal->hari = $request->hari;
    	$jadwal->id_dokter = $request->id_dokter;
    	$jadwal->id_poli = $request->id_poli;
    	$jadwal->jam = $request->jam;
    	if($jadwal->save())
		{
		Toastr::success('Data Berhasil Diupdate', 'Success');
		return redirect('jadwal/');
	} else {
		Toastr::error('Data Gagal Diupdate', 'Error');
		return redirect('jadwal/');
	}
    }

    public function destroy($id_jadwal)
    {
    	$jadwal = jadwal::find($id_jadwal);
    	$jadwal->delete();
		Toastr::success('Data Berhasil Dihapus', 'Success');
    	return back();
    }
}
