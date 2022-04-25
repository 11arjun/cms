@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endpush
@section('content')


<div class="right_col nep" role="main" style="min-height: 1444px;">
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">

        <div class="x_title">
          <h3 class="title-x">फरक फरक व्यहोरा प्रमाणित</h3>
         
          <div class="clearfix"></div>
        </div>
<div class="x_content">
   @include('master.master_header_ne2')
<form action="{{url('FarakNameTharNagarikta')}}" method="post">
          	 {{ csrf_field() }}

  <div class="row top-part">
    <div class="col-md-6">
     <p align="left"><b>पत्र संख्या :<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankya" id="patra_sankya" value="२०७५/०७६" required="required"></b></p>
     
     <p align="left"><b>चलानी नं. :<input type="text" class="dashed-input-field" name="chalani_no" id="chalani_no"></b></p>


   </div>
   <div class="col-md-6">
    <p align="right"><b>मिति :<input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" name="issued_date" id="issued_date" required="required" onfocus="showNdpCalendarBox('issued_date')"></b></p>
  </div>
</div>



<div class="row">
  <div class="col-md-12">
    <p align="center" class="font-size-24">
      </p><h4 align="center"><b>विषय: प्रमाणित सिफारिस गरिएको बारे ।</b> </h4>
      <input type="hidden" name="letter_subject" value="प्रमाणित सिफारिस गरिएको बारे">
    <p></p>
  </div>
</div>



<div class="row content-para">
  <div class="col-md-12">

    <p align="left"> उपरोक्त विषयमा <b><input type="text" class="dashed-input-field" placeholder="   *" name="local_state" value="{{$local_state[0]->local_state_name}}" required="required"></b> वडा नं. <b><input type="text" class="dashed-input-small-field" placeholder="   *" name="ward" value="१" required="required"></b> (साविक 

      <!--SABIK ADDRESS START -->

              <input type="text" class="dashed-input-field star" placeholder="   *" name="sabik_address" id="sabik_address" required="required">
      
      <!-- SABIK ADDRESS END -->


      <b> <select name="sabik_type">
<option value="गा.वि.स.">गा.वि.स.</option>
<option value="नगरपालिका">नगरपालिका</option>
<option value="उप महानगरपालिका">उप महानगरपालिका</option>
<option value="महानगरपालिका"> महानगरपालिका</option>
</select>
</b>, वडा नं. <input type="text" class="dashed-input-small-field star" placeholder="   *" name="sabik_ward" id="sabik_ward" required="required">) निवासी <b><select name="person_title">
<option value="श्री">श्री</option>
<option value="सुश्री">सुश्री</option>
<option value="श्रीमती">श्रीमती</option>
</select>
</b> 
      <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="person_name"> 

      ले दिनु भएको निवेदन अनुसार निजको नागरिकता प्रमाण पत्र नं.  <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="citi_no"> 

      मिति <input type="text" id="citi_date" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" required="required" name="citi_date" onfocus="showNdpCalendarBox('citi_date')"> मा नागरिकता प्रमाण पत्रमा  <select name="mistake_type">
<option value="नाम थर">नाम थर</option>
<option value="जन्ममिति">जन्ममिति</option>
<option value="नाम थर,जन्ममिति">नाम थर,जन्ममिति</option>
</select>

      <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="mistake_info"> र निजको   <select name="relation_type">
<option value="श्रीमान">श्रीमान</option>
<option value="श्रीमती">श्रीमती</option>
<option value="आफ्नो">आफ्नो</option>
</select>

      <input-group id="relnameanddetail"><input type="text" class="dashed-input-field" placeholder="" name="document_holder"> को</input-group>&nbsp; <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="document_type">मा <input type="text" class="dashed-input-field" placeholder="    " name="document_mistake" readonly="readonly">


      <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="document_name"> &nbsp; भई फरक परेकाले उल्लेखित फरक फरक <input type="text" class="dashed-input-field" placeholder="  " name="document_mistake" readonly="readonly"> फरक व्यक्तिको नभई एकै&nbsp;व्यक्तिको भएकाले निजको <input type="text" class="dashed-input-field" placeholder="  " name="rel_name" id="rel" readonly="readonly"><input type="text" class="dashed-input-field" placeholder="  " name="doc_name" readonly="readonly">  मा उल्लेखित बमोजिम <input type="text" class="dashed-input-field" placeholder="  " name="document_mistake" readonly="readonly">संशोधन गरी निजलाई नागरिकता प्रमाण पत्र प्रतिलिपि उपलब्ध गराई दिनहुन प्रमाणित सिफारिस गरिएको&nbsp;व्यहोरा अनुरोध छ।&nbsp;

    </p>
    </div>
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

<div class="col-md-12">
  <hr>
   <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
  <center><input type="submit" class="btn btn-success" name="save_farak_name_thar_miti_pramanit" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
</div>
</form></div>



</div>
</div>
</div>
</div>

@stop