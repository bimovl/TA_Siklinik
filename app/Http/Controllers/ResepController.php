<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use App\Models\Obat;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;


class ResepController extends Controller
{

	public function index()
	{
		$data = Resep::with('obat', 'pasien')->get(); //----Error
		//$data = DB::table('resep')->join('obat','resep.id_obat','=','obat.id_obat')->get(); 
		return view('resep.index', compact('data'));
	}

	public function add()
	{
		$obat = Obat::get(); //tambahan +
		$pasien = Pasien::get();
		return view('resep.add', compact('obat', 'pasien'));
	}

	public function store(Request $request)
	{
		$request->validate([
			'id_pasien' => 'required',
			'id_obat' => 'required',
			'aturan_minum' => 'required',
			'keterangan' => 'required'
		]);

		$resep = Resep::create([
			'id_pasien' => $request->id_pasien,
			'id_obat' => $request->id_obat,
			'aturan_minum' => $request->aturan_minum,
			'keterangan' => $request->keterangan,
		]);
		if ($resep->save()) {
			Toastr::success('Data Berhasil Dimasukkan', 'Success');
			return redirect('resep/');
		} else {
			Toastr::error('Data Gagal Dimasukkan', 'Error');
			return redirect('resep/');
		}
	}

	public function edit($id_resep, Request $request)
	{ //,Request $request
		$pasien = Pasien::all();
		$obat = Obat::all();
		$data = resep::find($id_resep);
		return view('resep.edit', compact('pasien', 'obat', 'data'));
	}

	public function update(Request $request)
	{
		$request->validate([
			'id_pasien' => 'required',
			'id_obat' => 'required',
			'aturan_minum' => 'required',
			'keterangan' => 'required'
		]);

		$resep = resep::find($request->id_resep);
		$resep->id_pasien = $request->id_pasien;
		$resep->id_obat = $request->id_obat;
		$resep->aturan_minum = $request->aturan_minum;
		$resep->keterangan = $request->keterangan;
		if ($resep->save()) {
			Toastr::success('Data Berhasil Diupdate', 'Success');
			return redirect('resep/');
		} else {
			Toastr::error('Data Gagal Diupdate', 'Error');
			return redirect('resep/');
		}
	}

	public function destroy($id_resep)
	{
		$resep = resep::find($id_resep);
		$resep->delete();
		Toastr::success('Data Berhasil Dihapus', 'Success');
		return back();
	}
}
