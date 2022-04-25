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
        </p><h4 align="center"><b>विषय:सूचना टाँस गरी सर्जमिन गरी पठाई दिने।</b></h4>
    </div>
  </div>

  <div class="row">
    <div class="row title-left">
      <div class="col-md-12">
        <p> <b>श्री वडा कार्यालय  </b> </p>

        <p><b> वडा नं. {{$data->oda_ward}} </b><br> <b>{{$local_state[0]->local_state_name}}।</b></p>

      </div>
    </div>


    <div class="col-md-12">

      <p>
        उपरोक्त विषयमा  <b>   {{$data->district}} </b> जिल्ला <b>    {{$data->local_state}} </b> वडा नं. <b>{{$data->ward}} </b>  बस्ने {{$data->person_name}} (साविक


                  {{$data->sabik_address}}
        <b> {{$data->sabik_type}}

</b>, वडा नं. {{$data->sabik_ward}}) हाल <b>{{$local_state[0]->local_state_name}} </b> वडा नं. <b> <?php if(auth()->user()->isAdmin == 1){
    echo "१";
  }else if(auth()->user()->isAdmin == 2){
    echo "२";
  }else if(auth()->user()->isAdmin == 3){
    echo "३";
  }else if(auth()->user()->isAdmin == 4){
    echo "४";
  }else if(auth()->user()->isAdmin == 5){
    echo "५";
  }else if(auth()->user()->isAdmin == 6){
    echo "६";
  }else if(auth()->user()->isAdmin == 7){
    echo "७";
  }else if(auth()->user()->isAdmin == 8){
    echo "८";
  }else if(auth()->user()->isAdmin == 9){
    echo "९";
  }else if(auth()->user()->isAdmin == 10){
    echo "१०";
  }else if(auth()->user()->isAdmin == 11){
    echo "११";
  }else if(auth()->user()->isAdmin == 12){
    echo "१२";
  }else{

  }?> </b> स्थित कि. नं. {{$data->kitta_no}} क्षे. फ.{{$data->area}} जग्गामा निर्माण हुने नयाँ घरको नक्सा पास प्रयोजनको लागि तहाँ कार्यालय बाट सूचना टाँस सहित सर्जमिन मुचुल्का गरी पठाईदिनुहुन अनुरोध छ।
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
      <a class="btn btn-fixed"  href="SarjiminController/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
        <a class="btn btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a>
      <a class="btn btn-fixed" href="{{url('SarjiminController/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
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
