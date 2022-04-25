<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
@foreach($data as $data)
<div id="page{{$data->id}}">
<div class="btn-grp hide-button" id="hide-btn-grp">

<a class="btn btn-success"  href="GeneralSifarisEnglish/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
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
<page size="A4"  class="short eng">
   <div class="x_panel">
   <div class="x_content">

     {{-- <header>
     <div class="col-md-12" style="margin-top: 40px;">
       <div class="col-md-2">
         <p><img src="{{asset('images/logo.png') }}"> </p>
       </div>
       <div class="col-md-8">
         <p align="center" class="font-size-24"><b>
             {{$local_state[0]->local_state_name_english}} </b></p>
            <p align="center" class="font-size-24"> Ward No.<b>{{(auth()->user()->isAdmin)}}</b></p>
           <p align="center"><b>Province No.{{(auth()->user()->provience_id)}}, Nepal</b></p>


       </div>
       <div class="col-md-2">
       </div>
     </div>
   </header> --}}

@include('master.master_header_print_en')


   <div class="row top-part">
              <div class="col-md-6">
                {{-- <p align="left"><b>Ref No. :{{$data->ref_no}}</b></p> --}}
              </div>
              <div class="col-md-6">
                <p align="right"><b>Date :{{$data->issued_date}}</b> </p>
              </div>
            </div>
            <div class="row title-left">
           <div class="col-md-12">

            <p align="left"> {{$data->office_name}}, </p>
                <p align="left">{{$data->office_address}}</p>
                <p align="left">{{$data->office_add}} |</p>

           </div>
         </div>

            <div class="row top-part">
            <div class="col-md-12">
               <h3 align="center"><b>Subject: {{$data->subject}}</b></h3>


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

                <div class="text-right btm-last">
            <p>{{$data->hakim_ko_name}}</p>

             <p>  {{$data->officer}}

 </p>
            </div>

      </div>



</div>
</div>
</page>
</div>

<div class="col-md-12">
   <center>
    <div class="hide-button">
      <a class="btn btn-success btn-fixed" href="{{url('home')}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
      <!-- <a class="btn btn-success btn-fixed"  href="GeneralSifarisEnglish/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
      <a class="btn btn-success btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a> -->
      <a class="btn btn-success btn-fixed" href="{{url('GeneralSifarisEnglish/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
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
