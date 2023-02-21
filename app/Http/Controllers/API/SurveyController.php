<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use App\Models\Station;
use App\Models\Surveyquestion;
use App\Models\Survey;
use DB;

class SurveyController extends BaseController
{
    
    public function survey_stations(){

        $user_id = auth('sanctum')->user()->id;
        
        if(isset($_GET['lang']))
        $lang = $_GET['lang'];
        else
        $lang="en";

        $count = 0;
        $total_completed = 0;
        $total_pending = 0;

        $data = array();
        $datas = User::select('stations')->where('id',$user_id)->first();
        
        if($datas)
        {
            $stations = $datas->stations;
            $stations = explode(",",$stations);
        }
        
        foreach($stations as $row)
        {
            if($lang=="en")
            $data[$count]['station_details'] = Station::select('id','station_code','station_name','station_name_ar','region','phone','image','lat','lng','address')->where('id',$row)->first();
            else if($lang=="ar")
            $data[$count]['station_details'] = Station::select('id','station_code','station_name_ar as station_name','region','phone','image','lat','lng','address_ar as address')->where('id',$row)->first(); 
            
            $status = Survey::where('status','Completed')->where('station',$row)->where('supervisor',$user_id)->where('date',date('Y-m-d'))->first();
            if(!empty($status))
            $data[$count]['survey_status'] = "Already Submitted";
            else
            $data[$count]['survey_status'] = "Not Submitted";
            $count++;
        }
        
        return response()->json($data);

    }
        
    public function survey_stations_new(){

        
        $user_id = auth('sanctum')->user()->id;
       
       
        $lat2 = $_GET['latitude'];
        $lon2 = $_GET['longitude'];
        
       
        $sqlDistance = DB::raw('( 111.045 * acos( cos( radians(' . $lat2 . ') ) 
        * cos( radians(lat ) ) 
        * cos( radians(lng ) 
        - radians(' . $lon2  . ') ) 
        + sin( radians(' . $lat2 . ') ) 
        * sin( radians(lat ) ) ) )');

        
        if(isset($_GET['lang']))
        $lang = $_GET['lang'];
        else
        $lang="en";

        $count = 0;
        $total_completed = 0;
        $total_pending = 0;

        $data = array();
        $datas = User::select('stations')->where('id',$user_id)->first();
        
        
        if($datas)
        {
            $stations = $datas->stations;
            $stations = explode(",",$stations);
        }
        
