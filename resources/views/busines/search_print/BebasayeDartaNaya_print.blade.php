<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
@foreach($data as $data)
<div id="page{{$data->id}}">
<div class="btn-grp hide-button" id="hide-btn-grp">

<a class="btn btn-success"  href="BebasayeDartaNaya/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
<a class="btn btn-success" id="print_certificate{{$data->id}}" onClick="printCertificate({{$data->id}})"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a>
      <a class="btn btn-success print_certificate" id="singlePrint" style="display: none;"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a>
</div>
<script type="text/javascript">
        document.getElementById("singlePrint").addEventListener("click", printSinglePage);
        function printSinglePage() {

          document.getElementById('hide-btn-grp').style.display = "none";
          window.print();
        }

      </script>
      <div id="page">
      <page size="A4"  class="short">
         <div class="x_panel">
         <div class="x_content">

         	    <header>
                        <div class="col-md-12" style="margin-top: 40px;">
                           <div class="col-md-3">
                              <p><img src="{{ asset('images/logo.png') }}"> </p>
                           </div>
                           <div class="col-md-9">
                           </div>
                           <div class="col-md-12 title_header">
                              <p align="center"> <h1 class="name_header">  {{$local_state[0]->local_state_name}} </h1>
                              {{Helpers::convertNos(auth()->user()->isAdmin)}} नं. वडा कार्यालय <p></p>
              </h2><h3 align="center" class="sm-head">, {{$district[0]->district_name}}</h3>
              <h3 align="center" class="sm-head">{{$provience[0]->province_name}}, नेपाल</h3></p>
                           </div>
                        </div>
                     </header>
         <div class="row top-part">
                    <div class="col-md-6">
                     <p align="left"><b>श्री {{$data->p_name}} ज्यू,</b><br>

                      <b>{{$data->p_office}}</b><br>
                       <b>{{$data->p_ward}}</b><br>
                        <b>{{$data->p_address}} ।</b>

                     </p>
                   </div>

                 </div>

            <div class="row">
               <div class="col-md-12">
                <p align="center" class="font-size-24">
                  </p><h4 align="center"><b>विषय:व्यवसाय दर्ता गर्ने बारे ।</b> </h4>
              </div>
            </div>
            <div class="row content-para">
      <p>

      महोदय,
      </p>
      <p>
      तल लेखिए बमोजिमको व्यापार व्यवसाय गर्न निम्न लिखित नामको व्यवसाय मेरो नाममा दर्ता गराउन इच्छुक भएकोले दर्ताको लागि आवश्यक भएको कागजातहरु यसै निवेदनसाथ संलग्न गरी यो निवेदन पेश गरेकोछु । लेखिएको व्यहोरामा कुनै कुरा झुट्टा ठहरे कानुन बमोजिम सहुँला,बुझाउँला ।
      </p>
      <p>
      १. व्यवसायको पुरा नाम (नेपालीमा):- {{$data->bebasaye_name}}
      </p>
      <p>
      २. व्यवसायको पुरा नाम (अंग्रेजीको ठुलो अक्षरमा) :-{{$data->bebasaye_name_english}}
      </p>
      <p>
      ३. व्यवसायको पुरा ठेगाना :- {{$data->bebasaye_district}} जिल्ला {{$data->bebasaye_local_state}} वडा नं {{$data->bebasaye_wardno}} टोल {{$data->bebasaye_tole}} फोननं {{$data->bebasaye_phone}}
      </p>
      <p>
      ४.व्यवसायमा लगाउने पूँजी रु {{$data->bebasaye_amount}} (अक्षरेपीरु {{$data->bebasaye_amount_english}})
      </p>
      <p>
      ५. व्यवसायको उद्देश्य :-
      {{$data->b_type}}



      </p>
      <p>
        ६. व्यवसायले कारोवार गर्ने मुख्य वस्तुको विवरण {{$data->bebasaye_item}}
      </p>
      <p>
        ७. प्रोप्राइटरको पुरा नाम :- {{$data->prop_name}}
      </p>
        <p>
      स्थायी ठेगाना(नागरिकता अनुसार :-(जिल्ला {{$data->prop_jilla}}  {{$data->prop_localstate}} वडा नं {{$data->prop_ward}} टोलको नाम  {{$data->prop_tole}} फोन नं {{$data->prop_phone}} नागरिकता नं {{$data->prop_citi_no}} जिल्ला {{$data->prop_citi_jilla}} ना.प्रजारी मिती {{$data->citi_date}} हालको ठेगाना:-(जिल्ला {{$data->prop_dis}} {{$data->prop_local_state}} वडा  नं  {{$data->prop_wada}} टोलको नाम {{$data->prop_tole_name}}

      </p>

            </div>

      </div>
      </div>
      </page>
      </div>

      <div id="page">
      <page size="A4"  class="short">
         <div class="x_panel">
         <div class="x_content">

              <div class="col-md-12" style="margin-top: 40px;">
                  <p>
                      ८.प्रोप्राइटरको तिन पुस्तेनाम,ठेगाना :-
                      </p>
                      <p>
                      (क) प्रोप्राइटरको बाजेको नाम, ठेगाना :- {{$data->prop_grand}}
                      </p>
                      <p>
                      (ख) प्रोप्राइटरको बाबुको नाम, ठेगाना :- {{$data->prop_father}}
                      </p>
                      <p>
                      (ग) प्रोप्राइटर विवाहित महिला भएमा पतिको नाम,ठेगाना :- {{$data->prop_husband}}

                      </p>
                <div class="col-md-6">



                </div>
                <div class="col-md-6">

                  <p><b>निवेदक</b></p>

                  <div id="other_organization_resiter">

                  <p align="left">प्रोप्राइटरको नाम  :{{$data->owner_prop}} </p>
                  <p align="left">सही : </p>
                </div>


                <table border="1" style=" border-color: transparent;">

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


              <p>
              </p><h4 align="center"><b><u>कबुलियतनामा</u></b> </h4>
              <p></p>
              <p>


      लिखितम् {{$data->owner_grandfather}} को नाती {{$data->owner_grandchild}} को
      {{$data->owner_child}}




      {{$data->owner_add}} बस्ने वर्ष {{$data->owner_age}} को  {{$data->owner_name}} आगे {{$data->owner_business}} कोनामले व्यवसाय दर्ता गर्न मैले त्यस वडा कार्यालयमा दरखास्त दिएकोमा उक्त व्यवसाय सम्बन्धमा प्रचलित ऐन कानुन र यस नगरपालिकाको शर्त तथा नियम समेत पालना गरी काम गर्नेछु। सो पालना गर्ने कुरामा कबुलियत समेत गर्न तपाईंको मंजुर छछैन भनि वडा कार्यालयबाट सोधनी भएकोमा मेरो चित्त बुझ्यो।यसमा प्रचलित ऐन कानुन र यस नगरपालिकाको शर्त तथा नियम उल्लङघन गरेको देखीएमा ऐन कानुन बमोजिम सहुँला,बुझाँउला भनि मेरो मनोमानी राजी खुशी सँग यो कबुलियतनामाको कागज लेखी
       {{$data->business_localaddress}} वडा नं  {{$data->business_ward}} को कार्यालयमा चढाएँ।
      </p>
      <p align="center"> ईंतिसंवत {{$data->b_year}} साल {{$data->b_month}} महिना {{$data->b_day}} गतेरोज {{$data->b_roj}} शुभम् </p>

       <p>
              </p><h4 align="center"><b><u>(सनाखत सम्बन्धी कागजात)</u></b> </h4>
              <p></p>
              <p>
      यसमा लेखिएको फारम तथा कबुलियतनामा म आफै स्वयं {{$data->san_localstate}} को  {{$data->san_ward}} नं वडा कार्यालयमा उपस्थित भइ दर्ता गराएको हुँ । निवेदन सँग संलग्न नागरिकता प्रमाणपत्रको प्रतिलिपी फोटो तथा अन्य कागजातहरु मेरा आफ्नै हुन् । माथी उल्लेखित सम्पुर्ण व्यहोरा समेत साँचो हो । कुनै कुरा फरक परेमा कानुन बमोजिम सहुँला बुझाँउला भनी सनाखत गर्ने ।
      </p>
      <div class="row content-para">
                <div class="col-md-6">
                      <p>
                          प्रोप्राइटरकोसही :-
                      </p>
                      <p>
                          नाम: {{$data->san_name}}
                      </p>
                      <p>
                        मिति:{{$data->san_date}}
                      </p>

                </div>


          </div>
        </div>
          </div>
        </div>
          </page>
        </div>
        <div id="page">
            <page size="A4"  class="short">
               <div class="x_panel">
               <div class="x_content">

                    <div class="col-md-12" style="margin-top: 40px;">


                <h4 align="center"><b><u>टिप्पणी</u></b> </h4>
                <p></p>
                <p align="center">(वडा कार्यालयले मात्र भर्ने) </p>
                <p>
        श्रीमान्
        </p>
        <p>
        {{$data->tip_business}} नामक व्यवसाय {{$data->bebasaye_item}} को नाममा दर्ता गरी पाउन आवश्यक सबै कागजातहरु रितपुर्वक पेश हुन आएकोले माग बमोजिम दर्ता गरिदिन मनासिव रु {{$data->tip_amt}} अक्षरेपी रु {{$data->tip_amount}} राजश्व लिइ निजको नाममा व्यवसाय दर्ता गरी प्रमाणपत्र दिनको निमित्त निर्णयार्थ पेश गरेको छु । </p>




        <div class="row content-para">
                    <div id="other_organization_resiter">
                      <div class="col-md-6">
                    <p align="left"></p>
                    <p align="left">पेश गर्ने  </p>
                    </div>
                  <div class="col-md-6">

                    <p align="left"> </p>
                    <p align="left">सदर गर्ने</p>
                  </div>

                </div>
              </div>


        <!--views for nibedak detail -->
        <div class="clearfix"></div>
                </div>
                </div>
        </div>
        </page>
        </div>

</div>
<div class="col-md-12">
   <center>
     <div class="hide-button">
      <a class="btn btn-success btn-fixed" href="{{url('home')}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
      <!-- <a class="btn btn-success btn-fixed"  href="BebasayeDartaNaya/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
      <a class="btn btn-success btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a> -->
      <a class="btn btn-success btn-fixed" href="{{url('BebasayeDartaNaya/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
      </div>
   </center>
</div>
<!-- jQuery -->
<!-- jQuery 3 -->
@endforeach
<script src="{{ asset('admin/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('js/printPreview.js') }}"></script>
<script type="text/javascript">
function printCertificate(id){
    //alert(id);
    $("#print_certificate"+id).printPreview({
                obj2print:'#page'+id,
                width:'810',
                 style:'<style>.print_certificate{display : inline-block !important;}</style>',

            });
  }
</script>
