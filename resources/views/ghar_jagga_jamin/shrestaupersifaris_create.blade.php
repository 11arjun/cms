@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="right_col nep" role="main" style="min-height: 1800px;">
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">

        <div class="x_title">
          <h3 class="title-x">श्रेस्ता उपर सिफारिस</h3>
         
          <div class="clearfix"></div>
        </div>
<div class="x_content">
   
<form action="{{url('ShrestaUparSifarisController')}}" method="post">
             {{ csrf_field() }}
@include('master.master_header_ne2')
  <div class="row top-part">
    <div class="col-md-6">
     {{-- <p align="left"><b> पत्र संख्या :<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankhya" id="patra_sankhya" value="२०७५/०७६" required="required"> </b></p>

     <p align="left"><b> चलानी नं. :<input type="text" class="dashed-input-field" name="chalani_no" id="chalani_no"></b></p> --}}


   </div>
   <div class="col-md-6">
    <p align="right"><b>मिति :<input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" name="issued_date" id="issued_date" required="required" onfocus="showNdpCalendarBox('issued_date')"></b></p>
  </div>
</div>


<div class="row">
  <div class="col-md-12">
    <p align="center" class="font-size-24">
      </p><h4 align="center"><b>बिषय :श्रेस्ता उपर सिफारिस ।</b>

        <!-- Data for nibedak details -->
        <input type="hidden" name="letter_subject" value="मानो चामोल सिफारिस">
        <!--END -->


      </h4>
    <p></p>
    
  </div>
</div>
<div class="row title-left">
  <div class="col-md-12">
    <p align="left"><b>श्री <input type="text" class="dashed-lg-input" placeholder="   *" name="karyalaya_name" value="भुमि सुधार तथा मालपोत कार्यालय" required="required"></b>,</p>
    <p align="left"><b> <input type="text" class="dashed-input-field" placeholder="   *" name="karyalaya_district" value="{{$district[0]->district_name}}" required="required"></b>।</p>

  </div>


</div>

<div class="row">
  <div class="col-md-12 content-para">
    <p>

   उपरोक्त विषयमा साविक  



      <!--SABIK ADDRESS START -->

              <input type="text" class="dashed-input-field star" placeholder="   *" name="sabik_address" id="sabik_address" required="required">
      
      <!-- SABIK ADDRESS END -->



      <b><select name="sabik_type">
<option value="गा.वि.स.">गा.वि.स.</option>
<option value="नगरपालिका">नगरपालिका</option>
<option value="उप महानगरपालिका">उप महानगरपालिका</option>
<option value="महानगरपालिका"> महानगरपालिका</option>
</select>
</b>




      वडा नं. <input type="text" class="dashed-input-small-field star" placeholder="   *" name="sabik_ward" id="sabik_ward" required="required">हाल <input type="text" class="dashed-input-field" placeholder="   *" name="local_state" id="local_state" value="{{$local_state[0]->local_state_name}}" required="required"> वडा नं.  <b> <input type="text" class="dashed-input-small-field" placeholder="   *" name="ward" value="१" required="required"></b>
      बस्ने
      <b> <input type="text" class="dashed-input-field" placeholder="   *" name="owner_name" required="required"></b> को नाममा <input type="text" class="dashed-lg-input" placeholder="   *" name="of_name" required="required" value="भुमि सुधार तथा मालपोत कार्यालय"> <input type="text" class="dashed-input-field" placeholder="   *" name="of_address" required="required" value="{{$district[0]->district_name}}">मा दर्ता कायम रहेको तपशिलमा उल्लेखित कित्ता जग्गाहरुको श्रेष्ता कार्यालय प्रयोजनको लागि आवश्यक परेको हुदा उक्त कित्ता जग्गाहरुको श्रेष्ता तयार गरी पठाईदिनु हुन सिफारिस साथ अनुरोध गरिन्छ । 


      </p>
    </div>
  </div>









     <div class="text-right btm-last">
    <p><input type="text" class="dashed-input-field star" placeholder="   *" name="hakim_ko_name" id="" required="required"></p>


    <p>  <b><select name="officer">
<option value="वडा अध्यक्ष">वडा अध्यक्ष</option>
<option value="का. बा वडा अध्यक्ष">का. बा वडा अध्यक्ष</option>
<option value="वडा सचिब">वडा सचिब</option>
</select>
</b> </p>
  </div>




  <!--views for nibedak detail -->
  <div class="clearfix"></div>
  <hr>
  <section class="bibaran"> 
    <fieldset>

     <legend>निवेदक को विवरण</legend>


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
<!-- END -->



<div class="row">
  <div class="col-md-12">
    <hr>
<input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
    <center><input type="submit" class="btn btn-success" name="save_shrestauparsifaris_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>



  </div>
</div>
</form>




</div>
</div>
</div>
</div>

<!-- footer content -->

  <!-- /footer content -->
</div>


@stop