        foreach($stations as $row)
        {
            if($lang=="en"){
            $fetch = Station::select('id','station_code','station_name','station_name_ar','region','phone','image','lat','lng','address')->selectRaw("{$sqlDistance} AS distance")->orderBy('distance','ASC')->where('id',$row)->first();
    
            $list = array();
            $i=0;

      
        if($fetch)
        {
            
            $lat1 = (float)$fetch->lat;
            $lon1 = (float)$fetch->lng;
                 
            $theta = $lon1 - $lon2;
            $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
            $dist = acos($dist);
            $dist = rad2deg($dist);
            $miles = $dist * 60 * 1.1515;
            $distance = $miles * 1.609344;
            $distance = number_format($distance,3); 
            
            if((float)$distance <1) {
             
            $list[$i]['id'] = $fetch->id;
            $list[$i]['station_code'] = $fetch->station_code;
            $list[$i]['station_name'] = $fetch->station_name;
            
            $list[$i]['station_name_ar'] = $fetch->station_name_ar;
            $list[$i]['region'] = $fetch->region;
            $list[$i]['phone'] = $fetch->phone;
            
            $list[$i]['lat'] = $fetch->lat;
            $list[$i]['lng'] = $fetch->lng;
            $list[$i]['address'] = $fetch->address;
            $list[$i]['distance'] = (float)$distance; 
            
            $i++;

            }
            
           if(count($list) > 0){
               
                $data[$count]['station_details'] = $list;
                $count++;
           }
           
        }
            
    
        }
            else if($lang=="ar"){
                
                $fetch = Station::select('id','station_code','station_name_ar as station_name','region','phone','image','lat','lng','address_ar as address')->selectRaw("{$sqlDistance} AS distance")->orderBy('distance','ASC')->where('id',$row)->first(); 
                $list = array();
                $i=0;

      
        if($fetch)
        {
            $lat1 = (float)$fetch->lat;
            $lon1 = (float)$fetch->lng;
                 
            $theta = $lon1 - $lon2;
            $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
            $dist = acos($dist);
            $dist = rad2deg($dist);
            $miles = $dist * 60 * 1.1515;
            $distance = $miles * 1.609344;
            $distance = number_format($distance,3); 
            if((float)$distance <1) {
                
            $list[$i]['id'] = $fetch->id;
            $list[$i]['station_code'] = $fetch->station_code;
            $list[$i]['station_name'] = $fetch->station_name;
            
            $list[$i]['station_name_ar'] = $fetch->station_name_ar;
            $list[$i]['region'] = $fetch->region;
            $list[$i]['phone'] = $fetch->phone;
            
            $list[$i]['lat'] = $fetch->lat;
            $list[$i]['lng'] = $fetch->lng;
            $list[$i]['address'] = $fetch->address;
            $list[$i]['distance'] = (float)$distance; 
            $i++;

            }
           if(count($list) > 0){
                $data[$count]['station_details'] = $list;
            $count++;
           }
           
        }
            
           
            }
            else{
                
            }
           
        }
        
        
        return response()->json($data);

    }
        
        
    public function survey_questions(){
            
        if(isset($_GET['lang']))
        $lang = $_GET['lang'];
        else
        $lang="en";
        
        $question_list = array();
        
        $login_type = auth('sanctum')->user()->login_type;
        
        if($login_type=="Station Supervisor")
        {
            $station_id = $_GET['station_id'];
             
            $qstn_lists = Station::select('questions')->where('id',$station_id)->first();
        
            if($qstn_lists)
            $qstn_list = $qstn_lists->questions;
            $n=0;
            
            $qstns = explode(',', $qstn_list);
            foreach($qstns as $row1){
                $question_list[$n]=$row1;
                $n++;
            }
            
            
            if($lang=="en"){
            
                $data_qstns = Surveyquestion::select('question_category')->whereIn('id',$question_list)->groupBy('question_category')->get();
                
                $data_questions = array();
                foreach($data_qstns as $row)
                {
                    $data_questions[$row->question_category] = Surveyquestion::select('id','question_category','question_type','question','response1','response2','created_at','updated_at')->where('question_category',$row->question_category)->whereIn('id',$question_list)->get();
                }
            }
            
            else if($lang=="ar")
            {
                $data_qstns = Surveyquestion::select('question_category_ar')->whereIn('id',$question_list)->groupBy('question_category_ar')->get();
                $data_questions = array();
                foreach($data_qstns as $row)
                {
                    $data_questions[$row->question_category_ar] = Surveyquestion::select('id','question_category_ar as question_category','question_type','question_ar as question','response1_ar as response1','response2_ar as response2','created_at','updated_at')->where('question_category_ar',$row->question_category_ar)->whereIn('id',$question_list)->get();
                }    
            }
        }
        
        return response()->json($data_questions);

    }
    
    public function survey_count()
    {
        $user_id = auth('sanctum')->user()->id;
            
        $stations = array();
        $stations_list = User::select('stations')->where('id',$user_id)->first();
        
        if($stations_list)
        $stations = $stations_list->stations;
        $stations = explode(",",$stations);
            
        $station_count = count($stations);
        
        $today = date("Y-m-d");
            
        $data['count_completed'] = Survey::where('status',"Completed")->where('supervisor',$user_id)->whereIn('station',$stations)->where('date',$today)->groupBy('station')->get(); 
            
        $count_completed = count($data['count_completed']);        
        $count_pending = $station_count-$count_completed;
            
        $data['count_pending'] = $count_pending;
        $data['count_completed'] = $count_completed;
        return response()->json($data);
    }
    
    public function add_survey(Request $request)
    {
            
        $user_id = auth('sanctum')->user()->id;

        $login_type = auth('sanctum')->user()->login_type;
        
        if($login_type=="Station Supervisor")
        $type = 0;
        
    	$station_id = $request->station_id;
    	    
    	$status = "Completed";
    	$supervisor = $user_id;
    	$added_date = date("Y-m-d");
    	    
    	    
    	$data= Survey::where('status','Completed')->where('station',$station_id)->where('supervisor',$user_id)->where('date',$added_date)->orderBy('surveys.id','DESC')->get();
       
    	if(count($data) == 0){
    	    
    	$answer = $request->survey_response;
    	    
    	$survey_no = rand(111111111111111,999999999999999);
        $survey_no = "#".$survey_no;
        
        $suvey = Survey::create([
    	        'survey_response'=>$answer,
    	        'station'=>$station_id,
    	        'supervisor'=>$user_id,
    	        'status'=>$status,
    	        'date'=>$added_date,
    	        'survey_no' => $survey_no,
    	        'status'=>$status,
                'type'=>$type
    	        ]);
    	        return response()->json($survey_no);
    	}
    	
    	else{
    	    
    	    $status = "Already submitted";
    	    return response()->json($status);
    	}
    	
            
    }
    
    public function completed_survey()
    {
        $user_id = auth('sanctum')->user()->id;
            
        $today = date("Y-m-d");
            
        if(isset($_GET['lang']))
        $lang = $_GET['lang'];
        else
        $lang="en";


            
        if($lang=="en")
        {

            $data= Survey::select('surveys.id','supervisor','station','survey_response','survey_no','date','status','surveys.created_at','surveys.updated_at','station_code','station_name','station_name_ar','region','phone','image','lat','lng','address')->join('stations', 'surveys.station', '=', 'stations.id')->where('status','Completed')->where('supervisor',$user_id);

        }

        else if($lang=="ar")
        {
            $data= Survey::select('surveys.id','supervisor','station','survey_response','survey_no','date','status','surveys.created_at','surveys.updated_at','station_code','station_name_ar as station_name','region','phone','image','lat','lng','address_ar as address')->join('stations', 'surveys.station', '=', 'stations.id')->where('status','Completed')->where('supervisor',$user_id);

        }
        
        if(isset($_GET['startdate']) && isset($_GET['enddate'])){

            $startdate=$_GET['startdate'];
            $enddate=$_GET['enddate'];
            $data = $data->whereBetween('date', [$startdate, $enddate]);

        }

        $data = $data->orderBy('surveys.id','DESC')->get();
           
        return response()->json($data);
    }
    
    
}
