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
   
<form action="{{url('ShrestaController')}}" method="post">
             {{ csrf_field() }}
             @include('master.master_header_ne2')
 <div class="row top-part">
    <div class="col-md-6">
     {{-- <p align="left"><b>पत्र संख्या :<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankya" id="patra_sankya" value="२०७५/०७६" required="required"></b></p>
     <p align="left"><b>चलानी नं. :<input type="text" class="dashed-input-field" placeholder="  " name="chalani_no" id="chalani_no"></b></p> --}}
   </div>
   <div class="col-md-6">
    <p align="right"><b>मिति :<input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" name="issued_date" id="issued_date" required="required" onfocus="showNdpCalendarBox('issued_date')"></b></p>
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

  <p align="left">श्री <input type="text" class="dashed-input-field" placeholder="   *" name="office_name" id="office_name" required="required"> </p>
  <p align="left"><input type="text" class="dashed-input-field" placeholder="   *" name="office_address" id="office_address" required="required">।</p>

</div>
</div>



<div class="row">
  <div class="col-md-12 content-para">




    <p align="left"> उपरोक्त सम्बन्धमा 

      <select name="jagga_dhani" onchange="myFunction()" id="mySelect">
<option value="मेरो">मेरो</option>
<option value="हाम्रो">हाम्रो</option>
</select>

      नाममा दर्ता&nbsp; भएको जग्गाको&nbsp;श्रेस्ता कार्यान्वयनको&nbsp;लागि&nbsp;वडा कार्यालयको सिफारिस&nbsp;आवश्यकता&nbsp;पर्ने भएको हुँदा सिफारिस पाउँ भनि <b><input type="text" class="dashed-input-field" placeholder="   *" name="local_state" value="{{$local_state[0]->local_state_name}}" required="required"></b> वडा नं.  <b><input type="text" class="dashed-input-small-field" placeholder="   *" name="ward" value="<?php if(auth()->user()->isAdmin == 1){
    echo "१";
  }else if(auth()->user()->isAdmin == 2){
    echo "२";
  }else if(auth()->user()->isAdmin == 3){
    echo "३";
  }else if(auth()->user()->isAdmin == 4){
    echo "४";
  }else if(auth()->user()->isAdmin == 5){
    echo "५";
  }else if(auth()->user()->isAdmin == 6){
    echo "६";
  }else if(auth()->user()->isAdmin == 7){
    echo "७";
  }else if(auth()->user()->isAdmin == 8){
    echo "८";
  }else if(auth()->user()->isAdmin == 9){
    echo "९";
  }else if(auth()->user()->isAdmin == 10){
    echo "१०";
  }else if(auth()->user()->isAdmin == 11){
    echo "११";
  }else if(auth()->user()->isAdmin == 12){
    echo "१२";
  }else{

  }?>" required="required"></b>(साविक 



                  <input type="text" class="dashed-input-field star" placeholder="   *" name="sabik_address" id="sabik_address" required="required">
         


        <b><select name="sabik_type">
<option value="गा.वि.स.">गा.वि.स.</option>
<option value="नगरपालिका">नगरपालिका</option>
<option value="उप महानगरपालिका">उप महानगरपालिका</option>
<option value="महानगरपालिका"> महानगरपालिका</option>
</select>
</b>, वडा नं. <input type="text" class="dashed-input-small-field star" placeholder="   *" name="sabik_ward" id="sabik_ward" required="required">)
        बस्ने  <input type="text" class="dashed-input-field star" placeholder="   *" name="grand_father" id="grand_father" required="required"> को 


        <select name="grand_child">
<option value="नाती">नाती</option>
<option value="नातिनी">नातिनी</option>
</select>
        <input type="text" class="dashed-input-field star" placeholder="   *" name="father" id="father" required="required"> को 

        <select name="child">
<option value="छोरा">छोरा</option>
<option value="छोरी">छोरी</option>
</select>

        <input type="text" class="dashed-input-field star" placeholder="   *" name="child_name" id="child_name" required="required">ले यस कार्यालयमा दिनु भएको&nbsp;निवेदन&nbsp;अनुसार&nbsp;&nbsp;जग्गा स्थलगत सर्जमिन बुझ्दा 

        <input type="text" class="dashed-input-field star" name="prop_type" id="prop_type" readonly="readonly" value="निवेदकको एकलौटी">


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

            <th width="2%" rowspan="2">क्र.स.</th>

            <th colspan="2" style="text-align: center;">साविक  </th>
            <th colspan="2" style="text-align: center;">हाल   </th>

            <th rowspan="2">कि.नं.</th>
            <th rowspan="2">क्षेत्रफ़ल </th>
            <th rowspan="2"></th>

          </tr>
          <tr><th><select name="sabik">
<option value="गा.वि.स.">गा.वि.स.</option>
<option value="नगरपालिका">नगरपालिका</option>
<option value="उप महानगरपालिका">उप महानगरपालिका</option>
<option value="महानगरपालिका">महानगरपालिका</option>
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
          <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="" value="१"> </td>


         
          <td>
                          <input type="text" class="dashed-input-field star" placeholder="   *" name="sabik_vdc_name[]" id="gabisa" required="required">
                        <!--  -->
            <!--  -->
          </td>

          <!--  -->
          <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="sabik_ward_no[]"> </td>

          <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" value="{{$local_state[0]->local_state_name}}" name="nagarpalika_name[]"> </td>



          <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" value="१" name="ward_no[]"> </td>

          <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="kitta_no[]"> </td>
          <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="area[]"> </td>

          <td><a href="" id="add_more_shresta" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></a></td>
        </tr>

      </tbody>
    </table>

    <!--  -->

         <div class="text-right btm-last">
      <p><input type="text" class="dashed-input-field star" placeholder="   *" name="hakim_ko_name" id="" required="required"></p>


      <p><b>  <select name="officer">
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
        <label>निवेदककोठेगाना</label><input type="text" name="nibedak_address" class="form-control" required>
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