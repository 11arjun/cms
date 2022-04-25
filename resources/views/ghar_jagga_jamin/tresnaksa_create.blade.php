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
          <h3 class="title-x">ट्रेस सिफारिस</h3>

          <div class="clearfix"></div>
        </div>
<div class="x_content">
   
<form action="{{url('tresnaksa')}}" method="post">
  @include('master.master_header_ne2')
             {{ csrf_field() }}

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
      </p><h4 align="center"><b>विषय: ट्रेस नक्सा उपलब्ध गराई दिने सम्बन्धमा।</b>

        <!-- Data for nibedak details -->
        <input type="hidden" name="letter_subject" value="ट्रेस नक्सा उपलब्ध गराई दिने सम्बन्धमा">
        <!--END -->

      </h4>
    <p></p>
  </div>
</div>

<div class="row title-left">
  <div class="col-md-12">
    <p align="left"><b>श्री <input type="text" class="dashed-input-field" placeholder="   *" name="karyalaya_name" value="नापी कार्यालय" required="required"></b>,</p>
    <p align="left"><b> <input type="text" class="dashed-input-field" placeholder="   *" name="karyalaya_district" value="{{$district[0]->district_name}}" required="required"></b>।</p>

  </div>
</div>





<div class="row">
  <div class="col-md-12 content-para">

    <p> प्रस्तुत विषयमा  <b> <input type="text" class="dashed-input-field" placeholder="   *" name="local_state" id="local_state" value="{{$local_state[0]->local_state_name}}" required="required"></b> वडा नं.  <b> <input type="text" class="dashed-input-small-field" placeholder="   *" name="ward" value="{{Helpers::convertNos(auth()->user()->isAdmin)}}" required="required"></b> (साविक



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




      वडा नं. <input type="text" class="dashed-input-small-field star" placeholder="   *" name="sabik_ward" id="sabik_ward" required="required">) बस्ने
      <input type="text" class="dashed-input-field star" placeholder="   *" name="nibedak" id="nibedak" required="required"> को नाममा दर्ता भएको <b> <input type="text" class="dashed-input-field" placeholder="   *" name="plot_local_state_name" id="plot_local_state_name" value="{{$local_state[0]->local_state_name}}" required="required"></b> वडा नं.  <b> <input type="text" class="dashed-input-small-field" placeholder="   *" name="plot_ward_no" value="{{Helpers::convertNos(auth()->user()->isAdmin)}}" required="required"></b>
      (साविक<!--SABIK ADDRESS START -->

                  <input type="text" class="dashed-input-field star" placeholder="   *" name="plot_sabik_address" id="plot_sabik_address" required="required">

        <b><select name="plot_sabik_type">
<option value="गा.वि.स.">गा.वि.स.</option>
<option value="नगरपालिका">नगरपालिका</option>
<option value="उप महानगरपालिका">उप महानगरपालिका</option>
<option value="महानगरपालिका"> महानगरपालिका</option>
</select>
</b>


        <!-- SABIK ADDRESS END -->
        वडा नं. <input type="text" class="dashed-input-small-field star" placeholder="   *" name="plot_sabik_ward" id="plot_sabik_ward" required="required">)


        कि. नं. <input type="text" class="dashed-input-field star" placeholder="   *" name="kitta_no" id="" required="required"> क्षे. फ.<input type="text" class="dashed-input-field star" placeholder="   *" name="area_no" id="" required="required">
        को  ट्रेस नक्सा
        <b> <input type="text" class="dashed-input-field" placeholder="   *" name="request_for" required="required"></b>
      कार्यको लागि आवश्यक परेको हुँदा उल्लेखित नक्सा उपलब्ध गराइदिनुहुन सिफारिस साथ  अनुरोध गरिन्छ।</p>
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
    <center><input type="submit" class="btn btn-success" name="save_tres_naksa_sifaris_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>



  </div>
</div>
</form>




</div>
</div>
</div>
</div>

<!-- footer content -->
</div>

@stop
