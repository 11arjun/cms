<link rel="stylesheet" type="text/css" href="{{ asset('css/custom_print.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">


<div id="page" class="long">
<page size="A4" >
	<div class="x_content">
		@include('master.master_header_print_ne',['chalaniNo'=>$data->chalani_no,'patraSankhya'=>$data->patra_sankhya])
			<div class="top-part">
			<div class="row title-left">
				<div class="col-md-6">
					{{-- <p align="left"><b><span style="margin-left: 11px;">पत्र संख्या:</span>&nbsp;{{$data->patra_sankya}} </b></p> --}}
				</div>
				<div class="col-md-6">
				</div>
			</div>


			<div class="row title-left">
				<div class="col-md-6">
					{{-- <p align="left"><b><span style="margin-left: 11px;">चलानी नं.</span>&nbsp;{{$data->chalani_no}}</b></p> --}}


				</div>
				<div class="col-md-6">
					<p align="right"><b><span <?php echo empty($print_mode)?"":$print_mode;?>>मिति:</span>&nbsp;{{$data->issued_date}}</b></p>
				</div>
			</div>
		</div>




			<div class="col-md-12">
				<p align="center" class="font-size-24">
					<h4 align="center"><b><u>विषय:कित्ताकाट सिफारिस</u></b></h4>
				</p>
			</div>

			<div class="col-md-12 title-left">
				<p>श्री <b> {{$data->office_chairman}}</b>,</p>
				<p><b> {{$data->office_name}}</b>। </p>
			</div>


			<div class="col-md-12 content-para">
				<p>

				<b> {{$local_state[0]->local_state_name}}</b> वडा नं. <b> {{Helpers::convertNos(auth()->user()->isAdmin)}} </b> स्थायी ठेगाना  (साबिकको ठेगाना <b>{{$data->sabik_address}}</b>) अन्तर्गत <b>


				{{$data->person_title}} {{$data->person_name}} </b>को नाममा श्रेस्ता दर्ता कायम रहेको तल उल्लेखित विवरण को घर-जग्गामध्ये <b> {{$data->jagga_location}}</b>
				तर्फबाट <b> {{$data->jagga_area}}</b> क्षेत्रफल जग्गा कित्ताकाट/प्लट मिलान गर्न प्राबिधिक निरीक्षण गर्दा मापदण्ड अनुसार मिल्ने देखिएको हुनाले सोको लागि सिफारिस गरिन्छ। </p>

			</div>
			<div class="clearfix"></div>
			<h4 align="center"><b>घर रहेको जग्गाको विवरण</b></h4>

			<div class="col-md-12">
				<div class="table-responsive">
					<table class="table table-bordered" id="kitta_kat_detail_table">
						<thead>
							<tr>
								<th>क्र.स.</th>
								<th>सिट नं.</th>
								<th>कित्ता नं. </th>
								<th>क्षेत्रफल </th>

							</tr>
						</thead>
						<tbody>

						<?php $count=1; ?>
               			@foreach($detail as $d)
                    <tr>
                      <td>{{ Helpers::convertNos($count)}}
                        <?php $count++; ?></td>

                      <td>{{$d->seat_no}}</td>
                      <td>{{$d->kitta_no}}</td>
                      <td>{{$d->area}}</td>

                    </tr>
                    @endforeach

						</tbody>
					</table>
				</div>
			</div>

			<h4 align="center"><u><b> कित्ताकाट सिफारिस फिल्ड निरीक्षण प्रतिवेदन</b> </u></h4>
			<div class="col-md-12">
				<p>
			घर बनेको जग्गाको क्षेत्रफल : <b>{{$data->ghaderi_area}}</b><br/>
			घरको जम्मा क्षेत्रफल : <b>{{$data->ghar_total_area}}</b><br/>
			घरको भुइँ तल्लाको क्षेत्रफल: <b>{{$data->last_floor_area}}</b><br/>
			पाउने फार : <b>{{$data->paune_far}}</b> <br/>
			 सिफारिस दिन मिल्ने कारण : <b> {{$data->sifaris_reason}}</b>
				</p>

				 <p>सिफारिस गर्ने:</p>
				<p> प्राबिधिक नाम :<b> {{$data->technician_name}}</b><br/>
					प्राबिधिकको हस्ताक्षर : _______________________
				</p>

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
		<a class="btn btn-fixed" href="kittakatsifaris/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
		<a class="btn btn-fixed" id="print_kitta_kat_sifaris"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a>


    <a class="btn btn-fixed" href="{{url('kittakatsifaris/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a> </div>
     </center>
    </div>

<!-- jQuery -->
  <script src="{{ asset('admin/bower_components/jquery/dist/jquery.min.js') }}"></script>

  <script type="text/javascript">


  $('#print_kitta_kat_sifaris').click(function() {
    $('.hide-button').hide();

    window.print();
    $('.hide-button').show();

});
</script>
