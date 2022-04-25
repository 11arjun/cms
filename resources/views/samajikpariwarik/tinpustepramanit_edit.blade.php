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
          <h2>तीन पुस्ते प्रमाण पत्र </h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>

            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>


        <form action="{{url('tinpustepramanit',[$data->id])}}" method="post">
          {{method_field('PATCH')}}
          {{csrf_field()}}
          <div class="x_content">
          @include('master.master_header_ne2')
            <div class="col-md-12">
              <div class="col-md-6">
               <p align="left"><b>पत्र संख्या&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankya" id="patra_sankya" required="required" value="{{$data->patra_sankya}}" /></b></p>
             </div>
             <div class="col-md-6">
             </div>
           </div>


           <div class="col-md-12">
            <div class="col-md-6">
              <p align="left"><b>चलानी नं.&nbsp;<input type="text" class="dashed-input-field" placeholder="   *"  name="chalani_no" id="chalani_no" required="required" value="{{$data->chalani_no}}" /></b></p>


            </div>
            <div class="col-md-6">
              <p align="right"><b>मिति:&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" name="issued_date" id="issued_date" required="required" value="{{$data->issued_date}}" /></b></p>
            </div>
          </div>



          <div class="col-md-12">
            <p align="center" class="font-size-24">
              <h4 align="center"><b><u>विषय: तीन पुस्ते प्रमाणित</u></b> </h4>
            </p>
          </div>





          <div class="col-md-12">
            <p>

            <b> {{$local_state[0]->local_state_name}}</b> वडा नं.  <b>{{Helpers::convertNos(auth()->user()->isAdmin)}} </b> (साबिकको ठेगाना <input type="text" name="sabik_address" class="dashed-input-field" required="required" placeholder=" *" value="{{$data->sabik_address}}">)निवासी

              <select name="person_title">
              <option value="श्री" {{$data->person_title == 'श्री' ? 'selected' : ''}}>श्री</option>
              <option value="सुश्री" {{$data->person_title == 'सुश्री' ? 'selected' : ''}}>सुश्री</option>
              <option value="श्रीमती" {{$data->person_title == 'श्रीमती' ? 'selected' : ''}}>श्रीमती</option>
            </select>

              <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="person_name" value="{{$data->person_name}}" />को तीन पुस्ते तपसिलमा उल्लेख भए अनुसार रहेको व्यहोरा प्रमाणित साथ अनुरोध गरिन्छ | साथै निजको नाममा मालपोत कार्यलयमा दर्ता रहेको जग्गाको विवरण तपसिल बमोजिम रहेको व्यहोरा समेत अनुरोध गरिन्छ |</p>



            </div>
            <div class="col-md-12">

              <h4 align="center"><b>जग्गाको  विवरण</b></h4>
              <div class="col-md-12">
                <div class="table-responsive">
                  <table class="table table-bordered" id="tinpuste_jagga_bibaran_table">
                    <thead>

                      <th>क्र.स.</th>
                      <th>कित्ता नं.</th>
                      <th> सिट नं. </th>
                      <th>क्षेत्रफ़ल</th>

                      <th> </th>
                    </thead>
                    <tbody>
                      <?php $count=1;?>
                      @foreach($detail as $d)
                      <tr>
                        <td>{{Helpers::convertNos($count)}}
                          <?php $count++;?>
                        </td>
                        <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="seat_no[]" value="{{$d->seat_no}}"> </td>
                        <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="kitta_no[]" value="{{$d->kitta_no}}"> </td>
                        <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="area[]" value="{{$d->area}}"> </td>


                        <td><button href="" id="add_more_tinpuste_jagga" class="btn btn-success" ><span class="glyphicon glyphicon-plus"></span></button></td>
                        <td><button  id="add_more_tinpuste_jagga" class="btn btn-danger remove-field" ><span class="glyphicon glyphicon-minus"></span></button></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="col-md-12">

              <h4 align="center"><b>तीन पुस्ते विवरण</b></h4>
              <div class="col-md-12">
                <div class="table-responsive">
                  <table class="table table-bordered" id="tinpuste_bibaran_table">
                    <thead>

                      <th>क्र.स.</th>
                      <th>नाम </th>
                      <th>नाता</th>
                      <th>नागरिकता नं. </th>
                      <th>जारी मिति </th>
                      <th>जिल्ला </th>
                      <th> </th>
                    </thead>
                    <tbody>
                      <?php $counts=1;?>
                      @foreach($bibaran as $b)
                      <tr>
                        <td>{{Helpers::convertNos($counts)}}
                          <?php $counts++;?></td>
                        <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="name[]" value="{{$b->name}}"> </td>
                        <td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="relation[]" value="{{$b->relation}}"> </td>
                        <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="citizenship_no[]" value="{{$b->citizenship_no}}"> </td>

                        <td><input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" required="required" id="citizenship_issued_date" name="citizenship_issued_date[]" value="{{$b->citizenship_issued_date}}" onfocus="showNdpCalendarBox('citizenship_issued_date')"> </td>
                        <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="citizenship_issued_district[]" value="{{$b->citizenship_issued_district}}"> </td>
                        <td><button href="" id="add_more_tinpuste_bibaran" class="btn btn-success" ><span class="glyphicon glyphicon-plus"></span></button></td>
                        <td><button  id="add_more_tinpuste_bibaran" class="btn btn-danger remove-field" ><span class="glyphicon glyphicon-minus"></span></button></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                  <p class="btm-last">  वडा अध्यक्ष </p>
              </div>
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

              <center><input  type="submit" class="btn btn-success" name="save_tinpuste_pramanit_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
            </div>
          </div>
        </div>

      </form>

    </div>
  </div>
</div>
</div>
@stop
