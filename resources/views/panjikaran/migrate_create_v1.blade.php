@extends('layouts.app')
@push('styles')
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
<style type="text/css">
   textarea{
          background: url(../images/paper.png)
   }
   .btn-add-members{
       border: 1px solid ;
       color: #fff;
       background-color: #1ac356;
       border-color: #1ac356;
       font-size: 15px;
   }

   .btn-add-members:hover,
   .btn-add-members:active{
      background-color: #29f772;
   }

   .btn-remove-members{
      border: 1px solid;
    color: #fff;
    background-color: #f95656;
    border-color: #f95656;
    font-size: 15px;
   }

   .btn-remove-members:hover,
   .btn-remove-members:active{
      background-color: #ff0000;
   }


.table>tbody>tr.outside-row>td{
   padding:0;
   vertical-align: middle;
}

.td-class{
   border-bottom: 1px solid #222;
   padding: 8px;
}

.td-class + div{
   padding: 8px;
}

#migration-detail-table thead tr > th{
   vertical-align: top;
}

.table>tbody>tr.outside-row>td:last-child{
   padding: 8px;
}
.table>tbody>tr.outside-row>td:last-child > .btn{
   margin-right: 0;
}

</style>
@endpush
@section('content')
<div class="right_col nep" role="main" style="min-height: 1056px;">
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <div class="x_title">
               <h2 class="title-x">बसाइँसराई दर्ताको प्रमाणपत्र </h2>


            </div>
              <form action="{{url('migration')}}" method="post">
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
                              <u>बसाइँसराई दर्ताको प्रमाणपत्रको ढाँचा</u> <br>
                  @include('master.panjikaran_header_v1')

                           </p>
                        </div>
                     </div>
                  </header>
                 
                  <div class="row top-part">
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
                          दर्ता नम्बर (Registration No.): <b><input type="text" size="5" name="registration_no"  class="dashed-input-field"required="required"  placeholder="*"></b>
                        </p>
                      </div>
                      <div class="col-md-8">
                        <p align="right">
                          दर्ता मिति (Registration Date):
                          <b>
                            वि.सं 
                            <input type="text" size="8" name="registration_date" id="registration_date" class="dashed-input-field ndp-nepali-calendar" required="required" placeholder="*" onfocus="showNdpCalendarBox('registration_date')">
                          (<input type="text" placeholder=" *" size="8" name="reg_date" id="reg_date" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('reg_date')">A.D.)
                        </b>
                        </p>
                      </div>
                    </div>
                  </div>
                  </div>
                  <style>
                     .migration-table td{
                        width: 10px;
                     }
                  </style>

                  <div class="row">
                     <div class="col-md-12">
                        <div class="table-responsive">
                           <table class="table table-bordered migration-table">
                              <tbody>
                                 <tr>
                                    <td >
                                       सुचकको पूरा नाम
                                    </td>
                                    <td>
                                       <input type="text" placeholder=" *" required="required" name="applicant_name" class="dashed-input-field">
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>Applicant's Full Name</td>
                                    <td>
                                       <input type="text" placeholder=" *"  name="applicant_name_eng" class="dashed-input-field">
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       स्थायी ठेगाना
                                    </td>
                                    <td>
                                       <input type="text" name="permanent_address_np" class="dashed-input-field">
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>Permanent Address</td>
                                    <td>
                                       <input type="text" name="permanent_address_en" class="dashed-input-field">
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>नागरिकता नं.</td>
                                    <td>
                                       <input type="text" placeholder=" *" required="required" name="citizenship_no" class="dashed-input-field">
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>Citizenship No.</td>
                                    <td>
                                       <input type="text" placeholder=" *"  name="citizen_no_eng" class="dashed-input-field">
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>सुचकको बुवाको पूरा नाम</td>
                                    <td>
                                       <input type="text" name="father_name_np" class="dashed-input-field">
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>Full Name of Father of Informant</td>
                                    <td>
                                       <input type="text" name="father_name_en" class="dashed-input-field">
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>सुचकको आमाको पूरा नाम</td>
                                    <td>
                                       <input type="text" name="mother_name_np" class="dashed-input-field">
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>Full Name of Mother of Informant</td>
                                    <td>
                                       <input type="text" name="mother_name_en" class="dashed-input-field">
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>बसाई सारी आएको ठेगाना</td>
                                    <td>
                                       <input type="text" name="migrated_form_address_np" class="dashed-input-field">
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>Address Migrated Form</td>
                                    <td>
                                       <input type="text" name="migrated_form_address_en" class="dashed-input-field">
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>

                  <div class="row">
                     <div class="col-md-12">
                        <div class="table-responsive">
                           <table class="table table-bordered" id="migration-detail-table">
                              <caption>पारिवारिक विवरण</caption>
                              <thead>
                                 <tr>
                                    <th>क्र.सं.</th>
                                    <th width="40%">पूरा नाम (Full Name)</th>
                                    <th>जन्म मिति (Date of Birth)</th>
                                    <th>सूचक संगको नाता (Relation with Informant)</th>
                                    <th>परिचयपत्र नं./ID (नागरिकता/जन्म दर्ता नं./Ctz. No /Birth Reg. No.)</th>
                                    <th></th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr class="outside-row">
                                    <td>
                                       <div class="td-class">
                                          १
                                       </div>
                                       <div>
                                          1
                                       </div>
                                    </td>
                                    <td>
                                       <div class="td-class">
                                             <input type="text" name="fullname_np[]" class="dashed-input-field">
                                       </div>
                                       <div>
                                          <input type="text" name="fullname_en[]" class="dashed-input-field">
                                       </div>
                                    </td>        
                                    <td>
                                       <div class="td-class">
                                            <input type="text" name="dob_np[]" class="dashed-input-field">
                                       </div>
                                       <div>
                                          <input type="text" name="dob_en[]" class="dashed-input-field">
                                       </div>
                                    </td>      
                                      <td>
                                       <div class="td-class">
                                            <input type="text" name="relation_with_informant_np[]" class="dashed-input-field">
                                       </div>
                                       <div>
                                           <input type="text" name="relation_with_informant_en[]" class="dashed-input-field">
                                       </div>
                                    </td>
                                     <td>
                                       <div class="td-class">
                                            <input type="text" name="primary_legal_id_np[]" class="dashed-input-field">
                                       </div>
                                       <div>
                                            <input type="text" name="primary_legal_id_en[]" class="dashed-input-field">
                                       </div>
                                    </td>
                                      <td style="vertical-align: middle;">
                                        <a href="#" class="btn btn-add-members" id="add-migration-detail">
                                          <i class="fa fa-plus"></i>
                                       </a>
                                    </td>
                                 </tr>

                                 {{-- <tr class="outside-row">
                                    <td colspan="5" style="padding: 0;">
                                       <table class="table table-bordered" style="width: 100%; background: transparent; margin-bottom: 0;">
                                          <tr>
                                          <td>१</td>
                                          <td>
                                             <input type="text" name="fullname_np[]" class="dashed-input-field">
                                          </td>
                                          <td>
                                             <input type="text" name="dob_np[]" class="dashed-input-field">
                                          </td>
                                          <td>
                                             <input type="text" name="relation_with_informant_np[]" class="dashed-input-field">
                                          </td>
                                          <td>
                                             <input type="text" name="primary_legal_id_np[]" class="dashed-input-field">
                                          </td>
                                         
                                       </tr>
                                       <tr>
                                          <td>1</td>
                                          <td>
                                             <input type="text" name="fullname_en[]" class="dashed-input-field">
                                          </td>
                                          <td>
                                             <input type="text" name="dob_en[]" class="dashed-input-field">
                                          </td>
                                          <td>
                                             <input type="text" name="relation_with_informant_en[]" class="dashed-input-field">
                                          </td>
                                          <td>
                                             <input type="text" name="primary_legal_id_en[]" class="dashed-input-field">
                                          </td>
                                       </tr>
                                       </table>
                                    </td>
                                    <td style="vertical-align: middle;">
                                        <a href="#" class="btn btn-add-members" id="add-migration-detail">
                                          <i class="fa fa-plus"></i>
                                       </a>
                                    </td>
                                 </tr> --}}
                                 
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
                        <input type="text" placeholder=" *" required="required" name="local_registar_name" class="dashed-input-field">
                      </p>
                      <p>
                        Name of Local Registar:
                        <input type="text" placeholder=" *"  name="local_registar_name_eng" class="dashed-input-field">
                      </p>
                      
                    </div>
                    <div class="col-md-4">
                       <div style="width: 90%; border: 1px solid #000; height:90px">
                         
                       </div> 
                       <p>कार्यालयको छाप / Official Stamp</p>
                    </div>
                  </div>
                  
                  
                  


                  <div class="col-md-12">
                     <!--views for nibedak detail -->
                     <div class="clearfix"></div>

                     <!-- END -->
                     <hr>
                     <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
                     <center><input type="submit" class="btn btn-success" name="save_migration_sifaris" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@stop

@push('scripts')
<script type="text/javascript">
$(document).ready(function(e) {

   $("#add-migration-detail").click(function(e) {
      e.preventDefault();

      var rowCount = $("#migration-detail-table tbody .outside-row").length + 1;

      rCount = "'" + rowCount + "'";

      var sn = removeQuoteforNepalinumber(convertEnglishToNepali(rCount));  

      var family_member =
      '<tr class="outside-row">'+
         '<td>'+
            '<div class="td-class">'+
               sn+
            '</div>'+
            '<div>'+
               rowCount+
            '</div>'+
         '</td>'+
         '<td>'+
            '<div class="td-class">'+
                  '<input type="text" name="fullname_np[]" class="dashed-input-field">'+
            '</div>'+
            '<div>'+
               '<input type="text" name="fullname_en[]" class="dashed-input-field">'+
            '</div>'+
         '</td>'+
         '<td>'+
            '<div class="td-class">'+
                 '<input type="text" name="dob_np[]" class="dashed-input-field">'+
            '</div>'+
            '<div>'+
               '<input type="text" name="dob_en[]" class="dashed-input-field">'+
            '</div>'+
         '</td>'+      
           '<td>'+
            '<div class="td-class">'+
                 '<input type="text" name="relation_with_informant_np[]" class="dashed-input-field">'+
            '</div>'+
            '<div>'+
                '<input type="text" name="relation_with_informant_en[]" class="dashed-input-field">'+
            '</div>'+
         '</td>'+
          '<td>'+
            '<div class="td-class">'+
                 '<input type="text" name="primary_legal_id_np[]" class="dashed-input-field">'+
            '</div>'+
            '<div>'+
                 '<input type="text" name="primary_legal_id_en[]" class="dashed-input-field">'+
            '</div>'+
         '</td>'+
           '<td style="vertical-align: middle;">'+
             '<a href="#" class="btn btn-remove-members" id="remove-migration-detail">'+
               '<i class="fa fa-minus"></i>'+
            '</a>'+
         '</td>'+
      '</tr>';

         /*'<tr class="outside-row">'+
            '<td colspan="5" style="padding: 0;">'+
            '<table class="table table-bordered" style="width: 100%; background: transparent; margin-bottom: 0;">'+
         "<tr>"+
            '<td>'+sn+'</td>'+
            '<td>'+
               '<input type="text" name="fullname_np[]" class="dashed-input-field">'+
            '</td>'+
            '<td>'+
               '<input type="text" name="dob_np[]" class="dashed-input-field">'+
            '</td>'+
            '<td>'+
               '<input type="text" name="relation_with_informant_np[]" class="dashed-input-field">'+
            '</td>'+
            '<td>'+
               '<input type="text" name="primary_legal_id_np[]" class="dashed-input-field">'+
            '</td>'+
            
         "</tr>"+
         "<tr>"+
            '<td>'+rowCount+'</td>'+
            '<td>'+
               '<input type="text" name="fullname_en[]" class="dashed-input-field">'+
            '</td>'+
            '<td>'+
               '<input type="text" name="dob_en[]" class="dashed-input-field">'+
            '</td>'+
            '<td>'+
               '<input type="text" name="relation_with_informant_en[]" class="dashed-input-field">'+
            '</td>'+
            '<td>'+
               '<input type="text" name="primary_legal_id_en[]" class="dashed-input-field">'+
            '</td>'+
         "</tr>"+
         "</table>"+
         "</td>"+
         '<td style="vertical-align: middle;">'+
            '<a href="#" class="btn btn-remove-members" id="remove-migration-detail">'+
               '<i class="fa fa-minus"></i>'+
            '</a>'+
         '</td>'+
         "</tr>";*/
         

      $("#migration-detail-table").append(family_member);
   });

   $("body").on("click", ".btn-remove-members", function(e) {
      e.preventDefault();
      $(this)
         .parent()
         .parent()
         .remove();
   });
});
</script>

@endpush