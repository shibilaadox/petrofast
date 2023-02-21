<?php namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use App\Models\Station;
use App\Models\Issuetype;
use App\Models\Issuecategory;
use App\Models\FMR;
use App\Models\Firebase;

class FMRController extends BaseController
{
    public function fmr_stations()
    {
        $user_id = auth('sanctum')->user()->id;

        $count = 0;

        if (isset($_GET['lang'])) {
            $lang = $_GET['lang'];
        } else {
            $lang = 'en';
        }

        $data = [];
        $datas = User::select('stations')
            ->where('id', $user_id)
            ->get();

        @$stations = $datas[0]->stations;
        $stations = explode(',', $stations);

        $today = date('Y-m-d');

        foreach ($stations as $row) {
            
            if ($lang == 'en') {
                $data[$count]['station_details'] = Station::select('id', 'station_code', 'station_name', 'station_name_ar', 'region', 'phone', 'image', 'lat', 'lng', 'address')
                    ->where('id', $row)
                    ->first();
            } elseif ($lang == 'ar') {
                $data[$count]['station_details'] = Station::select('id', 'station_code', 'station_name_ar as station_name', 'region', 'phone', 'image', 'lat', 'lng', 'address_ar as address')
                    ->where('id', $row)
                    ->first();
            }

            $count_new = FMR::where('status', 'New')
                ->where('station_id', $row)
                ->where('supervisor', $user_id)
                ->count();
            $data[$count]['count_new'] = $count_new;

            $count_assigned = FMR::where('status', 'Assigned')
                ->where('station_id', $row)
                ->where('supervisor', $user_id)
                ->count();
            $data[$count]['count_assigned'] = $count_assigned;

            $count_ongoing = FMR::where('status', 'Ongoing')
                ->where('station_id', $row)
                ->where('supervisor', $user_id)
                ->count();
            $data[$count]['count_ongoing'] = $count_ongoing;

            $count_delay = FMR::where('status', 'Delayed')
                ->where('station_id', $row)
                ->where('supervisor', $user_id)
                ->count();
            $data[$count]['count_delay'] = $count_delay;

            $count++;
        }

        return response()->json($data);
    }

    public function issue_type()
    {
        $category = $_GET['category'];
        $data = Issuetype::where('issue_category', $category)->get();
        return response()->json($data);
    }

    public function issue_category()
    {
        $data = Issuecategory::all();
        return response()->json($data);
    }

    //Adding FMR
    public function add_fmr(Request $request)
    {
        $user_id = auth('sanctum')->user()->id;

        $category = $request->category;
        $type = $request->issue_type;
        $priority = $request->priority;
        $notes = $request->notes;
        $images = $request->images;
        $station_id = $request->station_id;
        $status = 'New';

        $report_num = rand(1111111111, 9999999999);
        $report_num = '#' . $report_num;
        $today = date('Y-m-d');

        $fmr_manager = User::select('id', 'email')
            ->where('login_type', 'Facility Manager')
            ->whereRaw('find_in_set(' . $station_id . ',stations)')
            ->first();

        if ($fmr_manager) {
            $fmr_manager = $fmr_manager->id;
            //$fmr_manager_email = $fmr_manager->email;
        }

        $fmr = FMR::create([
            'category' => $category,
            'issue_type' => $type,
            'priority' => $priority,
            'notes' => $notes,
            'images' => $images,
            'station_id' => $station_id,
            'supervisor' => $user_id,
            'fmr_manager' => $fmr_manager,
            'status' => $status,
            'report_num' => $report_num,
            'date' => $today,
            
        ]);


        $notification = 'A new FMR is created';
        $firebase_token = Firebase::where('user_id', $fmr_manager)->first();

        if ($firebase_token) {
            $token_val = $firebase_token->token_val;
            $this->sendPushNotification($token_val, $notification);
        }

        /*$message="A new FMR is created";
        $subject = "FMR Creation";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        mail($fmr_manager_email,$subject,$message,$headers);*/

        return response()->json($report_num);
    }

