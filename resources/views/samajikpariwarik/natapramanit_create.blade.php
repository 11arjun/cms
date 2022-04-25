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
          <h2>नाता प्रमाणित पत्र </h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>

            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>


        <form action="{{url('natapramanit')}}" method="post">
           {{ csrf_field() }}
           <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
          <div class="x_content">
          @include('master.master_header_ne2')

              <div class="col-md-12">
                <div class="col-md-6">
                 <p align="left"><b>पत्र संख्या&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankya" id="patra_sankya" required="required"/></b></p>
               </div>
               <div class="col-md-6">
               </div>
             </div>


             <div class="col-md-12">
              <div class="col-md-6">
                <p align="left"><b>चलानी नं.&nbsp;<input type="text" class="dashed-input-field" placeholder="   *"   name="chalani_no" id="chalani_no" required="required"/></b></p>


              </div>
              <div class="col-md-6">
                <p align="right"><b>मिति:&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" name="issued_date" id="issued_date" required="required"/></b></p>
              </div>
            </div>




            <div class="col-md-12">
              <p align="center" class="font-size-24">
                <h4 align="center"><b><u>विषय: नाता प्रमाणित प्रमाणपत्र</u></b></h4>
              </p>
            </div>


            <div class="col-md-12">
              <select name="person_title">
              <option value="श्री">श्री</option>
              <option value="सुश्री">सुश्री</option>
              <option value="श्रीमती">श्रीमती</option>
            </select>





              <input type="text" class="dashed-input-field" placeholder="   *" name="person_name" id="person_name" required="required"/>

            </div>
            <div class="col-md-12">
              <p>

             <b> {{$local_state[0]->local_state_name}} </b> वडा नं.  <b>{{Helpers::convertNos(auth()->user()->isAdmin)}} </b>
           </p>

           </div>
           <div class="col-md-12">

            <p align="left">देहायका व्यक्तिसंग देहाय बमोजिमको नाता सम्बन्ध रहेकोले सो नाता सम्बन्ध प्रमाणित गरी पाउ भनि <b> {{$local_state[0]->local_state_name}}</b> वडा नं.  <b> {{Helpers::convertNos(auth()->user()->isAdmin)}}</b> वडा कार्यलयमा मिति <input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" required="required" id="application_date" name="application_date" onfocus="showNdpCalendarBox('application_date')"/> मा दिनुभएको दरखास्त बमोजिम यस कार्यलयबाट आवश्यक जाँचबुझ गरी बुझ्दा तपाइको देहाय बमोजिमको व्यक्तिसंग देहाय बमोजिमको नाता सम्बन्ध कायम रहेको देखिएकोले नाता प्रमाणित गरी यो प्रमाण पत्र प्रदान गरीएको छ | </p>

          </div>



          <div class="col-md-12">
            <div class="table-responsive">
              <table class="table table-bordered" id="nata_sambandha_table">
                <thead>

                  <th>क्र.स.</th>
                  <th>नाता सम्बन्ध कायम गरेको व्यक्तिको नाम </th>
                  <th>नाता</th>
                  <th> </th>
                </thead>
                <tbody>
                  <tr>
                    <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="" value="१"> </td>
                    <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="relative_name[]"> </td>
                    <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="relation[]"> </td>

                    <td><button href="" id="add_more_nata" class="btn btn-success" ><span class="glyphicon glyphicon-plus"></span></button></td>
                  </tr>

                </tbody>
              </table>
            </div>
            <div class="col-ms-6">
             <p> <b> दरखास्तवालाको दस्तखत :</b></p>
             <p><b>ल्याप्चे सहीछाप</b></p>
             <div class="img-box" style="float: left;margin-right: 10px"><p>दायाँ</p></div>
             <div class="img-box" style="float: left;"><p>बायाँ</p></div>
             <div class="clearfix"></div>
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

            <center><input  type="submit" class="btn btn-success" name="save_nata_pramanit_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
          </div>
        </div>
      </div>

    </form>

  </div>
</div>
</div>
</div>
@stop
