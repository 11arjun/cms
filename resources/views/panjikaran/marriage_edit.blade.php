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
            <h2 class="title-x"> विवाह दर्ताको प्रमाणपत्र </h2>

            
            
            <div class="clearfix"></div>
</div>
         <form action="{{url('marriagecertificate', [$data->id])}}" method="POST" >
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
                              <u>विवाह दर्ताको प्रमाणपत्रको ढाँचा</u> <br>
                  नेपाल सरकार <br>
                  गृह मन्त्रालय<br>
                  राष्ट्रिय प्रमाणपत्र तथा पञ्जीकरण विभाग<br>
                  {{-- सङ्घीय मामिला तथा स्थानीय विकास मन्त्रालय <br>
                  केन्द्रीय पञ्जीकरण विभाग <br> --}}
                  <b>स्थानीय पञ्जीकाधिकारीको कार्यालय </b><br>
                  @if(auth()->user()->isAdmin != 0)
                  वडा नं.<b> 


                  {{Helpers::convertNos(auth()->user()->isAdmin)}} 
,</b>   @endif
<b>{{$local_state[0]->local_state_name}} </b><br>
                              <b>{{$district[0]->district_name}}</b> जिल्ला, <b>{{$provience[0]->province_name}}{{-- , नेपाल --}}</b></p>
  </div>
   
</div>         
      </header>
            <div class="row top-part">
              <div class="col-md-12">
            <p align="center" class="font-size-24"><b>विवाह दर्ताको प्रमाणपत्र</b> 
             
            </p>
          </div>
        </div>


            <div class="row title-left">
              <div class="col-md-6">
               <p align="left">दर्ता नम्बर :<input type="text" class="dashed-input-field" placeholder="   *" name="reg_no_nep" id="reg_no_nep" required="required" value="{{$data->reg_no_nep}}"></p>
           
              <p align="left">पारिवारिक लगत फारम नं. :<input type="text" class="dashed-input-field" placeholder="   *" name="form_no_nep" id="form_no_nep" required="required" value="{{$data->form_no_nep}}"></p>


            </div>
            <div class="col-md-6">
              <p align="right"> दर्ता मिति :<input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" name="reg_date_nep" id="issued_date" required="required" onfocus="showNdpCalendarBox('issued_date')" value="{{$data->reg_date_nep}}"></p>
            </div>
          </div>
          <div class="row content-para">
          <div class="col-md-12">

            <p align="left"> यस कार्यालयमा खडा गरिएको विवाह दर्ता किताब अनुसार प्रमाणित गरिन्छ कि सूचक श्री <b> <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="applicant_name_nep" value="{{$data->applicant_name_nep}}"> </b> तथा श्रीमती <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="wife_name_nep" value="{{$data->wife_name_nep}}">  ले भरेको अनुसूची ४ को सूचना फारम बमोजिम श्री <b> <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="grand_father_name_nep" value="{{$data->grand_father_name_nep}}"> </b> को नाति श्री <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="father_name_nep" value="{{$data->father_name_nep}}"> को छोरा <b>१ </b>प्रदेश <b> इलाम </b> जिल्ला<b> {{$local_state[0]->local_state_name}} </b> वडा नं. <b> 

 {{Helpers::convertNos(auth()->user()->isAdmin)}} 

  ?> 
 </b>मा बस्ने बर्ष <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="applicant_age_nep" value="{{$data->applicant_age_nep}}">श्री <b> <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="husband_name_nep" value="{{$data->husband_name_nep}}"> </b> संग  <b> <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="girls_grand_father_name_nep" value="{{$data->girls_grand_father_name_nep}}"> </b> को  नातिनी श्री <b> <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="girls_father_name_nep" value="{{$data->girls_father_name_nep}}"> </b> को  छोरी <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="girls_provience_nep" value="{{$data->girls_provience_nep}}">प्रदेश <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="girls_district_nep" value="{{$data->girls_district_nep}}"> जिल्ला<input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="girls_local_state_nep" value="{{$data->girls_local_state_nep}}"> 

          <b>
          <select name="lc_type">