    public function fmr_count()
    {
        $count_new = 0;
        $count_assigned = 0;
        $count_ongoing = 0;
        $count_delay = 0;

        $user_id = auth('sanctum')->user()->id;

        $today = date('Y-m-d');

        $count_new = FMR::where('status', 'New')
            ->where('supervisor', $user_id)
            ->count();
        $data['count_new'] = $count_new;

        $count_assigned = FMR::where('status', 'Assigned')
            ->where('supervisor', $user_id)
            ->count();
        $data['count_assigned'] = $count_assigned;

        $count_ongoing = FMR::where('status', 'Ongoing')
            ->where('supervisor', $user_id)
            ->count();
        $data['count_ongoing'] = $count_ongoing;

        $count_delay = FMR::where('status', 'Delayed')
            ->where('supervisor', $user_id)
            ->count();
        $data['count_delay'] = $count_delay;

        return response()->json($data);
    }

    //To get the fmr according to the status
    public function fmr_status()
    {
        $user_id = auth('sanctum')->user()->id;

        $status = $_GET['status'];
        $id = $_GET['station_id'];

        $today = date('Y-m-d');

        if (isset($_GET['lang'])) {
            $lang = $_GET['lang'];
        } else {
            $lang = 'en';
        }

        if ($status == 'New') {
            
            if ($lang == 'en') {
                $data['fmr_details'] = FMR::select('f_m_r_s.id', 'category', 'issuetypes.issue_type', 'priority', 'notes', 'images', 'employee_notes', 'employee_images', 'f_m_r_s.created_at', 'f_m_r_s.updated_at', 'station_id', 'status', 'supervisor', 'deadline', 'report_num', 'f_m_r_s.fmr_manager', 'f_m_r_s.fmr_employee', 'f_m_r_s.date', 'category_name', 'category_name_ar', 'station_code', 'station_name', 'station_name_ar', 'region', 'phone', 'image', 'lat', 'lng', 'address', 'firstname', 'firstname_ar', 'lastname', 'lastname_ar');

            } elseif ($lang == 'ar') {
                $data['fmr_details'] = FMR::select('f_m_r_s.id', 'category', 'issuetypes.issue_type_ar as issue_type', 'priority', 'notes', 'images', 'employee_notes', 'employee_images', 'f_m_r_s.created_at', 'f_m_r_s.updated_at', 'station_id', 'status', 'supervisor', 'deadline', 'report_num', 'f_m_r_s.fmr_manager', 'f_m_r_s.fmr_employee', 'f_m_r_s.date', 'category_name_ar as category_name', 'station_code', 'station_name_ar as station_name', 'region', 'phone', 'image', 'lat', 'lng', 'address_ar as address', 'firstname_ar as firstname', 'lastname_ar as lastname');
            }
            
            $data['fmr_details'] = $data['fmr_details']->join('issuecategories', 'f_m_r_s.category', '=', 'issuecategories.id')
                    ->join('issuetypes', 'f_m_r_s.issue_type', '=', 'issuetypes.id')
                    ->leftJoin('users', 'f_m_r_s.fmr_employee', '=', 'users.id')
                    ->join('stations', 'f_m_r_s.station_id', '=', 'stations.id')
                    ->where('station_id', $id)
                    ->where('supervisor', $user_id)
                    ->where('status', $status)
                    ->orderBy('f_m_r_s.id','DESC')
                    ->get();
            
        } else {
            
            if ($lang == 'en') {
                $data['fmr_details'] = FMR::select('f_m_r_s.id', 'category', 'issuetypes.issue_type', 'priority', 'notes', 'images', 'employee_notes', 'employee_images', 'f_m_r_s.created_at', 'f_m_r_s.updated_at', 'station_id', 'status', 'supervisor', 'deadline', 'report_num', 'f_m_r_s.fmr_manager', 'f_m_r_s.fmr_employee', 'f_m_r_s.date', 'category_name', 'category_name_ar', 'station_code', 'station_name', 'station_name_ar', 'region', 'phone', 'image', 'lat', 'lng', 'address', 'firstname', 'firstname_ar', 'lastname', 'lastname_ar');
                    
            } elseif ($lang == 'ar') {
                $data['fmr_details'] = FMR::select('f_m_r_s.id', 'category', 'issuetypes.issue_type_ar as issue_type', 'priority', 'notes', 'images', 'employee_notes', 'employee_images', 'f_m_r_s.created_at', 'f_m_r_s.updated_at', 'station_id', 'status', 'supervisor', 'deadline', 'report_num', 'f_m_r_s.fmr_manager', 'f_m_r_s.fmr_employee', 'f_m_r_s.date', 'category_name_ar as category_name', 'station_code', 'station_name_ar as station_name', 'region', 'phone', 'image', 'lat', 'lng', 'address_ar as address', 'firstname_ar as firstname', 'lastname_ar as lastname');
            }
            
            $data['fmr_details'] = $data['fmr_details']->join('issuecategories', 'f_m_r_s.category', '=', 'issuecategories.id')
                    ->join('issuetypes', 'f_m_r_s.issue_type', '=', 'issuetypes.id')
                    ->join('stations', 'f_m_r_s.station_id', '=', 'stations.id')
                    ->leftjoin('users', 'f_m_r_s.fmr_employee', '=', 'users.id')
                    ->where('station_id', $id)
                    ->where('supervisor', $user_id)
                    ->where('status', $status)
                    ->orderBy('f_m_r_s.id','DESC')
                    ->get();
        }

        @$fmr_manager = $data['fmr_details'][0]->fmr_manager;
        $data['manager_details'] = User::where('id', $fmr_manager)->first();
        return response()->json($data);
    }

