@extends('layouts.master')
@section('page-css')
@endsection

@section('main-content')
<div class="breadcrumb">
	<h1>{{__('FMR')}}</h1>

</div>
<div class="separator-breadcrumb border-top"></div>

<div class="row mb-4">
	<div class="col-md-12">

	</div>
</div>
<!-- end of row -->

<div class="row mb-4">
	<div class="col-md-12 mb-4">
		<div class="card text-left">

			<div class="card-body">
				<!-- END: Subheader -->
				<div class="m-content">
					
										</div>

					<div id="export_div">
						<div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible m--margin-bottom-30" role="alert">
							<div class="m-alert__icon">
								<i class="flaticon-exclamation m--font-brand"></i>
							</div>
							<div class="m-alert__text">
								<h5 class="m-portlet__head-text">
									View Details of {{$data['report_no']}}
								</h5>


								<h9 style="font-weight:500">Station Name : {{$data['station']->station_name}}</h9>
								<br>
								<h9 style="font-weight:500">Supervisor : {{$data['supervisor']->firstname}} {{$data['supervisor']->lastname}}</h9>
								<br>
								<h9 style="font-weight:500">Manager : {{$data['manager']->firstname}} {{$data['manager']->lastname}}</h9>
								<br>
								<?php if ($data['employee']) { ?>
									<h9 style="font-weight:500">Employee : {{$data['employee']->firstname}} {{$data['employee']->lastname}}</h9>

								<?php } ?>
							</div>
						</div>


						<!-- ////////////////LIST  CONTENT STATRT-->





						<div class="row" style="margin-left:1%">

							<div class="col-xl-12">

								<!--begin:: Widgets/Support Cases-->
								<div class="m-portlet  m-portlet--full-height ">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text" style="font-weight:500">
													{{__('FMR Details')}}
												</h3>
											</div>
											
									</div>
									<div class="m-portlet__body">
										<div class="m-widget16">
											<div class="row">
												<div class="col-md3"></div>
												<div class="col-md-8">

													<div class="m-widget16__body">




														<div class="m-widget16__item">
															<span class="m-widget16__date" style="font-weight:500;color:black;margin-right:34%">
																{{__('Date')}}
															</span>
															<span class="m-widget16__price m--align-left m--font-brand" style="color:black !important">
																<?php echo $data['list']->date; ?>

															</span>
														</div>
														<div class="m-widget16__item">
															<span class="m-widget16__date" style="font-weight:500;color:black;margin-right:30%">
																{{__('Category')}}
															</span>
															<span class="m-widget16__price m--align-left m--font-brand" style="color:black !important">
																<?php echo $data['list']->category_name; ?>

															</span>
														</div>
														<div class="m-widget16__item">
															<span class="m-widget16__date" style="font-weight:500;color:black;margin-right:29%">
																{{__('Issue Type')}}
															</span>
															<span class="m-widget16__price m--align-left m--font-brand" style="color:black !important">
																<?php echo $data['list']->issue_type; ?>

															</span>
														</div>

														<div class="m-widget16__item">
															<span class="m-widget16__date" style="font-weight:500;color:black;margin-right:32%">
																{{__('Priority')}}
															</span>
															<span class="m-widget16__price m--align-left m--font-brand" style="color:black !important">
																<?php echo $data['list']->priority; ?>

															</span>
														</div>

														<div class="m-widget16__item">
															<span class="m-widget16__date" style="font-weight:500;color:black;margin-right:33%">
																{{__('Notes')}}
															</span>
															<span class="m-widget16__price m--align-left m--font-brand" style="color:black !important">
																<?php echo $data['list']->notes; ?>

															</span>
														</div>

														<div class="m-widget16__item">
															<span class="m-widget16__date" style="font-weight:500;color:black;margin-right:32%">
																{{__('Images')}}
															</span>
															<span class="m-widget16__price m--align-left m--font-brand" style="color:black !important">

																<?php $i = 0;if($data['list']->images != "" && $data['list']->images != "[null]" && !empty($data['list']->images) && strpos($data['list']->images, 'null') === false){
																foreach (json_decode($data['list']->images) as $picture) { ?>
																	<a href="{{$picture->uri}}" target="_blank"><img class="avatar-lg mb-3 mb-sm-0 rounded mr-sm-3" src="{{$picture->uri}}" alt=""></a>
																<?php } }?>
															</span>
														</div>

														<div class="m-widget16__item">
															<span class="m-widget16__date" style="font-weight:500;color:black;margin-right:24%">
																{{__('Employee Notes')}}
															</span>
															<span class="m-widget16__price m--align-left m--font-brand" style="color:black !important">
																<?php echo $data['list']->employee_notes; ?>

															</span>
														</div>

														<div class="m-widget16__item">
															<span class="m-widget16__date" style="font-weight:500;color:black;margin-right:22%">
																{{__('Employee Images')}}
															</span>
															<span class="m-widget16__price m--align-left m--font-brand" style="color:black !important">
																<?php if($data['list']->employee_images != "" && $data['list']->employee_images != "[null]" && !empty($data['list']->employee_images) && strpos($data['list']->employee_images, 'null') === false){
																	$i = 0;
																	foreach (json_decode($data['list']->employee_images) as $picture) { 

                                                                        if(!empty($picture)){
																		?>
																		<a href="{{$picture->uri}}" target="_blank"><img class="avatar-lg mb-3 mb-sm-0 rounded mr-sm-3" src="{{$picture->uri}}" alt=""></a>
																<?php } }
																} ?>

															</span>
														</div>


														<div class="m-widget16__item">
															<span class="m-widget16__date" style="font-weight:500;color:black;margin-right:30%">
																{{__('Deadline')}}
															</span>
															<span class="m-widget16__price m--align-left m--font-brand" style="color:black !important">
																<?php echo $data['list']->deadline; ?>

															</span>
														</div>


														<div class="m-widget16__item">
															<span class="m-widget16__date" style="font-weight:500;color:black;margin-right:32%">
																{{__('Status')}}
															</span>
															<span class="m-widget16__price m--align-left m--font-brand" style="color:black !important">
																<?php echo $data['list']->status; ?>

															</span>
														</div>





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




					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- end of col -->

	@endsection

	@section('page-js')


	<script src="{{asset('assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
	<script src="{{asset('assets/js/modal.script.js')}}"></script>
	<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/form.validation.script.js')}}"></script>

	<script>
		
		/*function onClick() {
    $("#export").hide();
    /*html2canvas(document.getElementById("export_div"), {allowTaint : true,quality: 4,
      onrendered: function(canvas) {

        var img = canvas.toDataURL("image/png");
        var doc = new jsPDF();
        doc.addImage(img, 'JPEG', 0, 0);
        doc.save('test.pdf');
      }

    });*/
		/*html2canvas($("#export_div"), {
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
  position += heightLeft - imgHeight; // top padding for other pages
  doc.addPage();
  doc.addImage(imgData, 'JPG', 0, position, imgWidth, imgHeight);
  heightLeft -= pageHeight;
}
doc.save( 'file.pdf');
          }
         });
  };
  
  
  var element = document.getElementById("export");
  element.addEventListener("click", onClick);*/
	</script>