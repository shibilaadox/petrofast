
<?php use App\Models\Survey_frontend;
use App\Models\User;?>
<!DOCTYPE html>


<html lang="en">

    <!-- begin::Head -->
    <head>
        <style type="text/css">
   a {
      text-decoration:none !important;
   }
   
</style>
        <meta charset="utf-8" />
            <title>{{ Config::get('siteVars.title') }} | Dashboard</title>
        <meta name="description" content="Latest updates and statistic charts">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

        <!--end::Web font -->

        <!--begin::Global Theme Styles -->
        <link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />

        <!--RTL version:<link href="assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
        <link href="assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />

        <!--RTL version:<link href="assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

        <!--end::Global Theme Styles -->

        <!--begin::Page Vendors Styles -->
        <link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

        <!--RTL version:<link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

        <!--end::Page Vendors Styles -->
        <link rel="shortcut icon" href="{{url('')}}/public/images/Capture.png" />
    </head>

    <!-- end::Head -->

    <!-- begin::Body -->
    <body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">

            <!-- BEGIN: Header -->
              @include('Common.header')
            <!-- END: Header -->

            <!-- begin::Body -->
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

                <!-- BEGIN: Left Aside -->
                <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
                <div id="m_aside_left" class="m-grid__item  m-aside-left  m-aside-left--skin-dark ">

                    <!-- BEGIN: Aside Menu -->
              @include('Common.menu')


                    <!-- END: Aside Menu -->
                </div>

                <!-- END: Left Aside -->
                <div class="m-grid__item m-grid__item--fluid m-wrapper">


                    <!-- END: Subheader -->
                    <div class="m-content">


                
                        
                                





<div class="container">
     
     <div class="row">
        
        <div class="text-center col-md-3 col-lg-3 col-sm-3 col-xs-6 mb-4 mb-md-0">
            <a href="{{url('Surveys')}}" ><div class="bg-primary" style="font-weight:400;color: white;border-radius: 10px;" onclick="<?php echo url('Surveys')?>"><br>Surveys<br><?php echo count($data['survey']);?><br><br></div></a>
        </div>
        
        <div class="text-center col-md-3 col-lg-3 col-sm-3 col-xs-6 mb-4 mb-md-0">
            <a href="{{url('FMR')}}" ><div class="bg-warning" style="font-weight:400;color: white;border-radius: 10px;"><br>FMR<br><?php echo count($data['FMR']);?><br><br></div></a>
        </div>
        <?php if(session('login_type')!="Supervisor"){?>
        <div class="text-center col-md-3 col-lg-3 col-sm-3 col-xs-6 mb-4 mb-md-0">
            <a href="{{url('Progress')}}" ><div class="bg-success" style="font-weight:400;color: white;border-radius: 10px;"><br>Supervisors<br><?php echo count($data['supervisors']);?><br><br></div></a>
        </div>
        <?php } ?>
        <div class="text-center col-md-3 col-lg-3 col-sm-3 col-xs-6 mb-4 mb-md-0">
            <a href="{{url('Station')}}"><div class="bg-info" style="font-weight:400;color: white;border-radius: 10px;"><br>Stations<br><?php echo count($data['stations']);?><br><br></div></a>
        </div>
    </div>