    function sendPushNotification($token, $notification_text)
    {
        $url = 'https://fcm.googleapis.com/fcm/send';
        $serverKey = 'AAAA8a2hYTw:APA91bEfqYcXT6flFkaEs29eaL5GpXizV82pKnIu7DCMbOYGWxplhKzR5OjAGBOwhEhHwyG1JhPG_2fTvkz3ZC9Hnw5ExmPSeXEFtbchtp15y_iLQUCGObYrm8XuFfydvrp6kMK54wpC';
        $title = 'PetroFast';
        $notification = ['title' => $title, 'body' => $notification_text, 'sound' => 'default', 'badge' => '1'];
        $arrayToSend = ['to' => $token, 'notification' => $notification, 'priority' => 'high'];
        $json = json_encode($arrayToSend);
        $headers = [];
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: key=' . $serverKey;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //Send the request
        curl_exec($ch);
        //Close request
        curl_close($ch);
    }

    public function fmr_manager_employee_home()
    {
        $user_id = auth('sanctum')->user()->id;

        $login_type = auth('sanctum')->user()->login_type;

        if (isset($_GET['lang'])) {
            $lang = $_GET['lang'];
        } else {
            $lang = 'en';
        }

        if ($login_type == 'Facility Manager') {
            
            if ($lang == 'en') {
                $data = FMR::select('f_m_r_s.id as fmr_id', 'category', 'issuetypes.issue_type', 'issuetypes.issue_type_ar', 'priority', 'notes', 'images', 'employee_notes', 'employee_images', 'f_m_r_s.created_at', 'station_id', 'status', 'supervisor', 'deadline', 'report_num', 'f_m_r_s.fmr_manager', 'f_m_r_s.fmr_employee', 'f_m_r_s.date', 'category_name', 'category_name_ar', 'station_code', 'station_name', 'station_name_ar', 'region', 'phone', 'image', 'lat', 'lng', 'address');

            } elseif ($lang == 'ar') {
                $data = FMR::select('f_m_r_s.id as fmr_id', 'category', 'issuetypes.issue_type_ar as issue_type', 'priority', 'notes', 'images', 'employee_notes', 'employee_images', 'f_m_r_s.created_at', 'station_id', 'status', 'supervisor', 'deadline', 'report_num', 'f_m_r_s.fmr_manager', 'f_m_r_s.fmr_employee', 'f_m_r_s.date', 'category_name_ar as category_name', 'station_code', 'station_name_ar as station_name', 'region', 'phone', 'image', 'lat', 'lng', 'address_ar as address');
            }
            
            $data = $data->join('issuecategories', 'f_m_r_s.category', '=', 'issuecategories.id')
                    ->join('issuetypes', 'f_m_r_s.issue_type', '=', 'issuetypes.id')
                    ->join('stations', 'f_m_r_s.station_id', '=', 'stations.id')
                    ->where('f_m_r_s.fmr_manager', $user_id)
                    ->where('status', '!=', 'Completed');
                    
            if(isset($_GET['startdate']) && isset($_GET['enddate'])){

            $startdate=$_GET['startdate'];
            $enddate=$_GET['enddate'];
            $data = $data->whereBetween('date', [$startdate, $enddate]);

            }
            
            if(isset($_GET['station_id'])){

            $data = $data->where('station_id', $_GET['station_id'] );

            }
            
            $data = $data->orderBy('f_m_r_s.id','DESC')
                    ->get();
        }

        if ($login_type == 'Facility Labour') {
            
            if ($lang == 'en') {
                $data = FMR::select('f_m_r_s.id as fmr_id', 'category', 'issuetypes.issue_type', 'issuetypes.issue_type_ar', 'priority', 'notes', 'images', 'employee_notes', 'employee_images', 'f_m_r_s.created_at', 'station_id', 'status', 'supervisor', 'deadline', 'report_num', 'f_m_r_s.fmr_manager', 'f_m_r_s.fmr_employee', 'f_m_r_s.date', 'category_name', 'category_name_ar', 'station_code', 'station_name', 'station_name_ar', 'region', 'phone', 'image', 'lat', 'lng', 'address');

            } elseif ($lang == 'ar') {
                $data = FMR::select('f_m_r_s.id as fmr_id', 'category', 'issuetypes.issue_type_ar as issue_type', 'priority', 'notes', 'images', 'employee_notes', 'employee_images', 'f_m_r_s.created_at', 'station_id', 'status', 'supervisor', 'deadline', 'report_num', 'f_m_r_s.fmr_manager', 'f_m_r_s.fmr_employee', 'f_m_r_s.date', 'category_name_ar as category_name', 'station_code', 'station_name_ar as station_name', 'region', 'phone', 'image', 'lat', 'lng', 'address_ar as address');
            }
            
            $data = $data->join('issuecategories', 'f_m_r_s.category', '=', 'issuecategories.id')
                    ->join('issuetypes', 'f_m_r_s.issue_type', '=', 'issuetypes.id')
                    ->join('stations', 'f_m_r_s.station_id', '=', 'stations.id')
                    ->where('f_m_r_s.fmr_employee', $user_id)
                    ->where('status', '!=', 'Completed');
                    
            if(isset($_GET['startdate']) && isset($_GET['enddate'])){

            $startdate=$_GET['startdate'];
            $enddate=$_GET['enddate'];
            $data = $data->whereBetween('date', [$startdate, $enddate]);

            }
            
            if(isset($_GET['station_id'])){

            $data = $data->where('station_id', $_GET['station_id'] );

            }
            
            $data = $data->orderBy('f_m_r_s.id','DESC')
                    ->get();
        }
        return response()->json($data);
    }

