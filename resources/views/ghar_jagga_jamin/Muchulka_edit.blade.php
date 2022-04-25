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
          <h3 class="title-x"> सर्जमिन  मुचुल्का</h3>
         
          <div class="clearfix"></div>
        </div>
<div class="x_content">
   

                <form action="{{url('MuchulkaController', [$data->id])}}" method="POST" >
           {{method_field('PATCH')}}
          {{ csrf_field() }}
          @include('master.master_header_ne2')
  <div class="row top-part">
    <div class="col-md-6">
      {{-- <p align="left"><b>पत्र संख्या :<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankhya" id="patra_sankhya" value="{{$data->patra_sankhya}}" required="required"> </b></p>
      <p align="left"><b>चलानी नं. :<input type="text" class="dashed-input-field" name="chalani_no" id="chalani_no" value="{{$data->chalani_no}}"></b></p> --}}


    </div>
    <div class="col-md-6">
      <p align="right"><b>मिति :<input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" name="issued_date" id="issued_date" required="required" onfocus="showNdpCalendarBox('issued_date')" value="{{$data->issued_date}}"></b></p>
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
      <p align="left">श्री <input type="text" class="dashed-input-field" placeholder="   *" name="office_name" id="office_name" required="required" value="{{$data->office_name}}"> ,</p>
      <p> नगर कार्यपालिकाको कार्यालय</p>
      <p align="left">  <input type="text" class="dashed-input-field" placeholder="   *" name="office_address" id="office_address" required="required" value="{{$data->office_address}}">|</p>

    </div>
  </div> 
  <br>

  <div class="row">


    <div class="col-md-12">

      <p> उपरोक्त सम्बन्धमा साविक 
        <!--       <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="sabik_address" />  -->

        <!--  -->
                  <input type="text" class="dashed-input-field star" placeholder="   *" name="sabik_address" id="sabik_address" required="required" value="{{$data->sabik_address}}">
        

        <!--  -->




        <b> <select name="sabik_type">
<option value="गा.वि.स." {{ $data->sabik_type == 'गा.वि.स.' ? 'selected' : ''}}>गा.वि.स.</option>
<option value="नगरपालिका" {{ $data->sabik_type == 'नगरपालिका' ? 'selected' : ''}}>नगरपालिका</option>
<option value="उप महानगरपालिका" {{ $data->sabik_type == 'उप महानगरपालिका' ? 'selected' : ''}}>उप महानगरपालिका</option>
<option value="महानगरपालिका" {{ $data->sabik_type == 'महानगरपालिका' ? 'selected' : ''}}> महानगरपालिका</option>
</select>
</b> वडा नं. <b><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="sabik_ward" value="{{$data->sabik_ward}}""></b> हाल  <b><input type="text" class="dashed-input-field" placeholder="   *" name="local_states" value="{{$data->local_states}}" required="required"></b> वडा नं. <b><input type="text" class="dashed-input-small-field" placeholder="   *" name="wards" value="{{$data->wards}}" required="required"></b> बस्ने <b> <input type="text" class="dashed-input-field" placeholder="   *" name="landowner_name" required="required" value="{{$data->landowner_name}}"></b> को नाममा मालपोत कार्यालय <input type="text" class="dashed-input-field" placeholder="   *" name="malpot_address" required="required" value="{{$data->malpot_address}}"> मा दर्ता कायम रहेको साविक

        <!-- <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="landsabik_address" /> -->

        <!--  -->
                  <input type="text" class="dashed-input-field star" placeholder="   *" name="landsabik_address" id="landsabik_address" required="required" value="{{$data->landsabik_address}}">
                <!--  -->




        <b> <select name="landsabik_type">
<option value="गा.वि.स." {{ $data->landsabik_type == 'गा.वि.स.' ? 'selected' : ''}}>गा.वि.स.</option>
<option value="नगरपालिका" {{ $data->landsabik_type == 'नगरपालिका' ? 'selected' : ''}}>नगरपालिका</option>
<option value="उप महानगरपालिका" {{ $data->landsabik_type == 'उप महानगरपालिका' ? 'selected' : ''}} >उप महानगरपालिका</option>
<option value="महानगरपालिका" {{ $data->landsabik_type == 'महानगरपालिका' ? 'selected' : ''}}>महानगरपालिका</option>
</select>
</b> वडा नं. <b><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="landsabik_ward" value="{{$data->landsabik_ward}}"></b> 


        हाल  <b><input type="text" class="dashed-input-field" placeholder="   *" name="landlocal_states" value="{{$data->landlocal_states}}" required="required"></b> वडा नं. <b><input type="text" class="dashed-input-small-field" placeholder="   *" name="landwards" value="{{$data->landwards}}" required="required"></b> 



        को कित्ता नं. <b><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="kitta_no" value="{{$data->kitta_no}}"> </b> क्षेत्रफल क्रमश  <b><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="area" value="{{$data->area}}"> </b> को जग्गामा साविक 

        <!--  -->
                  <input type="text" class="dashed-input-field star" placeholder="   *" name="appsabik_address" id="appsabik_address" required="required" value="{{$data->appsabik_address}}">
        
        <!--  -->






        <b><select name="appsabik_type">
<option value="गा.वि.स." {{ $data->appsabik_type == 'गा.वि.स.' ? 'selected' : ''}}>गा.वि.स.</option>
<option value="नगरपालिका" {{ $data->appsabik_type == 'नगरपालिका' ? 'selected' : ''}}>नगरपालिका</option>
<option value="उप महानगरपालिका" {{ $data->appsabik_type == 'उप महानगरपालिका' ? 'selected' : ''}}>उप महानगरपालिका</option>
<option value="महानगरपालिका" {{ $data->appsabik_type == 'महानगरपालिका' ? 'selected' : ''}}> महानगरपालिका</option>
</select>
</b> वडा नं. <b><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="appsabik_ward" value="{{$data->appsabik_ward}}"></b> हाल  <b><input type="text" class="dashed-input-field" placeholder="   *" name="applocal_states" value="{{$data->applocal_states}}" required="required"></b> वडा नं. <b><input type="text" class="dashed-input-small-field" placeholder="   *" name="appward" value="{{$data->appward}}" required="required"></b> बस्ने <b><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="applicant_name" value="{{$data->applicant_name}}"> </b> ले आवासीय घर निर्माण गर्ने हुनु भएको हुँदा सो सम्बन्धमा भएको सर्जमिन मुचुल्का यसै पत्र साथ संलग्न गरी पठाएको व्यहोरा जानकारी गराइन्छ।
      </p>

    </div>




    <!-- बनाउनरनियमित -->



  </div>
     <div class="text-right btm-last">
    <p><input type="text" class="dashed-input-field star" placeholder="   *" name="hakim_ko_name" id="" required="required" value="{{$data->hakim_ko_name}}"></p>


    <p> <b> <select name="officer">
<option value="वडा अध्यक्ष"  {{ $data->officer == 'वडा अध्यक्ष' ? 'selected' : ''}}>वडा अध्यक्ष</option>
<option value="का. बा वडा अध्यक्ष" {{ $data->officer == 'का. बा वडा अध्यक्ष' ? 'selected' : ''}}>का. बा वडा अध्यक्ष</option>
<option value="वडा सचिब" {{ $data->officer == 'वडा सचिब' ? 'selected' : ''}}>वडा सचिब</option>
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






</div>

<div class="col-md-12">
  <hr>
<input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
  <center><input type="submit" class="btn btn-success" name="save_muchulka_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
</div>
</form>
</div>

</div>
</div>
</div>
@stop