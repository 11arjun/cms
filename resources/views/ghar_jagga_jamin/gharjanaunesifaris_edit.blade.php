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
   
<form action="{{url('GharJanauneSifarisController',[$data->id])}}" method="post">
  {{method_field('PATCH')}}
 {{ csrf_field() }}
 @include('master.master_header_ne2')
  <div class="row top-part">
    <div class="col-md-6">
     {{--  <p align="left"><b>पत्र संख्या :<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankhya" id="patra_sankhya" value="{{$data->patra_sankhya}}" required="required"> </b></p>
      <p align="left"><b>चलानी नं. :<input type="text" class="dashed-input-field" name="chalani_no" id="chalani_no" value="{{$data->chalani_no}}"></b></p>
 --}}

    </div>
    <div class="col-md-6">
      <p align="right"><b>मिति :<input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" name="issued_date" id="issued_date" required="required" onfocus="showNdpCalendarBox('issued_date')" value="{{$data->issued_date}}"></b></p>
    </div>
  </div>

  <div class="row title-left">
    <div class="col-md-12">
     <b> <p>श्री भूमि सुधार तथा मालपोत कार्यालय,
     </p>
   </b><p><b><b><input type="text" class="dashed-input-field" placeholder="   *" name="district" value="{{$data->district}}" required="required">।</b></b>

     </p></div>
   </div>
   <div class="row">

    <div class="col-md-12">
      <p align="center" class="font-size-24">
        </p><h4 align="center"><b>विषय: सिफारिस सम्बन्धमा।</b></h4>
        <!-- <input type="hidden" name="letter_subject" value="सिफारिस सम्बन्धमा"> -->
      <p></p>
    </div>
  </div>
  <div class="row">


    <div class="col-md-12">

      <p>
        उपरोक्त सम्बन्धमा <b><input type="text" class="dashed-input-field" placeholder="   *" name="local_state" value="{{$local_state[0]->local_state_name}}" required="required"></b> वडा नं. <b><input type="text" class="dashed-input-small-field" placeholder="   *" name="ward" value="{{$data->ward}}" required="required"></b> बस्ने <b>
          <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="person_name" value="{{$data->person_name}}"></b> ले मेरो नाउँमा मालपोत कार्यालय, <b><input type="text" class="dashed-input-field" placeholder="   *" required="required" value="{{$data->malpot_name}}" name="malpot_name"></b> मा  दर्ता भएको साविक


        <!--  -->

                  <input type="text" class="dashed-input-field star" placeholder="   *" name="sabik_address" id="sabik_address" value="{{$data->sabik_address}}" required="required">
                <!--  -->




        <b><select name="sabik_type">
<option value="गा.वि.स." {{$data->sabik_type == 'गा.वि.स.' ? 'selected' : ''}}>गा.वि.स.</option>
<option value="नगरपालिका" {{$data->sabik_type == 'नगरपालिका' ? 'selected' : ''}}>नगरपालिका</option>
<option value="उप महानगरपालिका" {{$data->sabik_type == 'उप महानगरपालिक' ? 'selected' : ''}}>उप महानगरपालिका</option>
<option value="महानगरपालिका" {{$data->sabik_type == 'महानगरपालिका' ? 'selected' : ''}}> महानगरपालिका</option>
</select>
</b> वडा नं. <b><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="sabik_ward" value="{{$data->sabik_ward}}"></b> हाल  <b><input type="text" class="dashed-input-field" placeholder="   *" name="local_states" value="{{$data->local_states}}" required="required"></b> वडा नं. <b>
  <input type="text" class="dashed-input-small-field" placeholder="   *" name="wards" value="{{$data->wards}}" required="required"></b> को कि.नं.<b><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="kitta_no" value="{{$data->kitta_no}}"></b> क्षे.फ.
  <b><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="area" value="{{$data->area}}"></b> जग्गामा मैले घर निर्माण गरी सकेको र मेरो माथि उल्लेखित कित्ता जग्गाको ज.ध.प्र.पुर्जामा हालसम्म घर नजनिएकोले घर जनाउनको लागि तहाँ कार्यालयको नाउँमा सिफारिस पाऊँ भनी यस कार्यालयमा निवेदन पेश गरेकोले सो सम्बन्धमा बुझ्दा जानेबुझेसम्म व्यहोरा मनासिब भएको बुझिएकोले तहाँ कार्यालयको नियमानुसार निवेदकको माथि उल्लेखित कित्ता जग्गाको ज.ध.प्र.पु.मा घर जनाई दिनुहुन यो
   सिफारिस गरिन्छ।

      </p>

    </div>








  </div>
     <div class="text-right btm-last">
    <p><input type="text" class="dashed-input-field star" placeholder="   *" name="hakim_ko_name" id="" required="required" value="{{$data->hakim_ko_name}}"></p>


    <p> <b> <select name="officer">
<option value="वडा अध्यक्ष" {{$data->officer == 'वडा अध्यक' ? 'selected' : ''}}>वडा अध्यक्ष</option>
<option value="का. बा वडा अध्यक्ष" {{$data->officer == 'का. बा वडा अध्यक्ष' ? 'selected' : ''}}>का. बा वडा अध्यक्ष</option>
<option value="वडा सचिब" {{$data->officer == 'वडा सचिब' ? 'selected' : ''}}>वडा सचिब</option>
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
  <!-- END -->

<div class="col-md-12">
  <hr>
<input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
  <center><input type="submit" class="btn btn-success" name="save_ghar_janaune_sifaris_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
</div>
</div>
</form>
</div>
</div>
</div>

@stop
