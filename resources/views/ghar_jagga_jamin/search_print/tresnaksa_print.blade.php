<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
@foreach($data as $data)
   <div id="page{{$data->id}}">
   <div class="btn-grp hide-button" id="hide-btn-grp">

   <a class="btn btn-success"  href="tresnaksa/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
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
             <div class="row top-part">
 <div class="col-md-6">
  <p align="left"><b> पत्र संख्या :{{$data->patra_sankhya}} </b></p>

  <p align="left"><b> चलानी नं. {{$data->chalani_no}}</b></p>


</div>
<div class="col-md-6">
 <p align="right"><b>मिति :{{$data->issued_date}}</b></p>
</div>
</div>


<div class="row">
<div class="col-md-12">
 <p align="center" class="font-size-24">
   </p><h4 align="center"><b>विषय: ट्रेस नक्सा उपलब्ध गराई दिने सम्बन्धमा।</b>

     <!-- Data for nibedak details -->
     <input type="hidden" name="letter_subject" value="ट्रेस नक्सा उपलब्ध गराई दिने सम्बन्धमा">
     <!--END -->

   </h4>
 <p></p>
</div>
</div>

<div class="row title-left">
<div class="col-md-12">
 <p align="left"><b>श्री {{$data->karyalaya_name}}</b>,</p>
 <p align="left"><b> {{$data->karyalaya_district}}</b>।</p>

</div>
</div>





<div class="row">
<div class="col-md-12 content-para">

 <p> प्रस्तुत विषयमा  <b> {{$data->local_state}}</b> वडा नं.  <b> {{$data->ward}}</b> (साविक



   <!--SABIK ADDRESS START -->

           {{$data->sabik_address}}

   <!-- SABIK ADDRESS END -->



   <b>{{$data->sabik_type}}

</b>




   वडा नं. {{$data->sabik_ward}}) बस्ने
   {{$data->nibedak}} को नाममा दर्ता भएको <b> {{$data->plot_local_state_name}}</b> वडा नं.  <b> {{$data->plot_ward_no}}</b>
   (साविक<!--SABIK ADDRESS START -->

               {{$data->plot_sabik_address}}

     <b>{{$data->plot_sabik_type}}

</b>


     <!-- SABIK ADDRESS END -->
     वडा नं. {{$data->plot_sabik_ward}})


     कि. नं. {{$data->kitta_no}} क्षे. फ.{{$data->area_no}}
     को  ट्रेस नक्सा
     <b> {{$data->request_for}}</b>
   कार्यको लागि आवश्यक परेको हुँदा उल्लेखित नक्सा उपलब्ध गराइदिनुहुन सिफारिस साथ  अनुरोध गरिन्छ।</p>
 </div>
</div>


  <div class="text-right btm-last">
 <p>{{$data->hakim_ko_name}}</p>


 <p>  <b>{{$data->officer}}

</b> </p>
</div>

         </div>
     </div>
 </page>
</div>
<div class="col-md-12">
   <center>
     <div class="hide-button">
      <a class="btn btn-success btn-fixed" href="{{url('home')}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
      <!-- <a class="btn btn-success btn-fixed"  href="tresnaksa/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
      <a class="btn btn-success btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a> -->
      <a class="btn btn-success btn-fixed" href="{{url('tresnaksa/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
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
