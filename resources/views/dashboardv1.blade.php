@extends('layouts.master')
@section('main-content')
<style>
    #myChart1 {
        height: 300px !important;
    }
</style>
<div class="breadcrumb">

    <ul>
        <li><a href="">{{__('Dashboard')}}</a></li>

    </ul>
</div>

<div class="separator-breadcrumb border-top"></div>

<div class="row">
    <!-- ICON BG -->

    <div class="col-lg-3 col-md-6 col-sm-6">
        <a class="" href="{{route('stations.index')}}">
            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4 bg-warning">
                <div class="card-body text-center">
                    <i class="i-Suitcase"></i>
                    <div class="content">
                        <p class="text-white mt-2 mb-0">{{__('Stations')}}</p>
                        <p class="text-white text-24 line-height-1 mb-2">{{$data['count_station']}}</p>
                    </div>
                </div>
            </div>
        </a>
    </div>


    <div class="col-lg-3 col-md-6 col-sm-6">
        <a class="" href="{{route('users.index')}}">
            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4 bg-danger">
                <div class="card-body text-center">
                    <i class="i-Add-User"></i>
                    <div class="content">
                        <p class="text-white mt-2 mb-0">{{__('Supervisors')}}</p>
                        <p class="text-white text-24 line-height-1 mb-2">{{$data['count_supervisors']}}</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <a class="" href="{{route('surveyquestions.index')}}">
            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4 bg-success">
                <div class="card-body text-center">
                    <i class="i-File-Clipboard-File--Text"></i>
                    <div class="content">
                        <p class="text-white mt-2 mb-0">{{__('Surveys')}}</p>
                        <p class="text-white text-24 line-height-1 mb-2">{{$data['count_surveys']}}</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-lg-3 col-md-6 col-sm-6">
        <a class="" href="{{route('fmrs.index')}}">
            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4 bg-warning">
                <div class="card-body text-center">
                    <i class="i-Library"></i>
                    <div class="content">
                        <p class="text-white mt-2 mb-0">{{__('FMR')}}</p>
                        <p class="text-white text-24 line-height-1 mb-2">{{$data['count_fmr']}}</p>
                    </div>
                </div>
            </div>
        </a>
    </div>


</div>


<div class="row">
    <div class="col-lg-8 col-md-12">
        <div class="card mb-4" style="height:380px;">
           
                
                <div class="card-header d-flex align-items-center border-0 bg-info">
                    <h3 class="w-50 float-left card-title m-0" style="color:white;font-size:15px;">{{__('Last 6 Months FMR Requests')}}</h3>
                </div>
                <div class="card-body">
                <div class="m-widget3__item">


                    <canvas id="myChart1" width="300" height="200"></canvas>



                </div>
                </div>
        </div>
       
    </div>
    <div class="col-lg-4 col-sm-12">
        <div class="card mb-4" style="height:380px;">
           
               
                <div class="card-header d-flex align-items-center border-0 bg-info">
                    <h3 class="w-50 float-left card-title m-0" style="color:white;font-size:15px;">{{__('Weekly FMR Report')}}</h3>
                </div>
                 <div class="card-body">
                <div class="m-widget3__item">


                    <canvas id="myChart" width="300" height="250"></canvas>



                </div>

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-8 col-md-12">
        <div class="card mb-4" style="height:380px;">
           
                
                <div class="card-header d-flex align-items-center border-0 bg-info">
                    <h3 class="w-50 float-left card-title m-0" style="color:white;font-size:15px;">{{__('Last 6 Months Survey')}}</h3>
                </div>
                <div class="card-body">
                <div class="m-widget3__item">


                    <canvas id="myChart2" width="300" height="120"></canvas>



                </div>
                </div>
        </div>
       
    </div>
    <div class="col-lg-4 col-sm-12">
        <div class="card mb-4" style="height:380px;">
           
               
                <div class="card-header d-flex align-items-center border-0 bg-info">
                    <h3 class="w-50 float-left card-title m-0" style="color:white;font-size:15px;">{{__('Station Wise Survey')}}</h3>
                </div>
                 <div class="card-body">
                <div class="m-widget3__item">


                    <canvas id="myChart3" width="300" height="260"></canvas>



                </div>

            </div>
        </div>
    </div>
</div>




