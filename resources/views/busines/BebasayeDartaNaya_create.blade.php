@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endpush
@section('content')

<div class="right_col nep" role="main" style="min-height: 442px;">
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">

        <div class="x_title">
          <h3 class="title-x">व्यवसाय दर्ता गर्ने दरखास्त</h3>

          <div class="clearfix"></div>
        </div>
<div class="x_content">




        <form action="{{url('BebasayeDartaNaya')}}" method="post">
             {{ csrf_field() }}


            <div class="row top-part">
              <div class="col-md-6">
               <p align="left"><b>श्री <input type="text" class="dashed-input-field" placeholder="   *" name="p_name" id="p_name" value="वडा अध्यक्ष" required="required">ज्यू,</b><br>

                <b><input type="text" class="dashed-input-field" placeholder="  " name="p_office" id="p_office" value="{{$local_state[0]->local_state_name}}"></b><br>
                 @if(auth()->user()->isAdmin != 0)
                 <b>{{Helpers::convertNos(auth()->user()->isAdmin)}} नं वडा कार्यालय</b><br>
                 @endif
                  <b><input type="text" class="dashed-input-field" placeholder="  " name="p_address" id="p_address" value=""> ।</b>

               </p>
             </div>

           </div>

      <div class="row">
         <div class="col-md-12">
          <p align="center" class="font-size-24">
            </p><h4 align="center"><b>विषय:व्यवसाय दर्ता गर्ने बारे ।</b> </h4>
            <input type="hidden" name="letter_subject" value="व्यवसाय दर्ता गर्ने बारे">
          <p></p>
        </div>
      </div>
      <div class="row content-para">
<p>

महोदय,
</p>
<p>
तल लेखिए बमोजिमको व्यापार व्यवसाय गर्न निम्न लिखित नामको व्यवसाय मेरो नाममा दर्ता गराउन र्इच्छुक भएकोले दर्ताको लागि आवश्यक भएको कागजातहरु यसै निवेदनसाथ संलग्न गरी यो निवेदन पेश गरेकोछु । लेखिएको व्यहोरामा कुनै कुरा झुट्टा ठहरे कानुन बमोजिम सहुँला,बुझाउँला ।
</p>
<p>
१. व्यवसायको पुरा नाम (नेपालीमा):- <input type="text" class="dashed-input-field" placeholder="   *" name="bebasaye_name" id="bebasaye_name" required="required">
</p>
<p>
२. व्यवसायको पुरा नाम (अंग्रेजिको ठुलो अक्षरमा) :-<input type="text" class="dashed-input-field" placeholder="   *" name="bebasaye_name_english" id="bebasaye_name_english" required="required">
</p>
<p>
३. व्यवसायको पुरा ठेगाना :- <input type="text" class="dashed-input-field" placeholder="   *" name="bebasaye_district" id="bebasaye_district" required="required"> जिल्ला <input type="text" class="dashed-input-field" placeholder="   *" name="bebasaye_local_state" id="bebasaye_local_state" required="required"> वडा नं <input type="text" class="dashed-input-small-field" placeholder="   *" name="bebasaye_wardno" id="bebasaya_wardno" required="required"> टोल<input type="text" class="dashed-input-field" placeholder="   *" name="bebasaye_tole" id="bebasaya_tole" required="required">फोननं<input type="text" class="dashed-input-field" placeholder="   *" name="bebasaye_phone" id="bebasaye_phone" required="required">
</p>
<p>
४.व्यवसायमा लगाउने पूँजी रु <input type="text" class="dashed-input-field" placeholder="   *" name="bebasaye_amount" id="bebasaye_amount" required="required">(अक्षरेपीरु <input type="text" class="dashed-input-field" placeholder="   *" name="bebasaye_amount_english" id="bebasaye_amount_english" required="required">)
</p>
<p>
५. व्यवसायको उद्देश्य :-
<select name="b_type">
<option value="स्थानीय व्यापार">स्थानीय व्यापार</option>
<option value="सेवामुलक व्यवसाय">सेवामुलक व्यवसाय</option>
</select>


</p>
<p>
  ६. व्यवसायले कारोवार गर्ने मुख्य वस्तुको विवरण<input type="text" class="dashed-lg-input" placeholder="   *" name="bebasaye_item" id="bebasaye_item" required="required">
</p>
<p>
  ७. प्रोप्रार्इटरको पुरा नाम :-<input type="text" class="dashed-input-field" placeholder="   *" name="prop_name" id="prop_name" required="required">
</p>
  <p>
