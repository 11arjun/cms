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
    


              <form action="{{url('GharJaggaNamsariKitaniController', [$data->id])}}" method="POST" >
                @include('master.master_header_ne2')
           {{method_field('PATCH')}}
          {{ csrf_field() }}

    <div class="row yop-part">
      <div class="col-md-6">
       {{-- <p align="left"><b> पत्र संख्या :<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankhya" value="२०७५/०७६" id="patra_sankhya" required="required" value="{{$data->patra_sankhya}}"></b></p>

       <p align="left"><b>चलानी नं. :<input type="text" class="dashed-input-field" name="chalani_no" id="chalani_no" value="{{$data->chalani_no}}"></b></p>
 --}}

     </div>
     <div class="col-md-6">
      <p align="right"><b>मिति :<input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" name="issued_date" id="issued_date" required="required" onfocus="showNdpCalendarBox('issued_date')" value="{{$data->issued_date}}"></b></p>
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

      <p align="left">श्री <input type="text" class="dashed-input-field" placeholder="   *" name="office_chairman" id="office_chairman" required="required" value="{{$data->office_chairman}}">,</p>
      <p align="left">  <input type="text" class="dashed-input-field" placeholder="   *" name="office_name" id="office_name" required="required" value="{{$data->office_name}}">।</p>

    </div>
  </div>



  <div class="row">
    <div class="col-md-12 content-para">

      <p>उपरोक्त विषयमा  <b> <input type="text" class="dashed-input-field" placeholder="   *" name="local_state" value="{{$data->local_state}}" required="required"></b> वडा नं.  <b> <input type="text" class="dashed-input-small-field" placeholder="   *" name="ward" value="{{$data->ward}}" required="required"></b> (साविक 


        <!--  -->
                  <input type="text" class="dashed-input-field star" placeholder="   *" name="sabik_address" id="sabik_address" required="required" value="{{$data->sabik_address}}">
                <!--  -->





        <b><select name="sabik_type">
<option value="गा.वि.स." {{ $data->sabik_type == 'गा.वि.स.' ? 'selected' : ''}}>गा.वि.स.</option>
<option value="नगरपालिका" {{ $data->sabik_type == 'नगरपालिका' ? 'selected' : ''}}>नगरपालिका</option>
<option value="उप महानगरपालिका" {{ $data->sabik_type == 'उप महानगरपालिका' ? 'selected' : ''}}>उप महानगरपालिका</option>
<option value="महानगरपालिका" {{ $data->sabik_type == 'महानगरपालिका' ? 'selected' : ''}}> महानगरपालिका</option>
</select>
</b>, वडा नं. <input type="text" class="dashed-input-small-field star" placeholder="   *" name="sabik_ward" id="sabik_ward" required="required" value="{{$data->sabik_ward}}">) बस्ने श्री <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="g_name" id="g_name" value="{{$data->g_name}}"> को <b><select name="g_title">
<option value="नाती" {{ $data->g_title == 'नाती' ? 'selected' : ''}}>नाती</option>
<option value="नातिनी" {{ $data->g_title == 'नातिनी' ? 'selected' : ''}}>नातिनी</option>
</select>
</b>
      श्री <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="f_name" id="f_name" value="{{$data->f_name}}">तथा श्रीमती <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="m_name" id="m_name" value="{{$data->m_name}}">को&nbsp;&nbsp;
      <b><select name="c_title">
<option value="छोरा" {{ $data->c_title == 'छोरा' ? 'selected' : ''}}>छोरा</option>
<option value="छोरी" {{ $data->c_title == 'छोरी' ? 'selected' : ''}}>छोरी</option>
</select>
</b>

      <b><select name="person_title">
<option value="श्री" {{ $data->person_title == 'श्री' ? 'selected' : ''}}>श्री</option>
<option value="सुश्री" {{ $data->person_title == 'सुश्री' ? 'selected' : ''}}>सुश्री</option>
<option value="श्रीमती" {{ $data->person_title == 'श्रीमती' ? 'selected' : ''}}>श्रीमती</option>
</select>
</b>


      <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="person_name" id="person_name" value="{{$data->person_name}}">को <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="relation" id="relation" value="{{$data->relation}}">नाता पर्ने 



      <b><select name="nata_title">