<div class="row">
    <div class="col-lg-6 col-md-12">

        <div class="row">
            <div class="col-md-12">
                <div class="card o-hidden mb-4">
                    <div class="card-header d-flex align-items-center border-0 bg-info">
                        <h3 class="w-50 float-left card-title m-0" style="color:white;font-size:15px;">{{__('New Users')}}</h3>

                    </div>

                    <div class="">
                        <div class="table-responsive">
                            <table id="user_table" class="table  text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">{{__('Name')}}</th>
                                        <th scope="col">{{__('Profile Picture')}}</th>
                                        <th scope="col">{{__('Role')}}</th>
                                        <th scope="col">{{__('Email')}}</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($data['new_users'] as $row) { ?>
                                        <tr>
                                            <th scope="row">{{$i}}</th>
                                            <td>{{$row->firstname}}</td>
                                            <td>
                                                
                                                <img class="rounded-circle m-0 avatar-sm-table " src="{{$row->profile_pic}}" alt="">
                                                
                                                
                                            </td>
                                            <td>{{$row->login_type}}</td>
                                            <td>{{$row->email}}</td>


                                        </tr>
                                    <?php $i++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>

    
     <div class="col-lg-6 col-md-12">

        <div class="row">
            <div class="col-md-12">
                <div class="card o-hidden mb-4">
                    <div class="card-header d-flex align-items-center border-0 bg-info">
                        <h3 class="w-50 float-left card-title m-0" style="color:white;font-size:15px;">{{__('Latest FMRS')}}</h3>

                    </div>

                    <div class="">
                        <div class="table-responsive">
                            <table id="user_table" class="table  text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">{{__('No')}}</th>
                                        <th scope="col">{{__('category')}}</th>
                                        <th scope="col">{{__('Issue Type')}}</th>
                                        <th scope="col">{{__('Status')}}</th>
                                        <th scope="col">{{__('Image')}}</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $j = 1;
                                    foreach ($data['new_fmrs'] as $row) { ?>
                                        <tr>
                                            <th scope="row">{{$j}}</th>
                                            <td>{{$row->report_num}}</td>
                                            
                                            <td>{{$row->category_name}}</td>
                                            <td>{{$row->issue_type}}</td>
                                            <td>{{$row->status}}</td>
                                            <td>
                                                
                                                <?php $i = 0; if($row->images != "" && $row->images != "[null]" && !empty($row->images) && strpos($row->images, 'null') === false){
                                                foreach (json_decode($row->images) as $picture) {
                                                if ($i == 0) { ?>
                                                <?php if(is_file($picture->uri)) {?>
                                                    <img class="avatar-lg mb-3 mb-sm-0 rounded mr-sm-3" src="{{$picture->uri}}" alt="">
                                                <?php } else {?>
                                                    <img class="avatar-lg mb-3 mb-sm-0 rounded mr-sm-3" src="https://odoos.in/apps/PetroFast_New/assets/images/logo.png" alt="" style="width: 70%;
    height: auto;">
                                                <?php } ?>
                                                <?php }
                                                    $i++;
                                                } }?>
                                                
                                            </td>
                                             

                                        </tr>
                                    <?php $j++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>




</div>


@endsection

@section('page-js')
<script src="{{asset('assets/js/vendor/echarts.min.js')}}"></script>
<script src="{{asset('assets/js/es5/echart.options.min.js')}}"></script>
<script src="{{asset('assets/js/es5/dashboard.v1.script.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>


<script type="text/javascript">
    jQuery(document).ready(function() {
        var chartDiv = $("#myChart");
        labels1 = [];
        data1 = [];

        labels1[0] = "{{__('New')}}";
        data1[0] = <?php echo $data['fmr_new'] ?>;

        labels1[1] = "{{__('Ongoing')}}";
        data1[1] = <?php echo $data['fmr_ongoing'] ?>;

        labels1[2] = "{{__('Delayed')}}";
        data1[2] = <?php echo $data['fmr_delayed'] ?>;

        labels1[3] = "{{__('Assigned')}}";
        data1[3] = <?php echo $data['fmr_assigned'] ?>;

        labels1[4] = "{{__('Completed')}}";
        data1[4] = <?php echo $data['fmr_completed'] ?>;


        var myChart = new Chart(chartDiv, {
            type: 'doughnut',
            data: {
                labels: labels1,
                datasets: [{
                    data: data1,
                    backgroundColor: ["#c76161","#91cf91","#7157d8","#e2b564","#e37fe3"]
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'Doughnut Chart'
                },
                elements: {
                    arc: {
                        borderWidth: 0.8
                    }
                },
                responsive: true,
                maintainAspectRatio: false,
            }
        });
    });





    var fmrs = <?php echo $data['fmr'] ?>;
    labels2 = [];
    data2 = [];


    for (var i = 0; i < fmrs.length; i++) {
        labels2[i] = fmrs[i].label;
        data2[i] = fmrs[i].value;
    }


    var fmrData = {
        labels: labels2,
        datasets: [{
            label: "FMR",
            data: data2,
            borderColor: '#253895',
            backgroundColor: 'transparent',
        }]
    };

    var chartOptions = {
        legend: {
            display: true,
            position: 'top',
            labels: {
                boxWidth: 80,
                fontColor: 'black'
            }
        }
    };


    var chartDiv1 = $("#myChart1");

    var lineChart = new Chart(chartDiv1, {
        type: 'line',
        data: fmrData,
        options: chartOptions
    });
    
    
    var chartDiv2 = $("#myChart2");
    var monthly_survey = <?php echo $data['monthly_survey']?>;
    
    labels2 = [];
    data2= [];

    for (var i =0; i< monthly_survey.length ;i++) {
        labels2[i] = monthly_survey[i].text;
        data2[i] = monthly_survey[i].values;
    }

    var MonthlySurvey = {
    label: "Count",
    data: data2,
    backgroundColor: ["#0c0c7a"],
    barThickness: 28,
    };
 
    var barChart = new Chart(chartDiv2, {
    type: 'bar',
    data: {
    labels: labels2,
    datasets: [MonthlySurvey]
    }
    });
    
    
    var chartDiv3 = $("#myChart3");
    var survey = <?php echo $data['survey_station_wise']?>;
    
    labels3 = [];
    data3= [];

    for (var i =0; i< survey.length ;i++) {
        labels3[i] = survey[i].text;
        data3[i] = survey[i].values;
    }
   

    var myChart = new Chart(chartDiv3, {
    type: 'doughnut',
    data: {
        labels: labels3,
        datasets: [
        {
            data: data3,
            backgroundColor: ["#dc6666","#be5151","#FF0000","#DC143C","#CD5C5C","#F08080","#E9967A","#FFA07A"]
        }]
    },
    options: {
        title: {
            display: true,
            text: 'Doughnut Chart'
        },
        elements: {
        arc: {
            borderWidth: 0.5
        }
    },
	responsive: true,
    maintainAspectRatio: false,
    }
    });
    
    
    
</script>

@endsection