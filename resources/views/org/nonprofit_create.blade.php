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
          <h3 class="title-x"> गैर नाफामुलुक संस्था दर्ता</h3>
         
          <div class="clearfix"></div>
        </div>
<div class="x_content">
   @include('master.master_header_ne2')

          <form action="{{url('nonprofit')}}" method="post">
          	 {{ csrf_field() }}

            <div class="row top-part">
              <div class="col-md-6">
                <p align="left"> <b> पत्र संख्या :<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankhya" value="२०७५/०७६" id="patra_sankhya" required="required"></b></p>
            
              <p align="left"><b>चलानी नं. :<input type="text" class="dashed-input-field" name="chalani_no" id="chalani_no"></b></p>


            </div>
            <div class="col-md-6">
              <p align="right"><b>मिति :<input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" name="issued_date" id="issued_date" required="required" onfocus="showNdpCalendarBox('issued_date')"></b></p>
            </div>
          </div>
          <div class="row">
          <div class="col-md-12">
            <p align="center" class="font-size-24">
              </p><h4 align="center"><b>विषय: गैर नाफामूलक संस्था दर्ता प्रमाण पत्र।</b></h4>
              <input type="hidden" name="letter_subject" value="गैर नाफामूलक संस्था दर्ता प्रमाण पत्र">
            <p></p>
          </div>
        </div>

         




          <div class="row">
            <div class="col-md-6">
             <p align="left">दर्ता नं. :<input type="text" class="dashed-input-field" placeholder="   *" name="registration_no" id="registration_no" required="required"></p>

             <p align="left">दर्ता मिति :<input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" name="registration_date" id="registration_date" required="required" onfocus="showNdpCalendarBox('registration_date')"></p>
           </div>
           <div class="col-md-6">
           	<div class="img-box"><p>संस्थाको छाप वा फोटो </p></div>
           </div>
         </div>

         <div class="margin-top"></div>


         <div class="row">
          <div class="col-md-6 letter-margin">
            <p align="left"><span class="no"> १) </span>संस्थाको नाम :<input type="text" class="dashed-input-field" placeholder="   *" required="required" name="organization_name"> </p>
            <p align="left">ठेगाना :<input type="text" class="dashed-input-field" placeholder="   *" required="required" name="organization_address"> </p>
            
            
            <p align="left">विषयगत  क्षेत्र  :<input type="text" class="dashed-input-field" placeholder="   *" required="required" name="subjective_area"> </p>
            <p align="left">संस्थाको कारोवार शुरु भएको मिति :<input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" required="required" name="transaction_start_date" id="transaction_start_date" onfocus="showNdpCalendarBox('transaction_start_date')"> </p>
            <p align="left">ई-मेल :<span class="eng"><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="organization_email"></span> </p>
            <p align="left">सम्पर्क फोन नं. :<input type="text" class="dashed-input-field" placeholder="   *" required="required" name="organization_contact"> </p>







            <p align="left"><span class="no"> २)</span>सञ्चालक/अध्यक्ष/मुख्य व्यक्तिको नाम, थर :<input type="text" class="dashed-input-field" placeholder="   *" required="required" name="chairman_name"> </p>
            <p align="left">ठेगाना :<input type="text" class="dashed-input-field" placeholder="   *" required="required" name="chairman_address"> </p>
            <p align="left">ई-मेल :<span class="eng"><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="chairman_email"> </span></p>
            <p align="left">सम्पर्क फोन नं. :<input type="text" class="dashed-input-field" placeholder="   *" required="required" name="chairman_contact_no"> </p>






          </div>
          <div class="col-md-6">
           
          </div>
        </div>
                  <div class="text-right btm-last">
            <p><input type="text" class="dashed-input-field star" placeholder="   *" name="hakim_ko_name" id="" required="required"></p>

         
             <p>  <select name="officer">
<option value="वडा अध्यक्ष">वडा अध्यक्ष</option>
<option value="का. बा वडा अध्यक्ष">का. बा वडा अध्यक्ष</option>
<option value="वडा सचिब">वडा सचिब</option>
</select>
 </p>
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
            </div>
            <div class="form-group">
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
          <hr> <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">

          <center><input type="submit" class="btn btn-success" name="save_non_prof_org_registration" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
       </div>
     </form>
   </div>
 </div>
</div>
</div>

@stop