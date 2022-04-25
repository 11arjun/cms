<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
@foreach($data as $data)
 <div id="page{{$data->id}}">
 <div class="btn-grp hide-button" id="hide-btn-grp">

 <a class="btn btn-success"  href="ShrestaUparSifarisController/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
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
     </p><h4 align="center"><b>बिषय :श्रेस्ता उपर सिफारिस ।</b>

       <!-- Data for nibedak details -->
       <input type="hidden" name="letter_subject" value="मानो चामोल सिफारिस">
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
   <p>

  उपरोक्त विषयमा साविक



     <!--SABIK ADDRESS START -->

             {{$data->sabik_address}}



     <!-- SABIK ADDRESS END -->



     <b>{{$data->sabik_type}}

</b>




     वडा नं. {{$data->sabik_ward}} हाल {{$data->local_state}} वडा नं.  <b> {{$data->ward}}</b>
     बस्ने
     <b> {{$data->owner_name}}</b> को नाममा {{$data->of_name}} {{$data->of_address}} मा दर्ता कायम रहेको तपशिलमा उल्लेखित कित्ता जग्गाहरुको श्रेष्ता कार्यालय प्रयोजनको लागि आवश्यक परेको हुदा उक्त कित्ता जग्गाहरुको श्रेष्ता तयार गरी पठाईदिनु हुन सिफारिस साथ अनुरोध गरिन्छ ।


     </p>
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
      <!-- <a class="btn btn-success btn-fixed"  href="ShrestaUparSifarisController/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
        <a class="btn btn-success btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a> -->
      <a class="btn btn-success btn-fixed" href="{{url('ShrestaUparSifarisController/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
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