<option value="श्री" {{ $data->nata_title== 'श्री' ? 'selected' : ''}}>श्री</option>
<option value="सुश्री" {{ $data->nata_title== 'सुश्री' ? 'selected' : ''}}>सुश्री</option>
<option value="श्रीमती" {{ $data->nata_title== 'श्रीमती' ? 'selected' : ''}}>श्रीमती</option>
</select>
</b>

      <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="death_person_name" id="death_person_name" value="{{$data->death_person_name}}"> को मिति <input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" id="death_date" required="required" name="death_date" onfocus="showNdpCalendarBox('death_date')" value="{{$data->death_date}}">   मा मृत्यु भएको हुनाले निज मृतकका नाममा दर्ता कायम रहेको 


      <input type="text" class="dashed-input-field" placeholder="   *" name="land_local_state" value="{{$data->land_local_state}}" required="required"> वडा नं.  <b> <input type="text" class="dashed-input-small-field" placeholder="   *" name="land_ward" value="{{$data->land_ward}}" required="required" ></b> (साविक 


      <!--  -->
              <input type="text" class="dashed-input-field star" placeholder="   *" name="land_sabik_address" id="sabik_address" required="required" value="{{$data->land_sabik_address}}">
            <!--  -->





      <b><select name="land_sabik_type">
<option value="गा.वि.स." {{ $data->land_sabik_type == 'गा.वि.स.' ? 'selected' : ''}}>गा.वि.स.</option>
<option value="नगरपालिका" {{ $data->land_sabik_type == 'नगरपालिका' ? 'selected' : ''}}>नगरपालिका</option>
<option value="उप महानगरपालिका" {{ $data->land_sabik_type == 'उप महानगरपालिका' ? 'selected' : ''}}>उप महानगरपालिका</option>
<option value="महानगरपालिका" {{ $data->land_sabik_type == 'महानगरपालिका' ? 'selected' : ''}}> महानगरपालिका</option>
</select>
</b>, वडा नं. <input type="text" class="dashed-input-small-field star" placeholder="   *" name="land_sabik_ward" id="sabik_ward" required="required" value="{{$data->land_sabik_ward}}">) 
      मा पर्ने कि. न . <input type="text" class="dashed-input-field star" placeholder="   *" name="land_kitta_no" id="kitta_no" required="required" value="{{$data->kitta_no}}">को ज.बि&nbsp;<input type="text" class="dashed-input-field star" placeholder="   *" name="jagga_area" id="jagga_area" required="required" value="{{$data->jagga_area}}">&nbsp; भएको&nbsp;मृतक जग्गा धनीको नामको 
      <select name="prop_type">
<option value="जग्गा" {{ $data->prop_type == 'जग्गा' ? 'selected' : ''}}>जग्गा</option>
<option value="घर" {{ $data->prop_type == 'घर' ? 'selected' : ''}}>घर</option>
<option value="घर जग्गा" {{ $data->prop_type == 'घर जग्गा' ? 'selected' : ''}}>घर जग्गा</option>
</select>


      नाता प्रमाणित प्रमाणपत्रमा&nbsp;उल्लेखित भए अनुसार तल&nbsp;उल्लेखित <select name="hak_type">
