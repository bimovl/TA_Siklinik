<?php

namespace App\Http\Controllers;
use App\Models\Periksa;
use App\Models\Pasien;
use App\Models\Dokter;
use App\Models\Ruang;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;


class PeriksaController extends Controller
{
    public function index()
    {
    	$data = Periksa::with('dokter','pasien')->get();
    	return view('periksa.index',compact('data'));
    }
	public function detail($id_periksa)
    {
        $data = Periksa::findorfail($id_periksa);
        return view('periksa.detail', compact('data'));
    }

	public function detailselesai($id_periksa)
    {
        $data = Periksa::findorfail($id_periksa);
        return view('periksa.detailselesai', compact('data'));
    }

    public function add()
    {
        $pasien = Pasien::get(); //tambahan +
        $dokter = Dokter::get();
    	return view('periksa.add',compact('dokter','pasien'));
    }

    public function store(Request $request)
    {
    	$request->validate([
    		'tgl_periksa'=>'required',
			'status'=>'required',
		 	'id_pasien'=>'required',
		 	'id_dokter'=>'required'
		 ]);

		 $periksa = new Periksa;
		 $periksa->tgl_periksa= $request->tgl_periksa;
		 $periksa->id_pasien= $request->id_pasien;
		 $periksa->id_dokter= $request->id_dokter;

		 if($periksa->save())
		 {
			Toastr::success('Data Berhasil Dimasukkan', 'Success');
			return redirect('periksa/');
		} else {
			Toastr::error('Data Gagal Dimasukkan', 'Error');
			return redirect('periksa/');
		}
    }

    public function edit($id_periksa)    { 
        $pasien = Pasien::all();
        $dokter = Dokter::all();
    	$periksa = periksa::with('dokter', 'pasien')->findorfail($id_periksa); //
    	return view('periksa.edit',compact('periksa','dokter','pasien'));
    }

    public function update(Request $request)
    {
    	$request->validate([
		 	'tgl_periksa'=>'required',
			 'status'=>'required',
		 	'id_pasien'=>'required',
		 	'id_dokter'=>'required',
		 ]);
    	
    	$periksa = periksa::find($request->id_periksa);
    	$periksa->tgl_periksa = $request->tgl_periksa;
		$periksa->status = $request->status;
    	$periksa->id_pasien = $request->id_pasien;
    	$periksa->id_dokter = $request->id_dokter;
    	if($periksa->save())
		{
			Toastr::success('Data Berhasil Diupdate', 'Success');
			return redirect('periksa/');
		} else {
			Toastr::error('Data Gagal Diupdate', 'Error');
			return redirect('periksa/');
		}
    }

	public function antri()
    {
    	$data = Periksa::where('status', 'Antri') ->get();
    	return view('periksa.antri',compact('data'));
    }

	public function editantri($id_periksa)    { 
        $pasien = Pasien::all();
        $dokter = Dokter::all();
    	$periksa = periksa::with('dokter', 'pasien')->findorfail($id_periksa); //
    	return view('periksa.editantri',compact('periksa','dokter','pasien'));
    }

    public function updateantri(Request $request)
    {
    	$request->validate([
		 	'tgl_periksa'=>'required',
			 'status'=>'required',
		 	'id_pasien'=>'required',
		 	'id_dokter'=>'required',
		 ]);
    	
    	$periksa = periksa::find($request->id_periksa);
    	$periksa->tgl_periksa = $request->tgl_periksa;
		$periksa->status = $request->status;
    	$periksa->id_pasien = $request->id_pasien;
    	$periksa->id_dokter = $request->id_dokter;
    	if($periksa->save())
		{
			Toastr::success('Data Berhasil Diupdate', 'Success');
			return redirect('periksa/antri');
		} else {
			Toastr::error('Data Gagal Diupdate', 'Error');
			return redirect('periksa/antri');
		}
    }

	public function cekup()
    {
    	$data = Periksa::where('status', 'Check Up') ->get();
    	return view('periksa.cekup',compact('data'));
    }
	
	public function editcekup($id_periksa)    { 
        $pasien = Pasien::all();
        $dokter = Dokter::all();
    	$periksa = periksa::with('dokter', 'pasien')->findorfail($id_periksa); //
    	return view('periksa.editcekup',compact('periksa','dokter','pasien'));
    }

    public function updatecekup(Request $request)
    {
    	$request->validate([
		 	'tgl_periksa'=>'required',
			 'status'=>'required',
		 	'id_pasien'=>'required',
		 	'id_dokter'=>'required',
		 ]);
    	
    	$periksa = periksa::find($request->id_periksa);
    	$periksa->tgl_periksa = $request->tgl_periksa;
		$periksa->status = $request->status;
    	$periksa->id_pasien = $request->id_pasien;
    	$periksa->id_dokter = $request->id_dokter;
    	if($periksa->save())
		{
			Toastr::success('Data Berhasil Diupdate', 'Success');
			return redirect('periksa/cekup');
		} else {
			Toastr::error('Data Gagal Diupdate', 'Error');
			return redirect('periksa/cekup');
		}
    }

	public function rawat()
    {
    	$data = Periksa::where('status', 'Rawat Inap') ->get();
    	return view('periksa.rawat',compact('data'));
    }
	
	public function editrawat($id_periksa)    { 
        $pasien = Pasien::all();
        $dokter = Dokter::all();
		$ruang = Ruang::all();
    	$periksa = periksa::with('dokter', 'pasien')->findorfail($id_periksa); //
    	return view('periksa.editrawat',compact('periksa','dokter','pasien', 'ruang'));
    }

    public function updaterawat(Request $request)
    {
    	$request->validate([
		 	'tgl_periksa'=>'required',
			 'status'=>'required',
		 	'id_pasien'=>'required',
		 	'id_dokter'=>'required',
			 'proses'=>'required',
			 'id_ruang',
			 'tgl_masuk',
			 'tgl_keluar'

		 ]);
    	
    	$periksa = periksa::find($request->id_periksa);
    	$periksa->tgl_periksa = $request->tgl_periksa;
		$periksa->status = $request->status;
    	$periksa->id_pasien = $request->id_pasien;
    	$periksa->id_dokter = $request->id_dokter;
		$periksa->proses = $request->proses;
		$periksa->id_ruang = $request->id_ruang;
		$periksa->tgl_masuk = $request->tgl_masuk;
		$periksa->tgl_keluar = $request->tgl_keluar;
    	if($periksa->save())
		{
			Toastr::success('Data Berhasil Diupdate', 'Success');
			return redirect('periksa/rawat');
		} else {
			Toastr::error('Data Gagal Diupdate', 'Error');
			return redirect('periksa/rawat');
		}
    }

	public function selesai()
    {
    	$data = Periksa::where('status', 'Selesai') ->get();
    	return view('periksa.selesai',compact('data'));
    }
	

    public function destroy($id_periksa)
    {
    	$periksa = periksa::find($id_periksa);
    	$periksa->delete();
		Toastr::success('Data Berhasil Dihapus', 'Success');
    	return back();
    }
}