
<!DOCTYPE html>
<html lang="en">

    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />
        <title>{{ Config::get('siteVars.title') }} | Change Password Page</title>
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

        <link href="{{url('/assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />

       
        <link href="{{url('/assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />


        <!--end::Global Theme Styles -->
        <link rel="shortcut icon" href="{{url('')}}/public/images/Capture.png"/>
    </head>

    <!-- end::Head -->

    <!-- begin::Body -->
    <body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2" id="m_login" style="background-image: url({{url('/assets/app/media/img//bg/bg-3.jpg')}});">
                <div class="m-grid__item m-grid__item--fluid    m-login__wrapper">
                    <div class="m-login__container">
                        <div class="m-login__logo">
                            <a href="#">
                                <img src="{{url('/public/images/Capture.png')}}"   style="height:125px;">
                            </a>
                        </div>
                        <div class="m-login__signin">
                            <div class="m-login__head">
                                <h3 class="m-login__title">Change Password  </h3>
                            </div>



                            <form class="m-login__form m-form">
                        <!--      <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->

 
      <div class="m-alert m-alert--outline alert alert-danger alert-dismissible animated fadeIn alert_class" role="alert" id="alert" style="display:none">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button> <span id="alerttext"></span>      
                             </div>
                             
                             <div class="m-alert m-alert--outline alert alert-success alert-dismissible animated fadeIn alert_class" role="alert" id="alert_success" style="display:none">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button> <span id="alerttext_success"></span>      
                             </div>


                         


                             <input type="hidden" value="<?php echo base64_decode($_GET['email'])?>" name="email" id="email">
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password"  id="password"  required="" >
                                </div>

                                <div class="form-group m-form__group">
                                    <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Confirm Password" name="cpassword"  id="cpassword"  required="">
                                </div>


                                <div class="row m-login__form-sub">
                                    <!-- <div class="col m--align-left m-login__form-left">
                                        <label class="m-checkbox  m-checkbox--focus">
                                            <input type="checkbox" name="remember"> Remember me
                                            <span></span>
                                        </label>
                                    </div> -->
                                 <!--    <div class="col m--align-right m-login__form-right">
                                        <a href="javascript:;" id="m_login_forget_password" class="m-link">Forget Password ?</a>
                                    </div> -->
                                </div>
                                <div class="m-login__form-action">
                                    <button id="m_login_signin_submit1" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary" type="submit">Submit</button>
                                </div>

                            </form>




                        </div>
                      
                      
                    </div>
                </div>
            </div>
        </div>

        <!-- end:: Page -->

        <!--begin::Global Theme Bundle -->
        <script src="{{url('/assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
        <script src="{{url('/assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>

        <!--end::Global Theme Bundle -->

        <!--begin::Page Scripts -->
        <script src="{{url('/assets/snippets/custom/pages/user/login.js')}}" type="text/javascript"></script>

        <!--end::Page Scripts -->
    </body>

    <!-- end::Body -->
</html>
<script type="text/javascript">
    $("#m_login_signin_submit1").click(function(){
       
        // $(".alert_class").hide();


if($("#password").val() =='' || $("#cpassword").val()=='' ){ 
    alert("Please fill password and confirm password !! ");
      return false;
  }
  
  

if($("#password").val() != $("#cpassword").val() ){ 
    alert("Password and confirm password are not same!! ");
      return false;
  }
  
  
  
	 $.ajax({

                       type:"GET",
           	           url:"<?php echo url('Changepassword'); ?>",
           	           dataType: 'text',
                       data: {email:$('#email').val(),password:$("#password").val()},
                       cache: false,
                       success: function (res) {
                           
                        $('#alert_success').show();
                        $('#alerttext_success').text(res);
                        $("#password").val(""); 
                        $("#cpassword").val(""); 
                        
              
               
                        
                               }
         });

 return false;
  
  

    });
</script>