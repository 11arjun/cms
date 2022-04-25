<link href="{!! asset('css/custom_print.css') !!}" rel="stylesheet">
<link rel="stylesheet" href="{!! asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}">

   <div id="page">
      <page size="A4"  class="short">
         <div class="x_panel">
            <div class="x_content">
              <header>
                 <div class="col-md-12" style="margin-top: 40px;">
                    <div class="col-md-2">
                       <p><img src="{{ asset('images/logo.png') }}"> </p>
                    </div>
                    <div class="col-md-8">
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
                          {{Helpers::convertNos(auth()->user()->isAdmin)}} ,</b>
                          @endif
                          <b> {{$local_state[0]->local_state_name}} </b><br>
                          
                             <b>{{$district[0]->district_name}}</b> जिल्ला, <b>{{$provience[0]->province_name}}{{-- , नेपाल --}}</b></p>
                    </div>
                 </div>
              </header>
               <div class="row top-part">
                  <div class="col-md-12">
                     <h4 align="center">विवाह दर्ताको प्रमाणपत्र</h4>
                  </div>
               </div>
               <div class="row title-left">
                  <div class="col-md-6">
                     <p align="left">
                        दर्ता नम्बर : {!!$data->reg_no_nep!!}<br>
                        पारिवारिक लागत फाराम नं. : {!!$data->form_no_nep!!}<b> </b>
                     </p>
                  </div>
                  <div class="col-md-6">
                     <p align="right">
                        दर्ता मिति : {!!$data->reg_date_nep!!}<b></b>
                     </p>
                  </div>
               </div>
               <div class="row content-para">
                  <div class="col-md-12">
                     <p align="left"> यस कार्यालयमा खडा गरिएको विवाह दर्ता किताब अनुसार प्रमाणित गरिन्छ कि सूचक श्री <b> {!!$data->applicant_name_nep!!} </b> तथा श्रीमती {!!$data->wife_name_nep!!}  ले भरेको अनुसूची ४ को सूचना फारम बमोजिम श्री <b> {!!$data->grand_father_name_nep!!} </b> को नाति श्री {!!$data->father_name_nep!!} को छोरा <b>१ </b>प्रदेश <b> इलाम </b> जिल्ला<b> {{$local_state[0]->local_state_name}} </b> वडा नं. <b>

                     {{auth()->user()->isAdmin}}
 </b>मा बस्ने बर्ष {!!$data->applicant_age_nep!!} श्री <b> {!!$data->  father_name_nep!!} </b> संग  <b> {!!$data->applicant_age_nep!!} </b> को  नातिनी श्री <b>{!!$data-> husband_name_nep!!} </b> को  छोरी {!!$data->girls_grand_father_name_nep!!} प्रदेश {!!$data->girls_provience_nep!!} जिल्ला {!!$data->girls_district_nep!!}

          <b>
          {!!$data->girls_local_state_nep!!}