</div>


    <!--Begin::Section-->
                        <div class="row" style="margin-top: 3%;">
                            <?php if(session('login_type')=="FMR Manager" || session('login_type')=="Employee"){ ?>
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
<div class="m-portlet m-portlet--full-height " style="border-radius: 10px;">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <h3 class="m-portlet__head-text">
                                                        FMRs
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="m-portlet__head-tools">
                                            <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                                                <li class="nav-item m-tabs__item">
                                                    <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget5_tab1_content" role="tab">
                                                        FMRs Today
                                                    </a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body" style="margin-left:10px;">

                                        <!--begin::Content-->
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="m_widget5_tab1_content" aria-expanded="true">

                                            <div class="row">
        <div class="text-center col-md-2">
            
        </div>
        <div class="text-center col-md-2">
            <div class="bg-danger" style="font-weight:400;color: white;border-radius: 5px;font-size: 10px;height: 25px;
    padding-top: 5px;width: 65px;">New</div>
        </div>
        <div class="text-center col-md-2">
            <div class="bg-warning" style="font-weight:400;color: white;border-radius: 5px;font-size: 10px;height: 25px;
    padding-top: 5px;width: 65px;">Assigned</div>
        </div>
        <div class="text-center col-md-2">
            <div class="bg-success" style="font-weight:400;color: white;border-radius: 5px;font-size: 10px;height: 25px;
    padding-top: 5px;width: 65px;">Ongoing</div>
        </div>
        <div class="text-center col-md-3">
            <div class="bg-info" style="font-weight:400;color: white;border-radius: 5px;font-size: 10px;height: 25px;
    padding-top: 5px;width: 65px;">Completed</div>
        </div>
    </div>

    <div class="row" style="margin-top: 2%;">
        <div class="text-center col-md-2" style="font-size: 11px;color: #0bcccc;font-weight:500">
         North   
        </div>
        <div class="text-center col-md-2">
            <div class="bg-danger" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['North_new'];?></div>
        </div>
        <div class="text-center col-md-2">
            <div class="bg-warning" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['North_assigned'];?></div>
        </div>
        <div class="text-center col-md-2">
            <div class="bg-success" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['North_ongoing'];?></div>
        </div>
        <div class="text-center col-md-3">
            <div class="bg-info" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['North_completed'];?></div>
        </div>
    </div>

    <div class="row" style="margin-top: 2%;">
        <div class="text-center col-md-2" style="font-size: 11px;color: #0bcccc;font-weight:500">
         East   
        </div>
        <div class="text-center col-md-2">
            <div class="bg-danger" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['East_new'];?></div>
        </div>
        <div class="text-center col-md-2">
            <div class="bg-warning" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['East_assigned'];?></div>
        </div>
        <div class="text-center col-md-2">
            <div class="bg-success" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['East_ongoing'];?></div>
        </div>
        <div class="text-center col-md-3">
            <div class="bg-info" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['East_completed'];?></div>
        </div>
    </div>

     <div class="row" style="margin-top: 2%;">
        <div class="text-center col-md-2" style="font-size: 11px;color: #0bcccc;font-weight:500">
         Central   
        </div>
        <div class="text-center col-md-2">
            <div class="bg-danger" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['Central_new'];?></div>
        </div>
        <div class="text-center col-md-2">
            <div class="bg-warning" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['Central_assigned'];?></div>
        </div>
        <div class="text-center col-md-2">
            <div class="bg-success" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['Central_ongoing'];?></div>
        </div>
        <div class="text-center col-md-3">
            <div class="bg-info" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['Central_completed'];?></div>
        </div>
    </div>

     <div class="row" style="margin-top: 2%;">
        <div class="text-center col-md-2" style="font-size: 11px;color: #0bcccc;font-weight:500">
         South   
        </div>
        <div class="text-center col-md-2">
            <div class="bg-danger" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['South_new'];?></div>
        </div>
        <div class="text-center col-md-2">
            <div class="bg-warning" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['South_assigned'];?></div>
        </div>
        <div class="text-center col-md-2">
            <div class="bg-success" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['South_ongoing'];?></div>
        </div>
        <div class="text-center col-md-3">
            <div class="bg-info" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['South_completed'];?></div>
        </div>
    </div>

 <div class="row" style="margin-top: 2%;">
        <div class="text-center col-md-2" style="font-size: 11px;color: #0bcccc;font-weight:500">
         West   
        </div>
        <div class="text-center col-md-2">
            <div class="bg-danger" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['West_new'];?></div>
        </div>
        <div class="text-center col-md-2">
            <div class="bg-warning" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['West_assigned'];?></div>
        </div>
        <div class="text-center col-md-2">
            <div class="bg-success" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['West_ongoing'];?></div>
        </div>
        <div class="text-center col-md-3">
            <div class="bg-info" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['West_completed'];?></div>
        </div>
    </div>

 <div class="row" style="margin-top: 2%;">
        <div class="text-center col-md-2" style="font-size: 11px;color: #0bcccc;font-weight:500">
         Qassim   
        </div>
        <div class="text-center col-md-2">
            <div class="bg-danger" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['Qassim_new'];?></div>
        </div>
        <div class="text-center col-md-2">
            <div class="bg-warning" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['Qassim_assigned'];?></div>
        </div>
        <div class="text-center col-md-2">
            <div class="bg-success" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['Qassim_ongoing'];?></div>
        </div>
        <div class="text-center col-md-3">
            <div class="bg-info" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['Qassim_completed'];?></div>
        </div>
    </div>



                                           
                                            </div>


                                                <!--end::m-widget5-->
                                            </div>
                                        
                                        
                                        </div>

                                        <!--end::Content-->
                                    </div>
                                </div><!--FMR-->


                           <div class="col-md-3"></div>





                            <?php } else { ?>
                            <div class="col-md-6">
<div class="m-portlet m-portlet--full-height " style="border-radius: 10px;">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <h3 class="m-portlet__head-text">
                                                        FMRs
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="m-portlet__head-tools">
                                            <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                                                <li class="nav-item m-tabs__item">
                                                    <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget5_tab1_content" role="tab">
                                                        FMRs Today
                                                    </a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body" style="margin-left:10px;">

                                        <!--begin::Content-->
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="m_widget5_tab1_content" aria-expanded="true">

                                            <div class="row">
        <div class="text-center col-md-2">
            
        </div>
        <div class="text-center col-md-2">
            <div class="bg-danger" style="font-weight:400;color: white;border-radius: 5px;font-size: 10px;height: 25px;
    padding-top: 5px;width: 65px;">New</div>
        </div>
        <div class="text-center col-md-2">
            <div class="bg-warning" style="font-weight:400;color: white;border-radius: 5px;font-size: 10px;height: 25px;
    padding-top: 5px;width: 65px;">Assigned</div>
        </div>
        <div class="text-center col-md-2">
            <div class="bg-success" style="font-weight:400;color: white;border-radius: 5px;font-size: 10px;height: 25px;
    padding-top: 5px;width: 65px;">Ongoing</div>
        </div>
        <div class="text-center col-md-3">
            <div class="bg-info" style="font-weight:400;color: white;border-radius: 5px;font-size: 10px;height: 25px;
    padding-top: 5px;width: 65px;">Completed</div>
        </div>
    </div>

    <div class="row" style="margin-top: 2%;">
        <div class="text-center col-md-2" style="font-size: 11px;color: #0bcccc;font-weight:500">
         North   
        </div>
        <div class="text-center col-md-2">
            <div class="bg-danger" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['North_new'];?></div>
        </div>
        <div class="text-center col-md-2">
            <div class="bg-warning" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['North_assigned'];?></div>
        </div>
        <div class="text-center col-md-2">
            <div class="bg-success" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['North_ongoing'];?></div>
        </div>
        <div class="text-center col-md-3">
            <div class="bg-info" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['North_completed'];?></div>
        </div>
    </div>

    <div class="row" style="margin-top: 2%;">
        <div class="text-center col-md-2" style="font-size: 11px;color: #0bcccc;font-weight:500">
         East   
        </div>
        <div class="text-center col-md-2">
            <div class="bg-danger" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['East_new'];?></div>
        </div>
        <div class="text-center col-md-2">
            <div class="bg-warning" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['East_assigned'];?></div>
        </div>
        <div class="text-center col-md-2">
            <div class="bg-success" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['East_ongoing'];?></div>
        </div>
        <div class="text-center col-md-3">
            <div class="bg-info" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['East_completed'];?></div>
        </div>
    </div>

     <div class="row" style="margin-top: 2%;">
        <div class="text-center col-md-2" style="font-size: 11px;color: #0bcccc;font-weight:500">
         Central   
        </div>
        <div class="text-center col-md-2">
            <div class="bg-danger" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['Central_new'];?></div>
        </div>
        <div class="text-center col-md-2">
            <div class="bg-warning" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['Central_assigned'];?></div>
        </div>
        <div class="text-center col-md-2">
            <div class="bg-success" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['Central_ongoing'];?></div>
        </div>
        <div class="text-center col-md-3">
            <div class="bg-info" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['Central_completed'];?></div>
        </div>
    </div>

     <div class="row" style="margin-top: 2%;">
        <div class="text-center col-md-2" style="font-size: 11px;color: #0bcccc;font-weight:500">
         South   
        </div>
        <div class="text-center col-md-2">
            <div class="bg-danger" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['South_new'];?></div>
        </div>
        <div class="text-center col-md-2">
            <div class="bg-warning" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['South_assigned'];?></div>
        </div>
        <div class="text-center col-md-2">
            <div class="bg-success" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['South_ongoing'];?></div>
        </div>
        <div class="text-center col-md-3">
            <div class="bg-info" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['South_completed'];?></div>
        </div>
    </div>

 <div class="row" style="margin-top: 2%;">
        <div class="text-center col-md-2" style="font-size: 11px;color: #0bcccc;font-weight:500">
         West   
        </div>
        <div class="text-center col-md-2">
            <div class="bg-danger" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['West_new'];?></div>
        </div>
        <div class="text-center col-md-2">
            <div class="bg-warning" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['West_assigned'];?></div>
        </div>
        <div class="text-center col-md-2">
            <div class="bg-success" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['West_ongoing'];?></div>
        </div>
        <div class="text-center col-md-3">
            <div class="bg-info" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['West_completed'];?></div>
        </div>
    </div>

 <div class="row" style="margin-top: 2%;">
        <div class="text-center col-md-2" style="font-size: 11px;color: #0bcccc;font-weight:500">
         Qassim   
        </div>
        <div class="text-center col-md-2">
            <div class="bg-danger" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['Qassim_new'];?></div>
        </div>
        <div class="text-center col-md-2">
            <div class="bg-warning" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['Qassim_assigned'];?></div>
        </div>
        <div class="text-center col-md-2">
            <div class="bg-success" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['Qassim_ongoing'];?></div>
        </div>
        <div class="text-center col-md-3">
            <div class="bg-info" style="font-weight:100;color: white;border-radius: 5px;color: black;font-size: 10px;width: 65px;
    height: 20px;
    padding-top: 2px;"><?php echo $data['Qassim_completed'];?></div>
        </div>
    </div>



                                           
                                            </div>


                                                <!--end::m-widget5-->
                                            </div>
                                        
                                        
                                        </div>

                                        <!--end::Content-->
                                    </div>
                                </div><!--FMR-->




                                <div class="col-md-6">

                                    <div class="m-portlet m-portlet--full-height " style="border-radius: 10px;overflow-y:scroll;height: 350px;">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <?php if(session('login_type')=="Supervisor"){?>
                                                <h3 class="m-portlet__head-text">
                                                        Today's Progress
                                                </h3>
                                                <?php } else {?>
                                                <h3 class="m-portlet__head-text">
                                                        Today's Supervisor's Progress
                                                </h3>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="m-portlet__body">

                                        <!--begin::Content-->
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="m_widget5_tab1_content" aria-expanded="true">
                                            
                                            <?php foreach($data['supervisors_list'] as $row){

                                            $completed = Survey_frontend::where('status',"Completed")->where('supervisor',$row->id)->where('date',date("Y-m-d"))->count();
                                            
                                            $stations = array();
                                            $stations_list = User::select('stations')->where('id',$row->id)->get();
                                            @$stations = $stations_list[0]->stations;
                                            $stations = explode(",",$stations);
                                            $station_count = count($stations);

                                            $pending = $station_count - $completed;

                                            $widths = (float)($completed / $station_count) * 100;

                                            $name = User::select('firstname')->where('id',$row->id)->get();
                                            @$name = $name[0]->firstname;

                                            ?>

                                            <div class="row" style="
    font-size: 12px;
    font-weight: 500;
"><div class="col-md-10"><?php echo $name?></div><div class="col-md-2" style="text-align:end;"><?php echo $completed?>/<?php echo $station_count?></div></div>

                                            <div class="progress" style="margin-top:10px;">
                                            <div class="progress-bar" role="progressbar" style="width: <?php echo $widths;?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $widths;?>%</div>
                                            </div>
                                            <br>
                                            
                                            


                                           
                                            <?php } ?>
                                            
                                            
                                            





                                           
                                            </div>


                                                <!--end::m-widget5-->
                                            </div>
                                        
                                        
                                        </div>

                                        <!--end::Content-->
                                    </div>

                                </div>





















                           <?php } ?>
                            </div>







                <div class="row" style="margin-top:1%;">
                <?php if(session('login_type')=="FMR Manager" || session('login_type')=="Employee"){ ?>
                <div class="col-md-12">
<div class="m-portlet m-portlet--full-height " style="border-radius: 10px;">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <h3 class="m-portlet__head-text">
                                                        Today's Station Wise FMR Report
                                                </h3>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="m-portlet__body">

                                        <!--begin::Content-->
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="m_widget5_tab1_content" aria-expanded="true">

                                        
<div class="row">
<div class="col-md-12" >
    
<div class="kt-portlet__head-label" id="fmr_chart">
</div>
</div>

</div>




                                           
                                            </div>


                                                <!--end::m-widget5-->
                                            </div>
                                        
                                        
                                        </div>

                                        <!--end::Content-->
                                    </div>
                                </div>
                <?php } else { ?>
                            
                            <div class="col-md-12">
<div class="m-portlet m-portlet--full-height " style="border-radius: 10px;">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <h3 class="m-portlet__head-text">
                                                        Region Wise Today's Survey Response
                                                </h3>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="m-portlet__body">

                                        <!--begin::Content-->
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="m_widget5_tab1_content" aria-expanded="true">

                                        
<div class="row">
<div class="col-md-6 col-xs-3" style="margin-left:-3%">
    <h6 style="margin-left: 51%;">North</h6>
<div class="kt-portlet__head-label" id="survey_north">
</div>
</div>
<div class="col-md-6 col-xs-3" style="margin-left:-3%">
    <h6 style="margin-left: 51%;">South</h6>
<div class="kt-portlet__head-label" id="survey_south">
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-xs-3" style="margin-left:-3%">
    <h6 style="margin-left: 51%;">East</h6>
<div class="kt-portlet__head-label" id="survey_east">
</div>
</div>

<div class="col-md-6 col-xs-3" style="margin-left:-3%">
    <h6 style="margin-left: 51%;">West</h6>
<div class="kt-portlet__head-label" id="survey_west">
</div>
</div>
</div>



<div class="row">
<div class="col-md-3 col-xs-3"></div>
<div class="col-md-6 col-xs-3">
    <h6 style="margin-left: 51%;">Central</h6>
<div class="kt-portlet__head-label" id="survey_central">
</div>
</div>
<!--<div class="col-md-6">
    <h6 style="margin-left: 58%;">Qassim</h6>
<div class="kt-portlet__head-label" id="survey_qassim">
</div>-->
</div>



                                           
                                            </div>


                                                <!--end::m-widget5-->
                                            </div>
                                        
                                        
                                        </div>

                                        <!--end::Content-->
                                    </div>
                                </div>
                                <?php } ?>
                            </div>

















                    </div>







                            
                        <!--End::Section-->
                    </div>
                </div>
            </div>

            <!-- end:: Body -->

            <!-- begin::Footer -->
            @include('Common.footer')

            <!-- end::Footer -->
        </div>

        <!-- end:: Page -->

        
        <!--begin::Global Theme Bundle -->
        <script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
        <script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

        <!--end::Global Theme Bundle -->

        <!--begin::Page Vendors -->
        <script src="assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>

        <!--end::Page Vendors -->

        <!--begin::Page Scripts -->
        <script src="assets/app/js/dashboard.js" type="text/javascript"></script>

        <!--end::Page Scripts -->
    </body>

    <!-- end::Body -->
</html>




<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">


google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart()
{
    var data = google.visualization.arrayToDataTable([
          ['Status', 'Count'],
          ['Completed',     <?php echo $data['survey_north_completed']?>],
          ['Pending',     <?php echo $data['survey_north_pending']?>]
        ]);

   
    var options = {

                title: 'North',
                pieHole: 0.5,
                chartArea:{left:150,top:0,width:'70%',height:'75%'},
                sliceVisibilityThreshold: .001,

    };

    if(data.getNumberOfRows() == 0){
    $("#survey_north").css("margin-left", "0%").append("Sorry, no info available");
    }else{
    var chart = new google.visualization.PieChart(document.getElementById('survey_north'));
    chart.draw(data, options);
    }
}

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart1);

