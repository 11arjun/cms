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
                     <h4 align="center">विवाह प्रमाण पत्र</h4>
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
              <p align="right"><b> मिति : {{$data->issued_date}}</b></p>
            </div>
          </div>




          <div class="col-md-12">
            <p align="center" class="font-size-24">
              <h4 align="center"><b><u>विषय: विवाह प्रमाणित</u></b></h4>
            </p>
          </div>





          <div class="col-md-12">

            <p align="left">श्री <b>{{$data->boy_grand_father}}</b> को नाति श्री <b>{{$data->boy_father}}</b> तथा श्रीमती  <b>{{$data->boy_mother}}</b> को छोरा, <b>{{$data->boy_mother}}</b> (साबिकको ठेगाना <b>{{$data->boy_previous_address}}</b> ) निवासी श्री <b>{{$data->girl_grand_father}} </b> र श्री <b>{{$data->girl_grand_mother}}</b> को नातिनी श्री <b>{{$data->girl_father}}</b> तथा श्रीमती  <b>{{$data->girl_mother}}</b> को छोरी ,<b>{{$local_state[0]->local_state_name}} </b>(साबिकको ठेगाना <b>{{$data->girl_previous_address}}</b> )निवासी सुश्री <b>{{$data->girl_name}}</b> बीच मिति <b>{{$data->marriage_date}}</b> मा विवाह भएको व्यहोरा प्रमाणित गरिन्छ |</p>



            </div>
            <div class="col-md-12">
                <p class="btm-last">  वडा अध्यक्ष </p>
           </div>
        </div>
    </page>
<div class="col-md-12">
   <center>
    <div class="hide-button">
      <a class="btn btn-fixed" href="{{url('home')}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
      <a class="btn btn-fixed"  href="marriageverification/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
      <a class="btn btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a>
      <a class="btn btn-fixed" href="{{url('marriageverification/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
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
