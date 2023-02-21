<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Parentmenu;
use App\Models\Submenu;
use App\Models\Permission;
use Session;
use Illuminate\Support\Facades\Route;

class Common_controller extends Controller
{
    public static function checksession(){

      $user_id=Session::get('user_id');
      
      if(empty($user_id)){
        $yourURL = url('');
        echo ("<script>location.href='$yourURL'</script>");
      }
    }
    
    public static function menulist(){


     $data['parent_menu'] = Parentmenu::all();
     $data['sub_menu'] = Submenu::all();



      $data['parent'] = Parentmenu::all();
      $data['sub'] = Submenu::all();
      $login_type=Session::get('login_type');
    
  
      $data['permission'] = Permission::where('permission_type',$login_type)->get();
      $ppp=',';
      $ppp1=',';
      $ppp2=',';

      

      if(count( $data['permission'])==0){
        
      $yourURL = url('/');
          echo ("<script>location.href='$yourURL'</script>");
      }

      foreach($data['sub'] as $subbb){
        $ppp2=$ppp2.$subbb->s_menu_route.",";


        $rr=','.$subbb->id.",";
        if (strpos($data['permission'][0]->permission_menu,$rr ) !== false) {

          $ppp=$ppp.$subbb->parentmenu_id.',';  
          $ppp1=$ppp1.$subbb->s_menu_route.',';  

        }
      }
      $ppp = implode(',',array_unique(explode(',', $ppp))).',';
      $data['permissionparent'] = $ppp;


    $routeName = Route::currentRouteName();
   
    $data['currentRouteName'] = $routeName;
      if (strpos($ppp2,$routeName ) == true) {
      if (strpos($ppp1,$routeName ) == false) {
        
          $yourURL = url('/');
          echo ("<script>location.href='$yourURL'</script>");
        }
      }

     return $data;



}
}
