@extends('layouts.master')
@section('page-css')

<link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">
@endsection

@section('main-content')
<div class="breadcrumb">
    <h1>{{__('Stations')}}</h1>

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
                <?php $user =  Auth::user();
                if ($user->login_type == "Admin") { ?>
                    <a href="javascript:void(0)" class="btn btn-primary" id="create-new-role" onclick="addStation()" style="float: right; margin-bottom: 2%; margin-right: 2%">{{__('Add Station')}}</a>
                <?php } ?>
                <div class="table-responsive">
                    <table id="station_datatable" class="display table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>{{__('SL NO')}}</th>
                                <th>{{__('Station Code')}}</th>
                                <th>{{__('Station Name')}}</th>
                                <th>{{__('Station Name in arabic')}}</th>
                                <th>{{__('Region')}}</th>
                                <th>{{__('Address')}}</th>
                                <th>{{__('Phone')}}</th>
                                <th>{{__('Image')}}</th>
                                <th>{{__('Location info')}}</th>
                                <?php $user =  Auth::user();
                                if ($user->login_type == "Admin") { ?>
                                    <th>{{__('Choose Questions')}}</th>

                                    <th>{{__('Action')}}</th>

                                <?php } ?>

                            </tr>
                        </thead>
                        <tbody>

                            <?php $i = 1;
                            foreach ($stations as $key => $row) { ?>
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$row->station_code}}</td>
                                    <td>{{$row->station_name}}</td>
                                    <td>{{$row->station_name_ar}}</td>
                                    <td>{{$row->region}}</td>
                                    <td>{{$row->address}}<br>{{$row->address_ar}}</td>
                                    <td>{{$row->phone}}</td>
                                    <td><img src="{{$row->image}}" style="width:100px; height:auto;"></td>
                                    <td>
                                        <a onclick="setlocation('{{$row->lat}}','{{$row->lng}}')" data-toggle="modal" data-target="#location_modal" class="text-success mr-2" title="Location" style="margin-left: 35%;">
                                            <i class="nav-icon i-Plane font-weight-bold"></i></a>

                                    </td>
                                    <?php $user =  Auth::user();
                                    if ($user->login_type == "Admin") { ?>
                                        <td style="width:10px;"><a href="<?php echo url('ChooseQuestions') . "?id=" . $row->id ?>" class="text-success mr-2" title="Choose Questions"><i class="nav-icon i-Receipt font-weight-bold" style="margin-left: 35%;"></i></a></td>



                                        <td>
                                            <a href="#" class="text-success mr-2">
                                                <i class="nav-icon i-Pen-2 font-weight-bold" onclick="editStation(event.target)" data-id="{{ $row->id }}"></i>
                                            </a>

                                            <a href="#" class="text-danger mr-2">
                                                <i class="nav-icon i-Close-Window font-weight-bold" onclick="deleteStation(event.target)" data-id="{{ $row->id }}"></i>
                                            </a>
                                        </td>
                                    <?php } ?>
                                    <?php if (session('login_type') == "Admin") { ?>
                                        <td style="width:10px;"><a href="<?php echo url('ChooseQuestions') . "?id=" . $row->id ?>"><i class="flaticon-plus" style="margin-left: 35%;"></i></a></td>

                                    <?php } ?>
                                </tr>
                            <?php $i++;
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

