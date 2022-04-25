
@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="right_col nep" role="main" style="min-height: 1158px;">
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">

        <div class="x_title">
          <h3 class="title-x">कारोबार थप पान नं</h3>
         
          <div class="clearfix"></div>
        </div>
<div class="x_content">
   @include('master.master_header_ne2')

  <form action="{{url('KarobarPanno', [$data->id])}}" method="POST" >
           {{method_field('PATCH')}}
          {{ csrf_field() }}
              <div class="row top-part">
                <div class="col-md-6">
                 <p align="left"><b>पत्र संख्या :<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankya" id="patra_sankya" value="{{$data->patra_sankya}}" required="required"></b></p>
               
                <p align="left"><b>चलानी नं. :<input type="text" class="dashed-input-field" name="chalani_no" id="chalani_no" value="{{$data->chalani_no}}"></b></p>


              </div>
              <div class="col-md-6">
                <p align="right"><b>मिति :<input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" name="issued_date" id="issued_date" required="required" onfocus="showNdpCalendarBox('issued_date')" value="{{$data->issued_date}}"></b></p>
              </div>
            </div>

          <div class="row">
            <div class="col-md-12">
              <p align="center" class="font-size-24">
                </p><h4 align="center"><b>विषय: सिफारिस गरिएको बारे।</b></h4>
                <input type="hidden" name="letter_subject" value="सिफारिस गरिएको बारे">
                
              <p></p>
            </div>
          </div>

          <div class="row title-left">
          <div class="col-md-12">
            <p align="left">श्री <input type="text" class="dashed-input-field" placeholder="   *" name="pan_office_name" id="pan_office_name" required="required" value="{{$data->pan_office_name}}"> ,</p>
            <p align="left">  <input type="text" class="dashed-input-field" placeholder="   *" name="pan_office_address" id="pan_office_address" required="required" value="{{$data->pan_office_address}}">।</p>

          </div>
        </div>




          <div class="row content-para">
            <div class="col-md-12">
              <p>उपरोक्त विषयमा  <b><input type="text" class="dashed-input-field" placeholder="   *" name="local_state" value="{{$data->local_state}}" required="required"></b> वडा नं.  <b><input type="text" class="dashed-input-small-field" placeholder="   *" name="ward" value="{{$data->ward}}" required="required"></b> (साविक 

               <!--  -->
                                  <input type="text" class="dashed-input-field star" placeholder="   *" name="sabik_address" id="sabik_address" required="required" value="{{$data->sabik_address}}">
                                <!--  -->



                 <b><select name="sabik_type">
<option value="गा.वि.स." {{ $data->sabik_type == 'गा.वि.स.' ? 'selected' : ''}}>गा.वि.स.</option>
<option value="नगरपालिका" {{ $data->sabik_type == 'नगरपालिका' ? 'selected' : ''}}>नगरपालिका</option>
<option value="उप महानगरपालिका" {{ $data->sabik_type == 'उप महानगरपालिका' ? 'selected' : ''}}>उप महानगरपालिका</option>
<option value="महानगरपालिका" {{ $data->sabik_type == 'महानगरपालिका' ? 'selected' : ''}}> महानगरपालिका</option>
</select>
</b>, वडा नं. <input type="text" class="dashed-input-small-field star" placeholder="   *" name="sabik_ward" id="sabik_ward" required="required" value="{{$data->sabik_ward}}">)
 मा बस्ने  
                <b><select name="person_title">
<option value="श्री" {{ $data->person_title == 'श्री' ? 'selected' : ''}}>श्री</option>
<option value="सुश्री" {{ $data->person_title == 'सुश्री' ? 'selected' : ''}}>सुश्री</option>
<option value="श्रीमती" {{ $data->person_title == 'श्रीमती' ? 'selected' : ''}}>श्रीमती</option>
</select>
</b>

                <input type="text" class="dashed-input-field" placeholder="   *" required="required" id="person_name" name="person_name" value="{{$data->person_name}}">ले दिएको निवेदन अनुसार  <input type="text" class="dashed-input-field" placeholder="   *" required="required" id="pasal_address" name="pasal_address" value="{{$data->pasal_address}}"> मा
                  <b><select name="property_type">
<option value="आफ्नै" {{ $data->property_type == 'आफ्नै' ? 'selected' : ''}}>आफ्नै</option>
<option value="भाडाको " {{ $data->property_type == 'भाडाको ' ? 'selected' : ''}}>भाडाको </option>
</select>
</b>

                  घरमा पान नं. <input type="text" class="dashed-input-field" placeholder="   *" required="required" id="pan_no" name="pan_no" value="{{$data->pan_no}}">  मा

                  <input type="text" class="dashed-input-field" placeholder="   *" required="required" id="pasal_name" name="pasal_name" value="{{$data->pasal_name}}"> संचालन गरी आएकोमा हाल उक्त पान नं. मा कारोबार थप गरी <input type="text" class="dashed-input-field" placeholder="   *" required="required" id="pasal_new" name="pasal_new" value="{{$data->pasal_new}}"> सहितको व्यवसाय  संचालन <b><select name="business_start">
<option value="गरी आएको" {{ $data->business_start == 'गरी आएको' ? 'selected' : ''}}>गरी आएको</option>
<option value="गर्ने" {{ $data->business_start == 'गर्ने' ? 'selected' : ''}}>गर्ने</option>
</select>
</b>
                 हुँदा कारोबार थपको लागि सिफारिस पाऊँ भनी दिनु भएको निवेदन अनुसार निजलाई उक्त  व्यवसायमा कारोबार थप संचालनको लागि  नियम अनुसार गरी दिनुहुन सिफारिस साथ अनुरोध छ।
                </p>
              </div>
            </div>
             <h2>बोधार्थ&nbsp;  </h2>
              

              <table class="table table-bordered" id="sabik_address_table">
                <tbody>


                   <tr>
                    <td>

<textarea name="bodartha" class="form-control">{{$data->bodartha}}</textarea>

                    </td>
                   
                  </tr>
                </tbody>
              </table>
         
                           <div class="text-right btm-last">
            <p><input type="text" class="dashed-input-field star" placeholder="   *" name="hakim_ko_name" id="" required="required" value="{{$data->hakim_ko_name}}"></p>

         
             <p> <b> <select name="officer">
<option value="वडा अध्यक्ष" {{ $data->officer == 'वडा अध्यक्ष' ? 'selected' : ''}}>वडा अध्यक्ष</option>
<option value="का. बा वडा अध्यक्ष"{{ $data->officer == 'का. बा वडा अध्यक्ष' ? 'selected' : ''}}>का. बा वडा अध्यक्ष</option>
<option value="वडा सचिब"{{ $data->officer == 'वडा सचिब' ? 'selected' : ''}}>वडा सचिब</option>
</select>
 </b></p>
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
                <center><input type="submit" class="btn btn-success" name="save_karobarpanno_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
             </div>
             </form>
           </div>
         </div>
       </div>
     </div>
     

</div>
@stop