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
               <h2 class="title-x"> मृत्यु दर्ताको प्रमाणपत्र </h2>
               <div class="clearfix"></div>
            </div>
           <form action="{{url('deathcertificate')}}" method="post">
             {{ csrf_field() }}

               <div class="x_content">
                  <header>
                     <div class="row head-name">
                        <div class="col-md-3">
                          <p><img src="{{ asset('images/logo.png') }}"> </p>
                        </div>
                        <div class="col-md-9">
                        </div>
                        <div class="col-md-12 title_header">
                           <p align="center">अनुसूची-१२ 
                              <br>(नियम ७ संग सम्बन्धित)<br>
                              <u>मृत्यु दर्ताको प्रमाणपत्रको ढाँचा</u> <br>
                  नेपाल सरकार <br>
                  गृह मन्त्रालय<br>
                  राष्ट्रिय प्रमाणपत्र तथा पञ्जीकरण विभाग<br>
                  {{-- सङ्घीय मामिला तथा स्थानीय विकास मन्त्रालय <br>
                  केन्द्रीय पञ्जीकरण विभाग <br> --}}
                  <b>स्थानीय पञ्जीकाधिकारीको कार्यालय </b><br>
                              @if(auth()->user()->isAdmin != 0)
                              वडा नं.<b>    
                                 {{Helpers::convertNos(auth()->user()->isAdmin)}} , 
                                 @endif
                                 {{$local_state[0]->local_state_name}} </b><br>
                              <b>{{$district[0]->district_name}}</b> जिल्ला, <b>{{$provience[0]->province_name}}{{-- , नेपाल --}}</b>
                           </p>
                        </div>
                     </div>
                  </header>
                  <div class="row top-part">
                     <div class="col-md-12">
                        <p align="center" class="font-size-24"><b>मृत्यु दर्ताको प्रमाणपत्र</b></p>
                     </div>
                  </div>
                  <div class="row title-left">
                     <div class="col-md-6">
                        <p align="left">
                           दर्ता नम्बर : <input type="text" placeholder=" *" required="required" name="registration_no_nep" class="dashed-input-field"><br>
                           पारिवारिक लागत फाराम नं. : <input type="text" placeholder=" *" required="required" name="family_form_no_nep" class="dashed-input-field">
                        </p>
                     </div>
                     <div class="col-md-6">
                        <p align="right">
                           दर्ता मिति :<input type="text" placeholder=" *" required="required" name="registration_date_nep" id="registration_date_nep" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('registration_date_nep')">
                        </p>
                     </div>
                  </div>
                  <div class="row content-para">
                     <div class="col-md-12">
                        <p align="left">
                           यस कार्यालयमा खडा गरिएको मृत्यु दर्ता किताब अनुसार प्रमाणित गरिन्छ कि सूचक 
                           <select name="applicant_title_nep">
                              <option value="श्री">श्री</option>
                              <option value="श्रीमती">श्रीमती</option>
                           </select>
                           <input type="text" placeholder=" *" required="required" name="applicant_name_nep" class="dashed-input-field"> ले भरेको अनुसूची-३ को सुचना फाराम बमोजिम श्री <input type="text" placeholder=" *" required="required" name="grand_father_name_nep" class="dashed-input-field"> को 
                           <select name="grand_children_option_nep">
                              <option value="नाति">नाति</option>
                              <option value="नातिनी">नातिनी</option>
                           </select>
                           श्री <input type="text" placeholder=" *" required="required" name="father_name_nep" class="dashed-input-field"> को 
                           <select name="children_option_nep">
                              <option value="छोरा">छोरा</option>
                              <option value="छोरी">छोरी</option>
                           </select>
                           श्री <input type="text" placeholder=" *" required="required" name="children_name_nep" class="dashed-input-field"> को 
                           <select name="spouse_option_nep">
                              <option value="पति">पति</option>
                              <option value="पत्नि">पत्नि</option>
                           </select>
                           <input type="text" placeholder=" *" required="required" name="province_name_nep" class="dashed-input-field"> प्रदेश <input type="text" placeholder=" *" required="required" name="district_name_nep" class="dashed-input-field">जिल्ला <input type="text" placeholder=" *" required="required" name="local_state_name_nep" class="dashed-input-field">वडा नं. <input type="text" placeholder=" *" required="required" name="ward_no_nep" class="dashed-input-small-field">मा बस्ने वर्ष <input type="text" placeholder=" *" required="required" name="age_nep" class="dashed-input-small-field">को 
                           <select name="person_title_nep">
                              <option value="श्री">श्री</option>
                              <option value="श्रीमती">श्रीमती</option>
                           </select>
                           <input type="text" placeholder=" *" required="required" name="person_name_nep" class="dashed-input-field"> मिति वि.स. <input type="text" placeholder=" *" required="required" name="death_date_bs_nep" id="death_date_bs_nep" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('death_date_bs_nep')">(<input type="text" placeholder=" *" required="required" name="death_date_ad_nep" class="dashed-input-field" id="death_date_ad_nep">ई.स.) गते <input type="text" placeholder=" *" required="required" name="death_place_local_state_nep" class="dashed-input-field"> वडा नं. <input type="text" placeholder=" *" required="required" name="death_place_ward_nep" class="dashed-input-field"> मा मृत्यु भएको हो।
                        </p>
                        <p></p>
                     </div>
                  </div>
                  <div class="row para-btm">
                     <div class="col-md-8">
                        <p align="left">
                           नागरिकता लिएको भए मृतकको <br>
                           नागरिकता प्रमाणपत्र नं. <input type="text" placeholder=" *" required="required" name="citizenship_no_nep" class="dashed-input-field"><br>
                           जारी मिति र जिल्ला <input type="text" placeholder=" *" required="required" name="issued_date_nep" id="issued_date_nep" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('issued_date_nep')">,  <input type="text" placeholder=" *" required="required" name="issued_district_nep" class="dashed-input-field">
                        </p>
                     </div>
                     <div class="col-md-4">
                        <p align="left"> स्थानीय पञ्जीकाधिकारीको <br>
                           सही : <br>
                           नाम थर : <input type="text" placeholder=" *" required="required" name="local_registar_name_nep" class="dashed-input-field"><br>
                           मिति : <input type="text" placeholder=" *" required="required" name="signed_date_nep" id="signed_date_nep" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('signed_date_nep')">
                        </p>
                     </div>
                  </div>
      <div class="row">
  <div class="col-md-12">
    <div class="checkbox-inline">
      
      <input type="checkbox" class="checkbox english-form2" name="english_form" >
      <label for="english form">Fill the form in English</label>
    </div>
  </div>