function drawChart1()
{
    var data = google.visualization.arrayToDataTable([
          ['Status', 'Count'],
          ['Completed',     <?php echo $data['survey_south_completed']?>],
          ['Pending',     <?php echo $data['survey_south_pending'] ?>]
        ]);

   
    var options = {

                title: 'South',
                pieHole: 0.5,
                chartArea:{left:150,top:0,width:'70%',height:'75%'},
                sliceVisibilityThreshold: .001,

    };

    if(data.getNumberOfRows() == 0){
    $("#survey_south").css("margin-left", "40%").append("Sorry, no info available")
    }else{
    var chart = new google.visualization.PieChart(document.getElementById('survey_south'));
    chart.draw(data, options);
    }
}

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart2);

function drawChart2()
{
    var data = google.visualization.arrayToDataTable([
          ['Status', 'Count'],
          ['Completed',     <?php echo $data['survey_east_completed'] ?>],
          ['Pending',     <?php echo $data['survey_east_pending'] ?>]
        ]);

   
    var options = {

                title: 'East',
                pieHole: 0.5,
                chartArea:{left:150,top:0,width:'70%',height:'75%'},
                sliceVisibilityThreshold: .001,

    };

    if(data.getNumberOfRows() == 0){
    $("#survey_east").css("margin-left", "40%").append("Sorry, no info available")
    }else{
    var chart = new google.visualization.PieChart(document.getElementById('survey_east'));
    chart.draw(data, options);
    }
}


