<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
@foreach($data as $data)
 <div id="page{{$data->id}}">
 <div class="btn-grp hide-button" id="hide-btn-grp">

 <a class="btn btn-success"  href="SarjiminController/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
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
     <p align="left"><b>पत्र संख्या :{{$data->patra_sankhya}} </b></p>
     <p align="left"><b>चलानी नं. :{{$data->chalani_no}}</b></p>


   </div>
   <div class="col-md-6">
     <p align="right"><b>मिति :{{$data->issued_date}}</b></p>
   </div>
 </div>

 <div class="row">

   <div class="col-md-12">
     <p align="center" class="font-size-24">
       </p><h4 align="center"><b>विषय:सूचना टाँस गरी सर्जमिन गरी पठाई दिने।</b></h4>
   </div>
 </div>

 <div class="row">
   <div class="row title-left">
     <div class="col-md-12">
       <p> <b>श्री वडा कार्यालय  </b> </p>

       <p><b> वडा नं. {{$data->oda_ward}} </b><br> <b>{{$local_state[0]->local_state_name}}।</b></p>

     </div>
   </div>


   <div class="col-md-12">

     <p>
       उपरोक्त विषयमा  <b>   {{$data->district}} </b> जिल्ला <b>    {{$data->local_state}} </b> वडा नं. <b>{{$data->ward}} </b>  बस्ने {{$data->person_name}} (साविक


                 {{$data->sabik_address}}
       <b> {{$data->sabik_type}}

</b>, वडा नं. {{$data->sabik_ward}}) हाल <b>{{$local_state[0]->local_state_name}} </b> वडा नं. <b> <?php if(auth()->user()->isAdmin == 1){
   echo "१";
 }else if(auth()->user()->isAdmin == 2){
   echo "२";
 }else if(auth()->user()->isAdmin == 3){
   echo "३";
 }else if(auth()->user()->isAdmin == 4){
   echo "४";
 }else if(auth()->user()->isAdmin == 5){
   echo "५";
 }else if(auth()->user()->isAdmin == 6){
   echo "६";
 }else if(auth()->user()->isAdmin == 7){
   echo "७";
 }else if(auth()->user()->isAdmin == 8){
   echo "८";
 }else if(auth()->user()->isAdmin == 9){
   echo "९";
 }else if(auth()->user()->isAdmin == 10){
   echo "१०";
 }else if(auth()->user()->isAdmin == 11){
   echo "११";
 }else if(auth()->user()->isAdmin == 12){
   echo "१२";
 }else{

 }?> </b> स्थित कि. नं. {{$data->kitta_no}} क्षे. फ.{{$data->area}} जग्गामा निर्माण हुने नयाँ घरको नक्सा पास प्रयोजनको लागि तहाँ कार्यालय बाट सूचना टाँस सहित सर्जमिन मुचुल्का गरी पठाईदिनुहुन अनुरोध छ।
     </p>

   </div>








 </div>
    <div class="text-right btm-last">
   <p>{{$data->hakim_ko_name}}</p>


   <p> <b> {{$data->officer}}

</b></p>
 </div>

</div>

           </div>
             </page>
       </div>

<div class="col-md-12">
   <center>
      <div class="hide-button">
      <a class="btn btn-success btn-fixed" href="{{url('home')}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
      <!-- <a class="btn btn-success btn-fixed"  href="SarjiminController/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
        <a class="btn btn-success btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a> -->
      <a class="btn btn-success btn-fixed" href="{{url('SarjiminController/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
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
