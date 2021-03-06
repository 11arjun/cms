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
          <h2> Occupation Verification </h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>

            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>

        <div class="x_content">

          <form action="{{url('occupationverification')}}" method="post">
            {{ csrf_field() }}
            <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
          @include('master.master_header_english')
            <div class="col-md-12">
              <div class="col-md-6">
                {{-- <p align="left"><b>Ref No.<input class="dashed-input-field" placeholder="   *" name="ref_no" required="required" type="text"/></b></p> --}}
              </div>
              <div class="col-md-6">
                <p align="right"><b>Date:  <input id="issued_date" required="required" name="issued_date" class="dashed-input-field" placeholder="   *" type="text"/></b> </p>
              </div>
            </div>


            <div class="col-md-12">
              <p align="center" class="font-size-24">
                <h3 align="center"><b><u> Subject:Occupation Verification </u></b></h3>
              </p>
              <p align="center" class="font-size-24">
                <h4 align="center"><b><u>To Whom It May Concern</u></b></h4>
              </p>
            </div>


         <div class="col-md-12">
              <p align="left">As per the record of the office, it is hearby certified that Mr.<b><input class="dashed-input-field" placeholder="   *" type="text" required="required" name="applicant_name"/></b> son of Mr. <b><input class="dashed-input-field" placeholder="   *" type="text" required="required" name="father_name"/></b> & Miss <b><input class="dashed-input-field" placeholder="   *" type="text" required="required" name="mother_name"/></b> permanent resident of Rural Municipality/Municipality Ward no {{auth()->user()->isAdmin}},{{$district[0]->district_name_english}} District (Previously known as <b><input class="dashed-input-field" placeholder="   *" type="text" required="required" name="previous_vdc_name"/></b> VDC ward no <b><input class="dashed-input-small-field" placeholder="   *" type="text" required="required" name="previous_ward_no"/></b>,<b><input class="dashed-input-field" placeholder="   *" type="text" required="required" name="previous_district"/></b> District Nepal)are involved in <b><input class="dashed-input-field" placeholder="   *" type="text" required="required" name="business_name"/></b>.


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

<legend>???????????????????????? ???????????????</legend>


<div class="form-group">
<label>???????????????????????? ?????????</label>
<input type="text" name="nibedak_name" class="form-control" required>
</div>
<div class="form-group">
<label>???????????????????????? ??????????????????</label><input type="text" name="nibedak_address" class="form-control" required>
</div><div class="form-group">
<label>???????????????????????? ???????????????????????? ??????.</label>
<input type="text" name="nibedak_citizenship_no" class="form-control" required>
</div>
<div class="form-group">
<label>?????????????????? (NID) </label>
<input type="text" name="nibedak_nid" class="form-control" required>
</div>

</fieldset>
</section>


        <div class="col-md-12">
          <hr/>

          <center><input  type="submit" class="btn btn-success" name="save_occupation_verification_data" value="?????????????????? ????????? ????????? ??????????????????????????? ???????????? ???????????? ????????????????????????"></center>
        </div>
      </div>
    </div>

  </form>
</div>
</div>
</div>
</div>

@stop
