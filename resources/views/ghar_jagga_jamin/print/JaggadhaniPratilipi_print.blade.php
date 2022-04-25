<link rel="stylesheet" type="text/css" href="{{ asset('css/custom_print.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

<div id="page" class="short">
<page size="A4" >

  <div class="x_content">
    @include('master.master_header_print_ne',['chalaniNo'=>$data->chalani_no,'patraSankhya'=>$data->patra_sankhya])
<div class="top-part">
    <div class="row title-left">
      <div class="col-md-6">
        {{-- <p align="left"><b><span style="margin-left: 11px;">पत्र संख्या:</span>&nbsp; {{$data->patra_sankya}}</b></p> --}}
       {{-- <p align="left"><b><span style="margin-left: 11px;">चलानी नं.:</span>&nbsp;{{$data->chalani_no}} </b></p> --}}
     </div>
     <div class="col-md-6">
      <p align="right"><b><span <?php echo empty($print_mode)?"":$print_mode;?>>मिति:</span>&nbsp; {{$data->issued_date}}</b></p>
    </div>
  </div>
</div>
  <div class="col-md-12 title-left">
    <div class="col-md-6">

    <p align="left"><b>श्री {{$data->office_chairman}}</b> </p>
    <p align="left"><b>{{$data->office_name}} </b>।</p>
  </div>
  <div class="col-md-6">
  </div>

  </div>





  <div class="col-md-12">
    <p align="center" class="font-size-24">
      <h4 align="center"><b><u>विषय: सिफारिस सम्बन्धमा।</u></b> </h4>
    </p>
  </div>
  <div class="col-md-12 content-para">

    <p align="justify"> उपरोक्त सम्बन्धमा मेरो तथा

     <b>{{$data->land_owner_title}}

     {{$data->land_owner_name}}</b> को नाममा समेत संयुक्त दर्ता श्रेस्ता भएको <b>
     {{$data->palika_name}}


       {{$data->palika_type}} </b>


      वडा नं. <b> {{Helpers::convertNos(auth()->user()->isAdmin)}} </b> (साबिकको ठेगाना <b>{{$data->sabik_address}}</b>) कि.नं. <b> {{$data->kitta_no}} </b>को क्षे.फ. <b>{{$data->area}} </b> भएको जग्गाको जग्गाधनी लाल पुर्जा हराएकोले सोको प्रतिलिपिको सिफारिस गरी पाउँ भनी वडा नं.<b>{{Helpers::convertNos(auth()->user()->isAdmin)}} </b>(साबिकको ठेगाना


      <b> {{$data->person_sabik_address}}</b>) बस्ने

      <b>{{$data->applicant_title}}



      {{$data->applicant_name}} </b>


      ले यस वडा कार्यालयमा निवेदन दिनुभएको हुदाँ सो सम्बन्धमा त्यहाँको नियमानुसार जग्गाधनी प्रमाण पुर्जाको प्रतिलिपि उपलब्ध गराई दिनुहुन सिफारिस गरिन्छ।</p>


  </div>
  <div class="col-md-12">
      <p>निवेदक:<b> {{$data->applicant_name}}</b> </p>

      <p>ना.प्र.नं.: <b>{{$data->citizenship_no}} </b></p>
      <p>जारी मिति: <b>{{$data->citizenship_issued_date}}</b></p>
      <p>पिता: <b>{{$data->father_name}}</b></p>
      <p>बाजे: <b>{{$data->grand_father_name}}</b> </p>
</div>
  <div>
      <p class="btm-last">वडा अध्यक्ष</p>
  </div>

  <!-- <footer>
      <p><b> <?php echo empty($local_state_name)?"":$local_state_name; ?></b>नेपाल , फोन नं.:<b> <?php echo empty($telephone_no)?"":$telephone_no; ?></b>फ्याक्स<b><?php echo empty($fax_no)?"":$fax_no; ?></b></p>
      <p>ईमेल:<b> <?php echo empty($email)?"":$email; ?></b>,वेभसाइट :<b> <?php echo empty($web_site)?"":$web_site;?></b></p>
    </footer> -->
</div>
</page>
</div>

<div class="col-md-12">
 <center>
   <div class="hide-button" style="display: block;">
      <a class="btn btn-fixed" href="{{'home'}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
       <a class="btn btn-fixed"  href="jaggadhanipramanpatrasifaris/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
    <a class="btn btn-fixed" id="print_jagga_dhani_pratilipi_sifaris"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a>


    <a class="btn btn-fixed" href="{{url('jaggadhanipramanpatrasifaris/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
  </div> </center>
  </div>


   <script src="{{ asset('admin/bower_components/jquery/dist/jquery.min.js') }}"></script>

  <script type="text/javascript">


  $('#print_jagga_dhani_pratilipi_sifaris').click(function() {
    $('.hide-button').hide();

    window.print();
    $('.hide-button').show();

});
</script>
