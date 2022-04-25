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
          <h3 class="title-x">खुलाई पठाएको</h3>
         
          <div class="clearfix"></div>
        </div>
<div class="x_content">
   @include('master.master_header_ne2')
 

  <form action="{{url('KhulaiPathayekoSifaris')}}" method="post">
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
              </p><h4 align="center"><b>विषय: खुलाई पठाएको।</b> </h4>
              <input type="hidden" name="letter_subject" value="खुलाई पठाएको">
            <p></p>
          </div>
        </div>
  <div class="row title-left">
          <div class="col-md-12">
           <p>श्री<input type="text" class="dashed-input-field" placeholder="   *" required="required" name="office_chairman">कार्यालय,</p>
           <p> <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="office_address">।</p>

         </div>
       </div>





<div class="row">
         <div class="col-md-12 content-para">

          <p>
            तहाँ सम्मानित अदालतको मिति <input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" required="required" name="letter_date" id="letter_date" onfocus="showNdpCalendarBox('letter_date')">च.न.<input type="text" class="dashed-input-field" placeholder="   *" required="required" name="letter_chalani_no">को पत्रानुसार यस वडा कार्यालयबाट प्राविधिक मूल्याङ्कन गरी यसै पत्रसाथ कार्यरत प्राविधिकको सक्कल प्रतिवेदन संग्लन राखी पठाइएको व्यहोरा अनुरोध छ।
          </p> 
        </div>
        <div class="col-md-12">


        </div>
        <div class="col-md-12">
                    <div class="text-right btm-last">
            <p><input type="text" class="dashed-input-field star" placeholder="   *" name="hakim_ko_name" id="" required="required"></p>

         
             <p> <b> <select name="officer">
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

        </div>

</div>

        <div class="col-md-12">
          <hr>
            <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
          <center><input type="submit" class="btn btn-success" name="save_khulai_pathayeko_sifaris_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
</div>
</form></div>

</div>
</div>
</div>
</div>




@stop