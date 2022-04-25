<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

   <div id="page">
      <page size="A4"  class="short">
         <div class="x_panel">
            <div class="x_content">
               <header>
                  <div class="col-md-12" style="margin-top: 40px;">
                     <div class="col-md-2">
                        <p><img src="{{ asset('images/logo.png') }}"> </p>
                     </div>
                     <div class="col-md-10" style="margin-left: -65px;">
                     <p align="center">
                      अनुसूची-१२ <br>
                      (नियम ७ संग सम्बन्धित)<br>
                   <u>जन्म दर्ताको प्रमाणपत्रको ढाँचा</u> <br>
                 नेपाल सरकार <br>
                  गृह मन्त्रालय<br>
                  राष्ट्रिय प्रमाणपत्र तथा पञ्जीकरण विभाग<br>
                  {{-- सङ्घीय मामिला तथा स्थानीय विकास मन्त्रालय <br>
                  केन्द्रीय पञ्जीकरण विभाग <br> --}}
                  <b>स्थानीय पञ्जीकाधिकारीको कार्यालय </b><br>
                           @if(auth()->user()->isAdmin != 0)
                           वडा नं.<b>
                           {{Helpers::convertNos(auth()->user()->isAdmin)}} ,</b>
                           @endif
                            <b>{{$local_state[0]->local_state_name}} </b><br>
                           
                              <b>{{$district[0]->district_name}}</b> जिल्ला, <b>{{$provience[0]->province_name}}{{-- , नेपाल --}}</b>

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
                        दर्ता नम्बर : {{$data->reg_no_nep}}<br>
                        पारिवारिक लागत फाराम नं. :<b> {{$data->form_no_nep}}</b>
                     </p>
                  </div>
                  <div class="col-md-6">
                     <p align="right">
                        दर्ता मिति :<b>{{$data->reg_date_nep}}</b>
                     </p>
                  </div>
               </div>
               <div class="row content-para">
                  <div class="col-md-12">
                     <p align="left">
                        यस कार्यालयमा खडा गरिएको जन्म दर्ता किताब अनुसार प्रमाणित गरिन्छ कि सूचक
                        <b>
                          {{$data->applicant_title_options}}

                           {{$data->applicant_name_nep}}
                        </b>
                        ले भरेको अनुसूची-३ को सूचना फाराम बमोजिम श्री <b>{{$data->grand_father_name_nep}}</b> को
                        <b>
                           {{$data->grand_children_options}}

                        </b>
                        <b> {{$provience[0]->province_name}}</b> <b> {{$district[0]->district_name}} </b> जिल्ला <b> {{$local_state[0]->local_state_name}} </b> वडा नं. <b>
                        {{Helpers::convertNos(auth()->user()->isAdmin)}}
                        </b> मा बस्ने श्री<b>{{$data->father_name_nep}}</b> तथा श्रीमती <b>{{$data->mother_name_nep}}</b>को
                        <b>
                           {{$data->children_options}}

                           {{$data->children_relation_options}}

                        </b>
                        <b>
                        {{$data->holder_name_nep}}</b> को मिति वि.सं <b>{{$data->birth_date_bs_nep}}</b>(<b>{{$data->birth_date_ad_nep}}</b>ई.सं) मा जन्म भएको हो |
                     </p>
                  </div>
               </div>
               <div class="row para-btm">
                  <div class="col-md-8">
                     <p align="left">
                        नागरिकता लिएको भए <br>
                        नागरिकता प्रमाणपत्र नं. जारी मिति र जिल्ला <br>
                        क. बाबुको  <b>{{$data->father_citizen_no_nep}}, {{$data->father_citizen_issued_date_nep}} , {{$data->father_citizen_issued_district_nep}}</b><br>
                        ख. आमाको  {{$data->mother_citizen_no_nep}}, {{$data->mother_citizen_issued_date_nep}} ,{{$data->mother_citizen_issued_district_nep}}
                     </p>
                  </div>
                  <div class="col-md-4">
                     <p align="left"> स्थानीय पञ्जीकाधिकारीको <br>
                        सही : <br>
                        नाम थर :<b>{{$data->local_registrar_name_nep}}</b><br>
                        मिति : <b>{{$data->signed_date_nep}}</b>
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </page>
      <page size="A4" class="short">
          <div class="x_panel">
         <div class="x_content">


           <header>
              <div class="col-md-12" style="margin-top: 40px;">
                 <div class="col-md-2">
                    <p><img src="{{ asset('images/logo.png') }}"> </p>
                 </div>
                 <div class="col-md-8">
             <p align="center">Schedule-12 <br>(Related with Rule 7)<br>
                        Government of Nepal<br>
                        Ministry of Home Affairs<br>
                        Department of National ID and Civil Registration<br>
                        {{-- Ministry of Federal Affairs and Local Development<br>
                        Department of Civil Registration<br> --}}
                        <b>Office of Local Registrar</b><br>
                @if(auth()->user()->isAdmin != 0)        
                Ward No.<b>  {{auth()->user()->isAdmin}},
                @endif
                 {{$local_state[0]->local_state_name_english}} </b><br>
                <b>{{$district[0]->district_name_english}}</b> District, <b>{{$provience[0]->province_name_english}}{{-- , Nepal --}}</b></p>
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
                            Registration No : <b>{{$data->reg_no}}</b><br>
                            Family Record Form No : <b>{{$data->form_no}}</b>
                          </p>
                        </div>
                        <div class="col-md-6">
                          <p align="right">
                            Date of Registration :<b>{{$data->reg_date}}</b>
                          </p>
                        </div>

                      </div>
                      <div class="row content-para">
                      <div class="col-md-12">
                        <p align="left">This is to certify,as per the birth register maintained at this office and the information provided by <b> {{$data->applicant_title_options_eng}}

