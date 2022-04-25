@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="right_col nep" role="main" style="min-height: 1058px;">
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">

        <div class="x_title">
          <h5 class="title-x"> जन्म  दर्ताको प्रमाणपत्र </h5>
          <input type="hidden" name="letter_subject" value="जन्म  दर्ताको प्रमाणपत्र">
          {{$local_state[0]->local_state_name}}
          <div class="clearfix"></div>
        </div>


          <form action="{{url('birthcertificate')}}" method="post">
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
   <p align="center">अनुसूची-१२ <br>(नियम ७ संग सम्बन्धित)<br>
    <u>जन्म दर्ताको प्रमाणपत्रको ढाँचा</u> <br>
                  नेपाल सरकार <br>
                  गृह मन्त्रालय<br>
                  राष्ट्रिय प्रमाणपत्र तथा पञ्जीकरण विभाग<br>
                  {{-- सङ्घीय मामिला तथा स्थानीय विकास मन्त्रालय <br>
                  केन्द्रीय पञ्जीकरण विभाग <br> --}}
                  <b>स्थानीय पञ्जीकाधिकारीको कार्यालय </b><br>
                  @include('master.master_header_ne')
                 </p>

  </div>

</div>
      </header>

                <div class="row top-part">
                  <div class="col-md-12">
                    <h4 align="center">जन्म दर्ता प्रमाणपत्र</h4>
                  </div>
                </div>

                  <div class="row title-left">
                    <div class="col-md-6">
                      <p align="left">
                        दर्ता नम्बर : <b><input type="text" name="reg_no_nep"  class="dashed-input-field"required="required"  placeholder="*"></b><br>
                        पारिवारिक लागत फाराम नं. :<b> <input type="text" name="form_no_nep" class="dashed-input-field" required="required" placeholder="*"></b>
                      </p>
                    </div>
                    <div class="col-md-6">
                      <p align="right">
                        दर्ता मिति :<b><input type="text" name="reg_date_nep" id="nepaliDate51" class="dashed-input-field ndp-nepali-calendar" required="required" placeholder="*" onfocus="showNdpCalendarBox('nepaliDate51')"></b>
                        </p>
                      </div>

                    </div>
                    <div class="row content-para">
                    <div class="col-md-12">
                      <p align="left">यस कार्यालयमा खडा गरिएको जन्म दर्ता किताब अनुसार प्रमाणित गरिन्छ कि सूचक <b><select name="applicant_title_options">
<option value="श्री">श्री</option>
<option value="श्रीमती">श्रीमती</option>
</select>
<input type="text" name="applicant_name_nep" placeholder=" *" required="required" class="dashed-input-field"> </b>ले भरेको अनुसूची-३ को सूचना फाराम बमोजिम श्री <b><input type="text" name="grand_father_name_nep" placeholder=" *" required="required" class="dashed-input-field"></b> को <b><select name="grand_children_options">
<option value="नाति">नाति</option>
<option value="नातिनी">नातिनी</option>
</select>
</b> <b> {{$provience[0]->province_name}} <b> {{$district[0]->district_name}} </b> जिल्ला <b> {{$local_state[0]->local_state_name}} </b> वडा नं. <b>



{{Helpers::convertNos(auth()->user()->isAdmin)}} 






</b> मा बस्ने श्री<b><input type="text" placeholder=" *" required="required" name="father_name_nep" class="dashed-input-field"></b> तथा श्रीमती <b><input type="text" name="mother_name_nep" class="dashed-input-field" placeholder=" *" required="required"></b>को <b>
                      <select name="children_options">
<option value="छोरा">छोरा</option>
<option value="छोरी">छोरी</option>
</select>
                      <select name="children_relation_options">
<option value="श्री">श्री</option>
<option value="सुश्री">सुश्री</option>
</select>
</b><b>
                        <input type="text" name="holder_name_nep" placeholder=" *" required="required" class="dashed-input-field"></b> को मिति वि.सं <b><input type="text" name="birth_date_bs_nep" id="birth_date_bs_nep" placeholder=" *" required="required" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('birth_date_bs_nep')"></b>(<b><input type="text" name="birth_date_ad_nep" placeholder=" *" required="required" id="birth_date_ad_nep" class="dashed-input-field"></b>ई.सं) मा जन्म भएको हो |
                    </p>
                  </div>
                </div>
                  <div class="row para-btm">
                    <div class="col-md-8">
                      <p align="left">

                        नागरिकता लिएको भए <br>
                        नागरिकता प्रमाणपत्र नं. जारी मिति र जिल्ला <br>
                        क. बाबुको  <b><input type="text" name="father_citizen_no_nep" placeholder=" *" required="required" class="dashed-input-small-field"> <input type="text" name="father_citizen_issued_date_nep" id="father_citizen_issued_date_nep" placeholder=" *" required="required" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('father_citizen_issued_date_nep')"> <input type="text" name="father_citizen_issued_district_nep" placeholder=" *" required="required" class="dashed-input-field"></b><br>
                        ख. आमाको  <input type="text" name="mother_citizen_no_nep" placeholder=" *" required="required" class="dashed-input-small-field"> <input type="text" name="mother_citizen_issued_date_nep" id="mother_citizen_issued_date_nep" placeholder=" *" required="required" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('mother_citizen_issued_date_nep')"> <input type="text" name="mother_citizen_issued_district_nep" placeholder=" *" required="required" class="dashed-input-field">
                      </p>
                    </div>
                    <div class="col-md-4">
                      <p align="left"> स्थानीय पञ्जीकाधिकारीको <br>
                        सही : <br>
                        नाम थर :<b><input type="text" name="local_registrar_name_nep" placeholder=" *" required="required" class="dashed-input-field"></b><br>
                        मिति : <b><input type="text" name="signed_date_nep" id="signed_date_nep" placeholder=" *" required="required" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('signed_date_nep')"></b>
                      </p>
                    </div>
                  </div>

