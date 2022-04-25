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
          <h2>जग्गाधनी प्रमाण पत्रको प्रतिलिपि  सिफारिस</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>


        <form action="{{url('jaggadhanipramanpatrasifaris')}}" method="post">
           {{ csrf_field() }}
            <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">

          <div class="x_content">
              @include('master.master_header_ne2')
           

              <!-- <div class="col-md-2">
                <p><img src="{{ asset('images/logo.png') }}"> </p>
              </div>
              
              <div class="col-md-8">

               <p align="center" class="font-size-24"><b> {{$local_state[0]->local_state_name}}</b></p>
               <p align="center" class="font-size-24">
                <b> {{Helpers::convertNos(auth()->user()->isAdmin)}} नं वडा कार्यालय, <?php echo empty($ward_office)?"":$ward_office;?> </b></p>
               <h3 align="center" class="sm-head">{{Helpers::convertNos(auth()->user()->provience_id)}} नं. प्रदेश, नेपाल</h3>

              </div>
              <div class="col-md-2">


              </div>
            </div>
 -->
            <div class="col-md-12">
              <div class="col-md-6">
               {{-- <p align="left"><b>पत्र संख्या&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankya" id="patra_sankya" required="required"/></b></p>
               <p align="left"><b>चलानी नं.&nbsp;<input type="text" class="dashed-input-field" placeholder="   *"  name="chalani_no" id="chalani_no" required="required"/></b></p> --}}
             </div>
             <div class="col-md-6">
              <p align="right"><b>मिति:&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" name="issued_date" id="issued_date" required="required"/></b></p>
            </div>
          </div>

          <div class="col-md-12">

            <p align="left">श्री <input type="text" class="dashed-input-field" placeholder="   *" name="office_chairman" id="office_chairman" required="required"/></p>
            <p align="left"><input type="text" class="dashed-input-field" placeholder="   *" name="office_name" id="office_name" required="required"/>।</p>

          </div>




          <div class="col-md-12">
            <p align="center" class="font-size-24">
              <h4 align="center"><b><u>विषय: सिफारिस सम्बन्धमा</u></b> </h4>
            </p>
          </div>
          <div class="col-md-12">

              <select name="land_owner_title">
              <option value="श्री">श्री</option>
              <option value="सुश्री">सुश्री</option>
              <option value="श्रीमती">श्रीमती</option>
            </select>

              <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="land_owner_name"/>को नाममा समेत संयुक्त दर्ता श्रेस्ता भएको 

              <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="palika_name"/>

            
               <select name="palika_type">
              <option value="महानगरपालिका">महानगरपालिका</option>
              <option value="उपमहानगरपालिका">उपमहानगरपालिका</option>
              <option value="नगरपालिका">नगरपालिका</option>
               <option value="गाउँपालिका">गाउँपालिका</option>
            </select>
            वडा नं. <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="ward_no"/>(साबिकको ठेगाना <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="sabik_address"/>)कि.नं. <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="kitta_no"/>को क्षे.फ. <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="area"/> भएको जग्गाको जग्गाधनी लाल पुर्जा हराएकोले सोको प्रतिलिपिको सिफारिस गरी पाउँ भनी वडा नं.<b>{{Helpers::convertNos(auth()->user()->isAdmin)}}</b>(साबिकको ठेगाना 
              <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="person_sabik_address"/>) बस्ने 

               <select name="applicant_title">
              <option value="श्री">श्री</option>
              <option value="सुश्री">सुश्री</option>
              <option value="श्रीमती">श्रीमती</option>
            </select>
              <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="applicant_name" id="applicant_name" />

              ले यस वडा कार्यालयमा निवेदन दिनुभएको हुदाँ सो सम्बन्धमा त्यहाँको नियमानुसार जग्गाधनी प्रमाण पुर्जाको प्रतिलिपि उपलब्ध गराई दिनुहुन सिफारिस गरिन्छ।



              <p>निवेदक <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="apllicant_name" id="applicant_name"/></p>
              <p>ना.प्र.नं. <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="citizenship_no"/></p>
              <p>जारी मिति <input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" name="citizenship_issued_date" id="citizenship_issued_date" required="required" onfocus="showNdpCalendarBox('citizenship_issued_date')" autocomplete="off"></p>
              <p>पिता <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="father_name"/></p>
              <p>बाजे<input type="text" class="dashed-input-field" placeholder="   *" required="required" name="grand_father_name"/></p>
              
              <p class="btm-last">वडा अध्यक्ष</p>
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

              <center><input  type="submit" class="btn btn-success" name="jagga_dhani_pramanpatra_pratilipi_sifaris_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
            </div>
          </div>
        </div>

      </form>

    </div>
  </div>
</div>
</div>
@stop
