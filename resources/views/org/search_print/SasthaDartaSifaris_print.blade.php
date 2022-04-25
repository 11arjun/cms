<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
@foreach($data as $data)
   <div id="page{{$data->id}}">
   <div class="btn-grp hide-button" id="hide-btn-grp">

   <a class="btn btn-success"  href="new/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
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
      <page size="A4"  class="short">
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
                        <p align="center"> <h1 class="name_header">  {{$local_state[0]->local_state_name}} </h1>
                        {{Helpers::convertNos(auth()->user()->isAdmin)}}  नं. वडा कार्यालय <p></p>
        </h2><h3 align="center" class="sm-head">, {{$district[0]->district_name}}</h3>
        <h3 align="center" class="sm-head">{{$provience[0]->province_name}}, नेपाल</h3></p>
                     </div>
                  </div>
               </header>

<div class="row top-part">
  <div class="col-md-6">
    <p align="left"><b>पत्र संख्या :{{$data->patra_sankya}}</b></p>
    <p align="left"><b>चलानी नं. :{{$data->chalani_no}}</b></p>


  </div>
  <div class="col-md-6">
    <p align="right"><b>मिति :{{$data->issued_date}}</b></p>
  </div>
</div>
<div class="row">
  <div class="col-md-12 top">
    <p>श्री {{$data->office_chairman}},</p>
    <p>{{$data->office_name}}।</p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <p align="center" class="font-size-24">
      </p><h4 align="center"><b>विषय: सिफारिस सम्बन्धमा।</b> </h4>
         <p></p>
  </div>
</div>
<div class="row">
  <div class="col-md-12 content-para">

   <p>उपरोक्त विषयमा <b>{{$data->local_state}}</b> वडा नं.  <b>{{$data->ward}}</b> (साविक


    <!--  -->
          {{$data->sabik_address}}

    <b>{{$data->sabik_type}}

</b>, वडा नं. {{$data->sabik_ward}})
    स्थित रहेको {{$data->organization_name}} नामक {{$data->organization_type}} संस्था दर्ता गर्नुपर्ने भएकोले सोको लागि"सिफारिस गरी पाऊँ" भनी यस वडा कार्यालयमा पर्न आएको निवेदन सम्बन्धमा त्यस कार्यालयको नियमानुसार गरी दिनुहुन सिफारिस गरिन्छ।</p>
  </div>
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
      <a class="btn btn-success btn-fixed" href="{{url('home')}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
      <!-- <a class="btn btn-success btn-fixed"  href="new/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
       <a class="btn btn-success btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a> -->
      <a class="btn btn-success btn-fixed" href="{{url('new/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a> 
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
