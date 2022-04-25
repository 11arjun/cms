<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

 <div id="page">
      <page size="A4"  class="short">
         <div class="x_panel">
            <div class="x_content">
                        @include('master.master_header_print_ne',['chalaniNo'=>$data->chalani_no,'patraSankhya'=>$data->patra_sankhya])
            	 <div class="row top-part">

    <div class="col-md-6">
     {{-- <p align="left"><b> पत्र संख्या :{{$data->patra_sankhya}} </b></p> --}}

     {{-- <p align="left"><b> चलानी नं. :{{$data->chalani_no}}</b></p> --}}


   </div>
   <div class="col-md-6">
    <p align="right"><b>मिति :{{$data->issued_date}}</b></p>
  </div>
</div>


<div class="row">
  <div class="col-md-12">
    <p align="center" class="font-size-24">
      </p><h4 align="center"><b>विषय: नक्सा उपलब्ध गराई दिने सम्बन्धमा।</b></h4>

  </div>
</div>

<div class="row title-left">
  <div class="col-md-12">
    <p align="left"><b>श्री {{$data->karyalaya_name}}</b>,</p>
    <p align="left"><b> {{$data->karyalaya_district}}।</b></p>

  </div>
</div>




<div class="row">
  <div class="col-md-12 content-para">

    <p>प्रस्तुत विषयमा  <b> {{$data->local_state}}</b> वडा नं.  <b> {{$data->ward}}</b> (साविक

 <b>


                 {{$data->sabik_address}}


        {{$data->sabik_type}}
</b> वडा नं. {{$data->sabik_ward}}) बस्ने
        {{$data->nibedak}} को निवेदनको  आधारमा  <b> {{$data->plot_local_state_name}} </b> अन्तर्गत ({{$data->oda_ko_name}} वडा छुट्टिने) ब्लु प्रिन्ट नक्सा आवश्यक परेको हुँदा उल्लेखित नक्सा उपलब्ध गराईदिनुहुन सिफारिस साथ अनुरोध गरिन्छ।</p>
      </div>


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
      <a class="btn btn-fixed"  href="NaksaController/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
    <a class="btn btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a>
      <a class="btn btn-fixed" href="{{url('NaksaController/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
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