<div class="row">
  <div class="col-md-12">
    <div class="checkbox-inline">
      
      <input type="checkbox" class="checkbox english-form" name="english_form" >
      <label for="english form">Fill the form in English</label>
    </div>
  </div>
</div>

<div class="eng paanji showEnglishForm" style="display: none;">
                  <div class="row para-two">
                      <div class="col-md-2">

                     </div>
                     <div class="col-md-8">


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
      </div>
      <div class="row">
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
                          <b>
                          {{$local_state[0]->local_state_name_english}} </b><br>

                        <b>{{$district[0]->district_name_english}} District,</b><b> {{$provience[0]->province_name_english}} </b></p>
        </div>
      </div>


      </header>
                    <div class="row top-part">
                    <div class="col-md-12">
                      <p align="center" class="font-size-24"><b>Birth Registration Certificate</b></p>
                    </div>
                  </div>
                      <div class="row title-left">
                        <div class="col-md-6">
                          <p align="left">
                            Registration No : <b><input type="text" name="reg_no" id="reg_no" placeholder=" *"  class="dashed-input-field"></b><br>
                            Family Record Form No : <b><input type="text" name="form_no" placeholder=" *"  class="dashed-input-field"></b>
                          </p>
                        </div>
                        <div class="col-md-6">
                          <p align="right">
                            Date of Registration :<b><input type="text" name="reg_date" placeholder=" *"  id="reg_date" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('reg_date')"></b>
                          </p>
                        </div>

                      </div>
                      <div class="row content-para">
                      <div class="col-md-12">
                        <p align="left">This is to certify,as per the birth register maintained at this office and the information provided by <b> 
                          <select name="applicant_title_options_eng">
                          <option value="Mr">Mr</option>
                          <option value="Mrs">Mrs</option>
                          </select>
                          <input type="text" name="applicant_name" placeholder=" *"  class="dashed-input-field"></b> in the information form of schedule 2, that  <b>
                            <select name="grand_children_options_eng">
                          <option value="Mr">Mr</option>
                          <option value="Mrs">Mrs</option>
                          </select>
                          <input type="text" name="grand_father_name" placeholder=" *"  class="dashed-input-field">
                          <select name="children_options_eng">
                          <option value="son">son</option>
                          <option value="daughter">daughter</option>
                          </select>
                          </b> of Mr.<b>
                            <input type="text" name="father_name" class="dashed-input-field" placeholder=" *" ></b> and Mrs. <b>
                              <input type="text" name="mother_name" placeholder=" *"  class="dashed-input-field">
                              <select name="children_relation_options_eng">
                              <option value="grandson">grandson</option>
                              <option value="granddaughter">granddaughter</option>
                              </select>
                               </b> of <b><select name="grand_title_options_eng">
                                <option value="Mr">Mr</option>
                                <option value="Mrs">Mrs</option>
                                </select>
                              <input type="text" name="spouse_name" placeholder=" *"  class="dashed-input-field"></b> a resident of Ward No.<b>{{auth()->user()->isAdmin}} </b>, {{$local_state[0]->local_state_name_english}} </b>

                       <b> {{$provience[0]->province_name_english}} <b> {{$district[0]->district_name_english}} </b> was born on <b> <input type="text" name="birth_date_bs" placeholder=" *"  id="birth_date_bs" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('birth_date_bs')"></b>BS(<b><input type="text" placeholder=" *"  name="birth_date_ad" id="birth_date_ad" class="dashed-input-field"></b> AD).</b></p>



                      </div>
                    </div>
                        <div class="row para-btm">
                          <div class="col-md-7">
                            <p align="left">

                             Date, District and Citizenship Certificate No, if Citizenship Certificate is issued to:<br>
                             A. Father.<b><input type="text" name="father_citizen_issued_date" placeholder=" *"  id="father_citizen_issued_date" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('father_citizen_issued_date')">,<input type="text" name="father_citizen_issued_district" placeholder=" *"  class="dashed-input-field"> <input type="text" name="father_citizen_no" placeholder=" *"  class="dashed-input-field"> </b><br>
                             B.Mother.<b><input type="text" name="mother_citizen_issued_date" placeholder=" *"  id="mother_citizen_issued_date" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('mother_citizen_issued_date')">,<input type="text" name="mother_citizen_issued_district" placeholder=" *"  class="dashed-input-field"> <input type="text" name="mother_citizen_no" placeholder=" *"  class="dashed-input-field"> </b><br>
                           </p>
                         </div>
                         <div class="col-md-5">
                          <p align="left">Local Registar's<br>
                            Singnature: <br>
                            Name and Surname: <b><input type="text" name="local_registrar_name" placeholder=" *"  class="dashed-input-field"> </b><br>
                            Date : <b><input type="text" name="signed_date" id="signed_date" placeholder=" *"  class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('signed_date')"></b>
                          </p>
                          </div>
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
<label>निवेदकको ठेगाना</label><input type="text" name="nibedak_address" required class="form-control">
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
                    <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
                    <hr>

                    <center><input type="submit" class="btn btn-success" name="save_birth_certificate_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
                 </div>
               </form>
             </div>
           </div>
         </div>
       </div>


@stop
