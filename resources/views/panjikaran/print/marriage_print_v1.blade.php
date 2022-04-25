<link href="{!! asset('css/custom_print.css') !!}" rel="stylesheet">
<link rel="stylesheet" href="{!! asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}">
<style>
  .marriage-photo{
        width: 80%;
        border: 1px dashed #000; 
        height: 100px;
  }
</style>
   <div id="page">
      <page size="A4"  >
         <div class="x_panel">
            <div class="x_content">
              <header style="margin-bottom: 10px;">
                 <div class="col-md-12" style="margin-top: 40px;">
                    <div class="col-md-2">
                       <p><img src="{{ asset('images/logo.png') }}"> </p>
                    </div>
                    <div class="col-md-8">
                        <p align="center">अनुसूची-१२ 
                              <br>(नियम ७ संग सम्बन्धित)<br>
                              <u>विवाह दर्ताको प्रमाणपत्रको ढाँचा</u> <br>
                              @include('master.panjikaran_print_header_v1')
                  </p>
                    </div>
                 </div>
              </header>
              <div class="row top-part" style="margin-bottom: 1px;">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-12">
                      <h4 align="center">विवाह दर्ताको प्रमाणपत्र</h4>
                      <h4 align="center">(Migration Registration Certificate)</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <p align="left">
                        दर्ता नम्बर (Registration No.): 
                        {{ $data->reg_no_nep }}
                        
                      </p>
                    </div>
                    <div class="col-md-8">
                      <p align="right">
                        दर्ता मिति (Registration Date):
                        <b>
                          वि.सं 
                          {{ $data->reg_date_nep }}
                          
                        (
                        {{ $data->reg_date }}
                        A.D.)
                      </b>
                      </p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <p>
                        विवाह मिति (Marriage Date):
                        वि.सं 
                        {{ $data->date_bs_nep }}
                        
                        (
                        {{ $data->date_ad_nep }}
                        A.D.
                        )

                        
                      </p>
                      <p>
                        विवाह प्रकार (Marriage Type): 
                        {{ $data->marriage_type_np }}
                        /
                        {{ $data->marriage_type_en }}
                      </p>
                    </div>
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-4 col-md-offset-4" >
                          <div class="marriage-photo" >
                            
                          </div>
                          दुलाहा (Bridegroom)
                        </div>
                        <div class="col-md-4">
                          <div class="marriage-photo">
                            
                          </div>
                          दुलही (Bride)
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="column-md-12">
                  <div class="table-responsive">
                    <table class="table table-bordered table-condensed" style="margin-bottom: 2px;">
                      <thead>
                        
                        <tr>
                          <th>विवरण (Details)</th>
                          <th>दुलाहा (Bridegroom)</th>
                          <th>दुलही (Bride)</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>पूरा नाम:</td>
                          <td>

                            {{ $data->husband_name_nep }}
                          </td>
                          <td>
                            {{ $data->girls_name_nep }}
                          </td>
                        </tr>
                        <tr>
                          <td>Full Name:</td>
                          <td>
                            {{ $data->husband_name }}
                          </td>
                          <td>
                            {{ $data->girls_name }}
                          </td>
                        </tr>
                        <tr>
                          <td>जन्म मिति:</td>
                          <td>

                            {{ $data->bridegroom_dob_np }}
                          </td>
                          <td>
                            {{ $data->bride_dob_np }}
                          </td>
                        </tr>
                        <tr>
                          <td>Date of Birth</td>
                          <td>
                            {{ $data->bridegroom_dob_en }}
                          </td>
                          <td>
                            {{ $data->bride_dob_en }}
                          </td>
                        </tr>
                        <tr>
                          <td>नागरिकता / राहदानी न.</td>
                          <td>
                            {{ $data->bridegroom_citizen_no_nep }}
                          </td>
                          <td>
                            {{ $data->bride_citizen_no_nep }}
                          </td>
                        </tr>
                        <tr>
                          <td>Citizenship / Passport No.:</td>
                          <td>
                            {{ $data->bridegroom_citizen_no }}
                          </td>
                          <td>
                            {{ $data->bride_citizen_no }}
                          </td>
                        </tr>
                        <tr>
                          <td>स्थायी ठेगाना:</td>
                          <td>
                            {{ $data->bridegroom_address_np }}
                          </td>
                          <td>
                            {{ $data->bride_address_np }}
                          </td>
                        </tr>
                        <tr>
                          <td>Permanent Address:</td>
                          <td>
                            {{ $data->bridegroom_address_en }}
                          </td>
                          <td>
                            {{ $data->bride_address_en }}
                          </td>
                        </tr>
                        <tr>
                          <td>बुवाको पूरा नाम:</td>
                          <td>
                            {{ $data->father_name_nep }}
                          </td>
                          <td>
                            {{ $data->girls_father_name_nep }}
                          </td>
                        </tr>
                        <tr>
                          <td>Full Name of Father:</td>
                          <td>
                            {{ $data->father_name }}
                          </td>
                          <td>
                            {{ $data->girls_father_name }}
                          </td>
                        </tr>
                        <tr>
                          <td>आमाको पूरा नाम:</td>
                          <td>
                            {{ $data->bridegroom_mother_name_np }}
                          </td>
                          <td>
                            {{ $data->bride_mother_name_np }}
                            
                          </td>
                        </tr>
                        <tr>
                          <td>Full Name of Mother:</td>
                          <td>
                            {{ $data->bridegroom_mother_name_en }}
                          </td>
                          <td>
                            {{ $data->bride_mother_name_en }}
                          </td>
                        </tr>
                        <tr>
                          <td>बाजेको पूरा नाम:</td>
                          <td>
                            {{ $data->grand_father_name_nep }}
                          </td>
                          <td>
                            {{ $data->girls_grand_father_name_nep }}
                          </td>
                        </tr>
                        <tr>
                          <td>Full Name of Grandfather:</td>
                          <td>
                            {{ $data->grand_father_name }}
                          </td>
                          <td>
                            {{ $data->girls_grand_father_name }}
                          </td>
                        </tr>
                      </tbody>
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
                   <div style="width: 80%; border: 1px solid #000; height:80px">
                     
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
