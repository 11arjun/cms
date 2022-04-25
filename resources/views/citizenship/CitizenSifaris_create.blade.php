@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endpush
@section('content')

<div class="right_col nep" role="main" style="min-height: 447px;">
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">

        <div class="x_title">
          <h3 class="title-x"></h3>

          <div class="clearfix"></div>
        </div>
<div class="x_content">
  <header>
    <div class="row">
      <div class="col-md-3">
        <p><img src="{{asset('images/logo.png') }}"> </p>
      </div>
      <div class="col-md-9 head-edt" style="margin-top: -20px;">
        <form action="{{url('CitizenSifaris')}}" method="post">
        <p align="left"><b>{{-- पत्र संख्या --}} प. सं. :<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankya" value="२०७५/०७६" id="patra_sankya" required="required"> </b></p>

      <p align="left"><b>च. {{-- चलानी --}} नं. :<input type="text" class="dashed-input-field" name="chalani_no" id="chalani_no"></b></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-9 title_header" style="    margin-left: 100px;margin-top: -175px !important;">
        @if(auth()->user()->isAdmin == 0)
          <h2 class="font-size-24">  
            {{$local_state[0]->local_state_name}} 
          </h2>
            <h1 class="name_header">  
            गाउँ कार्यपालिकाको कार्यालय 
          </h1>
            <h3 align="center" class="sm-head">
              {{Helpers::wardNames(auth()->user()->isAdmin)}} ,
              {{$district[0]->district_name}}
            </h3>
        @else
          <h1 class="name_header">  {{$local_state[0]->local_state_name}} </h1>
          @if(auth()->user()->isAdmin != 0)  
          <h2 class="font-size-24">
                    
          {{Helpers::convertNos(auth()->user()->isAdmin)}} नं. वडा कार्यालय <p></p>
          </h2>
          @endif
          <h3 align="center" class="sm-head"> {{Helpers::wardNames(auth()->user()->isAdmin)}} ,{{$district[0]->district_name}}</h3>
          {{-- <h3 align="center" class="sm-head">{{$provience[0]->province_name}}, नेपाल</h3> --}}
        @endif
         
        
        
      </div>
      <div class="col-md-3 " style="margin-left: 786px;margin-top: -165px;">
        <div class="side-info">
          <span>फोन: ०८६-४२०१८० </span><br>
          <span>फ्याक्स:०८६-४२०१८० </span><br>
          <span>Email: ito.mallaranimun@gmail.com</span><br>
          <span>Website: www.mallaranimun.gov.np</span><br>
          <span>{{$provience[0]->province_name}}, नेपाल</span>
        </div>
      </div>
    </div>
    <div class="row" >
      <div class="col-md-12">
        <hr style="    background-color: red;
    height: 2px;
    padding: 0;
    margin: 0;">
      </div>
    </div>
  </header>

             {{ csrf_field() }}


          <div class="x_content">
            <div class="row top-part">
    <div class="col-md-6">
      {{-- <p align="left"><b>पत्र संख्या :<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankya" value="२०७५/०७६" id="patra_sankya" required="required"> </b></p>

      <p align="left"><b>चलानी नं. :<input type="text" class="dashed-input-field" name="chalani_no" id="chalani_no"></b></p> --}}


    </div>
    <div class="col-md-6">
      <p align="right"><b>मिति :<input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" name="issued_date" id="issued_date" required="required" onfocus="showNdpCalendarBox('issued_date')"></b></p>
    </div>
  </div>

            <div class="row title-left">
              <div class="col-md-12">

                <p>श्री जिल्ला प्रशासन कार्यालय</p>
                <p><b><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="dis_name"></b>।</p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <p align="center" class="font-size-24">
                  </p><h4 align="center"><b>विषय:सिफारिस गरिएको ।
 </b></h4>
  <input type="hidden" name="letter_subject" value="नेपाली नागरिकताको प्रमाण-पत्र प्रतिलिपि पाऊँ">
                <p></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <p>महोदय,</p>

              </div>

              <div class="col-md-12">
                <p>
                  यस नगरपालिका अन्तर्गत निम्न लिखित विवरण भएका श्री <input type="text" class="dashed-input-field" placeholder="   *" name="n_name" required="required"> ले स्थायी नेपाली नागरिकताको प्रमाण-पत्र बनाउनको लागि सिफारिस पाऊ भनि निबेदन दिएको हुँदा निम्न विवरणमा उल्लेखित ब्यक्तिलाई स्थायी नेपाली नागरिकताको प्रमाण-पत्र उपलब्ध गराई दिनुहुन सिफारिस साथ अनुरोध गर्दछु !


              </p></div>


            </div>


              <div class=" labell">

               <div class="row">
                  <div class="col-md-12">
                   जन्मस्थान  :-
                  <input type="text" class="dashed-input-field" placeholder="   *" name="birth_place" required="required"></div>
                   <div class="col-md-12">
                  बाबुको नाम थर, वतन :-
                  <input type="text" class="dashed-input-field" placeholder="   *" name="father_name" required="required"></div>
                  <div class="col-md-12">
                  आमाको  नाम थर, वतन :-
                  <input type="text" class="dashed-input-field" placeholder="   *" name="mother_name" required="required"></div>
                  <div class="col-md-12">
                  पति/पत्नीको नाम थर, वतन :-
                  <input type="text" class="dashed-input-field" placeholder="   *" name="patipatni_name" required="required"></div>
                  <div class="col-md-12">
                  स्थायी ठेगाना  :-
                  <input type="text" class="dashed-input-field" placeholder="   *" name="per_add" required="required"></div>
                  <div class="col-md-12">
                  सम्बन्धित व्यक्तिको नाम थर, वतन :-
                  <input type="text" class="dashed-input-field" placeholder="   *" name="person_name" required="required"></div>
                  <div class="col-md-12">
                  जन्म मिति :-
                  <input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" name="birth_date" id="birth_date" required="required" onfocus="showNdpCalendarBox('birth_date')"></div>
                  <div class="col-md-12">
                  जिल्ला प्रशासनबाट खटिएको नागरिकता टोलीमा नाम दर्ता  :-
                  <input type="text" class="dashed-input-field" placeholder="   *" name="toli_ko_name" required="required"></div>
                  <div class="col-md-12">
                  सिफारिस माग गर्ने व्यक्तिको सही  :-
                  <input type="text" class="dashed-input-field"></div>
                  <div class="col-md-12">
                  सिफारिस माग गर्नेको फोटो </div>
                  <div class="col-md-4"><div style="border: solid 1px #000;  width: 4cm;height:4cm;
