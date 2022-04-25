<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

<div id="page">
     <page size="A4"  class="short">
        <div class="x_panel">
           <div class="x_content">
@include('master.master_header_print_ne',['chalaniNo'=>$data->chalani_no,'patraSankhya'=>$data->patra_sankhya])
<div class="top-part">
       <div class="row title-left">
        <div class="col-md-6">
         {{-- <p align="left"><b><span style="margin-left: 11px;">पत्र संख्या:</span>&nbsp;{{$data->patra_sankhya}}</b></p> --}}
       </div>
       <div class="col-md-6">
       </div>
     </div>


     <div class="row title-left">
      <div class="col-md-6">
        {{-- <p align="left"><b><span style="margin-left: 11px;">चलानी नं.:</span>&nbsp;{{$data->chalani_no}}</b></p> --}}


      </div>
      <div class="col-md-6">
        <p align="right"><b><span <?php echo empty($print_mode)?"":$print_mode;?>>मिति:</span>&nbsp;{{$data->issued_date}}</b></p>
      </div>
    </div>
  </div>
  <div class="row title-left">
    <div class="col-md-12">
     <b> <p>श्री भूमि सुधार तथा मालपोत कार्यालय,
     </p>
   </b><p><b>{{$district[0]->district_name}}</b></p></div>
   </div>
   <div class="row">

    <div class="col-md-12">
      <p align="center" class="font-size-24">
        </p><h4 align="center"><b>विषय: सिफारिस सम्बन्धमा।</b></h4>
        <input type="hidden" name="letter_subject" value="सिफारिस सम्बन्धमा">
      <p></p>
    </div>
  </div>
  <div class="row">


    <div class="col-md-12">

      <p>
        उपरोक्त सम्बन्धमा <b>{{$local_state[0]->local_state_name}}</b> वडा नं. <b>{{Helpers::convertNos(auth()->user()->isAdmin)}}</b> बस्ने <b>{{$data->person_name}}</b> ले मेरो नाउँमा मालपोत कार्यालय, <b>{{$data->malpot_name}}</b> मा  दर्ता भएको साविक


        <!--  -->

                  <b>{{$data->sabik_address}}</b>
                <!--  -->




        <b>{{$data->sabik_type}}</b>
</b> वडा नं. <b>{{$data->sabik_ward}}</b> हाल  <b>{{$data->local_states}}</b> वडा नं. <b>{{$data->wards}}</b> को कि.नं.<b>{{$data->kitta_no}}</b> क्षे.फ.<b>{{$data->area}}</b> जग्गामा मैले घर निर्माण गरी सकेको र मेरो माथि उल्लेखित कित्ता जग्गाको ज.ध.प्र.पुर्जामा हालसम्म घर नजनिएकोले घर जनाउनको लागि तहाँ कार्यालयको नाउँमा सिफारिस पाऊँ भनी यस कार्यालयमा निवेदन पेश गरेकोले सो सम्बन्धमा बुझ्दा जानेबुझेसम्म व्यहोरा मनासिब भएको बुझिएकोले तहाँ कार्यालयको नियमानुसार निवेदकको माथि उल्लेखित कित्ता जग्गाको ज.ध.प्र.पु.मा घर जनाई दिनुहुन यो सिफारिस गरिन्छ।

      </p>

    </div>








  </div>
     <div class="text-right btm-last">
    <p><b>{{$data->hakim_ko_name}}</b></p>


    <p> <b>{{$data->officer}}
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
              <a class="btn btn-fixed"  href="GharJanauneSifarisController/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
              <a class="btn btn-fixed" id="print_gharjagga_namsarikitani"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a>
              <a class="btn btn-fixed" href="{{url('GharJanauneSifarisController/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
            </div>
           </center>
        </div>
        <!-- jQuery -->
        <!-- jQuery 3 -->
<script src="{{ asset('admin/bower_components/jquery/dist/jquery.min.js') }}"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#print_gharjagga_namsarikitani').click(function() {
    $('.hide-button').hide();

    window.print();

    $('.hide-button').show();
    });
  });
</script>