    public function fmr_manager_employee_home_count()
    {
        $user_id = auth('sanctum')->user()->id;

        $login_type = auth('sanctum')->user()->login_type;

        if ($login_type == 'Facility Manager') {
            
            $count_new = FMR::join('issuecategories', 'f_m_r_s.category', '=', 'issuecategories.id')
                ->join('issuetypes', 'f_m_r_s.issue_type', '=', 'issuetypes.id')
                ->join('stations', 'f_m_r_s.station_id', '=', 'stations.id')
                ->where('status', 'New')
                ->where('fmr_manager', $user_id)
                ->whereNull('fmr_employee')
                ->count();
            $data['count_new'] = $count_new;

            $count_completed = FMR::join('issuecategories', 'f_m_r_s.category', '=', 'issuecategories.id')
                ->join('issuetypes', 'f_m_r_s.issue_type', '=', 'issuetypes.id')
                ->join('stations', 'f_m_r_s.station_id', '=', 'stations.id')
                ->where('status', 'Completed')
                ->where('fmr_manager', $user_id)
                ->count();
            $data['count_completed'] = $count_completed;

            $count_delay = FMR::join('issuecategories', 'f_m_r_s.category', '=', 'issuecategories.id')
                ->join('issuetypes', 'f_m_r_s.issue_type', '=', 'issuetypes.id')
                ->join('stations', 'f_m_r_s.station_id', '=', 'stations.id')
                ->where('status', 'Delayed')
                ->where('fmr_manager', $user_id)
                ->count();
            $data['count_delay'] = $count_delay;

        } else if ($login_type == 'Facility Labour') {
            
            $count_new = FMR::join('issuecategories', 'f_m_r_s.category', '=', 'issuecategories.id')
                ->join('issuetypes', 'f_m_r_s.issue_type', '=', 'issuetypes.id')
                ->join('stations', 'f_m_r_s.station_id', '=', 'stations.id')
                ->where('status', 'New')
                ->where('fmr_employee', $user_id)
                ->count();
            $data['count_new'] = $count_new;

            $count_completed = FMR::join('issuecategories', 'f_m_r_s.category', '=', 'issuecategories.id')
                ->join('issuetypes', 'f_m_r_s.issue_type', '=', 'issuetypes.id')
                ->join('stations', 'f_m_r_s.station_id', '=', 'stations.id')
                ->where('status', 'Completed')
                ->where('fmr_employee', $user_id)
                ->count();
            $data['count_completed'] = $count_completed;

            $count_delay = FMR::join('issuecategories', 'f_m_r_s.category', '=', 'issuecategories.id')
                ->join('issuetypes', 'f_m_r_s.issue_type', '=', 'issuetypes.id')
                ->join('stations', 'f_m_r_s.station_id', '=', 'stations.id')
                ->where('status', 'Delayed')
                ->where('fmr_employee', $user_id)
                ->count();
            $data['count_delay'] = $count_delay;
        }

        return response()->json($data);
    }

