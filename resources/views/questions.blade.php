@extends('layouts.master')
@section('page-css')

<link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">
@endsection

@section('main-content')
<div class="breadcrumb">
    <h1>{{__('Survey Questions')}}</h1>

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
                    <a href="javascript:void(0)" class="btn btn-primary" id="create-new-role" onclick="addQuestion()" style="float: right; margin-bottom: 2%; margin-right: 2%">Add Question</a>
                <?php } ?>
                <div class="table-responsive">
                    <table id="question_datatable" class="display table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>{{__('SL NO')}}</th>
                                <th>{{__('Question Category')}}</th>
                                <th>{{__('Question Type')}}</th>
                                <th>{{__('Question')}}</th>
                                <th>{{__('Response 1')}}</th>
                                <th>{{__('Response 2')}}</th>

                                <?php $user =  Auth::user();
                                if ($user->login_type == "Admin") { ?>
                                    <th>Action</th>
                                <?php } ?>


                            </tr>
                        </thead>
                        <tbody>

                            <?php $i = 1;
                            foreach ($data['questions'] as $key => $row) { ?>
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$row->question_category}}<br>{{$row->question_category_ar}}</td>
                                    <td>{{$row->question_type}}</td>
                                    <td>{{$row->question}}<br>{{$row->question_ar}}</td>
                                    <td>{{$row->response1}}<br>{{$row->response1_ar}}</td>
                                    <td>{{$row->response2}}<br>{{$row->response2_ar}}</td>
                                    <?php $user =  Auth::user();
                                    if ($user->login_type == "Admin") { ?>
                                        <td>
                                            <a href="#" class="text-success mr-2">
                                                <i class="nav-icon i-Pen-2 font-weight-bold" onclick="editQuestion(event.target)" data-id="{{ $row->id }}"></i>
                                            </a>

                                            <a href="#" class="text-danger mr-2">
                                                <i class="nav-icon i-Close-Window font-weight-bold" onclick="deleteQuestion(event.target)" data-id="{{ $row->id }}"></i>
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

<div class="modal fade" id="question-modal" tabindex="-1" role="dialog" aria-labelledby="question-modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="verifyModalContent2_title">{{__('Add Question')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="add_question_form" id="add_question_form" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="question_category" class="col-form-label">{{__('Question Category')}}</label>
                        <input type="hidden" name="question_id" id="question_id">
                        <select name="question_category" id="question_category" required class="form-control m-select2 select_class">
                        <option value="">Select Question Category</option>
                        <?php foreach($data['question_category'] as $row1){?>
                            <option value="{{$row1->question_category}}">{{$row1->question_category}}</option>
                        <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="question_category" class="col-form-label">{{__('Question Category (Arabic)')}}</label>
                        <select name="question_category_ar" id="question_category_ar" required class="form-control m-select2 select_class">
                        <option value="">Select Question Category</option>
                        <?php foreach($data['question_category'] as $row1){?>
                            <option value="{{$row1->question_category_ar}}">{{$row1->question_category_ar}}</option>
                        <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="question_type" class="col-form-label">{{__('Question Type')}}</label>
                        <input type="text" class="form-control" id="question_type" name="question_type">
                    </div>

                    <div class="form-group">
                        <label for="question" class="col-form-label">{{__('Question')}}</label>
                        <textarea id="question" class="form-control" name="question"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="question_ar" class="col-form-label">{{__('Question (Arabic)')}}</label>
                        <textarea id="question_ar" class="form-control" name="question_ar"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="response1" class="col-form-label">{{__('Response 1')}}</label>
                        <input type="text" class="form-control" id="response1" name="response1">
                    </div>

                    <div class="form-group">
                        <label for="response1_ar" class="col-form-label">{{__('Response 1 (Arabic)')}}</label>
                        <input type="text" class="form-control" id="response1_ar" name="response1_ar">
                    </div>

                    <div class="form-group">
                        <label for="response2" class="col-form-label">{{__('Response 2')}}</label>
                        <input type="text" class="form-control" id="response2" name="response2">
                    </div>

                    <div class="form-group">
                        <label for="response2_ar" class="col-form-label">{{__('Response 2 (Arabic)')}}</label>
                        <input type="text" class="form-control" id="response2_ar" name="response2_ar">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Close')}}</button>
                <button type="button" class="btn btn-primary" onclick="createQuestion()">{{__('Save')}}</button>
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

    $('#question_datatable').DataTable();

    function addQuestion() {

        $("#question_id").val('');
        $('#question-modal').modal('show');
    }


    function createQuestion() {

        var form = $('#add_question_form')[0];
        var formData = new FormData(form);

        event.preventDefault();

        let _url = `surveyquestions`;
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
                    $('#question-modal').modal('hide');
                }
            },

        });
    }


    function deleteQuestion(event) {
        var id = $(event).data("id");
        let _url = `surveyquestions/${id}`;
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

    function editQuestion(event) {
        var id = $(event).data("id");
        let _url = `surveyquestions/${id}`;

        $.ajax({
            url: _url,
            type: "GET",
            success: function(response) {
                if (response) {
                    $("#question_id").val(response.id);
                    $("#question_category").val(response.question_category);
                    $("#question_category_ar").val(response.question_category_ar);
                    $("#question_type").val(response.question_type);
                    $("#question").val(response.question);
                    $("#question_ar").val(response.question_ar);
                    $("#response1").val(response.response1);
                    $("#response1_ar").val(response.response1_ar);
                    $("#response2").val(response.response2);
                    $("#response2_ar").val(response.response2_ar);
                    $('#question-modal').modal('show');
                }
            }
        });
    }
</script>

@endsection