padding:30px 0;"><p align="center">फोटो</p></div></div>




                </div>



              </div>


        <div class="x_title">
          <h2 class="title-x" style="text-align: center;"></h2>

          <div class="clearfix"></div>
        </div>
            <div class="row">
              <div class="col-md-12">
                <p align="center"><b> सनाखत</b> </p>
                <p> <select name="nibedak_options">
<option value="निवेदक">निवेदक</option>
<option value="निबेदिका">निबेदिका</option>
</select>
<input type="text" class="dashed-input-field" placeholder="   *" name="nibedan_name" required="required"> मेरो <input type="text" class="dashed-input-field" placeholder="   *" name="nibedan_relation" required="required">नाता हुन् ! निजले हालसम्म कही  कतैबाट नेपाली नागरिकताको प्रमाण-पत्रलीएको छैन ! ब्येहोरा झुट्ठा ठहरेमा कानुन बमोजिम सहुँला बुझाउला भनि सनाखत र सहिछाप गर्नेको : </p>
              </div>
            </div>
            <div class="col-md-12">
             <div class="col-md-6">
              <p align="left">
                  नाम  :-
                  <input type="text" class="dashed-input-field" placeholder="   *" name="sanakhat_name" required="required"><br>
                  ना.प्र नं. :-
                  <input type="text" class="dashed-input-field" placeholder="   *" name="sanakhat_relation" required="required"><br>

                  सही छाप :-
                  <input type="text" class="dashed-input-field"><br>
                  मिति   :-
                  <input type="text" class="dashed-input-field ndp-nepali-calendar" name="sanakhat_date" placeholder="   *" required="required" id="sanakhat_date" onfocus="showNdpCalendarBox('sanakhat_date')"></p></div>


                <div class="col-md-6">
                 <table border="1" cellpadding="5" style=" border-color: transparent" align="right">
                    <tbody><tr>
                      <th colspan="2" style="text-align: center">औंठा छाप</th>
                    </tr>
                    </tbody><tbody style=" border:solid 1px #000;">
                    <tr>

                      <th>दायाँ</th>
                      <th>बायाँ</th>

                   </tr>


                      <tr>
                        <td height="100px" width="100px"> </td>
                        <td height="100px" width="100px"> </td>
                      </tr>
                     </tbody>
                  </table>
                </div>

            <!-- Nibedak Block -->


</div>



           <div class="col-md-12">


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
</div>
@stop
