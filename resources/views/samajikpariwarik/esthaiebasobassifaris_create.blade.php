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
          <h2>स्थायी बसोबास सिफारिस</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>

            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>


        <form action="{{url('esthaiebasobasSifaris')}}" method="post">
          {{ csrf_field() }}
          <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
          <!-- @include('master.master_header_ne2') -->
          <div class="x_content">
          @include('master.master_header_ne2')
            <div class="col-md-12">
              <div class="col-md-6">
               <p align="left"> <b> पत्र संख्या :<input type="text" class=" dashed-input-field" placeholder="  *" name="patra_sankya" id="patra_sankya" value="२०७५/०७६" required="required" autocomplete="off"></b></p>
             </div>
             <div class="col-md-6">
             </div>
           </div>


           <div class="col-md-12">
            <div class="col-md-6">
              <p align="left" class="star"><b>चलानी नं. :<input type="text" class="dashed-input-field" name="chalani_no" id="chalani_no" autofocus="true"></b>
                   </p>


            </div>
            <div class="col-md-6">
              <p align="right" class="star"><b>मिति :<input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" name="issued_date" id="issued_date" required="required" onfocus="showNdpCalendarBox('issued_date')"></b></p>
            </div>
          </div>



          <div class="col-md-12">
            <p align="center" class="font-size-24">
              <h4 align="center"><b><u>विषय: स्थायी बसोबास सिफारिस।</u></b></h4>
            </p>
          </div>





          <div class="col-md-12">

           <p>निवेदक
            <select name="person_title">
              <option value="श्री">श्री</option>
              <option value="सुश्री">सुश्री</option>
              <option value="श्रीमती">श्रीमती</option>
            </select>
            <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="person_name">

                ले पेश गर्नुभएको निवेदनका आधारमा निज
            <select name="houseowner_title">
              <option value="श्री">श्री</option>
              <option value="सुश्री">सुश्री</option>
              <option value="श्रीमती">श्रीमती</option>
            </select>

              <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="houseowner_name">
              <b> {{$local_state[0]->local_state_name}} </b> वडा नं.  <b>{{Helpers::convertNos(auth()->user()->isAdmin)}}</b> (साबिकको ठेगाना <input type="text" class="dashed-input-field star" name="sabik_address" id="sabik_address" autocomplete="off" required="required"> देखि स्थायी बसोबास गर्दै आउनु भएको व्यहोरा सिफारिस साथ अनुरोध गरिन्छ |  अन्तर्गत  तल उल्लेखित स्थानमा विगत मिति <input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" name="living_starting_date" id="living_starting_date" required="required" onfocus="showNdpCalendarBox('living_starting_date')"></p>
             <!-- </div>
             <div class="col-md-12"> -->
                <p><i>बसोबास गर्नेको ना.प्र.प.न. <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="citizenship_no">/ जिल्ला- <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="district_name">/ जारी  मिति- <input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" required="required" id="citizenship_issued_date" name="citizenship_issued_date" onfocus="showNdpCalendarBox('citizenship_issued_date')"></i> </p>
             </div>
            <h4 align="center"><b>बसोबास स्थान </b></h4>
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-bordered" id="temporary_basobas_table">
                  <thead>

                    <th>क्र.स.</th>
                    <th>टोल </th>
                    <th>बाटोको नाम</th>
                    <th>घर नं.</th>
                    <th> </th>
                  </thead>
                  <tbody>
                    <tr>
                      <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="" value="१"> </td>
                      <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="toll[]"></td>
                      <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="batto_name[]"> </td>
                      <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="ghar_no[]"> </td>

                      <td><button id="add_more_basobas_data" class="btn btn-success" ><span class="glyphicon glyphicon-plus"></span></button></td>
                    </tr>

                  </tbody>
                </table>
              </div>
                  <p class="btm-last">  वडा अध्यक्ष </p>
            </div>
         <!--views for nibedak detail -->
<div class="clearfix"></div>
<hr>
<section class="bibaran">
<fieldset>

<legend>निवेदकको विवरण</legend>


<div class="form-group">
<label>निवेदकको नाम</label>
<input type="text" name="nibedak_name" class="form-control" required>
</div>
<div class="form-group">
<label>निवेदकको ठेगाना</label><input type="text" name="nibedak_address" class="form-control" required>
</div><div class="form-group">
<label>निवेदकको नागरिकता नं.</label>
<input type="text" name="nibedak_citizenship_no" class="form-control" required>
</div>
<div class="form-group">
<label>निवेदक (NID) </label>
<input type="text" name="nibedak_nid" class="form-control" required>
</div>

</fieldset>
</section>



            <div class="col-md-12">
              <hr/>

              <center><input  type="submit" class="btn btn-success" name="save_permanent_basobas_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
            </div>
          </div>
        </div>

      </form>




    </div>
  </div>
</div>
</div>

@stop
