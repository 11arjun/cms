<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
@foreach($data as $data)
 <div id="page{{$data->id}}">
 <div class="btn-grp hide-button" id="hide-btn-grp">

 <a class="btn btn-success"  href="ShrestaController/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
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
    <p align="left"><b>पत्र संख्या :{{$data->patra_sankya}}</b></p>
    <p align="left"><b>चलानी नं. :{{$data->chalani_no}}</b></p>
  </div>
  <div class="col-md-6">
   <p align="right"><b>मिति :{{$data->issued_date}}</b></p>
 </div>
</div>

<div class="row">
 <div class="col-md-12">
   <p align="center" class="font-size-24">
     </p><h4 align="center"><b> विषय: श्रेस्ता कार्यान्वयन सिफारिस।</b> </h4>
     <input type="hidden" name="letter_subject" value="श्रेस्ता कार्यान्वयन सिफारिस">
   <p></p>
 </div>
</div>

<div class="row title-left">
<div class="col-md-12">

 <p align="left">श्री {{$data->office_name}} </p>
 <p align="left">{{$data->office_address}} ।</p>

</div>
</div>



<div class="row">
 <div class="col-md-12 content-para">




   <p align="left"> उपरोक्त सम्बन्धमा

     {{$data->jagga_dhani}}

     नाममा दर्ता&nbsp; भएको जग्गाको&nbsp;श्रेस्ता कार्यान्वयनको&nbsp;लागि&nbsp;वडा कार्यालयको सिफारिस&nbsp;आवश्यकता&nbsp;पर्ने भएको हुँदा सिफारिस पाउँ भनि <b>{{$data->local_state}}</b> वडा नं.  <b>{{$data->ward}}</b>(साविक



                {{$data->sabik_address}}


       <b>{{$data->sabik_type}}

</b>, वडा नं. {{$data->sabik_ward}})
       बस्ने  {{$data->grand_father}} को


       {{$data->grand_child}}

      {{$data->father}} को

       {{$data->child}}


       {{$data->child_name}} ले यस कार्यालयमा दिनु भएको&nbsp;निवेदन&nbsp;अनुसार&nbsp;&nbsp;जग्गा स्थलगत सर्जमिन बुझ्दा

       {{$data->prop_type}}

       जोत भोग रहेको हुदा स्रेस्ता कार्यान्बयन गरिदिनुहुन सर्जमिन मुचुल्का समेत राखि सिफारीस गरीएको ब्यहोरा अनुरोध छ।

     </p>
   </div>
 </div>
 <!--  -->
 <h4 align="center"><b>जग्गाको विवरण</b> </h4>
 <div class="col-md-12">
   <div class="table-responsive">
     <table class="table table-bordered">
       <thead>
         <tr>

           <th width="2%" rowspan="2">क्र.स.</th>

           <th colspan="2" style="text-align: center;">साविक  </th>
           <th colspan="2" style="text-align: center;">हाल   </th>

           <th rowspan="2">कि.नं.</th>
           <th rowspan="2">क्षेत्रफ़ल </th>


         </tr>
         <tr><th>{{$data->sabik}}
         </th>
         <th>वडा नं</th>
         <th>नगरपालिका</th>
         <th>वडा नं</th>
         </tr><tr>

         </tr>
       </thead>
       <tbody>
<?php

         $sabik_vdc_name=explode(',',$data->sabik_vdc_name);
           $len=sizeof($sabik_vdc_name);
           $sabik_ward_no=explode(',',$data->sabik_ward_no);
           $nagarpalika_name=explode(',',$data->nagarpalika_name);
           $ward_no=explode(',',$data->ward_no);
           $kitta_no=explode(',',$data->kitta_no);
           $area=explode(',',$data->area);

           $count=1;

         ?>
          <?php for($i=0;$i<$len;$i++){?>
        <tr>
        <td>{{ Helpers::convertNos($count)}}
                       <?php $count++; ?></td>



         <td>
                        {{$sabik_vdc_name[$i]}}

         </td>

         <!--  -->
         <td>{{$sabik_ward_no[$i]}} </td>

         <td>{{$nagarpalika_name[$i]}} </td>


         <td>{{$ward_no[$i]}} </td>

         <td>{{$kitta_no[$i]}} </td>
         <td>{{$area[$i]}} </td>


       </tr>

<?php  }?>


     </tbody>
   </table>

   <!--  -->

        <div class="text-right btm-last">
     <p>{{$data->hakim_ko_name}}</p>


     <p><b>  {{$data->officer}}

</b> </p>
   </div>

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
      <!-- <a class="btn btn-success btn-fixed"  href="ShrestaController/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
      <a class="btn btn-success btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a> -->
      <a class="btn btn-success btn-fixed" href="{{url('ShrestaController/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
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
