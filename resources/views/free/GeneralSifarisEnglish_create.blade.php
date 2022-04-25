@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="right_col eng" role="main" style="min-height: 986px;">
  <div class="clearfix"></div>
  <div class="row">


    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">

        <div class="x_title">
          <h3 class="title-x eng">Open Format</h3>

          <div class="clearfix"></div>
        </div>



        <div class="x_content">
              {{-- <header>
          <div class="row">
            <div class="col-md-3">
              <p><img src="{{ asset('images/logo.png') }}"> </p>
            </div>
            <div class="col-md-9 head-edt">

             </div>
           </div>
           <div class="row">
      <div class="col-md-12 title_header">
         <h1 class="name_header">
             {{$local_state[0]->local_state_name_english}} </h1>
                @if(auth()->user()->isAdmin != 0)
        <h2 class="font-size-24 "> Ward No.{{auth()->user()->isAdmin }},</h2>
        @endif
                 <h3 align="center" class="sm-head"> {{$district[0]->district_name_english}} </h3>

                <p class="sm-head"> {{$provience[0]->province_name_english}}, Nepal </p>

            </div>
            <div class="col-md-2">

            </div>
          </div>
        </header> --}}






                    <form action="{{url('GeneralSifarisEnglish')}}" method="post">
             {{ csrf_field() }}

          @include('master.master_header_english')


            <div class="row top-part">
              <div class="col-md-6">
                {{-- <p align="left"><b>Ref No. :<input class="dashed-input-field" name="ref_no" type="text"></b></p> --}}
              </div>
              <div class="col-md-6">
                <p align="right"><b>Date :<input id="issued_date" required="required" name="issued_date" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" type="text" onfocus="showNdpCalendarBox('issued_date')"></b> </p>
              </div>
            </div>
            <div class="row title-left">
           <div class="col-md-12">

            <p align="left"> <input type="text" class="dashed-input-field" placeholder="   *" name="office_name" id="office_name" required="required">, </p>
                <p align="left"><input type="text" class="dashed-input-field" placeholder="   *" name="office_address" id="office_address" required="required"></p>
                <p align="left"><input type="text" class="dashed-input-field" placeholder="  " name="office_add">|</p>

           </div>
         </div>

            <div class="row top-part">
            <div class="col-md-12">
               <h3 align="center"><b>Subject: <input id="subject" required="required" name="subject" class="dashed-input-field" placeholder="   *" type="text"></b></h3>


            </div>
          </div>





          <div class="row">
          <div class="col-md-12 content-para">


            <p>
              <textarea name="behora" class="form-control"></textarea>
            </p>
          </div>
        </div>


             <div class="col-md-12">

                <div class="text-right btm-last">
            <p><input type="text" class="dashed-input-field star" placeholder="   *" name="hakim_ko_name" id="" required="required"></p>

             <p>  <select name="officer">
<option value="Ward Chairperson">Ward Chairperson</option>
<option value="Ward Secretary">Ward Secretary</option>
</select>
 </p>
            </div>



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


        <div class="col-md-12">
          <hr>
          <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">

          <center><input type="submit" class="btn btn-success" name="save_general_sifaris_english_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>
@stop
