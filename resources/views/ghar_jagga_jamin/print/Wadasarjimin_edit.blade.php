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
          <h3 class="title-x"> वडा सर्जमिन सिफारिस </h3>
         
          <div class="clearfix"></div>
        </div>
<div class="x_content">
   @include('master.master_header_ne2')
      <form action="{{url('WadaSarjiminController', [$data->id])}}" method="POST" >
           {{method_field('PATCH')}}
          {{ csrf_field() }}

        <div class="row top-part">
          <div class="col-md-6">
            <p align="left"><b>पत्र संख्या :<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankhya" id="patra_sankhya" value="{{$data->patra_sankhya}}" required="required"> </b></p>
            <p align="left"><b>चलानी नं. :<input type="text" class="dashed-input-field" name="chalani_no" id="chalani_no" value="{{$data->chalani_no}}"></b></p>


          </div>
          <div class="col-md-6">
            <p align="right"><b>मिति :<input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" name="issued_date" id="issued_date" required="required" onfocus="showNdpCalendarBox('issued_date')" value="{{$data->issued_date}}"></b></p>
          </div>
        </div>

        <div class="row">

          <div class="col-md-12">
            <p align="center" class="font-size-24">
              </p><h4 align="center"><b>विषय: सर्जमिन गरी पठाइएको सम्बन्धमा।</b></h4>
              <input type="hidden" name="letter_subject" value="सर्जमिन गरी पठाइएको सम्बन्धमा">
            <p></p>
          </div>
        </div>
        <div class="row title-left">
          <div class="col-md-12">
            <p align="left"><b>श्री <input type="text" class="dashed-input-field" placeholder="   *" name="karyalaya_name" value="{{$data->karyalaya_name}}" required="required"></b>,</p>
            <p align="left"><b> <input type="text" class="dashed-input-field" placeholder="   *" name="karyalaya_district" value="{{$data->karyalaya_district}}" required="required"></b>।</p>
            
          </div>
        </div>
        <div class="row">

          <div class="col-md-12">


            <p>उपरोक्त सम्बन्धमा तहाँ कार्यालयको च.नं.

              <input type="text" class="dashed-input-field" placeholder="   *" name="patra_chalani_no" value="{{$data->patra_chalani_no}}" required="required"> 
              मिति
              <input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" name="chalani_date" id="chalani_date" required="required" onfocus="showNdpCalendarBox('chalani_date')" value="{{$data->chalani_date}}">

              को पत्र प्राप्त भई व्यहोरा अवगत भयो।उक्त पत्रमा उल्लेख भई आएको व्यहोरा सम्बन्धमा स्थलगत सर्जमिन गरी सर्जमिन मुचुल्का पाना 

              <input type="text" class="dashed-input-field" placeholder="   *" name="pana_no" value="{{$data->pana_no}}" required="required"> 
            यसै पत्रसाथ संलग्न गरी पठाएको छ।व्यहोरा सोही मुचुल्काबाट अवगत गर्नुहुन अनुरोध गरिन्छ।</p>

          </div>
        </div>
                  <div class="text-right btm-last">
            <p><input type="text" class="dashed-input-field star" placeholder="   *" name="hakim_ko_name" id="" required="required" value="{{$data->hakim_ko_name}}"></p>


            <p> <b><select name="officer">
<option value="वडा अध्यक्ष"  {{ $data->officer == 'वडा अध्यक्ष' ? 'selected' : ''}}>वडा अध्यक्ष</option>
<option value="का. बा वडा अध्यक्ष" {{ $data->officer == 'का. बा वडा अध्यक्ष' ? 'selected' : ''}}>का. बा वडा अध्यक्ष</option>
<option value="वडा सचिब" {{ $data->officer == 'वडा सचिब' ? 'selected' : ''}}>वडा सचिब</option>
</select>
 </b></p>
          </div>
          

      

        <!--views for nibedak detail -->
        <div class="clearfix"></div>
       <section class="bibaran">
<fieldset>

<legend>निवेदकको विवरण</legend>


<div class="form-group">
<label>निवेदकको नाम</label>
<input type="text" name="nibedak_name" class="form-control" value="{{$data->nibedak_name}}">
</div>
<div class="form-group">
<label>निवेदकको ठेगाना</label><input type="text" name="nibedak_address" class="form-control" value="{{$data->nibedak_address}}">
</div><div class="form-group">
<label>निवेदकको नागरिकता नं.</label>
<input type="text" name="nibedak_citizenship_no" class="form-control" value="{{$data->nibedak_citizenship_no}}">
</div>
<div class="form-group">
<label>निवेदक (NID) </label>
<input type="text" name="nibedak_nid" class="form-control" value="{{$data->nibedak_nid}}">
</div>

</fieldset>
</section>
      
      <div class="col-md-12">
        <hr>
<input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
        <center><input type="submit" class="btn btn-success" name="save_sarjimin_sifaris_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
      </div>
    </form>
  </div>
</div>
</div>
</div>

</div>

@stop