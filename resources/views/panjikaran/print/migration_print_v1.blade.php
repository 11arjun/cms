<link href="{!! asset('css/custom_print.css') !!}" rel="stylesheet">
<link rel="stylesheet" href="{!! asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}">

   <div id="page">
      <page size="A4" style="height: auto !important;">
         <div class="x_panel">
            <div class="x_content">
              <header style="margin-bottom: 5px;">
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
                 @include('master.panjikaran_print_header_v1')
                 </p>
                    </div>
                 </div>
              </header>
              <div class="row top-part" style="margin-bottom: 1px;">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-12">
                      <h4 align="center">बसाइँसराई दर्ताको प्रमाणपत्र</h4>
                      <h4 align="center">(Migration Registration Certificate)</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <p align="left">
                        दर्ता नम्बर (Registration No.): 
                        {{ $data->registration_no }}
                      </p>
                    </div>
                    <div class="col-md-8">
                      <p align="right">
                        दर्ता मिति (Registration Date):
                        <b>
                          वि.सं 
                          {{ $data->registration_date }}
                        (
                        {{ $data->reg_date }}
                        A.D.)
                      </b>
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <style>
                 .migration-table td{
                    width: 5px;
                 }
              </style>

                  <div class="row">
                     <div class="col-md-12">
                        <div class="table-responsive">
                           <table class="table table-bordered migration-table" style="margin-bottom: 0">
                              <tbody>
                                 <tr>
                                    <td >
                                       सुचकको पूरा नाम
                                    </td>
                                    <td>
                                       {{ $data->applicant_name }}
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>Applicant's Full Name</td>
                                    <td>
                                       {{ $data->applicant_name_eng }}
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       स्थायी ठेगाना
                                    </td>
                                    <td>
                                       {{ $data->permanent_address_np }}
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>Permanent Address</td>
                                    <td>
                                       {{ $data->permanent_address_en }}
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>नागरिकता नं.</td>
                                    <td>
                                       {{ $data->citizenship_no }}
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>Citizenship No.</td>
                                    <td>
                                       {{ $data->citizen_no_eng }}
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>सुचकको बुवाको पूरा नाम</td>
                                    <td>
                                       {{ $data->father_name_np }}
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>Full Name of Father of Informant</td>
                                    <td>
                                       {{ $data->father_name_en }}
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>सुचकको आमाको पूरा नाम</td>
                                    <td>
                                       {{ $data->mother_name_np }}
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>Full Name of Mother of Informant</td>
                                    <td>
                                       {{ $data->mother_name_en }}
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>बसाई सारी आएको ठेगाना</td>
                                    <td>
                                       {{ $data->migrated_form_address_np }}
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>Address Migrated Form</td>
                                    <td>
                                      {{ $data->migrated_form_address_en }}
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
                  {{-- <div id="wrapper"> --}}
                <div class="row">
                     <div class="col-md-12">
                        <div class="table-responsive">
                          <table class="table table-bordered" id="migration-detail-table" style="margin-bottom: 5px;">
                            <caption>पारिवारिक विवरण</caption>
                            <thead>
                               <tr>
                                  <th>क्र.सं.</th>
                                  <th>पूरा नाम (Full Name</th>
                                  <th>जन्म मिति (Date of Birth)</th>
                                  <th>सूचक संगको नाता (Relation with Informant)</th>
                                  <th>परिचयपत्र नं./ID (नागरिकता/जन्म दर्ता नं./Ctz. No /Birth Reg. No.)</th>
                                  
                               </tr>
                            </thead>
                            <tbody>
                              @if($detail)
                                @php
                                  $i = 1;
                                @endphp
                                @foreach($detail as $d)
                                  <tr>
                                    <td>{{Helpers::convertNos($i)}}</td>
                                    <td>{{ $d->fullname_np }}</td>
                                    <td>{{ $d->dob_np }}</td>
                                    <td>{{ $d->relation_with_informant_np }}</td>
                                    <td>{{ $d->primary_legal_id_np }}</td>
                                  </tr>
                                  <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $d->fullname_en }}</td>
                                    <td>{{ $d->dob_en }}</td>
                                    <td>{{ $d->relation_with_informant_en }}</td>
                                    <td>{{ $d->primary_legal_id_en }}</td>
                                  </tr>
                                  @php
                                    $i++;
                                  @endphp
                                @endforeach
                              @endif
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  <div class="row" id="migration-footer">
                    <div class="col-md-8">
                      <p>
                        सही (Signature):
                      </p>
                      <p>
                        स्थानीय पञ्जीकाधिकारीको नाम:
                        {{ $data->local_registar_name }}
                      </p>
                      <p>
                        Name of Local Registar:
                        {{ $data->local_registar_name_eng }}
                      </p>
                      
                    </div>
                    <div class="col-md-4">
                       <div style="width: 90%; border: 1px solid #000; height:90px">
                         
                       </div> 
                       <p>कार्यालयको छाप / Official Stamp</p>
                    </div>
                  </div>  
    {{-- </div>end of wrapper --}}
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

    // if ($('#page > page[size=A4]:first-child').height() > 1122){
    //     $('#page').append("<page size='A4' id='page2'><div class='x_panel'><div class='x_content'></div></div></page>"); 
    //     $wrapper_content = $('#wrapper').detach();    
    //     $('#page2 > .x_panel > .x_content').html($wrapper_content);
    // }

    // console.log($('#page > page[size=A4]:first-child').height())

  });
</script>
