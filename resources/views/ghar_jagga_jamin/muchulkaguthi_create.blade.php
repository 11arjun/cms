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
          <h3 class="title-x"> सर्जमिन  मुचुल्का (गुठी)</h3>
         
          <div class="clearfix"></div>
        </div>
<div class="x_content">
  
<form action="{{url('MuchulkaGuthiController')}}" method="post">
             {{ csrf_field() }}
             @include('master.master_header_ne2')
  <div class="row top-part">
    <div class="col-md-6">
      {{-- <p align="left"><b>पत्र संख्या :<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankhya" id="patra_sankhya" value="२०७५/०७६" required="required"> </b></p>
      <p align="left"><b>चलानी नं. :<input type="text" class="dashed-input-field" name="chalani_no" id="chalani_no"></b></p> --}}


    </div>
    <div class="col-md-6">
      <p align="right"><b>मिति :<input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" name="issued_date" id="issued_date" required="required" onfocus="showNdpCalendarBox('issued_date')"></b></p>
    </div>
  </div>


  <div class="row">

    <div class="col-md-12">
      <p align="center" class="font-size-24">
        </p><h4 align="center"><b>विषय: सर्जमिन गरी मुचुल्का पठाएको सम्बन्धमा।</b></h4>
        <input type="hidden" name="letter_subject" value="सर्जमिन गरी मुचुल्का पठाएको सम्बन्धमा">
      <p></p>
    </div>
  </div>


  <div class="row title-left">
    <div class="col-md-12">
      <p align="left">श्री <input type="text" class="dashed-input-field" placeholder="   *" name="office_name" id="office_chairman" required="required"> ,</p>
      <p> नगर कार्यपालिकाको कार्यालय</p>
      <p align="left">  <input type="text" class="dashed-input-field" placeholder="   *" name="office_address" id="office_address" required="required">|</p>

    </div>
  </div> 
  <br>

  <div class="row">


    <div class="col-md-12">

      <p> उपरोक्त सम्बन्धमा <b> <input type="text" class="dashed-input-field" placeholder="   *" name="landowner_name" required="required"></b> गुठीको नाममा मालपोत कार्यालय <input type="text" class="dashed-input-field" placeholder="   *" name="malpot_address" required="required" value="{{$district[0]->district_name}}"> मा दर्ता कायम रहेको साविक

       <!-- <input type="text" class="dashed-input-field" placeholder="    *" required="required" name="landsabik_address" /> -->

       <!--  -->
               <input type="text" class="dashed-input-field star" placeholder="   *" name="landsabik_address" id="landsabik_address" required="required">
            <!--  -->




      <b> <select name="landsabik_type">
<option value="गा.वि.स.">गा.वि.स.</option>
<option value="नगरपालिका">नगरपालिका</option>
<option value="उप महानगरपालिका">उप महानगरपालिका</option>
<option value="महानगरपालिका">महानगरपालिका</option>
</select>
</b> वडा नं. <b><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="landsabik_ward"></b> 


      हाल  <b><input type="text" class="dashed-input-field" placeholder="   *" name="landlocal_states" value="{{$local_state[0]->local_state_name}}" required="required"></b> वडा नं. <b><input type="text" class="dashed-input-small-field" placeholder="   *" name="landwards" value="१" required="required"></b> 



      को कित्ता नं. <b><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="kitta_no"> </b> क्षेत्रफल क्रमश  <b><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="area"> </b> को जग्गामा साविक 

      <!--  -->
              <input type="text" class="dashed-input-field star" placeholder="   *" name="appsabik_address" id="appsabik_address" required="required">
      
      <!--  -->






      <b><select name="appsabik_type">
<option value="गा.वि.स.">गा.वि.स.</option>
<option value="नगरपालिका">नगरपालिका</option>
<option value="उप महानगरपालिका">उप महानगरपालिका</option>
<option value="महानगरपालिका">महानगरपालिका</option>
</select>
</b> वडा नं. <b><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="appsabik_ward"></b> हाल  <b><input type="text" class="dashed-input-field" placeholder="   *" name="applocal_states" value="{{$local_state[0]->local_state_name}}" required="required"></b> वडा नं. <b><input type="text" class="dashed-input-small-field" placeholder="   *" name="appward" value="१" required="required"></b> बस्ने <b><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="applicant_name"> </b> ले आवासीय घर निर्माण गर्ने हुनु भएको हुँदा सो सम्बन्धमा भएको सर्जमिन मुचुल्का यसै पत्र साथ संलग्न गरी पठाएको व्यहोरा जानकारी गराइन्छ।
    </p>

  </div>




  <!-- बनाउनरनियमित -->



</div>
 <div class="text-right btm-last">
  <p><input type="text" class="dashed-input-field star" placeholder="   *" name="hakim_ko_name" id="" required="required"></p>


  <p> <b> <select name="officer">
<option value="वडा अध्यक्ष">वडा अध्यक्ष</option>
<option value="का. बा वडा अध्यक्ष">का. बा वडा अध्यक्ष</option>
<option value="वडा सचिब">वडा सचिब</option>
</select>
 </b></p>
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
  <!-- END -->




</div>

<div class="col-md-12">
  <hr>
<input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
  <center><input type="submit" class="btn btn-success" name="save_muchulka_guthi_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
</div>
</div>
</form>
</div>
</div>
</div>
@stop