</b>


             वडा नं. {!!$data->girls_ward_no_nep!!} मा बस्ने बर्ष {!!$data->girls_age_nep!!} की {!!$data-> girls_name_nep!!} को मिति वि.सं<b> {!!$data->date_bs_nep!!} </b>(<b> {!!$data->date_bs_nep!!} </b> {!!$data->date_ad_nep!!} ई सं) मा सामाजिक परम्परा/विवाह दर्ता एन, २०२८ अनुसार विवाह भएको हो !
              </p>

                  </div>
               </div>
               <div class="row para-btm">
                  <div class="col-md-8">
                     <p align="left">
                        नागरिकता लिएको भए <br>
                        नागरिकता प्रमाणपत्र नं. जारी मिति र जिल्ला <br>
                        क. बाबुको  <b>{!!$data->bride_citizen_no_nep!!}, {!!$data->bride_citizen_issued_date_nep!!}, {!!$data->bride_citizen_issued_district_nep!!}</b><br>
                        ख. आमाको  {!!$data->bridegroom_citizen_no_nep!!}, {!!$data->bridegroom_citizen_issued_date_nep!!} ,{!!$data->bridegroom_citizen_issued_district_nep!!}
                     </p>
                  </div>
                  <div class="col-md-4">
                     <p align="left"> स्थानीय पञ्जीकाधिकारीको <br>
                        सही : <br>
                        नाम थर :<b>{!!$data->local_registrar_name_nep!!}</b><br>
                        मिति : <b>{!!$data->signed_date_nep!!}</b>
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </page>
      <page size="A4"  class="short">
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
                Ward No.<b>  {{auth()->user()->isAdmin}}, </b>
                @endif <b>{{$local_state[0]->local_state_name_english}} </b><br>
                <b>{{$district[0]->district_name_english}}</b> District, <b>{{$provience[0]->province_name_english}}{{-- , Nepal --}}</b></p>
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
                            Registration No : <b>{!!$data->reg_no!!}</b><br>
                            Family Record Form No : <b>{!!$data->form_no!!}</b>
                          </p>
                        </div>
                        <div class="col-md-6">
                          <p align="right">
                            Date of Registration :<b>{!!$data->reg_date!!}</b>
                          </p>
                        </div>

                      </div>
                      <div class="row content-para">
                      <div class="col-md-12">
                           <p align="left"> This is to certify, as per the marrige register maintained at this office and the information provided by Mr.  <b> {!!$data->applicant_name!!} </b> and Mrs. <b> {!!$data->wife_name!!} </b> in the information form of schedule 4, that Mr. <b> {!!$data->husband_name!!} </b> aged <b> {!!$data->husband_age!!}</b> son of Mr.<b>{!!$data->father_name!!}</b>grandson of Mr. <b>{!!$data-> grand_father_name!!}</b> a resident of Ward No <b>
                           {{auth()->user()->isAdmin}} </b> <b>Ilam Municipality</b>, <b>Ilam</b> District <b>1</b> Provience, married miss <b> {!!$data->girls_name!!}</b> aged<b> {!!$data->girls_age!!}</b> daughter of Mr. <b> {!!$data->girls_father_name!!}</b> granddaughter of Mr. <b> {!!$data->girls_grand_father_name!!}</b> a resident of Ward No <b> {!!$data->girls_ward_no!!}</b> <b> {!!$data->girls_local_state!!}</b> <b>
</b>
 <b> {!!$data->girls_district!!}</b> District <b> {!!$data->girls_provience!!}</b> Provience, on <b>{!!$data->date_bs!!}</b>B.S (<b> {!!$data->date_ad!!} A.D) </b>in accordance with the social customs/marrige registration act 2028.
              </p>
                      </div>
                    </div>
                      <div class="row para-btm">
                        <div class="col-md-7">
                          <p align="left">

                           Date, District and Citizenship Certificate No, if Citizenship Certificate is issued to:<br>
                           A. Father.<b>{!!$data->bride_citizen_issued_date!!},{!!$data->bride_citizen_issued_district!!}, {!!$data->  bride_citizen_no!!} </b><br>
                           B.Mother.<b>{!!$data->bridegroom_citizen_issued_date!!},{!!$data->bridegroom_citizen_issued_district!!}, {!!$data->bridegroom_citizen_no!!} </b><br>
                         </p>
                       </div>
                       <div class="col-md-5">
                        <p align="left">Local Registar's<br>
                          Singnature: <br>
                          Name and Surname: <b>{!!$data->local_registrar_name!!} </b><br>
                          Date : <b>{!!$data->signed_date!!}</b>
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
      <a class="btn btn-fixed" href="{!!url('home')!!}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
      <a class="btn btn-fixed"  href="marriagecertificate/{!!$data->id!!}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
      <a class="btn btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a>
      <a class="btn btn-fixed" href="{!!url('marriagecertificate/create')!!}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
    </div>
   </center>
</div>
<!-- jQuery -->
<!-- jQuery 3 -->
<script src="{!! asset('admin/bower_components/jquery/dist/jquery.min.js') !!}"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#print_certificate').click(function() {
    $('.hide-button').hide();

    window.print();

    $('.hide-button').show();
    });
  });
</script>
