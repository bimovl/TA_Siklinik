<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Paru;
use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\Pasien;
use Brian2694\Toastr\Facades\Toastr;


class ParuController extends Controller
{
    public function index()
    {	
		//$data = Device::all();
    	
       $pasien = Pasien::get(); //tambahan +
    	//return view('paru.index');
		return view('paru.index',compact('pasien'));
		
    }
    	
	public function store(Request $request)
    {
    	$this->validate($request, [
			'id_pasien'=>'required'
		]);

		echo $request->id_pasien;

		
        $pasien = Device::create([
			'id_pasien' => $request->id_pasien,
			'sensor' => 0
		]);
		   
	
		if($pasien->save())
		{
			echo "ok";
			return redirect('/paru/grafik');
		}else{
			echo "error";
			return redirect('/paru/grafik');
		}
		
    
	}
	public function grafik()
    {

		//$data = Device::all();
		//print_r($data);
    	//return view('paru.grafik',compact('data'));
		
		
    	$id_pasien = "";
    	if (isset($_GET['id_pasien'])) {
    		$id_pasien = $_GET['id_pasien'];
    	}

    	$user = DB::table('devices')->where('id_pasien', $id_pasien)->latest('created_at')->first();
    	if (isset($user->sensor)){
    		$last_id = $user->id_pasien;
    		$sensor = $user->sensor;
    	}else{
    		$sensor = 0;
    		$last_id = "";
    	}

    	if ($last_id = $id_pasien) {				
    		$pasien = Device::create([
				'id_pasien' => $id_pasien,
				'sensor' => $sensor
			]);
			   
			$pasien->save();
    	}
	    	
	    $td = strtotime("today");
    	$today = date("Y-m-d H:i:s", $td);

		$sensor = DB::table('devices')->where([
			['id_pasien', $id_pasien], 
			['created_at', '>=', $today]
			])->select('sensor','created_at')->get();
		$nilai_sensor = [];
		$time = [];
		//$pasien = [];
		foreach($sensor as $per_data){
			array_push($nilai_sensor,$per_data->sensor);
			array_push($time,$per_data->created_at);
		}
		// print($nilai_sensor);
		return view('paru.grafik', compact('nilai_sensor','time','id_pasien'));
		
	}

	public function destroy()
    {
        $paru = Device::truncate();
        return redirect('paru');
    }
}