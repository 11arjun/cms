<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
<div id="page">
<page size="A4"  class="short">
   <div class="x_panel">
   <div class="x_content">
  <header>
                  <div class="col-md-12" style="margin-top: 40px;">
                     <div class="col-md-3">
                        <p><img src="{{ asset('images/logo.png') }}"> </p>
                     </div>
                     <div class="col-md-9">
                     </div>
                     <div class="col-md-12 title_header">
                        <p align="center"> <h1 class="name_header">  {{$local_state[0]->local_state_name}} </h1>
                        {{Helpers::convertNos(auth()->user()->isAdmin)}} नं. वडा कार्यालय <p></p>
        </h2><h3 align="center" class="sm-head">, {{$district[0]->district_name}}</h3>
        <h3 align="center" class="sm-head">{{$provience[0]->province_name}}, नेपाल</h3></p>
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
				</p><h4 align="center"><b>विषय: प्रमाणित सिफारिस गरिएको बारे।</b> </h4>

		</div>
	</div>
	<div class="row title-left">
		<div class="col-md-12">
			<p>श्री {{$data->office_chairman}}</p>
			<p> {{$data->office_address}} ।</p>

		</div>
	</div>





	<div class="row">
		<div class="col-md-12 content-para">

			<p align="justify">

				उपरोक्त सम्बन्धमा तहाँ कार्यालयको मिति {{$data->prapta_patra_miti}} च.नं. {{$data->prapta_patra_no}}
				को प्राप्त पत्र अनुसार सम्बन्धित स्थानमा गई गाउँ सर्जमिन बुझी मुचुल्का यसै पत्र साथ राखी पठाएको र निज निवेदक {{$data->sanchalak_name}} को नाममा दर्ता रहेको साविक {{$data->sabik_address}} हाल {{$data->current_address}} को जग्गा विवरण {{$data->jagga_bibaran}} को जग्गामा {{$data->bebasaye_objective}} उदेश्यको  श्री {{$data->bebasaye_name}} संचालनका लागि दर्ता हुने फर्मले चौतर्फी सधियार र छरछिमेकका  साथसाथै सार्बजनिक महत्वको स्थान लगायत कुनै कुराहरुलाई असर नगर्ने भएको हुँदा निवेदकको फर्म नियम अनुसार दर्ता गरी दिनुहुन किटानी सिफारिस गरिएको व्यहोरा अनुरोध छ।

			</p>
		</div>
		<div class="col-md-12">


		</div>
		<div class="col-md-12">
							<div class="text-right btm-last">
					<p>{{$data->hakim_ko_name}}</p>


					<p> <b> {{$data->officer}}

</b> </p>
	</div>

	</div>

</div>




</div>
</div>
</page>
</div>
<div class="col-md-12">
 <center>
    <div class="hide-button">
      <a class="btn btn-fixed" href="{{url('home')}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
      <a class="btn btn-fixed"  href="UdyogDartaSifaris/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
      <a class="btn btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a>
      <a class="btn btn-fixed" href="{{url('UdyogDartaSifaris/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
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
