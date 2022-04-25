<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
<div id="page">

<page size="A4"  class="short">
   <div class="x_panel">
   <div class="x_content">
      <div class="row">
         <div class="col-md-12" >
            <p align="center"> <b>अनुसूची-१</b></p>
            <p align="center" class="small"> (नियम ३ को उपनियम (१) र (३) नियम ४ को उपनियम (१) र नियम १६ को उपनियम (१) संग सम्बन्धित)  </p>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6">
            <h4>श्रीमान् प्रमुख जिल्ला अधीकारी ज्यू।</h4>
            {{$data->karyalaya}}
            <p><b>जिल्ला प्रशासन कार्यालय </b><br>
              <b>{{$data->office_address}}</b>।
            </p>
         </div>
         <div class="col-md-6">
            <p style="float: left;"><b>{{$provience[0]->province_name}}, नेपाल</b></p>
            <div style="border: solid 1px #000; border-radius: 10px;
               padding:50px 10px;text-align:center;float: right;height: 180px;width: 130px;">
               निवेदकको दुवैकान देखिने पासपोर्ट साइजको फोटो
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <h4 align="center" style="margin-top: -50px;">
               विषय: <u>नेपाली नागरिकताको प्रमाण-पत्र पाऊँ।</u>
            </h4>
            <p><b>महोदय,</b></p>
         </div>
         <div class="col-md-12">
            <p>
               &nbsp;&nbsp;&nbsp;&nbsp;  म वंशजको नाताले / जन्मका आधारले नेपाली नागरीक भएकोले देहायको विवरण खोली नेपाली नागरिकताको प्रमाण-पत्र पाउनको लागि सिफारिस साथ रु ५।- को टिकट टाँसी यो निवेदन पेश गरेको छु।मैले यस अघि नेपाली नागरिकताको प्रमाण-पत्र लिएको छैन।
            </p>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <p>
               नाम थर :
               {{$data->app_full_name}}
            </p>
            <p><span class="eng">
               Full Name (In Block) :
               {{$data->app_full_name_english}}
               </span>
            </p>
            <p>
               लिङ्ग:
               {{$data->sex}}
               <span class="eng">
               Sex:
               {{$data->sex_english}}
               </span>
            </p>
            <p>
               जन्मस्थान:
               {{ $data->place_of_birth}}
            </p>
            <p>
               <span class="eng">
               Place of Birth (In Block) :
               {{$data->place_of_birth_english}}
               </span>
            </p>
            <p>
               स्थायी ठेगाना : जिल्ला {{$data->permanent_address_place}} न.पा.  {{$data->permanent_address_district}} वडा नं. {{$data->permanent_address_ward}}
            </p>
            <p>
               <span class="eng">
               Permanent Address : District {{$data->local_permanent_address}} Municipality\Sub-Metropolis {{$data->local_permanent_address_district}} Ward No {{$data->local_permanent_address_ward}}
               </span>
            </p>
            <p>
               जन्म मिति: {{$data->date_of_birth}}
               साल {{$data->date_of_birth_month}} महिना {{$data->date_of_birth_day}} गते
               &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
               <span class="eng">
               Date of Birth (A.D) {{$data->date_of_birth_english}} Year {{$data->date_of_birth_english_month}} Month {{$data->date_of_birth_english_day}} Day </span>
               <br>
               (शैक्षिक प्रमाण-पत्र हुनेले सोही मिति उल्लेख गर्ने)
            </p>
            <!--  Guardains Info-->
            <p>
               बुबाको नाम, थर : {{$data->name_of_father}}
               ठेगाना :  {{$data->father_address}}
               नागरिकता:
               {{$data->father_citi}}
            </p>
            <p>
               आमाको नाम, थर :  {{$data->name_of_mother}}
               ठेगाना:
               {{$data->mother_address}}
               नागरिकता:
               {{$data->mother_citi}}
            </p>
            <p>
               पति / पत्नीको नाम, थर  :  {{$data->name_of_spouse}}
               ठेगाना:
               {{$data->spouse_address}}
               नागरिकता:
               {{$data->spouse_citi}}
            </p>
            <p>
               संरक्षकको नाम, थर  :  {{$data->sam_name}}  ठेगाना  {{$data->sam_address}}
            </p>
         </div>
         <div class="col-md-12">
            <p align="center"><b>मैले माथि लेखिदिएको व्यहोरा ठिक साँचो हो।झुट्ठा ठहरे कानुन बमोजिम सँहुला, बुझाउँला।</b></p>
         </div>
         <div class="col-md-6">
            <table border="1" style=" border-color: transparent;">
               <tbody>
                  <tr>
                     <td colspan="2" style="text-align: center"><b>औंठा छाप</b></td>
                  </tr>
               </tbody>
               <tbody style=" border:solid 1px #000;">
                  <tr>
                     <td align="center"><b>दायाँ</b></td>
                     <td align="center"><b>बायाँ</b></td>
                  </tr>
                  <tr>
                     <td height="120px" width="120px"> </td>
                     <td height="120px" width="120px"> </td>
                  </tr>
               </tbody>
            </table>
         </div>
         <!-- Nibedak Block -->
         <div class="col-md-6">
            <p><b><u> भवदिय</u></b> </p>
            <p>निवेदकको दस्तखत :</p>
            <p>मिति {{$data->application_date}}</p>
         </div>
      </div>
      </div>
    </div>
