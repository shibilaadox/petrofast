@extends('layouts.master')
@section('page-css')

<link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">
@endsection

@section('main-content')
<div class="breadcrumb">
  <h1>{{__('Roles')}}</h1>

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
          <a href="javascript:void(0)" class="btn btn-primary" id="create-new-role" onclick="addRole()" style="float: right; margin-bottom: 2%; margin-right: 2%">{{__('Add New')}}</a>
        <?php } ?>
        <div class="table-responsive">
          <table id="role_datatable" class="display table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>{{__('Sl No')}}</th>
                <th>{{__('Role')}}</th>
                <?php $user =  Auth::user();
                if ($user->login_type == "Admin") { ?>
                  <th>{{__('Actions')}}</th>
                <?php } ?>
                

              </tr>
            </thead>
            <tbody>

              <?php $i = 1;
              foreach ($roles as $key => $row) { ?>
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$row->role}}</td>
                  <?php $user =  Auth::user();
                  if ($user->login_type == "Admin") { ?>
                    <td>
                      <a href="#" class="text-success mr-2">
                        <i class="nav-icon i-Pen-2 font-weight-bold" onclick="editRole(event.target)" data-id="{{ $row->id }}"></i>
                      </a>

                      <a href="#" class="text-danger mr-2">
                        <i class="nav-icon i-Close-Window font-weight-bold" onclick="deleteRole(event.target)" data-id="{{ $row->id }}"></i>
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

<div class="modal fade" id="role-modal" tabindex="-1" role="dialog" aria-labelledby="role-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="verifyModalContent2_title">{{__('Add Role')}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="role" class="col-form-label">{{__('Role')}}:</label>
            <input type="hidden" name="role_id" id="role_id">
            <input type="text" class="form-control" id="role">
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Close')}}</button>
        <button type="button" class="btn btn-primary" onclick="createRole()">{{__('Save')}}</button>
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
  $('#role_datatable').DataTable();

  function addRole() {
    $("#role_id").val('');
    $('#role-modal').modal('show');
  }


  function createRole() {
    var role = $('#role').val();
    var id = $('#role_id').val();


    let _url = `roles`;
    let _token = $('meta[name="csrf-token"]').attr('content');

    $.ajax({
      url: _url,
      type: "POST",
      data: {
        id: id,
        role: role,
        _token: _token
      },
      success: function(response) {
        if (response.code == 200) {

          location.reload();
          $('#role').val('');
          $('#role-modal').modal('hide');
        }
      },
      error: function(response) {
        $('#roleError').text(response.responseJSON.errors.role);

      }
    });
  }


  function deleteRole(event) {
    var id = $(event).data("id");
    let _url = `roles/${id}`;
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

  function editRole(event) {
    var id = $(event).data("id");
    let _url = `roles/${id}`;
    $('#roleError').text('');


    $.ajax({
      url: _url,
      type: "GET",
      success: function(response) {
        if (response) {
          $("#role_id").val(response.id);
          $("#role").val(response.role);
          $('#role-modal').modal('show');
        }
      }
    });
  }
</script>

@endsection