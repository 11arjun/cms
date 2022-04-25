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
          <h2>मृतक हकदारको सिफारिस </h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>

            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>


        <form action="{{url('mirtakhakdarsifaris')}}" method="post">
           {{ csrf_field() }}
           <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
          <div class="x_content">
          @include('master.master_header_ne2')
            <div class="col-md-12">
              <div class="col-md-6">
               <p align="left"><b>पत्र संख्या&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankya" id="patra_sankya" required="required"/></b></p>
               <p align="left"><b>चलानी नं.&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" name="chalani_no" id="chalani_no" required="required"/></b></p>
             </div>
             <div class="col-md-6">
              <p align="right"><b>मिति:&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" name="issued_date" id="issued_date" required="required"/></b></p>
            </div>
          </div>






          <div class="col-md-12">
            <p align="center" class="font-size-24">
              <h4 align="center"><b><u>विषय: सिफारिस समबन्धमा |</u></b> </h4>
              <h4 align="center"><b><u>जो-जससंग सम्बन्ध छ |</u></b> </h4>
            </p>
          </div>
          <div class="col-md-12">
            <p align="left">
              उपरोक्त सम्बन्धमा <b>{{$local_state[0]->local_state_name}}</b> वडा नं.  <b> {{Helpers::convertNos(auth()->user()->isAdmin)}} </b> स्थायी ठेगाना  (साबिकको ठेगाना <input type="text" class="dashed-input-field star" name="sabik_address" id="sabik_address" autocomplete="off" required="required">) बस्ने
            <select name="person_title">
              <option value="श्री">श्री</option>
              <option value="सुश्री">सुश्री</option>
              <option value="श्रीमती">श्रीमती</option>
            </select>

                <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="person_name"/> ले हकदार प्रमाणित गरी पाउँ भनी यस वडा कार्यालयमा निवेदन दिनुभएको हुदाँ सो समबन्धमा <b>{{$local_state[0]->local_state_name}}</b> बाट मिति

                <input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" required="required" name="registration_date" id="registration_date" onfocus="showNdpCalendarBox('registration_date')"/> मा गरिएको द.न.<input type="text" class="dashed-input-field" placeholder="   *" required="required" name="registration_no"/>
                को  नाता प्रमाणित प्रमाणपत्र अनुसार मृतक
            <select name="death_person_title">
              <option value="श्री">श्री</option>
              <option value="सुश्री">सुश्री</option>
           <option value="श्रीमती">श्रीमती</option>
            </select>
                <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="death_person_name"/>

                का हकदारहरु देहाय बमोजिम उल्लेखित  <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="hakdar_sankya"/>जना मात्र भएको व्यहोरा सिफारिस गरिन्छ |
              </p>








            </div>

            <div class="col-md-12">
              <h4 align="center"> <b>तपसिल</b></h4>
              <div class="table-responsive">
              <table class="table table-bordered" id="mritak-hakdar-table">

                <thead>
                  <tr>
                    <th>क्र.स.</th>
                    <th>हकदारहरुको नाम थर </th>
                    <th>नाता </th>
                    <th>बाबु / पतिको नाम</th>
                    <th>नागरिकता नं. </th>
                    <th>घर नं </th>
                    <th>कित्ता नं. </th>
                    <th>बाटोको नाम</th>

                    <th> </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="" value="१"></td>

                    <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="hakdar_full_name[]"></td>
                    <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="relation[]"></td>
                    <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="father_name[]"></td>
                    <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="citizenship_no[]"></td>
                    <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="house_no[]"></td>
                    <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="kitta_no[]"></td>
                    <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="batto_name[]"></td>
                    <td><button href="" class="btn btn-success" id="add-more-mritak-hakdar"><span class="glyphicon glyphicon-plus"></td>
                    </tr>
                  </tbody>
                </table>
              </div>
                <p class="btm-last">  अध्यक्ष / वडा अध्यक्ष </p>
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

                <center><input  type="submit" class="btn btn-success" name="save_mritak_hakdar_sifaris_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
              </div>
            </div>
          </div>

        </form>

      </div>
    </div>
  </div>
</div>
@stop
