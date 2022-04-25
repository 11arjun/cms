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
  

        <form action="{{url('GharJaggaNamsariSifaris',[$data->id])}}" method="post">
           {{method_field('PATCH')}}
          {{ csrf_field() }}
           @include('master.master_header_ne2')
          <div class="x_content">
            <div class="col-md-12">
              <!-- <div class="col-md-2">
                <p><img src="{{asset('images/logo.png') }}"> </p>
              </div> -->
             <!--  <div class="col-md-8">
              <p align="center" class="font-size-24"><b> {{$local_state[0]->local_state_name}} </b></p>
               <p align="center" class="font-size-24">
                <b> {{Helpers::convertNos(auth()->user()->isAdmin)}} नं वडा कार्यालय, </b></p>
                 <h3 align="center" class="sm-head">{{Helpers::convertNos(auth()->user()->provience_id)}} नं. प्रदेश, नेपाल</h3>
              </div> -->
                <div class="col-md-2">


                </div>
              </div>

              <div class="col-md-12">
                <div class="col-md-6">
                 {{-- <p align="left"><b> पत्र संख्या&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankhya" value="{{$data->patra_sankhya}}" id="patra_sankhya" required="required"/></b></p> --}}
               </div>
               <div class="col-md-6">
               </div>
             </div>


             <div class="col-md-12">
              <div class="col-md-6">
                {{-- <p align="left"><b>चलानी नं.&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" name="chalani_no" value="{{$data->chalani_no}}" id="chalani_no" required="required"/></b></p>
 --}}

              </div>
              <div class="col-md-6">
                <p align="right"><b>मिति:&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" value="{{$data->issued_date}}" name="issued_date" id="issued_date" required="required"/></b></p>
              </div>
            </div>



            <div class="col-md-12">
              <p align="center" class="font-size-24">
                <h4 align="center"><b><u>विषय:घर जग्गा नामसारी सिफारिस। </u></b> </h4>
              </p>
            </div>

            <div class="col-md-12">

              <input type="hidden" name="ghar_jagga_namsari_id" value="{{$data->ghar_jagga_namsari_id}}">

              <p align="left">श्री <input type="text" class="dashed-input-field" placeholder="   *" name="office_chairman" value="{{$data->office_chairman}}" id="office_chairman" required="required"/></p>
              <p align="left"> &nbsp;&nbsp;&nbsp; <input type="text" class="dashed-input-field" placeholder="   *" name="office_name" value="{{$data->office_name}}" id="office_name" required="required"/></p>

            </div>


          

            <div class="col-md-12">

              <p> उपरोक्त विषयमा  <b> <input type="text" class="dashed-input-field" placeholder="   *" name="local_state" value="{{$local_state[0]->local_state_name}}" required="required"></b> वडा नं.  <b> <input type="text" class="dashed-input-small-field" placeholder="   *" name="ward" value="{{Helpers::convertNos(auth()->user()->isAdmin)}}" required="required"></b> (साविक 
  
              <input type="text" class="dashed-input-field star" placeholder="   *" name="sabik_address" value="{{$data->sabik_address}}" id="sabik_address" required="required">

              <b>
              <select name="sabik_type">
                  <option value="गा.वि.स." {{ $data->sabik_type == 'गा.वि.स.' ? 'selected' : ''}}>गा.वि.स.</option>
                  <option value="नगरपालिका" {{ $data->sabik_type == 'नगरपालिका' ? 'selected' : ''}}>नगरपालिका</option>
                  <option value="उप महानगरपालिका" {{ $data->sabik_type == 'उप महानगरपालिका' ? 'selected' : ''}}>उप महानगरपालिका</option>
                  <option value="महानगरपालिका" {{ $data->sabik_type == 'महानगरपालिका' ? 'selected' : ''}}>महानगरपालिका</option>
                  </select>
              </b>, वडा नं. <input type="text" class="dashed-input-small-field star" placeholder="   *" name="sabik_ward" value="{{$data->sabik_ward}}" id="sabik_ward" required="required">) अन्तर्गत  निवेदक  

               <b><select name="person_title">
                  <option value="श्री" {{ $data->person_title == 'श्री' ? 'selected' : ''}}>श्री</option>
                  <option value="सुश्री" {{ $data->person_title == 'सुश्री' ? 'selected' : ''}}>सुश्री</option>
                  <option value="श्रीमती" {{ $data->person_title == 'श्रीमती' ? 'selected' : ''}}>श्रीमती</option>
                  </select>
                </b>

                <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="person_name" value="{{$data->office_name}}" id="person_name">को <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="relation" value="{{$data->relation}}" id="relation">नाता पर्ने श्री <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="death_person_name" value="{{$data->death_person_name}}" id="death_person_name"> को मिति <input type="text" class="dashed-input-field" placeholder="   *" id="death_date" value="{{$data->death_date}}" required="required" name="death_date">   मा मृत्यु भएको हुनाले निज मृतकका नाममा दर्ता कायम रहेको तल उल्लेखित विवरणको घरजग्गा नामसारीको लागि 

                <b><select name="applicant_person_title">
              <option value="श्री" {{ $data->applicant_person_title == 'श्री' ? 'selected' : ''}}>श्री</option>
              <option value="सुश्री" {{ $data->applicant_person_title == 'सुश्री' ? 'selected' : ''}}>सुश्री</option>
              <option value="श्रीमती" {{ $data->applicant_person_title == 'श्रीमती' ? 'selected' : ''}}>श्रीमती</option>
              </select>
              </b>
              <input type="text" class="dashed-input-field" placeholder="   *" value="{{$data->applicant_person_name}}" required="required" name="applicant_person_name">ले निबेदन दिनु भएकोमा मृतकका हकदारहरु नाता प्रमाणित प्रमाण पत्रमा उल्लेखित भए अनुसार रहेकोले निज मृतकका नाममा रहेको सो 
                <b><select name="property_type">
                  <option value="घर" {{ $data->property_type == 'घर' ? 'selected' : ''}}>घर</option>
                  <option value="जग्गा" {{ $data->property_type == 'जग्गा' ? 'selected' : ''}}>जग्गा</option>
                  <option value="घर जग्गा" {{ $data->property_type == 'घर जग्गा' ? 'selected' : ''}}>घर जग्गा</option>
                  </select>
                </b>

              त्याँहाको नियममानुसार हकदारहरुको नाममा नामसारीको लागि सिफारिससाथ अनुरोध गरिन्छ  </p> 
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
         <td><input type="text" class="dashed-input-small-field" placeholder="  " name="" value="{{ Helpers::convertNos($count_1)}}"> </td>
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

            <h4 align="center"><b>अन्य हकदारको विवरण</b></h4>
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-bordered" id="mritak_hakdar_bibaran_table">
                  <thead>

                    <th>क्र.स.</th>
                    <th>हकदारहरुको नाम </th>
                    <th>नाता</th>
                    <th>बाबु/पतिको नाम</th>
                    <th>नागरिकता नं </th>                 
                 
                    <th>कैफियत </th>
                  
                    <th><a href="" id="add_more_mritak_hakdar" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></a> </th>
                  </thead>
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
            <td><input type="text" class="dashed-input-small-field" placeholder="  " name="" value="{{ Helpers::convertNos($count_2)}}"> </td>
            <td><input type="text" class="dashed-input-field" placeholder="  " name="hakdarko_name[]" value="{{$hakdarko_name[$i]}}"> </td>
            <td><input type="text" class="dashed-input-small-field" placeholder="  " name="mritak_relation[]" value="{{$mritak_relation[$i]}}"> </td>
            <td><input type="text" class="dashed-input-field" placeholder="  " name="  father_husband_name[]" value="{{$father_husband_name[$i]}}"> </td>
            <td><input type="text" class="dashed-input-small-field" placeholder="  " name="  ciitizenship_no[]" value="{{$ciitizenship_no[$i]}}"> </td>

            <td><input type="text" class="dashed-input-small-field" placeholder="  " name="kitta_no[]" value="{{$kitta_no[$i]}}"> </td>

            <td><a href=""  class="btn btn-danger remove-field"><span class="glyphicon glyphicon-minus"></span></a>
          </td>
          </tr>
 <?php


       $count_2++; } ?>  
                  </tbody>
                </table>
              </div>
            </div>

      <h4 align="center"><b>नामसारी गर्ने घर/जग्गाको विवरण</b></h4>
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-bordered" id="namsari_ghar_jagga_bibaran_table">
                  <thead>

                    <th>क्र.स.</th>
                    <th>वडा</th>
                    <th>क्षेत्रफ़ल</th>                 
                    <th>कित्ता नं.</th>
                    <th>कैफियत</th>
                    <th> <a href="" id="add_more_namsari_gharjagga_bibaran" class="btn btn-success"><span class="glyphicon glyphicon-plus"></th>
                  </thead>
                  <tbody>

                <?php 
                $ward_no=explode(',',$data->ward_no);
                $area=explode(',',$data->area);
                $jagga_bibaran_kitta_no=explode(',',$data->jagga_bibaran_kitta_no);
                $remakrs=explode(',',$data->remakrs);
                $count_3=1;
                $len2=sizeof($jagga_bibaran_kitta_no);
                for($i=0;$i<$len2;$i++){
                 ?>
          <tr>
            <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="" value="{{Helpers::convertNos($count_3)}}"> </td>
            <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="ward_no[]" value="{{$ward_no[$i]}}"> </td>
            <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="area[]" value="{{$area[$i]}}"> </td>
            <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name=" jagga_bibaran_kitta_no[]" value="{{$jagga_bibaran_kitta_no[$i]}}"> </td>
            <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="remakrs[]" value="{{$remakrs[$i]}}"> </td>

            <td> <a href=""  class="btn btn-danger remove-field"><span class="glyphicon glyphicon-minus"></span></a>
                          </td>
                          </tr>
                <?php $count_3++; }?>
                  </tbody>
                </table>
              </div>
            </div>
          <div class="text-right btm-last">
    <p><input type="text" class="dashed-input-field star" placeholder="   *" name="hakim_ko_name" id="" required="required" value="{{$data->hakim_ko_name}}"></p>

    <p> <b> <select name="officer">
          <option value="वडा अध्यक्ष" {{ $data->officer == 'वडा अध्यक्ष' ? 'selected' : ''}}>वडा अध्यक्ष</option>
          <option value="का. बा वडा अध्यक्ष"{{ $data->officer == 'का. बा वडा अध्यक्ष' ? 'selected' : ''}}>का. बा वडा अध्यक्ष</option>
          <option value="वडा सचिब"{{ $data->officer == 'वडा सचिब' ? 'selected' : ''}}>वडा सचिब</option>
          </select>
        </b></p>
</div>

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
              <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">

              <center><input  type="submit" class="btn btn-success" name="update_ghar_jagga_sifaris_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस">
             
        </center>
           
            </div>

      </form>
    </div>
  </div>
</div>
</div>
@stop
