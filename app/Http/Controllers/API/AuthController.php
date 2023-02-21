<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use App\Models\Firebase;
use Illuminate\Support\Facades\Auth;

class AuthController extends BaseController
{
	public function login(Request $request)
	{
        if(isset($_GET['lang']))
        $lang = $_GET['lang'];
        else
        $lang="en";

	    if (!Auth::attempt($request->only('username', 'password'))) {
		return response()->json([
			'message' => 'Invalid login details'
           	], 401);
        }

	    $user = User::where('username', $request['username'])->firstOrFail();

	    $token = $user->createToken('auth_token')->plainTextToken;

        $user_id = $user->id;
	   
	    $update_user = User::find($user_id);
        $update_user->api_token = $token;
        $update_user->save();
       
        $token_user = Firebase::select('token_val','id')->where('user_id', $user_id)->first();
        $firebase_token = $request->token;
        
        if($token_user)
        {
            $id = $token_user->id;
            $firebase = Firebase::find($id);
            $firebase->user_id = $user_id;
            $firebase->token_val = $firebase_token;
            $firebase->save();

        }
        else
        {
            $firebase = Firebase::create([
    	        'user_id'=>$user_id,
    	        'token_val'=>$firebase_token,
    	   ]);
        }

        if($lang=="en")
        $user_details = User::select('id','firstname','firstname_ar','email','email_verified_at','username','created_at','updated_at','lastname','lastname_ar','mobile','login_type','stations','api_token','profile_pic','manager');

        else
        $user_details = User::select('id','firstname_ar as firstname','email','email_verified_at','username','created_at','updated_at','lastname_ar as lastname','mobile','login_type','stations','api_token','profile_pic','manager');    

       
        $user_details = $user_details->where('id', $user_id)->get();

        return response()->json([
           'access_token' => $token,
           'token_type' => 'Bearer',
           'user_details' => $user_details,
        ]);
    } 
    
    public function forgot_password(Request $request)
    {
    
        $email=$request->email;
     
        $list = User::where('email',$email)->first();
                   
        if($list){
        
             $login_type=$list->login_type;
             
             $url=url('password.email');
             $message="Please <i><a href='".$url."'> click this link </a></i> to reset password";
             $subject = "Reset  Password";
             $headers = "MIME-Version: 1.0" . "\r\n";
             $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
             mail($email,$subject,$message,$headers);
             $data=" Password recovery instruction has been sent to the email";
        
       
        } else{
          
         $data="This email id is not registered";
          
      }

      return response()->json($data);
    }
    
}
