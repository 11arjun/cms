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
          <h3 class="title-x">जेट मेशिन सिफारिस</h3>

          <div class="clearfix"></div>
        </div>
<div class="x_content">
   @include('master.master_header_ne2')
      <form action="{{url('jetmachine',[$data->id])}}" method="post">
        {{method_field('PATCH')}}
             {{ csrf_field() }}
	<div class="row top-part">
		<div class="col-md-6">
			<p align="left"><b>पत्र संख्या :<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankhya" id="patra_sankya" value="{{$data->patra_sankya}}" required="required"></b></p>

			<p align="left"><b>चलानी नं. :<input type="text" class="dashed-input-field" name="chalani_no" id="chalani_no" value="{{$data->chalani_no}}"></b></p>


		</div>
		<div class="col-md-6">
			<p align="right"><b>मिति :<input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" name="issued_date" id="issued_date" required="required" onfocus="showNdpCalendarBox('issued_date')" value="{{$data->issued_date}}"></b></p>
		</div>
	</div>


	<div class="row">
		<div class="col-md-12">
			<p align="center" class="font-size-24">
				</p><h4 align="center"><b>विषय: जेट मेशिन।</b></h4>
			<p></p>
		</div>
	</div>
	<div class="row title-left">
		<div class="col-md-12">
			<p><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="letter_subject" value="{{$data->letter_subject}}"></p>
			<p> <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="karyalaya_name" value="{{$data->karyalaya_name}}">।</p>
    </div>
	</div>


	<div class="row">
		<div class="col-md-12 content-para">

			<p align="justify">
        <input type="text" class="dashed-input-field" placeholder="    *" required="required" name="state" value="{{$district[0]->district_name}}">
        <b><select name="local_state">
        <option value="महानगरपालिका" {{$data->local_state == 'महानगरपालिका' ? 'selected' : ''}}>महानगरपालिका</option>
        <option value="उपमहनगरपालिकाा" {{$data->local_state == 'उपमहानगरपालिका' ? 'selected' : ''}}>उपमहानगरपालिका</option>
        <option value="नगरपालिका" {{$data->local_state == 'नगरपालिका' ? 'selected' : ''}}>नगरपालिका</option>
        <option value="गाउँपलिका" {{$data->local_state == 'गाउँपलिका' ? 'selected' : ''}}> गाउँपलिका</option>
      </select></b>
      वडा नं. <b>{{Helpers::convertNos(auth()->user()->isAdmin)}}</b>
      अन्तर्गत उल्लेखित स्थानमा रहेको सार्वजनिक/नीजि ढल जाम भएको हुनाले सो स्थानको लागि जेट मेशिन उपलब्ध गराईदिन हुन अनुरोध गरिन्छ |

			</p>
      <p>
        जेट मेशिन उपलब्ध गराउन पर्ने स्थान : <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="address" value="{{$data->address}}">
      </p>
      <p>
        बाटोको नाम : <input type="text" class="dashed-input-field" placeholder="    *" required="required" name="road_name" value="{{$data->road_name}}">
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
