<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
<div id="page">
<page size="A4"  class="short">
   <div class="x_panel">
   <div class="x_content">

     {{-- <header <?php echo empty($print_mode)?"":$print_mode;?>>
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
     </header> --}}
     @include('master.master_header_print_ne',['chalaniNo'=>$data->chalani_no,'patraSankhya'=>$data->patra_sankhya])
  <div class="row top-part">
              <div class="col-md-6">
               {{-- <p align="left"><b>पत्र संख्या :{{$data->patra_sankhya}}</b></p> --}}
                {{-- <p align="left"><b>चलानी नं. :{{$data->chalani_no}}</b></p> --}}
             </div>
             <div class="col-md-6">
              <p align="right"><b>मिति :{{$data->issued_date}}</b></p>
             </div>
           </div>

          <div class="row title-left">
           <div class="col-md-12">

            <p align="left">श्री {{$data->office_name}}, </p>
                <p align="left">{{$data->office_address}}</p>
                <p align="left">{{$data->office_address2}} |</p>

           </div>
         </div>



        <div class="row">
          <div class="col-md-12">
            <p align="center" class="font-size-24">
              </p><h4 align="center"><b>विषय: {{$data->subject}}।</b></h4>

          </div>
        </div>
        <div class="row">
          <div class="col-md-12 content-para">


            <p>
         {!!$data->behora!!}
            </p>
          </div>
        </div>

          <div class="col-md-12">
              <hr>


                        <div class="text-right btm-last">
            <p>{{$data->hakim_ko_name}}</p>


             <p> <b> {{$data->officer}}

</b> </p>
            </div>
             </div>


</div>
</div>
</page>
</div>
  <div class="col-md-12">
   <center>
     <div class="hide-button">
      <a class="btn btn-fixed" href="{{url('home')}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
      <a class="btn btn-fixed"  href="GeneralSifaris/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
      <a class="btn btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a>
      <a class="btn btn-fixed" href="{{url('GeneralSifaris/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
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
