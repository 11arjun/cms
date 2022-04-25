@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="right_col nep" role="main" style="min-height: 1058px;">
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">

        <div class="x_title">
          <h5 class="title-x"> जन्म  दर्ताको प्रमाणपत्र </h5>
          <input type="hidden" name="letter_subject" value="जन्म  दर्ताको प्रमाणपत्र">
          {{$local_state[0]->local_state_name}}
          <div class="clearfix"></div>
        </div>


          <form action="{{url('birthcertificate')}}" method="post">
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
   <p align="center">अनुसूची-१२ <br>(नियम ७ संग सम्बन्धित)<br>
    <u>जन्म दर्ताको प्रमाणपत्रको ढाँचा</u> <br>
                 @include('master.panjikaran_header_v1')
                 </p>

  </div>

  </div>
</header>

                <div class="row top-part">
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
                          दर्ता नम्बर (Registration No.): <b><input type="text" size="5" name="reg_no_nep"  class="dashed-input-field"required="required"  placeholder="*"></b>
                        </p>
                      </div>
                      <div class="col-md-8">
                        <p align="right">
                          दर्ता मिति (Registration Date):
                          <b>
                            वि.सं 
                            <input type="text" size="8" name="reg_date_nep" id="nepaliDate51" class="dashed-input-field ndp-nepali-calendar" required="required" placeholder="*" onfocus="showNdpCalendarBox('nepaliDate51')">
                          (<input type="text" size="8" name="reg_date_nep" id="nepaliDate51" class="dashed-input-field ndp-nepali-calendar" required="required" placeholder="*" onfocus="showNdpCalendarBox('nepaliDate51')">A.D.)
                        </b>
                        </p>
                      </div>
                    </div>
                  </div>
                  
                </div>
                <div class="row">
                  <div class="col">
                    <div class="table-responsive">                    
                      <table class="table table-bordered">
                        <tr>
                          <td >
                            पूरा नाम: &nbsp;
                            <input type="text" size="30" name="applicant_name_nep" placeholder=" *" required="required" class="dashed-input-field">
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Full Name: &nbsp;
                            <input type="text" size="30" name="applicant_name" placeholder=" *"  class="dashed-input-field">
                          </td>
                        </tr>
                        <tr>
                          <td>
                            जन्म मिति/ Date of Birth: वि.सं 
                            <input type="text" name="birth_date_bs_nep" id="birth_date_bs_nep" placeholder=" *" required="required" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('birth_date_bs_nep')">
                            <input type="hidden" name="birth_date_ad_nep" placeholder=" *" required="required" id="birth_date_ad_nep" class="dashed-input-field">/
                            
                            <input type="hidden" name="birth_date_bs" placeholder=" *"  id="birth_date_bs" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('birth_date_bs')">
                            <input type="text" placeholder=" *"  name="birth_date_ad" id="birth_date_ad" class="dashed-input-field">(A.D.)

                          </td>
                        </tr>
                        <tr>
                          <td>
                            लिङ्ग/Sex: 
                            <input type="text" name="sex_np" class="dashed-input-field"> 
                            /
                            <input type="text" name="sex_en" class="dashed-input-field">
                          </td>
                        </tr>
                        <tr>
                          <td>
                            स्थायी ठेगाना:<input type="text" name="permanent_address_np" class="dashed-input-field">
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Permanent Address: <input type="text" name="permanent_address_en" class="dashed-input-field">
                          </td>
                        </tr>
                        <tr>
                          <td>
                            जन्म स्थान/Birth Place: 
                            <input type="text" name="birth_place_np" size="30" class="dashed-input-field"> 
                            /
                            <input type="text" name="birth_place_en" size="30" class="dashed-input-field">
                          </td>
                        </tr>
                        <tr>
                          <td>
                            बाजेको पूरा नाम:<input type="text" name="grand_father_name_nep" placeholder=" *" required="required"  class="dashed-input-field">
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Full Name of Grandfather:&nbsp;
                            <input type="text" name="grand_father_name" placeholder=" *"  class="dashed-input-field">
                          </td>
                        </tr>
                        <tr>
                          <td style="padding: 0;">
                            <table class="table table-bordered" style="margin-bottom: 0; background: transparent;">
                              <tr>
                                <td rowspan="3">
                                  बुवाको विवरण <br>
                                  (Father's Details)
                                </td>
                                <td>
                                  पूरा नाम:
                                  <input type="text" placeholder=" *" required="required" name="father_name_nep" class="dashed-input-field">
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  Full Name:
                                  <input type="text" name="father_name" class="dashed-input-field" placeholder=" *" >
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  परिचयपत्र न.(नागरिकता /राहदानी न.)/ ID (Citizenship/Passport): 
                                  <input type="text" name="father_citizen_no_nep" placeholder=" *" required="required" class="dashed-input-field">
                                  /
                                  <input type="text" name="father_citizen_no" placeholder=" *"  class="dashed-input-field">
                                </td>
                              </tr>
                              <tr>
                                <td rowspan="3">
                                  आमाको विवरण <br>
                                  (Mother's Details)
                                </td>
                                <td>
                                  पूरा नाम:
                                  <input type="text" name="mother_name_nep" class="dashed-input-field" placeholder=" *" required="required">
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  Full Name:                                  
                                  <input type="text" name="mother_name" placeholder=" *"  class="dashed-input-field">
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  परिचयपत्र न.(नागरिकता /राहदानी न.)/ ID (Citizenship/Passport):
                                  <input type="text" name="mother_citizen_no_nep" placeholder=" *" required="required" class="dashed-input-field"> 
                                  /
                                  <input type="text" name="mother_citizen_no" placeholder=" *"  class="dashed-input-field">

                                </td>
                              </tr>
                              <tr>
                                <td rowspan="3">
                                  सुचकको विवरण <br>
                                  Informant's Name
                                </td>
                                <td>
                                  नाम:
                                  <input type="text" name="nibedak_name_np" class="dashed-input-field">
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  Name:
                                  <input type="text" name="nibedak_name" class="dashed-input-field" required>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  परिचयपत्र न.(नागरिकता /राहदानी न.)/ ID (Citizenship/Passport):
                                  <input type="text" name="nibedak_citizenship_no_np" class="dashed-input-field">
                                  /
                                  <input type="text" name="nibedak_citizenship_no" class="dashed-input-field" required>
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
                      <input type="text" name="local_registrar_name_nep" placeholder=" *" required="required" class="dashed-input-field">
                    </p>
                    <p>
                      Name of Local Registar:
                      <input type="text" name="local_registrar_name" placeholder=" *"  class="dashed-input-field">
                    </p>
                    
                  </div>
                  <div class="col-md-4">
                     <div style="width: 90%; border: 1px solid #000; height:90px">
                       
                     </div> 
                     <p>कार्यालयको छाप / Official Stamp</p>
                  </div>
                </div>


<!--views for nibedak detail -->
<div class="clearfix"></div>

{{-- <section class="bibaran">
<fieldset>

<legend>निवेदकको विवरण</legend>


<div class="form-group">
<label>निवेदकको नाम</label>
<input type="text" name="nibedak_name" class="form-control" required>
</div>
<div class="form-group">
<label>निवेदकको ठेगाना</label><input type="text" name="nibedak_address" required class="form-control">
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

                  <div class="col-md-12">
                    <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
                    <hr>

                    <center><input type="submit" class="btn btn-success" name="save_birth_certificate_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
                 </div>
               </form>
             </div>
           </div>
         </div>
       </div>


@stop
