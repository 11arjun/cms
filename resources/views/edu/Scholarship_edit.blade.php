@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="right_col nep" role="main" style="min-height: 986px;">
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">

        <div class="x_title">
          <h3 class="title-x"> छात्रवृत्ति सिफारिस</h3>

          <div class="clearfix"></div>
        </div>
<div class="x_content">

  {{-- <header>
    <div class="row">
      <div class="col-md-3">
        <p><img src="{{ asset('images/logo.png') }}"> </p>
      </div>
      <div class="col-md-9 head-edt">

      </div>
    </div>
    <div class="row">
      <div class="col-md-12 title_header">
          <h1 class="name_header">  {{$local_state[0]->local_state_name}} </h1>
        <h2 class="font-size-24">
            @if(auth()->user()->isAdmin != 0)        
        {{Helpers::convertNos(auth()->user()->isAdmin)}} नं. वडा कार्यालय <p></p>
        </h2>,
        @endif
        <h3 align="center" class="sm-head"> {{$district[0]->district_name}}</h3>
        <h3 align="center" class="sm-head">{{$provience[0]->province_name}}, नेपाल</h3>
      </div>
      <div class="col-md-2">
              </div>
    </div>
  </header> --}}

             <form action="{{url('scholarship', [$data->id])}}" method="POST" >
           {{method_field('PATCH')}}
          {{ csrf_field() }}

           @include('master.master_header_ne2')

                <div class="row top-part">
                  <div class="col-md-6">
                   {{-- <p align="left"> <b> पत्र संख्या :<input type="text" class=" dashed-input-field" placeholder="  *" name="patra_sankhya" id="patra_sankhya" value="{{$data->patra_sankhya}}" required="required" autocomplete="off"></b></p> --}}

                  {{--  <p align="left" class="star"><b>चलानी नं. :<input type="text" class="dashed-input-field" name="chalani_no" id="chalani_no" autofocus="true" value="{{$data->chalani_no}}"></b>
                   </p> --}}


                 </div>
                 <div class="col-md-6">
                  <p align="right" class="star"><b>मिति :<input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" name="issued_date" id="issued_date" required="required" onfocus="showNdpCalendarBox('issued_date')" value="{{$data->issued_date}}"></b></p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <p align="center" class="font-size-24">
                    </p><h4 align="center"><b>विषय: छात्रवृत्ति सिफारिस।</b></h4>
                    <input type="hidden" name="letter_subject" value="छात्रवृत्ति सिफारिस">
                  <p></p>
                </div>
              </div>

              <div class="row title-left">
                <div class="col-md-12">
                  <p align="left"><b>जो सँग सम्बन्धित छ।</b></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 content-para">

                  <p>उपरोक्त विषयमा  <b> <input type="text" class=" dashed-input-field" placeholder="  *" name="local_state" id="local_state" value="{{$data->local_state}}" required="required" autocomplete="off"> </b> (साविक



                     <!--  -->
                                              <input type="text" class="dashed-input-field star" placeholder="   *" name="sabik_address" id="sabik_address" required="required" value="{{$data->sabik_address}}">
                                      <!--  -->




                   <b> <select name="sabik_type">
<option value="गा.वि.स." {{ $data->sabik_type == 'गा.वि.स.' ? 'selected' : ''}}>गा.वि.स.</option>
<option value="नगरपालिका" {{ $data->sabik_type == 'नगरपालिका' ? 'selected' : ''}}>नगरपालिका</option>
<option value="उप महानगरपालिका" {{ $data->sabik_type == 'उप महानगरपालिका' ? 'selected' : ''}}>उप महानगरपालिका</option>
<option value="महानगरपालिका" {{ $data->sabik_type == 'महानगरपालिका' ? 'selected' : ''}}> महानगरपालिका</option>
</select>
</b>, वडा नं. <input type="text" class="dashed-input-small-field star" placeholder="   *" name="sabik_ward" id="sabik_ward" required="required" value="{{$data->sabik_ward}}">)
                    अन्तर्गत

                    <b><select name="address_type">
<option value="स्थायी" {{ $data->address_type == 'स्थायी' ? 'selected' : ''}}>स्थायी</option>
<option value="अस्थायी" {{ $data->address_type == 'अस्थायी' ? 'selected' : ''}}>अस्थायी</option>
</select>
</b>
                    बसोबास गर्ने श्री <input type="text" class="dashed-input-field star ui-autocomplete-input" name="father_name" id="father_name" placeholder="   *"  autocomplete="off" required="required" value="{{$data->father_name}}"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><span class="star"></span> तथा श्रीमती <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="mother_name" value="{{$data->mother_name}}" autocomplete="off"><span class="star"></span> को आर्थिक अवस्था
                    <b><select name="economy_type">
<option value="कमजोर" {{ $data->economy_type == 'कमजोर' ? 'selected' : ''}}>कमजोर</option>
<option value="न्युन" {{ $data->economy_type == 'न्युन' ? 'selected' : ''}}>न्युन</option>
</select>
</b>
                    भएको हुँदा निजहरूको
                    <b><select name="children_gender">
<option value="छोरा" {{ $data->children_gender == 'छोरा' ? 'selected' : ''}}>छोरा</option>
<option value="छोरी" {{ $data->children_gender == 'छोरी' ? 'selected' : ''}}>छोरी</option>
</select>
</b>
                    <b><select name="children_title">
<option value="श्री" {{ $data->children_title == 'श्री' ? 'selected' : ''}}>श्री</option>
<option value="सुश्री" {{ $data->children_title == 'सुश्री' ? 'selected' : ''}}>सुश्री</option>
<option value="श्रीमती" {{ $data->children_title == 'श्रीमती' ? 'selected' : ''}}>श्रीमती</option>
</select>
</b>
                    <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="children_name" value="{{$data->children_name}}">
                     लाई नियमानुसार छात्रवृत्तिको लागि सिफारिस गरिन्छ।</p>
                </div>
                                <div class="text-right btm-last">
                  <p><input type="text" class="dashed-input-field star" placeholder="   *" name="hakim_ko_name" id="" required="required" value="{{$data->hakim_ko_name}}"></p>


                  <p><b>  <select name="officer">
<option value="वडा अध्यक्ष" {{ $data->officer == 'वडा अध्यक्ष' ? 'selected' : ''}}>वडा अध्यक्ष</option>
<option value="का. बा वडा अध्यक्ष"{{ $data->officer == 'का. बा वडा अध्यक्ष' ? 'selected' : ''}}>का. बा वडा अध्यक्ष</option>
<option value="वडा सचिब"{{ $data->officer == 'वडा सचिब' ? 'selected' : ''}}>वडा सचिब</option>
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




              </div>



              <div class="col-md-12">
                <p><i><span class="star"></span> * लागेको फिल्डहरु अनिवार्य रुपमा भर्नुपर्ने हुन्छ।</i> </p>
                <hr>
                  <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
                <center><input type="submit" class="btn btn-success" name="scholorship_save" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
              </div>
            </form></div>

        </div>
      </div>
    </div>
  </div>
@stop
