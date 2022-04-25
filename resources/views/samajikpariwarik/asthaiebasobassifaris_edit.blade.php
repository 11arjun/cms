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
          <h2>अस्थायी बसोबास सिफारिस</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>

            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>


        <form action="{{url('asthaiebasobasSifaris',[$data->id])}}" method="POST">
          {{method_field('PATCH')}}
          {{ csrf_field() }}
          <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
          <!-- @include('master.master_header_ne2') -->
          <div class="x_content">
            @include('master.master_header_ne2')

            <div class="col-md-12">
              <div class="col-md-6">
               <p align="left"> <b> पत्र संख्या :<input type="text" class=" dashed-input-field" placeholder="  *" name="patra_sankya" id="patra_sankya" value="२०७५/०७६" required="required" autocomplete="off" value="{{$data->patra_sankya}}"></b></p>
             </div>
             <div class="col-md-6">
             </div>
           </div>


           <div class="col-md-12">
            <div class="col-md-6">
              <p align="left" class="star"><b>चलानी नं. :<input type="text" class="dashed-input-field" name="chalani_no" id="chalani_no" autofocus="true" value="{{$data->chalani_no}}"></b>
                   </p>


            </div>
            <div class="col-md-6">
              <p align="right" class="star"><b>मिति :<input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" name="issued_date" id="issued_date" required="required" onfocus="showNdpCalendarBox('issued_date')" value="{{$data->issued_date}}"></b></p>
            </div>
          </div>



          <div class="col-md-12">
            <p align="center" class="font-size-24">
              <h4 align="center"><b><u>विषय: अस्थायी बसोबास सिफारिस। </u></b></h4>
            </p>
          </div>





          <div class="col-md-12">

            <p>
              <select name="person_title">
              <option value="श्री" {{$data->person_title == 'श्री' ? 'selected' : ''}}>श्री</option>
              <option value="सुश्री" {{$data->person_title == 'सुश्री' ? 'selected' : ''}}>सुश्री</option>
              <option value="श्रीमती" {{$data->person_title == 'श्रीमती' ? 'selected' : ''}}>श्रीमती</option>
            </select>

              <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="person_name" value="{{$data->person_name}}">


              <b> {{$local_state[0]->local_state_name}}</b> वडा नं. {{Helpers::convertNos(auth()->user()->isAdmin)}}</b> (साबिकको ठेगाना <input type="text" class="dashed-input-field star" name="sabik_address" id="sabik_address" autocomplete="off" required="required" value="{{$data->sabik_address}}">) अन्तर्गत  तल उल्लेखित स्थानमा रहेको घरधनी
            <select name="houseowner_title">
              <option value="श्री" {{$data->houseowner_title == 'श्री' ? 'selected' : ''}}>श्री</option>
              <option value="सुश्री" {{$data->houseowner_title == 'सुश्री' ? 'selected' : ''}}>सुश्री</option>
              <option value="श्रीमती" {{$data->houseowner_title == 'श्रीमती' ? 'selected' : ''}}>श्रीमती</option>
            </select>
            <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="houseowner_name" value="{{$data->houseowner_name}}">
               को घरमा विगत मिति <input type="text" class="dashed-input-field" placeholder="   *" required="required" id="living_starting_date" name="living_starting_date" onfocus="showNdpCalendarBox('living_starting_date')" value="{{$data->living_starting_date}}"> देखि अस्थायी बसोबास गर्दै आउनु भएको व्यहोरा सिफारिस साथ अनुरोध गरिन्छ | </p>
             </div>
             <div class="col-md-12">
              <div class="col-md-12">

                <p><i>बसोबास गर्नेको ना.प्र.प.न.</i> <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="citizenship_no" value="{{$data->citizenship_no}}">/ जिल्ला <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="district_name" value="{{$data->district_name}}">/ जारी  मिति <input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" required="required" id="citizenship_issued_date" name="citizenship_issued_date" onfocus="showNdpCalendarBox('issued_date')" value="{{$data->citizenship_issued_date}}">  </p>
              </div>




            </div>
            <h4 align="center"><b>बसोबास स्थान </b></h4>
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-bordered" id="temporary_basobas_table">
                  <thead>

                    <th>क्र.स.</th>
                    <th>टोल </th>
                    <th>बाटोको नाम</th>
                    <th>घर नं.</th>
                    <th> </th>
                    <th> </th>
                  </thead>
                  <tbody>
                  <?php $count=1;?>
                    @foreach($detail as $d)
                    <tr>{{Helpers::convertNos($count)}}
                      <?php $count++;?> </td>
                      <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="toll[]" value="{{$d->toll}}"></td>
                      <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="batto_name[]" value="{{$d->batto_name}}"> </td>
                      <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="ghar_no[]" value="{{$d->ghar_no}}"> </td>

                      <td><button id="add_more_basobas_data" class="btn btn-success" ><span class="glyphicon glyphicon-plus"></span></button></td>
                      <td><button id="add_more_basobas_data" class="btn btn-danger remove-field" ><span class="glyphicon glyphicon-minus"></span></button></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
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

              <center><input  type="submit" class="btn btn-success" name="save_temporary_basobas_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
            </div>
          </div>
        </div>

      </form>




    </div>
  </div>
</div>
</div>

@stop
