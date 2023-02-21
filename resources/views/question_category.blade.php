@extends('layouts.master')
@section('page-css')

<link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('main-content')
<div class="breadcrumb">
  <h1>{{__('Question Category')}}</h1>

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
        <a href="javascript:void(0)" class="btn btn-primary" id="create-new-category" onclick="addCategory()" style="float: right; margin-bottom: 2%; margin-right: 2%">{{__('Add Categoty')}}</a>

        <div class="table-responsive">
          <table id="category_datatable" class="display table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>{{__('SL NO')}}</th>
                <th>{{__('Category')}}</th>
                <th>{{__('Actions')}}</th>

              </tr>
            </thead>
            <tbody>

              <?php $i = 1;
              foreach ($data['question_category'] as $key => $row) { ?>
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$row->question_category}}<br>{{$row->question_category_ar}}</td>
                  
                  <td>
                    <a href="#" class="text-success mr-2">
                      <i class="nav-icon i-Pen-2 font-weight-bold" onclick="editCategory(event.target)" data-id="{{ $row->id }}"></i>
                    </a>

                    <a href="#" class="text-danger mr-2">
                      <i class="nav-icon i-Close-Window font-weight-bold" onclick="deleteCategory(event.target)" data-id="{{ $row->id }}"></i>
                    </a>
                  </td>
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

<div class="modal fade" id="category-modal" tabindex="-1" role="dialog" aria-labelledby="project-modal" aria-hidden="true">
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
            <label for="role" class="col-form-label">{{__('Question Category')}}</label>
            <input type="hidden" name="category_id" id="category_id">
            <input type="text" class="form-control" id="question_category">
          </div>

           <div class="form-group">
            <label for="role" class="col-form-label">{{__('Question Category (Arabic)')}}</label>
           
            <input type="text" class="form-control" id="question_category_ar">
          </div>
          


        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Close')}}</button>
        <button type="button" class="btn btn-primary" onclick="createCategory()">{{__('Save')}}</button>
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
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script type="text/javascript">
  $('#category_datatable').DataTable();

  function addCategory() {
    $("#category_id").val('');
    $('#category-modal').modal('show');
  }


  function createCategory() {
    var question_category = $('#question_category').val();
    var id = $('#category_id').val();
    var question_category_ar = $('#question_category_ar').val();

    let _url = `question_category`;
    let _token = $('meta[name="csrf-token"]').attr('content');

    $.ajax({
      url: _url,
      type: "POST",
      data: {
        id: id,
        question_category: question_category,
        question_category_ar: question_category_ar,
        _token: _token
      },
      success: function(response) {
        if (response.code == 200) {

          location.reload();
         
          $('#category-modal-modal').modal('hide');
        }
      },

    });
  }


  function deleteCategory(event) {
    var id = $(event).data("id");
    let _url = `question_category/${id}`;
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
    let _url = `question_category/${id}`;



    $.ajax({
      url: _url,
      type: "GET",
      success: function(response) {
        if (response) {
          $("#category_id").val(response.id);
          $("#question_category").val(response.question_category);
          $("#question_category_ar").val(response.question_category_ar);
          $('#category-modal').modal('show');
        }
      }
    });
  }

  $(document).ready(function() {
    $('.select_class').select2();
  });
</script>

@endsection