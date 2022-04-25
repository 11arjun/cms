<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

 <div id="page">
      <page size="A4"  class="short">
         <div class="x_panel">
            <div class="x_content">
  @include('master.master_header_print_ne',['chalaniNo'=>$data->chalani_no,'patraSankhya'=>$data->patra_sankhya])
       <div class="row yop-part">
      <div class="col-md-6">
       {{-- <p align="left"><b> पत्र संख्या :{{$data->patra_sankhya}}</b></p> --}}

       {{-- <p align="left"><b>चलानी नं. :{{$data->chalani_no}}</b></p> --}}


     </div>
     <div class="col-md-6">
      <p align="right"><b>मिति :{{$data->issued_date}}</b></p>
    </div>
  </div>


  <div class="row">
    <div class="col-md-12">
      <p align="center" class="font-size-24">
        </p><h4 align="center"><b>विषय: घर जग्गा नामसारी सिफारिस।</b> </h4>
        <p></p>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 title-left">

      <p align="left">श्री {{$data->office_chairman}},</p>
      <p align="left">  {{$data->office_name}} ।</p>

    </div>
  </div>



  <div class="row">
    <div class="col-md-12 content-para">

      <p>उपरोक्त विषयमा  <b> {{$data->local_state}}</b> वडा नं.  <b> {{$data->ward}}</b> (साविक


        <!--  -->
                  {{$data->sabik_address}}





        <b>{{$data->sabik_type}}

</b>, वडा नं. {{$data->sabik_ward}}) बस्ने श्री {{$data->g_name}} को <b>{{$data->g_title}}

</b>
      श्री {{$data->f_name}} तथा श्रीमती {{$data->m_name}} को&nbsp;&nbsp;
      <b>{{$data->c_title}}

</b>

      <b>{{$data->person_title}}

</b>


     {{$data->person_name}} को {{$data->relation}} नाता पर्ने



      <b>{{$data->nata_title}}

</b>

     {{$data->death_person_name}} को मिति {{$data->death_date}}  मा मृत्यु भएको हुनाले निज मृतकका नाममा दर्ता कायम रहेको


      {{$data->land_local_state}} वडा नं.  <b> {{$data->land_ward}}</b> (साविक


      <!--  -->
            {{$data->land_sabik_address}}





      <b>{{$data->land_sabik_type}}

</b>, वडा नं. {{$data->land_sabik_ward}})
      मा पर्ने कि. न . {{$data->land_kitta_no}} को ज.बि&nbsp;{{$data->jagga_area}} &nbsp; भएको&nbsp;मृतक जग्गा धनीको नामको
      {{$data->prop_type}}



      नाता प्रमाणित प्रमाणपत्रमा&nbsp;उल्लेखित भए अनुसार तल&nbsp;उल्लेखित {{$data->hak_type}}

      को नाममा {{$data->darta_type}}&nbsp;
    नामसारीको लागि सिफारिस साथ अनुरोध गरिन्छ।</p>

  </div>


  <h4 align="center"><b>मृत्यु भैसकेका हकदार </b></h4>
  <div class="table-responsive">
    <table class="table table-bordered" id="nibedak_table">

      <thead>

        <tr><th>क्र.स.</th>
        <th>नाम थर </th>
        <th>नाता </th>
        <th>मृत्यु मिति</th>

      </tr></thead>
      <tbody>
        <?php


$app_name=explode(',',$data->app_name);
$app_relation=explode(',',$data->app_relation);
$app_date=explode(',',$data->app_date);
$len=sizeof($app_name);
$count_1=1;
           ?>
           <?php for ($i=0; $i <$len ; $i++) {
            ?>
          <tr>
            <td>{{ Helpers::convertNos($count_1)}}
                        <?php $count_1++; ?></td>
            <td>{{$app_name[$i]}} </td>
            <td>{{$app_relation[$i]}} </td>
           <td>{{$app_date[$i]}}</td>





          </tr>
<?php  # code...
// $count_1++;
           }?>
      </tbody>
    </table>
  </div>