    //Assigning employee for FMR
    public function assign_employee()
    {
        $id = $_GET['fmr_id'];
        $employee = $_GET['employee'];
        $deadline = $_GET['deadline'];

        $fmr = FMR::find($id);

        if (isset($_GET['start_time'])) {
            $start_time = $_GET['start_time'];
            $fmr->created_at = $start_time;
        } else {
            $start_time = $fmr->created_at;
        }

        $fmr->fmr_employee = $employee;
        $fmr->deadline = $deadline;
        $fmr->status = "New";
        $fmr->save();

        $notification = 'A FMR is assigned to you';
        $firebase_token = Firebase::where('user_id', $employee)->first();

        if ($firebase_token) {
            $token_val = $firebase_token->token_val;
            $this->sendPushNotification($token_val, $notification);
        }

       

        return response()->json('Success');
    }

    public function employee_list()
    {
        $user_id = auth('sanctum')->user()->id;
        $station_id = $_GET['station_id'];

        $data = User::select('id', 'firstname', 'firstname_ar', 'lastname', 'lastname_ar')
            ->where('login_type', 'Facility Labour')
            ->where('manager', $user_id)
            ->whereRaw('find_in_set(' . $station_id . ',stations)')
            ->get();

        return response()->json($data);
    }

    public function change_status()
    {

        $user_type  = auth('sanctum')->user()->login_type;
        $user_id  = auth('sanctum')->user()->id;

        $id = $_GET['fmr_id'];
        $status = $_GET['status'];
        $notes = $_GET['notes'];
        $images = $_GET['images'];
        $fmr = FMR::find($id);

        if($user_type=="Facility Manager")
        {
            $fmr->fmr_employee = $user_id;
        }

        $fmr->status = $status;
        $fmr->employee_notes = $notes;
        $fmr->employee_images = $images;
        $fmr->save();

        $employee = FMR::where('id', $id)->get();
        @$employee = $employee[0]->employee;

        if ($status == 'Delayed') {
            $manager_supervisor = FMR::select('fmr_manager', 'supervisor', 'report_num')
                ->where('id', $id)
                ->get();
            @$manager_id = $manager_supervisor[0]->manager;
            $manager_email = User::select('email')
                ->where('login_type', 'Facility Manager')
                ->where('id', $manager_id)
                ->get();
            @$manager_email = $manager_email[0]->email;

            @$supervisor_id = $manager_supervisor[0]->supervisor;
            $supervisor_email = User::select('email')
                ->where('login_type', 'Station Supervisor')
                ->where('id', $supervisor_id)
                ->get();
            @$supervisor_email = $supervisor_email[0]->email;

            @$report_no = $manager_supervisor[0]->report_num;

            $message = 'FMR ' . $report_no . ' is delayed.';
            $subject = 'FMR Creation';
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type:text/html;charset=UTF-8' . "\r\n";
            mail($manager_email, $subject, $message, $headers);

            $message = 'FMR ' . $report_no . ' is delayed.';
            $subject = 'FMR Creation';
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type:text/html;charset=UTF-8' . "\r\n";
            mail($supervisor_email, $subject, $message, $headers);
        }

        return response()->json('Success');
    }

