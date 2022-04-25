<link rel="stylesheet" type="text/css" href="{{ asset('css/custom_print.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
 @foreach($data as $data)
 <div id='page{{$data->id}}' class="short">
 <div class="btn-grp hide-button" id="hide-btn-grp">

 <a class="btn btn-success"  href="nepalsarkarbatokayem/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
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
<page size="A4" >
<div class="x_content">
  <header <?php echo empty($print_mode)?"":$print_mode;?>>
            <div class="col-md-12"  style="margin-top: 40px;">

              <div class="col-md-2">
                <p><img src="{{asset('images/logo.png')}}"> </p>
              </div>

              <div class="col-md-8">

               <p align="center" class="font-size-24"><b>{{$local_state[0]->local_state_name}} </b></p>
               <p align="center" class="font-size-24">
                <b> {{Helpers::convertNos(auth()->user()->isAdmin)}} नं वडा कार्यालय, <?php echo empty($ward_office)?"":$ward_office;?> </b></p>
                <h3 align="center" class="sm-head">{{Helpers::convertNos(auth()->user()->provience_id)}} नं. प्रदेश, नेपाल</h3>

              </div>
              <div class="col-md-2">


              </div>
            </div>
</header>
<div class="top-part">
            <div class="row title-left">
              <div class="col-md-6">
               <p align="left"><b><span style="margin-left: 11px;">पत्र संख्या:</span>&nbsp; {{$data->patra_sankya}}</b></p>
                <p align="left"><b><span style="margin-left: 11px;">चलानी नं.:</span>&nbsp; {{$data->chalani_no}}</b></p>
             </div>
             <div class="col-md-6">
              <p align="right"><b><span >मिति:</span>&nbsp; {{$data->issued_date}}</b></p>
             </div>
           </div>
</div>
           <div class="col-md-12 title-left">

            <p align="left">&nbsp;श्री <b>{{$data->office_chairman}}</b></p>
                <p align="left"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$data->office_name}}</b>|</p>

           </div>




          <div class="col-md-12">
            <p align="center" class="font-size-24">
              <h4 align="center"><b><u>विषय: सिफारिस सम्बन्धमा</u></b> </h4>
            </p>
          </div>
          <div class="col-md-12 content-para">

            <p align="left"> उपरोक्त सम्बन्धमा मेरो नाममा दर्ता श्रेस्ता  भएको <b> {{$local_state[0]->local_state_name}}</b> वडा नं.<b>  {{Helpers::convertNos(auth()->user()->isAdmin)}} </b>  (साबिकको ठेगाना <b>{{$data->sabik_address}}</b>)कि.न. <b> {{$data->kitta_no}} </b>को क्षे.फ़. <b> {{$data->area}} </b>जग्गामध्ये पूर्वतर्फबाट <b>{{$data->jagga_breadth}}</b> चौडाइ र <b>{{$data->jagga_length}} </b>फिट लम्बाई नेपाल सरकारको नाममा कित्ताकाट गरी नेपाल सरकारको नाममा बाटो कायम गर्न सिफारिस गरी पाउँ भनी जग्गाधनी   <b>
            {{$data->person_title}}
             {{$data->person_name}} </b>
               ले यस वडा कार्यलयमा निवेदन दिनु भएको हुदाँ सो सम्बन्धमा प्राबिधिक प्रतिवेदन अनुसार कित्ताकाट गर्न मिल्ने देखिएकोले प्राबिधिक फिल्ड निरीक्षण प्रतिवेदन सहित पठाइएको छ | त्यहाको नियमानुसार नेपाल सरकारको नाममा बाटो कायम गरिदिनुहुन सिफारिस गरिन्छ |</p>
          </div>
            <p class="btm-last">  वडा अध्यक्ष </p>
          <div class="col-md-12">


            <!-- <center><input  type="submit" class="btn btn-success" name="save_nepal_sarkar_bato_kayem_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center> -->
          </div>
        </div>

    <footer>
      <!-- <p><b> <?php echo empty($local_state_name)?"":$local_state_name; ?></b>नेपाल , फोन नं.:<b> <?php echo empty($telephone_no)?"":$telephone_no; ?></b>फ्याक्स<b><?php echo empty($fax_no)?"":$fax_no; ?></b></p>
      <p>ईमेल:<b> <?php echo empty($email)?"":$email; ?></b>,वेभसाइट :<b> <?php echo empty($web_site)?"":$web_site;?></b></p> -->
    </footer>
</page>

</div>


    <div class="col-md-12">
 <center>
  <div class="hide-button" style="display: block;">
    <a class="btn btn-success btn-fixed" href="{{url('home')}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
       <!-- <a class="btn btn-success btn-fixed"  href="nepalsarkarbatokayem/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
    <a class="btn btn-success btn-fixed" id="print-window"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a> -->


    <a class="btn btn-success btn-fixed" href="{{url('nepalsarkarbatokayem/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
  </div></center>

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
