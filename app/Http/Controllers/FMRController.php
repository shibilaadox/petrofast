<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FMR;
use App\Models\Station;
use App\Models\User;
use Auth;

class FMRController extends Controller
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

        $data['fmrs'] = FMR::select('issuetypes.id as issue_id','issuetypes.issue_type as issue_type_name','issuetypes.issue_type_ar','issuecategories.id as cat_id','category_name','category_name_ar','stations.id as stations_id','station_name','station_name_ar','f_m_r_s.id as fmr_id','category','f_m_r_s.issue_type','priority','notes','images','employee_notes','employee_images','f_m_r_s.created_at','f_m_r_s.updated_at','station_id','status','supervisor','deadline','report_num','fmr_manager','fmr_employee','date')->join('issuecategories', 'f_m_r_s.category', '=', 'issuecategories.id')->join('issuetypes', 'f_m_r_s.issue_type', '=', 'issuetypes.id')-> join('stations', 'f_m_r_s.station_id', '=', 'stations.id')->get();
        $data['stations'] = Station::all();
        
        $data['fmrs'] = FMR::select('issuetypes.id as issue_id','issuetypes.issue_type as issue_type_name','issuetypes.issue_type_ar','issuecategories.id as cat_id','category_name','category_name_ar','stations.id as stations_id','station_name','station_name_ar','f_m_r_s.id as fmr_id','category','f_m_r_s.issue_type','priority','notes','images','employee_notes','employee_images','f_m_r_s.created_at','f_m_r_s.updated_at','station_id','status','supervisor','deadline','report_num','fmr_manager','fmr_employee','date')->join('issuecategories', 'f_m_r_s.category', '=', 'issuecategories.id')->join('issuetypes', 'f_m_r_s.issue_type', '=', 'issuetypes.id')-> join('stations', 'f_m_r_s.station_id', '=', 'stations.id');

        if($login_type == "Facility Manager")
        {
            $data['stations'] = User::where('login_type','Facility Manager')->where('id',$user_id)->get();
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
            
            $data['fmrs'] = FMR::select('issuetypes.id as issue_id','issuetypes.issue_type as issue_type_name','issuetypes.issue_type_ar','issuecategories.id as cat_id','category_name','category_name_ar','stations.id as stations_id','station_name','station_name_ar','f_m_r_s.id as fmr_id','category','f_m_r_s.issue_type','priority','notes','images','employee_notes','employee_images','f_m_r_s.created_at','f_m_r_s.updated_at','station_id','status','supervisor','deadline','report_num','fmr_manager','fmr_employee','date')->join('issuecategories', 'f_m_r_s.category', '=', 'issuecategories.id')->join('issuetypes', 'f_m_r_s.issue_type', '=', 'issuetypes.id')-> join('stations', 'f_m_r_s.station_id', '=', 'stations.id')->where('fmr_manager',$user_id);
        }



        if($login_type == "Manager")
        {
            $data['stations'] = User::where('login_type','Manager')->where('id',$user_id)->get();
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
            
            
            $data['fmrs'] = FMR::select('issuetypes.id as issue_id','issuetypes.issue_type as issue_type_name','issuetypes.issue_type_ar','issuecategories.id as cat_id','category_name','category_name_ar','stations.id as stations_id','station_name','station_name_ar','f_m_r_s.id as fmr_id','category','f_m_r_s.issue_type','priority','notes','images','employee_notes','employee_images','f_m_r_s.created_at','f_m_r_s.updated_at','station_id','status','supervisor','deadline','report_num','fmr_manager','fmr_employee','date')->join('issuecategories', 'f_m_r_s.category', '=', 'issuecategories.id')->join('issuetypes', 'f_m_r_s.issue_type', '=', 'issuetypes.id')-> join('stations', 'f_m_r_s.station_id', '=', 'stations.id')->whereIn('supervisor',$ss);
        }

        if(session('login_type')=="Station Supervisor")
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
           
            $data['fmrs'] = FMR::select('issuetypes.id as issue_id','issuetypes.issue_type as issue_type_name','issuetypes.issue_type_ar','issuecategories.id as cat_id','category_name','category_name_ar','stations.id as stations_id','station_name','station_name_ar','f_m_r_s.id as fmr_id','category','f_m_r_s.issue_type','priority','notes','images','employee_notes','employee_images','f_m_r_s.created_at','f_m_r_s.updated_at','station_id','status','supervisor','deadline','report_num','fmr_manager','fmr_employee','date')->join('issuecategories', 'f_m_r_s.category', '=', 'issuecategories.id')->join('issuetypes', 'f_m_r_s.issue_type', '=', 'issuetypes.id')-> join('stations', 'f_m_r_s.station_id', '=', 'stations.id')->where('transport',0)->where('supervisor',$user_id);
        }

        if(isset($_GET['date_from']) && isset($_GET['date_to'])){
        $from_date=$_GET['date_from'];
        $to_date=$_GET['date_to'];
        $data['fmrs'] = $data['fmrs']->whereBetween('f_m_r_s.date', [$from_date, $to_date]);

        }

        
        if(isset($_GET['station']) && $_GET['station']!="" && $_GET['station']!="All"){
        $data['fmrs'] = $data['fmrs']->where('f_m_r_s.station_id',$_GET['station']);                       
        }

        if(isset($_GET['region']) && $_GET['region']!=""  && $_GET['region']!="All"){
        $data['fmrs'] = $data['fmrs']->where('stations.region',$_GET['region']);  
        }

        if(isset($_GET['status']) && $_GET['status']!=""  && $_GET['status']!="All"){
        $data['fmrs'] = $data['fmrs']->where('f_m_r_s.status',$_GET['status']);  
        }
        $data['fmrs'] = $data['fmrs']->orderBy('date','DESC')->get();
        
        return view('FMR/fmrs', ['data' => $data]);
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
    
    public function FMRDetails()
    {

        $id = $_GET['id'];
        $report_no = FMR::select('report_num','station_id','fmr_manager','supervisor','fmr_employee')->where('id',$id)->first();
        $data['report_no'] = $report_no->report_num;
        $station = $report_no->station_id;
        $data['station'] = Station::where('id',$station)->first();
        $supervisor = $report_no->supervisor;
        $data['supervisor'] = User::where('id',$supervisor)->first();
        $manager = $report_no->fmr_manager;
        $data['manager'] = User::where('id',$manager)->first();
        $employee = $report_no->fmr_employee;
        $data['employee'] = User::where('id',$employee)->first();
        $data['list'] = FMR::join('issuetypes', 'f_m_r_s.issue_type', '=', 'issuetypes.id')->join('issuecategories', 'f_m_r_s.category', '=', 'issuecategories.id')-> join('stations', 'f_m_r_s.station_id', '=', 'stations.id')->where('f_m_r_s.id',$id)->first();
        return view('FMR/fmr_details',['data'=>$data]);

    }
}