स्थायी ठेगाना(नागरिकता अनुसार :-(जिल्ला<input type="text" class="dashed-input-field" placeholder="   *" name="prop_jilla" id="prop_jilla" required="required"> <input type="text" class="dashed-input-field" placeholder="   *" name="prop_localstate" id="prop_localstate" required="required">वडानं<input type="text" class="dashed-input-small-field" placeholder="   *" name="prop_ward" id="prop_ward" required="required">टोलको नाम <input type="text" class="dashed-input-field" placeholder="   *" name="prop_tole" id="prop_tole" required="required"> फोन नं<input type="text" class="dashed-input-field" placeholder="   *" name="prop_phone" id="prop_phone" required="required"> नागरिकता नं<input type="text" class="dashed-input-small-field" placeholder="   *" name="prop_citi_no" id="prop_citi_no" required="required">जिल्ला<input type="text" class="dashed-input-field" placeholder="   *" name="prop_citi_jilla" id="prop_citi_jilla" required="required">ना.प्रजारी मिती <input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" name="citi_date" id="registration_date" required="required" onfocus="showNdpCalendarBox('registration_date')">हालको ठेगाना:-(जिल्ला<input type="text" class="dashed-input-field" placeholder="   *" name="prop_dis" id="prop_dis" required="required"><input type="text" class="dashed-input-field" placeholder="   *" name="prop_local_state" id="prop_local_state" required="required">वडा नं <input type="text" class="dashed-input-small-field" placeholder="   *" name="prop_wada" id="prop_wada" required="required">टोलको नाम<input type="text" class="dashed-input-field" placeholder="   *" name="prop_tole_name" id="prop_tole_name" required="required">

</p>
<p>
८.प्रोप्रार्इटरको तिन पुस्तेनाम,ठेगाना :-
</p>
<p>
(क) प्रोप्रार्इटरको बाजेको नाम, ठेगाना :-<input type="text" class="dashed-input-field" placeholder="   *" name="prop_grand" id="prop_grand" required="required">
</p>
<p>
(ख) प्रोप्रार्इटरको बाबुको नाम, ठेगाना :-<input type="text" class="dashed-input-field" placeholder="   *" name="prop_father" id="prop_father" required="required">
</p>
<p>
(ग) प्रोप्रार्इटर विवाहित महिला भएमा पतिको नाम,ठेगाना :-<input type="text" class="dashed-input-field" placeholder="   *" name="prop_husband" id="prop_husband" required="required">

</p>
      </div>
        <div class="row content-para">
          <div class="col-md-6">



          </div>
          <div class="col-md-6">

            <p><b>निवेदक</b></p>

            <div id="other_organization_resiter">

            <p align="left">प्रोप्रार्इटरको नाम  :<input type="text" class="dashed-input-field" placeholder="   *" name="owner_prop"> </p>
            <p align="left">सही :<input type="text" class="dashed-input-field" placeholder="  " id="" name=""> </p>
          </div>


          <table border="1" style=" border-color: transparent;">

                    <tbody style=" border:solid 1px #000;">
                    <tr>

                      <td align="center"><b>दायाँ</b></td>
                      <td align="center"><b>बायाँ</b></td>

                   </tr>


                      <tr>
                        <td height="120px" width="120px"> </td>
                        <td height="120px" width="120px"> </td>
                      </tr>
                     </tbody>
                  </table>

                </div>


        <p>
        </p><h4 align="center"><b><u>कबुलियतनामा</u></b> </h4>
        <p></p>
        <p>


लिखितम् <input type="text" class="dashed-input-field" placeholder="  " name="owner_grandfather"> को नाती<input type="text" class="dashed-input-field" placeholder="  " name="owner_grandchild"> को
<select name="owner_child">
<option value="छोरा">छोरा</option>
<option value="छोरी">छोरी</option>
</select>



<input type="text" class="dashed-input-field" placeholder="  " name="owner_add">बस्ने वर्ष<input type="text" class="dashed-input-small-field" placeholder="  " name="owner_age">को<input type="text" class="dashed-input-field" placeholder="  " name="owner_name">आगे<input type="text" class="dashed-input-field" placeholder="  " name="owner_business">कोनामले व्यवसाय दर्ता गर्न मैले त्यस वडा कार्यालयमा दरखास्त दिएकोमा उक्त व्यवसाय सम्बन्धमा प्रचलित ऐन कानुन र यस नगरपालिकाको शर्त तथा नियम समेत पालना गरी काम गर्नेछु। सो पालना गर्ने कुरामा कबुलियत समेत गर्न तपार्इको मंजुर छरछैन भनि वडा कार्यालयबाट सोधनी भएकोमा मेरो चित्त बुझ्यो।यसमा प्रचलित ऐन कानुन र यस नगरपालिकाको शर्त तथा नियम उल्लङघन गरेको देखीएमा ऐन कानुन बमोजिम सहुँला,बुझाँउला भनि मेरो मनोमानी राजी खुशी सँग यो कबुलियतनामाको कागज लेखी
<input type="text" class="dashed-input-field" placeholder="  " name="business_localaddress" id="business_localaddress" value="{{$local_state[0]->local_state_name}}"> वडा नं <input type="text" class="dashed-input-small-field" placeholder="  " name="business_ward" id="business_ward" value="१"> को कार्यालयमा चढाएँ।
</p>
<p align="center"> र्इतिसंवत <input type="text" class="dashed-input-small-field" placeholder="  " name="b_year" id="b_year"> साल <input type="text" class="dashed-input-small-field" placeholder="  " name="b_month" id="b_month"> महिना<input type="text" class="dashed-input-small-field" placeholder="  " name="b_day" id="b_day"> गतेरोज<input type="text" class="dashed-input-small-field" placeholder="  " name="b_roj" id="b_roj">शुभम् </p>

 <p>
        </p><h4 align="center"><b><u>(सनाखत सम्बन्धी कागजात)</u></b> </h4>
        <p></p>
        <p>
यसमा लेखिएको फारम तथा कबुलियतनामा म आफै स्वयं <input type="text" class="dashed-input-field" placeholder="  " name="san_localstate" id="san_localstate" value="{{$local_state[0]->local_state_name}}">को  <input type="text" class="dashed-input-small-field" placeholder="  " name="san_ward" id="san_ward" value="१"> नं वडा कार्यालयमा उपस्थित भर्इ दर्ता गराएको हुँ । निवेदन सँग संलग्न नागरिकता प्रमाणपत्रको प्रतिलिपी फोटो तथा अन्य कागजातहरु मेरा आफ्नै हुन् । माथी उल्लेखित सम्पुर्ण व्यहोरा समेत साँचो हो । कुनै कुरा फरक परेमा कानुन बमोजिम सहुँला बुझाँउला भनी सनाखत गर्ने ।
</p>
<div class="row content-para">
          <div class="col-md-6">
          <p>
          प्रोप्रार्इटरकोसही :-
        </p>

          </div>
          <div class="col-md-6">


          </div>
        </div>
        <div class="row content-para">
            <div id="other_organization_resiter">
              <div class="col-md-6">
            <p align="left">नाम :<input type="text" class="dashed-input-field" placeholder="  " name="san_name"> </p>
            </div>
          <div class="col-md-6">

            <p align="left">मिति :<input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="  " id="san_date" name="san_date" onfocus="showNdpCalendarBox('san_date')"> </p>
          </div>

        </div>
      </div>

          <p>
        </p><h4 align="center"><b><u>टिप्पणी</u></b> </h4>
        <p></p>
        <p align="center">(वडा कार्यालयले मात्र भर्ने) </p>
        <p>
श्रीमान्
</p>
<p>
<input type="text" class="dashed-lg-input" placeholder="  " name="tip_business" id="bebasaye_item"> नामक व्यवसाय <input type="text" class="dashed-lg-input" placeholder="  " name="tip_owner" id="bebasaye_item">को नाममा दर्ता गरी पाउन आवश्यक सबै कागजातहरु रितपुर्वक पेश हुन आएकोले माग बमोजिम दर्ता गरिदिन मनासिव रु<input type="text" class="dashed-input-field" placeholder="  " name="tip_amt" id="tip_amt">अक्षरेपी रु <input type="text" class="dashed-lg-input" placeholder="  " name="tip_amount" id="tip_amount"> राजश्व लिर्इ निजको नाममा व्यवसाय दर्ता गरी प्रमाणपत्र दिनको निमित्त निर्णयार्थ पेश गरेको छु । </p>




<div class="row content-para">
            <div id="other_organization_resiter">
              <div class="col-md-6">
            <p align="left"><input type="text" class="dashed-input-field" placeholder="  " name=""> </p>
            <p align="left">पेश गर्ने  </p>
            </div>
          <div class="col-md-6">

            <p align="left"><input type="text" class="dashed-input-field" placeholder="  " id="" name=""> </p>
            <p align="left">सदर गर्ने</p>
          </div>

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
            <center><input type="submit" class="btn btn-success" name="save_bebasaye_darta_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
         </div>

     </div></form>
   </div>
 </div>
</div>


  <!-- /footer content -->
</div>
</div>
@stop