    public function completed_fmr()
    {
        $user_id = auth('sanctum')->user()->id;

        if (isset($_GET['lang'])) {
            $lang = $_GET['lang'];
        } else {
            $lang = 'en';
        }

        if ($lang == 'en') {
            $data = FMR::select('f_m_r_s.id', 'category', 'issuetypes.issue_type', 'priority', 'notes', 'images', 'employee_notes', 'employee_images', 'f_m_r_s.created_at', 'f_m_r_s.updated_at', 'station_id', 'status', 'supervisor', 'deadline', 'report_num', 'f_m_r_s.fmr_manager', 'f_m_r_s.fmr_employee', 'f_m_r_s.date', 'category_name', 'category_name_ar', 'station_code', 'station_name', 'station_name_ar', 'region', 'phone', 'image', 'lat', 'lng', 'address', 'firstname', 'firstname_ar', 'lastname', 'lastname_ar');

        } elseif ($lang == 'ar') {
            $data = FMR::select('f_m_r_s.id', 'category', 'issuetypes.issue_type_ar as issue_type', 'priority', 'notes', 'images', 'employee_notes', 'employee_images', 'f_m_r_s.created_at', 'f_m_r_s.updated_at', 'station_id', 'status', 'supervisor', 'deadline', 'report_num', 'f_m_r_s.fmr_manager', 'f_m_r_s.fmr_employee', 'f_m_r_s.date', 'category_name_ar as category_name', 'station_code', 'station_name_ar as station_name', 'region', 'phone', 'image', 'lat', 'lng', 'address_ar as address', 'firstname_ar as firstname', 'lastname_ar as lastname');
        }
        
        $data = $data->join('issuecategories', 'f_m_r_s.category', '=', 'issuecategories.id')
                ->join('issuetypes', 'f_m_r_s.issue_type', '=', 'issuetypes.id')
                ->join('stations', 'f_m_r_s.station_id', '=', 'stations.id')
                ->leftjoin('users', 'f_m_r_s.fmr_employee', '=', 'users.id')
                ->where('status', 'Completed')
                ->where('f_m_r_s.fmr_manager', $user_id);
                
        if(isset($_GET['startdate']) && isset($_GET['enddate'])){

            $startdate=$_GET['startdate'];
            $enddate=$_GET['enddate'];
            $data = $data->whereBetween('date', [$startdate, $enddate]);

        }
            
        if(isset($_GET['station_id'])){

            $data = $data->where('station_id', $_GET['station_id'] );

        }
                
        $data = $data->orderBy('f_m_r_s.id','DESC')
                ->get();

        return response()->json($data);
    }

