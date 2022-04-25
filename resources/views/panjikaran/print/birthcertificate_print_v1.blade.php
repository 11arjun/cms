<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

   <div id="page">
      <page size="A4"  class="short">
         <div class="x_panel">
            <div class="x_content">
               <header style="margin-bottom: 20px;">
                  <div class="col-md-12" style="margin-top: 40px;">
                     <div class="col-md-2">
                        <p><img src="{{ asset('images/logo.png') }}"> </p>
                     </div>
                     <div class="col-md-10" style="margin-left: -65px;">
                     <p align="center">
                      अनुसूची-१२ <br>
                      (नियम ७ संग सम्बन्धित)<br>
                   <u>जन्म दर्ताको प्रमाणपत्रको ढाँचा</u> <br>
                 @include('master.panjikaran_print_header_v1')
              </p>
                          </div>
                     </div>
                  
               </header>
               <div class="row top-part" style="margin-bottom: 1px;">
                 <div class="col-md-12">
                   <div class="row">
                     <div class="col-md-12">
                       <h4 align="center">जन्म दर्ता प्रमाणपत्र</h4>
                       <h4 align="center">(Birth Registration Certificate)</h4>
                     </div>
                   </div>
                   <div class="row">
                     <div class="col-md-4">
                       <p align="left">
                         दर्ता नम्बर (Registration No.): 
                         <b>{{$data->reg_no_nep}}</b>
                       </p>
                     </div>
                     <div class="col-md-8">
                       <p align="right">
                         दर्ता मिति (Registration Date):
                         <b>
                           वि.सं 
                           {{ $data->reg_date_nep}}
                         ({{$data->reg_date }}A.D.)
                       </b>
                       </p>
                     </div>
                   </div>
                 </div>
                 
               </div>
               <div class="row">
                  <div class="col-md-12">
                    <div class="table-responsive" >                    
                      <table class="table table-bordered table-condensed" style="margin-bottom: 5px;">
                        <tr>
                          <td >
                            पूरा नाम: &nbsp;{{ $data->applicant_name_nep }}
                            
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Full Name: &nbsp; {{ $data->applicant_name}}
                            
                          </td>
                        </tr>
                        <tr>
                          <td>
                            जन्म मिति/ Date of Birth: वि.सं 
                            {{ $data->birth_date_bs_nep}}
                            / {{ $data->birth_date_ad }} 
                            (A.D.)                                         
                          </td>
                        </tr>
                        <tr>
                          <td>
                            लिङ्ग/Sex: 
                            {{ $data->sex_np }}                            
                            /                            
                            {{ $data->sex_en }}
                          </td>
                        </tr>
                        <tr>
                          <td>
                            स्थायी ठेगाना:
                            {{ $data->permanent_address_np }}                            
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Permanent Address: 
                            {{ $data->permanent_address_en }}                            
                          </td>
                        </tr>
                        <tr>
                          <td>
                            जन्म स्थान/Birth Place:
                            {{ $data->birth_place_np }}                             
                            /
                            {{ $data->birth_place_en }}                            
                          </td>
                        </tr>
                        <tr>
                          <td>
                            बाजेको पूरा नाम:
                            {{ $data->grand_father_name_nep }}                            
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Full Name of Grandfather:&nbsp;
                            {{ $data->grand_father_name}}                            
                          </td>
                        </tr>
                        <tr>
                          <td style="padding: 0;">
                            <table class="table table-bordered table-condensed" style="margin-bottom: 0; background: transparent;">
                              <tr>
                                <td rowspan="3" style="width: 50px;">
                                  बुवाको विवरण <br>
                                  (Father's Details)
                                </td>
                                <td>
                                  पूरा नाम:
                                  {{ $data->father_name_nep }}                                  
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  Full Name:
                                  {{ $data->father_name }}                                  
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  परिचयपत्र न.(नागरिकता /राहदानी न.)/ ID (Citizenship/Passport): 
                                  {{ $data->father_citizen_no_nep }}                                  
                                  /
                                  {{ $data->father_citizen_no }}                                 
                                </td>
                              </tr>
                              <tr>
                                <td rowspan="3">
                                  आमाको विवरण <br>
                                  (Mother's Details)
                                </td>
                                <td>
                                  पूरा नाम:
                                  {{ $data->mother_name_nep }}                                  
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  Full Name:     
                                  {{ $data->mother_name }}
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  परिचयपत्र न.(नागरिकता /राहदानी न.)/ ID (Citizenship/Passport):
                                  {{ $data->mother_citizen_no_nep }} 
                                  /
                                  {{ $data->mother_citizen_no }}
                                </td>
                              </tr>
                              <tr>
                                <td rowspan="3">
                                  सुचकको विवरण <br>
                                  Informant's Name
                                </td>
                                <td>
                                  नाम:
                                  {{ $data->nibedak_name_np }}                                  
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  Name:
                                  {{ $data->nibedak_name }}                                 
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  परिचयपत्र न.(नागरिकता /राहदानी न.)/ ID (Citizenship/Passport):
                                  {{ $data->nibedak_citizenship_no_np }}                                                                    
                                  /
                                  {{ $data->nibedak_citizenship_no }}                                  
                                </td>
                              </tr>
                            </table>
                            
                          </td>
                          
                        </tr>
                        
                      </table>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-8">
                    <p>
                      सही (Signature):
                    </p>
                    <p>
                      स्थानीय पञ्जीकाधिकारीको नाम:
                      {{ $data->local_registrar_name_nep }}                      
                    </p>
                    <p>
                      Name of Local Registar:
                      {{ $data->local_registrar_name }}                     
                    </p>
                    
                  </div>
                  <div class="col-md-4">
                     <div style="width: 90%; border: 1px solid #000; height:90px">
                       
                     </div> 
                     <p>कार्यालयको छाप / Official Stamp</p>
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
