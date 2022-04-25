<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">


<page size="A4" class="short">
      <div class="x_panel">
          <div class="x_content">
            <header <?php echo empty($print_mode)?"":$print_mode;?>>
                <div class="col-md-12" style="margin-top: 40px;">
                  <div class="col-md-2">
                    <p><img src="{{asset('images/logo.png')}}"> </p>
                  </div>
                  <div class="col-md-8">
                    <p align="center" class="font-size-24"><b> {{$local_state[0]->local_state_name}} </b></p>
                    <p align="center" class="font-size-24">
                      <b> {{Helpers::convertNos(auth()->user()->isAdmin)}} नं वडा कार्यालय, <?php echo empty($ward_office)?"":$ward_office;?> </b></p>
                      <h3 align="center" class="sm-head">{{Helpers::convertNos(auth()->user()->provience_id)}} नं. प्रदेश, नेपाल</h3>

                    </div>
                    <div class="col-md-2">


                    </div>
                  </div>
            </header>
            <div class="row title-left">
                  <div class="col-md-12">
                     <h4 align="center">नाबालक परिचय पत्र</h4>
                  </div>
              </div>
              <div class="row title-left">
                <div class="col-md-6">
                  <p align="left"><b>पत्र संख्या : {{$data->patra_sankya}}</b></p>
                  <p align="left"><b>चलानी नं. : {{$data->chalani_no}}</b></p>


                </div>
                <div class="col-md-6">
                  <p align="right"><b>मिति : {{$data->issued_date}}</b></p>
                </div>
              </div>


              <div class="row title-left">
                <div class="col-md-6">
                <p>श्री प्रमुख जिल्ला अधिकारी</p>
                <p>जिल्ला प्रशासन कार्यालय</p>
                <p> &nbsp; &nbsp; &nbsp; <b>{{$data->office_address}}</b> | </p>
              </div>
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
                        <td>१</td>
                        <td>{{$data->nabalak_relation}}</td>
                        <td>{{$data->nabalak_full_name}}</td>
                        <td>{{$data->nabalak_full_name_english}}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>


              <div class="col-md-12">
                <p align="left"> २. लिङ्ग
              <b>{{$data->sex}}</b></p>
                <p align="left">&nbsp;&nbsp;&nbsp; Sex
              <b>{{$data->sex_english}}</b></p>

                <p align="left"> ३. जन्मस्थान <b>{{$data->place_of_birth}}</b></p>
                <p align="left">&nbsp;&nbsp;&nbsp; Place of Birth(In Block) <b>{{$data->place_of_birth_english}}</b></p>

                <p align="left"> ४. बाबुको नाम <b>{{$data->father_name}}</b></p>
                <p align="left">&nbsp;&nbsp;&nbsp; Father's Name(In Block) <b>{{$data->father_name_english}}</b></p>

                </div>
                </div>
              </div>
                </page>

                <page size="A4" class="short">
                  <div class="x_panel">
                <div class="x_content">
                    <div class="col-md-12" style="margin-top: 40px;">

                    <p align="left"> ५. आमाको नाम  <b>{{$data->mother_name}}</b></p>
                    <p align="left">&nbsp;&nbsp;&nbsp; Mother's Name(In Block)<b>{{$data->mother_name_english}}</b></p>

                <p align="left"> ६.संरक्षकको नाम थर <b>{{$data->guardian_name}}</b></p>
                <p align="left">&nbsp;&nbsp;&nbsp; Guardian's Name(In Block)<b>{{$data->guardian_name_english}}</b></p>
                <p align="left">&nbsp;&nbsp;&nbsp; संरक्षकको ठेगाना <b>{{$data->guardian_address}}</b></p>


                 <p align="left"> ७.स्थायी बासस्थान; जिल्ला <b>{{$data->pa_district}}</b></p>

                 <p align="left">&nbsp;&nbsp;&nbsp;
               <b>{{$data->palika_option}} {{$data->pa_palika}}</b>
               </p>
               <p align="left">&nbsp;&nbsp;&nbsp;

                 वडा नं.
                 <b>{{$data->pa_ward_no}}</b>
               </p>


                <p align="left">८. जन्म मिति <b>{{$data->date_of_birth}}</b></p>
                <p align="left">&nbsp;&nbsp;&nbsp;Date of Birth(AD)<b>{{$data->date_of_birth_ad}}</b></p>

                 <p align="left">९.नाबालकको औँठा छाप </p>
                <p align="left"></p>

                <p>मैले माथि लेखेको व्यहोरा ठीक हो | झुट्ठा ठहरे कानुन बमोजिम सहुँला बुझाउँला भनी सही गर्ने | </p>

                <p align="right"><b>निवेदक,</b> </p>
                <p align="right">दस्तखत <input type="text" class="dashed-input-field"   name=""/></p>
                 <p align="right">नाम/थर:&nbsp;<b>{{$data->applicant_full_name}}</b></p>
                  <p align="right">नाता सम्बन्ध:&nbsp;<b>{{$data->relation_with_applicant}}</b></p>
                  <p align="right">मिति:&nbsp; <b>{{$data->application_date}}</b></p>


                  <p align="left"> <b> {{$local_state[0]->local_state_name}}</b> वडा नं.  <b> {{Helpers::convertNos(auth()->user()->isAdmin)}} </b> स्थायी ठेगाना  (साबिकको ठेगाना <b>{{$data->sabik_address}}</b>) वडामा स्थायी बसोबास गरी बस्ने यसमा लेखिएका

              <b>{{$data->first_person_title}}
                  {{$data->first_person_name}}</b> को सम्बन्ध
            <b>{{$data->second_person_title}} {{$data->second_person_name}}</b> लाई म राम्ररी चिन्दछु | माथि लेखिए बमोजिम निजको व्यहोरा मैले जाने बुझेसम्म साँचो हो | निजलाई नाबालक परिचय उपलब्ध गराउने सिफारिस गर्दछु | उक्त विवरण झुठ्ठा ठहरे कानुन बमोजिम सहुँला बुझाउँला |

                  </p>

              </div>
            </div>
            </div>
    </page>

<div class="col-md-12">
   <center>
    <div class="hide-button">
      <a class="btn btn-fixed" href="{{url('home')}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
      <a class="btn btn-fixed"  href="nabalakparichayesifaris/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
      <a class="btn btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a>
      <a class="btn btn-fixed" href="{{url('nabalakparichayesifaris/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
    </div>
   </center>
</div>
<!-- jQuery -->
<!-- jQuery 3 -->
<script src="{{ asset('admin/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#print_certificate').click(function() {
    $('.hide-button').hide();

    window.print();

    $('.hide-button').show();
    });
  });
</script>
