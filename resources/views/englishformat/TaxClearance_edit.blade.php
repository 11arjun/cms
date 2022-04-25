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
          <h2> Tax Clearance </h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>

            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>

        <div class="x_content">

          <form action="{{url('taxclearance',[$data->id])}}" method="post">
              {{method_field('PATCH')}}
            {{csrf_field()}}
            @include('master.master_header_english')

            <div class="col-md-12">
              <div class="col-md-6">
              {{-- <p align="left"><b>Ref No.<input classs="dashed-input-field" placeholder="   *" name="ref_no" value="{{$data->ref_no}}" required="required" type="text"></b></p> --}}
              </div>
              <div class="col-md-6">
              <p align="right"><b>Date:  <input id="issued_date" required="required" name="issued_date" value="{{$data->issued_date}}" class="dashed-input-field" placeholder="   *" type="text"/></b> </p>
              </div>
            </div>


            <div class="col-md-12">
              <p align="center" class="font-size-24">
                <h3 align="center"><b><u> Subject: Tax Clearance </u></b></h3>
              </p>
              <p align="center" class="font-size-24">
                <h4 align="center"><b><u>To Whom It May Concern</u></b></h4>
              </p>
            </div>


         <div class="col-md-12">
              <p align="left">This is to certify that

                 <select name= "applicant_title">
                    <option value="Mr" {{$data->applicant_title == 'Mr' ? 'selected' : ''}}>Mr</option>
                    <option value="Mrs" {{$data->applicant_title == 'Mrs' ? 'selected' : ''}}>Mrs</option>
                    <option value="Miss" {{$data->applicant_title == 'Miss' ? 'selected' : ''}}>Miss</option>
                    </select>

                <input class="dashed-input-field" placeholder="   *" type="text" required="required" value="{{$data->applicant_name}}" name="applicant_name"/> has paid all Business Tax, Rental Tax, House and Land Tax/Integrated Property Tax (<b> <input class="dashed-input-field" placeholder="   *" type="text" required="required" value="{{$data->tax}}" name="tax"/></b> & Plot No <input class="dashed-input-field" placeholder="   *" type="text" required="required" value="{{$data->plot_no}}" name="plot_no"/> Ward No <b>{{auth()->user()->isAdmin}}</b> ) as per the rule of <input class="dashed-input-field" placeholder="   *" type="text" required="required" value="{{$data->office_name}}" name="office_name"/> Office on fiscal year <input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" required="required" value="{{$data->bs_date}}" name="bs_date" id="bs_date" onfocus="showNdpCalendarBox('bs_date')"/> B.S.

              </div>

            </div>


       <div class="col-md-12">

            <p class="btm-last">  Ward President </p>
          </div>
<div class="clearfix"></div>
      <hr>
      <section class="bibaran">
      <fieldset>

      <legend>Applicant Information</legend>


      <div class="form-group">
      <label>Applicant Name</label>
      <input type="text" name="nibedak_name" value="{{$data->nibedak_name}}" class="form-control" required>
      </div>
      <div class="form-group">
      <label>Applicant Address</label><input type="text" name="nibedak_address" value="{{$data->nibedak_address}}" class="form-control" required>
      </div><div class="form-group">
      <label>Applicant Citizenship No.</label>
      <input type="text" name="nibedak_citizenship_no" value="{{$data->nibedak_citizenship_no}}" class="form-control" required>
      </div>
      <div class="form-group">
      <label>Applicant (NID) </label>
      <input type="text" name="nibedak_nid" value="{{$data->nibedak_id}}" class="form-control" required>
      </div>

      </fieldset>
      </section>

         <div class="col-md-12">

        <p class="btm-last">  Ward President </p>
      </div>

      <div class="col-md-12">
          <hr/>
          <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">

          <center><input  type="submit" class="btn btn-success" name="save_tax_clearance_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
        </div>
      </div>
    </div>

  </form>
</div>
</div>
</div>
</div>

@stop
