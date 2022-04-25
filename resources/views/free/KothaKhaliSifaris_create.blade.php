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
          <h3 class="title-x">सिफारिस सम्बन्धमा</h3>

          <div class="clearfix"></div>
        </div>
<div class="x_content">
   @include('master.master_header_ne2')
      <form action="{{url('kothakhalisifaris')}}" method="post">
             {{ csrf_field() }}
	<div class="row top-part">
		<div class="col-md-6">
			<p align="left"><b>पत्र संख्या :<input type="text" class="dashed-input-field" placeholder="   *" required="required" name="patra_sankhya" id="patra_sankhya" value="२०७५/०७६" required="required"></b></p>

			<p align="left"><b>चलानी नं. :<input type="text" class="dashed-input-field" placeholder="    *" required="required" name="chalani_no" id="chalani_no"></b></p>


		</div>
		<div class="col-md-6">
			<p align="right"><b>मिति :<input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" name="issued_date" id="issued_date" required="required" onfocus="showNdpCalendarBox('issued_date')"></b></p>
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
			<p>श्री <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="letter_subject" value=""></p>
			<p><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="local_state" value="{{$local_state[0]->local_state_name}}">।</p>
    </div>
	</div>


	<div class="row">
		<div class="col-md-12 content-para">

			<p align="justify">
        उपरोक्त सम्बन्धमा वडा नं. <b>{{Helpers::convertNos(auth()->user()->isAdmin)}}</b>
        (साबिकको ठेगाना <input type="text" class="dashed-input-field" placeholder="    *" required="required" name="sabik_address"> ) बस्ने <b><select name="applicant_title">
                <option value="श्री">श्री</option>
                <option value="सुश्री">सुश्री</option>
                <option value="श्रीमती">श्रीमती</option>
              </select></b> <input type="text" name="applicant_name" class="dashed-input-field" placeholder="    *" required="required"> ले
              कोठा खाली गर्न ३५ दिने सूचना जारी गरी पाउँ” भनी यस वडा कार्यालयमा निवेदन दिनुभएकोमा सो सम्बन्धमा ३५ दिने सूचना जारी गरी आवश्यक कारवाहीको लागि
              यसै साथ संलग्न गरी सिफारिस गरी पठाइएको व्यहोरा अनुरोध गरिन्छ ।
			</p>
		</div>
		<div class="col-md-12">


		</div>
		<div class="col-md-12">
<p class="btm-last">  वडा अध्यक्ष </p>


<!--views for nibedak detail -->
<div class="clearfix"></div>
<hr>
<section class="bibaran">
<fieldset>

<legend>निवेदकको विवरण</legend>


<div class="form-group">
<label>निवेदकको नाम</label>
<input type="text" name="nibedak_name" class="form-control" required>
</div>
<div class="form-group">
<label>निवेदकको ठेगाना</label><input type="text" name="nibedak_address" class="form-control" required>
</div><div class="form-group">
<label>निवेदकको नागरिकता नं.</label>
<input type="text" name="nibedak_citizenship_no" class="form-control" required>
</div>
<div class="form-group">
<label>निवेदक (NID) </label>
<input type="text" name="nibedak_nid" class="form-control" required>
</div>

</fieldset>
</section>
<!-- END -->

		</div>

	</div>

	<div class="col-md-12">
		<hr>
		 <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
		<center><input type="submit" class="btn btn-success" name="save_jetmachine_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
	</div>



</form>
</div>
</div><!-- footer content -->

</div>
</div>
</div>


@stop
