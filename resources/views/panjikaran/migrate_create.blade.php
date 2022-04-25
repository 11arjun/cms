@extends('layouts.app')
@push('styles')
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
<style type="text/css">
   textarea{
          background: url(../images/paper.png)
   }
</style>
@endpush
@section('content')
<div class="right_col nep" role="main" style="min-height: 1056px;">
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <div class="x_title">
               <h2 class="title-x">बसाइँसराई दर्ताको प्रमाणपत्र </h2>


            </div>
              <form action="{{url('migration')}}" method="post">
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
                              <u>बसाइँसराई दर्ताको प्रमाणपत्रको ढाँचा</u> <br>
                  नेपाल सरकार <br>
                  गृह मन्त्रालय<br>
                  राष्ट्रिय प्रमाणपत्र तथा पञ्जीकरण विभाग<br>
                  {{-- सङ्घीय मामिला तथा स्थानीय विकास मन्त्रालय <br>
                  केन्द्रीय पञ्जीकरण विभाग <br> --}}
                  <b>स्थानीय पञ्जीकाधिकारीको कार्यालय </b><br>
                              @if(auth()->user()->isAdmin != 0)
                              वडा नं.<b>
                              {{Helpers::convertNos(auth()->user()->isAdmin)}}
                              , </b>
                              @endif
                               <b>{{$local_state[0]->local_state_name}} </b><br>
                              <b>{{$district[0]->district_name}}</b> जिल्ला, <b>{{$provience[0]->province_name}}{{-- , नेपाल --}}</b></p>
                           </p>
                        </div>
                     </div>
                  </header>
                  <div class="row top-part">
                     <div class="col-md-12">
                        <p align="center" class="font-size-24">बसाइँसराई दर्ताको प्रमाणपत्र</p>
                     </div>
                  </div>
                  <div class="row title-left">
                     <div class="col-md-6">
                        <p align="left">
                           दर्ता नं. : <input type="text" placeholder=" *" required="required" name="registration_no" class="dashed-input-field"><br>
                           पारिवारिक लागत नं. : <input type="text" placeholder=" *" required="required" name="family_form_no" class="dashed-input-field">
                        </p>
                     </div>
                     <div class="col-md-6">
                        <p align="right">
                           मिति :<input type="text" placeholder=" *" required="required" name="registration_date" id="registration_date" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('registration_date')">
                        </p>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12 content-para">
                        <p align="left">
                           यस कार्यालयमा खडा गरिएको बसाइँसराईदर्ता किताब अनुसार प्रमाणित गरिन्छ कि सूचक श्री <input type="text" placeholder=" *" required="required" name="applicant_name" class="dashed-input-field"> ले भरेको अनुसूची-६ को बसाइँ सराईको सुचना फाराम बमोजिम <b>{{$provience[0]->province_name}}</b> <b>{{$district[0]->district_name}}</b> जिल्ला <b>{{$local_state[0]->local_state_name}}</b> वडा नं. <b>
                           {{Helpers::convertNos(auth()->user()->isAdmin)}}  </b>  मा बस्ने श्री <input type="text" placeholder=" *" required="required" name="house_owner_name" class="dashed-input-field">निम्नलिखित परिवार सहित मिति <input type="text" placeholder=" *" required="required" name="migrate_date" id="migrate_date" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('migrate_date')">मा<input type="text" placeholder=" *" required="required" name="migrate_province_name" class="dashed-input-field">प्रदेश<input type="text" placeholder=" *" required="required" name="issued_district" class="dashed-input-field">जिल्ला<input type="text" placeholder=" *" required="required" name="migrate_local_state" class="dashed-input-field">वडा नं. <input type="text" placeholder=" *" required="required" name="migrate_ward" class="dashed-input-field">मा बसाइँ सरी
                           <select name="migrate_type">
                              <option value="आएको">आएको</option>
                              <option value="गएको">गएको</option>
                           </select>
                           हो।
                        </p>
                     </div>
                     <div class="col-md-12">
                        <div class="table-responsive">
                           <table class="table table-bordered" id="family_member_table">
                              <thead>
                                 <tr>

                                    <th>नाम थर</th>
                                    <th>जन्म मिति</th>
                                    <th>सूचक संगको नाता</th>
                                    <th>घटना दर्ता भए नभएको खुलाउने </th>
                                    <th>कैफियत </th>

                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>

                                    <td>

                                       <textarea rows="5"  name="family_member_name" class="form-control"></textarea>
                                    </td>
                                    <td>
                                       <textarea rows="5" name="date_of_birth" class="form-control"></textarea>
                                    </td>
                                    <td>

                                       <textarea rows="5" name="relation" class="form-control"></textarea>
                                    </td>
                                    <td>
                                     <textarea rows="5" name="event_registration" class="form-control"></textarea>
                                    </td>
                                    <td>


                                       <textarea rows="5" name="remakrs" class="form-control"></textarea>
                                    </td>

                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-8">
                        <p align="left">
                           नागरिकता लिएको भए <br>
                           नागरिकता प्रमाणपत्र नं. <input type="text" placeholder=" *" required="required" name="citizenship_no" class="dashed-input-field"><br>
                           जारी मिति र जिल्ला <input type="text" placeholder=" *" required="required" name="issued_date" id="issued_date" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('issued_date')">,<input type="text" placeholder=" *" required="required" name="issued_districts" class="dashed-input-field">
                        </p>
                     </div>
                     <div class="col-md-4">
                        <p align="left"> स्थानीय पञ्जीकाधिकारीको <br>
                           सही : <br>
                           नाम थर : <input type="text" placeholder=" *" required="required" name="local_registar_name" class="dashed-input-field"><br>
                           मिति : <input type="text" placeholder=" *" required="required" name="signed_date" id="signed_date" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('signed_date')">
                        </p>
                     </div>
                  </div>

                  <div class="row">
  <div class="col-md-12">
    <div class="checkbox-inline">
      
      <input type="checkbox" class="checkbox english-form4" name="english_form" >
      <label for="english form">Fill the form in English</label>
    </div>
  </div>