</page>

<br>
<br>
</page>

   <page size="A4"  class="short" >
      <div class="x_panel"  >
         <div class="x_content">
            <div class="row">
               <div class="col-md-12" style="margin-top: 40px;">
                  <!-- Sifaris -->
                  <h4 align="center">  नगरपालिकाको सिफारिस </h4>
                  <p>
                     {{$data->local_add}} वडा नं.   {{$data->local_ward}} मा मिति {{$data->appsifaris_date}} मा जन्म भई हाल  {{$data->app_cur_district}} वडा नं.  {{$data->app_cur_np}} मा स्थायी रुपमा बसोबास गरी आएका यसमा लेखिएका
                    {{$data->guardian_title}}
                     {{$data->guardian_name}} को
                     {{$data->child_type}}
                     वर्ष  {{$data->child_age}} को
                      {{$data->child_title}}
                     {{$data->child_name}}  लाई म राम्ररी चिन्दछु।उपयुक्त लेखिए बमोजिमको निजको व्यहोरा मैले जानेबुझे सम्म साँचो हो।निजलाई
                     {{$data->nagarikta_type1}}
                     नागरिकताको प्रमाण-पत्र दिए हुन्छ।उक्त विवरण झुटो ठहरे कानुन बमोजिम सहुँला बुझाउँला।
                  </p>
               </div>
            </div>
            <div class="row">
               <div class="col-md-7">
                  <b>
                     <p>मिति {{$data->app_date}}</p>
                     <p> कार्यालयको नाम र छाप </p>
                  </b>
               </div>
               <div class="col-md-5">
                  <b>
                     <p style="margin-right: 148px;"> <u>सिफारिस गर्नेको :</u></p>
                     <p>दस्तखत </p>
                     <p>नाम,थर {{$data->sifaris_username}}</p>
                     <p>पद {{$data->sifaris_userpost}}</p>
                  </b>
               </div>
            </div>
            <hr>
            <div class="row">
               <div class="col-md-12">
                  <!-- Sifaris -->
                  <p>
                     {{$data->local_add2}} बाट सर्जमिन  सनाखतको लागि प्रेषित  {{$data->local_ward2}} वडा नं. {{$data->app_name}}बस्ने  {{$data->app_name2}} को
                     {{$data->relative_type}}
                     वर्ष  {{$data->app_age}} का
                     {{$data->relative_title}}
                     {{$data->app_child}} ले एन र नियमले ताकेको प्रमाण पेश गर्न नसकेकोले निजलाई स्थलगत सर्जमिन र सनाखतको प्रकृया अवलम्बन गरी वंशजको
                   {{$data->nagarikta_type2}}
                     आधारमा
                     नागरिकता सम्बन्धित निर्णय हुन प्रेषित गरीएको छ।
                  </p>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <p>मिति {{$data->application_date2}}</p>
                  <p> कार्यालयको नाम र छाप </p>
               </div>
               <div class="col-md-6">
                  <p align="right">दस्तखत </p>
                  <p align="right">नाम,थर {{$data->off_name}}</p>
                  <p align="right">पद {{$data->off_post}}</p>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h4 align="center"><u> कार्यालयले भर्ने </u></h4>
                  <div class="table-responsive">
                     <table border="1" class="table table-bordered">
                        <tbody>
                           <tr>
                              <td>
                                 <p>
                                   {{$data->nibedak_type}}
                                    {{$data->nibedak}} मेरो आफ्नो
                                    {{$data->nibedak_relation}} नाताको हुन्।निजलाई वंशजको
                                   {{$data->nagarikta_type}}
                                    <!-- वंशजको नाताले /जन्मको आधारले -->
                                    नेपाली नागरिकताको प्रमाण-पत्र दिएमा पछि सम्म फरक पर्ने छैन।फरक परेमा कानुन बमोजिम सँहुला बुझाउँला भनी कार्यालयमा उपस्थित भई सनाखत सहीछाप गर्नेको
                                 </p>
                                 <p> नाम {{$data->s_name}}</p>
                                 <p> ना.प्र.प.नं. {{$data->s_nagarikta}}</p>
                                 <p> सहीछाप </p>
                                 <p> मिति {{$data->s_date}}</p>
                              </td>
                              <td>
                                 <p>माथिको विवरण बमोजिम मेरो रोहवरमा सनाखत सहीछाप भएको ठिक साँचो हो।माथि विवरण ठिक दुरुस्त  छ, फरक छैन।फरक परेमा कानुन बमोजिम सँहुला बुझाउँन मञ्जुर छु भनी सहीछाप गर्ने निवेदक   </p>
                                 <p> नाम {{$data->s2_name}}</p>
                                 <p> सहीछाप </p>
                                 <p> मिति {{$data->s2_date}}</p>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </page>