<option value="गाउँपालिका" {{ $data->lc_type == 'गाउँपालिका' ? 'selected' : ''}}>गाउँपालिका</option>
<option value="नगरपालिका" {{ $data->lc_type == 'नगरपालिका' ? 'selected' : ''}}>नगरपालिका</option>
</select>
</b> 


             वडा नं. <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="girls_ward_no_nep" value="{{$data->girls_ward_no_nep}}"> मा बस्ने बर्ष <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="girls_age_nep" value="{{$data->girls_age_nep}}"> की <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="girls_name_nep" value="{{$data->girls_name_nep}}"> को मिति वि.सं<b> <input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder=" *" required="required" name="date_bs_nep" id="date_bs_nep" onfocus="showNdpCalendarBox('date_bs_nep')" value="{{$data->date_bs_nep}}"> </b>(<b> <input type="text" class=" dashed-input-field" placeholder=" *" required="required" id="date_ad_nep" name="date_ad_nep" value="{{$data->date_ad_nep}}"> </b> ई सं) मा सामाजिक परम्परा/विवाह दर्ता एन, २०२८ अनुसार विवाह भएको हो !
              </p>
         
          </div>
        </div>
          <div class="row para-btm">
            <div class="col-md-6">
         <p align="left"> नागरिकता लीएको भए<br>
          नागरिकता प्रमाणपत्र नं. जारी मिति र जिल्ला<br>
          क.दुलाहा <b> <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="bride_citizen_no_nep" value="{{$data->bride_citizen_no_nep}}"> </b><b> <input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder=" *" required="required" name="bride_citizen_issued_date_nep" id="bride_citizen_issued_date_nep" onfocus="showNdpCalendarBox('bride_citizen_issued_date_nep')" value="{{$data->bride_citizen_issued_date_nep}}"> </b><b> <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="bride_citizen_issued_district_nep" value="{{$data->bride_citizen_issued_district_nep}}"> </b><br>
          ख. दुलही  <b> <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="bridegroom_citizen_no_nep" value="{{$data->bridegroom_citizen_no_nep}}"> </b> <b> <input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder=" *" required="required" name="bridegroom_citizen_issued_date_nep" id="bridegroom_citizen_issued_date_nep" onfocus="showNdpCalendarBox('bridegroom_citizen_issued_date_nep')" value="{{$data->bridegroom_citizen_issued_date_nep}}"> </b> <b> <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="bridegroom_citizen_issued_district_nep" value="{{$data->bridegroom_citizen_issued_district_nep}}"> </b></p>
        </div>

        <div class="col-md-6">
         <p align="right"> स्थानीय  पञ्जीकधिकारीको<br>
          सही<br>
          नाम थर <b> <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="local_registrar_name_nep" value="{{$data->local_registrar_name_nep}}"> </b><br>
          मिति <b> <input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder=" *" required="required" name="signed_date_nep" id="signed_date_nep" onfocus="showNdpCalendarBox('signed_date_nep')" value="{{$data->signed_date_nep}}"> </b></p>

        </div>
          </div>
<div class="eng paanji showEnglishForm5" style="display: none;">

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
                        Ward No. {{auth()->user()->isAdmin}} ,</b>
@endif
<b>{{$local_state[0]->local_state_name_english}} </b><br>
                                    <b>{{$district[0]->district_name_english}} </b> District, <b>{{$provience[0]->province_name_english}}{{-- , Nepal --}}</b>
                                 </p>
     </div>
   </div>
   
                 
      </header>
              <div class="row top-part">
                <div class="col-md-12">
                  <p align="center" class="font-size-24"><b>Marrige Registration Certificate</b></p>
                </div>
              </div>
                  <div class="row title-left">
                    <div class="col-md-6">
                      <p align="left">
                        Registration No : <input type="text" name="reg_no" id="reg_no" placeholder=" *" required="required" class="dashed-input-field" value="{{$data->reg_no}}"><br>
                        Family Record Form No : <input type="text" name="form_no" placeholder=" *" required="required" class="dashed-input-field" value="{{$data->form_no}}">
                      </p>
                    </div>
                    <div class="col-md-6">
                      <p align="right">
                        Date of Registration :<input type="text" name="reg_date" id="reg_date" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('reg_date')" value="{{$data->reg_date}}">
                      </p>
                    </div>

                  </div>

