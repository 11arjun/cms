<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

<page size="A4" class="short">
      <div class="x_panel">
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
            <div class="row title-left">
              <div class="col-md-6">
               <p align="left" ><b>पत्र संख्या : {{$data->patra_sankhya}}</b></p>
             </div>
             <div class="col-md-6">
             </div>
           </div>


           <div class="row title-left">
            <div class="col-md-6">
              <p align="left" ><b>चलानी नं. : {{$data->chalani_no}}</b></p>


            </div>
            <div class="col-md-6">
              <p align="right"  ><b>मिति : {{$data->issued_date}}</b></p>
            </div>
          </div>


	<div class="row">
		<div class="col-md-12">
			<p align="center" class="font-size-24">
				</p><h4 align="center"><b>विषय: सिफारिस सम्बन्धमा।</b></h4>
			<p></p>
		</div>
	</div>
	<div class="row title-left">
		<div class="col-md-12">
			<p>श्री भूमिसुधार कार्यालय</p>
			<p>{{$district[0]->district_name}}।</p>
    </div>
	</div>


	<div class="row">
		<div class="col-md-12 content-para">

			<p align="justify">
        उपरोक्त सम्बन्धमा मेरो नाममा दर्ता श्रेष्ता भएको वडा नं. <b>{{Helpers::convertNos(auth()->user()->isAdmin)}}</b>
        (साबिकको ठेगाना <b>{{$data->sabik_address}}</b> ) स्थित सिट नं.
        <b>{{$data->seat_no}}</b> को कि.नं.
        <b>{{$data->kitta_no}}</b> क्षै.फ.
        <b>{{$data->total_area}}</b> भएको जग्गाधनी श्रेष्ता पुर्जाको मोही
        <b>{{$data->relation_title}}</b> <b>{{$data->relation_name}}</b>
              कायम भएको र मोहीले जोत कमोद केही नगरेकोले मोही लगत कट्टा गर्न मोही स्वंयको मञ्जुरी सनाखत रहेकोले मोही लगत कट्टाको लागि सिफारिस गरी पाउँ भनी जग्गाधनी
        <b>{{$data->second_relation_title}}</b>
        <b>{{$data->second_relation_name}}</b>
              ले यस वडा कार्यालयमा निवेदन दिनु भएकोमा सो सम्बन्धमा मिति <b>{{$data->sifaris_date}}</b>
              मा गरिएको सर्जमिन तथा मोही स्वयंको मञ्जुरी सनाखतको आधारमा त्यस कार्यालयको नियमानुसार मोहि लगत कट्टा गरिदिनुहुन सिफारिस गरिन्छ ।
			</p>
		</div>
<p class="btm-last">  वडा अध्यक्ष </p>
</div>
</div>
</page>

<div class="col-md-12">
   <center>
    <div class="hide-button">
      <a class="btn btn-fixed" href="{{url('home')}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
      <a class="btn btn-fixed"  href="mohilagatkatta/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
      <a class="btn btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a>
      <a class="btn btn-fixed" href="{{url('mohilagatkatta/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
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
