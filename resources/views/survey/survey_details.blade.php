@extends('layouts.master')
@section('page-css')
@endsection

@section('main-content')
<div class="breadcrumb">
	<h1>{{__('Survey')}}</h1>

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
					<div id="export_div" class="html-content">
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
								<h9 style="font-weight:500">Station Code : {{$data['station']->station_code}}</h9>
								<br>
								<h9 style="font-weight:500">Station Name : {{$data['station']->station_name}}</h9>
								<br>
								<h9 style="font-weight:500">Supervisor : {{$data['supervisor']->firstname}} {{$data['supervisor']->lastname}}</h9>


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
													{{__('Survey Details')}}
												</h3>
											</div>
											
												
													<div class="col-lg-12 m--align-right">
														<button name="export"  id="export"  type="button" class="btn btn-warning" style="margin-left:500px;" onclick="CreatePDFfromHTML('<?php echo $data['survey_no']?>')">Export</button>
													</div>
												
										</div>

									</div>
									<div class="m-portlet__body">
										<div class="m-widget16">
											<div class="row">
												<div class="col-md3"></div>
												<div class="col-md-8">

													<div class="m-widget16__body">


														<?php foreach ($data['list'] as $row) {

															@$obj = $row->survey_response;
															$json_array = json_decode($obj, true);

															foreach ($json_array as $key => $arrays) { ?>
																<b>
																	<h5 style="font-weight:500">{{$key}}</h5>
																</b>
																<?php foreach ($arrays as $array) {
																	foreach ($array as $key => $value) {
																		if ($key == "question" || $key == "notes" || $key == "label_answer" || $key == "images") { ?>
																			<div class="m-widget16__item" <?php if ($key == "images") { ?>style="border-bottom: 0; !important" <?php } ?>>

																				<?php if($key=="question"){ ?>
																				<span class="m-widget16__date" style="font-weight:500;color:black;margin-right:28%">
																					<?php if ($key == "label_answer") echo ucfirst("status");
																					else echo ucfirst($key); ?>
																				</span>
																				<?php } else if($key=="notes"){?>
																				<span class="m-widget16__date" style="font-weight:500;color:black;margin-right:31%">
																					<?php if ($key == "label_answer") echo ucfirst("status");
																					else echo ucfirst($key); ?>
																				</span>
																			  
																				<?php } else { ?>
																				<span class="m-widget16__date" style="font-weight:500;color:black;margin-right:30%">
																					<?php if ($key == "label_answer") echo ucfirst("status");
																					else echo ucfirst($key); ?>
																				</span>
																				<?php } ?>
																				<span class="m-widget16__price m--align-left m--font-brand" style="color:black !important;">
																					<?php if ($key == "images") {


																						$obj = $value;
																						$stringify = json_decode($obj, true);
																						foreach ($stringify as $key => $value) { ?>

																							<a href="<?php echo $value["imgname"] ?>" target="_blank"><img src="<?php echo $value["imgname"] ?>" style="width:200px;height: 200px;margin-top: 10px"></a>

																					<?php  }
																					} else echo $value; ?>

																				</span>
																			</div>


														<?php  }
																	}
																	echo "<hr size='8' width='100%' color='black'>";
																}
																echo "<br />";
															}
														} ?>

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

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>

    <script type="text/javascript">
    	

    function CreatePDFfromHTML(name_pdf) {
    	
    	$("#export").hide();
    	var HTML_Width = $(".html-content").width();
    	var HTML_Height = $(".html-content").height();
    	var top_left_margin = 15;
    	var PDF_Width = HTML_Width + (top_left_margin * 2);
    	var PDF_Height = (PDF_Width * 1.5) + (top_left_margin * 2);
    	var canvas_image_width = HTML_Width;
    	var canvas_image_height = HTML_Height;

    	var totalPDFPages = Math.ceil(HTML_Height / PDF_Height) - 1;

    	html2canvas($(".html-content")[0], {useCORS: true}).then(function (canvas) {
        	var imgData = canvas.toDataURL("image/jpeg", 1.0);
        	var pdf = new jsPDF('p', 'pt', [PDF_Width, PDF_Height]);
        	pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin, canvas_image_width, canvas_image_height);
        	for (var i = 1; i <= totalPDFPages; i++) { 
            	pdf.addPage(PDF_Width, PDF_Height);
            	pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height*i)+(top_left_margin*4),canvas_image_width,canvas_image_height);
        	}
        	pdf.save(name_pdf+".pdf");
        	//$(".html-content").hide();
    	});
    	$("#export").show();
    }

    </script>