<option value="हकदार" {{ $data->hak_type == 'हकदार' ? 'selected' : ''}}>हकदार</option>
<option value="हकदारहरु" {{ $data->hak_type == 'हकदारहरु' ? 'selected' : ''}}>हकदारहरु</option>
</select>
      को नाममा <input type="text" class="dashed-input-field star" value="{{$data->darta_type}}" placeholder="  " name="darta_type" id="darta_type" readonly="readonly" >&nbsp;
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
        <th><a href="" id="add_more_nibedak" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></a></th>

      </tr></thead>
      <tbody>
        <?php 

        $app_name=explode(',',$data->app_name);
        $app_relation=explode(',',$data->app_relation);
        $app_date=explode(',',$data->app_date);
        $len=sizeof($app_name);
        $count_1=1;
           ?>
           <?php for ($i=0; $i <$len ; $i++) { 
            ?>
        <tr>
          <td>{{$count_1}}</td>
          <td> 

            <input type="text" class="dashed-input-field" placeholder="  " name="app_name[]" value="{{$app_name[$i]}}"> 
          </td>

          <td><input type="text" class="dashed-input-field" placeholder="  " name="app_relation[]" value="{{$app_relation[$i]}}"> </td>

          <td><input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="  " name="app_date[]" id="app_date" onfocus="showNdpCalendarBox('app_date')" value="{{$app_date[$i]}}"> </td>


          <td>


<a href=""  class="btn btn-danger remove-field"><span class="glyphicon glyphicon-minus"></span></a>
          </td>
          </tr>
<?php  # code...
$count_1++;
           }?>
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

          <th><a href="" id="add_more_mritak_hakdar" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></a> </th>
        </tr></thead>
        <tbody>
            <?php 


          $hakdarko_name=explode(',',$data->hakdarko_name);
          $mritak_relation=explode(',',$data->mritak_relation);
          $father_husband_name=explode(',',$data->father_husband_name);
          $ciitizenship_no=explode(',',$data->ciitizenship_no);
          $kitta_no=explode(',',$data->kitta_no);
          $count_2=1;
          $len1=sizeof($kitta_no);
          for($i=0;$i<$len1;$i++){
           ?>
          <tr>
            <td><input type="text" class="dashed-input-small-field" placeholder="  " name="" value="{{$count_2}}"> </td>
            <td><input type="text" class="dashed-input-field" placeholder="  " name="hakdarko_name[]" value="{{$hakdarko_name[$i]}}"> </td>
            <td><input type="text" class="dashed-input-small-field" placeholder="  " name="mritak_relation[]" value="{{$mritak_relation[$i]}}"> </td>
            <td><input type="text" class="dashed-input-field" placeholder="  " name="  father_husband_name[]" value="{{$father_husband_name[$i]}}"> </td>
            <td><input type="text" class="dashed-input-small-field" placeholder="  " name="  ciitizenship_no[]" value="{{$ciitizenship_no[$i]}}"> </td>

            <td><input type="text" class="dashed-input-small-field" placeholder="  " name="kitta_no[]" value="{{$kitta_no[$i]}}"> </td>




             <td>


<a href=""  class="btn btn-danger remove-field"><span class="glyphicon glyphicon-minus"></span></a>
          </td>
          </tr>
 <?php


       $count_2++; } ?>  
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

          <th> <a href="" id="add_more_namsari_mritak_hakdar" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></a></th>
        </tr></thead>
        <tbody>
           <?php 

          $namsarihakdarko_name=explode(',',$data->namsarihakdarko_name);
          $namsarimritak_relation=explode(',',$data->namsarimritak_relation);
          $namsarifather_husband_name=explode(',',$data->namsarifather_husband_name);
          $namsariciitizenship_no=explode(',',$data->namsariciitizenship_no);
          $namsarikitta_no=explode(',',$data->namsarikitta_no);
          $count_3=1;
          $len2=sizeof($namsarikitta_no);
          for($i=0;$i<$len2;$i++){
           ?>
          <tr>
            <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="" value="{{$count_3}}"> </td>
            <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="namsarihakdarko_name[]" value="{{$namsarihakdarko_name[$i]}}"> </td>
            <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="namsarimritak_relation[]" value="{{$namsarimritak_relation[$i]}}"> </td>
            <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name=" namsarifather_husband_name[]" value="{{$namsarifather_husband_name[$i]}}"> </td>
            <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="namsariciitizenship_no[]" value="{{$namsariciitizenship_no[$i]}}"> </td>

            <td><input type="text" class="dashed-input-small-field" placeholder="  " name="namsarikitta_no[]" value="{{$namsarikitta_no[$i]}}"> </td>




            
              <td>


<a href=""  class="btn btn-danger remove-field"><span class="glyphicon glyphicon-minus"></span></a>
          </td>
          </tr>
<?php $count_3++; }?>
        </tbody>
      </table>
    </div>
  </div>

</div>
<p>
  निवेदकको निवेदन अनुसार सर्जमिन बुझ्दा 
  <input type="text" class="dashed-input-field" placeholder="   *" name="sarjaminlocal_state" value="{{$data->sarjaminlocal_state}}" required="required"> 

  वडा नं. <input type="text" class="dashed-input-small-field" placeholder="   *" name="sarjaminward" value="{{$data->sarjaminward}}" required="required"> बस्ने बर्ष
  <input type="text" class="dashed-input-small-field" placeholder="   *" name="sarjaminbarsa" required="required" value="{{$data->sarjaminbarsa}}">
  को <input type="text" class="dashed-input-field" placeholder="   *" name="sarjaminname" required="required" value="{{$data->sarjaminname}}"> समेत <input type="text" class="dashed-input-small-field" placeholder="   *" name="sarjaminno" required="required" value="{{$data->sarjaminno}}"> जना संलग्न भई दिएको मुचुल्का यसै पत्र साथ राखि किटानी सिफारीस गरिएको छ।साथै </p>
   <textarea class="form-control" name="behora">{{$data->behora}}</textarea>
     <div class="text-right btm-last">
    <p><input type="text" class="dashed-input-field star" placeholder="   *" name="hakim_ko_name" id="" required="required" value="{{$data->hakim_ko_name}}"></p>


    <p> <b> <select name="officer">
<option value="वडा अध्यक्ष" {{ $data->officer == 'वडा अध्यक्ष' ? 'selected' : ''}}>वडा अध्यक्ष</option>
<option value="का. बा वडा अध्यक्ष"{{ $data->officer == 'का. बा वडा अध्यक्ष' ? 'selected' : ''}}>का. बा वडा अध्यक्ष</option>
<option value="वडा सचिब"{{ $data->officer == 'वडा सचिब' ? 'selected' : ''}}>वडा सचिब</option>
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