google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart3);

function drawChart3()
{
    var data = google.visualization.arrayToDataTable([
          ['Status', 'Count'],
          ['Completed',     <?php echo $data['survey_west_completed'] ?>],
          ['Pending',     <?php echo $data['survey_west_pending'] ?>]
        ]);

   
    var options = {

                title: 'West',
                pieHole: 0.5,
                chartArea:{left:150,top:0,width:'70%',height:'75%'},
                sliceVisibilityThreshold: .001,

    };

    if(data.getNumberOfRows() == 0){
    $("#survey_west").css("margin-left", "36%").append("Sorry, no info available")
    }else{
    var chart = new google.visualization.PieChart(document.getElementById('survey_west'));
    chart.draw(data, options);
    }
}

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart4);

function drawChart4()
{
    var data = google.visualization.arrayToDataTable([
          ['Status', 'Count'],
          ['Completed',     <?php echo $data['survey_central_completed']?>],
          ['Pending',     <?php echo $data['survey_central_pending']?>]
        ]);

   
    var options = {

                title: 'Central',
                pieHole: 0.5,
                chartArea:{left:150,top:0,width:'70%',height:'75%'},
                sliceVisibilityThreshold: .001,

    };

    if(data.getNumberOfRows() == 0){
    $("#survey_central").css("margin-left", "36%").append("Sorry, no info available")
    }else{
    var chart = new google.visualization.PieChart(document.getElementById('survey_central'));
    chart.draw(data, options);
    }
}

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart5);

