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
          <h2> Address Verification </h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>

            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>

        <div class="x_content">

          <form action="{{url('addressverification',[$data->id])}}" method="post">
            {{method_field('PATCH')}}
          {{ csrf_field() }}

          @include('master.master_header_english')
            <div class="col-md-12">
              <div class="col-md-6">
                {{-- <p align="left"><b>Ref No.<input class="dashed-input-field" placeholder="   *" name="ref_no" required="required" type="text" value="{{$data->ref_no}}"/></b></p> --}}
              </div>
              <div class="col-md-6">
                <p align="right"><b>Date:  <input id="date" required="required" name="issued_date" value="{{$data->issued_date}}" class="dashed-input-field" placeholder="   *" type="text"/></b> </p>
              </div>
            </div>


            <div class="col-md-12">
              <p align="center" class="font-size-24">
                <h3 align="center"><b><u> Subject:Address Verification </u></b></h3>
              </p>
              <p align="center" class="font-size-24">
                <h4 align="center"><b><u>To Whom It May Concern</u></b></h4>
              </p>
            </div>


         <div class="col-md-12">
              <p align="left">This is to certify that

                <select name= "title_options">
                    <option value="Mr" {{ $data->title_options== 'Mr' ? 'selected' : ''}}>Mr</option>
                    <option value="Mrs" {{ $data->title_options== 'Mrs' ? 'selected' : ''}}>Mrs</option>
                    </select>

               <input class="dashed-input-field" placeholder="   *" type="text" required="required" name="applicant_name" value="{{$data->applicant_name}}"/> according to the ministry level meeting of Nepal Government <b> <input class="dashed-input-field" placeholder="   *" type="text" required="required" name="previous_vdc_name" value="{{$data->previous_vdc_name}}"/></b> Ward No <b><input class="dashed-input-field" placeholder="   *" type="text" required="required" name="previous_ward_no" value="{{$data->previous_ward_no}}"/></b>  Nepal has been changed to  <b> <?php echo empty($local_state_name)?"":$local_state_name; ?></b> Rural MUnicipality/Municipality  Ward No <b> <?php echo empty($ward_no)?"":$ward_no; ?></b> .All of the Addresses are same & doesnot make any difference using any of them.





              </div>

            </div>



<div class="clearfix"></div>
        <hr>
        <section class="bibaran">
        <fieldset>

        <legend>Applicant Information</legend>


        <div class="form-group">
        <label>Applicant Name</label>
        <input type="text" name="nibedak_name" class="form-control" value="{{$data->nibedak_name}}" required>
        </div>
        <div class="form-group">
        <label>Applicant Address</label><input type="text" name="nibedak_address" class="form-control" value="{{$data->nibedak_address}}" required>
        </div><div class="form-group">
        <label>Applicant Citizenship No.</label>
        <input type="text" name="nibedak_citizenship_no" class="form-control" value="{{$data->nibedak_citizenship_no}}" required>
        </div>
        <div class="form-group">
        <label>Applicant (NID) </label>
        <input type="text" name="nibedak_nid" class="form-control" value="{{$data->nibedak_nid}}" required>
        </div>

        </fieldset>
        </section>
         <div class="col-md-12">

        <p class="btm-last">  Ward President </p>
      </div>



        <div class="col-md-12">
          <hr/>

          <center><input  type="submit" class="btn btn-success" name="save_address_verification_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस">
            <input  type="hidden" class="btn btn-success" name="id" value="{{$data->id}}"></center>
        </div>
      </div>
    </div>

  </form>
</div>
</div>
</div>
</div>
@stop
