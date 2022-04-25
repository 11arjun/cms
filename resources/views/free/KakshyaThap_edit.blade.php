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
          <h3 class="title-x"> सिफारिस सम्बन्धमा</h3>

          <div class="clearfix"></div>
        </div>
<div class="x_content">
   @include('master.master_header_ne2')
<form action="{{url('kakshyathap', [$data->id])}}" method="post">
  {{method_field('PATCH')}}
  {{ csrf_field() }}


  <div class="row top-part">
    <div class="col-md-6">
     <p align="left"><b> पत्र संख्या :<input type="text" class="dashed-input-field" placeholder="   *" name="patra_shankhya" value = "{{$data->patra_shankhya}}" id="patra_shankhya" required="required"> </b></p>

     <p align="left"><b> चलानी नं. :<input type="text" class="dashed-input-field" name="chalani_no" id="chalani_no" value="{{$data->chalani_no}}"></b></p>


   </div>
   <div class="col-md-6">
    <p align="right"><b>मिति :<input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" name="issued_date" value="{{$data->issued_date}}" id="issued_date" required="required" onfocus="showNdpCalendarBox('issued_date')"></b></p>
  </div>
</div>


<div class="row">
  <div class="col-md-12">
    <p align="center" class="font-size-24">
      </p><h4 align="center"><b>विषय: सिफारिस सम्बन्धमा।</b></h4>
      <!-- <input type="hidden" name="letter_subject" value=" सिफारिस सम्बन्धमा"> -->

    <p></p>
  </div>
</div>

<div class="row title-left">
  <div class="col-md-12">
    <p align="left">श्री जिल्ला शिक्षा कार्यालय</p>
    <p align="left">  <input type="text" class="dashed-input-field" placeholder="   *" name="officer_name" value = "{{$data->officer_name}}" id="officer_name" required="required">|</p>

  </div>
</div>




<div class="row">
  <div class="col-md-12 content-para">

    <p>उपरोक्त सम्बन्धमा<input type="text" class="dashed-input-field" placeholder="   *" name="related_name" value = "{{$data->related_name}}" required="required">


<select name="option">
  <option value="गा.वि.स." {{$data->option == 'गा.वि.स.' ? 'selected' : ''}}>गा.वि.स.</option>
 <option value="नगरपालिका" {{$data->option == 'नगरपालिका' ? 'selected' : ''}}>नगरपालिका</option>
 <option value="उप महानगरपालिक" {{$data->option == 'उप महानगरपालिक' ? 'selected' : ''}}>उप महानगरपालिक</option>
 <option value="महानगरपालिका" {{$data->option == 'महानगरपालिका' ? 'selected' : ''}}>महानगरपालिका</option>
</select>

वडा नं.{{Helpers::convertNos(auth()->user()->isAdmin)}}  अन्तर्गत रहेको <input type="text" class="dashed-input-small-field" placeholder="   *" name="school_name" value="{{$data->school_name}}" required="required">को कक्षा थापाको स्वीकृतको लागि
सिफारिस गरी पाउ भनी यस वडा
कार्यालयमा पर्न आएको निवेदन सम्बन्धमा त्यहाँको नियमानुसार कक्षा थप स्वीकृतिको लागि सिफारिस
गरी पठाइएको व्यहोरा अनुरोध गरिन्छ
</div>


  <!--views for nibedak detail -->
  <div class="clearfix"></div>
  <hr>
  <section class="bibaran">
    <fieldset>

      <legend>निवेदकको विवरण</legend>


      <div class="form-group">
        <label>निवेदकको नाम</label>
        <input type="text" name="nibedak_name" value="{{$data->nibedak_name}}"class="form-control" required>
      </div>
      <div class="form-group">
        <label>निवेदकको ठेगाना</label><input type="text" name="nibedak_address" value="{{$data->nibedak_address}}" class="form-control" required>
      </div><div class="form-group">
        <label>निवेदकको नागरिकता नं.</label>
        <input type="text" name="nibedak_citizenship_no" value="{{$data->nibedak_citizenship_no}}" class="form-control" required>
      </div>
      <div class="form-group">
        <label>निवेदक (NID) </label>
        <input type="text" name="nibedak_nid" value="{{$data->nibedak_nid}}" class="form-control" required>
      </div>

    </fieldset>
  </section>
  <!-- END -->





<div class="col-md-12">
  <hr>

<input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
   <center><input type="submit" class="btn btn-success" name="save_kakshya_thap_sifaris" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
</div>
</div>
</form></div>






</div>
</div>
</div>
</div>
@stop
