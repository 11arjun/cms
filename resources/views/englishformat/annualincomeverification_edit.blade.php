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
          <h2> Verification of Annual Income </h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>

            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>

        <div class="x_content">

          <form action="{{url('annualincomeverification',[$data->id])}}" method="post">
            {{method_field('PATCH')}}
              {{ csrf_field() }}
        
            @include('master.master_header_english')

              <div class="col-md-12">
                <div class="col-md-6">
                  {{-- <p align="left"><b>Ref No. :<input class="dashed-input-field" placeholder="   *" name="ref_no" value="{{$data->ref_no}}" required="required" type="text"/></b></p> --}}
                </div>
                <div class="col-md-6">
                  <p align="right"><b>Date:  <input id="issued_date" required="required" name="issued_date" value="{{$data->issued_date}}" class="dashed-input-field" placeholder="   *" type="text"/></b> </p>
                </div>
              </div>

              <div class="col-md-12">
                <p align="center" class="font-size-24">
                  <h3 align="center"><b><u> Subject: Verification of Annual Income </u></b></h3>
                </p>
                <p align="center" class="font-size-24">
                  <h4 align="center"><b><u>To Whom It May Concern</u></b></h4>
                </p>
              </div>




          <div class="col-md-12">
                <p align="left">This is to certify that <b>
                <select name="person_title">
                  <option value="Mr" {{$data->person_title == 'Mr' ? 'selected' : ''}}>Mr</option>
                  <option value="Mrs" {{$data->person_title == 'Mrs' ? 'selected' : ''}}>Mrs</option>
                  <option value="Miss" {{$data->person_title == 'Miss' ? 'selected' : ''}}>Miss</option>
                </select>
            <input class="dashed-input-field" placeholder="   *" type="text" required="required" name="person_name" value="{{$data->person_name}}" /></b>,
                permanent resident of {{$district[0]->district_name_english}} Ward No. {{auth()->user()->isAdmin}}, <input class="dashed-input-field" placeholder="   *" type="text" required="required" name="address" value="{{$data->address}}" />, has income from the following sources:</p>
              </div>

              <div class="col-md-12">
                <div class="table-responsive table-bordered">
                  <table class="table" id="annual_income_verification_table">

                    <thead>
                      <th> S.N. </th>
                      <th> Relation with Applicant </th>
                      <th> Parties Name </th>
                      <th> Annual Income </th>
                      <th> Remarks </th>
                      <th> </th>

                    </thead>
                    <tbody>
                       <?php 

                        $applicant_relation=explode(',',$data->applicant_relation);
                        $parties_name=explode(',',$data->parties_name);
                        $annual_income=explode(',',$data->annual_income);
                        $remarks=explode(',',$data->remarks);
                        $len=sizeof($applicant_relation);
                        $count_1=1;
                           ?>
                           <?php for ($i=0; $i <$len ; $i++) { 
                            ?>
                        <tr>
                   
                        <td>
                          <input class="dashed-input-small-field" placeholder="   *" type="text" required="required" value="{{$count_1}}" />
                        </td>
                        <td>
                            <input class="dashed-input-field" placeholder="   *" type="text"  name="applicant_relation[]" value="{{$applicant_relation[$i]}}" />
                        </td>
                       
                        <td>
                          <input class="dashed-input-field" placeholder="   *" type="text" name="parties_name[]" value="{{$parties_name[$i]}}"/>
                        </td>
                        <td>
                          <input class="dashed-input-field" placeholder="   *" type="text" name="annual_income[]" value="{{$annual_income[$i]}}"/>
                        </td>
                      
                        <td>
                            <input class="dashed-input-field" placeholder="   *" type="text" name="remarks[]" value="{{$remarks[$i]}}"/>
                        </td>
                        <td>

                          <a id="add_more_annual_income" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></a>
                        </td>

                          <td><a href="" class="btn btn-danger remove-field" ><span class="glyphicon glyphicon-minus "></span></a></td>
                      </tr>
                      <?php $count_1++; } ?>  
                    </tbody>
                  </table>


                </div>


         </div>
          <p> &nbsp;&nbsp;Total valuation of income source is <b>NRs.</b><input class="dashed-input-field" placeholder=" *" type="text" name="total_nepali_rs" value="{{$data->total_nepali_rs}}" /> which is equvalent to <b>$</b>  <input class="dashed-input-field" placeholder="   *" type="text" name="total_us_dollar" value="{{$data->total_us_dollar}}" /></p>
       </div>
      <div class="col-sm-12">
         <p> &nbsp;&nbsp;Note:Today's exchange rate <b>1$ = NRs.</b> <input class="dashed-input-field" placeholder="   *" type="text" name="us_dollar" value="{{$data->us_dollar}}" /></p>
      </div>
       <div class="col-md-12">

        <p class="btm-last">  Ward President </p>
      </div>
        <!--views for nibedak detail -->
<div class="clearfix"></div>
<hr>
<section class="bibaran">
<fieldset>

<legend>Applicant Information</legend>


<div class="form-group">
<label>Applicant Name</label>
<input type="text" name="nibedak_name" value="{{$data->nibedak_name}}" class="form-control" required>
</div>
<div class="form-group">
<label>Applicant Address</label><input type="text" name="nibedak_address" value="{{$data->nibedak_address}}" class="form-control" required>
</div><div class="form-group">
<label>Applicant Citizen Id.</label>
<input type="text" name="nibedak_citizenship_no" value="{{$data->nibedak_citizenship_no}}" class="form-control" required>
</div>
<div class="form-group">
<label>Applicant Id(NID) </label>
<input type="text" name="nibedak_nid" value="{{$data->nibedak_nid}}" class="form-control" required>
</div>

</fieldset>
</section>


      <div class="col-md-12">
        <hr/>
        <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">

        <center><input  type="submit" class="btn btn-success" name="update_annualincome_verification_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
      </div>
    </div>
  </div>

</form>
</div>
</div>
</div>
</div>
@stop
