<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

<page size="A4" class="short">
      <div class="x_panel">
       <div class="x_content">

         {{-- <header>
           <div class="col-md-12" style="margin-top: 40px;">
             <div class="col-md-3">
               <p><img src="{{ asset('images/logo.png') }}"> </p>
             </div>
              <div class="col-md-9">
               </div>
             <div class="col-md-12 title_header">
                <p align="center" class="font-size-24">{{$local_state[0]->local_state_name_english}}<br> Ward No.
                 <b>{{auth()->user()->isAdmin}},</b><br></p>
                 <p align="center" class="font-size-24"><b> Province No. {{auth()->user()->provience_id}} Nepal </b></p>

               </div>
               <div class="col-md-2">

               </div>
             </div>
             </header> --}}
             @include('master.master_header_print_en')

              <div class="row top-part">
                  <div class="col-md-12">
                     <h4 align="center">Occupation Verification</h4>
                  </div>
               </div>

            <div class="row title-left">
              <div class="col-md-6">
                {{-- <p align="left"><b>Ref No : {{$data->ref_no}}</b></p> --}}
              </div>
              <div class="col-md-6">
                <p align="right"><b>Date:  {{$data->issued_date}}</b> </p>
              </div>
            </div>


            <div class="col-md-12">
              <p align="center" class="font-size-24">
                <h3 align="center"><b><u> Subject:Occupation Verification </u></b></h3>
              </p>
              <p align="center" class="font-size-24">
                <h4 align="center"><b><u>To Whom It May Concern</u></b></h4>
              </p>
            </div>


         <div class="col-md-12">
              <p align="left">As per the record of the office, it is hearby certified that Mr.<b>{{$data->applicant_name}}</b> son of Mr. <b>{{$data->father_name}}</b> & Miss <b>{{$data->mother_name}}</b> permanent resident of Rural Municipality/Municipality Ward no {{auth()->user()->isAdmin}}, District (Previously known as <b>{{$data->previous_vdc_name}}</b> VDC ward no <b>{{$data->previous_ward_no}}</b>,<b>{{$data->previous_district}}</b> District Nepal)are involved in <b>{{$data->business_name}}</b>.


                </div>

            </div>




         <div class="col-md-12">


<p class="btm-last">  Ward President </p>

      </div>
</div>
 </page>
<div class="col-md-12">
   <center>
    <div class="hide-button">
      <a class="btn btn-fixed" href="{{url('home')}}"><span class="glyphicon glyphicon-home"></span>???????????????????????? </a>
      <a class="btn btn-fixed"  href="occupationverification/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>?????????????????? ????????????????????????????????? </a>
      <a class="btn btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> ????????????????????? ???????????????????????? </a>
      <a class="btn btn-fixed" href="{{url('occupationverification/create')}}"><span class="glyphicon glyphicon-print"></span> ???????????? ???????????? ???????????????????????????</a>
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
