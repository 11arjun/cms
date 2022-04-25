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
          <h2> Relationship Verification </h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>

            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>

        <div class="x_content">

          <form action="{{url('relationverification')}}" method="post">
            {{ csrf_field() }}
            <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
            @include('master.master_header_english')

              <div class="col-md-12">
                <div class="col-md-6">
                  {{-- <p align="left"><b>Ref No.<input class="dashed-input-field" placeholder="   *" name="ref_no" required="required" type="text"/></b></p> --}}
                </div>
                <div class="col-md-6">
                  <p align="right"><b>Date:  <input id="issued_date" required="required" name="issued_date" class="dashed-input-field" placeholder="   *" type="text"/></b> </p>
                </div>
              </div>
              <div class="col-md-12" style="height:180px;">
                <div class="col-md-10">
                  
                </div>
                <div class="col-md-2">
                  <div class="applicant_photo" style="height: 160px; border: 1px solid #000;">
                  </div>
                  <p class="center">Applicant Photo  </p>
                </div>
              </div>


              <div class="col-md-12">
                <p align="center" class="font-size-24">
                  <h3 align="center"><b><u> Subject:Relationship Verification </u></b></h3>
                </p>
                <p align="center" class="font-size-24">
                  <h4 align="center"><b><u>To Whom It May Concern</u></b></h4>
                </p>
              </div>




          <div class="col-md-12">
                <p align="left">This is to certify that <b>
            <select name="applicant_title">
              <option value="Mr">Mr</option>
              <option value="Mrs">Mrs</option>
              <option value="Miss">Miss</option>
            </select>
            <input class="dashed-input-field" placeholder="   *" type="text" required="required" name="applicant_name"/></b>

                permanent resident of Ward No. {{auth()->user()->isAdmin}} {{$district[0]->district_name_english}} Nepal, (Previously designated as<b> <input class="dashed-input-field" placeholder="   *" type="text" required="required" name="previous_vdc_name"/></b>  V.D.C., Ward No.<b> <input class="dashed-input-small-field" placeholder="   *" type="text" required="required" name="previous_ward_no"/></b>,<b> <input class="dashed-input-field" placeholder="   *" type="text" required="required" name="previous_district"/></b> District, Nepal) has following relations to the people as mentioned below. </p>
              </div>


              <div class="col-md-12">
                <div class="table-responsive table-bordered">

                  <table class="table" id="relation-verification-table">

                    <thead>
                      <th> S.N. </th>
                      <th> Title </th>
                      <th> Relative's Name </th>
                      <th> Relation with Applicant </th>
                      <th> Photo </th>
                      <th> </th>

                    </thead>
                    <tbody>

                      <tr>
                        <td>
                          <input class="dashed-input-small-field" placeholder="   *" type="text" required="required" value="1" /></td>
                        <td>
                          <select name="relative_title[]">
                            <option value="Mr">Mr</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Miss">Miss</option>
                          </select>
                        </td>
                        <td>
                          <input class="dashed-input-field" placeholder="   *" type="text" required="required" name="relative_name[]"/></td>
                        <td>
                          <input class="dashed-input-field" placeholder="   *" type="text" required="required" name="relation[]"/></td>
                        
                        <td height="120" width="120" >
                          <div style="height: 100%; width: 100%; border: 1px solid #000"></div>
                        </td>
                          
                        <td>

                          <button id="add-more-relation" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button>
                        </td>
                      </tr>

                    </tbody>
                  </table>


                </div>


         </div>

       </div>




       <div class="col-md-12">

        <p class="btm-last">  Ward President </p>
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

        <center><input  type="submit" class="btn btn-success" name="save_relation_verification_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
      </div>
    </div>
  </div>

</form>
</div>
</div>
</div>
</div>
@stop
