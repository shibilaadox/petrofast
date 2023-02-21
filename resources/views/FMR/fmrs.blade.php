<?php

use App\Models\User; ?>
@extends('layouts.master')
@section('page-css')

<link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">
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
                            <label for="date_from" class="col-form-label">{{__('Date Range From')}}</label>
                            <input type="date" class="form-control" id="date_from" name="date_from" value="<?php echo $from_date ?>">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="date_to" class="col-form-label">{{__('Date Range To')}}</label>
                            <input type="date" class="form-control" id="date_to" name="date_to" value="<?php echo $to_date ?>">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="status" class="col-form-label">{{__('Status')}}</label>
                            <select class="form-control" id="status" name="status">
                                <option value="New" <?php if (isset($_GET['status']) && $_GET['status'] == "New") {
                                                        echo "selected";
                                                    } ?>>{{__('New')}}</option>
                                <option value="Assigned" <?php if (isset($_GET['status']) && $_GET['status'] == "Assigned") {
                                                                echo "selected";
                                                            } ?>>{{__('Assigned')}}</option>
                                <option value="Ongoing" <?php if (isset($_GET['status']) && $_GET['status'] == "Ongoing") {
                                                            echo "selected";
                                                        } ?>>{{__('Ongoing')}}</option>
                                <option value="Completed" <?php if (isset($_GET['status']) && $_GET['status'] == "Completed") {
                                                                echo "selected";
                                                            } ?>>{{__('Completed')}}</option>
                                <option value="All" <?php if (isset($_GET['status']) && $_GET['status'] == "All") {
                                                        echo "selected";
                                                    } ?>>{{__('All')}}</option>

                            </select>
                        </div>

                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="station" class="col-form-label">{{__('Station')}}</label>
                            <select required class="form-control m-select2 select_class" id="station" name="station" style="width: 100%">
                                <option value="">{{__('select a station')}}</option>
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
                        <div class="form-group col-md-6">
                            <label for="region" class="col-form-label">{{__('Region')}}</label>
                            <select class="form-control" id="region" name="region">
                                <option value="">select a region</option>
                                <option vlaue="North" <?php if (isset($_GET['region']) && $_GET['region'] == "North") {
                                                            echo "selected";
                                                        } ?>>{{__('North')}}</option>
                                <option vlaue="South" <?php if (isset($_GET['region']) && $_GET['region'] == "South") {
                                                            echo "selected";
                                                        } ?>>{{__('South')}}</option>
                                <option vlaue="East" <?php if (isset($_GET['region']) && $_GET['region'] == "East") {
                                                            echo "selected";
                                                        } ?>>{{__('East')}}</option>
                                <option vlaue="West" <?php if (isset($_GET['region']) && $_GET['region'] == "West") {
                                                            echo "selected";
                                                        } ?>>{{__('West')}}</option>
                                <option vlaue="Central" <?php if (isset($_GET['region']) && $_GET['region'] == "Central") {
                                                            echo "selected";
                                                        } ?>>{{__('Central')}}</option>
                                <option value="All" <?php if (isset($_GET['region']) && $_GET['region'] == "All") {
                                                        echo "selected";
                                                    } ?>>{{__('All')}}</option>
                            </select>
                        </div>

                    </div>
                    <div class="row">

                        <div class="form-group col-md-12" style="margin-left: 50%">
                            <button name="get_report" id="get_report" type="submit" class="btn btn-primary">{{__('Apply')}}</button>
                        </div>
                    </div>


                </form>


                <div class="table-responsive" style="margin-top:5%">
                    <table id="fmrs_datatable" class="display table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>{{__('SL NO')}}</th>
                                <th>{{__('Date')}}</th>
                                <th>{{__('Station')}}</th>
                                <th>{{__('Category')}}</th>
                                <th>{{__('Issue Type')}}</th>
                                <th>{{__('Supervisor')}}</th>
                                <th>{{__('Notes')}}</th>
                                <th class="image">{{__('Images')}}</th>
                                <th>{{__('Status')}}</th>
                                <th class="action">{{__('Action')}}</th>


                            </tr>
                        </thead>
                        <tbody>

                            <?php $j = 1;
                            foreach ($data['fmrs'] as $key => $row) { ?>
                                <tr>
                                    <td>{{$j}}</td>
                                    <td>{{$row->date}}</td>
                                    <td>{{$row->station_name}}</td>
                                    <td>{{$row->category_name}}</td>
                                    <td>{{$row->issue_type_name}}</td>

                                    <?php if ($row->supervisor != "") {
                                        $supervisor = User::where('id', $row->supervisor)->first(); ?>
                                        <td><?php if($supervisor){echo $supervisor->firstname . " " . $supervisor->lastname; }?></td>
                                    <?php } else { ?>
                                        <td></td>
                                    <?php } ?>

                                    <td>{{$row->notes}}</td>
                                    <td><?php $i = 0;if($row->images != "" && $row->images != "[null]" && !empty($row->images) && strpos($row->images, 'null') === false){
                                        foreach (json_decode($row->images) as $picture) { ?>
                                            <a href="{{$picture->imgname}}" target="_blank"><img class="avatar-lg mb-3 mb-sm-0 rounded mr-sm-3" src="{{$picture->imgname}}" alt=""></a>
                                        <?php } }?>
                                    </td>
                                    <td>{{$row->status}}</td>

                                    <td>
                                        <a href="<?php echo url('FMRDetails') . "?id=" . $row->fmr_id ?>" class="text-warning mr-2" style="padding-left:35%"><i class="nav-icon i-Arrow-Down-in-Circle font-weight-bold"></i></a>
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

    //$('#fmrs_datatable').DataTable();

    $('#fmrs_datatable').DataTable({
    dom: 'Bfrtip',
    buttons: [
    {
        extend: 'excel',
        title: 'FMR '+new Date().toLocaleString(),
        filename:'FMR '+parseInt(new Date().getMonth()+1)+"-"+new Date().getDate()+"-"+new Date().getFullYear(),
        text: 'Excel',
        className: 'btn btn-default',
        exportOptions: {
            columns: ':not(.action,.image)'
        }
    }]
    });

</script>

@endsection