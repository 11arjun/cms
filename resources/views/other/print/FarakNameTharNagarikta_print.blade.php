<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

   <div id="page">
      <page size="A4"  class="short">
         <div class="x_panel">
            <div class="x_content">
<header
 <?php echo empty($print_mode)?"":$print_mode;?>>
    <div class="col-md-12" style="margin-top: 40px;">
      <div class="col-md-2">
        <p><img src="{{asset('images/logo.png')}}"> </p>
      </div>
      <div class="col-md-8">
        <p align="center" class="font-size-24"><b> {{$local_state[0]->local_state_name}} </b></p>
        <p align="center" class="font-size-24">
          <b> {{Helpers::convertNos(auth()->user()->isAdmin)}} नं वडा कार्यालय, <?php echo empty($ward_office)?"":$ward_office;?> </b></p>
          <h3 align="center" class="sm-head">{{Helpers::convertNos(auth()->user()->provience_id)}} नं. प्रदेश, नेपाल</h3>

        </div>
        <div class="col-md-2">


        </div>
      </div>
</header>

  <div class="row top-part">
    <div class="col-md-6">
     <p align="left"><b>पत्र संख्या :{{$data->patra_sankya}}</b></p>

     <p align="left"><b>चलानी नं. :{{$data->chalani_no}}</b></p>


   </div>
   <div class="col-md-6">
    <p align="right"><b>मिति :{{$data->issued_date}}</b></p>
  </div>
</div>



<div class="row">
  <div class="col-md-12">
    <p align="center" class="font-size-24">
      </p><h4 align="center"><b>विषय: प्रमाणित सिफारिस गरिएको बारे ।</b> </h4>

  </div>
</div>



<div class="row content-para">
  <div class="col-md-12">

    <p align="left"> उपरोक्त विषयमा <b>{{$data->local_state}}</b> वडा नं. <b>{{$data->ward}}</b> (साविक

      <!--SABIK ADDRESS START -->

           {{$data->sabik_address}}
      <b> {{$data->sabik_type}}

</b>, वडा नं. {{$data->sabik_ward}}) निवासी <b>{{$data->person_title}}

</b>
      {{$data->person_name}}

      ले दिनु भएको निवेदन अनुसार निजको नागरिकता प्रमाण पत्र नं.  {{$data->citi_no}}

      मिति {{$data->citi_date}} मा नागरिकता प्रमाण पत्रमा  {{$data->mistake_type}}


      {{$data->mistake_info}} र निजको   {{$data->relation_type}}


      <input-group id="relnameanddetail">{{$data->document_holder}} को</input-group>&nbsp; {{$data->document_type}} मा {{$data->document_mistake}}


      {{$data->document_name}} &nbsp; भई फरक परेकाले उल्लेखित फरक फरक {{$data->document_mistake}} फरक व्यक्तिको नभई एकै&nbsp;व्यक्तिको भएकाले निजको {{$data->rel_name}} {{$data->doc_name}}  मा उल्लेखित बमोजिम {{$data->document_mistake}} संशोधन गरी निजलाई नागरिकता प्रमाण पत्र प्रतिलिपि उपलब्ध गराई दिनहुन प्रमाणित सिफारिस गरिएको&nbsp;व्यहोरा अनुरोध छ।&nbsp;

    </p>
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
      <a class="btn btn-fixed"  href="FarakNameTharNagarikta/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
      <a class="btn btn-fixed" id="print_farak_namthar_nagarikta"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a>
      <a class="btn btn-fixed" href="{{url('FarakNameTharNagarikta/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
    </div>
   </center>
</div>
<!-- jQuery -->
<!-- jQuery 3 -->
<script src="{{ asset('admin/bower_components/jquery/dist/jquery.min.js') }}"></script>


<script type="text/javascript">
  $(document).ready(function(){
    $('#print_farak_namthar_nagarikta').click(function() {
    $('.hide-button').hide();

    window.print();

    $('.hide-button').show();
    });
  });
</script>
