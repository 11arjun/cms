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
          <h2>घर पाताल सिफारिस </h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>


        <form action="{{url('gharpatalsifaris',[$data->id])}}" method="post">
          {{method_field('PATCH')}}
          {{ csrf_field() }}
          <div class="x_content">
              @include('master.master_header_ne2')
            

              <!-- <div class="col-md-2">
                <p><img src="{{ asset('images/logo.png') }}"> </p>
              </div>
              
              <div class="col-md-8">
                
               <p align="center" class="font-size-24"><b> {{$local_state[0]->local_state_name}} </b></p>
               <p align="center" class="font-size-24">
                <b> {{Helpers::convertNos(auth()->user()->isAdmin)}} नं वडा कार्यालय, <?php echo empty($ward_office)?"":$ward_office;?> </b></p>
               <h3 align="center" class="sm-head">{{Helpers::convertNos(auth()->user()->provience_id)}} नं. प्रदेश, नेपाल</h3>

              </div>
              <div class="col-md-2">


              </div>
            </div> -->

            <div class="col-md-12">
              <div class="col-md-6">
               {{-- <p align="left"><b>पत्र संख्या&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankya" id="patra_sankya" value="{{$data->patra_sankya}}" required="required"/></b></p>
                <p align="left"><b>चलानी नं.&nbsp;<input type="text" class="dashed-input-field" value="{{$data->chalani_no}}" placeholder="   *" name="chalani_no" id="chalani_no" required="required"/></b></p> --}}
             </div>
             <div class="col-md-6">
              <p align="right"><b>मिति:&nbsp;<input type="text" class="dashed-input-field" value="{{$data->issued_date}}" placeholder="   *" name="issued_date" id="issued_date" required="required"/></b></p>
             </div>
           </div>

           <div class="col-md-12">

            <p align="left">&nbsp;&nbsp;&nbsp;श्री <input type="text" class="dashed-input-field" placeholder="   *" value="{{$data->office_chairman}}" name="office_chairman" id="office_chairman" required="required"/> </p>
                <p align="left"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" name="office_name" value="{{$data->office_name}}" id="office_name" required="required"/></b>|</p>

           </div>




          <div class="col-md-12">
            <p align="center" class="font-size-24">
              <h4 align="center"><b><u>विषय: सिफारिस सम्बन्धमा</u></b> </h4>
            </p>
          </div>
          <div class="col-md-12">

         


            <p align="left"> उपरोक्त सम्बन्धमा <b>{{$local_state[0]->local_state_name}}</b> वडा न. <b> {{Helpers::convertNos(auth()->user()->isAdmin)}}</b> स्थित 
             <select name="person_title">
<option value="श्री" {{ $data->person_title == 'श्री' ? 'selected' : ''}}>श्री</option>
<option value="सुश्री" {{ $data->person_title == 'सुश्री' ? 'selected' : ''}}>सुश्री</option>
<option value="श्रीमती" {{ $data->person_title == 'श्रीमती' ? 'selected' : ''}}>श्रीमती</option>
</select>


              <input type="text" class="dashed-input-field" placeholder="   *" required="required" value="{{$data->person_name}}" name="person_name"/>को 
              नाममा रहेको कि.नं.<input type="text" class="dashed-input-field" placeholder="   *" required="required" value="{{$data->kitta_no}}" name="kitta_no"/>क्षे.फ़.<input type="text" class="dashed-input-field" placeholder="   *" required="required" value="{{$data->area}}" name="area"/>मा बनेको घर भत्किई पाताल भएको सोही अनुसारको सिफारिस गरी पाउँ भनी यस वडा कार्यालयमा पर्न आएको निवेदन सम्बन्धमा उल्लेखित कि.नं. मा बनेको घर पाताल भएको व्यहोराको सिफारिस गरिन्छ |
              <p class="btm-last">  वडा अध्यक्ष </p>

              
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
  <!-- END -->
          <div class="col-md-12">
            <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
            <hr/>

            <center><input  type="submit" class="btn btn-success" name="update_ghar_patal_sifaris_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
          </div>
        </div>
      </div>

    </form>

  </div>
</div>
</div>
</div>

@stop