{{$data->applicant_name}}</b> in the information form of schedule 2, that  <b>{{$data->grand_children_options_eng}}

{{$data->grand_father_name}} {{$data->children_options_eng}}

</b> of Mr.<b>{{$data->father_name}} </b> and Mrs. <b>{{$data->mother_name}} {{$data->children_relation_options_eng}}

 </b> of <b>{{$data->grand_title_options_eng}}

{{$data->spouse_name}}</b> a resident of Ward No.<b> {{auth()->user()->isAdmin}}</b>,<b>{{$local_state[0]->local_state_name_english}}</b> <b>{{$district[0]->district_name_english}}</b> District <b>{{$provience[0]->province_name_english}} </b>Province was born on <b>{{$data->birth_date_bs}}</b>BS(<b>{{$data->birth_date_ad}}</b> AD).</b></p>



                      </div>
                    </div>
                      <div class="row para-btm">
                        <div class="col-md-7">
                          <p align="left">

                           Date, District and Citizenship Certificate No, if Citizenship Certificate is issued to:<br>
                           A. Father.<b>{{$data->father_citizen_issued_date}},{{$data->father_citizen_issued_district}} {{$data->father_citizen_no}} </b><br>
                           B.Mother.<b>{{$data->mother_citizen_issued_date}},{{$data->mother_citizen_issued_district }}, {{$data->mother_citizen_no}} </b><br>
                         </p>
                       </div>
                       <div class="col-md-5">
                        <p align="left">Local Registar's<br>
                          Singnature: <br>
                          Name and Surname: <b>{{$data->local_registrar_name}} </b><br>
                          Date : <b>{{$data->signed_date}}</b>
                        </p>
                      </div>
                    </div>


                  </div>

            </div>

      </page>
      </div>


<div class="col-md-12">
   <center>
    <div class="hide-button">
      <a class="btn btn-fixed" href="{{url('home')}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
      <a class="btn btn-fixed"  href="birthcertificate/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
    <a class="btn btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a>
      <a class="btn btn-fixed" href="{{url('birthcertificate/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
           </div>
   </center>
</div>
<!-- jQuery -->
<!-- jQuery 3 -->
<script src="{{ asset('admin/bower_components/jquery/dist/jquery.min.js') }}"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#print_certificate').click(function() {
    $('.hide-button').hide();

    window.print();

    $('.hide-button').show();
    });
  });
</script>
