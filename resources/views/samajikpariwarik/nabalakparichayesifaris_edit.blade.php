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
          <h2>नाबालक परिचय पत्र </h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>

            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>


        <form action="{{url('nabalakparichayesifaris',[$data->id])}}" method="POST">
          {{method_field('PATCH')}}
          {{ csrf_field() }}
          <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
          <div class="x_content">
          @include('master.master_header_ne2')
              <div class="col-md-12">
                <div class="col-md-6">
                  <p align="left"><b>पत्र संख्या&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankya" id="patra_sankya" required="required" value="{{$data->patra_sankya}}" /> </b></p>
                  <p align="left"><b>चलानी नं.&nbsp;<input type="text" class="dashed-input-field" placeholder="   *"  name="chalani_no" id="chalani_no" required="required" value="{{$data->chalani_no}}" /></b></p>


                </div>
                <div class="col-md-6">
                  <p align="right"><b>मिति:&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" name="issued_date" id="issued_date" required="required" value="{{$data->issued_date}}" /></b></p>
                </div>
              </div>


              <div class="col-md-12">
                <p>श्री प्रमुख जिल्ला अधिकारी</p>
                <p>जिल्ला प्रशासन कार्यालय</p>
                <p> &nbsp; &nbsp; &nbsp; <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="office_address" value="{{$data->office_address}}" />| </p>
              </div>

              <div class="col-md-12">
                <p align="center" class="font-size-24">
                  <h4 align="center"><b><u>विषय: नाबालक परिचय पत्र पाउ </u></b></h4>
                </p>
              </div>
              <div class="col-md-12">
                <p>महोदय,</p>

              </div>

              <div class="col-md-12">
                <p>
                  मेरो निम्नानुसारको विवरण भएको नाबालकको नाबालक परिचयपत्र बनाउनु परेकोले सिफारिस साथ रु. १० को टिकट टासीँयो निवेदन पेश गरेको / गरेकी छु | मेरो सम्बन्धले निजको नामबाट यस अघि नाबालक परिचय लिएको छैन |
                </p>

              </div>



              <h4 align="left">१. नाबालकको नाम/थर  </h4>

              <div class="col-md-12">
                <div class="table-responsive">
                  <table class="table table-bordered" id="kitta_kat_detail_table">
                    <thead>
                      <tr>
                        <th>क्र.स.</th>
                        <th>नाता/सम्बन्ध </th>
                        <th>नाबालकको नाम</th>
                        <th>Full Name</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="" value="१" /></td>
                        <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="nabalak_relation" value="{{$data->nabalak_relation}}" /></td>
                        <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="nabalak_full_name" value="{{$data->nabalak_full_name}}" /></td>
                        <td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="nabalak_full_name_english" value="{{$data->nabalak_full_name_english}}" /></td>

                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>


              <div class="col-md-12">
                <p align="left"> २. लिङ्ग
              <select name="sex">
                <option value="पुरुष" {{$data->sex == 'पुरुष' ? 'selected' : ''}}>पुरुष</option>
                <option value="महिला" {{$data->sex == 'महिला' ? 'selected' : ''}}>महिला</option>
                <option value="अन्य" {{$data->sex == 'अन्य' ? 'selected' : ''}}>अन्य</option>
              </select></p>
                <p align="left">&nbsp;&nbsp;&nbsp; Sex
              <select name="sex_english">
                <option value="Male" {{$data->sex_english == 'Male' ? 'selected' : ''}}>Male</option>
                <option value="Female" {{$data->sex_english == 'Female' ? 'selected' : ''}}>Female</option>
                <option value="Others" {{$data->sex_english == 'Others' ? 'selected' : ''}}>Others</option>
              </select>
                </p>

                <p align="left"> ३. जन्मस्थान <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="place_of_birth" value="{{$data->place_of_birth}}" /></p>
                <p align="left">&nbsp;&nbsp;&nbsp; Place of Birth(In Block) <input type="text" class="dashed-input-field capital" placeholder="   *" required="required" name="place_of_birth_english" value="{{$data->place_of_birth_english}}" /></p>

                <p align="left"> ४. बाबुको नाम  <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="father_name" value="{{$data->father_name}}" /></p>
                <p align="left">&nbsp;&nbsp;&nbsp; Father's Name(In Block)<input type="text" class="dashed-input-field capital" placeholder="   *" required="required" name="father_name_english" value="{{$data->father_name_english}}" /></p>

                <p align="left"> ५. आमाको नाम  <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="mother_name" value="{{$data->mother_name}}" /></p>
                <p align="left">&nbsp;&nbsp;&nbsp; Mother's Name(In Block)<input type="text" class="dashed-input-field capital" placeholder="   *" required="required" name="mother_name_english" value="{{$data->mother_name_english}}" /></p>


                <p align="left"> ६.संरक्षकको नाम थर  <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="guardian_name" value="{{$data->guardian_name}}" /></p>
                <p align="left">&nbsp;&nbsp;&nbsp; Guardian's Name(In Block)<input type="text" class="dashed-input-field capital" placeholder="   *" required="required" name="guardian_name_english" value="{{$data->guardian_name_english}}" /></p>
                <p align="left">&nbsp;&nbsp;&nbsp; संरक्षकको ठेगाना <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="guardian_address" value="{{$data->guardian_address}}" /></p>


                 <p align="left"> ७.स्थायी बासस्थान; जिल्ला   <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="pa_district" value="{{$data->pa_district}}" /></p>

                 <p align="left">&nbsp;&nbsp;&nbsp;

              <select name="palika_option">
                <option value="महानगरपालिका" {{$data->palika_option == 'महानगरपालिका' ? 'selected' : ''}}>महानगरपालिका</option>
                <option value="उपमहानगरपालिका" {{$data->palika_option == 'उपमहानगरपालिका' ? 'selected' : ''}}>उपमहानगरपालिका</option>
                <option value="नगरपालिका" {{$data->palika_option == 'नगरपालिका' ? 'selected' : ''}}>नगरपालिका</option>
                <option value="गाउँपालिका" {{$data->palika_option == 'गाउँपालिका' ? 'selected' : ''}}>गाउँपालिका</option>
              </select>
                 <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="pa_palika" value="{{$data->pa_palika}}" />
               </p>
               <p align="left">&nbsp;&nbsp;&nbsp;

                 वडा नं.
                 <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="pa_ward_no" value="{{$data->pa_ward_no}}" />
               </p>






                <p align="left">८. जन्म मिति <input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" required="required" name="date_of_birth" id="date_of_birth" onfocus="showNdpCalendarBox('date_of_birth')" value="{{$data->date_of_birth}}" /></p>
                <p align="left">&nbsp;&nbsp;&nbsp;Date of Birth(AD)<input type="date" class="dashed-input-field" placeholder="   *" required="required" name="date_of_birth_ad" id="date_of_birth_ad" value="{{$data->date_of_birth_ad}}" /></p>

                 <p align="left">९.नाबालकको औँठा छाप </p>
                <p align="left"></p>

                <p>मैले माथि लेखेको व्यहोरा ठीक हो | झुट्ठा ठहरे कानुन बमोजिम सहुँला बुझाउँला भनी सही गर्ने | </p>

                <p align="right"><b>निवेदक,</b> </p>
                <p align="right">दस्तखत <input type="text" class="dashed-input-field"   name=""/></p>
                 <p align="right">नाम/थर <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="applicant_full_name" value="{{$data->applicant_full_name}}" /></p>
                  <p align="right">नाता सम्बन्ध<input type="text" class="dashed-input-field" placeholder="   *" required="required" name="relation_with_applicant" value="{{$data->relation_with_applicant}}" /></p>
                  <p align="right">मिति<input type="text" class="dashed-input-field dp-nepali-calendar" placeholder="   *" required="required" name="application_date" id="application_date"  value="{{$data->application_date}}" onfocus="showNdpCalendarBox('application_date')"/></p>


                  <p align="left"> <b> {{$local_state[0]->local_state_name}}</b> वडा नं.  <b> {{Helpers::convertNos(auth()->user()->isAdmin)}} </b> स्थायी ठेगाना  (साबिकको ठेगाना <input type="text" class="dashed-input-field star" name="sabik_address" id="sabik_address"  autocomplete="off" required="required" value="{{$data->sabik_address}}">) वडामा स्थायी बसोबास गरी बस्ने यसमा लेखिएका

              <select name="first_person_title">
              <option value="श्री" {{$data->first_person_title == 'श्री' ? 'selected' : ''}}>श्री</option>
              <option value="सुश्री" {{$data->first_person_title == 'सुश्री' ? 'selected' : ''}}>सुश्री</option>
              <option value="श्रीमती" {{$data->first_person_title == 'श्रीमती' ? 'selected' : ''}}>श्रीमती</option>
            </select>
                  <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="first_person_name" value="{{$data->first_person_name}}" />को सम्बन्ध
            <select name="second_person_title">
              <option value="श्री" {{$data->second_person_title == 'श्री' ? 'selected' : ''}}>श्री</option>
              <option value="सुश्री" {{$data->second_person_title == 'सुश्री' ? 'selected' : ''}}>सुश्री</option>
              <option value="श्रीमती" {{$data->second_person_title == 'श्रीमती' ? 'selected' : ''}}>श्रीमती</option>
            </select>

                  <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="second_person_name" value="{{$data->second_person_name}}" />लाई म राम्ररी चिन्दछु | माथि लेखिए बमोजिम निजको व्यहोरा मैले जाने बुझेसम्म साँचो हो | निजलाई नाबालक परिचय उपलब्ध गराउने सिफारिस गर्दछु | उक्त विवरण झुठ्ठा ठहरे कानुन बमोजिम सहुँला बुझाउँला |

                  </p>

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

                <center><input  type="submit" class="btn btn-success" name="save_nabalak_parichaye_sifaris_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
              </div>
            </div>
          </div>

        </form>

      </div>
    </div>
  </div>
</div>
@stop
