@extends('layouts.master')
@section('page-css')

<link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('main-content')
<div class="breadcrumb">
  <h1>{{__('Users')}}</h1>

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
          <a href="javascript:void(0)" class="btn btn-primary" id="create-new-role" onclick="addUser()" style="float: right; margin-bottom: 2%; margin-right: 2%">{{__('Add User')}}</a>
        <?php } ?>
        <div class="table-responsive">
          <table id="user_datatable" class="display table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>{{__('SL NO')}}</th>
                <th>{{__('Name')}}</th>
                <th>{{__('Role')}}</th>
                <th>{{__('Email')}}</th>
                <th>{{__('Phone')}}</th>
                <th>{{__('Stations')}}</th>
                <th>{{__('Manager')}}</th>
                <th>{{__('Profile Picture')}}</th>
                <?php $user =  Auth::user();
                if ($user->login_type == "Admin") { ?>
                  <th>{{__('Actions')}}</th>
                <?php } ?>
              </tr>
            </thead>
            <tbody>

              <?php $i = 1;
              foreach ($data['users'] as $key => $row) { ?>
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$row->firstname}} {{$row->lastname}}<br>{{$row->firstname_ar}} {{$row->lastname_ar}}</td>
                  <td>{{$row->login_type}}</td>
                  <td>{{$row->email}}</td>
                  <td>{{$row->mobile}}</td>
                  <td><?php if($row->login_type=="Station Supervisor" || $row->login_type=="Facility Manager" || $row->login_type=="Facility Labour" || $row->login_type=="Manager"){
                              $station_id = explode(',',$row->stations);
                              foreach($station_id as $row3){
												      foreach($data['stations'] as $row1){
												          if($row1->id==$row3)echo $row1->station_name." , ";
												      }
                              }
											      }
										
												    else echo ""; 
                        ?>
                  </td>

                  <td><?php
                            if($row->login_type=="Facility Labour"){
                            foreach($data['fmr_managers'] as $row3){
												    if($row3->id==$row->manager){
												      echo $row3->firstname;   
												    }
												    
												    } }else if($row->login_type=="Station Supervisor"){
                                                    foreach($data['managers'] as $row3){
												    if($row3->id==$row->manager){
												      echo $row3->firstname;   
												    }
												    
												    } } else echo "";
                      ?>
                  </td>
                  <td>
                    <img src="{{$row->profile_pic}}" style="width:100px; height:auto;">
                  </td>

                  <?php $user =  Auth::user();
                  if ($user->login_type == "Admin") { ?>
                    <td>
                      <a href="#" class="text-success mr-2">
                        <i class="nav-icon i-Pen-2 font-weight-bold" onclick="editUser(event.target)" data-id="{{ $row->id }}"></i>
                      </a>

                      <a href="#" class="text-danger mr-2">
                        <i class="nav-icon i-Close-Window font-weight-bold" onclick="deleteUser(event.target)" data-id="{{ $row->id }}"></i>
                      </a>
                    </td>
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

<div class="modal fade" id="user-modal" tabindex="-1" role="dialog" aria-labelledby="user-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="verifyModalContent2_title">{{__('Add User')}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form name="add_user_form" id="add_user_form" enctype="multipart/form-data">
          <div class="form-group">
            <label for="login_type" class="col-form-label">{{__('Role')}}</label>
            <input type="hidden" name="user_id" id="user_id">
            <select required class="form-control m-select2 select_class" id="login_type" name="login_type" style="width: 100%">

              <option value="">{{__('Select')}}</option>
              <?php foreach ($data['roles'] as $row) { ?>
                <option value="<?php echo $row->role; ?>"><?php echo $row->role; ?></option>
              <?php } ?>


            </select>
          </div>

          <div class="form-group">
            <label for="firstname" class="col-form-label">{{__('First Name')}}</label>
            <input type="text" class="form-control" id="firstname" name="firstname" required="">
          </div>

          <div class="form-group">
            <label for="firstname_ar" class="col-form-label">{{__('First Name (Arabic)')}}':</label>
            <input type="text" class="form-control" id="firstname_ar" name="firstname_ar" required="">
          </div>

          <div class="form-group">
            <label for="lastname" class="col-form-label">{{__('last Name')}}</label>
            <input type="text" class="form-control" id="lastname" name="lastname" required="">
          </div>

          <div class="form-group">
            <label for="lastname_ar" class="col-form-label">{{__('Last Name (Arabic)')}}':</label>
            <input type="text" class="form-control" id="lastname_ar" name="lastname_ar" required="">
          </div>

          <div class="form-group">
            <label for="email" class="col-form-label">{{__('Email')}}</label>
            <input type="text" class="form-control" id="email" name="email" required="">
          </div>

          <div class="form-group">
            <label for="phone" class="col-form-label">{{__('Phone')}}</label>
            <input type="text" class="form-control" id="phone" name="phone">
          </div>

          <div class="form-group">
            <label for="username" class="col-form-label">{{__('Username')}}</label>
            <input type="text" class="form-control" id="username" name="username" required="">
          </div>

          <div class="form-group">
            <label for="password" class="col-form-label">{{__('Password')}}</label>
            <input type="text" class="form-control" id="password" name="password">
          </div>

          <div class="form-group" id="select_manager" style="display: none;">
            <label for="station" class="col-form-label">{{__('Manager')}}</label>
            <select required class="form-control m-select2 select_class" id="manager" name="manager" style="width: 100%">
              <option value="">{{__('select a manager')}}</option>
              <?php foreach ($data['managers'] as $row1) { ?>
                <option value="<?php echo $row1->id ?>"><?php echo $row1->firstname; ?></option>
              <?php } ?>

            </select>
          </div>

          <div class="form-group" id="select_fmr_manager" style="display: none;">
            <label for="station" class="col-form-label">{{__('Facility Manager')}}:</label>
            <select required class="form-control m-select2 select_class" id="fmr_manager" name="fmr_manager" style="width: 100%">
              <option value="">{{__('select a manager')}}</option>
              <?php foreach ($data['fmr_managers'] as $row1) { ?>
                <option value="<?php echo $row1->id ?>"><?php echo $row1->firstname; ?></option>
              <?php } ?>

            </select>
          </div>

          <div class="form-group" id="select_id_single" style="display: none;">
            <label for="station" class="col-form-label">{{__('Station')}}</label>
            <select required class="form-control m-select2 select_class" id="station_single" name="station_single" style="width: 100%">
              <option value="">{{__('select a station')}}</option>
              <?php foreach ($data['stations'] as $row1) { ?>
                <option value="<?php echo $row1->id ?>"><?php echo $row1->station_name; ?></option>
              <?php } ?>

            </select>
          </div>


          <div class="form-group" id="select_id" style="display: none;">
            <label for="station" class="col-form-label">{{__('Station')}}</label>
            <select required class="form-control m-select2 select_class" id="station" name="station[]" style="width: 100%" multiple="multiple">
              <option value="">{{__('select a station')}}</option>
              <?php foreach ($data['stations'] as $row1) { ?>
                <option value="<?php echo $row1->id ?>"><?php echo $row1->station_name; ?></option>
              <?php } ?>

            </select>
          </div>


          <div class="form-group">

            <label for="imgfile" class="col-form-label">{{__('Image')}}</label>
            <br>
            <input type="file" name='imgfile' id="imgfile" style="display:none">
            <input type="button" class="btn btn-sm btn-primary mb-1" onClick="$('#imgfile').click()" value="{{__('select File')}}">

            <br><br>
            <img src='' id='ad_img' style='max-height:100px;max-width:100px;' />

          </div>

       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Close')}}</button>
        <button type="submit" class="btn btn-primary" onclick="createUser()">{{__('Save')}}</button>
      </div>
      </form>
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
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


@section('bottom-js')




@endsection

<script type="text/javascript">
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $('#user_datatable').DataTable();

  function addUser() {

    $("#user_id").val('');
    $('#user-modal').modal('show');
  }

  $(document).ready(function() {
    $('.modal').on('hidden.bs.modal', function(){
        
        window.location.reload();
     });
  });

  function createUser() {

    var form = $('#add_user_form')[0];
    var formData = new FormData(form);

    event.preventDefault();

    let _url = `users`;
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
          $('#user-modal').modal('hide');
        }
      },

    });
  }


  function deleteUser(event) {
    var id = $(event).data("id");
    let _url = `users/${id}`;
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

  function editUser(event) {
    $('#user-modal').modal('show');
    var id = $(event).data("id");
    let _url = `users/${id}`;

    $.ajax({
      url: _url,
      type: "GET",
      success: function(response) {
        if (response) {
       
          $("#user_id").val(response.id);
          $("#login_type").val(response.login_type).change();
          $("#firstname").val(response.firstname);
          $("#firstname_ar").val(response.firstname_ar);
          $("#lastname").val(response.lastname);
          $("#lastname_ar").val(response.lastname_ar);
          $("#email").val(response.email);
          $("#phone").val(response.mobile);
          $("#username").val(response.username);
          $("#password").val(response.password);
          $('#ad_img').attr('src', response.profile_pic);
          

          if (response.login_type == 'Manager') {

              $('#select_id_single').hide();
              $('#select_id').show();
              $('#station').prop('required', true);
              $('#station_single').prop('required', false);
              $('#select_manager').hide();
              $('#manager').prop('required', false);
              $('#select_fmr_manager').hide();
              $('#fmr_manager').prop('required', false);
   

              var manager_id = $("#user_id").val();

                $.ajax({
                type: "GET",
                url: "<?php echo ('ChangeStation') ?>",
                dataType: 'text',
                data: {
                manager_id,
                manager_id
                },

                success: function(data) {

                    var res = response.stations.split(",");
    
                    res.forEach(element =>{
     
                        $('#station option[value='+element+']').attr('selected','selected').change();
        
                    });
                }

              });

        }

    else if (response.login_type == 'Facility Manager') {

      $('#select_id_single').hide();
      $('#select_id').show();
      $('#station').prop('required', true);
      $('#station_single').prop('required', false);
      $('#select_manager').hide();
      $('#manager').prop('required', false);
      $('#select_fmr_manager').hide();
      $('#fmr_manager').prop('required', false);

      var manager_id = $("#user_id").val();

                $.ajax({
                type: "GET",
                url: "<?php echo ('ChangeStation') ?>",
                dataType: 'text',
                data: {
                manager_id,
                manager_id
                },

                success: function(data) {

                    var res = response.stations.split(",");
    
                    res.forEach(element =>{
     
                        $('#station option[value='+element+']').attr('selected','selected').change();
        
                    });
                }

              });
    }

    else if (response.login_type == 'Facility Labour') {

      $('#select_id_single').hide();
      $('#select_id').show();
      $('#station').prop('required', true);
      $('#station_single').prop('required', false);
      $('#select_manager').hide();
      $('#manager').prop('required', false);
      $('#select_fmr_manager').show();
      $('#fmr_manager').prop('required', true);

      $('#fmr_manager').val(response.manager).change();

      var manager_id = $("#user_id").val();

                $.ajax({
                type: "GET",
                url: "<?php echo ('ChangeStation') ?>",
                dataType: 'text',
                data: {
                manager_id,
                manager_id
                },

                success: function(data) {

                    var res = response.stations.split(",");
    
                    res.forEach(element =>{
     
                        $('#station option[value='+element+']').attr('selected','selected').change();
        
                    });
                }

              });

      


    }


    if (response.login_type == 'Station Supervisor') {

      $('#select_id_single').hide();
      $('#select_id').show();
      $('#station').prop('required', true);
      $('#station_single').prop('required', false);
      $('#select_manager').show();
      $('#manager').prop('required', true);
      $('#select_fmr_manager').hide();
      $('#fmr_manager').prop('required', false);
      $('#manager').val(response.manager).change();
      var manager_id = $("#user_id").val();

                $.ajax({
                type: "GET",
                url: "<?php echo ('ChangeStation') ?>",
                dataType: 'text',
                data: {
                manager_id,
                manager_id
                },

                success: function(data) {

                    var res = response.stations.split(",");
    
                    res.forEach(element =>{
     
                        $('#station option[value='+element+']').attr('selected','selected').change();
        
                    });
                }

              });
    }
  
          $('#user-modal').modal('show');
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

  $("#login_type").change(function() {


    if ($(this).val() == 'Manager') {

      $('#select_id_single').hide();
      $('#select_id').show();
      $('#station').prop('required', true);
      $('#station_single').prop('required', false);
      $('#select_manager').hide();
      $('#manager').prop('required', false);
      $('#select_fmr_manager').hide();
      $('#fmr_manager').prop('required', false);
      $('#select_station_supervisor').hide();
      $('#station_supervisor').prop('required', false);

    }

    if ($(this).val() == 'Facility Manager') {

      $('#select_id_single').hide();
      $('#select_id').show();
      $('#station').prop('required', true);
      $('#station_single').prop('required', false);
      $('#select_manager').hide();
      $('#manager').prop('required', false);
      $('#select_fmr_manager').hide();
      $('#fmr_manager').prop('required', false);
      $('#select_station_supervisor').hide();
      $('#station_supervisor').prop('required', false);
    }

    if ($(this).val() == 'Facility Labour') {

      $('#select_id_single').hide();
      $('#select_id').show();
      $('#station').prop('required', true);
      $('#station_single').prop('required', false);
      $('#select_manager').hide();
      $('#manager').prop('required', false);
      $('#select_fmr_manager').show();
      $('#fmr_manager').prop('required', true);
      $('#select_station_supervisor').hide();
      $('#station_supervisor').prop('required', false);
    }

    if ($(this).val() == 'Station Supervisor') {

      $('#select_id_single').hide();
      $('#select_id').show();
      $('#station').prop('required', true);
      $('#station_single').prop('required', false);
      $('#select_manager').show();
      $('#manager').prop('required', true);
      $('#select_fmr_manager').hide();
      $('#fmr_manager').prop('required', false);
      $('#select_station_supervisor').hide();
      $('#station_supervisor').prop('required', false);
    }

  });

  $("#manager").change(function() {

    var manager_id = $("#manager").val();

    $.ajax({
      type: "GET",
      url: "<?php echo ('ChangeStation') ?>",
      dataType: 'text',
      data: {
        manager_id,
        manager_id
      },
      success: function(data) {

        $('#station').html(data);
      }
    });


  });

  $("#fmr_manager").change(function() {

    var manager_id = $("#fmr_manager").val();

    $.ajax({
      type: "GET",
      url: "<?php echo ('ChangeStation') ?>",
      dataType: 'text',
      data: {
        manager_id,
        manager_id
      },
      success: function(data) {

        $('#station').html(data);
      }
    });
  });


  $("#station_supervisor").change(function() {

    var manager_id = $("#station_supervisor").val();

    $.ajax({
      type: "GET",
      url: "<?php echo ('ChangeStation') ?>",
      dataType: 'text',
      data: {
        manager_id,
        manager_id
      },
      success: function(data) {

        $('#station_single').html(data);
      }
    });
  });

  $(document).ready(function() {
    $('.select_class').select2();
  });

</script>



@endsection