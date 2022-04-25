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
      {{-- <p align="left"><b>चलानी नं. :{{$data->chalani_no}}</b></p> --}}


    </div>
    <div class="col-md-6">
      <p align="right"><b>मिति :{{$data->issued_date}}</b></p>
    </div>
  </div>
<div class="row">
  <div class="col-md-12">
    <p align="center" class="font-size-24">
      </p><h4 align="center"><b>बिषय :श्रेस्ता उपर सिफारिस ।</b>

        <!-- Data for nibedak details -->
        <input type="hidden" name="letter_subject" value="मानो चामोल सिफारिस">
        <!--END -->


      </h4>
    <p></p>

  </div>
</div>
<div class="row title-left">
  <div class="col-md-12">
    <p align="left"><b>श्री {{$data->karyalaya_name}}</b>,</p>
    <p align="left"><b> {{$data->karyalaya_district}}</b>।</p>

  </div>


</div>

<div class="row">
  <div class="col-md-12 content-para">
    <p>

   उपरोक्त विषयमा साविक



      <!--SABIK ADDRESS START -->

              {{$data->sabik_address}}



      <!-- SABIK ADDRESS END -->



      <b>{{$data->sabik_type}}

</b>




      वडा नं. {{$data->sabik_ward}} हाल {{$data->local_state}} वडा नं.  <b> {{$data->ward}}</b>
      बस्ने
      <b> {{$data->owner_name}}</b> को नाममा {{$data->of_name}} {{$data->of_address}} मा दर्ता कायम रहेको तपशिलमा उल्लेखित कित्ता जग्गाहरुको श्रेष्ता कार्यालय प्रयोजनको लागि आवश्यक परेको हुदा उक्त कित्ता जग्गाहरुको श्रेष्ता तयार गरी पठाईदिनु हुन सिफारिस साथ अनुरोध गरिन्छ ।


      </p>
    </div>
  </div>









     <div class="text-right btm-last">
    <p>{{$data->hakim_ko_name}}</p>


    <p>  <b>{{$data->officer}}

</b> </p>
  </div>




            </div>
        </div>
    </page>
</div>
<div class="col-md-12">
   <center>
     <div class="hide-button">
      <a class="btn btn-fixed" href="{{url('home')}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
      <a class="btn btn-fixed"  href="ShrestaUparSifarisController/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
        <a class="btn btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a>
      <a class="btn btn-fixed" href="{{url('ShrestaUparSifarisController/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
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
