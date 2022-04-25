@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endpush
@section('content')

<div class="right_col" role="main">
  <div class="clearfix"></div>
  <div class="row">


    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">

        <div class="x_title">
          <h2>अपाङ्ग परिचयपत्र सिफारिस </h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>

            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>


        <form action="{{url('apangaparichayasifaris',[$data->id])}}" method="POST">
          {{method_field('PATCH')}}
          {{csrf_field()}}
          <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
          <div class="x_content">
          @include('master.master_header_ne2')
            <div class="col-md-12">
              <div class="col-md-6">
               <p align="left"><b>पत्र संख्या&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankya" id="patra_sankya" required="required" value="{{$data->patra_sankya}}" /></b></p>
                <p align="left"><b>चलानी नं.&nbsp;<input type="text" class="dashed-input-field" placeholder="   *"  name="chalani_no" id="chalani_no" required="required" value="{{$data->chalani_no}}" /></b></p>
             </div>
             <div class="col-md-6">
              <p align="right"><b>मिति:&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" name="issued_date" id="issued_date" required="required" value="{{$data->issued_date}}" /></b></p>
             </div>
           </div>

           <div class="col-md-12">

            <p align="left">&nbsp;&nbsp;&nbsp;श्री महिला तथा बाल विकास कार्यालय |</p>
                <p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" name="office_address" id="office_address" required="required" value="{{$data->office_address}}" />|</p>

           </div>




          <div class="col-md-12">
            <p align="center" class="font-size-24">
              <h4 align="center"><b><u>विषय: सिफारिस सम्बन्धमा</u></b> </h4>
            </p>
          </div>
          <div class="col-md-12">



            <p align="left"> उपरोक्त सम्बन्धमा  वडा न. <b>{{Helpers::convertNos(auth()->user()->isAdmin)}}</b>(साबिकको ठेगाना <input type="text" class="dashed-input-field star" name="sabik_address" id="sabik_address" autocomplete="off" required="required" value="{{$data->sabik_address}}">) बस्ने
            <select name="person_title">
              <option value="श्री" {{$data->person_title == 'श्री' ? 'selected' : ''}}>श्री</option>
              <option value="सुश्री" {{$data->person_title == 'सुश्री' ? 'selected' : ''}}>सुश्री</option>
              <option value="श्रीमती" {{$data->person_title == 'श्रीमती' ? 'selected' : ''}}>श्रीमती</option>
            </select>
              <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="person_name" value="{{$data->person_name}}" />ले (अपाङ्गताको किसिम उल्लेख गर्ने) <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="apanga_type" value="{{$data->apanga_type}}" /> अपाङ्ग भएकोले अपाङ्ग परिचयपत्र बनाउनको लागि "सिफारिस गरी पाउँ" भनी यस वडा कार्यालय पर्न आएको निवेदन सम्बन्धमा तहाको नियमानुसार अपाङ्ग परिचयपत्रको लागि सिफारिस गरिन्छ |

              <p class="btm-last">  वडा अध्यक्ष </p>
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
            <hr/>

            <center><input  type="submit" class="btn btn-success" name="save_apanga_sifaris_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
          </div>
        </div>
      </div>

    </form>

  </div>
</div>
</div>
</div>
@stop
