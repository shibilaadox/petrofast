<?php
use App\Models\Survey_frontend;
use App\Models\User;
use App\Models\Station;
?>

<!DOCTYPE html>

<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<style>
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}


.select2-result-label .wrap:before {
  position: absolute;
  left: 4px;
  font-family: fontAwesome;
  color: #999;
  content: "\f096";
  width: 25px;
  height: 25px;
}

.select2-result-label .wrap.checked:before {
  content: "\f14a";
}

.select2-result-label .wrap {
  margin-left: 15px;
}


/* not required css */

.row {
  padding: 10px;
}
</style>
<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>{{ Config::get('siteVars.title') }}</title>
		<meta name="description" content="Pagination options datatables examples">
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
		<link href="{{url('')}}/assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="{{url('')}}/assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
		<link href="{{url('')}}/assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="{{url('')}}/assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Global Theme Styles -->

		<!--begin::Page Vendors Styles -->
		<link href="{{url('')}}/assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="{{url('')}}/assets/vendors/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

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
				<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

					<!-- BEGIN: Aside Menu -->

					  @include('Common.menu')
					<!-- END: Aside Menu -->
				</div>

				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">

					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">Supervisor's Progress Reports</h3>
								<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
									<!-- <li class="m-nav__item m-nav__item--home">
										<a href="#" class="m-nav__link m-nav__link--icon">
											<i class="m-nav__link-icon la la-home"></i>
										</a>
									</li> -->
									<!-- <li class="m-nav__separator">-</li> -->
								<!-- 	<li class="m-nav__item">
										<a href="" class="m-nav__link">
											<span class="m-nav__link-text">DataTables</span>
										</a>
									</li>
									<li class="m-nav__separator">-</li>
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
											<span class="m-nav__link-text">Basic</span>
										</a>
									</li>
									<li class="m-nav__separator">-</li>
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
											<span class="m-nav__link-text">Pagination Options</span>
										</a>
									</li> -->
								</ul>
							</div>
							<div>
								<!--<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
									<a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
										<i class="la la-plus m--hide"></i>
										<i class="la la-ellipsis-h"></i>
									</a>
									<div class="m-dropdown__wrapper">
										<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
										<div class="m-dropdown__inner">
											<div class="m-dropdown__body">
												<div class="m-dropdown__content">
													<ul class="m-nav">
														<li class="m-nav__section m-nav__section--first m--hide">
															<span class="m-nav__section-text">Quick Actions</span>
														</li>
														<li class="m-nav__item">
															<a href="" class="m-nav__link">
																<i class="m-nav__link-icon flaticon-share"></i>
																<span class="m-nav__link-text">Activity</span>
															</a>
														</li>
														<li class="m-nav__item">
															<a href="" class="m-nav__link">
																<i class="m-nav__link-icon flaticon-chat-1"></i>
																<span class="m-nav__link-text">Messages</span>
															</a>
														</li>
														<li class="m-nav__item">
															<a href="" class="m-nav__link">
																<i class="m-nav__link-icon flaticon-info"></i>
																<span class="m-nav__link-text">FAQ</span>
															</a>
														</li>
														<li class="m-nav__item">
															<a href="" class="m-nav__link">
																<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																<span class="m-nav__link-text">Support</span>
															</a>
														</li>
														<li class="m-nav__separator m-nav__separator--fit">
														</li>
														<li class="m-nav__item">
															<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>-->
							</div>
						</div>
					</div>

					<!-- END: Subheader -->
					<div class="m-content">
					<!-- 	<div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible m--margin-bottom-30" role="alert">
							<div class="m-alert__icon">
								<i class="flaticon-exclamation m--font-brand"></i>
							</div>
							<div class="m-alert__text">
								The default page control presented by DataTables (forward and backward buttons with up to 7 page numbers in-between) is fine for most situations.
							</div>
						</div> -->


