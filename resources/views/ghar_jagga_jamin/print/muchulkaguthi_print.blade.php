<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

 <div id="page">
      <page size="A4"  class="short">
         <div class="x_panel">
            <div class="x_content">
           @include('master.master_header_print_ne',['chalaniNo'=>$data->chalani_no,'patraSankhya'=>$data->patra_sankhya])
       <div class="row top-part">
    <div class="col-md-6">
      {{-- <p align="left"><b>पत्र संख्या :{{$data->patra_sankhya}} </b></p> --}}
      {{-- <p align="left"><b>चलानी नं. :{{$data->chalani_no}} --}}
      </b></p>


    </div>
    <div class="col-md-6">
      <p align="right"><b>मिति :{{$data->issued_date}}</b></p>
    </div>
  </div>


  <div class="row">

    <div class="col-md-12">
      <p align="center" class="font-size-24">
        </p><h4 align="center"><b>विषय: सर्जमिन गरी मुचुल्का पठाएको सम्बन्धमा।</b></h4>

      <p></p>
    </div>
  </div>


  <div class="row title-left">
    <div class="col-md-12">
      <p align="left">श्री {{$data->office_name}} ,</p>
      <p> नगर कार्यपालिकाको कार्यालय</p>
      <p align="left">  {{$data->office_address}}|</p>

    </div>
  </div>
  <br>

  <div class="row">


    <div class="col-md-12">

      <p> उपरोक्त सम्बन्धमा <b> {{$data->landowner_name}}
      </b> गुठीको नाममा मालपोत कार्यालय {{$data->malpot_address}} मा दर्ता कायम रहेको साविक

      {{$data->landsabik_address}}
            <!--  -->




      <b> {{$data->landsabik_type}}

</b> वडा नं. <b>{{$data->landsabik_ward}}</b>


      हाल  <b>{{$data->landlocal_states}}</b> वडा नं. <b>{{$data->landwards}}</b>



      को कित्ता नं. <b>{{$data->kitta_no}} </b> क्षेत्रफल क्रमश  <b>{{$data->area}} </b> को जग्गामा साविक

      <!--  -->
              {{$data->appsabik_address}}
      <!--  -->






      <b>{{$data->appsabik_type}}

</b> वडा नं. <b>{{$data->appsabik_ward}}</b> हाल  <b>{{$data->applocal_states}}</b> वडा नं. <b>{{$data->appward}}</b> बस्ने <b>{{$data->applicant_name}} </b> ले आवासीय घर निर्माण गर्ने हुनु भएको हुँदा सो सम्बन्धमा भएको सर्जमिन मुचुल्का यसै पत्र साथ संलग्न गरी पठाएको व्यहोरा जानकारी गराइन्छ।
    </p>

  </div>




  <!-- बनाउनरनियमित -->



</div>
 <div class="text-right btm-last">
  <p>{{$data->hakim_ko_name}}</p>


  <p> <b> {{$data->officer}}

 </b></p>
</div>
</div>
</div>
</page>
 </div>
 <div class="col-md-12">
   <center>
    <div class="hide-button">
      <a class="btn btn-fixed" href="{{url('home')}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
      <a class="btn btn-fixed"  href="MuchulkaGuthiController/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
      <a class="btn btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a>
      <a class="btn btn-fixed" href="{{url('MuchulkaGuthiController/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
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
