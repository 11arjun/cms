@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="right_col" role="main">
  <div class="clearfix"></div>
  <div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2> Birth Date Verification </h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>

            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>

        <div class="x_content">

       <form action="{{url('birthdateverification',[$data->id])}}" method="POST">
            {{method_field('PATCH')}}
          	 {{ csrf_field() }}
          @include('master.master_header_english')

            <div class="col-md-12">
              <div class="col-md-6">
                {{-- <p align="left"><b>Ref No.<input class="dashed-input-field" placeholder="   *" name="ref_no" required="required" type="text" value="{{$data->ref_no}}" /></b></p> --}}
              </div>
              <div class="col-md-6">
                <p align="right"><b>Date:  <input id="issued_date" required="required" name="issued_date" class="dashed-input-field" placeholder="   *" type="text" value="{{$data->issued_date}}" /></b> </p>
              </div>
            </div>


            <div class="col-md-12">
              <p align="center" class="font-size-24">
                <h3 align="center"><b><u> Subject:Birth Date Verification </u></b></h3>
              </p>
              <p align="center" class="font-size-24">
                <h4 align="center"><b><u>To Whom It May Concern</u></b></h4>
              </p>
            </div>




         <div class="col-md-12">
              <p align="left">This is to certify that <b><select name="applicant_title">
				<option value="Mr" {{$data->applicant_title == 'Mr' ? 'selected' : ''}}>Mr</option>
				<option value="Mrs" {{$data->applicant_title == 'Mrs' ? 'selected' : ''}}>Mrs</option>
				</select> <input class="dashed-input-field" placeholder="   *" type="text" required="required" name="applicant_name" value="{{$data->applicant_name}}" /></b>is the <b><select name="applicant_relation">
				<option value="son" {{$data->applicant_relation == 'son' ? 'selected' : ''}}>son</option>
				<option value="daughter" {{$data->applicant_relation == 'daughter' ? 'selected' : ''}}>daughter</option>
			</select></b> of Mr <b><input class="dashed-input-field" placeholder="   *" type="text" required="required" name="father_name" value="{{$data->father_name}}" /></b> and Mrs <b><input class="dashed-input-field" placeholder="   *" type="text" required="required" name="mother_name" value="{{$data->mother_name}}"/></b> permanent resident of Municipality, Ward No. {{auth()->user()->isAdmin}} Illam Nepal was born in <b><input class="dashed-input-field" placeholder="   *" type="text" required="required" name="born_local_state" value="{{$data->born_local_state}}" /></b>Municipility,Ward No.<b><input class="dashed-input-small-field" placeholder="   *" type="text" required="required" name="born_ward_no" value="{{$data->born_ward_no}}" /></b>,<b><input class="dashed-input-field" placeholder="   *" type="text" required="required" name="born_district" value="{{$data->born_district}}" /></b>District,Nepal. According to <b><select name="applicant_title_options">
				<option value="his" {{$data->applicant_title_options == 'his' ? 'selected' : ''}}>his</option>
				<option value="her" {{$data->applicant_title_options == 'her' ? 'selected' : ''}}>her</option>
				</select> </b> Citizenship Certificate issued by District Administration Office,<b><input class="dashed-input-field" placeholder="   *" type="text" required="required" name="citizen_issued_district" value="{{$data->citizen_issued_district}}" /></b>, Nepal <b><select name="applicant_name_options">
				<option value="his" {{$data->applicant_title_options == 'his' ? 'selected' : ''}}>his</option>
				<option value="her" {{$data->applicant_title_options == 'her' ? 'selected' : ''}}>her</option>
				</select></b>date of birth is <b><input type="text" name="date_bs" id="date_bs" placeholder=" *" required="required" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('date_bs')" value="{{$data->date_bs}}"></b> B.S.(<b><input type="text" name="date_ad" id="date_ad" placeholder=" *" required="required" class="dashed-input-field ndp-nepali-calendar" onfocus="showNdpCalendarBox('date_ad')" value="{{$data->date_ad}}"></b>A.D.).
</p>
           </div>
          </div>

             <div class="col-md-12">

        <p class="btm-last">  Ward President </p>
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
        <div class="col-md-12">
          <hr/>

          <center><input  type="submit" class="btn btn-success" name="save_birth_date_verification_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
        </div>
      </div>
    </div>

  </form>
</div>
</div>
</div>
</div>
 </div>

</div>
@stop
