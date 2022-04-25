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
          <h3 class="title-x">घर जग्गा नामसारी किटानी सिफारिस </h3>
         
          <div class="clearfix"></div>
        </div>
<div class="x_content">
   
      <form action="{{url('GharJaggaNamsariKitaniController')}}" method="post">
        @include('master.master_header_ne2')
             {{ csrf_field() }}

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
</b>, वडा नं. <input type="text" class="dashed-input-small-field star" placeholder="   *" name="sabik_ward" id="sabik_ward" required="required">) बस्ने श्री <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="g_name" id="g_name"> को <b><select name="g_title">
<option value="नाती">नाती</option>
<option value="नातिनी">नातिनी</option>
</select>
</b>
      श्री <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="f_name" id="f_name">तथा श्रीमती <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="m_name" id="m_name">को&nbsp;&nbsp;
      <b><select name="c_title">
<option value="छोरा">छोरा</option>
<option value="छोरी">छोरी</option>
</select>
</b>

      <b><select name="person_title">
<option value="श्री">श्री</option>
<option value="सुश्री">सुश्री</option>
<option value="श्रीमती">श्रीमती</option>
</select>
</b>


      <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="person_name" id="person_name">को <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="relation" id="relation">नाता पर्ने 



      <b><select name="nata_title">
<option value="श्री">श्री</option>
<option value="सुश्री">सुश्री</option>
<option value="श्रीमती">श्रीमती</option>
</select>
</b>

      <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="death_person_name" id="death_person_name"> को मिति <input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" id="death_date" required="required" name="death_date" onfocus="showNdpCalendarBox('death_date')">   मा मृत्यु भएको हुनाले निज मृतकका नाममा दर्ता कायम रहेको 


      <input type="text" class="dashed-input-field" placeholder="   *" name="land_local_state" value="{{$local_state[0]->local_state_name}}" required="required"> वडा नं.  <b> <input type="text" class="dashed-input-small-field" placeholder="   *" name="land_ward" value="१" required="required"></b> (साविक 


      <!--  -->
              <input type="text" class="dashed-input-field star" placeholder="   *" name="land_sabik_address" id="sabik_address" required="required">
            <!--  -->





      <b><select name="land_sabik_type">
<option value="गा.वि.स.">गा.वि.स.</option>
<option value="नगरपालिका">नगरपालिका</option>
<option value="उप महानगरपालिका">उप महानगरपालिका</option>
<option value="महानगरपालिका">महानगरपालिका</option>
</select>
</b>, वडा नं. <input type="text" class="dashed-input-small-field star" placeholder="   *" name="land_sabik_ward" id="sabik_ward" required="required">) 
      मा पर्ने कि. न . <input type="text" class="dashed-input-field star" placeholder="   *" name="land_kitta_no" id="kitta_no" required="required">को ज.बि&nbsp;<input type="text" class="dashed-input-field star" placeholder="   *" name="jagga_area" id="jagga_area" required="required">&nbsp; भएको&nbsp;मृतक जग्गा धनीको नामको 
      <select name="prop_type">
<option value="जग्गा">जग्गा</option>
<option value="घर">घर</option>
<option value="घर जग्गा">घर जग्गा</option>
</select>


      नाता प्रमाणित प्रमाणपत्रमा&nbsp;उल्लेखित भए अनुसार तल&nbsp;उल्लेखित <select name="hak_type">
<option value="हकदार">हकदार</option>
<option value="हकदारहरु">हकदारहरु</option>
</select>
      को नाममा <input type="text" class="dashed-input-field star" value="एकल" placeholder="  " name="darta_type" id="darta_type" readonly="readonly">&nbsp;
    नामसारीको लागि सिफारिस साथ अनुरोध गरिन्छ।</p>  

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

            <input type="text" class="dashed-input-field" placeholder="  " name="app_name[]"> 
          </td>

          <td><input type="text" class="dashed-input-field" placeholder="  " name="app_relation[]"> </td>

          <td><input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="  " name="app_date[]" id="app_date" onfocus="showNdpCalendarBox('app_date')"> </td>


          <td><a href="" id="add_more_nibedak" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></a></td>
        </tr>
      </tbody>
    </table>
  </div>


  <div class="col-md-12">
    <h4 align="center"><b>जीवित हकदारको विवरण</b></h4>
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
            <td><input type="text" class="dashed-input-small-field" placeholder="  " name="" value="१"> </td>
            <td><input type="text" class="dashed-input-field" placeholder="  " name="hakdarko_name[]"> </td>
            <td><input type="text" class="dashed-input-small-field" placeholder="  " name="mritak_relation[]"> </td>
            <td><input type="text" class="dashed-input-field" placeholder="  " name="  father_husband_name[]"> </td>
            <td><input type="text" class="dashed-input-small-field" placeholder="  " name="  ciitizenship_no[]"> </td>

            <td><input type="text" class="dashed-input-small-field" placeholder="  " name="kitta_no[]"> </td>




            <td><a href="" id="add_more_mritak_hakdar" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></a></td>
          </tr>

        </tbody>
      </table>
    </div>
  </div>



  <div class="col-md-12">
    <h4 align="center"><b>नामसारी गरिने हकदारको विवरण</b></h4>
    <div class="table-responsive">
      <table class="table table-bordered" id="mritak_namsari_hakdar_bibaran_table">
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
            <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="namsarihakdarko_name[]"> </td>
            <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="namsarimritak_relation[]"> </td>
            <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name=" namsarifather_husband_name[]"> </td>
            <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="namsariciitizenship_no[]"> </td>

            <td><input type="text" class="dashed-input-small-field" placeholder="  " name="namsarikitta_no[]"> </td>




            <td><a href="" id="add_more_namsari_mritak_hakdar" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></a></td>
          </tr>

        </tbody>
      </table>
    </div>
  </div>

</div>
<p>
  निवेदकको निवेदन अनुसार सर्जमिन बुझ्दा 
  <input type="text" class="dashed-input-field" placeholder="   *" name="sarjaminlocal_state" value="{{$local_state[0]->local_state_name}}" required="required"> 

  वडा नं. <input type="text" class="dashed-input-small-field" placeholder="   *" name="sarjaminward" value="१" required="required"> बस्ने बर्ष
  <input type="text" class="dashed-input-small-field" placeholder="   *" name="sarjaminbarsa" required="required">
  को <input type="text" class="dashed-input-field" placeholder="   *" name="sarjaminname" required="required"> समेत <input type="text" class="dashed-input-small-field" placeholder="   *" name="sarjaminno" required="required"> जना संलग्न भई दिएको मुचुल्का यसै पत्र साथ राखि किटानी सिफारीस गरिएको छ।साथै </p>
   <textarea class="form-control" name="behora"></textarea>
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
<input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
 
  <center><input type="submit" class="btn btn-success" name="save_ghar_jagga_sifaris_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस">
  </center>
</div>
</form>
</div>
</div>
</div>
</div>

@stop