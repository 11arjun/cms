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
                     <h4 align="center">स्थायी बसोबास सिफारिस</h4>
                  </div>
              </div>
            <div class="row title-left">
              <div class="col-md-6">
               <p align="left"> <b> पत्र संख्या : {{$data->patra_sankya}}</b></p>
             </div>
             <div class="col-md-6">
             </div>
           </div>


           <div class="row title-left">
            <div class="col-md-6">
              <p align="left" class="star"><b>चलानी नं. : {{$data->chalani_no}}</b>
                   </p>


            </div>
            <div class="col-md-6">
              <p align="right" class="star"><b>मिति : {{$data->issued_date}}</b></p>
            </div>
          </div>



          <div class="col-md-12">
            <p align="center" class="font-size-24">
              <h4 align="center"><b><u>विषय: स्थायी बसोबास सिफारिस।</u></b></h4>
            </p>
          </div>





          <div class="col-md-12">

           <p align="left">निवेदक <b>{{$data->person_title}} {{$data->person_name}}</b>
            ले पेश गर्नुभएको निवेदनका आधारमा निज
            <b>{{$data->houseowner_title}} {{$data->houseowner_name}}</b>
            <b> {{$local_state[0]->local_state_name}} </b> वडा नं.  <b> {{Helpers::convertNos(auth()->user()->isAdmin)}}</b> (साबिकको ठेगाना <b>{{$data->sabik_address}}</b> देखि स्थायी बसोबास गर्दै आउनु भएको व्यहोरा सिफारिस साथ अनुरोध गरिन्छ |  अन्तर्गत  तल उल्लेखित स्थानमा विगत मिति {{$data->living_starting_date}}</b></p>
<!--              </div>
             <div class="col-md-12">
              <div class="col-md-12"> -->
                <p><i>बसोबास गर्नेको ना.प्र.प.न. {{$data->citizenship_no}} / जिल्ला- {{$data->district_name}} / जारी  मिति- {{$data->citizenship_issued_date}}</i></p>
             </div>
            <h4 align="center"><b>बसोबास स्थान </b></h4>
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-bordered" id="permanent_basobas_table">
                  <thead>

                    <th>क्र.स.</th>
                    <th>टोल </th>
                    <th>बाटोको नाम</th>
                    <th>घर नं.</th>
                  </thead>
                  <tbody>
                    <?php $count=1;?>
                    @foreach($detail as $d)
                    <tr>
                      <td>{{Helpers::convertNos($count)}}
                        <?php $count++;?>
                      </td>
                      <td>{{$d->toll}}</td>
                      <td>{{$d->batto_name}}</td>
                      <td>{{$d->ghar_no}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
                  <p class="btm-last">  वडा अध्यक्ष </p>
     </div>
    </div>
</page>
<div class="col-md-12">
   <center>
    <div class="hide-button">
      <a class="btn btn-fixed" href="{{url('home')}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
      <a class="btn btn-fixed"  href="esthaiebasobasSifaris/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
      <a class="btn btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a>
      <a class="btn btn-fixed" href="{{url('esthaiebasobasSifaris/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
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
