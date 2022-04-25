@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endpush
@section('content')

<div class="right_col nep" role="main" style="min-height: 1800px;">
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">

        <div class="x_title">
          <h3 class="title-x"> घर कायम सिफारिस</h3>
         
          <div class="clearfix"></div>
        </div>
<div class="x_content">
   
<form action="{{url('GharKaymSifaris')}}" method="post">
             {{ csrf_field() }}

@include('master.master_header_ne2')
  <div class="row top-part">
    <div class="col-md-6">
     {{-- <p align="left"><b> पत्र संख्या :<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankhya" id="patra_sankhya" value="२०७५/०७६" required="required"> </b></p>

     <p align="left"><b> चलानी नं. :<input type="text" class="dashed-input-field" value="" name="chalani_no" id="chalani_no"></b></p>
 --}}

   </div>
   <div class="col-md-6">
    <p align="right"><b>मिति :<input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" name="issued_date" id="issued_date" required="required" onfocus="showNdpCalendarBox('issued_date')"></b></p>
  </div>
</div>


<div class="row">
  <div class="col-md-12">
    <p align="center" class="font-size-24">
      </p><h4 align="center"><b>विषय: घर कायम सिफारिस।</b></h4>
      <input type="hidden" name="letter_subject" value="घर कायम सिफारिस">

    <p></p>
  </div>
</div>

<div class="row title-left">
  <div class="col-md-12">
    <p align="left">श्री <input type="text" class="dashed-lg-input" placeholder="   *" name="office_chairman" id="office_chairman" value="भूमि सुधार तथा मालपोत कार्यालय" required="required">,</p>
    <p align="left">  <input type="text" class="dashed-input-field" placeholder="   *" name="office_name" id="office_name" value="{{$district[0]->district_name}}" required="required">|</p>

  </div>
</div>




<div class="row">
  <div class="col-md-12 content-para">

    <p>उपरोक्त विषयमा  <input type="text" class="dashed-input-field" placeholder="   *" name="local_state" value="{{$local_state[0]->local_state_name}}" required="required"> वडा नं. <input type="text" class="dashed-input-small-field" placeholder="   *" name="ward" value="१" required="required">  (साविक 



      <!--  -->

              <input type="text" class="dashed-input-field star" placeholder="   *" name="sabik_address" id="sabik_address" required="required">
            <!--  -->




      <select name="sabik_type">
<option value="गा.वि.स.">गा.वि.स.</option>
<option value="नगरपालिका">नगरपालिका</option>
<option value="उप महानगरपालिका">उप महानगरपालिका</option>
<option value="महानगरपालिका">महानगरपालिका</option>
</select>
, वडा नं. <input type="text" class="dashed-input-small-field star" placeholder="   *" name="sabik_ward" id="sabik_ward" required="required">) अन्तर्गत 

    <select name="person_title">
<option value="श्री">श्री</option>
<option value="सुश्री">सुश्री</option>
<option value="श्रीमती">श्रीमती</option>
</select>



    <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="person_name">को नाममा त्यस कार्यालयमा श्रेस्ता  दर्ता कायम रहेको निम्न उल्लेखित जग्गामा 

    <select name="ghar_nirman_option">
<option value="पूर्ण">पूर्ण</option>
<option value="आशिंक">आशिंक</option>
</select>



  घर निर्माण गरी यस वडा कार्यालयमा निजले चालु आर्थिक वर्षसम्मको घरजग्गा कर/ एकीकृत सम्पत्ति कर चुक्ता गरीसकेको हुनाले निजको जग्गा धनी प्रमाण पुर्जामा घर कायम गरी दिनुहुन सिफारिस साथ अनुरोध गरिन्छ। </p> 
</div>

<h4 align="center"><b>घर कायम गर्नु पर्ने जग्गाको विवरण</b> </h4>
<div class="col-md-12">
  <div class="table-responsive">
    <table class="table table-bordered" id="house_kayem_table">
      <thead>
        <tr>

          <th width="2%" rowspan="2">क्र.स.</th>

          <th colspan="2" style="text-align:center">साविक </th>
          <th colspan="2" style="text-align:center">हाल </th>


          <th rowspan="2">सिट नं/कि.नं.</th>
          <th rowspan="2">क्षेत्रफ़ल </th>
          <th rowspan="2" width="15%">घर निर्माण भएको साल /अनुमति लिएको</th>
          <th rowspan="2"> </th>

        </tr>
        <tr><th><select name="sabik">
<option value="गा.वि.स.">गा.वि.स.</option>
<option value="नगरपालिका">नगरपालिका</option>
<option value="उप महानगरपालिका">उप महानगरपालिका</option>
<option value="महानगरपालिका"> महानगरपालिका</option>
</select>
</th>
        <th>वडा नं</th>

        <th>नगरपालिका</th>
        <th>वडा नं</th>
        </tr><tr> 

        </tr>



      </thead>
      <tbody>

        <tr>
          <td><input type="text" class="dashed-input-small-field" placeholder="*" required="required" name="" value="१"> </td>

          <td>

       <input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="sabik_vdc[]"> 
          </td>

          <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="sabik_ward_no[]"> </td>

          <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" value="{{$local_state[0]->local_state_name}}" name="nagarpalika_name[]"> </td>


          <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" value="१" name="ward_no[]"> </td>

          <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="kitta_no[]"> </td>
          <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="area[]"> </td>

          <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="ghar_nirman_year[]" id="ghar" onfocus="showNdpCalendarBox('ghar_nirman_year')"> </td>


          <td><a href="" id="add_more_ghar_kayem" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></a></td>
        </tr>

      </tbody>
    </table>

  </div>
</div>
 <div class="text-right btm-last">
  <p><input type="text" class="dashed-input-field star" placeholder="   *" name="hakim_ko_name" id="" required="required"></p>


  <p> <b> <select name="officer">
<option value="वडा अध्यक्ष">वडा अध्यक्ष</option>
<option value="का. बा वडा अध्यक्ष">का. बा वडा अध्यक्ष</option>
<option value="वडा सचिब">वडा सचिब</option>
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





<div class="col-md-12">
  <hr>

<input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
   <center><input type="submit" class="btn btn-success" name="save_ghar_kayem_sifaris" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
</div>
</div>
</form></div>






</div>
</div>
</div>
</div>
@stop