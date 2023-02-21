<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Station;
use App\Models\Role;
use Hash;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users'] = user::all();
        $data['roles'] = Role::all();
        $data['stations'] = Station::all();
        $data['managers'] = User::where('login_type','Manager')->get();
        $data['fmr_managers'] = User::where('login_type','Facility Manager')->get();
        $data['station_supervisors'] = User::where('login_type','Station Supervisor')->get();
        return view('users/users', ['data' => $data]);
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
         $request->validate([
        'firstname'       => 'required',
        'firstname_ar'       => 'required',
        'lastname'       => 'required',
        'lastname_ar'       => 'required',
        'email'       => 'required',
        'username'       => 'required',
        
        ]);
        
        
        if($request->input('login_type')=="Admin")
        $station = "";
        
        else
        $station = implode(",", $request->station);

        
        if($request->input('login_type')=="Facility Labour")
        $manager = $request->input('fmr_manager');
        
        else if($request->input('login_type')=="Station Supervisor")
        $manager = $request->input('manager');
        
        else
        $manager = "";

        if($request->file('imgfile'))
        {
           
            $image = $request->file('imgfile');
            $name = url('')."/uploads/".date('mdYHis').$image->getClientOriginalName();
            $destinationPath = base_path().'/public/uploads';
            $image->move($destinationPath, $name);

            if($request->password)
            {
            $user = User::updateOrCreate(['id' => $request->user_id], 
                ['firstname' => $request->firstname,
                'firstname_ar' => $request->firstname_ar,
                'lastname' => $request->lastname,
                'lastname_ar'=>$request->lastname_ar,
                'email'=>$request->email,
                'mobile'=>$request->phone,
                'login_type'=>$request->login_type,
                'username'=>$request->username,
                'password'=> Hash::make($request->password),
                'profile_pic'=> $name,
                'stations'=> $station,
                'manager'=> $manager
                
               ]);
            }
            else
            {
                $user = User::updateOrCreate(['id' => $request->user_id], 
                ['firstname' => $request->firstname,
                'firstname_ar' => $request->firstname_ar,
                'lastname' => $request->lastname,
                'lastname_ar'=>$request->lastname_ar,
                'email'=>$request->email,
                'mobile'=>$request->phone,
                'login_type'=>$request->login_type,
                'username'=>$request->username,
                'profile_pic'=> $name,
                'stations'=> $station,
                'manager'=> $manager
                
               ]);
            }
        }
         
        else
        
        {
            if($request->password){
            $user = User::updateOrCreate(['id' => $request->user_id], 
                ['firstname' => $request->firstname,
                'firstname_ar' => $request->firstname_ar,
                'lastname' => $request->lastname,
                'lastname_ar'=>$request->lastname_ar,
                'email'=>$request->email,
                'mobile'=>$request->phone,
                'login_type'=>$request->login_type,
                'username'=>$request->username,
                'password'=> Hash::make($request->password),
                'stations'=> $station,
                'manager'=> $manager
                
               ]);
            }
            else
            {
                $user = User::updateOrCreate(['id' => $request->user_id], 
                ['firstname' => $request->firstname,
                'firstname_ar' => $request->firstname_ar,
                'lastname' => $request->lastname,
                'lastname_ar'=>$request->lastname_ar,
                'email'=>$request->email,
                'mobile'=>$request->phone,
                'login_type'=>$request->login_type,
                'username'=>$request->username,
                'stations'=> $station,
                'manager'=> $manager
                
               ]);    
            }
        }
        

        return response()->json(['code'=>200, 'message'=>'User Created successfully','data' => $station], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return response()->json($user);
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
        $user = User::find($id)->delete();

        return response()->json(['success'=>'User Deleted successfully']);
    }

    public function change_station()
    {
        
        $manager_id=$_GET['manager_id'];//in case of employee,it is fmr_manager
        $data['stations'] = User::where('id',$manager_id)->get();

        $n=0;
        $stations = array();
        @$stations_list = explode(',', $data['stations'][0]->stations);
        foreach($stations_list as $row1){
         
             $stations[$n] = $row1;    
             $n++;
        }

        $data['station_list'] = Station::select('id','station_name','station_code')->whereIn('id',$stations)
                    ->get();
        return view('users/station_list',['data' => $data]); 
    }

    public function change_supervisor_station()
    {
        $manager_id=$_GET['manager_id'];

        $data['stations_manager'] = User::select('stations')->where('id',$manager_id)->get();

        $n=0;
        $stations = array();
        @$stations_list = explode(',', $data['stations_manager'][0]->stations);
        foreach($stations_list as $row1){
         
             $stations[$n] = $row1;    
             $n++;
        }

        $data['stations_supervisor'] = User::select('stations')->where('login_type','Station Supervisor')->get();
        
        $n=0;
        $stations_supervisor = array();
        foreach($data['stations_supervisor'] as $row3){
               $stations_list = explode(',', $row3->stations);
               foreach($stations_list as $row1){
         
                     $stations_supervisor[$n] = $row1;    
                     $n++;
               }
            
        }


        $data['station_list'] = Station::select('id','station_name','station_code')->whereIn('id',$stations)->whereNotIn('id',$stations_supervisor)
                    ->get();

        if(count($data['station_list'])>0)
        return view('Users/station_list',['data' => $data]);
        else
        echo "There is no station without supervisor under this manager";
    }
}
