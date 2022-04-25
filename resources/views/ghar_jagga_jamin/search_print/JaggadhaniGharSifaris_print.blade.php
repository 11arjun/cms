<link rel="stylesheet" type="text/css" href="{{ asset('css/custom_print.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

@foreach($data as $data)
<div id="page{{$data->id}}" class="short">
<div class="btn-grp hide-button" id="hide-btn-grp">

<a class="btn btn-success" href="jaggadhnigharsifaris/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
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
<page size="A4">

	<div class="x_content">
		<header <?php echo empty($print_mode)?"":$print_mode;?>>
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
			<div class="top-part">
			<div class="row title-left">
				<div class="col-md-6">
					<p align="left"><b><span style="margin-left: 11px;">पत्र संख्या:</span>&nbsp;{{$data->patra_sankya}}</b></p>
					<p align="left"><b><span style="margin-left: 11px;">चलानी नं.:</span>&nbsp; {{$data->chalani_no}} </b></p>
				</div>
				<div class="col-md-6">
					<p align="right"><b><span <?php echo empty($print_mode)?"":$print_mode;?>>मिति:{{$data->issued_date}} </b></p>
				</div>
			</div>
			</div>
			<div class="col-md-12 title-left">

				<p align="left"><b>श्री {{$data->office_chairman}}</b></p>
				<p align="left"><b>{{$data->office_name}}</b>|</p>

			</div>

			<div class="col-md-12">
				<p align="center" class="font-size-24">
					<h4 align="center"><b><u>विषय:सिफारिस सम्बन्धमा</u></b> </h4>
				</p>
			</div>
			<div class="col-md-12 content-para">

				<p align="justify"> उपरोक्त सम्बन्धमा मेरो/हाम्रो नाममा एकलौटी/संयुक्त दर्ता श्रेस्ता भएको वडा नं.
					<b> {{$data->ward_no}} </b>(साबिकको ठेगाना <b>{{$data->sabik_address}}) </b>कि.नं <b>{{$data->kitta_no}} </b> को क्षे.फ. <b> {{$data->area}} </b> जग्गाको जग्गाधनी श्रेस्ता पुर्जामा जग्गा मात्र भएको तर फिल्डमा घर भएकोले जग्गाधनी श्रेस्ता पुर्जामा घर कायम गरी पाउ भनी घरजग्गाधनी

					ले यस वडा कार्यालयमा निवेदन दिनुभएको हुदाँ  सो सम्बन्धमा त्यहाँको नियमानुसार जग्गाधनी प्रमाण पुर्जामा घर कायम गराई दिनुहुन सिफारिस गरिन्छ |</p>

				</div>
				<div class="col-md-12">
<p class="btm-last">  वडा अध्यक्ष </p>
</div>


			</div>

		</page>
		</div>



		<div class="col-md-12">
			<center>
				 <div class="hide-button" style="display: block;">
				  <a class="btn btn-success btn-fixed" href="{{'home'}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
				<!-- <a class="btn btn-success btn-fixed" href="jaggadhnigharsifaris/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
				<a class="btn btn-success btn-fixed" id="print_jagga_dhani_praman_purja"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a> -->


     			<a class="btn btn-success btn-fixed" href="{{url('jaggadhnigharsifaris/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
  </div> </center>
			</div>

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
