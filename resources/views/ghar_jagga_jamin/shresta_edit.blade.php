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
          <h3 class="title-x">श्रेस्ता कार्यान्वयन सिफारिस</h3>
         
          <div class="clearfix"></div>
        </div>
<div class="x_content">
   


 <form action="{{url('ShrestaController', [$data->id])}}" method="POST" >
           {{method_field('PATCH')}}
          {{ csrf_field() }}
@include('master.master_header_ne2')
 <div class="row top-part">
    <div class="col-md-6">
     {{-- <p align="left"><b>पत्र संख्या :<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankya" id="patra_sankya" value="{{$data->patra_sankya}}" required="required"></b></p>
     <p align="left"><b>चलानी नं. :<input type="text" class="dashed-input-field" placeholder="  " name="chalani_no" id="chalani_no" value="{{$data->chalani_no}}"></b></p> --}}
   </div>
   <div class="col-md-6">
    <p align="right"><b>मिति :<input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" name="issued_date" id="issued_date" required="required" onfocus="showNdpCalendarBox('issued_date')" value="{{$data->issued_date}}"></b></p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <p align="center" class="font-size-24">
      </p><h4 align="center"><b> विषय: श्रेस्ता कार्यान्वयन सिफारिस।</b> </h4>
      <input type="hidden" name="letter_subject" value="श्रेस्ता कार्यान्वयन सिफारिस">
    <p></p>
  </div>
</div>

<div class="row title-left">
 <div class="col-md-12">

  <p align="left">श्री <input type="text" class="dashed-input-field" placeholder="   *" name="office_name" id="office_name" required="required" value="{{$data->office_name}}"> </p>
  <p align="left"><input type="text" class="dashed-input-field" placeholder="   *" name="office_address" id="office_address" required="required" value="{{$data->office_address}}">।</p>

</div>
</div>



<div class="row">
  <div class="col-md-12 content-para">




    <p align="left"> उपरोक्त सम्बन्धमा 

      <select name="jagga_dhani" onchange="myFunction()" id="mySelect">
<option value="मेरो" {{ $data->jagga_dhani == 'मेरो' ? 'selected' : ''}}>मेरो</option>
<option value="हाम्रो" {{ $data->jagga_dhani == 'हाम्रो' ? 'selected' : ''}}>हाम्रो</option>
</select>

      नाममा दर्ता&nbsp; भएको जग्गाको&nbsp;श्रेस्ता कार्यान्वयनको&nbsp;लागि&nbsp;वडा कार्यालयको सिफारिस&nbsp;आवश्यकता&nbsp;पर्ने भएको हुँदा सिफारिस पाउँ भनि <b><input type="text" class="dashed-input-field" placeholder="   *" name="local_state" value="{{$data->local_state}}" required="required"></b> वडा नं.  <b><input type="text" class="dashed-input-small-field" placeholder="   *" name="ward" value="{{$data->ward}}" required="required"></b>(साविक 



                  <input type="text" class="dashed-input-field star" placeholder="   *" name="sabik_address" id="sabik_address" required="required" value="{{$data->sabik_address}}">
         


        <b><select name="sabik_type">
<option value="गा.वि.स." {{ $data->sabik_type == 'गा.वि.स.' ? 'selected' : ''}}>गा.वि.स.</option>
<option value="नगरपालिका" {{ $data->sabik_type == 'नगरपालिका' ? 'selected' : ''}}>नगरपालिका</option>
<option value="उप महानगरपालिका" {{ $data->sabik_type == 'उप महानगरपालिका' ? 'selected' : ''}}>उप महानगरपालिका</option>
<option value="महानगरपालिका" {{ $data->sabik_type == 'महानगरपालिका' ? 'selected' : ''}}> महानगरपालिका</option>
</select>
</b>, वडा नं. <input type="text" class="dashed-input-small-field star" placeholder="   *" name="sabik_ward" id="sabik_ward" required="required" value="{{$data->sabik_ward}}">)
        बस्ने  <input type="text" class="dashed-input-field star" placeholder="   *" name="grand_father" id="grand_father" required="required" value="{{$data->grand_father}}"> को 


        <select name="grand_child">
<option value="नाती" {{ $data->grand_child == 'नाती' ? 'selected' : ''}}>नाती</option>
<option value="नातिनी" {{ $data->grand_child == 'नातिनी' ? 'selected' : ''}}>नातिनी</option>
</select>
        <input type="text" class="dashed-input-field star" placeholder="   *" name="father" id="father" required="required" value="{{$data->father}}"> को 

        <select name="child">