function drawChart5()
{
    var data = google.visualization.arrayToDataTable([
          ['Status', 'Count'],
          ['Completed',     <?php echo $data['survey_qassim_completed']?>],
          ['Pending',     <?php echo $data['survey_qassim_pending']?>]
        ]);

   
    var options = {

                title: 'Qassim',
                pieHole: 0.5,
                chartArea:{left:150,top:0,width:'70%',height:'75%'},
                sliceVisibilityThreshold: .001,

    };

    if(data.getNumberOfRows() == 0){
       
    $("#survey_qassim").css("margin-left", "0%").append("Sorry, no info available");
    }else{
    var chart = new google.visualization.PieChart(document.getElementById('survey_qassim'));
    chart.draw(data, options);
    }
}




    <?php if(session('login_type')=="FMR Manager" || session('login_type')=="Employee") { ?>
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawChart6);

      function drawChart6() {
        var data = google.visualization.arrayToDataTable([
            ['', 'Count'],

            <?php 
              $count = 0;
              foreach($data['fmr_station_wise'] as $row) {
                
                  echo "['".$row->station_name."', ".$row->count."],";
              }
            ?>
        ]);

 if (data.getNumberOfRows() === 1) {
    data.insertRows(0, [[' ', null]]);
    data.addRow([' ', null]);
  }
  
  var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       ]);
  
        var options = {
           legend: {
      position: 'top'
    },
     bar: { groupWidth: '5%' },
        	colors: ['darkblue'],
          chart: {
            title: '',
          },
          bars: 'vertical'
        };
        
        if (data.getNumberOfRows() === 0) {
            $("#fmr_chart").css("margin-left", "36%").append("Sorry, no info available")
        }
        else{
        var chart = new google.visualization.ColumnChart(document.getElementById("fmr_chart"));
        chart.draw(view, options);
        }
      }
      <?php } ?>
</script>




