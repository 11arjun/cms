<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
@foreach($data as $data)
      <div id="page{{$data->id}}">
      <div class="btn-grp hide-button" id="hide-btn-grp">

      <a class="btn btn-success"  href="birthdateverification/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
      <a class="btn btn-success" id="print_certificate{{$data->id}}" onClick="printCertificate({{$data->id}})"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a>
      <a class="btn btn-success print_certificate" id="singlePrint" style="display: none;"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a>
</div>
<script type="text/javascript">
        document.getElementById("singlePrint").addEventListener("click", printSinglePage);
        function printSinglePage() {

          document.getElementById('hide-btn-grp').style.display = "none";
          window.print();
        }

      </script>
      <page size="A4" class="short" >
      <div class="x_panel">
        <div class="x_content">
          <header>
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
              </header>
              <div class="row top-part">
                  <div class="col-md-12">
                     <h4 align="center">Birth Date Verification</h4>
                  </div>
               </div>

            <div class="row title-left">
              <div class="col-md-6">
                <p align="left"><b>Ref No : {{$data->ref_no}}</b></p>
              </div>
              <div class="col-md-6">
                <p align="right">Date:  <b>{{$data->issued_date}}</b> </p>
              </div>
            </div>


            <div class="col-md-12">
              <p align="center" class="font-size-24">
                <h3 align="center"><b><u> Subject:Birth Date Verification </u></b></h3>
              </p>
              <p align="center" class="font-size-24">
                <h4 align="center"><b><u>To Whom It May Concern</u></b></h4>
              </p>
            </div>




         <div class="col-md-12">
              <p align="left">This is to certify that <b>{{$data->applicant_title}} {{$data->applicant_name}}</b> <b>
				{{$data->applicant_relation}}</b> of Mr <b>{{$data->father_name}}</b> and Mrs <b>{{$data->mother_name}}</b> permanent resident of Municipality, Ward No. {{auth()->user()->isAdmin}} Illam Nepal was born in <b>{{$data->born_local_state}}</b>Municipility,Ward No.<b>{{$data->born_ward_no}}</b>,<b>{{$data->born_district}}</b>District,Nepal. According to <b>{{$data->applicant_title_options}}</b> Citizenship Certificate issued by District Administration Office,<b>{{$data->citizen_issued_district}}</b>, Nepal <b>{{$data->applicant_title_options}}</b>date of birth is <b>{{$data->date_bs}}</b> B.S.(<b>{{$data->date_ad}}</b>A.D.).
</p>





           </div>



              </div>

             <div class="col-md-12">

        <p class="btm-last">  Ward President </p>
      </div>













<!--         <div class="col-md-12">
          <hr/>

          <center><input  type="submit" class="btn btn-success" name="save_birth_date_verification_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
        </div> -->
      </div>
    </page>
  </div>
<div class="col-md-12">
   <center>
    <div class="hide-button">
      <a class="btn btn-success btn-fixed" href="{{url('home')}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
      <!-- <a class="btn btn-success btn-fixed"  href="birthdateverification/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
      <a class="btn btn-success btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a> -->
      <a class="btn btn-success btn-fixed" href="{{url('birthdateverification/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
    </div>
   </center>
</div>
<!-- jQuery -->
<!-- jQuery 3 -->
@endforeach
<script src="{{ asset('admin/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('js/printPreview.js') }}"></script>
<script type="text/javascript">
function printCertificate(id){
    //alert(id);
    $("#print_certificate"+id).printPreview({
                obj2print:'#page'+id,
                width:'810',
                 style:'<style>.print_certificate{display : inline-block !important;}</style>',

            });
  }
</script>
