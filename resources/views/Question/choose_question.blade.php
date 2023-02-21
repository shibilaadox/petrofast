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
								<h3 class="m-subheader__title m-subheader__title--separator">Permission Setting</h3>
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
								<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
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
								</div>
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
											List of Permissions
										</h3>
									</div>
								</div>
								<div class="m-portlet__head-tools">
									<ul class="m-portlet__nav">
									<!-- 	<li class="m-portlet__nav-item">
											<button onclick="show('addid')" class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air">
												<span>
													<i class="la la-plus"></i>
													<span>Add New </span>
												</span>
											</button>
										</li>
										<li class="m-portlet__nav-item"></li>
									 -->
									</ul>
								</div>
							</div>
							<div class="m-portlet__body">

								<!--begin: Datatable -->
								<table class="table table-striped- table-bordered table-hover table-checkable" >
									<thead>
										<tr>
											<th>Question Category</th>
											<th>Question</th>
											<th>Choose</th>

                                           
										</tr>

									</thead>

										<tbody>

                                  <?php foreach($data['question'] as $row){
											
											?>
										
                                          <tr>
											
											<td>{{$row->name}}</td>
											<td>{{$row->label}}</td>

											 <?php 
											 	$checked="";
											 	$checkmenu= $row->id;
											 	
											 	$st_id = explode(',',@$data['station'][0]->questions);
												if (in_array($checkmenu, $st_id)) {
  												$checked="checked";
												}  

											 

											  ?>
                                             	<td>
                                             	
												<label class="m-checkbox m-checkbox--check-bold m-checkbox--state-brand">
												<input type="checkbox" value="{{$row->id}}" data-id="{{$data['id']}}" class="qstns_class" <?php echo $checked;?> name="yt"> <span></span>
												</label>

											   </td>

                                           


											
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
 


<script type="text/javascript">

	yourArray = [];
	$(".qstns_class").click(function(){

		  yourArray = [];
          var id =$(this).attr('data-id');

          $("input:checkbox[name=yt]:checked").each(function(){
          yourArray.push($(this).val());
          });

          value = yourArray.toString();
          //value = ","+value+",";

          
          
          
          $.ajax({

                       type:"GET",
           	           url:"<?php echo url('qstn_update'); ?>",
           	           dataType: 'text',
                       data: {value:value,id:id},
                       success: function (res) {
                         
                      }
          });



});

</script>