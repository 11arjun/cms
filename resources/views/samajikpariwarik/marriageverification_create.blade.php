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
          <h2>विवाह प्रमाण पत्र</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>

            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>


        <form action="{{url('marriageverification')}}" method="post">
          {{ csrf_field() }}
          <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
          <div class="x_content">
          @include('master.master_header_ne2')
            <div class="col-md-12">
              <div class="col-md-6">
               <p align="left"><b>पत्र संख्या&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankya" id="patra_sankya" required="required"/></b></p>
             </div>
             <div class="col-md-6">
             </div>
           </div>


           <div class="col-md-12">
            <div class="col-md-6">
              <p align="left"><b>चलानी नं.&nbsp;<input type="text" class="dashed-input-field" placeholder="   *"  name="chalani_no" id="chalani_no" required="required"/></b></p>


            </div>
            <div class="col-md-6">
              <p align="right"><b> मिति:&nbsp;<input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" name="issued_date" id="issued_date" required="required" onfocus="showNdpCalendarBox('issued_date')"></b></p>
            </div>
          </div>




          <div class="col-md-12">
            <p align="center" class="font-size-24">
              <h4 align="center"><b><u>विषय: विवाह प्रमाणित</u></b></h4>
            </p>
          </div>





          <div class="col-md-12">

            <p align="left">श्री <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="boy_grand_father"/> को नाति श्री <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="boy_father"/> तथा श्रीमती  <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="boy_mother"/> को छोरा, <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="boy_name"/> (साबिकको ठेगाना <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="boy_previous_address"/> ) निवासी श्री <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="girl_grand_father"/>र श्री <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="girl_grand_mother"/> को नातिनी श्री <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="girl_father"/> तथा श्रीमती  <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="girl_mother"/>को छोरी ,<b>{{$local_state[0]->local_state_name}} </b>(साबिकको ठेगाना <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="girl_previous_address"/>)निवासी सुश्री <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="girl_name"/> बीच मिति <input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" required="required" name="marriage_date" id="marriage_date" onfocus="showNdpCalendarBox('marriage_date')"/> मा विवाह भएको व्यहोरा प्रमाणित गरिन्छ |</p>



            </div>

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

            <div class="col-md-12">
              <hr/>

              <center><input  type="submit" class="btn btn-success" name="save_bibaha_pramanit_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
            </div>
          </div>
        </div>

      </form>

    </div>
  </div>
</div>
</div>
@stop
