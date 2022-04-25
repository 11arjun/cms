@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="right_col nep" role="main" style="min-height: 1158px;">
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">

        <div class="x_title">
          <h3 class="title-x">नयाँ कारोबार पान नं</h3>
         
          <div class="clearfix"></div>
        </div>
<div class="x_content">
    @include('master.master_header_ne2')
      <form action="{{url('Panno')}}" method="post">
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
                </p><h4 align="center"><b>विषय: सिफारिस गरिएको बारे।</b></h4>
                <input type="hidden" name="letter_subject" value="सिफारिस गरिएको बारे">
              <p></p>
            </div>
          </div>

          <div class="row title-left">
          <div class="col-md-12">
            <p align="left">श्री <input type="text" class="dashed-input-field" placeholder="   *" name="pan_office_name" id="pan_office_name" required="required" value="करदाता सेवा कार्यालय"> ,</p>
            <p align="left">  <input type="text" class="dashed-input-field" placeholder="   *" name="pan_office_address" id="pan_office_address" required="required">।</p>

          </div>
        </div>




          <div class="row content-para">
            <div class="col-md-12">
              <p align="left">उपरोक्त सम्बन्धमा  <b><input type="text" class="dashed-input-field" placeholder="   *" name="local_state" value="{{$local_state[0]->local_state_name}}" required="required"></b> वडा नं.  <b><input type="text" class="dashed-input-small-field" placeholder="   *" name="ward" value="१" required="required"></b> (साविक 

               <!--  -->
                                  <input type="text" class="dashed-input-field star" placeholder="   *" name="sabik_address" id="sabik_address" required="required">
                                <!--  -->



                 <b><select name="sabik_type">
<option value="गा.वि.स.">गा.वि.स.</option>
<option value="नगरपालिका">नगरपालिका</option>
<option value="उप महानगरपालिका">उप महानगरपालिका</option>
<option value="महानगरपालिका"> महानगरपालिका</option>
</select>
</b>, वडा नं. <input type="text" class="dashed-input-small-field star" placeholder="   *" name="sabik_ward" id="sabik_ward" required="required">)
 मा बस्ने  
                <b><select name="person_title">
<option value="श्री">श्री</option>
<option value="सुश्री">सुश्री</option>
<option value="श्रीमती">श्रीमती</option>
</select>
</b>

                <input type="text" class="dashed-input-field" placeholder="   *" required="required" id="person_name" name="person_name">ले मिति <input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" required="required" id="business_close_date" name="pan_no_date" onfocus="showNdpCalendarBox('business_close_date')"> देखि <input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" required="required" id="pasal_address" name="pasal_address" onfocus="showNdpCalendarBox('pasal_address')">  मा <input type="text" class="dashed-input-field" placeholder="   *" required="required" id="pasal_name" name="pasal_name"> नामको व्यवसाय संचालन गर्दै आएको हुँदा निजलाई नियम बमोजिम पान न. उपलब्ध गरी दिनुहुन सिफारिस गरिएको व्यहोरा अनुरोध छ।</p>
              </div>
            </div>
             <h2>बोधार्थ&nbsp;  </h2>
              

              <table class="table table-bordered" id="sabik_address_table">
                <tbody>


                   <tr>
                    <td><textarea class="form-control" name="bodartha"></textarea></td>
                    
                  </tr>
                </tbody>
              </table>
         
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
 <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
                <center><input type="submit" class="btn btn-success" name="save_panno_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
             </div>
             </form>
           </div>
         </div>
       </div>
     </div>
 
</div>

@stop