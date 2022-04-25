<link rel="stylesheet" type="text/css" href="{{ asset('css/custom_print.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
 @foreach($data as $data)

<div id='page{{$data->id}}'>

<div class="btn-grp hide-button" id="hide-btn-grp">

<a class="btn btn-success"  href="sadakkhanesifaris/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
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
      <div id='page' class="long">
      <page size="A4" >
        <div class="x_content">
          <header <?php echo empty($print_mode)?"":$print_mode;?>>
          <div class="col-md-12" style="margin-top: 40px;">

            <div class="col-md-2">
              <p><img src="{{asset('images/logo.png')}}"> </p>
            </div>

            <div class="col-md-8">

             <p align="center" class="font-size-24"><b> {{$local_state[0]->local_state_name}} </b></p>
             <p align="center" class="font-size-24">
             {{Helpers::convertNos(auth()->user()->isAdmin)}} नं वडा कार्यालय, <?php echo empty($ward_office)?"":$ward_office;?> </b></p>
             <h3 align="center" class="sm-head">{{Helpers::convertNos(auth()->user()->provience_id)}} नं. प्रदेश, नेपाल</h3>

            </div>
            <div class="col-md-2">


            </div>
          </div>
      </header>
      <div class="top-part">
          <div class="row title-left">
            <div class="col-md-6">
             <p align="left"><b><span style="margin-left: 11px;">पत्र संख्या :</span>&nbsp; {{$data->patra_sankya}}</b></p>
             <p align="left"><b><span style="margin-left: 11px;">चलानी नं.:</span>&nbsp; {{$data->chalani_no}}</b></p>
           </div>
           <div class="col-md-6">
            <p align="right"><b><span <?php echo empty($print_mode)?"":$print_mode;?>>मिति:</span>&nbsp; {{$data->issued_date}}</b></p>
          </div>
        </div>

      </div>




        <div class="col-md-12">
          <p align="center" class="font-size-24">
            <h4 align="center"><b><u>विषय: सडक खन्ने स्वीकृति |</u></b> </h4>
          </p>
        </div>
        <div class="col-md-12">
          <p>

           {{$data->person_title}}
           {{$data->person_name}}




          </p>
          <p>
            {{$local_state[0]->local_state_name}}
           </b> वडा न. {{Helpers::convertNos(auth()->user()->isAdmin)}}
         </p>
         <p>
           <?php echo empty($ward_office)?"":$ward_office; ?> |
         </p>

         <p align="left">
          तपाईको त्यस कार्यालयको मिति {{$data->application_submit_date}}  को निवेदन पत्र अनुसार निम्न बमोजिम स्थानको
          {{$data->sadak_location}}  सडक खन्ने अनुमति दिईएको छ | लेखिए बमोजिमको शर्तहरु पालना गरी  यो पत्र प्राप्त भएको मितिले
          {{$data->work_complete_days}}
        दिन भित्र कार्य सम्पन्न गर्नुहोला | </p>
        <p><b>खन्न स्वीकृति प्रदान गरको सडक

          {{$data->swikrit_sadak_name}}
        </b></p>

        <p><b>सडक खन्न स्वीकृति प्रदान गरको इकाइ

          {{$data->swikrit_pradan_unit}}

        </b>बर्ग मिटर</p>
        <p><b>सडक खन्न स्वीकृति प्रदान धरौटी रकम रु.

          {{$data->deposite_amount}}

        </b></p>
      </div>
      <div class="col-sm-12">
        <p><b>शर्तहरु</b></p>
        <p>१. सडक खन्नु अघि खन्ने ठाउँको चारैतिर कमसेकम १०० मिटर टाढाबाट देखिने गरी  १ मिटर अग्लो काठको बार लागाउनु पर्दछ र बारको चारैतिर रातो झण्डा राखी सवारी आवागमन बाधा नपर्ने व्यवस्था मिलाउनु पर्नेछ |</p>
        <p>२. सडक खनेर निस्केको माटो, ढुङ्गा, बालुवा, आदि बाट सवारीको आवागमनमा बाधा नपर्ने व्यवस्था मिलाउनु पर्नेछ | </p>
        <p>३. काम समाप्त भएपछि पुरानै अबस्थामा हुने गरी मर्मत गर्नु पर्दछ| </p>
        <p>४. सम्बन्धित कार्यालयसंग सम्पर्क राखी लाइन पाएपछि मात्र काम सुरु गर्नु पर्नेछ| </p>
        <p>५. महत्वपूर्ण सडक खन्ने स्वीकृतिका हकमा सडक खन्न थालेको दिनमा काम समाप्त गर्नु पर्नेछ | कुनै कारणवश सोही दिनमा सम्पन्न गर्न नसकी रातभर यथावत राख्नुपर्ने भएमा सम्बन्धित कार्यलय /व्यक्तिले यस कार्यलयसंग सम्पर्क राखी ब्लिकिंग लाइट बाली राख्न्नु पर्नेछ | </p>
      </div>

      </div>
      </page>
    </div>

      <page size="A4" >
        <div class="x_content">
        <div class="col-md-12" style="margin-top:20px;">
        <p>६.सडक खन्दा सडक भित्र भूमिगत अबस्थामा रहेको खानेपानी, बिधुत, टेलीफोन आदिसंग सम्बन्धित लाइन टुटफुट हुन गएमा सोको मर्मत गर्ने जिम्मेवारी पनि स्वीकृति लिन खनेका व्यक्ति / संस्थाको नै हुनेछ| </p>

        <p>७.पिच सडक खन्ने काम रातको १० बजेदेखि बिहान ५ बजे सक्नु पर्नेछ | </p>
        <p>८.उक्त कार्य पानी नपरेको दिन गर्नु पर्नेछ | </p>
        <p>९.पाइप बिछ्याउनु पर्ने अबस्थामा सडकभन्दा कम्तीमा १ फिट ६ इन्च तलबाट पाइप बिछ्यानु पर्नेछ | </p>
        <p>१०. सडक खन्ने ठाउँमा पुन: निर्माण गरी पर्ववत आवस्थामा पुर्याउने जिम्मा सम्बन्धित व्यक्ति वा संस्थाको नै हुने छ |</p>
        <p>११.तोकिए बमोजिम धरौटी रकम सम्बन्धनमा प्राबिधिक प्रतिवेदन प्राप्त भए पश्चात फिर्ता गरी ने छ |</p>
        <p>१२.कार्य प्रयोजन समाप्त भएको मितिले ठीक एक वर्षपछि धरौटी रकम फिर्ता हुने छैन |</p>

      </div>
      <div class="col-md-12">
        <div class="col-md-6">
          <p><b> निवेदकको साबिकको ठेगाना </b></p>
          <p><b>
            {{$data->applicant_address}}</p>


           </div>
                    <div class="col-md-6">
                    <p class="btm-last">  वडा अध्यक्ष </p>
          </div>
        </div>
        <div class="col-md-12">
          <p><b> बोधार्थ </b></p>
          <p><b> १. श्री प्राबिधिक शाखा : </b></p>
          <p>माथि उल्लेखित शर्तहरु पालना भए नभएको अनुगमन गरी प्रतिवेदन पेश गर्नु हुन | </p>
          <p><b> २. श्री ट्राफिक प्रहरी कार्यलय : </b></p>
          <p>सवारी साधनको सहजताको लागि अनुरोध छ | </p>
        </div>

      </div>


      </page>

</div>

<div class="col-md-12">
 <center>
      <div class="hide-button" style="display: block;">
     <a class="btn btn-success btn-fixed" href="{{url('home')}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
       <!-- <a class="btn btn-success btn-fixed"  href="sadakkhanesifaris/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
    <a class="btn btn-success btn-fixed" id="print_sadak_khane_swikriti"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a> -->


    <a class="btn btn-success btn-fixed" href="{{url('sadakkhanesifaris/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
  </div>
</center>
  </div>


  <!-- jQuery -->
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
