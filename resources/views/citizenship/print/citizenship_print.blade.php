<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

<div id="page">
<page size="A4"  class="short">
   <div class="x_panel">
   <div class="x_content">
      <div class="row">




    <div class="col-md-12" style="margin-top: 40px;">
      <div class="x_panel">

        <div class="x_title">
          <h2 class="title-x" style="text-align: center;">नेपाली नागरिकताको प्रमाण-पत्र प्रतिलिपि पाऊँ।</h2>


        </div>
          <div class="x_content">
            <div class="row title-left">
              <div class="col-md-12">
                <p>श्रीमान् प्रमुख जिल्ला अधिकारीज्यू</p>
               {{$data->karyalaya}}
                <p>जिल्ला प्रशासन कार्यालय</p>
                <p><b>{{$data->dis_name}}</b>।</p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <p align="center" class="font-size-24">
                  </p><h4 align="center"><b>विषय: नेपाली नागरिकताको प्रमाण-पत्र प्रतिलिपि पाऊँ।
 </b></h4>

                <p></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <p>महोदय,</p>

              </div>

              <div class="col-md-12">
                <p>
                  मैले रजिस्ट्रेट अफिस {{$data->registrate_office_one}}/ {{$data->registrate_office_two}} अन्चलाधिसको  कार्यालय {{$data->anchal_karyalaya}} गोश्वारा कार्यालय  र यसै कार्यालयबाट देहायको विवरण भएको नेपाली नागरिकता प्रमाण-पत्र लिएकोमा सो प्रमाण-पत्रको सक्कल  {{$data->bigrinuko_karan}}
 हुँदा सोको प्रतिलिपि पाउनको लागि सो नागरिकता प्रमाण-पत्रको {{$data->sakkal_nakkal}}
 प्रति संलग्न राखि रु. ५ (पाँच) को टिकट टाँसी सिफारिस सहित यो निवेदन पेश गरेको छु।</p>

              </div>

              <div class="col-md-12">
                <p align="center" class="font-size-24">
                  </p><h4 align="center"><b>मैले नागरिकताको प्रमाण-पत्र लिदाको यस प्रकार छ ।
</b></h4>
                <p></p>
              </div>
            </div>


              <div class=" labell" style="border:  solid 1px #000; padding-top:10px;padding :15px;">

               <div class="row">
                  <div class="col-md-4">
                   १.  ना प्र प नं. :-
                  {{$data->citi_no}}</div>
                   <div class="col-md-4">
                  मिति  :-
                  {{$data->citi_date}}</div>

                  <div class="col-md-4">

                  किसिम  :-
                  {{$data->citi_type}}</div>
                </div>
                <div class="row">
                  <div class="col-md-12">

                   २.  नाम थर :-
                 {{$data->name_nepali}}</div>
                </div>
                <div class="row">
                  <div class="col-md-12"> <span class="eng">
                  FULL NAME (IN BLOCK) :-
                  {{$data->name_english}}</span></div>
                </div>
                <div class="row">
                  <div class="col-md-6">

                   ३.लिङ्ग :-
                 {{$data->gender_nepali}}</div>
                  <div class="col-md-6">
                  Sex :-
                 {{$data->gender_english}}</div>
                </div>
                <div class="row">
                  <div class="col-md-12">

                   ४.जन्म स्थान :-
                 {{$data->birthplace_nepali}}</div>
                </div>
                <div class="row">
                  <div class="col-md-12"> <span class="eng">
                  Place of Birth (in block) :-
                 {{$data->birthplace_english}}</span></div>
                </div>
                <div class="row">
                  <div class="col-md-6">

                   ५.स्थायी बासस्थान: जिल्ला  :-
                 {{$data->citi_dis_name}}</div>
                  <div class="col-md-4">
                  {{$local_state[0]->local_state_name}}</div>

                   <div class="col-md-2">
                  वडा नं.  :-
                 {{$data->citi_ward_no}}</div></div>
                  <div class="row">

                  <div class="col-md-6"> <span class="eng">

                   ५.Permanent Address: District  :-
                  {{$data->citi_dis_english}}</span></div>
                  <div class="col-md-4">
                  Ilam Municipality</div>

                   <div class="col-md-2">
                     <span class="eng">
                  Ward no  :-
                  {{$data->citi_ward_english}}</span></div>
                </div>
                  <div class="row">
                   <div class="col-md-6">

                   ६.जन्म मिति (बि.सं) :-
                {{$data->year_nepali}} साल {{$data->month_nepali}} महिना {{$data->day_nepali}} गते  </div>
                  <div class="col-md-6">
                   <span class="eng">
                   Date of birth (A.D) :-
                  {{$data->year_english}} Year {{$data->month_english}} Month {{$data->day_english}} Day</span></div>
                </div>
                <div class="row">
                  <div class="col-md-6">

                   ७.बाबुको नाम, थर, वतन :-
                  {{$data->father_name}} </div>
                  <div class="col-md-6">

                   नागरिकताको किसिम  :-
                  {{$data->father_citi_type}}</div>
                </div>
                <div class="row">
                  <div class="col-md-6">

                   ८.आमाको  नाम, थर, वतन :-
                 {{$data->mother_name}} </div>
                  <div class="col-md-6">

                   नागरिकताको किसिम  :-
                 {{$data->mother_citi_type}}</div>
                </div>
                <div class="row">

                   <div class="col-md-6">

                   ९ .पतिको  नाम, थर, वतन :-
                 {{$data->spouse_name}} </div>
                  <div class="col-md-6">

                   नागरिकताको किसिम  :-
                 {{$data->spouse_citi_type}}</div>


                </div>



              </div>
            <div class="row">
              <div class="col-md-12">
                <p align="left"></p>
                <p>माथि उल्लेखित विवरण मैले {{$data->karyalaya_name}} कार्यालयबाट लीएको नं. {{$data->rasid_no}} को ना प्र प को व्यहोरा संग दुरुस्त छ।फरक छैन।लेखिएको व्यहोरा झुट्टा ठहरेमा  कानुन बमोजिम सहुँला बुझाउँला ।</p>
              </div>
            </div>
            <div class="row">

                <div class="col-md-6">
                 <table border="1" cellpadding="5" style=" border-color: transparent;">
                    <tbody><tr>
                      <th colspan="2" style="text-align: center">औंठा छाप</th>
                    </tr>
                    </tbody><tbody style=" border:solid 1px #000;">
                    <tr>

                      <th>दायाँ</th>
                      <th>बायाँ</th>

                   </tr>


                      <tr>
                        <td height="100px" width="100px"> </td>
                        <td height="100px" width="100px"> </td>
                      </tr>
                     </tbody>
                  </table>
                </div>

            <!-- Nibedak Block -->

                <div class="col-md-6">


                 <p align="right"><b>भवदिय,</b> </p>
                 <p align="right">निवेदकको दस्तखत </p>
                 <p align="right">नाम/थर {{$data->nibedak_names}}</p>

                 <p align="right">मिति {{$data->nibedan_date}}
                </p>
               </div>

