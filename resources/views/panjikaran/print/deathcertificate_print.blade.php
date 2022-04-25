<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
<div id="page">
<page size="A4" class="short">
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
                  {{Helpers::convertNos(auth()->user()->isAdmin)}} , 
                </b>
                @endif
                <b>{{$local_state[0]->local_state_name}} </b><br>
                
                     <b>{{$district[0]->district_name}}</b> जिल्ला, <b>{{$provience[0]->province_name}}{{-- , नेपाल --}}</b></p>
            </div>
         </div>
      </header>

      <div class="row">
      <div class="col-md-12 top-part">
        <p align="center" class="font-size-24">मृत्यु दर्ताको प्रमाणपत्र</p>
      </div>
    </div>


      <div class="row title-left">
         <div class="row title-left">
                  <div class="col-md-6">
                     <p align="left">
                        दर्ता नम्बर : {{$data->registration_no_nep}}<br>
                        पारिवारिक लागत फाराम नं. :<b> {{$data->family_form_no_nep}}</b>
                     </p>
                  </div>
                  <div class="col-md-6">
                     <p align="right">
                        दर्ता मिति :<b>{{$data->registration_date_nep}}</b>
                     </p>
                  </div>
               </div>

      </div>
<div class="row">
      <div class="col-md-12 content-para">
        <p align="justify"> यस कार्यालयमा खडा गरिएको मृत्यु दर्ता किताब अनुसार प्रमाणित गरिन्छ कि सूचक {{$data->applicant_title_nep}} {{$data->applicant_name_nep}} ले भरेको अनुसूची-३ को सुचना फाराम बमोजिम श्री {{$data->grand_father_name_nep}} को {{$data->grand_children_option_nep}} श्री {{$data->father_name_nep}} को {{$data->children_option_nep}}    श्री {{$data->children_name_nep}} को  {{$data->spouse_option_nep}} {{$data->province_name_nep}} प्रदेश {{$data->district_name_nep}} जिल्ला {{$data->local_state_name_nep}} वडा नं.{{$data->ward_no_nep}} मा बस्ने वर्ष {{$data->age_nep}} को {{$data->  person_title_nep}} {{$data->person_name_nep}} मिति वि.स. {{$data->death_date_bs_nep}}  गते  {{$data->death_place_ward_nep }} वडा नं.   मा मृत्यु भएको हो।</p>



    </div>
  </div>
    <div class=" row para-btm">
      <div class="col-md-8">
        <p align="left">

          नागरिकता लिएको भए मृतकको <br>
          नागरिकता प्रमाणपत्र नं. {{$data->citizenship_no_nep}}<br>
          जारी मिति र जिल्ला: {{$data->issued_date_nep}},{{$data->issued_district_nep}}
        </p>
      </div>
      <div class="col-md-4">
        <p align="left"> स्थानीय पञ्जीकाधिकारीको <br>
          सही : <br>
          नाम थर :  {{$data->local_registar_name_nep}}<br>
          मिति : {{$data->signed_date_nep}}     </p>
      </div>
    </div>

</div>
</div>
</div>
</div>
</page>


<page size="A4" class="short eng">
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
                        Department of National ID and Civil Registration
                        {{-- Ministry of Federal Affairs and Local Development<br>
                        Department of Civil Registration<br> --}}
                        <b>Office of Local Registrar</b><br>
         @if(auth()->user()->isAdmin)
                                    Ward No.<b> 


                                    {{auth()->user()->isAdmin}} 

, </b>
@endif
<b>{{$local_state[0]->local_state_name_english}} </b><br>
         <b>{{$district[0]->district_name_english}}</b> District, <b>{{$provience[0]->province_name_english}}{{-- , Nepal --}}</b></p>
       </div>
    </div>
  </header>
      <div class="row">
      <div class="col-md-12 top-part">
        <p align="center" class="font-size-24">Death Registration Certificate</p>
      </div>
    </div>

        <div class="row title-left">
          <div class="col-md-6">
            <p align="left">
              Registration No : {{$data->registration_no}} <br>
              Family Record Form No :  {{$data->family_form_no}}
            </p>
          </div>
          <div class="col-md-6">
            <p align="right">
              Date of Registration : {{$data->registration_date}}
            </p>
          </div>

        </div>
      <div class="row">
        <div class="col-md-12 content-para">
          <p align="justify">This is to certify,as per the death register maintained at this office and the information provided by {{$data-> applicant_title}} {{$data->applicant_name}}  in the information form of schedule 3, that {{$data->death_person_title}} {{$data->death_person_name}} aged {{$data->death_person_age}} {{$data->children_option}} of {{$data->father_title_option}}   {{$data-> father_name}} {{$data->spouse_option}} of   {{$data->husband_wife_title}} {{$data->spouse_name}} a resident of Ward No.{{$data->ward_no}},    District  {{$data->district}},{{$data->province}} Province died on BS  {{$data->death_date_bs}} </p>



        </div>
      </div>
        <div class="row para-btm">
          <div class="col-md-7">
            <p align="left">

              if Citizenship Certificate is issued to the deceased:<br>
              His/Her Citizenship Certificate No.:{{$data->citizenship_no}}<br>
              Date and District of Issuance: {{$data->issued_date}}, {{$data->issued_district}}
            </p>
          </div>
          <div class="col-md-5">
            <p align="left">Local Registar's<br>
              Singnature: <br>
              Name and Surname:  {{$data->local_registar_name}}<br>
              Date {{$data->signed_date}}          </p>
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
      <a class="btn btn-fixed"  href="deathcertificate/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
    <a class="btn btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a>
      <a class="btn btn-fixed" href="{{url('deathcertificate/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
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