    public function search_FMR()
    {
        $startdate = $_GET['startdate'];
        $enddate = $_GET['enddate'];
        $status = $_GET['status'];

        if (isset($_GET['lang'])) {
            $lang = $_GET['lang'];
        } else {
            $lang = 'en';
        }
        $user_id = auth('sanctum')->user()->id;

        $login_type = auth('sanctum')->user()->login_type;

        if ($login_type == 'Facility Manager') {
            
            if ($status == 'All') {
                
                if ($lang == 'en') {
                    $data = FMR::select('f_m_r_s.id', 'category', 'issuetypes.issue_type', 'issuetypes.issue_type_ar', 'priority', 'notes', 'images', 'employee_notes', 'employee_images', 'station_id', 'status', 'supervisor', 'deadline', 'report_num', 'f_m_r_s.fmr_manager', 'f_m_r_s.fmr_employee', 'f_m_r_s.date', 'category_name', 'category_name_ar', 'station_code', 'station_name', 'station_name_ar', 'region', 'phone', 'image', 'lat', 'lng', 'address', 'users.id as employee_id', 'users.firstname as employee_name', 'users.firstname_ar as employee_name_ar');
                } elseif ($lang == 'ar') {
                    $data = FMR::select('f_m_r_s.id', 'category', 'issuetypes.issue_type_ar as issue_type', 'priority', 'notes', 'images', 'employee_notes', 'employee_images', 'station_id', 'status', 'supervisor', 'deadline', 'report_num', 'f_m_r_s.fmr_manager', 'f_m_r_s.fmr_employee', 'f_m_r_s.date', 'category_name_ar as category_name', 'station_code', 'station_name_ar as station_name', 'region', 'phone', 'image', 'lat', 'lng', 'address_ar as address', 'users.id as employee_id', 'users.firstname_ar as employee_name');
                }
                
                $data = $data->join('users', 'f_m_r_s.fmr_employee', '=', 'users.id')
                        ->join('issuecategories', 'f_m_r_s.category', '=', 'issuecategories.id')
                        ->join('issuetypes', 'f_m_r_s.issue_type', '=', 'issuetypes.id')
                        ->join('stations', 'f_m_r_s.station_id', '=', 'stations.id')
                        ->where('f_m_r_s.fmr_manager', $user_id)
                        ->whereBetween('date', [$startdate, $enddate])
                        ->orderBy('f_m_r_s.id','DESC')
                        ->get();

            } else {
                
                if ($lang == 'en') {
                    $data = FMR::select('f_m_r_s.id', 'category', 'issuetypes.issue_type', 'issuetypes.issue_type_ar', 'priority', 'notes', 'images', 'employee_notes', 'employee_images', 'station_id', 'status', 'supervisor', 'deadline', 'report_num', 'f_m_r_s.fmr_manager', 'f_m_r_s.fmr_employee', 'f_m_r_s.date', 'category_name', 'category_name_ar', 'station_code', 'station_name', 'station_name_ar', 'region', 'phone', 'image', 'lat', 'lng', 'address', 'users.id as employee_id', 'users.firstname as employee_name', 'users.firstname_ar as employee_name_ar');

                } elseif ($lang == 'ar') {
                    $data = FMR::select('f_m_r_s.id', 'category', 'issuetypes.issue_type_ar as issue_type', 'priority', 'notes', 'images', 'employee_notes', 'employee_images', 'station_id', 'status', 'supervisor', 'deadline', 'report_num', 'f_m_r_s.fmr_manager', 'f_m_r_s.fmr_employee', 'f_m_r_s.date', 'category_name_ar as category_name', 'station_code', 'station_name_ar as station_name', 'region', 'phone', 'image', 'lat', 'lng', 'address_ar as address', 'users.id as employee_id', 'users.firstname_ar as employee_name');
                }
                
                $data = $data->join('users', 'f_m_r_s.fmr_employee', '=', 'users.id')
                        ->join('issuecategories', 'f_m_r_s.category', '=', 'issuecategories.id')
                        ->join('issuetypes', 'f_m_r_s.issue_type', '=', 'issuetypes.id')
                        ->join('stations', 'f_m_r_s.station_id', '=', 'stations.id')
                        ->where('f_m_r_s.fmr_manager', $user_id)
                        ->where('f_m_r_s.status', $status)
                        ->whereBetween('date', [$startdate, $enddate])
                        ->orderBy('f_m_r_s.id','DESC')
                        ->get();
                
            }
        }

        if ($login_type == 'Facility Labour') {
            
            if ($status == 'All') {
                
                if ($lang == 'en') {
                    $data = FMR::select('f_m_r_s.id', 'category', 'issuetypes.issue_type', 'issuetypes.issue_type_ar', 'priority', 'notes', 'images', 'employee_notes', 'employee_images', 'station_id', 'status', 'supervisor', 'deadline', 'report_num', 'f_m_r_s.fmr_manager', 'f_m_r_s.fmr_employee', 'f_m_r_s.date', 'category_name', 'category_name_ar', 'station_code', 'station_name', 'station_name_ar', 'region', 'phone', 'image', 'lat', 'lng', 'address', 'users.id as employee_id', 'users.firstname as employee_name', 'users.firstname_ar as employee_name_ar');

                } elseif ($lang == 'ar') {
                    $data = FMR::select('f_m_r_s.id', 'category', 'issuetypes.issue_type_ar as issue_type', 'priority', 'notes', 'images', 'employee_notes', 'employee_images', 'station_id', 'status', 'supervisor', 'deadline', 'report_num', 'f_m_r_s.fmr_manager', 'f_m_r_s.fmr_employee', 'f_m_r_s.date', 'category_name_ar category_name', 'station_code', 'station_name_ar as station_name', 'region', 'phone', 'image', 'lat', 'lng', 'address_ar as address', 'users.id as employee_id', 'users.firstname_ar as employee_name');
                }
                
                $data = $data->join('users', 'f_m_r_s.fmr_employee', '=', 'users.id')
                        ->join('issuecategories', 'f_m_r_s.category', '=', 'issuecategories.id')
                        ->join('issuetypes', 'f_m_r_s.issue_type', '=', 'issuetypes.id')
                        ->join('stations', 'f_m_r_s.station_id', '=', 'stations.id')
                        ->where('f_m_r_s.fmr_employee', $user_id)
                        ->whereBetween('date', [$startdate, $enddate])
                        ->orderBy('f_m_r_s.id','DESC')
                        ->get();
                        
            } else {
                
                if ($lang == 'en') {
                    $data = FMR::select('f_m_r_s.id', 'category', 'issuetypes.issue_type', 'issuetypes.issue_type_ar', 'priority', 'notes', 'images', 'employee_notes', 'employee_images', 'station_id', 'status', 'supervisor', 'deadline', 'report_num', 'f_m_r_s.fmr_manager', 'f_m_r_s.fmr_employee', 'f_m_r_s.date', 'category_name', 'category_name_ar', 'station_code', 'station_name', 'station_name_ar', 'region', 'phone', 'image', 'lat', 'lng', 'address', 'users.id as employee_id', 'users.firstname as employee_name', 'users.firstname_ar as employee_name_ar');

                } elseif ($lang == 'ar') {
                    $data = FMR::select('f_m_r_s.id', 'category', 'issuetypes.issue_type_ar as issue_type', 'priority', 'notes', 'images', 'employee_notes', 'employee_images', 'station_id', 'status', 'supervisor', 'deadline', 'report_num', 'f_m_r_s.fmr_manager', 'f_m_r_s.fmr_employee', 'f_m_r_s.date', 'category_name_ar as category_name', 'station_code', 'station_name_ar as station_name', 'region', 'phone', 'image', 'lat', 'lng', 'address_ar as address', 'users.id as employee_id', 'users.firstname_ar as employee_name');
                }
                
                $data = $data->join('users', 'f_m_r_s.fmr_employee', '=', 'users.id')
                        ->join('issuecategories', 'f_m_r_s.category', '=', 'issuecategories.id')
                        ->join('issuetypes', 'f_m_r_s.issue_type', '=', 'issuetypes.id')
                        ->join('stations', 'f_m_r_s.station_id', '=', 'stations.id')
                        ->where('f_m_r_s.fmr_employee', $user_id)
                        ->where('f_m_r_s.status', $status)
                        ->whereBetween('date', [$startdate, $enddate])
                        ->orderBy('f_m_r_s.id','DESC')
                        ->get();
            }
        }

        return response()->json($data);
    }

    public function change_fmr_status()
    {
        $id = $_GET['fmr_id'];
        $status = $_GET['status'];
        $fmr = FMR::find($id);
        $fmr->status = $status;
        $fmr->save();
        return response()->json("success");

    }
}
