<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
<div id="page">
<page size="A4" class="short">
  <div class="x_panel">
  <div class="x_content">
      <header style="margin-bottom: 20px;">
         <div class="col-md-12" style="margin-top: 40px;">
            <div class="col-md-2">
               <p><img src="{{ asset('images/logo.png') }}"> </p>
            </div>
            <div class="col-md-9">
              <p align="center">अनुसूची-१२ 
                              <br>(नियम ७ संग सम्बन्धित)<br>
                              <u>मृत्यु दर्ताको प्रमाणपत्रको ढाँचा</u> <br>
                              @include('master.panjikaran_print_header_v1')
              </p>
            </div>
         </div>
      </header>

      

    <div class="row top-part" style="margin-bottom: 1px;">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-12">
            <h4 align="center">मृत्यु दर्ताको प्रमाणपत्र</h4>
            <h4 align="center">(Death Registration Certificate)</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <p align="left">
              दर्ता नम्बर (Registration No.): <b>{{$data->registration_no_nep}}</b>
            </p>
          </div>
          <div class="col-md-8">
            <p align="right">
              दर्ता मिति (Registration Date):
              <b>
                वि.सं &nbsp;{{ $data->registration_date_nep }}
               
              ({{ $data->registration_date}} &nbsp;A.D.)
            </b>
            </p>
          </div>
        </div>
      </div>
    </div>

  <div class="row ">
     <div class="col-md-12">
        <div class="table-responsive">                           
           <table class="table table-bordered table-condensed" style="margin-bottom: 5px;">
              <tr>
                 <td>
                    मृतकको पूरा नाम: &nbsp;
                    {{ $data->person_name_nep }}
                    
                 </td>
              </tr>
              <tr>
                 <td>
                    Deceased Full Name (in English):
                    {{ $data->death_person_name }}
                    
                 </td>
              </tr>
              <tr>
                 <td>
                    मृतकको परिचयपत्र न.(नागरिकता /राहदानी न.)/ID of Deceased (Citizenship/Passport):
                    {{ $data->citizenship_no_nep }}
                   
                    /
                    {{ $data->citizenship_no }}
                    
                 </td>
              </tr>
              
              <tr>
                 <td>
                    मृत्यु भएको मिति (Date of Death): 
                    वि.सं
                    {{ $data->death_date_bs_nep }}
                    
                    /
                    (
                    {{ $data->death_date_bs }}
                   &nbsp;
                    A.D.
                    )

                    
                 </td>
              </tr>
              <tr>
                 <td>
                    मृत्यु भएको स्थान (Place of Death):
                    {{ $data->death_place_np }}
                    &nbsp;
                    {{ $data->death_place_en }}
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
                बाजेको पूरा नाम:
                {{ $data->grand_father_name_nep }}
              </td>
            </tr>
            <tr>
              <td>
                Full Name of Grandfather:&nbsp;
                {{ $data->grand_father_name_en }}
              </td>
            </tr>
            <tr>
              <td>
                बुवाको पूरा नाम:
                {{ $data->father_name_nep }}
              </td>
            </tr>
            <tr>
              <td>
                 Full Name of Father:
                 {{ $data->father_name }}
              </td>
            </tr>
            <tr>
              <td>
                आमाको पूरा नाम:
                {{ $data->mother_name_np }}
              </td>
            </tr>
            <tr>
              <td>
                 Full Name of Mother:
                 {{ $data->mother_name_en }}
              </td>
            </tr>
            <tr>
              <td>
                पति / पत्नीको पूरा नाम:
                {{ $data->children_name_nep }}
              </td>
            </tr>
            <tr>
              <td>
                 Full Name of Husband/Wife:
                 {{ $data->spouse_name }}
              </td>
            </tr>
            <tr>
              <td style="padding: 0;">
                <table class="table table-bordered" style="margin-bottom: 0; background: transparent;">
                  <tr>
                    <td rowspan="3">
                      सुचकको विवरण <br>
                      Informant's Name
                    </td>
                    <td>
                      पूरा नाम:
                      {{ $data->applicant_name_nep }}
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Full Name:

                      {{ $data->applicant_name }}
                  </tr>
                  <tr>
                    <td>
                      परिचयपत्र न.(नागरिकता /राहदानी न.)/ ID (Citizenship/Passport):
                      {{ $data->applicant_citizenship_no_np }}
                      /
                      {{ $data->applicant_citizenship_no_np }}
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
        {{ $data->local_registar_name_nep }}                      
      </p>
      <p>
        Name of Local Registar:
        {{ $data->local_registar_name }}                     
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
