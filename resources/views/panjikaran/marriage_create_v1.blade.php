@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endpush
@section('content')
<style>
  .marriage-photo{
        width: 60%;
        border: 1px dashed #000; 
        height: 100px;
  }
</style>
<div class="right_col nep" role="main" style="min-height: 1056px;">
  <div class="clearfix"></div>
  <div class="row">


    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">

        
    <div class="x_title">
            <h2 class="title-x"> विवाह दर्ताको प्रमाणपत्र </h2>

            <input type="hidden" name="letter_subject" value="विवाह दर्ताको प्रमाणपत्र">
            
            <div class="clearfix"></div>
</div>
         <form action="{{url('marriagecertificate')}}" method="post">
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
                        @include('master.panjikaran_header_v1')
                      </p>


        </div>
   
    </div>         
      </header>
      <div class="row top-part">
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
                <b><input type="text" size="5" class="dashed-input-field" placeholder="   *" name="reg_no_nep" id="reg_no_nep" required="required"></b>
              </p>
            </div>
            <div class="col-md-8">
              <p align="right">
                दर्ता मिति (Registration Date):
                <b>
                  वि.सं 
                  <input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" size="8" name="reg_date_nep" id="issued_date" required="required" onfocus="showNdpCalendarBox('issued_date')">
                (<input type="text" size="8" name="reg_date" id="reg_date" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('reg_date')">A.D.)
              </b>
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p>
                विवाह मिति (Marriage Date):
                वि.सं 
                <input type="text" size="8" class="dashed-input-field ndp-nepali-calendar" placeholder=" *" required="required" name="date_bs_nep" id="date_bs_nep" onfocus="showNdpCalendarBox('date_bs_nep')">
                (<input type="text" size="8" class=" dashed-input-field" placeholder=" *" required="required" id="date_ad_nep" name="date_ad_nep">)

                <input type="hidden" class="dashed-input-field ndp-nepali-calendar" placeholder=" *"  name="date_bs" id="date_bs" onfocus="showNdpCalendarBox('date_bs')"> 
                <input type="hidden" class=" dashed-input-field" placeholder=" *" id="date_ad"  name="date_ad">
              </p>
              <p>
                विवाह प्रकार (Marriage Type): 
                <input type="text" name="marriage_type_np" class="dashed-input-field" size="10">
                /
                <input type="text" name="marriage_type_en" class="dashed-input-field" size="10">
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
            <table class="table table-bordered">
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
                    <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="husband_name_nep">
                  </td>
                  <td>
                    <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="girls_name_nep">
                  </td>
                </tr>
                <tr>
                  <td>Full Name:</td>
                  <td>
                    <input type="text" class=" dashed-input-field" placeholder=" *"  name="husband_name">
                  </td>
                  <td>
                    <input type="text" class=" dashed-input-field" placeholder=" *"  name="girls_name">
                  </td>
                </tr>
                <tr>
                  <td>जन्म मिति:</td>
                  <td>
                    <input type="text" size="8" class="dashed-input-field ndp-nepali-calendar" placeholder=" *" required="required" name="bridegroom_dob_np" id="bridegroom_dob_np" onfocus="showNdpCalendarBox('bridegroom_dob_np')">
                  </td>
                  <td>
                    <input type="text" size="8" class="dashed-input-field ndp-nepali-calendar" placeholder=" *" required="required" name="bride_dob_np" id="bride_dob_np" onfocus="showNdpCalendarBox('bride_dob_np')">
                  </td>
                </tr>
                <tr>
                  <td>Date of Birth</td>
                  <td>
                    <input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder=" *"  name="bridegroom_dob_en" id="bridegroom_dob_en" onfocus="showNdpCalendarBox('bridegroom_dob_en')">
                    {{-- <input type="text" size="8" class=" dashed-input-field" placeholder=" *" required="required" id="bridegroom_dob_en" name="bridegroom_dob_en"> --}}
                  </td>
                  <td>
                    <input type="text" size="8" class=" dashed-input-field" placeholder=" *" required="required" id="bride_dob_en" name="bride_dob_en">
                  </td>
                </tr>
                <tr>
                  <td>नागरिकता / राहदानी न.</td>
                  <td>
                    <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="bridegroom_citizen_no_nep">
                  </td>
                  <td>
                    <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="bride_citizen_no_nep">
                  </td>
                </tr>
                <tr>
                  <td>Citizenship / Passport No.:</td>
                  <td>
                    <input type="text" name="bridegroom_citizen_no" placeholder=" *"  class="dashed-input-field">
                  </td>
                  <td>
                    <input type="text" placeholder=" *"  name="bride_citizen_no" class="dashed-input-field">
                  </td>
                </tr>
                <tr>
                  <td>स्थायी ठेगाना:</td>
                  <td>
                    <input type="text" name="bridegroom_address_np" class="dashed-input-field">
                  </td>
                  <td>
                    <input type="text" name="bride_address_np" class="dashed-input-field">
                  </td>
                </tr>
                <tr>
                  <td>Permanent Address:</td>
                  <td>
                    <input type="text" name="bridegroom_address_en" class="dashed-input-field">
                    
                  </td>
                  <td>
                    <input type="text" name="bride_address_en" class="dashed-input-field">
                    
                  </td>
                </tr>
                <tr>
                  <td>बुवाको पूरा नाम:</td>
                  <td>
                    <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="father_name_nep">
                  </td>
                  <td>
                    <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="girls_father_name_nep">
                  </td>
                </tr>
                <tr>
                  <td>Full Name of Father:</td>
                  <td>
                    <input type="text" class=" dashed-input-field" placeholder=" *"  name="father_name">
                  </td>
                  <td>
                    <input type="text" class=" dashed-input-field" placeholder=" *"  name="girls_father_name">
                  </td>
                </tr>
                <tr>
                  <td>आमाको पूरा नाम:</td>
                  <td>
                    <input type="text" class="dashed-input-field" name="bridegroom_mother_name_np">
                  </td>
                  <td>
                    <input type="text" class="dashed-input-field" name="bride_mother_name_np">
                    
                  </td>
                </tr>
                <tr>
                  <td>Full Name of Mother:</td>
                  <td>
                    <input type="text" class="dashed-input-field" name="bridegroom_mother_name_en">
                    
                  </td>
                  <td>
                    <input type="text" class="dashed-input-field" name="bride_mother_name_en">
                    
                  </td>
                </tr>
                <tr>
                  <td>बाजेको पूरा नाम:</td>
                  <td>
                    <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="grand_father_name_nep">
                  </td>
                  <td>
                    <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="girls_grand_father_name_nep">
                  </td>
                </tr>
                <tr>
                  <td>Full Name of Grandfather:</td>
                  <td>
                    <input type="text" class=" dashed-input-field" placeholder=" *"  name="grand_father_name">
                  </td>
                  <td>
                    <input type="text" class=" dashed-input-field" placeholder=" *"  name="girls_grand_father_name">
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
            <input type="text" placeholder=" *" required="required" name="local_registrar_name_nep" class="dashed-input-field">
          </p>
          <p>
            Name of Local Registar:
            <input type="text" placeholder=" *"  name="local_registrar_name" class="dashed-input-field">
          </p>
          
        </div>
        <div class="col-md-4">
           <div style="width: 90%; border: 1px solid #000; height:90px">
             
           </div> 
           <p>कार्यालयको छाप / Official Stamp</p>
        </div>
      </div>




               </div>
                <div class="col-md-12">

                  

  <!--views for nibedak detail -->
 {{--  <div class="clearfix"></div>
  <hr> --}}
  {{-- <section class="bibaran">
    <fieldset>

      <legend>निवेदकको विवरण</legend>


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
  </section> --}}
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