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
          <form action="{{url('deathcertificate', [$i->id])}}" method="POST" >
                {{method_field('PATCH')}}
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
                              वडा नं.<b>      {{Helpers::convertNos(auth()->user()->isAdmin)}} , 
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
                           दर्ता नम्बर : <input type="text" placeholder=" *" required="required" name="registration_no_nep" class="dashed-input-field" value="{{$i->registration_no_nep}}"><br>
                           पारिवारिक लागत फाराम नं. : <input type="text" placeholder=" *" required="required" name="family_form_no_nep" class="dashed-input-field" value="{{$i->family_form_no_nep}}">
                        </p>
                     </div>
                     <div class="col-md-6">
                        <p align="right">
                           दर्ता मिति :<input type="text" placeholder=" *" required="required" name="registration_date_nep" id="registration_date_nep" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('registration_date_nep')" value="{{$i->registration_date_nep}}">
                        </p>
                     </div>
                  </div>
                  <div class="row content-para">
                     <div class="col-md-12">
                        <p align="left">
                           यस कार्यालयमा खडा गरिएको मृत्यु दर्ता किताब अनुसार प्रमाणित गरिन्छ कि सूचक 
                           <select name="applicant_title_nep">
                              <option value="श्री" {{ $i->applicant_title_nep == 'श्री' ? 'selected' : ''}}>श्री</option>
                              <option value="श्रीमती" {{ $i->applicant_title_nep == 'श्रीमती' ? 'selected' : ''}}>श्रीमती</option>
                           </select>
                           <input type="text" placeholder=" *" required="required" name="applicant_name_nep" class="dashed-input-field" value="{{$i->applicant_name_nep}}"> ले भरेको अनुसूची-३ को सुचना फाराम बमोजिम श्री <input type="text" placeholder=" *" required="required" name="grand_father_name_nep" class="dashed-input-field" value="{{$i->grand_father_name_nep}}"> को 
                           <select name="grand_children_option_nep">
                              <option value="नाति" {{ $i->grand_children_option_nep == 'नाति' ? 'selected' : ''}}>नाति</option>
                              <option value="नातिनी" {{ $i->grand_children_option_nep == 'नातिनी' ? 'selected' : ''}}>नातिनी</option>
                           </select>
                           श्री <input type="text" placeholder=" *" required="required" name="father_name_nep" class="dashed-input-field" value="{{$i->father_name_nep}}"> को 
                           <select name="children_option_nep">
                              <option value="छोरा" {{ $i->children_option_nep == 'छोरा' ? 'selected' : ''}}>छोरा</option>
                              <option value="छोरी" {{ $i->children_option_nep == 'छोरी' ? 'selected' : ''}}>छोरी</option>
                           </select>
                           श्री <input type="text" placeholder=" *" required="required" name="children_name_nep" class="dashed-input-field" value="{{$i->children_name_nep}}"> को 
                           <select name="spouse_option_nep">
                              <option value="पति" {{ $i->spouse_option_nep == 'पति' ? 'selected' : ''}}>पति</option>
                              <option value="पत्नि" {{ $i->spouse_option_nep == 'पत्नि' ? 'selected' : ''}}>पत्नि</option>
                           </select>
                           <input type="text" placeholder=" *" required="required" name="province_name_nep" class="dashed-input-field" value="{{$i->province_name_nep}}"> प्रदेश <input type="text" placeholder=" *" required="required" name="district_name_nep" class="dashed-input-field" value="{{$i->district_name_nep}}">जिल्ला <input type="text" placeholder=" *" required="required" name="local_state_name_nep" class="dashed-input-field" value="{{$i->district_name_nep}}">वडा नं. <input type="text" placeholder=" *" required="required" name="ward_no_nep" class="dashed-input-small-field" value="{{$i->ward_no_nep}}">मा बस्ने वर्ष <input type="text" placeholder=" *" required="required" name="age_nep" class="dashed-input-small-field" value="{{$i->age_nep}}">को 
                           <select name="person_title_nep">
                              <option value="श्री"  {{ $i->person_title_nep == 'श्री' ? 'selected' : ''}}>श्री</option>
                              <option value="श्रीमती" {{ $i->person_title_nep == 'श्रीमती' ? 'selected' : ''}}>श्रीमती</option>
                           </select>
                           <input type="text" placeholder=" *" required="required" name="person_name_nep" class="dashed-input-field" value="{{$i->age_nep}}"> मिति वि.स. <input type="text" placeholder=" *" required="required" name="death_date_bs_nep" id="death_date_bs_nep" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('death_date_bs_nep')" value="{{$i->death_date_bs_nep}}">(<input type="text" placeholder=" *" required="required" name="death_date_ad_nep" class="dashed-input-field" id="death_date_ad_nep">ई.स.) गते <input type="text" placeholder=" *" required="required" name="death_place_local_state_nep" class="dashed-input-field" value="{{$i->death_place_local_state_nep}}"> वडा नं. <input type="text" placeholder=" *" required="required" name="death_place_ward_nep" class="dashed-input-field" value="{{$i->death_place_ward_nep}}"> मा मृत्यु भएको हो।
                        </p>
                        <p></p>
                     </div>
                  </div>
                  <div class="row para-btm">
                     <div class="col-md-8">
                        <p align="left">
                           नागरिकता लिएको भए मृतकको <br>
                           नागरिकता प्रमाणपत्र नं. <input type="text" placeholder=" *" required="required" name="citizenship_no_nep" class="dashed-input-field" value="{{$i->citizenship_no_nep}}"><br>
                           जारी मिति र जिल्ला <input type="text" placeholder=" *" required="required" name="issued_date_nep" id="issued_date_nep" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('issued_date_nep')" value="{{$i->issued_date_nep}}">,  <input type="text" placeholder=" *" required="required" name="issued_district_nep" class="dashed-input-field" value="{{$i->issued_district_nep}}">
                        </p>
                     </div>
                     <div class="col-md-4">
                        <p align="left"> स्थानीय पञ्जीकाधिकारीको <br>
                           सही : <br>
                           नाम थर : <input type="text" placeholder=" *" required="required" name="local_registar_name_nep" class="dashed-input-field" value="{{$i->local_registar_name_nep}}"><br>
                           मिति : <input type="text" placeholder=" *" required="required" name="signed_date_nep" id="signed_date_nep" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('signed_date_nep')" value="{{$i->igned_date_nep}}">
                        </p>
                     </div>
                  </div>
                  <div class="eng paanji showEnglishForm5" style="display: none;">
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
                                    @if(auth()->user()->isAdmin)
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
                              Registration No : <input type="text" id="reg_no" placeholder=" *" required="required" name="registration_no" class="dashed-input-field" value="{{$i->registration_no}}"><br>
                              Family Record Form No : <input type="text" placeholder=" *" required="required" name="family_form_no" class="dashed-input-field" value="{{$i->family_form_no}}">
                           </p>
                        </div>
                        <div class="col-md-6">
                           <p align="right">
                              Date of Registration :<input type="text" placeholder=" *" required="required" name="registration_date" id="registration_date" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('registration_date')" value="{{$i->registration_date}}">
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
                              <input type="text" placeholder=" *" required="required" name="applicant_name" class="dashed-input-field" value="{{$i->applicant_name}}"> in the information form of schedule 3, that  
                              <select name="death_person_title">
                                 <option value="Mr">Mr</option>
                                 <option value="Miss">Miss</option>
                                 <option value="Mrs">Mrs</option>
                              </select>
                              <input type="text" placeholder=" *" required="required" name="death_person_name" class="dashed-input-field" value="{{$i->death_person_name}}">aged<input type="text" placeholder=" *" required="required" name="death_person_age" class="dashed-input-field" value="{{$i->death_person_age}}"> 
                              <select name="children_option">
                                 <option value="son">son</option>
                                 <option value="daughter">daughter</option>
                              </select>
                              of 
                              <select name="father_title_option">
                                 <option value="Mr">Mr</option>
                                 <option value="Mrs">Mrs</option>
                              </select>
                              <input type="text" placeholder=" *" required="required" name="father_name" class="dashed-input-field" value="{{$i->father_name}}">
                              <select name="spouse_option">
                                 <option value="Husband">Husband</option>
                                 <option value="Wife">Wife</option>
                              </select>
                              of 
                              <select name="husband_wife_title">
                                 <option value="Mr">Mr</option>
                                 <option value="Mrs">Mrs</option>
                              </select>
                              <input type="text" placeholder=" *" required="required" name="spouse_name" class="dashed-input-field" value="{{$i->spouse_name}}"> a resident of Ward No.<input type="text" placeholder=" *" required="required" name="ward_no" class="dashed-input-field" value="{{$i->ward_no}}">,<input type="text" placeholder=" *" required="required" name="local_state" class="dashed-input-field" value="{{$i->local_state}}"> Rural/Municipality <input type="text" placeholder=" *" required="required" name="district" class="dashed-input-field" value="{{$i->district}}">District <input type="text" placeholder=" *" required="required" name="province" class="dashed-input-field" value="{{$i->province}}">Province died on BS <input type="text" placeholder=" *" required="required" name="death_date_bs" id="death_date_bs" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('death_date_bs')" value="{{$i->death_date_bs}}">(<input type="text" placeholder=" *" required="required" name="death_date_ad" id="death_date_ad" class="dashed-input-field"> AD)
                           </p>
                        </div>
                     </div>
                     <div class="row para-btm">
                        <div class="col-md-7">
                           <p align="left">
                              if Citizenship Certificate is issued to the deceased:<br>
                              His/Her Citizenship Certificate No.<input type="text" placeholder=" *" required="required" name="citizenship_no" class="dashed-input-field" value="{{$i->citizenship_no}}"><br>
                              Date and District of Issuance<input type="text" placeholder=" *" required="required" name="issued_date" id="issued_date" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('issued_date')" value="{{$i->issued_date}}">,<input type="text" placeholder=" *" required="required" name="issued_district" id="issued_district" class="dashed-input-field" value="{{$i->issued_district}}">
                           </p>
                        </div>
                        <div class="col-md-5">
                           <p align="left">Local Registar's<br>
                              Singnature: <br>
                              Name and Surname: <input type="text" placeholder=" *" required="required" name="local_registar_name" class="dashed-input-field" value="{{$i->local_registar_name}}"><br>
                              Date : <input type="text" placeholder=" *" required="required" name="signed_date" id="signed_date" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('signed_date')" value="{{$i->signed_date}}">
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
                           <input type="text" name="nibedak_name" class="form-control" value="{{$i->nibedak_name}}" required>
                        </div>
                        <div class="form-group">
                           <label>निवेदकको ठेगाना</label><input type="text" name="nibedak_address" class="form-control" value="{{$i->nibedak_address}}" required>
                        </div>
                        <div class="form-group">
                           <label>निवेदकको नागरिकता नं.</label>
                           <input type="text" name="nibedak_citizenship_no" class="form-control" value="{{$i->nibedak_citizenship_no}}" required>
                        </div>
                        <div class="form-group">
                           <label>निवेदक (NID) </label>
                           <input type="text" name="nibedak_nid" class="form-control" value="{{$i->nibedak_nid}}" required>
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