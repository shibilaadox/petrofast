<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use App\Models\FMR;
use App\Models\Survey;
use Carbon\Carbon;

class CommonController extends BaseController
{
    public function upload_image(Request $request)
    {

        if(!$request->hasFile('fileName')) {
            return response()->json(['upload_file_not_found'], 400);
        }

        $allowedfileExtension=['jpeg','jpg','png','JPEG','PNG'];
        $files = $request->file('fileName'); 
        $errors = [];

        
        $extension = $files->getClientOriginalExtension();

        $check = in_array($extension,$allowedfileExtension);

        if($check) {
                       
            $name = url('')."/public/uploads/".date('mdYHis').$files->getClientOriginalName();
            $destinationPath = base_path().'/public/uploads';
            $files->move($destinationPath, $name);
            
        } else {
            return response()->json(['invalid_file_format'], 422);
        }

        return response()->json($name);

    }
    
    public function get_report()
    {
        $user_id = auth('sanctum')->user()->id;
        $login_type = auth('sanctum')->user()->login_type;
            
        $data = array();
        $i=0;
            
        $stations = array();
        $stations_list = User::select('stations')->where('id',$user_id)->first();
            
        if($stations_list)
        $stations = $stations_list->stations;
            
        $stations = explode(",",$stations);
        $station_count = count($stations);
            
        if($login_type="Station Supervisor"){
            
            $completed_surveys_count = Survey::where('status',"Completed")->where('supervisor',$user_id)->where('date',date("Y-m-d"))->count();
            
            $pending_surveys = $station_count - $completed_surveys_count;
            $completed_surveys = (float)($completed_surveys_count / $station_count) * 100;
            
            $completed_surveys = round($completed_surveys,2);

            /*for ($i = 0; $i <= 5; $i++) 
            {
                $fmr_count_rev[] = FMR::where('supervisor',$user_id)->whereMonth('date',date("m", strtotime( date( 'Y-m-01' )." -$i months")))->count();
            }
            
            $size = sizeof($fmr_count_rev);

            for($i=$size-1; $i>=0; $i--){
                $fmr_count[] = $fmr_count_rev[$i];
            }*/
            
            $fmr_count = [14,21,42,26,53,10];
            
            $fmr_new = FMR::where('supervisor',$user_id)->whereBetween('date', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->where('status','New')->count();
            $fmr_ongoing = FMR::where('supervisor',$user_id)->whereBetween('date', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->where('status','Ongoing')->count();
            $fmr_delayed = FMR::where('supervisor',$user_id)->whereBetween('date', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->where('status','Delayed')->count();
            $fmr_assigned = FMR::where('supervisor',$user_id)->whereBetween('date', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->where('status','Assigned')->count();
            $fmr_completed = FMR::where('supervisor',$user_id)->whereBetween('date', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->where('status','Completed')->count();
            
            
            $datas[0]['title'] = "New";
            $datas[0]['count'] = 25;
           
            $datas[1]['title'] = "Ongoing";
            $datas[1]['count'] = 30;
            
            $datas[2]['title'] = "Delayed";
            $datas[2]['count'] = 18;
            
            $datas[3]['title'] = "Assigned";
            $datas[3]['count'] = 39;
            
            $datas[4]['title'] = "Completed";
            $datas[4]['count'] = 52;
            
            $completed_surveys = .40;
            $completed_cleanings = .55;
            
        }
          
        else if($login_type=="Facility Manager")
        {
                
            $completed_surveys_count = Survey::where('status',"Completed")->where('manager',$user_id)->where('date',date("Y-m-d"))->count();
            
            $pending_surveys = $station_count - $completed_surveys_count;
            $completed_surveys = (float)($completed_surveys_count / $station_count) * 100;
            
            $completed_surveys = round($completed_surveys,2);
            

            /*for ($i = 0; $i <= 5; $i++) 
            {
                $fmr_count_rev[] = FMR::where('fmr_manager',$user_id)->whereMonth('date',date("m", strtotime( date( 'Y-m-01' )." -$i months")))->count();
            }
            
            $size = sizeof($fmr_count_rev);

            for($i=$size-1; $i>=0; $i--){
                $fmr_count[] = $fmr_count_rev[$i];
            }*/
            
            $fmr_count = [14,21,42,26,53,10];
            
            $fmr_new = FMR::where('fmr_manager',$user_id)->whereBetween('date', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->where('status','New')->count();
            $fmr_ongoing = FMR::where('fmr_manager',$user_id)->whereBetween('date', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->where('status','Ongoing')->count();
            $fmr_delayed = FMR::where('fmr_manager',$user_id)->whereBetween('date', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->where('status','Delayed')->count();
            $fmr_assigned = FMR::where('fmr_manager',$user_id)->whereBetween('date', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->where('status','Assigned')->count();
            $fmr_completed = FMR::where('fmr_manager',$user_id)->whereBetween('date', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->where('status','Completed')->count();
            
            
            $datas[0]['title'] = "New";
            $datas[0]['count'] = $fmr_new;
           
            $datas[1]['title'] = "Ongoing";
            $datas[1]['count'] = 30;
            
            $datas[2]['title'] = "Delayed";
            $datas[2]['count'] = 18;
            
            $datas[3]['title'] = "Assigned";
            $datas[3]['count'] = 39;
            
            $datas[4]['title'] = "Completed";
            $datas[4]['count'] = 52;
            
            $completed_surveys = .40;
            $completed_cleanings = .55;
            
        }
            
        $data['completed_surveys'] = $completed_surveys;
        $data['fmr_count'] = $fmr_count;
        $data['fmr_todays_count'] = $datas;
            
        return response()->json($data);
    }
 
}
