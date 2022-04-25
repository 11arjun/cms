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
                              <u>बसाइँसराई दर्ताको प्रमाणपत्रको ढाँचा</u> <br>
                  नेपाल सरकार <br>
                  गृह मन्त्रालय<br>
                  राष्ट्रिय प्रमाणपत्र तथा पञ्जीकरण विभाग<br>
                  {{-- सङ्घीय मामिला तथा स्थानीय विकास मन्त्रालय <br>
                  केन्द्रीय पञ्जीकरण विभाग <br> --}}
                  <b>स्थानीय पञ्जीकाधिकारीको कार्यालय </b><br>
                              @if(auth()->user()->isAdmin != 0)
                          वडा नं.<b>
                          {{Helpers::convertNos(auth()->user()->isAdmin)}} ,</b>
                          @endif<b> {{$local_state[0]->local_state_name}} </b><br>
                          
                             <b>{{$district[0]->district_name}}</b> जिल्ला, <b>{{$provience[0]->province_name}}</b></p>
                    </div>
                 </div>
              </header>
               <div class="row top-part">
                  <div class="col-md-12">
                     <h4 align="center">बसाइँसराई दर्ताको प्रमाणपत्र</h4>
                  </div>
               </div>
               <div class="row title-left">
                  <div class="col-md-6">
                     <p align="left">
                        दर्ता नम्बर : {!!$data->registration_no!!}<br>
                        पारिवारिक लागत फाराम नं. :<b> {!!$data->family_form_no!!}</b>
                     </p>
                  </div>
                  <div class="col-md-6">
                     <p align="right">
                        दर्ता मिति :<b>{!!$data->registration_date!!}</b>
                     </p>
                  </div>
               </div>
               <div class="row content-para">
                  <div class="col-md-12">
                     <p align="left">
                           यस कार्यालयमा खडा गरिएको बसाइँसराईदर्ता किताब अनुसार प्रमाणित गरिन्छ कि सूचक श्री {!!$data->applicant_name!!} ले भरेको अनुसूची-६ को बसाइँ सराईको सुचना फाराम बमोजिम <b>{{$provience[0]->province_name}}</b> <b>{{$local_state[0]->local_state_name}}</b> जिल्ला <b>{{$local_state[0]->local_state_name}}</b> वडा नं. <b>
                           {{Helpers::convertNos(auth()->user()->isAdmin)}}</b>  मा बस्ने श्री {!!$data->house_owner_name!!} निम्नलिखित परिवार सहित मिति {!!$data->migrate_date!!} मा {!!$data->migrate_province_name!!} प्रदेश {!!$data->issued_district!!} जिल्ला {!!$data->migrate_local_state!!} वडा नं. {!!$data->migrate_ward!!} मा बसाइँ सरी
                           {!!$data->migrate_type!!}
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

                                     {!! $data->family_member_name!!}
                                    </td>
                                    <td>
                                   {!! $data->date_of_birth!!}
                                    </td>
                                    <td>

                                      {!! $data->relation!!}
                                    </td>
                                    <td>
                                    {!!$data->event_registration!!}
                                    </td>
                                    <td>


                                       {!!$data->remakrs!!}
                                    </td>

                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
               </div>
               <div class="row para-btm">
                  <div class="col-md-8">
                     <p align="left">
                        नागरिकता लिएको भए <br>
                           नागरिकता प्रमाणपत्र नं. {!!$data->citizenship_no!!}<br>
                           जारी मिति र जिल्ला {!!$data->issued_date!!}, {!!$data->issued_districts!!}
                     </p>
                  </div>
                  <div class="col-md-4">
                     <p align="left"> स्थानीय पञ्जीकाधिकारीको <br>
                        सही : <br>
                        नाम थर :<b>{!!$data->local_registar_name!!}</b><br>
                        मिति : <b>{!!$data->signed_date!!}</b>
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
                Ward No.<b>  {{auth()->user()->isAdmin}},</b>@endif
                <b> {{$local_state[0]->local_state_name_english}} </b><br>
                <b>{{$district[0]->district_name_english}}</b> District, <b>{{$provience[0]->province_name_english}}{{-- , Nepal --}}</b></p>
              </div>
           </div>
         </header>
                    <div class="row top-part">
                    <div class="col-md-12">
                      <p align="center" class="font-size-24"><b>Migration Registration Certificate</b></p>
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
                        <p align="left">This is to certify,as per the birth register maintained at this office and the information provided by <b> {!!$data->applicant_title!!}

{!!$data->applicant_name!!}</b> in the information from of schedule 6, the information   <b>{!!$data->applicant_title2!!}

{!!$data->house_owner_name_eng!!} a resident of Ward No.<b> {{Helpers::convertNos(auth()->user()->isAdmin)}}</b> {{$local_state[0]->local_state_name_english}} </b><br>
                                    <b>{{$district[0]->district_name_english}} </b> District, <b>{{$provience[0]->province_name_english}}, Nepal</b>
                                  with the following members of the family, in migrated out migrated to Ward No.

</b><b>{!!$data->mig_ward_eng!!} </b> Rural Municipality/Municipality <b>{!!$data->mig_district_eng!!}

 </b> District <b> {{$provience[0]->province_name_english}}
</b>Province.</p>



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
                                          {!!$data->family_member_name_eng!!}
                                       </td>
                                       <td>


                                          {!!$data->date_of_birth_eng!!}
                                       </td>
                                       <td>


                                           {!!$data->relation_eng!!}
                                       </td>
                                       <td>


                                          {!!$data->event_reg_eng!!}
                                       </td>
                                       <td>

                                         {!!$data->remarks_eng!!}
                                       </td>

                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                    </div>
                      <div class="row para-btm">
                        <div class="col-md-7">
                          <p align="left">

                            If Citizenship certificate is issued : <br>
                              Citizenship Certificate No. {!!$data->citizen_no_eng!!}<br>
                              Date and Distirct Of issuance {!!$data->issued_date_eng!!}, {!!$data->issued_district_eng!!}
                         </p>
                       </div>
                       <div class="col-md-5">
                        <p align="left">Local Registar's<br>
                          Signature: <br>
                              Name and surname {!!$data->local_registar_name_eng!!}<br>
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
      <a class="btn btn-fixed"  href="migration/{!!$data->id!!}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
      <a class="btn btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a>
      <a class="btn btn-fixed" href="{!!url('migration/create')!!}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
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
