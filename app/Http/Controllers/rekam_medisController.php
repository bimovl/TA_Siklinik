<?php

namespace App\Http\Controllers;

use App\Models\Rekam_medis;
use App\Models\Dokter;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Brian2694\Toastr\Facades\Toastr;


class rekam_medisController extends Controller
{

    public function index()
    {
        $data = Rekam_medis::with('dokter', 'pasien')->get();
        return view('rekam_medis.index', compact('data'));
    }

    public function detail($id_rekammedis)
    {
        $data = Rekam_medis::findorfail($id_rekammedis);
        return view('rekam_medis.detail', compact('data'));
    }

    public function add()
    {
        $pasien = Pasien::get(); //tambahan +
        $dokter = Dokter::get();
        return view('rekam_medis.add', compact('dokter', 'pasien'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tgl_periksa' => 'required',
            'id_pasien' => 'required',
            'id_dokter' => 'required',
            'tb' => 'required',
            'bb' => 'required',
            'tensi' => 'required',
            'diagnosa' => 'required',
            'keluhan' => 'required',
            'keterangan' => 'required'
        ]);


        $rekam_medis = Rekam_medis::create([
            'tgl_periksa' => $request->tgl_periksa,
            'id_pasien' => $request->id_pasien,
            'id_dokter' => $request->id_dokter,
            'tb' => $request->tb,
            'bb' => $request->bb,
            'tensi' => $request->tensi,
            'diagnosa' => $request->diagnosa,
            'keluhan' => $request->keluhan,
            'keterangan' => $request->keterangan,
        ]);

        if ($rekam_medis->save()) {
			Toastr::success('Data Berhasil Dimasukkan', 'Success');
			return redirect('rekam_medis/');
		} else {
			Toastr::error('Data Gagal Dimasukkan', 'Error');
			return redirect('rekam_medis/');
		}
    }

    public function edit($id_rekammedis, Request $request)
    {
        $dokter = Dokter::all();
        $pasien = Pasien::all();
        $data = rekam_medis::find($id_rekammedis);
        return view('rekam_medis.edit', compact('dokter', 'pasien', 'data'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'tgl_periksa' => 'required',
            'id_pasien' => 'required',
            'id_dokter' => 'required',
            'tb' => 'required',
            'bb' => 'required',
            'tensi' => 'required',
            'diagnosa' => 'required',
            'keluhan' => 'required',
            'keterangan' => 'required'
        ]);

        $rekam_medis = rekam_medis::find($request->id_rekammedis);
        $rekam_medis->tgl_periksa = $request->tgl_periksa;
        $rekam_medis->id_pasien = $request->id_pasien;
        $rekam_medis->id_dokter = $request->id_dokter;
        $rekam_medis->tb = $request->tb;
        $rekam_medis->bb = $request->bb;
        $rekam_medis->tensi = $request->tensi;
        $rekam_medis->diagnosa = $request->diagnosa;
        $rekam_medis->keluhan = $request->keluhan;
        $rekam_medis->keterangan = $request->keterangan;

        if ($rekam_medis->save()) {
			Toastr::success('Data Berhasil Diupdate', 'Success');
			return redirect('rekam_medis/');
		} else {
			Toastr::error('Data Gagal Diupdate', 'Error');
			return redirect('rekam_medis/');
		}
    }

    public function destroy($id_rekammedis)
    {
        $rekam_medis = rekam_medis::find($id_rekammedis);
        $rekam_medis->delete();
        Toastr::success('Data Berhasil Dihapus', 'Success');
        return back();
    }
}