</div>
<br>
<div id="page">
   <page size="A4"  class="short">
      <div class="x_panel">
         <div class="x_content">
            <div class="row">
               <div class="col-md-12" style="margin-top: 40px;">
                  <table border="1" class="table table-bordered">
                     <tbody>
                        <tr>
                           <td colspan="2">
                              <h4 align="center"><u>
                                 सर्जमिनमा बस्नेको नाम, थर, ठेगाना</u>
                              </h4>
                              <!--  -->
                              <table class="table table-bordered" style=" background:transparent;" cellpadding="5" id="sarjamin_table">
                                 <tbody>
                                    <tr>
                                       <td>
                                          {!!$data->si_name!!}
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                              <!--  -->
                           </td>
                        </tr>
                     </tbody>
                  </table>
                  <table border="1" class="table table-bordered">
                     <tbody>
                        <tr>
                           <td colspan="2">
                              <h4 align="center"><u>
                                 सनाखत गर्ने व्यक्तिको  नाम, थर, ठेगाना</u>
                              </h4>
                              <!--  -->
                              <table class="table-bordered table" cellpadding="5" style="background:transparent;" id="sanakhat_table">
                                 <tbody>
                                    <tr>
                                       <td>
                                          {!!$data->se_name!!}
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                              <!--  -->
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <h4 align="center"><u>निर्णय  </u></h4>
               <div>
                  यस अनुसूचीमा भएको सिफारिस निवेदकको  {{$data->sifaris_nibedan}}का सनाखत सहीछाप र संलग्न निम्न प्रमाण-पत्रका आधारमा निवेदकलाई वंशजको
                 {{$data->nagarikta_type3}}
                  नेपाली नागरिकताको प्रमाण-पत्र दिन उपयुक्त हुने देखि निर्णयार्थ पेश गरेको छु।
               </div>
               <h4 align="center"><u>संलग्न प्रमाणपत्रहरु</u></h4>
               <!--  -->
               <table cellpadding="5" style="background:transparent;" class="table table-bordered" id="paper_table">
                  <tbody>
                     <tr>
                        <td>{!!$data->paper_name!!} </td>
                     </tr>
                  </tbody>
               </table>
               <!--  -->
            </div>
         </div>
         <div class="row">
            <b>
               <div class="col-md-4">
                  <p>वितरित ना. प्र. नं. {{$data->bitarit_num}}
                  </p>
                  <p>
                     मिति {{$data->bitarit_date}}
                  </p>
               </div>
               <div class="col-md-3">
                  <p>सनाखत गराउने </p>
               </div>
               <div class="col-md-3">
                  <p>पेश गर्ने </p>
               </div>
               <div class="col-md-2">
                  <p>सदर गर्ने  </p>
               </div>
            </b>
         </div>
      </div>
   </page>
</div>
<div class="col-md-12">
   <center>
        <div class="hide-button">
      <a class="btn btn-fixed" href="{{url('home')}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
      <a class="btn btn-fixed"  href="CitizenshipCertificate/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
        <a class="btn btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a>
      <a class="btn btn-fixed" href="{{url('CitizenshipCertificate/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
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
