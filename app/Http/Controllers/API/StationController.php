<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use App\Models\Station;

class StationController extends BaseController
{
    public function assigned_stations()
    {

    	$user_id = auth('sanctum')->user()->id;

        $count = 0;
        
        if(isset($_GET['lang']))
        $lang = $_GET['lang'];
        else
        $lang="en";

        $data = array();
        $datas = User::select('stations')->where('id',$user_id)->first();
        
        if($datas){	
            
            $stations = $datas->stations;
            $stations = explode(",",$stations);
        
            foreach($stations as $row)
            {
                if($lang=="en")
                $data[$count]['station_details'] = Station::select('id','station_code','station_name','station_name_ar','region','phone','image','lat','lng','address')->where('id',$row)->get();
                else if($lang=="ar")
                $data[$count]['station_details'] = Station::select('id','station_code','station_name_ar as station_name','region','phone','image','lat','lng','address')->where('id',$row)->get();
                $count++;
            }
        
        }
        
        else
        $data = [];
        
        return response()->json($data);

        }
}
