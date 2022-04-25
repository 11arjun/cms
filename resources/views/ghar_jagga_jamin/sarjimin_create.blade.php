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
          <h3 class="title-x"> सर्जमिन सिफारिस</h3>
         
          <div class="clearfix"></div>
        </div>
<div class="x_content">
  
<form action="{{url('SarjiminController')}}" method="post">
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
        </p><h4 align="center"><b>विषय:सूचना टाँस गरी सर्जमिन गरी पठाई दिने।</b></h4>
        <!-- Data for nibedak details -->
        <input type="hidden" name="letter_subject" value="सूचना टाँस गरी सर्जमिन गरी पठाई दिने">
        <!--END -->

      <p></p>
    </div>
  </div>

  <div class="row">
    <div class="row title-left">
      <div class="col-md-12">
        <p> <b>श्री वडा कार्यालय  </b> </p>
        <input type="hidden" name="karyalaya_name" value="वडा कार्यालय">
        <p><b> वडा नं. <input type="text" class="dashed-input-small-field" placeholder="   *" name="oda_ward" id="oda_ward" required="required"> </b><br> <b>{{$local_state[0]->local_state_name}}।</b></p>

      </div>
    </div>


    <div class="col-md-12">

      <p> 
        उपरोक्त विषयमा  <b>   <input type="text" class="dashed-input-field" placeholder="   *" name="district" value="{{$district[0]->district_name}}" required="required"> </b> जिल्ला <b>    <input type="text" class="dashed-input-field" placeholder="   *" name="local_state" value="{{$local_state[0]->local_state_name}}" required="required"> </b> वडा नं. <b><input type="text" class="dashed-input-small-field" placeholder="   *" name="ward" value="{{Helpers::convertNos(auth()->user()->isAdmin)}}" required="required"> </b>  बस्ने <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="person_name"> (साविक 

        <!-- <input type="text" class="dashed-input-field star" placeholder="   *" name="sabik_address" id="sabik_address"  required="required"> -->

        <!--  -->
                  <input type="text" class="dashed-input-field star" placeholder="   *" name="sabik_address" id="sabik_address" required="required">
        
        <!--  -->


        <b> <select name="sabik_type">
<option value="गा.वि.स.">गा.वि.स.</option>
<option value="नगरपालिका">नगरपालिका</option>
<option value="उप महानगरपालिका">उप महानगरपालिका</option>
<option value="महानगरपालिका"> महानगरपालिका</option>
</select>
</b>, वडा नं. <input type="text" class="dashed-input-small-field star" placeholder="   *" name="sabik_ward" id="sabik_ward" required="required">) हाल <b>{{$local_state[0]->local_state_name}} </b> वडा नं. <b> <?php if(auth()->user()->isAdmin == 1){
    echo "१";
  }else if(auth()->user()->isAdmin == 2){
    echo "२";
  }else if(auth()->user()->isAdmin == 3){
    echo "३";
  }else if(auth()->user()->isAdmin == 4){
    echo "४";
  }else if(auth()->user()->isAdmin == 5){
    echo "५";
  }else if(auth()->user()->isAdmin == 6){
    echo "६";
  }else if(auth()->user()->isAdmin == 7){
    echo "७";
  }else if(auth()->user()->isAdmin == 8){
    echo "८";
  }else if(auth()->user()->isAdmin == 9){
    echo "९";
  }else if(auth()->user()->isAdmin == 10){
    echo "१०";
  }else if(auth()->user()->isAdmin == 11){
    echo "११";
  }else if(auth()->user()->isAdmin == 12){
    echo "१२";
  }else{

  }?> </b> स्थित कि. नं. <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="kitta_no" value=""> क्षे. फ. <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="area" value=""> जग्गामा निर्माण हुने नयाँ घरको नक्सा पास प्रयोजनको लागि तहाँ कार्यालय बाट सूचना टाँस सहित सर्जमिन मुचुल्का गरी पठाईदिनुहुन अनुरोध छ।
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
        <label>निवेदकको नागरिकतानं.</label>
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
    <center><input type="submit" class="btn btn-success" name="save_sarjimin_sifaris_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
  </div>
  </form>
</div>

</div>
</div>
</div>

@stop