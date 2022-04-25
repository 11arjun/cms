@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="right_col nep" role="main" style="min-height: 1158px;">
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">

        <div class="x_title">
          <h3 class="title-x">उद्योग दर्ता सिफारिस</h3>
         
          <div class="clearfix"></div>
        </div>
<div class="x_content">
   @include('master.master_header_ne2')

             <form action="{{url('UdyogDartaSifaris', [$data->id])}}" method="POST" >
           {{method_field('PATCH')}}
          {{ csrf_field() }}
	<div class="row top-part">
		<div class="col-md-6">
			<p align="left"><b>पत्र संख्या :<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankya" id="patra_sankya" value="{{$data->patra_sankya}}" required="required"></b></p>

			<p align="left"><b>चलानी नं. :<input type="text" class="dashed-input-field" name="chalani_no" id="chalani_no" value="{{$data->chalani_no}}"></b></p>


		</div>
		<div class="col-md-6">
			<p align="right"><b>मिति :<input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" name="issued_date" id="issued_date" required="required" onfocus="showNdpCalendarBox('issued_date')" value="{{$data->issued_date}}"></b></p>
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
			<p>श्री <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="office_chairman" value="{{$data->office_chairman}}"></p>
			<p> <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="office_address" value="{{$data->office_address}}">।</p>

		</div>
	</div>





	<div class="row">
		<div class="col-md-12 content-para">

			<p align="justify">

				उपरोक्त सम्बन्धमा तहाँ कार्यालयको मिति <input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" required="required" name="prapta_patra_miti" id="prapta_patra_miti" onfocus="showNdpCalendarBox('prapta_patra_miti')" value="{{$data->prapta_patra_miti}}"> च.नं. <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="prapta_patra_no" id="prapta_patra_no" value="{{$data->prapta_patra_no}}"> 
				को प्राप्त पत्र अनुसार सम्बन्धित स्थानमा गई गाउँ सर्जमिन बुझी मुचुल्का यसै पत्र साथ राखी पठाएको र निज निवेदक <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="sanchalak_name" id="sanchalak_name" value="{{$data->sanchalak_name}}">को नाममा दर्ता रहेको साविक <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="sabik_address" id="sabik_address" value="{{$data->sabik_address}}"> हाल <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="current_address" id="current_address" value="{{$data->current_address}}"> को जग्गा विवरण <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="jagga_bibaran" id="jagga_bibaran" value="{{$data->jagga_bibaran}}">को जग्गामा <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="bebasaye_objective" id="bebasaye_objective" value="{{$data->bebasaye_objective}}"> उदेश्यको  श्री <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="bebasaye_name" id="bebasaye_name" value="{{$data->bebasaye_name}}"> संचालनका लागि दर्ता हुने फर्मले चौतर्फी सधियार र छरछिमेकका  साथसाथै सार्बजनिक महत्वको स्थान लगायत कुनै कुराहरुलाई असर नगर्ने भएको हुँदा निवेदकको फर्म नियम अनुसार दर्ता गरी दिनुहुन किटानी सिफारिस गरिएको व्यहोरा अनुरोध छ।

			</p> 
		</div>
		<div class="col-md-12">


		</div>
		<div class="col-md-12">
							<div class="text-right btm-last">
					<p><input type="text" class="dashed-input-field star" placeholder="   *" name="hakim_ko_name" id="" required="required" value="{{$data->hakim_ko_name}}"></p>


					<p> <b> <select name="officer">
<option value="वडा अध्यक्ष" {{ $data->officer == 'वडा अध्यक्ष' ? 'selected' : ''}}>वडा अध्यक्ष</option>
<option value="का. बा वडा अध्यक्ष"{{ $data->officer == 'का. बा वडा अध्यक्ष' ? 'selected' : ''}}>का. बा वडा अध्यक्ष</option>
<option value="वडा सचिब"{{ $data->officer == 'वडा सचिब' ? 'selected' : ''}}>वडा सचिब</option>
</select>
</b> </p>
				</div>
						

<!--views for nibedak detail -->
<div class="clearfix"></div>
<hr>
 <section class="bibaran">
<fieldset>

<legend>निवेदकको विवरण</legend>


<div class="form-group">
<label>निवेदकको नाम</label>
<input type="text" name="nibedak_name" class="form-control" value="{{$data->nibedak_name}}" required>
</div>
<div class="form-group">
<label>निवेदकको ठेगाना</label><input type="text" name="nibedak_address" class="form-control" value="{{$data->nibedak_address}}" required>
</div><div class="form-group">
<label>निवेदकको नागरिकता नं.</label>
<input type="text" name="nibedak_citizenship_no" class="form-control" value="{{$data->nibedak_citizenship_no}}" required>
</div>
<div class="form-group">
<label>निवेदक (NID) </label>
<input type="text" name="nibedak_nid" class="form-control" value="{{$data->nibedak_nid}}" required>
</div>

</fieldset>
</section>

		</div>

	</div>

	<div class="col-md-12">
		<hr>
		 <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
		<center><input type="submit" class="btn btn-success" name="save_udyog_darta_sifaris" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
	</div>



</form>
</div>
</div><!-- footer content -->

</div>
</div>
</div>


@stop