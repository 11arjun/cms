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
          <h3 class="title-x">घर जग्गा नामसारी सिफारिस</h3>
         
          <div class="clearfix"></div>
        </div>
<div class="x_content">
   
<form action="{{url('GharJaggaNamsariSifaris')}}" method="post">
@include('master.master_header_ne2')
  {{ csrf_field() }}
    <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
  <div class="row yop-part">
    <div class="col-md-6">
     {{-- <p align="left"><b> पत्र संख्या :<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankhya" value="२०७५/०७६" id="patra_sankhya" required="required"></b></p>

     <p align="left"><b>चलानी नं. :<input type="text" class="dashed-input-field" name="chalani_no" id="chalani_no"></b></p> --}}


   </div>
   <div class="col-md-6">
    <p align="right"><b>मिति :<input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" name="issued_date" id="issued_date" required="required" onfocus="showNdpCalendarBox('issued_date')"></b></p>
  </div>
</div>


<div class="row">
  <div class="col-md-12">
    <p align="center" class="font-size-24">
      </p><h4 align="center"><b>विषय: घर जग्गा नामसारी सिफारिस।</b> </h4>

      <input type="hidden" name="letter_subject" value="घर जग्गा नामसारी सिफारिस">
    <p></p>
  </div>
</div>

<div class="row">
  <div class="col-md-12 title-left">

    <p align="left">श्री <input type="text" class="dashed-input-field" placeholder="   *" name="office_chairman" id="office_chairman" required="required">,</p>
    <p align="left">  <input type="text" class="dashed-input-field" placeholder="   *" name="office_name" id="office_name" required="required">।</p>

  </div>
</div>



<div class="row">
  <div class="col-md-12 content-para">

    <p>उपरोक्त विषयमा  <b> <input type="text" class="dashed-input-field" placeholder="   *" name="local_state" value="{{$local_state[0]->local_state_name}}" required="required"></b> वडा नं.  <b> <input type="text" class="dashed-input-small-field" placeholder="   *" name="ward" value="१" required="required"></b> (साविक 


      <!--  -->
              <input type="text" class="dashed-input-field star" placeholder="   *" name="sabik_address" id="sabik_address" required="required">
            <!--  -->





      <b><select name="sabik_type">
<option value="गा.वि.स.">गा.वि.स.</option>
<option value="नगरपालिका">नगरपालिका</option>
<option value="उप महानगरपालिका">उप महानगरपालिका</option>
<option value="महानगरपालिका">महानगरपालिका</option>
</select>
</b>, वडा नं. <input type="text" class="dashed-input-small-field star" placeholder="   *" name="sabik_ward" id="sabik_ward" required="required">) अन्तर्गत  निवेदक  

    <b><select name="person_title">
<option value="श्री">श्री</option>
<option value="सुश्री">सुश्री</option>
<option value="श्रीमती">श्रीमती</option>
</select>
</b>


    <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="person_name" id="person_name">को <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="relation" id="relation">नाता पर्ने श्री <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="death_person_name" id="death_person_name"> को मिति <input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" id="death_date" required="required" name="death_date" onfocus="showNdpCalendarBox('death_date')">   मा मृत्यु भएको हुनाले निज मृतकका नाममा दर्ता कायम रहेको तल उल्लेखित विवरणको घर जग्गा नामसारीको लागि 

    <b> <select name="applicant_person_title">
<option value="श्री">श्री</option>
<option value="सुश्री">सुश्री</option>
<option value="श्रीमती">श्रीमती</option>
</select>
 </b> <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="applicant_person_name">ले निवेदन दिनु भएकोमा मृतकका हकदारहरू नाता प्रमाणित प्रमाण पत्रमा उल्लेखित भएअनुसार रहेकोले निज मृतकका नाममा रहेको सो <b><select name="property_type">
<option value="घर">घर</option>
<option value="जग्गा">जग्गा</option>
<option value="घर जग्गा">घर जग्गा</option>
</select>
</b>
  त्यहाँको नियमानुसार हकदारहरूको नाममा नामसारीको लागि सिफारिस साथ अनुरोध गरिन्छ।</p> 
</div>


<h4 align="center"><b>मृत्यु भैसकेका हकदार </b></h4>
<div class="table-responsive">
  <table class="table table-bordered" id="nibedak_table">

    <thead>

      <tr><th>क्र.स.</th>
      <th>नाम थर </th>
      <th>नाता </th>
      <th>मृत्यु मिति </th>
      <th></th>

    </tr></thead>
    <tbody>
      <tr>
        <td>१</td>
        <td> 

          <input type="text" class="dashed-input-field" placeholder="   *" name="app_name[]"> 
        </td>

        <td><input type="text" class="dashed-input-field" placeholder="   *" name="app_relation[]" required="required"> </td>

        <td><input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" name="app_date[]" id="app_date" required="required" onfocus="showNdpCalendarBox('app_date')"> </td>


        <td><a href="" id="add_more_nibedak" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></a></td>
      </tr>
    </tbody>
  </table>
</div>


<div class="col-md-12">
  <h4 align="center"><b>अन्य हकदारको विवरण</b></h4>
  <div class="table-responsive">
    <table class="table table-bordered" id="mritak_hakdar_bibaran_table">
      <thead>

        <tr><th>क्र.स.</th>
        <th>हकदारहरूको नाम </th>
        <th>नाता</th>
        <th>बाबु/पतिको नाम</th>
        <th>नागरिकता नं. </th>                 

        <th>कैफियत</th>

        <th> </th>
      </tr></thead>
      <tbody>
        <tr>
          <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="" value="१"> </td>
          <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="hakdarko_name[]"> </td>
          <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="mritak_relation[]"> </td>
          <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="  father_husband_name[]"> </td>
          <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="  ciitizenship_no[]"> </td>

          <td><input type="text" class="dashed-input-small-field" placeholder="  " name="kitta_no[]"> </td>




          <td><a href="" id="add_more_mritak_hakdar" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></a></td>
        </tr>

      </tbody>
    </table>
  </div>
</div>





<div class="col-md-12">
 <h4 align="center"><b>नामसारी गर्ने घर/जग्गाको विवरण</b></h4>

 <div class="table-responsive">
  <table class="table table-bordered" id="namsari_jagga_bibaran_table">
    <thead>

      <tr><th>क्र.स.</th>
      <th>वडा</th>

      <th>क्षेत्रफ़ल</th>                 

      <th>कित्ता नं. </th>

      <th>कैफियत</th>
      <th></th>
    </tr></thead>
    <tbody>
      <tr>
        <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="" value="१"> </td>
        <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="ward_no[]"> </td>


        <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="area[]"> </td>

        <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="jagga_bibaran_kitta_no[]"> </td>

        <td><input type="text" class="dashed-input-field" name="remakrs[]"> </td>



        <td><a href="" id="add_more_namsari_jagga_bibaran_table" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></a></td>
      </tr>

    </tbody>
  </table>
</div>
</div>
</div>
 <div class="text-right btm-last">
  <p><input type="text" class="dashed-input-field star" placeholder="   *" name="hakim_ko_name" id="" required="required"></p>


  <p> <b> <select name="officer">
<option value="वडा अध्यक्ष">वडा अध्यक्ष</option>
<option value="का. बा वडा अध्यक्ष">का. बा वडा अध्यक्ष</option>
<option value="वडा सचिब">वडा सचिब</option>
</select>
 </b></p>
</div>

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

  <center><input type="submit" class="btn btn-success" name="save_ghar_jagga_sifaris_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस">
  </center>
</div>
</form>

</div>
</div>
</div>
</div>
@stop