<div class="row content-para">
                  <div class="col-md-12">

            <p align="left"> This is to certify, as per the marrige register maintained at this office and the information provided by Mr.
              <b> <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="applicant_name" value="{{$data->applicant_name}}">
               </b> and Mrs. <b>
                <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="wife_name" value="{{$data->wife_name}}"> </b> in the information form of schedule 4, that Mr. <b> 
                  <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="husband_name" value="{{$data->husband_name}}"> </b> aged <b> 
                    <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="husband_age" value="{{$data->husband_age}}"></b> son of Mr.<b>
                      <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="father_name" value="{{$data->father_name}}"></b>grandson of Mr. <b>
                        <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="grand_father_name" value="{{$data->grand_father_name}}"></b> a resident of Ward No <b>
                        {{auth()->user()->isAdmin}} </b> {{$local_state[0]->local_state_name_english}}</b>, <b>{{$district[0]->district_name_english}} </b> District <b>{{$provience[0]->province_name_english}}</b>, married miss <b> <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="girls_name" value="{{$data->girls_name}}"></b> aged<b> <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="girls_age" value="{{$data->girls_age}}"></b> daughter of Mr. <b> <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="girls_father_name" value="{{$data->girls_father_name}}"></b> granddaughter of Mr. <b> <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="girls_grand_father_name" value="{{$data->girls_grand_father_name}}"></b> a resident of Ward No <b> <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="girls_ward_no" value="{{$data->girls_ward_no}}"></b> <b> <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="girls_local_state" value="{{$data->girls_local_state}}"></b> <b><select name="lc_type_english">
<option value="Rural Municapility" {{ $data->lc_type_english == 'RuralMunicapility' ? 'selected' : ''}}>RuralMunicapility</option>
<option value="Municipality" {{ $data->lc_type_english == 'Municipality' ? 'selected' : ''}}>Municipality</option>
</select>
</b>
 <b> <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="girls_district" value="{{$data->girls_district}}"></b> District <b> <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="girls_provience" value="{{$data->girls_provience}}"></b> Provience, on <b> <input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder=" *" required="required" name="date_bs" id="date_bs" onfocus="showNdpCalendarBox('date_bs')" value="{{$data->date_bs}}"></b>B.S (<b> <input type="text" class=" dashed-input-field" placeholder=" *" id="date_ad" required="required" name="date_ad" value="{{$data->date_ad}}">A.D) </b>in accordance with the social customs/marrige registration act 2028.
              </p>
         </div>
          </div>
                  <div class="row para-btm">
                    <div class="col-md-7">
                      <p align="left">

                       Date, District and Citizenship Certificate No, if Citizenship Certificate is issued to:<br>
                       A. Bride.<input type="text" name="bride_citizen_issued_date" id="bride_citizen_issued_date" placeholder=" *" required="required" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('bride_citizen_issued_date')" value="{{$data->bride_citizen_issued_date}}">,<input type="text" name="bride_citizen_issued_district" placeholder=" *" required="required" class="dashed-input-field" value="{{$data->bride_citizen_issued_district}}"><input type="text" placeholder=" *" required="required" name="bride_citizen_no" class="dashed-input-field" value="{{$data->bride_citizen_no}}"><br>
                        B.Bridegroom.<input type="text" name="bridegroom_citizen_issued_date" placeholder=" *" required="required" id="bridegroom_citizen_issued_date" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('bridegroom_citizen_issued_date')" value="{{$data->bridegroom_citizen_issued_date}}">,<input type="text" name="bridegroom_citizen_issued_district" placeholder=" *" required="required" class="dashed-input-field" value="{{$data->bridegroom_citizen_issued_district}}"><input type="text" name="bridegroom_citizen_no" placeholder=" *" required="required" class="dashed-input-field" value="{{$data->bridegroom_citizen_no}}"><br>
                      </p>
                    </div>
                    <div class="col-md-5">
                      <p align="left">Local Registar's<br>
                        Singnature: <br>
                        Name and Surname: <input type="text" placeholder=" *" required="required" name="local_registrar_name" class="dashed-input-field" value="{{$data->local_registrar_name}}"><br>
                        Date : <input type="text" name="signed_date" id="signed_date" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('signed_date')" value="{{$data->signed_date}}">
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
        <input type="text" name="nibedak_name" class="form-control" value="{{$data->nibedak_name}}" required>
      </div>
      <div class="form-group">
        <label>निवेदकको ठेगाना</label><input type="text" name="nibedak_address" class="form-control" value="{{$data->nibedak_address}}" required>
      </div><div class="form-group">
        <label>निवेदकको नागरिकता नं.</label>
        <input type="text" name="nibedak_citizenship_no" class="form-control" value="{{$data->nibedak_citizenship_no}}" required>
      </div>
      <div class="form-group">
        <label>निवेदक (NID) </label>
        <input type="text" name="nibedak_nid" class="form-control" value="{{$data->nibedak_nid}}" required>
      </div>

    </fieldset>
  </section>
  <!-- END -->

                  <hr>
                  <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
                  <center><input type="submit" class="btn btn-success" name="save_marrige_certification_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
               </div>
             </form>
           </div>
         </div>
       </div>
     </div>

@stop