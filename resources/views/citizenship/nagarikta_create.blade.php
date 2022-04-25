@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endpush
@section('content')

<div class="right_col nep" role="main" style="min-height: 1056px;">
  <div class="clearfix"></div>
  <div class="row">


    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">

        <div class="x_title">
          

          <div class="clearfix"></div>
        </div>


        <form action="{{url('Nagarikta')}}" method="post">
             {{ csrf_field() }}

      <div class="x_content">
          <div class="row top-part">
                <div class="col-md-6">
                 



               </div>
               <div class="col-md-6">
                <p align="right"><b>मिति :<input type="text" class="dashed-input-field" placeholder="   *" name="issued_date" id="issued_date" required="required"></b></p>
              </div>
            </div>
          
            <div class="row title-left">
              <div class="col-md-12">
                <p>श्रीमान् 
                <input type="text" class="dashed-input-field" name="karyalaya" value="वडा अध्यक्ष&nbsp;"> ज्यू
                </p><p>{{$local_state[0]->local_state_name}}</p>
                <p><b>{{Helpers::convertNos(auth()->user()->isAdmin)}} वडा कार्यालय,{{$district[0]->district_name}}।
                </p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <p align="center" class="font-size-24">
                  </p><h4 align="center"><b>विषय:नागरिकता <select name="ng_option" onchange="myFunction()" id="mySelect">
<option value="प्रमाण-पत्र">प्रमाण-पत्र</option>
<option value="प्रतिलिपि">प्रतिलिपि</option>
</select>
पाउनको लागि सिफारिस गरि पाउँ।&nbsp;
 </b></h4>
  <input type="hidden" name="letter_subject1" value="नागरिकता">

<input type="hidden" name="letter_subject2" value="पाउनको लागि सिफारिस गरि पाउँ।">                <p></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <p>महोदय,</p>

              </div>

              <div class="col-md-12">
                <p>
                  उपरोक्त बिषयमा म निवेदक <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="district_name" value="{{$district[0]->district_name}}"> जिल्ला <input type="text" class="dashed-input-field" placeholder="   *" value="{{$local_state[0]->local_state_name}}" required="required" name="loc_name"> वडा नं. <input type="text" class="dashed-input-small-field" placeholder="   *" value="{{Helpers::convertNos(auth()->user()->isAdmin)}}" required="required" name="ward_no"> बस्ने <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="grand_name">को <select name="child_option">
<option value="नाति">नाति</option>
<option value="नातिनी">नातिनी</option>
<option value="बुहारी">बुहारी</option>
</select>
 <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="parent_name">को <select name="ch_option">
<option value="छोरा">छोरा</option>
<option value="छोरी">छोरी</option>
<option value="श्रीमती">श्रीमती</option>
</select>
जन्म मिति <input type="text" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('dob')" placeholder="   *" required="required" name="dob" id="dob"> भई&nbsp;वर्ष <input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="age">को <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="app_name">लाई&nbsp; नेपाली&nbsp;&nbsp;नागरिकताको <input type="text" class="dashed-input-field" placeholder="   " name="n_type" id="ntype" readonly="readonly" value="प्रमाण-पत्र"> पाउनको लागि देहायको प्रमाण कगजातहरु&nbsp;यसै साथ   संलग्न राखि पेश गरेको छु।  यसमा उल्लेखित विवरण ठिक साँचो हो। झुट्टा ठहरिएमा कानून बमोजिम&nbsp;सहुँला&nbsp;बुझाउँला&nbsp;भनि यो निवेदन पेश गरेको छु।&nbsp;
                </p>
              </div>
 <div class="col-md-6">

 
<script type="text/javascript">
  function myFunction() {
    var x = document.getElementById("mySelect").value;
    document.getElementById("ntype").value=x;
}
</script>

           </div>

              <div class="col-md-6">

             <p align="right" style="margin-right: 148px;"> निवेदक</p>
             <p align="right">नाम :-<input type="text" class="dashed-input-field" placeholder="   *" required="required" name="n_name"></p>
             
             <p align="right">ठेगाना&nbsp;:-<input type="text" class="dashed-input-field" placeholder="   *" required="required" name="n_address"></p>
             <p align="right">मिति&nbsp;:-<input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" required="required" name="n_date" id="n_date" onfocus="showNdpCalendarBox('n_date')"></p>



           </div>
       </div>
           <div class="col-md-12">

          <h2>तपशिल </h2>
              

              <table class="table table-bordered" id="sabik_address_table">
                <tbody>


                   <tr>
                    <td>
                      <textarea name="bodartha" class="form-control"></textarea>
                    </td>
                   
                  </tr>
                </tbody>
              </table>
            
  
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

            <hr>
<input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
            <center><input type="submit" class="btn btn-success" name="save_citizen_sifaris_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
          </div>
       
     </div></form>
   </div>
 </div>
</div>


</div>
@stop