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
								<h3 class="m-subheader__title m-subheader__title--separator">Survey Details</h3>
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
					    <div id="export_div">
						<div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible m--margin-bottom-30" role="alert">
							<div class="m-alert__icon">
								<i class="flaticon-exclamation m--font-brand"></i>
							</div>
							<div class="m-alert__text">
								<h5 class="m-portlet__head-text">
									View Details of {{$data['survey_no']}}
										</h5>
										<h9 style="font-weight:500">Date : {{$data['date']}}</h9>
										<br>
										<h9 style="font-weight:500">Station Code : {{$data['station'][0]->station_code}}</h9>
										<br>
										<h9 style="font-weight:500">Station Name : {{$data['station'][0]->station_name}}</h9>
										<br>
										<h9 style="font-weight:500">Supervisor : {{$data['supervisor'][0]->firstname}}</h9>
										
							</div>
						</div> 


<!-- ////////////////LIST  CONTENT STATRT-->





						<div class="row">
							<div class="col-xl-12">

								<!--begin:: Widgets/Support Cases-->
								<div class="m-portlet  m-portlet--full-height ">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text" style="font-weight:500">
													Survey Details
												</h3>
											</div>
											
											<div class="row">
												
													<div class="col-lg-12 m--align-right">
														<button name="export"  id="export"  type="button" class="btn btn-warning" style="margin-left:500px;">Export</button>
													</div>
												</div>
										</div>
										<div class="m-portlet__head-tools">
											<ul class="m-portlet__nav">
												<li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
													<a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
														<i class="la la-ellipsis-h m--font-brand"></i>
													</a>
													<div class="m-dropdown__wrapper">
														<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
														
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="m-portlet__body">
										<div class="m-widget16">
											<div class="row">
											    <div class="col-md-2"></div>
												<div class="col-md-8">
													
													<div class="m-widget16__body">

													
<?php foreach($data['list'] as $row){
    
@$obj = $row->survey_response;
$json_array = json_decode($obj,true);    
    
foreach($json_array as $key => $arrays){ ?>
   <b><h6 style="font-weight:500">{{$key}}</h6></b><br/>
    <?php foreach($arrays as $array){
        foreach($array as $key => $value){ 
        if($key=="label" || $key=="notes" || $key=="label_answer" || $key=="images"){ ?>
            <div class="m-widget16__item" <?php if($key=="images"){?>style="border-bottom: 0; !important"<?php } ?>>
															<span class="m-widget16__date" style="font-weight:500;color:black;">
															<?php if($key=="label_answer") echo "condition"; else echo $key;?>
															</span>
															<span class="m-widget16__price m--align-left m--font-brand" style="color:black !important;">
															<?php if($key=="images"){

																  if($row->images!=""){
															      $obj = $value;
$stringify = json_decode($obj,true);
foreach ($stringify as $key => $value) {?>
    
    <a href="<?php echo $value["imgname"] ?>"  target="_blank"><img src="<?php echo $value["imgname"] ?>" style="width:200px;height: 200px;margin-top: 10px" ></a>
												
<?php  } } else { echo "No image" ; }
															}  else echo $value;?>
															
															</span>
														</div>
														
														
    <?php  }  }
     echo "<hr size='8' width='100%' color='black'>";
    }
    echo "<br />";
}} ?>




														


														

														

														

														



													
													</div>
												</div>
												<div class="col-md-2"></div>
											
											</div>
										</div>
									</div>
								</div>

								<!--end:: Widgets/Support Stats-->
							</div>
							
						</div>





						


<!-- ////////////////LIST  CONTENT END-->



				
					</div></div></div></div>

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
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
       

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>

<script>
    

function onClick() {
    $("#export").hide();
    /*html2canvas($("#export_div"), {allowTaint : true,quality: 4,
      onrendered: function(canvas) {

        var img = canvas.toDataURL("image/png");
        var doc = new jsPDF();
        var options = {
         pagesplit: true
    };
        doc.addImage(img, 'JPEG', 0, 0);
        doc.save('test.pdf');
      }

    });*/
    html2canvas($("#export_div"), {
        useCORS: true,
        onrendered: function (canvas) {
        var imgData = canvas.toDataURL('image/jpg');
var imgWidth = 210; 
var pageHeight = 295;  
var imgHeight = canvas.height * imgWidth / canvas.width;
var heightLeft = imgHeight;
var doc = new jsPDF('p', 'mm');
var position = 10; // give some top padding to first page

doc.addImage(imgData, 'JPG', 0, position, imgWidth, imgHeight);
heightLeft -= pageHeight;

while (heightLeft >= 0) {
  position = heightLeft - imgHeight; // top padding for other pages
  doc.addPage();
  doc.addImage(imgData, 'JPG', 0, position, imgWidth, imgHeight);
  heightLeft -= pageHeight;
}
doc.save( 'file.pdf');
          }
         });
  };
  
  
  var element = document.getElementById("export");
  element.addEventListener("click", onClick);
  
  

</script>
 
 