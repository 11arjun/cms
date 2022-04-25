<link rel="stylesheet" type="text/css" href="{{ asset('css/custom_print.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">


<div id="page" class="long">
<page size="A4" >
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
<div class="top-part">
  <div class="row title-left">
    <div class="col-md-6">
     <p align="left"><b><span  style="margin-left: 11px;">पत्र संख्या</span>&nbsp;{{$data->patra_sankya}}</b></p>
   </div>
   <div class="col-md-6">
   </div>
 </div>


 <div class="row title-left">
  <div class="col-md-6">
    <p align="left"><b><span style="margin-left: 11px;">चलानी नं.&nbsp;{{$data->chalani_no}}</b></p>


  </div>
  <div class="col-md-6">
    <p align="right"><b><span <?php echo empty($print_mode)?"":$print_mode;?>>मिति:</span>&nbsp;{{$data->issued_date}}</b></p>
  </div>
</div>
</div>



<div class="col-md-12">
  <p align="center" class="font-size-24">
    <h4 align="center"><b><u>विषय: बिजुली जडान सिफारिस। </u></b> </h4>
  </p>
</div>

<div class="col-md-12 title-left">
 <p>श्री <b>{{$data->office_chairman}}</b>,</p>
 <p>&nbsp; &nbsp;<b>{{$data->office_name}}</b> | </p>

</div>





       <div class="col-md-12 content-para">

        <p><b>{{$local_state[0]->local_state_name}}</b> वडा नं.  <b> {{Helpers::convertNos(auth()->user()->isAdmin)}} </b> (साबिकको ठेगाना <b>{{$data->sabik_address}}</b>) बस्ने <b>

            {{$data->person_title}} {{$data->person_name}} </b>नाममा दर्ता कायम रहेको कि.नं. <b> {{$data->kitta_no}}</b> को जग्गामा मिति <b>{{$data->house_approve_date}}</b> मा भवन निर्माण स्वीकृति लिनु भई<b>

         {{$data->construction_type}}</b> रुपमा निर्माण सम्पन्न गर्नुभएको वा अभिलेखीकरण गर्नुभएको हुदाँ निजलाई <b>{{$data->electricity_capacity}}</b> एम्पियर क्षमताको<b> {{$data->electricity_line_name}}</b>
        बिजुलीको लाइन जडान गरिदिनुहुन सिफारिस साथ अनुरोध गरिन्छ| </p>
      </div>
      <div class="col-md-12">


      </div>
      <h4 align="center">कित्ता नं. को   विवरण</h4>
      <div class="col-md-12">
        <div class="table-responsive">
          <table class="table table-bordered" id="bijuli_jadan_kitta_table">
            <thead>

              <th>क्र.स.</th>
              <th>कित्ता नं.</th>

            </thead>
            <tbody>
              <?php $count=1; ?>
               @foreach($detail as $d)
                    <tr>
                      <td>{{ Helpers::convertNos($count)}}
                        <?php $count++; ?></td>

                      <td>{{$d->bijuli_jadan_kitta_no}}</td>

                    </tr>
                    @endforeach

              </tbody>
            </table>
          </div>
           <p class="btm-last">  वडा अध्यक्ष </p>
                <div class="clearfix"></div>
                <p>बोधार्थ:-</p>
                <p>&nbsp; &nbsp;&nbsp; &nbsp;-जानकारीको लागि |</p>
        </div>
      </div>
  <!-- <footer>
      <p><b> <?php echo empty($local_state_name)?"":$local_state_name; ?></b>नेपाल , फोन नं.:<b> <?php echo empty($telephone_no)?"":$telephone_no; ?></b>फ्याक्स<b><?php echo empty($fax_no)?"":$fax_no; ?></b></p>
      <p>ईमेल:<b> <?php echo empty($email)?"":$email; ?></b>,वेभसाइट :<b> <?php echo empty($web_site)?"":$web_site;?></b></p>
    </footer> -->
</page>
</div>






  <div class="col-md-12">
    <center>
      <div class="hide-button" style="display: block;">
      <a class="btn btn-fixed" href="{{url('home')}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
        <a class="btn btn-fixed" href="bijulijadansifaris/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
      <a class="btn btn-fixed" id="print_bijuli_jadan_sifaris"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a>


    <a class="btn btn-fixed" href="{{url('bijulijadansifaris/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a> </div> </center>
    </div>

<!-- jQuery -->
  <script src="{{ asset('admin/bower_components/jquery/dist/jquery.min.js') }}"></script>

  <script type="text/javascript">


  $('#print_bijuli_jadan_sifaris').click(function() {
    $('.hide-button').hide();

    window.print();
    $('.hide-button').show();

});
</script>
