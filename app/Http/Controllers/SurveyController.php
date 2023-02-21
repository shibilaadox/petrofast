<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;
use App\Models\Station;
use App\Models\User;
use Auth;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user =  Auth::user();
        $login_type = $user->login_type;
        $user_id = $user->id;

        $data['stations'] = Station::all();
        $data['list'] = Survey::select('surveys.id as id','date','station_code','station_name','firstname','status')->join('stations', 'surveys.station', '=', 'stations.id')->join('users', 'surveys.supervisor', '=', 'users.id');
       //$data['list'] = $data['list']->orderBy('surveys.date','DESC')->where('type',0)->get();

        if($login_type=="Manager")
        {
            $data['stations'] = User::where('login_type','Manager')->where('id', $user_id)->get();
            $stations = $data['stations'][0]->stations;
            $stations = explode(",",$stations);
            $st = array();
            $i=0;
            foreach($stations as $row)
            {
                $st[$i] = $row;
                $i++;
            }

            $data['stations'] = Station::whereIn('id',$st)->get();

            $data['supervisors'] = User::select('id')->where('login_type','Station Supervisor')->where('manager', $user_id)->get();

            $ss = array();
            $i=0;
            foreach($data['supervisors'] as $row)
            {
                $ss[$i] = $row->id;
                $i++;
            }
            
            $data['list'] = Survey::select('surveys.id as id','date','station_code','station_name','firstname','status')->join('stations', 'surveys.station', '=', 'stations.id')->join('users', 'surveys.supervisor', '=', 'users.id')->whereIn('supervisor',$ss);
        }

        if($login_type == "Station Supervisor")
        {
            $data['stations'] = User::where('login_type','Station Supervisor')->where('id',$user_id)->get();
            $stations = $data['stations'][0]->stations;
            $stations = explode(",",$stations);
            $st = array();
            $i=0;
            foreach($stations as $row)
            {
                $st[$i] = $row;
                $i++;
            }
            $data['stations'] = Station::whereIn('id',$st)->get();
            
            $data['list'] = Survey::select('surveys.id as id','date','station_code','station_name','firstname','status')->join('stations', 'surveys.station', '=', 'stations.id')->join('users', 'surveys.supervisor', '=', 'users.id')->where('supervisor',$user_id);
        }
        
        if(isset($_GET['date_from']) && isset($_GET['date_to'])){
        $from_date=$_GET['date_from'];
        $to_date=$_GET['date_to'];
        $data['list'] = $data['list']->whereBetween('surveys.date', [$from_date, $to_date]);
        }
        
        if(isset($_GET['station']) && $_GET['station']!="" && $_GET['station']!="All"){
        $data['list'] = $data['list']->where('surveys.station',$_GET['station']);                       
        }

        if(isset($_GET['region']) && $_GET['region']!=""  && $_GET['region']!="All"){
        $data['list'] = $data['list']->where('stations.region',$_GET['region']);  
        }

        if(isset($_GET['status']) && $_GET['status']!=""  && $_GET['status']!="All"){
        $data['list'] = $data['list']->where('surveys.status',$_GET['status']);  
        }
        
        $data['list'] = $data['list']->orderBy('surveys.date','DESC')->where('type',0)->get();
        
        return view('survey/surveys',['data'=>$data]);
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
        //
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
    
    public function SurveyDetails()
    {

        $id = $_GET['id'];
        $survey_no = Survey::select('survey_no','station','supervisor')->where('id',$id)->first();
        @$data['survey_no'] = $survey_no->survey_no;
        $station = $survey_no->station;
        $data['station'] = Station::where('id',$station)->first();
        $supervisor = $survey_no->supervisor;
        $data['supervisor'] = User::where('id',$supervisor)->first();
        $data['list'] = Survey::where('id',$id)->get();
        @$data['date'] = $data['list'][0]->date;
        return view('survey/survey_details',['data'=>$data]);

    }
    
    public function carcare_survey()
    {

        $user =  Auth::user();
        $login_type = $user->login_type;
        $user_id = $user->id;

        $data['stations'] = Station::all();
        $data['list'] = Survey::select('surveys.id as id','date','station_code','station_name','firstname','status')->join('stations', 'surveys.station', '=', 'stations.id')->join('users', 'surveys.supervisor', '=', 'users.id');
        //$data['list'] = $data['list']->orderBy('surveys.date','DESC')->where('type',1)->get();

        if($login_type=="Car Care Manager")
        {
            $data['stations'] = User::where('login_type','Car Care Manager')->where('id', $user_id)->get();
            $stations = $data['stations'][0]->stations;
            $stations = explode(",",$stations);
            $st = array();
            $i=0;
            foreach($stations as $row)
            {
                $st[$i] = $row;
                $i++;
            }

            $data['stations'] = Station::whereIn('id',$st)->get();

            $data['carcaresupervisors'] = User::select('id')->where('login_type','Car Care Supervisor')->where('manager', $user_id)->get();

            $ss = array();
            $i=0;
            foreach($data['carcaresupervisors'] as $row)
            {
                $ss[$i] = $row->id;
                $i++;
            }
            
            $data['list'] = Survey::select('surveys.id as id','date','station_code','station_name','firstname','status')->join('stations', 'surveys.station', '=', 'stations.id')->join('users', 'surveys.supervisor', '=', 'users.id')->whereIn('supervisor',$ss);
        }

         
        if(isset($_GET['date_from']) && isset($_GET['date_to'])){
        $from_date=$_GET['date_from'];
        $to_date=$_GET['date_to'];
        $data['list'] = $data['list']->whereBetween('surveys.date', [$from_date, $to_date]);
        }
        
        if(isset($_GET['station']) && $_GET['station']!="" && $_GET['station']!="All"){
        $data['list'] = $data['list']->where('surveys.station',$_GET['station']);                       
        }

        if(isset($_GET['region']) && $_GET['region']!=""  && $_GET['region']!="All"){
        $data['list'] = $data['list']->where('stations.region',$_GET['region']);  
        }

        if(isset($_GET['status']) && $_GET['status']!=""  && $_GET['status']!="All"){
        $data['list'] = $data['list']->where('surveys.status',$_GET['status']);  
        }
        
        $data['list'] = $data['list']->orderBy('surveys.date','DESC')->where('type',1)->get();
        return view('survey/surveys',['data'=>$data]);
    }
}
