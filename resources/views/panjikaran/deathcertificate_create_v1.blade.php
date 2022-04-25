@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="right_col nep" role="main" style="min-height: 1056px;">
   <div class="clearfix"></div>
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <div class="x_title">
               <h2 class="title-x"> मृत्यु दर्ताको प्रमाणपत्र </h2>
               <div class="clearfix"></div>
            </div>
           <form action="{{url('deathcertificate')}}" method="post">
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
                              <u>मृत्यु दर्ताको प्रमाणपत्रको ढाँचा</u> <br>
                              @include('master.panjikaran_header_v1')
                           </p>
                        </div>
                     </div>
                  </header>

                  <div class="row top-part">
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
                          दर्ता नम्बर (Registration No.): <b><input type="text" size="5" name="registration_no_nep"  class="dashed-input-field"required="required"  placeholder="*"></b>
                        </p>
                      </div>
                      <div class="col-md-8">
                        <p align="right">
                          दर्ता मिति (Registration Date):
                          <b>
                            वि.सं 
                            <input type="text" size="8" name="registration_date_nep" id="registration_date_nep" class="dashed-input-field ndp-nepali-calendar" required="required" placeholder="*" onfocus="showNdpCalendarBox('registration_date_nep')">
                          (<input type="text" size="8" name="registration_date" id="registration_date" class="dashed-input-field ndp-nepali-calendar" required="required" placeholder="*" onfocus="showNdpCalendarBox('registration_date')">A.D.)
                        </b>
                        </p>
                      </div>
                    </div>
                  </div>
                  </div>

                  <div class="row">
                     <div class="col-md-12">
                        <div class="table-responsive">                           
                           <table class="table table-bordered">
                              <tr>
                                 <td>
                                    मृतकको पूरा नाम: &nbsp;
                                    <input type="text" placeholder=" *" required="required" name="person_name_nep" class="dashed-input-field">
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    Deceased Full Name (in English):
                                    <input type="text" placeholder=" *"  name="death_person_name" class="dashed-input-field">
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    मृतकको परिचयपत्र न.(नागरिकता /राहदानी न.)/ID of Deceased (Citizenship/Passport):
                                    <input type="text" placeholder=" *" required="required" name="citizenship_no_nep" class="dashed-input-field">
                                    /
                                    <input type="text" placeholder=" *"  name="citizenship_no" class="dashed-input-field">
                                 </td>
                              </tr>
                              {{-- <tr>
                                 <td>
                                    ID of Deceased (Citizenship/Passport):
                                    <input type="text" placeholder=" *"  name="citizenship_no" class="dashed-input-field">
                                 </td>
                              </tr> --}}
                              <tr>
                                 <td>
                                    मृत्यु भएको मिति (Date of Death): 
                                    वि.सं
                                    <input type="text" placeholder=" *" required="required" name="death_date_bs_nep" id="death_date_bs_nep" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('death_date_bs_nep')">
                                    /
                                    (
                                    <input type="text" placeholder=" *" required="required" name="death_date_ad_nep" class="dashed-input-field" id="death_date_ad_nep"> &nbsp;
                                    A.D.
                                    )

                                    <input type="hidden" placeholder=" *"  name="death_date_bs" id="death_date_bs" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('death_date_bs')">
                                    <input type="hidden" placeholder=" *"  name="death_date_ad" id="death_date_ad" class="dashed-input-field"> 
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    मृत्यु भएको स्थान (Place of Death):
                                    <input type="text" name="death_place_np" class="dashed-input-field"> &nbsp;
                                    <input type="text" name="death_place_en" class="dashed-input-field">
                                 </td>
                              </tr>
                              <tr>
                                <td>
                                  स्थायी ठेगाना:
                                  <input type="text" name="permanent_address_np" class="dashed-input-field">
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  Permanent Address: 
                                  <input type="text" name="permanent_address_en" class="dashed-input-field">
                                </td>
                              </tr>
                              <tr>
                              <td>
                                बाजेको पूरा नाम:
                                <input type="text" placeholder=" *" required="required" name="grand_father_name_nep" class="dashed-input-field">
                              </td>
                            </tr>
                            <tr>
                              <td>
                                Full Name of Grandfather:&nbsp;
                                <input type="text" name="grand_father_name_en" placeholder=" *"  class="dashed-input-field">
                              </td>
                            </tr>
                            <tr>
                              <td>
                                बुवाको पूरा नाम:
                                  <input type="text" placeholder=" *" required="required" name="father_name_nep" class="dashed-input-field">
                              </td>
                            </tr>
                            <tr>
                              <td>
                                 Full Name of Father:
                                  <input type="text" name="father_name" class="dashed-input-field" placeholder=" *" >
                              </td>
                            </tr>
                            <tr>
                              <td>
                                आमाको पूरा नाम:
                                  <input type="text" placeholder=" *" required="required" name="mother_name_np" class="dashed-input-field">
                              </td>
                            </tr>
                            <tr>
                              <td>
                                 Full Name of Mother:
                                  <input type="text" name="mother_name_en" class="dashed-input-field" placeholder=" *" >
                              </td>
                            </tr>
                            <tr>
                              <td>
                                पति / पत्नीको पूरा नाम:
                                   <input type="text" placeholder=" *" required="required" name="children_name_nep" class="dashed-input-field">
                              </td>
                            </tr>
                            <tr>
                              <td>
                                 Full Name of Husband/Wife:
                                  <input type="text" placeholder=" *"  name="spouse_name" class="dashed-input-field">
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
                                      <input type="text" placeholder=" *" required="required" name="applicant_name_nep" class="dashed-input-field">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Full Name:
                                       <input type="text" placeholder=" *"  name="applicant_name" class="dashed-input-field">
                                  </tr>
                                  <tr>
                                    <td>
                                      परिचयपत्र न.(नागरिकता /राहदानी न.)/ ID (Citizenship/Passport):
                                      <input type="text" name="applicant_citizenship_no_np" class="dashed-input-field">
                                      /
                                      <input type="text" name="applicant_citizenship_no_en" class="dashed-input-field" required>
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
                        <input type="text" placeholder=" *" required="required" name="local_registar_name_nep" class="dashed-input-field">
                      </p>
                      <p>
                        Name of Local Registar:
                        <input type="text" placeholder=" *"  name="local_registar_name" class="dashed-input-field">
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
               <div class="col-md-12">
                  <!--views for nibedak detail -->
                  <div class="clearfix"></div>
                 
                  
                  <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
                  <!-- END -->
                  <hr>
                  <center><input type="submit" class="btn btn-success" name="save_death_registration_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>


@stop