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
          <h3 class="title-x">घर जनाउने सिफारिस</h3>

          <div class="clearfix"></div>
        </div>
<div class="x_content">
   
<form action="{{url('GharJanauneSifarisController')}}" method="post">
  {{ csrf_field() }}
  @include('master.master_header_ne2')
  <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
  <div class="row top-part">
    <div class="col-md-6">
      {{-- <p align="left"><b>पत्र संख्या :<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankhya" id="patra_sankhya" value="२०७५/०७६" required="required"> </b></p>
      <p align="left"><b>चलानी नं. :<input type="text" class="dashed-input-field" name="chalani_no" id="chalani_no"></b></p> --}}


    </div>
    <div class="col-md-6">
      <p align="right"><b>मिति :<input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" name="issued_date" id="issued_date" required="required" onfocus="showNdpCalendarBox('issued_date')"></b></p>
    </div>
  </div>

  <div class="row title-left">
    <div class="col-md-12">
     <b> <p>श्री भूमि सुधार तथा मालपोत कार्यालय,
     </p>
   </b><p><b><b>{{$district[0]->district_name}}।</b></b>

     </p></div>
   </div>
   <div class="row">

    <div class="col-md-12">
      <p align="center" class="font-size-24">
        </p><h4 align="center"><b>विषय: सिफारिस सम्बन्धमा।</b></h4>
        <input type="hidden" name="letter_subject" value="सिफारिस सम्बन्धमा">
      <p></p>
    </div>
  </div>
  <div class="row">


    <div class="col-md-12">

      <p>
        उपरोक्त सम्बन्धमा <b><input type="text" class="dashed-input-field" placeholder="   *" name="local_state" value="{{$local_state[0]->local_state_name}}" required="required"></b> वडा नं. <b><input type="text" class="dashed-input-small-field" placeholder="   *" name="ward" value="१" required="required"></b> बस्ने <b>
          <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="person_name"></b> ले मेरो नाउँमा मालपोत कार्यालय, <b>{{$district[0]->district_name}}</b> मा  दर्ता भएको साविक


        <!--  -->

                  <input type="text" class="dashed-input-field star" placeholder="   *" name="sabik_address" id="sabik_address" required="required">
                <!--  -->




        <b><select name="sabik_type">
<option value="गा.वि.स.">गा.वि.स.</option>
<option value="नगरपालिका">नगरपालिका</option>
<option value="उप महानगरपालिका">उप महानगरपालिका</option>
<option value="महानगरपालिका"> महानगरपालिका</option>
</select>
</b> वडा नं. <b><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="sabik_ward"></b> हाल  <b><input type="text" class="dashed-input-field" placeholder="   *" name="local_states" value="{{$local_state[0]->local_state_name}}" required="required"></b> वडा नं. <b>
  <input type="text" class="dashed-input-small-field" placeholder="   *" name="wards" value="१" required="required"></b> को कि.नं.<b><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="kitta_no"></b> क्षे.फ.
  <b><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="area"></b> जग्गामा मैले घर निर्माण गरी सकेको र मेरो माथि उल्लेखित कित्ता जग्गाको ज.ध.प्र.पुर्जामा हालसम्म घर नजनिएकोले घर जनाउनको लागि तहाँ कार्यालयको नाउँमा सिफारिस पाऊँ भनी यस कार्यालयमा निवेदन पेश गरेकोले सो सम्बन्धमा बुझ्दा जानेबुझेसम्म व्यहोरा मनासिब भएको बुझिएकोले तहाँ कार्यालयको नियमानुसार निवेदकको माथि उल्लेखित कित्ता जग्गाको ज.ध.प्र.पु.मा घर जनाई दिनुहुन यो सिफारिस गरिन्छ।

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

<div class="col-md-12">
  <hr>

  <center><input type="submit" class="btn btn-success" name="save_ghar_janaune_sifaris_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
</div>
</div>
</form>
</div>
</div>
</div>

@stop
