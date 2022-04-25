<link rel="stylesheet" type="text/css" href="{{ asset('css/custom_print.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

<div id='page' class="short">
  <page size="A4" >
   <div class="x_content">
    @include('master.master_header_print_ne',['chalaniNo'=>$data->chalani_no,'patraSankhya'=>$data->patra_sankhya])
<div class="top-part">
    <div class="row title-left">
      <div class="col-md-6">
       {{-- <p align="left"><b><span style="margin-left: 11px;">पत्र संख्या:</span>&nbsp; {{$data->patra_sankya}}</b></p> --}}
       {{-- <p align="left"><b><span style="margin-left: 11px;">चलानी नं.:</span>&nbsp; {{$data->chalani_no}}</b></p> --}}
     </div>
     <div class="col-md-6">
      <p align="right"><b><span <?php echo empty($print_mode)?"":$print_mode;?>>मिति:</span>&nbsp;{{$data->issued_date}} </b></p>
    </div>
  </div>
</div>
  <div class="col-md-12 title-left">

    <p align="left">श्री<b>{{$data->office_chairman}}</b></p>
    <p align="left"><b>{{$data->office_name}}</b>|</p>

  </div>




  <div class="col-md-12">
    <p align="center" class="font-size-24">
      <h4 align="center"><b><u>विषय: सिफारिस सम्बन्धमा</u></b> </h4>
    </p>
  </div>
  <div class="col-md-12 content-para ">


    <p align="justify"> उपरोक्त सम्बन्धमा <b>{{$local_state[0]->local_state_name}}</b> वडा न. <b>{{Helpers::convertNos(auth()->user()->isAdmin)}}</b> स्थित <b>{{$data->person_title}} {{$data->person_name}}</b> को नाममा रहेको कि.नं. <b>{{$data->kitta_no}}</b> क्षे.फ़. <b>{{$data->area}}</b>  मा बनेको घर भत्किई पाताल भएकोले सोही अनुसारको सिफारिस गरी पाउँ भनी यस वडा कार्यालयमा पर्न आएको निवेदन सम्बन्धमा उल्लेखित कि.नं. मा बनेको घर पाताल भएको व्यहोराको सिफारिस गरिन्छ |</p>


  </div>
  <div class="col-md-12">
    <p class="btm-last">  वडा अध्यक्ष </p>
  </div>

</div>

<!-- <footer>
  <p><b> <?php echo empty($local_state_name)?"":$local_state_name; ?></b>नेपाल , फोन नं.:<b> <?php echo empty($telephone_no)?"":$telephone_no; ?></b>फ्याक्स<b><?php echo empty($fax_no)?"":$fax_no; ?></b></p>
  <p>ईमेल:<b> <?php echo empty($email)?"":$email; ?></b>,वेभसाइट :<b> <?php echo empty($web_site)?"":$web_site;?></b></p>
</footer> -->
</page>
</div>


<div class="col-md-12">
 <center>
  <div class="hide-button" style="display: block;">
     <a class="btn btn-fixed" href="{{'home'}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>

  <a class="btn btn-fixed"  href="gharpatalsifaris/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
  <a class="btn btn-fixed" id="print_ghar_patal_sifaris"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a>


 <a class="btn btn-fixed" href="{{url('gharpatalsifaris/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
  </div> </center>
</div>


<script src="{{ asset('admin/bower_components/jquery/dist/jquery.min.js') }}"></script>

  <script type="text/javascript">


  $('#print_ghar_patal_sifaris').click(function() {
    $('.hide-button').hide();

    window.print();
    $('.hide-button').show();

});
</script>