<!-- ////////////////LIST  CONTENT STATRT-->





						<div class="m-portlet m-portlet--mobile hidediv" id="listid">
							<div class="m-portlet__head">
								<div class="m-portlet__head-caption">
									<div class="m-portlet__head-title">
										<h3 class="m-portlet__head-text">
											Supervisor's Progress 
										</h3>
									</div>

								</div>
								<!--<div class="col-md-4 m-portlet__head-tools">
                                   	<select required class="form-control m-select2 select_class" id="login_type_filter" name="login_type_filter"  style="width: 100%">

                                                                          <option value="">Select</option>
                                                                          <option  value="Admin" >Admin (Account Manager)</option>
                                                                          <option  value="StationManager">Station Manager</option>
                                                                          <option  value="Collector" >Collector</option>
                                                                          <option value="Treasurer">Treasurer</option>
                                                                          <option  value="StationSupervisor">Station Supervisor</option>
                                                                          <option  value="CollectorSupervisor">Collector Supervisor</option>
                                                                     

                                                                             </select>
                                   </div>-->

								<div class="m-portlet__head-tools">
                                   

									
									</ul>
								</div>
							</div>
							<div class="m-portlet__body">
							    <form class="m-form m-form--fit m-form--label-align-right"  method="get" enctype="multipart/form-data">
								<div class="m-portlet__body">
                                    

                                                   
								                   <div class="form-group m-form__group row">
																	
																	
															<?php 
															$from_date=date('Y-m-d');
                                                            $to_date=date('Y-m-d');
															 if(isset($_GET['from_date'])){
																$from_date=$_GET['from_date'];
															}
															if(isset($_GET['to_date'])){
																$to_date=$_GET['to_date'];
															}
															?> 

															     <div class="col-lg-6 col-md-9 col-sm-12">
																	<label class="col-form-label">Date Range</label>
																	<div class="row">
																	<div class="col-lg-6 col-md-9 col-sm-12">
																			<input placeholder="form date" type="text" required class="form-control m-input date_class" id="from_date"  value="{{$from_date}}" name="from_date" readonly>
                                                                      </div>

																	<div class="col-lg-6 col-md-9 col-sm-12">
																			<input placeholder="to date" type="text" required class="form-control m-input date_class" id="to_date" value="{{$to_date}}"   name="to_date" readonly>
                                                                    </div>
                                                                </div>

															</div>
															<div class="col-lg-3 col-md-9 col-sm-12" style="margin-top:10px;">
																		<label class="col-form-label col-lg-3 col-sm-12">Supervisor</label>
																			<select  class="form-control m-select2 select_class" id="supervisor" name="supervisor"  style="width: 100%">

                                                                             <option value="">Select</option>
                                                                             <option value="All"
                                                                             <?php if(isset($_GET['supervisor']) && $_GET['supervisor']=='All'){ echo "selected"; }?>
                                                                             >All</option>
                                                                             <?php
                                                                             foreach($data['all_supervisors_list'] as $row){ ?>
                                                                             	<option value="{{$row->id}}"
                                                                             		<?php if(isset($_GET['supervisor']) && $_GET['supervisor']==$row->id){ echo "selected"; }?>

                                                                             		>{{$row->firstname}}</option>

                                                                             <?php  }  ?>
                                                                         
                                                                          
                                                                     

                                                                             </select>
																		
																	</div>
																	
																	<div class="col-lg-3 col-md-9 col-sm-12" style="margin-top:10px;">
																		<label class="col-form-label col-lg-3 col-sm-12">Station</label>
																			<select  class="form-control m-select2 select_class" id="station" name="station"  style="width: 100%">

                                                                             <option value="">Select</option>
                                                                             <option value="All"
                                                                             <?php if(isset($_GET['station']) && $_GET['station']=='All'){ echo "selected"; }?>
                                                                             >All</option>
                                                                             <?php
                                                                             foreach($data['stations'] as $row){ ?>
                                                                             	<option value="{{$row->id}}"
                                                                             		<?php if(isset($_GET['station']) && $_GET['station']==$row->id){ echo "selected"; }?>

                                                                             		>{{$row->station_name}}</option>

                                                                             <?php  }  ?>
                                                                         
                                                                          
                                                                     

                                                                             </select>
																		
																	</div>


                                                
																	
																
												</div> 


												

								</div>

								                 <div class="row">
												
													<div class="col-lg-6 m--align-right" style="margin-left: 7%">
														<button name="get_report"  id="get_report"  type="submit" class="btn btn-primary">Apply</button>
													</div>
												</div>
							</form>

								<!--begin: Datatable -->
								<table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_2">
									<thead>
										<tr>
											<th>SL No</th>
											<th>Username</th>
											<th>Firstname</th>
											<th>Lastname</th>
											<th>Assigned Stations</th>
											<th>Completed Stations</th>
											
										</tr>

									</thead>
									<tbody>
       
		                             
		                              
		                              <?php $i=0; foreach($data['supervisors_list'] as $row) { $i++;
                                            
                                            
                                            $completed = Survey_frontend::where('status',"Completed")->where('supervisor',$row->id)->groupBy('station');
                                            if(!isset($_GET['from_date']) && !isset($_GET['to_date'])){
                                            $completed = $completed->where('date', date("Y-m-d"));
                                            }
                                            
                                           /* if(isset($_GET['station']) && $_GET['station']!="All"){
                                            $completed =  $completed->where('station',$_GET['station']);                                   
                                            }*/
                                            
                                            if(isset($_GET['from_date']) && isset($_GET['to_date'])){
                                            $from_date=$_GET['from_date'];
                                            $to_date=$_GET['to_date'];
                                            $completed = $completed->whereBetween('date', [$from_date, $to_date]);
                                            }
                                            
                                            $completed = $completed->get();
                                            
                                            
                                            $completed_station_all = "";
                                            foreach($completed as $row3){
                                                $st = Station::select('station_name','id')->where('id',$row3->station)->get();
                                                if($completed_station_all=="")
                                                $completed_station_all = $st[0]->station_name; 
                                                else
                                                $completed_station_all = $completed_station_all." , ".$st[0]->station_name;
                                               
                                            } 
                                            
                                            
                                             
                                            $stations = array();
                                            $station_all = array();
                                            $stations_list = User::select('stations')->where('id',$row->id)->get();
                                            @$stations = $stations_list[0]->stations;
                                            $stations = explode(",",$stations);
                                           
                                            $station_all = "";
                                            foreach($stations as $row1){
                                                $st = Station::select('station_name','id')->where('id',$row1)->get();
                                                if($station_all=="")
                                                $station_all = $st[0]->station_name; 
                                                else
                                                $station_all = $station_all." , ".$st[0]->station_name;
                                               
                                            }
                                           
                                            

                                            $name = User::select('username','firstname')->where('id',$row->id)->get();
                                            @$name = $name[0]->firstname;

                                            ?>

									  
                                          <tr id="trrow{{$row->id}}">
											<td>{{$i}}</td>
											<td>{{$row->username}}</td>
											<td>{{$row->firstname}}</td>
											<td>{{$row->lastname}}</td>
											<td>{{$station_all}}</td>
											<td><?php if($completed_station_all=="")echo "No Completed Surveys"; else echo $completed_station_all;?></td>
				
										</tr>

                                    <?php } ?>
										
									  
                                         
										
									</tbody>
								</table>
							</div>
						</div>




<!-- ////////////////LIST  CONTENT END-->












				
					</div></div></div>

			<!-- end:: Body -->

















			<!-- begin::Footer -->
			@include('Common.footer')
			<!-- end::Footer -->
		</div>

		<!-- end:: Page -->


		<!--begin::Global Theme Bundle -->
		<script src="{{url('')}}/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="{{url('')}}/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors -->
		<script src="{{url('')}}/assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

		<!--end::Page Vendors -->

		<!--begin::Page Scripts -->
		<script src="{{url('')}}/assets/demo/default/custom/crud/datatables/basic/paginations.js" type="text/javascript"></script>

		<script src="{{url('')}}/assets/demo/default/custom/crud/forms/widgets/select2.js" type="text/javascript"></script> 

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>

<script>
    $('.date_class').datepicker({
   format: 'yyyy-mm-dd'
});

$('#m_table_2').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
</script>
 

