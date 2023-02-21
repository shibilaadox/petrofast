<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Station;
use App\Models\FMR;
use App\Models\Survey;
use App\Models\User;
use Auth;
use DB;

class HomeController extends Controller
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

        $data['count_station'] = Station::count();
        $data['count_fmr'] = FMR::count();
        $data['count_surveys'] = Survey::count();
        $data['count_supervisors'] = User::where('login_type','Station Supervisor')->count();
        $data['new_users'] = User::orderBy('id','DESC')->take(6)->get();


        $user =  Auth::user();
        $login_type = $user->login_type;

        //if($login_type=="Admin"){

        $data['new_fmrs'] = FMR::select('f_m_r_s.id as fmr_id','category','issuetypes.issue_type','issuetypes.issue_type_ar','priority','notes','images','employee_notes','employee_images','f_m_r_s.created_at','station_id','status','supervisor','deadline','report_num','f_m_r_s.fmr_manager','f_m_r_s.fmr_employee','f_m_r_s.date','category_name','category_name_ar','station_code','station_name','station_name_ar','region','phone','image','lat','lng','address')->join('issuecategories', 'f_m_r_s.category', '=', 'issuecategories.id')->join('issuetypes', 'f_m_r_s.issue_type', '=', 'issuetypes.id')->join('stations', 'f_m_r_s.station_id', '=', 'stations.id')->orderBy('fmr_id','DESC')->take(4)->get();
        
        $data['fmr_new'] = FMR::where('status','New')->count();
        $data['fmr_ongoing'] = FMR::where('status','Ongoing')->count();
        $data['fmr_delayed'] = FMR::where('status','Delayed')->count();
        $data['fmr_assigned'] = FMR::where('status','Assigned')->count();
        $data['fmr_completed'] = FMR::where('status','Completed')->count();
        
        for ($i = 0; $i <= 5; $i++) 
        {
            $fmr[] = FMR::whereMonth('date',date("m", strtotime( date( 'Y-m-01' )." -$i months")))->count();
        }
        
        for ($j=5,$m=0; $j>=0,$m<=5; $j--,$m++) 
        {
        $result[$m]['label'] = date("F", strtotime( date( 'Y-m-01' )." -$j months"));
        $result[$m]['value'] = $fmr[$j]; 
        }


        $data['fmr'] = json_encode($result);
        
        for ($i = 0; $i <= 5; $i++) 
        {
            $monthly_survey[] = Survey::whereMonth('date',date("m", strtotime( date( 'Y-m-01' )." -$i months")))->count();
        }
        
        for ($j=5,$m=0; $j>=0,$m<=5; $j--,$m++) 
        {
            $result1[$m]['values'] = $monthly_survey[$j]; 
            $result1[$m]['text'] = date("F", strtotime( date( 'Y-m-01' )." -$j months"));
        }
    
        $data['monthly_survey'] = json_encode($result1);
        
        $data['survey_station'] = Survey::join('stations', 'surveys.station', '=', 'stations.id')->select(DB::raw("count(station) as survey_count"),'stations.*')
            ->groupBy('station')->orderBy('survey_count','DESC')->take(4)->get();
        
        $k=0;
        $data_srvy = array();
        foreach($data['survey_station'] as $row){
      
            $data_srvy[$k]['values'] = [$row->survey_count];
            $data_srvy[$k]['text'] = $row->station_name;
            
            $k++;
        }
        
        $data['survey_station_wise']= json_encode($data_srvy);
        
        return view('dashboardv1',['data'=>$data]);
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
}
