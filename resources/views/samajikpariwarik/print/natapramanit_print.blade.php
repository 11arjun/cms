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
                     <h4 align="center">नाता प्रमाणित पत्र</h4>
                  </div>
              </div>
           <div class="row title-left">
                <div class="col-md-6">
                 <p align="left"><b>पत्र संख्या : {{$data->patra_sankya}}</b></p>
               </div>
               <div class="col-md-6">
               </div>
             </div>


             <div class="row title-left">
              <div class="col-md-6">
                <p align="left"><b>चलानी नं. : {{$data->chalani_no}}</b></p>


              </div>
              <div class="col-md-6">
                <p align="right"><b>मिति : {{$data->issued_date}}</b></p>
              </div>
            </div>




            <div class="col-md-12">
              <p align="center" class="font-size-24">
                <h4 align="center"><b><u>विषय: नाता प्रमाणित प्रमाणपत्र</u></b></h4>
              </p>
            </div>


            <div class="col-md-12">
              <b>{{$data->person_title}} {{$data->person_name}}</b>

            </div>
            <div class="col-md-12">
              <p>

             <b> {{$local_state[0]->local_state_name}} </b> वडा नं.  <b> {{Helpers::convertNos(auth()->user()->isAdmin)}} </b>
           </p>

           </div>
           <div class="col-md-12">

            <p align="left">देहायका व्यक्तिसंग देहाय बमोजिमको नाता सम्बन्ध रहेकोले सो नाता सम्बन्ध प्रमाणित गरी पाउ भनि <b> {{$local_state[0]->local_state_name}}</b> वडा नं.  <b> {{Helpers::convertNos(auth()->user()->isAdmin)}} </b> वडा कार्यलयमा मिति <b>{{$data->application_date}}</b> मा दिनुभएको दरखास्त बमोजिम यस कार्यलयबाट आवश्यक जाँचबुझ गरी बुझ्दा तपाइको देहाय बमोजिमको व्यक्तिसंग देहाय बमोजिमको नाता सम्बन्ध कायम रहेको देखिएकोले नाता प्रमाणित गरी यो प्रमाण पत्र प्रदान गरिएको छ | </p>

          </div>



          <div class="col-md-12">
            <div class="table-responsive">
              <table class="table table-bordered" id="nata_sambandha_table">
                <thead>

                  <th>क्र.स.</th>
                  <th>नाता सम्बन्ध कायम गरेको व्यक्तिको नाम </th>
                  <th>नाता</th>
                </thead>
                <tbody>
                  <?php $count = 1;?>
                   @foreach($detail as $d)
                  <tr>
                    <td>{{Helpers::convertNos($count)}}
                      <?php $count++;?>
                    </td>
                    <td>{{$d->relative_name}}</td>
                    <td>{{$d->relation}}</td>
                  </tr>
                  @endforeach
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
    </div>
</page>
<div class="col-md-12">
   <center>
    <div class="hide-button">
      <a class="btn btn-fixed" href="{{url('home')}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
      <a class="btn btn-fixed"  href="natapramanit/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
      <a class="btn btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a>
      <a class="btn btn-fixed" href="{{url('natapramanit/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
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
