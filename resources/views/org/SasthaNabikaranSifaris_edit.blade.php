@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endpush
@section('content')

<div class="right_col nep" role="main" style="min-height: 1024px;">
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">

        <div class="x_title">
          <h3 class="title-x">संस्था नबिकरण सिफारिस</h3>
         
          <div class="clearfix"></div>
        </div>
<div class="x_content">
   @include('master.master_header_ne2')
 <form action="{{url('renew')}}" method="post">
          	 {{ csrf_field() }}

          

           <div class="row top-part">
            <div class="col-md-6">
              <p align="left"><b>पत्र संख्या :<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankya" id="patra_sankya" value="{{$data->patra_sankya}}" required="required"></b></p>
              <p align="left"><b>चलानी नं. :<input type="text" class="dashed-input-field" name="chalani_no" id="chalani_no" value="{{$data->chalani_no}}"></b></p>


            </div>
            <div class="col-md-6">
              <p align="right"><b>मिति :<input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" name="issued_date" id="issued_date" required="required" onfocus="showNdpCalendarBox('issued_date')" value="{{$data->issued_date}}"></b></p>
            </div>
          </div>
          <div class="row title-left">
          <div class="col-md-12">
            <p>श्री  <input type="text" class="dashed-input-field" placeholder="   *" name="office_chairman" id="office_chairman" required="required" value="{{$data->office_chairman}}">,</p>
            <p><input type="text" class="dashed-input-field" placeholder="   *" name="office_name" id="office_name" required="required" value="{{$data->office_name}}">।</p>
          </div>
        </div>

          <div class="row">
          <div class="col-md-12">
            <p align="center" class="font-size-24">
              </p><h4 align="center"><b>विषय: सिफारिस सम्बन्धमा।</b> </h4>
              <input type="hidden" name="letter_subject" value="सिफारिस सम्बन्धमा">
            <p></p>
          </div>
        </div>
        <div class="row">

          <div class="col-md-12 content-para">

            <p>उपरोक्त विषयमा <b><input type="text" class="dashed-input-field" placeholder="   *" name="local_state" value="{{$data->local_state}}" required="required"></b> वडा नं.  <b><input type="text" class="dashed-input-small-field" placeholder="   *" name="ward" value="{{$data->ward}}" required="required"></b> (साविक 

             
              <!--  -->

                              <input type="text" class="dashed-input-field star" placeholder="   *" name="sabik_address" id="sabik_address" required="required" value="{{$data->sabik_address}}">
              
              <!--  -->


               <b><select name="sabik_type">
<option value="गा.वि.स." {{ $data->sabik_type == 'गा.वि.स.' ? 'selected' : ''}}>गा.वि.स.</option>
<option value="नगरपालिका" {{ $data->sabik_type == 'नगरपालिका' ? 'selected' : ''}}>नगरपालिका</option>
<option value="उप महानगरपालिका" {{ $data->sabik_type == 'उप महानगरपालिका' ? 'selected' : ''}}>उप महानगरपालिका</option>
<option value="महानगरपालिका" {{ $data->sabik_type == 'महानगरपालिका' ? 'selected' : ''}}> महानगरपालिका</option>
</select>
</b>, वडा नं. <input type="text" class="dashed-input-small-field star" placeholder="   *" name="sabik_ward" id="sabik_ward" required="required" value="{{$data->sabik_ward}}">)
 स्थित रहेको <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="organization_name" value="{{$data->organization_name}}"> नामक संस्था नवीकरण गर्नु पर्ने भएकोले सोको लागि"सिफारिस गरी पाऊँ" भनी यस वडा कार्यालयमा पर्न आएको सो संस्थाको चलानी नं. <input type="text" class="dashed-input-field" placeholder="   *" name="sastha_chalanino" id="sastha_chalanino" required="required" value="{{$data->sastha_chalanino}}"> को निवेदन सम्बन्धमा त्यस कार्यालयको नियमानुसार गरी दिनुहुन सिफारिस गरिन्छ।</p>
          </div>

                    <div class="text-right btm-last">
           <p><input type="text" class="dashed-input-field star" placeholder="   *" name="hakim_ko_name" id="" required="required" value="{{$data->hakim_ko_name}}"></p>

         
             <p>  <select name="officer">
<option value="वडा अध्यक्ष" {{ $data->officer == 'वडा अध्यक्ष' ? 'selected' : ''}}>वडा अध्यक्ष</option>
<option value="का. बा वडा अध्यक्ष"{{ $data->officer == 'का. बा वडा अध्यक्ष' ? 'selected' : ''}}>का. बा वडा अध्यक्ष</option>
<option value="वडा सचिब"{{ $data->officer == 'वडा सचिब' ? 'selected' : ''}}>वडा सचिब</option>
</select>
</b> </p>
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
            <center><input type="submit" class="btn btn-success" name="save_sastha_nabikaran_sifaris_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
        </div>
      </div>
    </form></div>
  
</div>
</div>
</div>
</div>
@stop