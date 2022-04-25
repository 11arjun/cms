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
          <h3 class="title-x"> विपन्नता सिफारिस</h3>

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
        </h2>
        @endif
        <h3 align="center" class="sm-head"> {{$district[0]->district_name}}</h3>
        <h3 align="center" class="sm-head">{{$provience[0]->province_name}}, नेपाल</h3>
      </div>
      <div class="col-md-2">
              </div>
    </div>
  </header> --}}

  <form action="{{url('bipanna', [$data->id])}}" method="POST" >
           {{method_field('PATCH')}}
          {{ csrf_field() }}
           @include('master.master_header_ne2')


            <div class="row top-part">
              <div class="col-md-6">
               {{-- <p align="left"><b>पत्र संख्या :<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankya" id="patra_sankya" value="{{$data->patra_sankya}}" required="required" ></b></p> --}}

              {{-- <p align="left"><b>चलानी नं. :<input type="text" class="dashed-input-field" name="chalani_no" id="chalani_no" value="{{$data->chalani_no}}"></b></p> --}}


            </div>
            <div class="col-md-6">
              <p align="right"><b>मिति :<input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" name="issued_date" id="issued_date" required="required" onfocus="showNdpCalendarBox('issued_date')" value="{{$data->issued_date}}"></b></p>
            </div>
          </div>
          <div class="row">
          <div class="col-md-12">
            <p align="center" class="font-size-24">
              </p><h4 align="center"><b>विषय: विपन्नको सिफारिस सम्बन्धमा।</b> </h4>

          <input type="hidden" name="letter_subject" value="विपन्नको सिफारिस सम्बन्धमा">

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

            <p align="left"> उपरोक्त विषयमा <b> <input type="text" class=" dashed-input-field" placeholder="  *" name="local_state" value="{{$local_state[0]->local_state_name}}" required="required"> </b> वडा नं.  <b> <input type="text" class=" dashed-input-small-field" placeholder="  *" name="ward" value="{{$data->ward}}" required="required"> </b> (साविक

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
 निवासी

              <b><select name="children_title">
<option value="श्री" {{ $data->children_title == 'श्री' ? 'selected' : ''}}>श्री</option>
<option value="सुश्री" {{ $data->children_title == 'सुश्री' ? 'selected' : ''}}>सुश्री</option>
<option value="श्रीमती" {{ $data->children_title == 'श्रीमती' ? 'selected' : ''}}>श्रीमती</option>
</select>
</b>
              <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="children_name" value="{{$data->children_name}}"> ले  मेरो पारिवारिक आर्थिक स्थिति  नाजुक भएको कारणले विपन्न भएको हुनाले मेरो परिवार मेरो उच्च शिक्षाको खर्च जुटाउन असमर्थ भएकोले सो खुलाई सिफारिस पाँऊ भनी यस कार्यालयमा निवेदन पेश गरेकोले सो सम्बन्धमा बुझ्दा  जानेबुझे सम्म व्यहोरा मनासिब भएकोले निजलाई विपन्न व्यक्तिका लागि आरक्षित गरिएको स्थानमा सहभागी  हुन पाउने व्यवस्था गरी दिनुहुन सिफारिस गरिएको छ।</p>
          </div>
        </div>
               <div class="text-right btm-last">
            <p><input type="text" class="dashed-input-field star" placeholder="   *" name="hakim_ko_name" id="" required="required" value="{{$data->hakim_ko_name}}"></p>


             <p> <b> <select name="officer">
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



          <div class="col-md-12">
            <hr>
                <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
            <center><input type="submit" class="btn btn-success" name="save_bipanna_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
         </div>
       </form></div>

   </div>
 </div>
</div>
</div>


@stop