</div>


      </div>
  </div>
</div>
</div>
</div>
</div>
</page>
</div>

<br>
<br>
<br>
<br>
<div id="page" style="margin-left: -6%">
<page size="A4">
   <div class="x_panel">
   <div class="x_content">


          <div class="col-md-12" style="margin-top: 40px;">
               <!-- Sifaris -->

               <p align="center"> नगरपालिकाको प्रतिलिपि ना.प्र.प. का लागि सिफारिस</p>
               <p>

                {{$data->palika_name}} नगरपालिका वडा नं. {{$data->palika_ward}} मा मिति {{$data->palika_date}} मा जन्म भई हाल {{$data->hal_palika}} नगरपालिका वडा नं. {{$data->hal_ward}} मा स्थायी रुपमा बसोबास गरी आएका यसमा लेखिएका {{$data->spouse_option}}
{{$data->spouse_option_name}} को {{$data->child_option}}
वर्ष {{$data->child_age}} को {{$data->title_option}}
 {{$data->title_name}} लाई म चिन्दछु।निजको माग बमोजिम उपयुक्त विवरण भएको नं. {{$data->bibaran_no}} मिति {{$data->bibaran_date}} को नगरिकता प्रमाण-पत्रको सक्कल प्रति {{$data->citi_reason}}
 व्यहोरा साँचो हुँदा प्रतिलिपि दिएमा फरक नपर्ने व्यहोरा सिफारिस गर्दछु।
उक्त विवरण झुठ्ठा ठहरे कानुन बमोजिम सँहुला बुझाउँला।
 </p>


             </div>


             <div class="row">
              <div class="col-md-4"><div style="border: solid 1px #000;  width: 4cm;height:4cm;
padding:30px 0;"><p align="center">दुवै कान देखिने हाल खिचिएको २.५ X ३ से.मी. फोटो</p></div></div>
<div class="col-md-4">

             <p> कार्यालयको नाम र छाप {{$data->office_name}}</p>



           </div>

              <div class="col-md-4">

             <p align="right"> सिफारिस गर्नेको :</p>
             <p align="right">दस्तखत </p>
             <p align="right">नाम/थर {{$data->sifaris_name}}</p>
             <p align="right">पद {{$data->sifaris_post}}</p>


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
      <a class="btn btn-fixed"  href="Citizenship/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
        <a class="btn btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a>
      <a class="btn btn-fixed" href="{{url('Citizenship/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
   </center>
     </div>
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