<option value="छोरा" {{ $data->child == 'छोरा' ? 'selected' : ''}}>छोरा</option>
<option value="छोरी" {{ $data->child == 'छोरी' ? 'selected' : ''}}>छोरी</option>
</select>

        <input type="text" class="dashed-input-field star" placeholder="   *" name="child_name" id="child_name" required="required" value="{{$data->child_name}}">ले यस कार्यालयमा दिनु भएको&nbsp;निवेदन&nbsp;अनुसार&nbsp;&nbsp;जग्गा स्थलगत सर्जमिन बुझ्दा 

        <input type="text" class="dashed-input-field star" name="prop_type" id="prop_type" readonly="readonly" value="{{$data->prop_type}}">

        जोत भोग रहेको हुदा स्रेस्ता कार्यान्बयन गरिदिनुहुन सर्जमिन मुचुल्का समेत राखि सिफारीस गरीएको ब्यहोरा अनुरोध छ।

      </p>
    </div>
  </div>
  <!--  -->
  <h4 align="center"><b>जग्गाको विवरण</b> </h4>
  <div class="col-md-12">
    <div class="table-responsive">
      <table class="table table-bordered" id="shresta_kayem_table">
        <thead>
          <tr>

            <th width="2%" rowspan="2">क्र.स.  </th>

            <th colspan="2" style="text-align: center;">साविक  </th>
            <th colspan="2" style="text-align: center;">हाल   </th>

            <th rowspan="2">कि.नं.</th>
            <th rowspan="2">क्षेत्रफ़ल </th>
            <th rowspan="2"></th>

          </tr>
          <tr><th><select name="sabik">
<option value="गा.वि.स." {{ $data->sabik == 'गा.वि.स.' ? 'selected' : ''}}>गा.वि.स.</option>
<option value="नगरपालिका" {{ $data->sabik == 'नगरपालिका' ? 'selected' : ''}}>नगरपालिका</option>
<option value="उप महानगरपालिका" {{ $data->sabik == 'उप महानगरपालिका' ? 'selected' : ''}}>उप महानगरपालिका</option>
<option value="महानगरपालिका" {{ $data->sabik == 'महानगरपालिका' ? 'selected' : ''}}> महानगरपालिका</option>
</select>
</th>
          <th>वडा नं</th>

          <th>नगरपालिका</th>
          <th>वडा नं</th>
          <th><a href="" id="add_more_shresta" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></a></th>
          </tr><tr> 

          </tr>



        </thead>
        <tbody>
          <?php

          $sabik_vdc_name=explode(',',$data->sabik_vdc_name);
            $len=sizeof($sabik_vdc_name);
            $sabik_ward_no=explode(',',$data->sabik_ward_no);
            $nagarpalika_name=explode(',',$data->nagarpalika_name);
            $ward_no=explode(',',$data->ward_no);
            $kitta_no=explode(',',$data->kitta_no);
            $area=explode(',',$data->area);

            $count=1;
       
          ?>
      <?php for($i=0;$i<$len;$i++){?>
         <tr>
          <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="" value="{{$count}}"> </td>


         
          <td>
                          <input type="text" class="dashed-input-field star" placeholder="   *" name="sabik_vdc_name[]" id="gabisa" required="required" value="{{$sabik_vdc_name[$i]}}">
                        <!--  -->
            <!--  -->
          </td>

          <!--  -->
          <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="sabik_ward_no[]" value="{{$sabik_ward_no[$i]}}"> </td>

          <td><input type="text" class="dashed-input-field" placeholder="   *" required="required"  name="nagarpalika_name[]" value="{{$nagarpalika_name[$i]}}"> </td>



          <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" value="{{$ward_no[$i]}}" name="ward_no[]"> </td>

          <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="kitta_no[]" value="{{$kitta_no[$i]}}"> </td>
          <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="area[]" value="{{$area[$i]}}"> </td>

           <td><a href=""  class="btn btn-danger remove-field"><span class="glyphicon glyphicon-minus"></span></a></td>
          {{$count++}}
        </tr>
      <?php }?>
  

      </tbody>
    </table>
 <script type="text/javascript">
  function myFunction() {
    var x = document.getElementById("mySelect").value;
    if(x=='मेरो'){
      document.getElementById("prop_type").value='निवेदकको एकलौटी';
    }else{
       document.getElementById("prop_type").value='निवेदक समेतको संयुक्त';
    }
}
</script>
    <!--  -->

         <div class="text-right btm-last">
      <p><input type="text" class="dashed-input-field star" placeholder="   *" name="hakim_ko_name" id="" required="required" value="{{$data->hakim_ko_name}}"></p>


      <p><b>  <select name="officer">
<option value="वडा अध्यक्ष"  {{ $data->officer == 'वडा अध्यक्ष' ? 'selected' : ''}}>वडा अध्यक्ष</option>
<option value="का. बा वडा अध्यक्ष" {{ $data->officer == 'का. बा वडा अध्यक्ष' ? 'selected' : ''}}>का. बा वडा अध्यक्ष</option>
<option value="वडा सचिब" {{ $data->officer == 'वडा सचिब' ? 'selected' : ''}}>वडा सचिब</option>
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
  <!-- END -->





<div class="col-md-12">
  <hr>
<input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
 
  <center><input type="submit" class="btn btn-success" name="save_shresta_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
</div>

</div>
</div></form>
</div>
</div>
<!-- footer content -->

  <!-- /footer content -->
</div>
</div>


   
   



</div>

@stop