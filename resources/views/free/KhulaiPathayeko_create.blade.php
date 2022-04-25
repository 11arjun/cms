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
          <h2>खुलाई पठाएको</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>

            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>


        <form action="{{url('khulaipathayeko')}}" method="post">
          {{ csrf_field() }}
          <div class="x_content">
              @include('master.master_header_ne2')


            <div class="col-md-12">
              <div class="col-md-6">
               <p align="left"><b>पत्र संख्या&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" name="patra_shankhya" id="patra_shankhya" required="required"/></b></p>
                <p align="left"><b>चलानी नं.&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" name="chalani_no" id="chalani_no" required="required"/></b></p>
             </div>
             <div class="col-md-6">
              <p align="right"><b>मिति:&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" name="issued_date" id="issued_date" required="required"/></b></p>
             </div>
           </div>

           <div class="col-md-12">

            <p align="left"><b>&nbsp;&nbsp;&nbsp;श्री </b><input type="text" class="dashed-input-field" placeholder="   *" name="officer_name" id="officer_name" required="required"/ >कार्यालय,</p>


           </div>




          <div class="col-md-12">
            <p align="center" class="font-size-24">
              <h4 align="center"><b><u>विषय:खुलाई पठाएकोा</u></b> </h4>
            </p>
          </div>
          <div class="col-md-12">

            <p align="left"> त्यहाँ सम्मानित अदालतको मिति च.नं को पत्रानुसार यस वडा
                कार्यालयबाट प्राविधिक मुल्यांकन गरी यसै पत्र साथ कार्यरत प्राविधिकको सक्कल प्रतिबेदन संलग्न राखी
                पठाइएको व्यहोरा अनुरोध छ|</p>
          </div>
            <p class="btm-last">  वडा अध्यक्ष </p>
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
            <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">

            <center><input  type="submit" class="btn btn-success" name="save_khulai_pathayeko_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
          </div>
        </div>
      </div>

    </form>

  </div>
</div>
</div>
</div>
@stop
