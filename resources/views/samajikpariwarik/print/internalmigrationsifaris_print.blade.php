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






          <div class="col-md-12">
            <p align="center" class="font-size-24">
              <h4 align="center"><b><u>विषय: आन्तरिक बसाइँसराई|</u></b> </h4>
            </p>
          </div>
          <div class="col-md-12">
            <p>
             <b>{{$data->person_title}} {{$data->person_name}} </b>
            </p>
            <p> &nbsp;&nbsp;&nbsp;
             <b>{{$data->office_address}}</b> |
           </p>


           <p align="left">
            तपाइ <b>{{$data->house_owner}} </b> बाट एक्लै/तपसिलमा उल्लेखित परिवारसहित मिति <b>{{$data->migration_date}}</b> देखि <b>{{$data->district}}</b> जिल्ला <b>{{$data->palika_name}}</b>

            <b>{{$data->palika_options}} </b>वडा नं. <b>{{$data->ward_no}}</b> बाट यस  <b>{{$local_state[0]->local_state_name}}</b> वडा नं.<b> {{Helpers::convertNos(auth()->user()->isAdmin)}}</b> अन्तर्गत <b>{{$data->migration_place}}</b> मा बसाई सरी आउनुभएको व्यहोरा प्रमाणित गरिन्छ |
          </p>








        </div>

        <div class="col-md-12">
          <h4 align="center"> <b>तपसिल</b></h4>
          <table class="table table-bordered" id="internal-migration-table">

            <thead>
              <tr>
                <th>क्र.स.</th>
                <th>नाम थर </th>
                <th>निवेदक संगको नाता </th>
                <th>ना.प्र.न/जन्म दर्ता </th>
                <th>घर नं </th>
                <th>बाटोको नाम</th>
                <th>उमेर</th>
              </tr>

            </thead>
            <tbody>
              <?php $count=1;?>
              @foreach($detail as $d)
              <tr>
                <td>{{Helpers::convertNos($count)}}
                  <?php $count++;?>
                </td>
                <td>{{$d->full_name}}</td>
                <td>{{$d->relation}}</td>
                <td>{{$d->citizenship_no}}</td>
                <td>{{$d->ghar_no}}</td>
                <td>{{$d->batto_name}}</td>
                <td>{{$d->age}}</td>
                </tr>
                 @endforeach
              </tbody>
            </table>
              <p class="btm-last">  अध्यक्ष / वडा अध्यक्ष </p>
      </div>
    </div>
</page>
<div class="col-md-12">
   <center>
    <div class="hide-button">
      <a class="btn btn-fixed" href="{{url('home')}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
      <a class="btn btn-fixed"  href="internalmigrationsifaris/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
      <a class="btn btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a>
      <a class="btn btn-fixed" href="{{url('internalmigrationsifaris/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
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