<div class="modal fade" id="station-modal" tabindex="-1" role="dialog" aria-labelledby="station-modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="verifyModalContent2_title">{{__('Add Station')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="add_station_form" id="add_station_form" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="station_code" class="col-form-label">{{__('Station Code')}}</label>
                        <input type="hidden" name="station_id" id="station_id">
                        <input type="text" class="form-control" id="station_code" name="station_code">
                    </div>

                    <div class="form-group">
                        <label for="station_name" class="col-form-label">{{__('Station Name')}}</label>
                        <input type="text" class="form-control" id="station_name" name="station_name">
                    </div>

                    <div class="form-group">
                        <label for="station_name_ar" class="col-form-label">Station Name (Arabic) :</label>
                        <input type="text" class="form-control" id="station_name_ar" name="station_name_ar">
                    </div>

                    <div class="form-group">
                        <label for="region" class="col-form-label">{{__('Region')}}</label>
                        <select class="form-control" id="region" name="region">
                            <option vlaue="North">North</option>
                            <option vlaue="South">South</option>
                            <option vlaue="East">East</option>
                            <option vlaue="West">West</option>
                            <option vlaue="Central">Central</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="address" class="col-form-label">{{__('Address')}}</label>
                        <textarea id="address" class="form-control" name="address"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="address_ar" class="col-form-label">Address (Arabic) :</label>
                        <textarea id="address_ar" class="form-control" name="address_ar"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="phone" class="col-form-label">{{__('Phone')}}</label>
                        <input type="number" class="form-control" id="phone" name="phone">
                    </div>

                    <div class="form-group">

                        <label for="imgfile" class="col-form-label">{{__('Image')}}</label>
                        <br>
                        <input type="file" name='imgfile' id="imgfile" style="display:none">
                        <input type="button" class="btn btn-sm btn-primary mb-1" onClick="$('#imgfile').click()" value="{{__('select File')}}">

                        <br><br>
                        <img src='' id='ad_img' style='max-height:100px;max-width:100px;' />

                    </div>

                    <div class="form-group">
                        <label for="location" class="col-form-label">{{__('Location info')}}</label>
                        <input type="hidden" name="location" id="location">
                        <label>{{__('Latitude')}}</label>
                        <input type="text" class="form-control" name="lat" id="lat" value="24.774265">
                        <br>
                        <label>{{__('Longitude')}}</label>
                        <input type="text" class="form-control" name="lng" id="lng" value="46.738586">
                        <br>
                        <div id="googleMap" style="width:100%;height:400px;"></div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Close')}}</button>
                <button type="button" class="btn btn-primary" onclick="createStation()">{{__('Save')}}</button>
            </div>
        </div>
    </div>
</div>







<div class="modal fade" id="location_modal" tabindex="-1" role="dialog" aria-labelledby="location_modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>

            <div class="modal-body">

                <div id="googleMap1" style="width:100%;height:400px;"></div>

            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>

        </div>
    </div>
</div>





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

    $('#station_datatable').DataTable();

    function addStation() {

        $("#station_id").val('');
        $('#station-modal').modal('show');
    }


    function createStation() {

        var form = $('#add_station_form')[0];
        var formData = new FormData(form);

        event.preventDefault();

        let _url = `stations`;
        let _token = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: _url,
            type: "POST",
            processData: false,
            contentType: false,
            data: formData,
            dataType: 'json',
            success: function(response) {
                if (response.code == 200) {

                    location.reload();
                    $('#station-modal').modal('hide');
                }
            },

        });
    }


    function deleteStation(event) {
        var id = $(event).data("id");
        let _url = `stations/${id}`;
        let _token = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: _url,
            type: 'DELETE',
            data: {
                _token: _token
            },
            success: function(response) {
                $("#row_" + id).remove();
                location.reload();
            }
        });
    }

    function editStation(event) {
        var id = $(event).data("id");
        let _url = `stations/${id}`;

        $.ajax({
            url: _url,
            type: "GET",
            success: function(response) {
                if (response) {
                    $("#station_id").val(response.id);
                    $("#station_code").val(response.station_code);
                    $("#station_name").val(response.station_name);
                    $("#station_name_ar").val(response.station_name_ar);
                    $("#region").val(response.region).change();
                    $("#address").val(response.address);
                    $("#address_ar").val(response.address_ar);
                    $("#phone").val(response.phone);
                    $('#ad_img').attr('src', response.image);
                    $("#lat").val(response.lat);
                    $("#lng").val(response.lng);
                    $('#station-modal').modal('show');
                }
            }
        });
    }


    $("#imgfile").change(function() {
        readURL(this);
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#ad_img').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }


    function initMap() {

        var latitude = $("#lat").val();
        var longitude = $("#lng").val();


        var mapProp = {
            center: new google.maps.LatLng(latitude, longitude),
            zoom: 4,
        };


        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

        map.addListener('click', function(e) {

            var lt = e.latLng;
            $("#lat").val(e.latLng.lat());
            $("#lng").val(e.latLng.lng());
            var latitude = $("#lat").val();
            var longitude = $("#lng").val();

        });

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(latitude, longitude),
            title: "Hello World!",
            visible: true
        });

        marker.setMap(map);

    }

    $("#lat").mouseout(function() {
        initMap();
    });

    $("#lng").mouseout(function() {
        initMap();
    });



    function setlocation(lat, lng) {

        lat = lat;
        log = lng;

        latLng = new google.maps.LatLng(lat, log)
        var mapOptions = {
            center: latLng,
            zoom: 5,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById("googleMap1"), mapOptions);

        var marker = new google.maps.Marker({
            position: latLng,
            title: "Hello World!",
            visible: true
        });

        marker.setMap(map);
    }
</script>

<script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGx5h3BTGfUETTkX-YVnu_akUF--4rf3s&callback=initMap">
</script>

@endsection