</div>
</div>
</div>
</page>
</div>
 <div id="page" class >
      <page size="A4"  class="short">
         <div class="x_panel">
            <div class="x_content">

  <div class="col-md-12" style="margin-top: 30px;">
    <h4 align="center"><b>जीवित हकदारको विवरण</b></h4>
    <div class="table-responsive">
      <table class="table table-bordered" id="mritak_hakdar_bibaran_table">
        <thead>

          <tr><th>क्र.स.</th>
          <th>हकदारहरूको नाम </th>
          <th>नाता</th>
          <th>बाबु/पतिको नाम</th>
          <th>नागरिकता नं. </th>

          <th>कैफियत</th>


        </tr></thead>
        <tbody>
          <?php


          $hakdarko_name=explode(',',$data->hakdarko_name);
$mritak_relation=explode(',',$data->mritak_relation);
$father_husband_name=explode(',',$data->father_husband_name);
$ciitizenship_no=explode(',',$data->ciitizenship_no);
$kitta_no=explode(',',$data->kitta_no);
$count_2=1;
$len1=sizeof($kitta_no);
for($i=0;$i<$len1;$i++){
           ?>
         <tr>
            <td>{{ Helpers::convertNos($count_2)}}
                        <?php $count_2++; ?></td>
           <td>{{$hakdarko_name[$i]}}</td>
           <td>{{$mritak_relation[$i]}}</td>
           <td>{{$father_husband_name[$i]}}</td>
           <td>{{$ciitizenship_no[$i]}}</td>
           <td>{{$kitta_no[$i]}}</td>


           </tr>
       <?php


        } ?>
        </tbody>
      </table>
    </div>
  </div>



  <div class="col-md-12">
    <h4 align="center"><b>नामसारी गरिने हकदारको विवरण</b></h4>
    <div class="table-responsive">
      <table class="table table-bordered" id="mritak_namsari_hakdar_bibaran_table">
        <thead>

          <tr><th>क्र.स.</th>
          <th>हकदारहरूको नाम </th>
          <th>नाता</th>
          <th>बाबु/पतिको नाम</th>
          <th>नागरिकता नं. </th>

          <th>कैफियत</th>


        </tr></thead>
        <tbody>
          <?php

          $namsarihakdarko_name=explode(',',$data->namsarihakdarko_name);
$namsarimritak_relation=explode(',',$data->namsarimritak_relation);
$namsarifather_husband_name=explode(',',$data->namsarifather_husband_name);
$namsariciitizenship_no=explode(',',$data->namsariciitizenship_no);
$namsarikitta_no=explode(',',$data->namsarikitta_no);
$count_3=1;
$len2=sizeof($namsarikitta_no);
for($i=0;$i<$len2;$i++){
           ?>
          <tr>
            <td>{{ Helpers::convertNos($count_3)}}
                        <?php $count_3++; ?></td>
            <td>{{$namsarihakdarko_name[$i]}} </td>
            <td>{{$namsarimritak_relation[$i]}} </td>
            <td>{{$namsarifather_husband_name[$i]}} </td>
            <td>{{$namsariciitizenship_no[$i]}} </td>

            <td>{{$namsarikitta_no[$i]}} </td>

          </tr>
<?php }?>
        </tbody>
      </table>
    </div>
  </div>

</div>
<p>
  निवेदकको निवेदन अनुसार सर्जमिन बुझ्दा
  {{$data->sarjaminlocal_state}}
  वडा नं. {{$data->sarjaminward}} बस्ने बर्ष
  {{$data->sarjaminbarsa}}
  को {{$data->sarjaminname}} समेत {{$data->sarjaminno}} जना संलग्न भई दिएको मुचुल्का यसै पत्र साथ राखि किटानी सिफारीस गरिएको छ।साथै </p>
   {!!$data->behora!!}
     <div class="text-right btm-last">
    <p>{{$data->hakim_ko_name}}</p>
    <p> <b> {{$data->officer}}

 </b></p>
  </div>
</div>
 </page>
</div>
</div>

            	</div>
            </div>

    </div>
    <div class="col-md-12">
   <center>
     <div class="hide-button">
      <a class="btn btn-fixed" href="{{url('home')}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
      <a class="btn btn-fixed"  href="GharJaggaNamsariKitaniController/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
      <a class="btn btn-fixed" id="print_gharjagga_namsarikitani"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a>
      <a class="btn btn-fixed" href="{{url('GharJaggaNamsariKitaniController/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
    </div>
   </center>
</div>
<!-- jQuery -->
<!-- jQuery 3 -->
<script src="{{ asset('admin/bower_components/jquery/dist/jquery.min.js') }}"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#print_gharjagga_namsarikitani').click(function() {
    $('.hide-button').hide();

    window.print();

    $('.hide-button').show();
    });
  });
</script>
