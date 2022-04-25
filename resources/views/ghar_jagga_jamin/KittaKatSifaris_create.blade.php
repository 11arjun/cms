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
          <h2>कित्ताकाट सिफारिस</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>


        <form action="{{url('kittakatsifaris')}}" method="post">
          {{ csrf_field() }}
            <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
          <div class="x_content">
              @include('master.master_header_ne2')
          
             <!--  <div class="col-md-2">
                <p><img src="{{ asset('images/logo.png') }}"> </p>
              </div>
              <div class="col-md-8">
                <p align="center" class="font-size-24"><b> {{$local_state[0]->local_state_name}} </b></p><b>
                <p align="center" class="font-size-24">{{Helpers::convertNos(auth()->user()->isAdmin)}} नं वडा कार्यालय, <?php echo empty($ward_office)?"":$ward_office;?> </b></p>
                  <h3 align="center" class="sm-head">{{Helpers::convertNos(auth()->user()->provience_id)}} नं. प्रदेश, नेपाल</h3>

                </div>
                <div class="col-md-2">


                </div>
              </div> -->

              <div class="col-md-12">
                <div class="col-md-6">
                  {{-- <p align="left"><b>पत्र संख्या:&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankya" id="patra_sankya" required="required"/> </b></p> --}}
                </div>
                <div class="col-md-6">
                </div>
              </div>


              <div class="col-md-12">
                <div class="col-md-6">
                  {{-- <p align="left"><b>चलानी नं.:&nbsp;<input type="text" class="dashed-input-field"  placeholder="   *" name="chalani_no" id="chalani_no" required="required"/></b></p> --}}


                </div>
                <div class="col-md-6">
                  <p align="right"><b>मिति:&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" name="issued_date" id="issued_date" required="required"/></b></p>
                </div>
              </div>




              <div class="col-md-12">
                <p align="center" class="font-size-24">
                  <h4 align="center"><b><u>विषय:कित्ताकाट सिफारिस।</u></b></h4>
                </p>
              </div>

              <div class="col-md-12">
                <p>श्री <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="office_chairman"/>,</p>
                <p> &nbsp; &nbsp; &nbsp; <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="office_name"/>| </p>
              </div>



              <div class="col-md-12">

                <p> <b> {{$local_state[0]->local_state_name}} </b> वडा नं.  <b> {{Helpers::convertNos(auth()->user()->isAdmin)}} </b> स्थायी ठेगाना  (साबिकको ठेगाना <input type="text" class="dashed-input-field star" placeholder="   *" required="required" name="sabik_address" id="sabik_address" autocomplete="off" required="required">) अन्तर्गत 
                 
            <select name="person_title">
              <option value="श्री">श्री</option>
              <option value="सुश्री">सुश्री</option>
              <option value="श्रीमती">श्रीमती</option>
            </select>

             <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="person_name"/> को नाममा श्रेस्ता दर्ता कायम रहेको तल उल्लेखित विवरण को घर-जग्गा मध्ये <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="jagga_location"/> तर्फबाट <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="jagga_area"/> क्षेत्रफल जग्गा कित्ताकाट/प्लट मिलान गर्न प्राबिधिक निरीक्षण गर्दा मापदण्ड अनुसार मिल्ने देखिएको हुनाले सोको लागि सिफारिस गरिन्छ |
                </p> 

              </div>
              <div class="clearfix"></div>
              <h4 align="center"><b>घर रहेको जग्गाको विवरण</b></h4>

              <div class="col-md-12">
                <div class="table-responsive">
                  <table class="table table-bordered" id="kitta_kat_detail_table"> 
                    <thead>
                      <tr>
                        <th>क्र.स.</th>
                        <th>सिट नं.</th>
                        <th>कित्ता नं. </th>
                        <th>क्षेत्रफल </th>
                        <th> </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="" value="१" /></td>
                        <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="seat_no[]"/></td>
                        <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="kitta_no[]"/></td>
                        <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="area[]"/></td>

                        <td><a href="" id="add_more_kitta_kat" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></a></td>


                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              <h4 align="center"><u><b> कित्ताकाट सिफारिस फिल्ड निरीक्षण प्रतिवेदन</b> </u></h4>
              <div class="col-md-12">
                <p> घर बनेको जग्गाको क्षेत्रफल <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="ghaderi_area"/></p>
                <p> घरको जम्मा क्षेत्रफल <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="ghar_total_area"/></p>
                <p> घरको भुइँ तल्लाको क्षेत्रफल  <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="last_floor_area"/></p>
                <p>पाउने फार  <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="paune_far"/></p>
                <p> सिफारिस दिन मिल्ने कारण  <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="sifaris_reason"/></p>
                <p>सिफारिस गर्ने:</p>
                <p> प्राबिधिकको नाम <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="technician_name"/></p>
                <p> प्राबिधिकको हस्ताक्षर <input type="text" class="dashed-input-field" disabled="disabled" required="required" name=""/></p>
                
                    <p class="btm-last">  वडा अध्यक्ष </p>
              </div>


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

                <center><input  type="submit" class="btn btn-success" name="save_kitta_kat_sifaris_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
              </div>
            </div>
          </div>

        </form>

      </div>
    </div>
  </div>
</div>

@stop