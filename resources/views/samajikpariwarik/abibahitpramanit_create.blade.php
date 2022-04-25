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
          <h2>अविवाह प्रमाणित</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>

            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>


        <form action="{{url('abibahitpramanit')}}" method="post">
          {{ csrf_field() }}
          <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
          <div class="x_content">
            @include('master.master_header_ne2')

            <div class="col-md-12">
              <div class="col-md-6">
               <p align="left" ><b>पत्र संख्या&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankya" id="patra_sankya" required="required"/></b></p>
             </div>
             <div class="col-md-6">
             </div>
           </div>


           <div class="col-md-12">
            <div class="col-md-6">
              <p align="left" ><b>चलानी नं.&nbsp;<input type="text" class="dashed-input-field" placeholder="   *"  name="chalani_no" id="chalani_no" required="required"/></b></p>


            </div>
            <div class="col-md-6">
              <p align="right"  ><b>मिति:&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" name="issued_date" id="issued_date" required="required"/></b></p>
            </div>
          </div>
          <div class="col-md-12">
            <p align="center" class="font-size-24">
              <h4 align="center"><b><u>विषय: अविवाह प्रमाणित</u></b> </h4>
            </p>
          </div>
          <div class="col-md-12">

            <p align="left"><b>{{$local_state[0]->local_state_name}}</b> वडा नं.  <b> {{Helpers::convertNos(auth()->user()->isAdmin)}}</b>  (साबिकको ठेगाना
              <input type="text" name="sabik_address" class="dashed-input-field" required="required" placeholder=" *"> ) निवासी श्री <input type="text" class=" dashed-input-field" placeholder=" *" required="required" name="father_name"/>तथा श्रीमती <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="mother_name"/> को

            <select name="children_gender">
              <option value="छोरा">छोरा</option>
              <option value="छोरी">छोरी</option>
            </select>

            <select name="children_title">
              <option value="श्री">श्री</option>
              <option value="सुश्री">सुश्री</option>
              <option value="श्रीमती">श्रीमती</option>
            </select>
              <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="children_name"/>
            आजको मितिसम्म अबिबाहित रहेको व्यहोरा प्रमाणित गरिन्छ |</p>
          </div>
          <p class="btm-last">  वडा अध्यक्ष </p>
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
<label>निवेदकको ठेगाना</label><input type="text" name="nibedak_address" class="form-control" required>
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
          <div class="col-md-12">
            <hr/>

            <center><input  type="submit" class="btn btn-success" name="save_abibahit_pramanit_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
          </div>
        </div>
      </div>

    </form>

  </div>
</div>
</div>
</div>
@stop