</div>
                  
                  <div class="eng paanji showEnglishForm4" style="display: none;">
                     <div class="row para-two">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-2">
                        </div>
                     </div>
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
                                 Ward No.<b>{{auth()->user()->isAdmin}} ,</b>
                                 @endif
                                 <b>{{$local_state[0]->local_state_name_english}} </b><br>
                                    <b>{{$district[0]->district_name_english}} </b> District, <b>{{$provience[0]->province_name_english}}{{-- , Nepal --}}</b>
                                 </p>
                           </div>
                        </div>
                     </header>
                     <div class="row top-part">
                        <div class="col-md-12">
                           <p align="center" class="font-size-24">Migration Registration Certificate</p>
                        </div>
                     </div>
                     <div class="row title-left">
                        <div class="col-md-6">
                           <p align="left">
                              Registration No : <input type="text" placeholder=" *"  name="reg_no" class="dashed-input-field"><br>
                              Family Record Form No. : <input type="text" placeholder=" *"  name="form_no" class="dashed-input-field">
                           </p>
                        </div>
                        <div class="col-md-6">
                           <p align="right">
                              Date of Registration :<input type="text" placeholder=" *"  name="reg_date" id="reg_date" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('reg_date')">
                           </p>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12 content-para">
                           <p align="left">
                              This is to certify, as per the migration register maintained at this office and the information provided by
                              <select name="applicant_title">
                                 <option value="Mr">Mr</option>
                                 <option value="Mrs">Mrs</option>
                              </select>
                              <input type="text" placeholder=" *"  name="applicant_name_eng" class="dashed-input-field"> in the information from of schedule 6, the information
                              <select name="applicant_title2">
                                 <option value="Mr">Mr</option>
                                 <option value="Mrs">Mrs</option>
                              </select>
                              <input type="text" placeholder=" *"  name="house_owner_name_eng" class="dashed-input-field"> a resident of Ward No. <b>{{auth()->user()->isAdmin}} </b> <b>{{$local_state[0]->local_state_name_english}}</b>,  <b> {{$district[0]->district_name_english}}</b>  <b>{{$provience[0]->province_name_english}}</b>, with the following members of the family, in migrated out migrated to Ward No.<input type="text" placeholder=" *"  name="mig_ward_eng" class="dashed-input-field">,<input type="text" placeholder=" *"  name="mig_local_state_eng" class="dashed-input-field">Rural Municipality/Municipality <input type="text" placeholder=" *"  name="mig_district_eng" class="dashed-input-field">District<input type="text" placeholder=" *"  name="mig_provience_name_eng" class="dashed-input-field">Province.
                           </p>
                        </div>
                        <div class="col-md-12">
                           <div class="table-responsive">
                              <table class="table table-bordered" id="migration-family-member-table-eng">
                                 <thead>
                                    <tr>

                                       <th>Name and Surname</th>
                                       <th>Date of Birth</th>
                                       <th>Relationship with the informant</th>
                                       <th>Vital Events Registration Mentioned or Not</th>
                                       <th>Remarks</th>

                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>

                                       <td>
                                          <textarea rows="5" name="family_member_name_eng" class="form-control"></textarea>
                                       </td>
                                       <td>


                                          <textarea rows="5" name="date_of_birth_eng" class="form-control"></textarea>
                                       </td>
                                       <td>


                                           <textarea rows="5" name="relation_eng" class="form-control"></textarea>
                                       </td>
                                       <td>


                                          <textarea rows="5" name="event_reg_eng" class="form-control"></textarea>
                                       </td>
                                       <td>

                                          <textarea rows="5" name="remarks_eng" class="form-control"></textarea>
                                       </td>

                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-8">
                           <p align="left">
                              If Citizenship certificate is issued : <br>
                              Citizenship Certificate No. <input type="text" placeholder=" *"  name="citizen_no_eng" class="dashed-input-field"><br>
                              Date and Distirct Of issuance<input type="text" placeholder=" *"  name="issued_date_eng" id="issued_date_eng" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('issued_date_eng')">,<input type="text" placeholder=" *"  name="issued_district_eng" class="dashed-input-field">
                           </p>
                        </div>
                        <div class="col-md-4">
                           <p align="left">Local Registrar's<br>
                              Signature: <br>
                              Name and surname <input type="text" placeholder=" *"  name="local_registar_name_eng" class="dashed-input-field"><br>
                           </p>
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
                     <hr>
                     <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
                     <center><input type="submit" class="btn btn-success" name="save_migration_sifaris" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@stop
