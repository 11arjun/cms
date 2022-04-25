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
          <h2> Property Valuation </h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>

            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>

        <div class="x_content">

          <form action="{{url('propertyvaluation',[$data->id])}}" method="post">
            {{method_field('PATCH')}}
            {{ csrf_field() }}
            <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
            @include('master.master_header_english')

              <div class="col-md-12">
                <div class="col-md-6">
                {{-- <p align="left"><b>Ref No.<input class="dashed-input-field" placeholder="   *" name="ref_no" value="{{$data->ref_no}}" required="required" type="text"/></b></p> --}}
                </div>
                <div class="col-md-6">
                <p align="right"><b>Date:  <input id="issued_date" required="required" name="issued_date" value="{{$data->issued_date}}" class="dashed-input-field" placeholder="   *" type="text"/></b> </p>
                </div>
              </div>


              <div class="col-md-12">
                <p align="center" class="font-size-24">
                  <h3 align="center"><b><u> Subject: Property Valuation </u></b></h3>
                </p>
                <p align="center" class="font-size-24">
                  <h4 align="center"><b><u>To Whom It May Concern</u></b></h4>
                </p>
              </div>




          <div class="col-md-12">
                <p align="left">This is to certify that <b>
            <select name="title">
              <option value="Mr" {{$data->title == 'Mr' ? 'selected' : ''}}>Mr</option>
              <option value="Mrs" {{$data->title == 'Mrs' ? 'selected' : ''}}>Mrs</option>
              <option value="Miss" {{$data->title == 'Miss' ? 'selected' : ''}}>Miss</option>
            </select>
        <input class="dashed-input-field" placeholder="   *" type="text" required="required" name="title_name" value="{{$data->title_name}}"/></b>

        permanent resident of <b><input class="dashed-input-field" placeholder="   *" type="text" required="required" name="address" value="{{$data->address}}"/></b>City Ward No: {{auth()->user()->isAdmin}} {{$district[0]->district_name_english}} Nepal, owns and possesses estate property as mentioned below, according to certificate issued by concerned land and revenue office.</p>
                
            </div>
            
              <div class="col-md-12">
                    <h4>PROPERTY VALUATION</h4>
                <div class="table-responsive table-bordered">

                  <table class="table" id="property-valuation-table">

                    <thead>
                      <th> S.N. </th>
                      <th> Owner </th>
                      <th> Paticular Plot no. </th>
                      <th> Area </th>
                      <th>Total Value</th>
                      <th>Remarks</th>
                      <th> </th>

                    </thead>
                    <tbody>
                            <?php $count=1;?>
                            @foreach($detail as $d)
                      <tr>
                        <td>
                        {{$count}}
                        <?php $count++;?></td>
                        <td><input class="dashed-input-field" placeholder="   *" type="text" required="required" name="owner[]" value="{{$d->owner}}"/></td>
                        <td>
                        <input class="dashed-input-field" placeholder="   *" type="text" required="required" name="particular_plot_no[]" value="{{$d->particular_plot_no}}"/>
                        </td>
                        <td>
                        <input class="dashed-input-field" placeholder="   *" type="text" required="required" name="area[]" value="{{$d->area}}"/>
                        </td>
                        <td>
                        <input class="dashed-input-field" placeholder="   *" type="text" required="required" name="total_value[]" value="{{$d->total_value}}"/>
                        </td>
                        <td>
                        <input class="dashed-input-field" placeholder="   *" type="text" required="required" name="remarks[]" value="{{$d->remarks}}"/>
                        </td>
                        <td>    
                          <button id="add-more-property" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button>
                          <button id="add-more-property" class="btn btn-danger remove-field"><span class="glyphicon glyphicon-minus"></span></button>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>


                </div>


         </div>
         
        <p>Total Valuation of property is NPR <input class="dashed-input-field" placeholder="   *" type="text" required="required" name="total_amount" value="{{$data->total_amount}}"/> which is $ <input class="dashed-input-field" placeholder="   *" type="text" required="required" name="total_amount_dollar" value="{{$data->total_amount_dollar}}"/></p>
        <p><b>Note: $1</b> equivalent to <b>NPR</b> <input class="dashed-input-field" placeholder="   *" type="text" required="required" name="dollar_to_nepali" value="{{$data->dollar_to_nepali}}"/></p>
       </div>

       <div class="col-md-12">

        <p class="btm-last">Ward President </p>
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

        <center><input  type="submit" class="btn btn-success" name="save_property_valuation_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
      </div>
    </div>
  </div>

</form>
</div>
</div>
</div>
</div>
@stop
