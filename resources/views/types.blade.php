@extends('layouts.master')
@section('page-css')

<link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">
@endsection

@section('main-content')
<div class="breadcrumb">
  <h1>{{__('Issue Types')}}</h1>

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
          <a href="javascript:void(0)" class="btn btn-primary" id="create-new-role" onclick="addType()" style="float: right; margin-bottom: 2%; margin-right: 2%">Add Issue Type</a>
        <?php } ?>
        <div class="table-responsive">
          <table id="type_datatable" class="display table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>{{__('Sl NO')}}</th>
                <th>{{__('Issue Category')}}</th>
                <th>{{__('Issue Type')}}</th>
                <?php $user =  Auth::user();
                if ($user->login_type == "Admin") { ?>
                  <th>{{__('Actions')}}</th>
                <?php } ?>
              </tr>
            </thead>
            <tbody>

              <?php $i = 1;
              foreach ($types as $key => $row) { ?>
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$row->issuecategories->category_name}}</td>
                  <td>{{$row->issue_type}}<br>{{$row->issue_type_ar}}</td>
                  <?php $user =  Auth::user();
                  if ($user->login_type == "Admin") { ?>
                    <td>
                      <a href="#" class="text-success mr-2">
                        <i class="nav-icon i-Pen-2 font-weight-bold" onclick="editType(event.target)" data-id="{{ $row->id }}"></i>
                      </a>

                      <a href="#" class="text-danger mr-2">
                        <i class="nav-icon i-Close-Window font-weight-bold" onclick="deleteType(event.target)" data-id="{{ $row->id }}"></i>
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

<div class="modal fade" id="type-modal" tabindex="-1" role="dialog" aria-labelledby="type-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="verifyModalContent2_title">{{__('Add Issue Type')}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="issue_category" class="col-form-label">{{__('Role')}}</label>
            <select required class="form-control m-select2 select_class" id="issue_category" name="issue_category" style="width: 100%">
              <option value="">{{__('select a category')}}</option>
              <?php foreach ($category as $row1) { ?>
                <option value="<?php echo $row1->id ?>"><?php echo $row1->category_name; ?></option>
              <?php } ?>

            </select>
          </div>
          <div class="form-group">
            <label for="issue_type" class="col-form-label">{{__('Issue Type')}}</label>
            <input type="hidden" name="type_id" id="type_id">
            <input type="text" class="form-control" id="issue_type">
          </div>

          <div class="form-group">
            <label for="issue_type" class="col-form-label">{{__('Issue Type (Arabic)')}}</label>

            <input type="text" class="form-control" id="issue_type_ar">
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Close')}}</button>
        <button type="button" class="btn btn-primary" onclick="createType()">{{__('Save')}}</button>
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
  $('#type_datatable').DataTable();

  function addType() {
    $("#type_id").val('');
    $('#type-modal').modal('show');
  }


  function createType() {
    var issue_category = $('#issue_category').val();
    var issue_type = $('#issue_type').val();
    var issue_type_ar = $('#issue_type_ar').val();
    var id = $('#type_id').val();


    let _url = `/issuetypes`;
    let _token = $('meta[name="csrf-token"]').attr('content');

    $.ajax({
      url: _url,
      type: "POST",
      data: {
        id: id,
        issue_category: issue_category,
        issue_type: issue_type,
        issue_type_ar: issue_type_ar,
        _token: _token
      },
      success: function(response) {
        if (response.code == 200) {

          location.reload();
        }
      },

    });
  }


  function deleteType(event) {
    var id = $(event).data("id");
    let _url = `issuetypes/${id}`;
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

  function editType(event) {
    var id = $(event).data("id");
    let _url = `issuetypes/${id}`;

    $.ajax({
      url: _url,
      type: "GET",
      success: function(response) {
        if (response) {
          $("#type_id").val(response.id);
          $("#issue_category").val(response.issue_category);
          $("#issue_type").val(response.issue_type);
          $("#issue_type_ar").val(response.issue_type_ar);
          $('#type-modal').modal('show');
        }
      }
    });
  }
</script>

@endsection