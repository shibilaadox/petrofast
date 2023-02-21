<?php

use App\Models\User; ?>
@extends('layouts.master')
@section('page-css')

<link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">
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
                <form name="add_station_form" id="add_station_form" method="get" enctype="multipart/form-data">
                    <div class="row">
                        <?php
                        $from_date = date('Y-m-d');
                        $to_date = date('Y-m-d');
                        if (isset($_GET['date_from'])) {
                            $from_date = $_GET['date_from'];
                        }
                        if (isset($_GET['date_to'])) {
                            $to_date = $_GET['date_to'];
                        }
                        ?>
                        <div class="form-group col-md-3">
                            <label for="date_from" class="col-form-label">Date Range From:</label>
                            <input type="date" class="form-control" id="date_from" name="date_from" value="<?php echo $from_date ?>">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="date_to" class="col-form-label">Date Range To:</label>
                            <input type="date" class="form-control" id="date_to" name="date_to" value="<?php echo $to_date ?>">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="station" class="col-form-label">{{__('Station')}}</label>
                            <select required class="form-control m-select2 select_class" id="station" name="station" style="width: 100%">
                                <option value="">select a station</option>
                                <?php foreach ($data['stations'] as $row1) { ?>
                                    <option value="<?php echo $row1->id ?>" <?php if (isset($_GET['station']) && $_GET['station'] == $row1->id) {
                                                                                echo "selected";
                                                                            } ?>><?php echo $row1->station_name; ?></option>
                                <?php } ?>
                                <option value="All" <?php if (isset($_GET['station']) && $_GET['station'] == "All") {
                                                        echo "selected";
                                                    } ?>>All</option>
                            </select>
                        </div>

                        

                    </div>

                    <div class="row">
                        
                        <div class="form-group col-md-6">
                            <label for="region" class="col-form-label">{{__('Region')}}</label>
                            <select class="form-control" id="region" name="region">
                                <option value="">select a region</option>
                                <option vlaue="North" <?php if (isset($_GET['region']) && $_GET['region'] == "North") {
                                                            echo "selected";
                                                        } ?>>North</option>
                                <option vlaue="South" <?php if (isset($_GET['region']) && $_GET['region'] == "South") {
                                                            echo "selected";
                                                        } ?>>South</option>
                                <option vlaue="East" <?php if (isset($_GET['region']) && $_GET['region'] == "East") {
                                                            echo "selected";
                                                        } ?>>East</option>
                                <option vlaue="West" <?php if (isset($_GET['region']) && $_GET['region'] == "West") {
                                                            echo "selected";
                                                        } ?>>West</option>
                                <option vlaue="Central" <?php if (isset($_GET['region']) && $_GET['region'] == "Central") {
                                                            echo "selected";
                                                        } ?>>Central</option>
                                <option value="All" <?php if (isset($_GET['region']) && $_GET['region'] == "All") {
                                                        echo "selected";
                                                    } ?>>All</option>
                            </select>
                        </div>

                    </div>
                    <div class="row">

                        <div class="form-group col-md-12" style="margin-left: 50%">
                            <button name="get_report" id="get_report" type="submit" class="btn btn-primary">{{__('Apply')}}</button>
                        </div>
                    </div>


                </form>

                <div class="table-responsive">
                    <table id="survey_datatable" class="display table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>{{__('SL No')}}</th>
                                <th>{{__('Date')}}</th>
                                <th>{{__('Station Code')}}</th>
                                <th>{{__('station Name')}}</th>
                                <th>{{__('Supervisor')}}</th>
                                <th>{{__('Status')}}</th>
                                <th class="action">{{__('Actions')}}</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php $j = 1;
                            foreach ($data['list'] as $row) { ?>
                                <tr>
                                    <td>{{$j}}</td>
                                    <td>{{$row->date}}</td>
                                    <td>{{$row->station_code}}</td>
                                    <td>{{$row->station_name}}</td>
                                    <td>{{$row->firstname}}</td>
                                    <td>{{$row->status}}</td>
                                    <td>
                                        <a href="<?php echo url('SurveyDetails') . "?id=" . $row->id ?>" class="text-warning mr-2"><i class="nav-icon i-Arrow-Down-in-Circle font-weight-bold"></i></a>
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
    <!-- end of col -->



</div>
<!-- end of row -->

@endsection

@section('page-js')


<script src="{{asset('assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/datatables.min.js')}}"></script>
<script src="{{asset('assets/js/datatables.script.js')}}"></script>
<script src="{{asset('assets/js/modal.script.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/form.validation.script.js')}}"></script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //$('#survey_datatable').DataTable();

    $('#survey_datatable').DataTable({
    dom: 'Bfrtip',
    buttons: [
    {
        extend: 'excel',
        title: 'Station Surveys '+new Date().toLocaleString(),
        filename:'Station Surveys '+parseInt(new Date().getMonth()+1)+"-"+new Date().getDate()+"-"+new Date().getFullYear(),
        className: 'btn btn-default',
        exportOptions: {
            columns: ':not(.action)'
        }
    }]
    });
</script>

@endsection