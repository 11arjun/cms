@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="right_col" role="main">
  <div class="clearfix"></div>
  <div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2> Relationship Verification </h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>

            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>

        <div class="x_content">

          <form action="{{url('relationverification',[$data->id])}}" method="POST">
            {{method_field('PATCH')}}
            {{ csrf_field() }}
          @include('master.master_header_english')

              <div class="col-md-12">
                <div class="col-md-6">
                  {{-- <p align="left"><b>Ref No.<input class="dashed-input-field" placeholder="   *" name="ref_no" required="required" type="text" value="{{$data->ref_no}}" /></b></p> --}}
                </div>
                <div class="col-md-6">
                  <p align="right"><b>Date:  <input id="issued_date" required="required" name="issued_date" class="dashed-input-field" placeholder="   *" type="text" value="{{$data->issued_date}}" /></b> </p>
                </div>
              </div>


              <div class="col-md-12">
                <p align="center" class="font-size-24">
                  <h3 align="center"><b><u> Subject:Relationship Verification </u></b></h3>
                </p>
                <p align="center" class="font-size-24">
                  <h4 align="center"><b><u>To Whom It May Concern</u></b></h4>
                </p>
              </div>




          <div class="col-md-12">
                <p align="left">This is to certify that <b>
            <select name="applicant_title">
              <option value="Mr" {{$data->applicant_title == 'Mr' ? 'selected' : ''}}>Mr</option>
              <option value="Mrs" {{$data->applicant_title == 'Mrs' ? 'selected' : ''}}>Mrs</option>
              <option value="Miss" {{$data->applicant_title == 'Miss' ? 'selected' : ''}}>Miss</option>
            </select>
            <input class="dashed-input-field" placeholder="   *" type="text" required="required" name="applicant_name" value="{{$data->applicant_name}}" /></b>

                permanent resident of Ward No. {{auth()->user()->isAdmin}} {{$district[0]->district_name_english}} District Nepal, (Previously designated as<b> <input class="dashed-input-field" placeholder="   *" type="text" required="required" name="previous_vdc_name" value="{{$data->previous_vdc_name}}" /></b>  V.D.C., Ward No.<b> <input class="dashed-input-small-field" placeholder="   *" type="text" required="required" name="previous_ward_no" value="{{$data->previous_ward_no}}" /></b>,<b> <input class="dashed-input-field" placeholder="   *" type="text" required="required" name="previous_district" value="{{$data->previous_district}}" /></b> District, Nepal) has following relations to the people as mentioned below. </p>
              </div>


              <div class="col-md-12">
                <div class="table-responsive table-bordered">

                  <table class="table" id="relation-verification-table">

                    <thead>
                      <th> S.N. </th>
                      <th> Title </th>
                      <th> Relative's Name </th>
                      <th> Relation with Applicant </th>
                      <th> Photo </th>
                      <th> </th>

                    </thead>
                    <tbody>
                      <?php $count=1;?>
                      @foreach($detail as $d)
                      <tr>
                        <td>{{$count}}
                          <?php $count++;?>
                        </td>
                        <td>
                          <select name="relative_title[]">
                            <option value="Mr" {{$d->relative_title == 'Mr' ? 'selected' : ''}}>Mr</option>
                            <option value="Mrs" {{$d->relative_title == 'Mrs' ? 'selected' : ''}}>Mrs</option>
                            <option value="Miss" {{$d->relative_title == 'Miss' ? 'selected' : ''}}>Miss</option>
                          </select>
                        </td>
                        <td>
                          <input class="dashed-input-field" placeholder="   *" type="text" required="required" name="relative_name[]" value="{{$d->relative_name}}" />


                        </td>
                        <td>
                          <input class="dashed-input-field" placeholder="   *" type="text" required="required" name="relation[]" value="{{$d->relation}}" />


                        </td>
                        <td height="120" width="120">
                          <div style="height: 100%; width: 100%; border: 1px solid #000"></div>


                        </td>
                        <td>

                          <button id="add-more-relation" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button>
                          <button id="add-more-relation" class="btn btn-danger remove-field"><span class="glyphicon glyphicon-minus"></span></button>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>


                </div>


         </div>

       </div>




       <div class="col-md-12">

        <p class="btm-last">  Ward President </p>
      </div>
         <!--views for nibedak detail -->
<div class="clearfix"></div>
<hr>
<section class="bibaran">
<fieldset>

<legend>निवेदकको विवरण</legend>


<div class="form-group">
<label>निवेदकको नाम</label>
<input type="text" name="nibedak_name" class="form-control" value="{{$data->nibedak_name}}" required>
</div>
<div class="form-group">
<label>निवेदकको ठेगाना</label><input type="text" name="nibedak_address" class="form-control" value="{{$data->nibedak_address}}" required>
</div><div class="form-group">
<label>निवेदकको नागरिकता नं.</label>
<input type="text" name="nibedak_citizenship_no" class="form-control" value="{{$data->nibedak_citizenship_no}}" required>
</div>
<div class="form-group">
<label>निवेदक (NID) </label>
<input type="text" name="nibedak_nid" class="form-control" value="{{$data->nibedak_nid}}" required>
</div>

</fieldset>
</section>


      <div class="col-md-12">
        <hr/>

        <center><input  type="submit" class="btn btn-success" name="save_relation_verification_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
      </div>
    </div>
  </div>

</form>
</div>
</div>
</div>
</div>
@stop
<!-- <script type="text/javascript">
    $(document).ready(function(){
    $("#relation-verification-table tr:first").after("<td> "+
              '<button id="add-more-relation" class="btn btn-danger">'+
              '<span class="glyphicon glyphicon-minus"></span></button></td>"');
});

</script> -->
