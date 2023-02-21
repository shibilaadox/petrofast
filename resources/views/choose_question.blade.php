@extends('layouts.master')
@section('page-css')

<link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">
@endsection

@section('main-content')
<div class="breadcrumb">
  <h1>{{__('Choose Survey Questions')}}</h1>

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
        <a href="javascript:void(0)" class="" id="" style="float: right; margin-bottom: 2%; margin-right: 2%"></a>

        <div class="table-responsive">
          <!--begin: Datatable -->
          <table class="table table-striped- table-bordered table-hover table-checkable">
            <thead>
              <tr>
                <th>{{__('Question Category')}}</th>
                <th>Question</th>
                <th>Check/Uncheck</th>


              </tr>

            </thead>

            <tbody>

              <?php foreach ($data['question'] as $row) {

              ?>

                <tr>

                  <td>{{$row->question_category}}</td>
                  <td>{{$row->question}}</td>

                  <?php
                  $checked = "";
                  $checkmenu = $row->id;

                  $st_id = explode(',', @$data['station'][0]->questions);
                  if (in_array($checkmenu, $st_id)) {
                    $checked = "checked";
                  }



                  ?>
                  <td>

                    <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-brand">
                      <input type="checkbox" value="{{$row->id}}" data-id="{{$data['id']}}" class="qstns_class" <?php echo $checked; ?> name="qst_chkbx"> <span></span>
                    </label>

                  </td>





                </tr>

              <?php } ?>



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
  yourArray = [];
  $(".qstns_class").click(function() {

    yourArray = [];
    var id = $(this).attr('data-id');

    $("input:checkbox[name=qst_chkbx]:checked").each(function() {
      yourArray.push($(this).val());
    });

    value = yourArray.toString();

    $.ajax({

      type: "GET",
      url: "<?php echo url('qstn_update'); ?>",
      dataType: 'text',
      data: {
        value: value,
        id: id
      },
      success: function(res) {

      }
    });



  });
</script>

@endsection