</div>

                  <div class="eng paanji showEnglishForm2" style="display: none;">
                     <div class="row para-two">
                        <header>
                           <div class="row head-name">
                              <div class="col-md-3">
                                <p><img src="{{ asset('images/logo.png') }}"> </p>
                              </div>
                              <div class="col-md-9">
                              </div>
                              <div class="col-md-12  title_header">
                                 <p align="center">Schedule-12 <br>(Related with Rule 7)<br>
                        Government of Nepal<br>
                        Ministry of Home Affairs<br>
                        Department of National ID and Civil Registration<br>
                        {{-- Ministry of Federal Affairs and Local Development<br>
                        Department of Civil Registration<br> --}}
                        <b>Office of Local Registrar</b><br>
                                @if(auth()->user()->isAdmin != 0)
                                    Ward No.<b> 


                                    {{auth()->user()->isAdmin}} 

, </b>
@endif
<b>{{$local_state[0]->local_state_name_english}} </b><br>
                                    <b>{{$district[0]->district_name_english}} </b> District, <b>{{$provience[0]->province_name_english}}{{-- , Nepal --}}</b>
                                 </p>
                              </div>
                           </div>
                        </header>
                     </div>
                    
                     <div class="row top-part">
                        <div class="col-md-12">
                           <p align="center" class="font-size-24"><b>Death Registration Certificate</b></p>
                        </div>
                     </div>
                     <div class="row title-left">
                        <div class="col-md-6">
                           <p align="left">
                              Registration No : <input type="text" placeholder=" *"  name="registration_no" class="dashed-input-field"><br>
                              Family Record Form No : <input type="text" placeholder=" *"  name="family_form_no" class="dashed-input-field">
                           </p>
                        </div>
                        <div class="col-md-6">
                           <p align="right">
                              Date of Registration :<input type="text" placeholder=" *"  name="registration_date" id="registration_date" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('registration_date')">
                           </p>
                        </div>
                     </div>
                     <div class="row content-para">
                        <div class="col-md-12">
                           <p align="left">
                              This is to certify,as per the death register maintained at this office and the information provided by 
                              <select name="applicant_title">
                                 <option value="Mr">Mr</option>
                                 <option value="Mrs">Mrs</option>
                              </select>
                              <input type="text" placeholder=" *"  name="applicant_name" class="dashed-input-field"> in the information form of schedule 3, that  
                              <select name="death_person_title">
                                 <option value="Mr">Mr</option>
                                 <option value="Miss">Miss</option>
                                 <option value="Mrs">Mrs</option>
                              </select>
                              <input type="text" placeholder=" *"  name="death_person_name" class="dashed-input-field">aged<input type="text" placeholder=" *"  name="death_person_age" class="dashed-input-field"> 
                              <select name="children_option">
                                 <option value="son">son</option>
                                 <option value="daughter">daughter</option>
                              </select>
                              of 
                              <select name="father_title_option">
                                 <option value="Mr">Mr</option>
                                 <option value="Mrs">Mrs</option>
                              </select>
                              <input type="text" placeholder=" *"  name="father_name" class="dashed-input-field">
                              <select name="spouse_option">
                                 <option value="Husband">Husband</option>
                                 <option value="Wife">Wife</option>
                              </select>
                              of 
                              <select name="husband_wife_title">
                                 <option value="Mr">Mr</option>
                                 <option value="Mrs">Mrs</option>
                              </select>
                              <input type="text" placeholder=" *"  name="spouse_name" class="dashed-input-field"> a resident of Ward No.<input type="text" placeholder=" *"  name="ward_no" class="dashed-input-field">,<input type="text" placeholder=" *"  name="local_state" class="dashed-input-field"> Rural/Municipality <input type="text" placeholder=" *"  name="district" class="dashed-input-field">District <input type="text" placeholder=" *"  name="province" class="dashed-input-field">Province died on BS <input type="text" placeholder=" *"  name="death_date_bs" id="death_date_bs" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('death_date_bs')">(<input type="text" placeholder=" *"  name="death_date_ad" id="death_date_ad" class="dashed-input-field"> AD)
                           </p>
                        </div>
                     </div>
                     <div class="row para-btm">
                        <div class="col-md-7">
                           <p align="left">
                              if Citizenship Certificate is issued to the deceased:<br>
                              His/Her Citizenship Certificate No.<input type="text" placeholder=" *"  name="citizenship_no" class="dashed-input-field"><br>
                              Date and District of Issuance<input type="text" placeholder=" *"  name="issued_date" id="issued_date" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('issued_date')">,<input type="text" placeholder=" *"  name="issued_district" id="issued_district" class="dashed-input-field">
                           </p>
                        </div>
                        <div class="col-md-5">
                           <p align="left">Local Registar's<br>
                              Singnature: <br>
                              Name and Surname: <input type="text" placeholder=" *"  name="local_registar_name" class="dashed-input-field"><br>
                              Date : <input type="text" placeholder=" *"  name="signed_date" id="signed_date" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('signed_date')">
                           </p>
                        </div>
                     </div>
                  </div>
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
                           <label>निवेदकको ठेगाना</label><input type="text" required name="nibedak_address" class="form-control">
                        </div>
                        <div class="form-group">
                           <label>निवेदकको नागरिकता नं.</label>
                           <input type="text" name="nibedak_citizenship_no" required class="form-control">
                        </div>
                        <div class="form-group">
                           <label>निवेदक (NID) </label>
                           <input type="text" name="nibedak_nid" class="form-control" required>
                        </div>
                     </fieldset>
                  </section>
                  <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
                  <!-- END -->
                  <hr>
                  <center><input type="submit" class="btn btn-success" name="save_death_registration_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>


@stop