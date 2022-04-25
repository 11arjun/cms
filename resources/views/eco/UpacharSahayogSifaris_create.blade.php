@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endpush
@section('content')

<div class="right_col nep" role="main" style="min-height: 986px;">
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">

        <div class="x_title">
          <h3 class="title-x">उपचारमा आर्थीक सहायता सिफारिस</h3>

          <div class="clearfix"></div>
        </div>
<div class="x_content">

  {{-- <header>
    <div class="row">
      <div class="col-md-3">
        <p><img src="{{ asset('images/logo.png') }}"> </p>
      </div>
      <div class="col-md-9 head-edt">

      </div>
    </div>
    <div class="row">
      <div class="col-md-12 title_header">
          <h1 class="name_header">  {{$local_state[0]->local_state_name}} </h1>
          @if(auth()->user()->isAdmin != 0)
        <h2 class="font-size-24">

        {{Helpers::convertNos(auth()->user()->isAdmin)}} नं. वडा कार्यालय <p></p>
        </h2>,
        @endif<h3 align="center" class="sm-head"> {{$district[0]->district_name}}</h3>
        <h3 align="center" class="sm-head">{{$provience[0]->province_name}}, नेपाल</h3>
      </div>
      <div class="col-md-2">
              </div>
    </div>
  </header> --}}


<form action="{{url('UpacharSahayogSifaris')}}" method="post">
             {{ csrf_field() }}
              @include('master.master_header_ne2')

            <div class="row top-part">
              <div class="col-md-6">
               {{-- <p align="left"><b>पत्र संख्या :<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankya" id="patra_sankya" value="२०७५/०७६" required="required"></b></p> --}}
                {{-- <p align="left"><b>चलानी नं. :<input type="text" class="dashed-input-field" name="chalani_no" id="chalani_no"></b></p> --}}
             </div>
             <div class="col-md-6">
              <p align="right"><b>मिति :<input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" name="issued_date" id="issued_date" required="required" onfocus="showNdpCalendarBox('issued_date')"></b></p>
             </div>
           </div>
          <div class="row title-left">
           <div class="col-md-12">

            <p align="left">श्री

              <input type="text" class="dashed-input-field" placeholder="   *" name="karyalaya_name" id="karyalaya_name" value="जिल्ला जनस्वास्थ्य कार्यालय" required="required">,</p>

                <p align="left"><input type="text" class="dashed-input-field" placeholder="   *" name="office_address" id="office_address" required="required">।</p>

           </div>
         </div>



          <div class="row">
          <div class="col-md-12">
            <p align="center" class="font-size-24">
              </p><h4 align="center"><b> विषय: सिफारिस सम्बन्धमा।
                <input type="hidden" name="letter_subject" value="सिफारिस सम्बन्धमा">

</b> </h4>
            <p></p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 content-para">



            <p>उपरोक्त विषयमा <b><input type="text" class="dashed-input-field" placeholder="   *" name="local_state" value="{{$local_state[0]->local_state_name}}" required="required"></b> वडा नं. <b><input type="text" class="dashed-input-small-field" placeholder="   *" name="ward" value="१" required="required"></b> (साविक


              <!--  -->
                              <input type="text" class="dashed-input-field star" placeholder="   *" name="sabik_address" id="sabik_address" required="required">
                            <!--  -->






              <b><select name="sabik_type">
<option value="गा.वि.स.">गा.वि.स.</option>
<option value="नगरपालिका">नगरपालिका</option>
<option value="उप महानगरपालिका">उप महानगरपालिका</option>
<option value="महानगरपालिका"> महानगरपालिका</option>
</select>
</b>, वडा नं. <input type="text" class="dashed-input-small-field star" placeholder="   *" name="sabik_ward" id="sabik_ward" required="required">) बस्ने



             <b> <select name="person_title">
<option value="श्री">श्री</option>
<option value="सुश्री">सुश्री</option>
<option value="श्रीमती">श्रीमती</option>
</select>
</b>


              <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="person_name"> को वार्षिक आम्दानी रु. ५००००।भन्दा कम भएको र निज  <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="disease_name">बाट पीडित भई <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="hospital_name"> अस्पतालमा उपचार गराउँदै आइरहेको र हाल थप उपचारको लागि लाग्ने लागत जुटाउन मेरो आर्थिक अवस्था कमजोर भएको कारणले नि:शुल्क उपचार गर्न सिफारिस पाऊँ भनी निवेदन दिनु भएको हुँदा निज निवेदक विपन्न परिवार अन्तर्गत पर्ने भएकोले त्यहाँको नियमानुसार आर्थिक सहायता उपलब्ध गराई दिनुहुन सिफारिस गरिन्छ।</p>


          </div>
                     <div class="text-right btm-last">
            <p><input type="text" class="dashed-input-field star" placeholder="   *" name="hakim_ko_name" id="" required="required"></p>


             <p>  <b><select name="officer">
<option value="वडा अध्यक्ष">वडा अध्यक्ष</option>
<option value="का. बा वडा अध्यक्ष">का. बा वडा अध्यक्ष</option>
<option value="वडा सचिब">वडा सचिब</option>
</select>
</b> </p>
            </div>
                         <!--Nibedak Block  -->


                <!--views for nibedak detail -->
                <div class="clearfix"></div>
                <hr>
                <section class="bibaran">
                  <fieldset>

                   <legend>निवेदक को विवरण</legend>


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


            <!--  -->
         </div>
          <div class="col-md-12">
            <hr>
            <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
            <center><input type="submit" class="btn btn-success" name="save_upachar_sahayog_sifaris_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
          </div>
        </form></div>

    </div>
  </div>
</div>
</div>

@stop
