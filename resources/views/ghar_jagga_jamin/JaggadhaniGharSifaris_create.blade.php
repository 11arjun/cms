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
          <h2>जग्गाधनी प्रमाण पुर्जामा घर कायम  सिफारिस</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>


        <form action="{{url('jaggadhnigharsifaris')}}" method="post">
           {{ csrf_field() }}
            <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">

          <div class="x_content">
              @include('master.master_header_ne2')
           <!--  <div class="col-md-12">

              <div class="col-md-2">
                <p><img src="{{ asset('images/logo.png') }}"> </p>
              </div>
              
              <div class="col-md-8">

               <p align="center" class="font-size-24"><b>  {{$local_state[0]->local_state_name}} </b></p>
               <p align="center" class="font-size-24">
                <b> {{Helpers::convertNos(auth()->user()->isAdmin)}} नं वडा कार्यालय, <?php echo empty($ward_office)?"":$ward_office;?> </b></p>
                 <h3 align="center" class="sm-head">{{Helpers::convertNos(auth()->user()->provience_id)}} नं. प्रदेश, नेपाल</h3>

              </div>
              <div class="col-md-2">


              </div>
            </div>
 -->
            <div class="col-md-12">
              <div class="col-md-6">
{{--                <p align="left"><b>पत्र संख्या&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankya" id="patra_sankya"  required="required"/></b></p>
               <p align="left"><b>चलानी नं.&nbsp;<input type="text" class="dashed-input-field" placeholder="   *"   name="chalani_no" id="chalani_no" required="required"/></b></p>
 --}}             </div>
             <div class="col-md-6">
              <p align="right"><b>मिति:&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" name="issued_date" id="issued_date" required="required"/></b></p>
            </div>
          </div>

          <div class="col-md-12">

            <p align="left">&nbsp;&nbsp;&nbsp;श्री <input type="text" class="dashed-input-field" placeholder="   *" name="office_chairman" id="office_chairman" required="required"/></p>
            <p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" name="office_name" id="office_name" required="required"/>|</p>

          </div>

          <div class="col-md-12">
            <p align="center" class="font-size-24">
              <h4 align="center"><b><u>विषय:सिफारिस सम्बन्धमा</u></b> </h4>
            </p>
          </div>
          <div class="col-md-12">

            <p align="left"> उपरोक्त सम्बन्धमा मेरो/हाम्रो नाममा एकलौटी/संयुक्त दर्ता श्रेस्ता भएको वडा नं.<input type="text" class="dashed-input-field" placeholder="   *" required="required" name="ward_no"/>(साबिकको ठेगाना <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="sabik_address"/>)कि.नं. <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="kitta_no"/>को क्षे.फ. <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="area"/> जग्गाको जग्गाधनी श्रेस्ता पुर्जामा जग्गा मात्र भएको तर फिल्डमा घर भएकोले जग्गाधनी श्रेस्ता पुर्जामा घर कायम गरी पाउ भनी घरजग्गाधनी  

              ले यस वडा कार्यालयमा निवेदन दिनुभएको हुदाँ  सो सम्बन्धमा त्यहाँको नियमानुसार जग्गाधनी प्रमाण पुर्जामा घर कायम गराई दिनुहुन सिफारिस गरिन्छ |


             
              
            </div>
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

              <center><input  type="submit" class="btn btn-success" name="save_jagga_dhani_praman_purja_ghar_kayem_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
            </div>
          </div>
        </div>

      </form>

    </div>
  </div>
</div>
</div>

@stop