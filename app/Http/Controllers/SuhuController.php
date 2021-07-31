<?php

namespace App\Http\Controllers;
use App\Models\Suhu;
use Illuminate\Http\Request;
use App\Models\Dev;
use App\Models\Pasien;

class SuhuController extends Controller
{
    public function index()
    {	
        $pasien = Pasien::get(); //tambahan +
    	return view('suhu.index',compact('pasien'));

    }
    	
	public function store(Request $request)
    {
    	
		$request->validate([
		 	'id_pasien'=>'required'
		 ]);

		 $suhu = new Dev;
		 $suhu->id_pasien= $request->id_pasien;

		 if($suhu->save())
		 {
		 	return redirect('suhu/grafik')->with('status','Data Berhasil Dimasukkan');
		 }else{
		 	return redirect('suhu/grafik')->with('status','Data Gagal Dimasukkan');
		 }
		
    }
	public function grafik()
    {
		$data = Dev::all();
		$pasien = Dev::all();
    	return view('suhu.grafik',compact('data','pasien'));
	}
/*
	public function destroy($id)
    {
        $suhu = Dev::truncate();
        return redirect('suhu');
    }
    */

    public function destroy()
    {
        $suhu = Dev::truncate();
        return redirect('suhu');
    }

    public function hapus($id)
    {
	    $suhu = Dev::find($id);
		$suhu->delete();
		return back();
    }
}