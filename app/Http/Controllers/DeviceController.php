<?php

namespace App\Http\Controllers;
use App\Models\Device;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //echo "API Device";

        $user = DB::table('devices')->latest('created_at')->first();
        if (isset($user->sensor)){
            $last_id = $user->id_pasien;
        }else{
            $last_id = "";
        }

        if (isset($_GET['sensor'])){
            $val = $_GET['sensor'];
            
            $device = Device::create([
                'sensor' => floatval($val),
                'id_pasien' => $last_id
            ]);

            if($device->save())
            {
                echo "x*berhasil*x";
            }else{
                echo "x*gagal*x";
            }
        }else{
            echo "x*salah param*x";
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'sensor' => 'required'
        ]);

        $device = Device::create([
            'sensor' => floatval($request->sensor)
        ]);

        if($device->save())
        {
            echo "x*berhasil*x";
        }else{
            echo "x*gagal*x";
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function forklifts(){
        echo "string";
    }
}
