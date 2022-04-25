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
          <h2>जन्म मिति प्रमाणित </h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>

            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>


        <form action="{{url('janmamitipramanit',[$data->id])}}" method="POST">
          {{method_field('PATCH')}}
          {{ csrf_field() }}
          <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
          <div class="x_content">
            @include('master.master_header_ne2')
              <div class="col-md-12">
                <div class="col-md-6">
                  <p align="left"><b>पत्र संख्या&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankya" id="patra_sankya" required="required" value="{{$data->patra_sankya}}" /> </b></p>
                </div>
                <div class="col-md-6">
                </div>
              </div>


              <div class="col-md-12">
                <div class="col-md-6">
                  <p align="left"><b>चलानी नं.&nbsp;<input type="text" class="dashed-input-field"  placeholder="   *" name="chalani_no" id="chalani_no" required="required" value="{{$data->chalani_no}}" /></b></p>


                </div>
                <div class="col-md-6">
                  <p align="right"><b>मिति:&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" name="issued_date" id="issued_date" required="required" value="{{$data->issued_date}}" /></b></p>
                </div>
              </div>




              <div class="col-md-12">
                <p align="center" class="font-size-24">
                  <h4 align="center"><b><u>विषय: जन्म मिति प्रमाणित</u></b></h4>
                </p>
              </div>
              <div class="col-md-12">

                <p align="left"> निवेदक श्री <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="father_name" value="{{$data->father_name}}" /> तथा श्रीमती  <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="mother_name" value="{{$data->mother_name}}" />को निवेदन अनुसार उँहाहरुको
             <select name="children_gender">
              <option value="छोरा" {{$data->children_gender == 'छोरा' ? 'selected' : ''}}>छोरा</option>
              <option value="छोरी" {{$data->children_gender == 'छोरी' ? 'selected' : ''}}>छोरी</option>
            </select>

                  <b>  {{$local_state[0]->local_state_name}}</b> वडा नं. {{Helpers::convertNos(auth()->user()->isAdmin)}} स्थायी  ठेगाना  (साबिकको ठेगाना <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="sabik_address" value="{{$data->sabik_address}}" />) भएको
            <select name="children_title">
              <option value="श्री" {{$data->children_title == 'श्री' ? 'selected' : ''}}>श्री</option>
              <option value="सुश्री" {{$data->children_title == 'सुश्री' ? 'selected' : ''}}>सुश्री</option>
              <option value="श्रीमती" {{$data->children_title == 'श्रीमती' ? 'selected' : ''}}>श्रीमती</option>
            </select>
                  <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="children_name" value="{{$data->children_name}}" />
                  को जन्म मिति  <input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" required="required" id="birth_date" name="birth_date" value="{{$data->birth_date}}" onfocus="showNdpCalendarBox('birth_date')"/> गते पेश गरेको कागजातका आधारमा <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="birth_place" value="{{$data->birth_place}}" />स्थानमा भएको व्यहोरा प्रमाणित गरिन्छ |



                </div>

                <p class="btm-last">  वडा अध्यक्ष </p>
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

                  <center><input  type="submit" class="btn btn-success" name="save_janmamiti_pramanit_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
                </div>
              </div>
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>
@stop
