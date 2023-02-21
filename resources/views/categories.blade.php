@extends('layouts.master')
@section('page-css')

<link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">
@endsection

@section('main-content')
<div class="breadcrumb">
  <h1>{{__('Issue Categories')}}</h1>

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
          <a href="javascript:void(0)" class="btn btn-primary" id="create-new-role" onclick="addCategory()" style="float: right; margin-bottom: 2%; margin-right: 2%">Add Category</a>
        <?php } ?>
        <div class="table-responsive">
          <table id="category_datatable" class="display table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>{{__('SL NO')}}</th>
                <th>{{__('Category Name')}}</th>
                <?php $user =  Auth::user();
                if ($user->login_type == "Admin") { ?>
                  <th>{{__('Actions')}}</th>
                <?php } ?>

              </tr>
            </thead>
            <tbody>

              <?php $i = 1;
              foreach ($categories as $key => $row) { ?>
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$row->category_name}}<br>{{$row->category_name_ar}}</td>
                  <?php $user =  Auth::user();
                  if ($user->login_type == "Admin") { ?>
                    <td>
                      <a href="#" class="text-success mr-2">
                        <i class="nav-icon i-Pen-2 font-weight-bold" onclick="editCategory(event.target)" data-id="{{ $row->id }}"></i>
                      </a>

                      <a href="#" class="text-danger mr-2">
                        <i class="nav-icon i-Close-Window font-weight-bold" onclick="deleteCategory(event.target)" data-id="{{ $row->id }}"></i>
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

<div class="modal fade" id="category-modal" tabindex="-1" role="dialog" aria-labelledby="role-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="verifyModalContent2_title">{{__('Add Category')}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="category_name" class="col-form-label">{{__('Category')}}</label>
            <input type="hidden" name="category_id" id="category_id">
            <input type="text" class="form-control" id="category_name">
          </div>

          <div class="form-group">
            <label for="category_name_ar" class="col-form-label">Category (Arabic):</label>
            <input type="text" class="form-control" id="category_name_ar">
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="createCategory()">Save</button>
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
  $('#category_datatable').DataTable();

  function addCategory() {
    $("#category_id").val('');
    $('#category-modal').modal('show');
  }


  function createCategory() {
    var category_name = $('#category_name').val();
    var category_name_ar = $('#category_name_ar').val();
    var id = $('#category_id').val();


    let _url = `/issuecategories`;
    let _token = $('meta[name="csrf-token"]').attr('content');

    $.ajax({
      url: _url,
      type: "POST",
      data: {
        id: id,
        category_name: category_name,
        category_name_ar: category_name_ar,
        _token: _token
      },
      success: function(response) {
        if (response.code == 200) {

          location.reload();
          $('#category_name').val('');
          $('#category_name_ar').val('');
          $('#category-modal').modal('hide');
        }
      },
      error: function(response) {
        $('#categoryError').text(response.responseJSON.errors.role);

      }
    });
  }


  function deleteCategory(event) {
    var id = $(event).data("id");
    let _url = `issuecategories/${id}`;
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

  function editCategory(event) {
    var id = $(event).data("id");
    let _url = `issuecategories/${id}`;
    $('#categoryError').text('');


    $.ajax({
      url: _url,
      type: "GET",
      success: function(response) {
        if (response) {
          $("#category_id").val(response.id);
          $("#category_name").val(response.category_name);
          $("#category_name_ar").val(response.category_name_ar);
          $('#category-modal').modal('show');
        }
      }
    });
  }
</script>

@endsection