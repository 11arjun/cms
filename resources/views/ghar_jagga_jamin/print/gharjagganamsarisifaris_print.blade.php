<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">


<div id="page" class="long">
<page size="A4" >
 <div class="x_content">
  @include('master.master_header_print_ne',['chalaniNo'=>$data->chalani_no,'patraSankhya'=>$data->patra_sankhya])
<div class="top-part">
    <div class="col-md-12">
      <div class="col-md-6">
       
      </div>
      <div class="col-md-6">
      </div>
    </div>


    <div class="col-md-12 title-left">
      <div class="col-md-6">
        


      </div>
      <div class="col-md-6">
        <p align="right"><b><span <?php echo empty($print_mode)?"":$print_mode;?>>मिति:</span>&nbsp;{{$data->issued_date}}</b></p>
      </div>
    </div>
  </div>
    <div class="col-md-12">
      <p align="center" class="font-size-24">
        <h4 align="center"><b><u>विषय&nbsp;:&nbsp;घर जग्गा नामसारी सिफारिस। </u></b> </h4>
      </p>
    </div>

    <div class="col-md-12">

      <p align="left">श्री<b>{{$data->office_chairman}}</b>,</p>
      <p align="left"><b>{{$data->office_name}}</b>|</p>

    </div>
    <div class="col-md-12 content-para">

      <p align="justify"> निवेदक  <b> {{$data->person_title}} </b>

       <b>{{$data->person_name}}</b>को <b>{{$data->relation}}</b>नाता पर्ने श्री <b>{{$data->death_person_name}}</b>को मिति <b>{{$data->death_date}}</b> मा मृत्यु भएको हुनाले निज मृतकका नाममा दर्ता कायम रहेको तल उल्लेखित विवरणको घरजग्गा नामसारीको लागि <b> {{$data->applicant_person_title}} {{$data->applicant_person_name}}</b>ले निवेदन दिनु भएकोमा मृतकका हकदारहरु नाता प्रमाणित प्रमाण पत्रमा उल्लेखित भए अनुसार रहेकोले निज मृतकका नाममा रहेको सो <b>{{$data->property_type}} </b>  त्याँहाको नियममानुसार हकदारहरुको नाममा नामसारीको लागि सिफारिससाथ अनुरोध गरिन्छ |  </p>
     </div>
     <div class="col-md-12">
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
     <h4 align="center"><b>अन्य हकदारको विवरण </b></h4>
     <div class="col-md-12">
      <div class="table-responsive">
        <table class="table table-bordered" id="mritak_hakdar_bibaran_table">
          <thead>

            <th>क्र.स.</th>
            <th>हकदारहरुको नाम </th>
            <th>नाता</th>
            <th>बाबु पतिको नाम</th>
            <th>नागरिकता नं </th>
            <th>कैफियत</th>

          </thead>
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
         <h4 align="center" ><b>नामसारी गर्ने घर/जग्गाको विवरण</b>  </h4>
        <div class="table-responsive">
          <table class="table table-bordered" id="namsari_jagga_bibaran_table">
            <thead>

              <th>क्र.स.</th>
              <th>वडा</th>


              <th>क्षेत्रफ़ल</th>

              <th>कित्ता नं. </th>

              <th>कैफियत</th>
            </thead>
            <tbody>
            <?php

                      $ward_no=explode(',',$data->ward_no);
                      $area=explode(',',$data->area);
                      $jagga_bibaran_kitta_no=explode(',',$data->jagga_bibaran_kitta_no);
                      $remakrs=explode(',',$data->remakrs);
                      $count_3=1;
                      $len2=sizeof($jagga_bibaran_kitta_no);
                      for($i=0;$i<$len2;$i++){
                                 ?>
                      <tr>
                        <td>{{ Helpers::convertNos($count_3)}}
                                    <?php $count_3++; ?></td>
                        <td>{{$ward_no[$i]}} </td>
                        <td>{{$area[$i]}} </td>
                        <td>{{$jagga_bibaran_kitta_no[$i]}} </td>
                        <td>{{$remakrs[$i]}} </td>


                       </tr>
            <?php }?>

              </tbody>
            </table>
          </div>
          <div class="text-right btm-last">
    <p>{{$data->hakim_ko_name}}</p>


    <p> <b> {{$data->officer}}

 </b></p>
  </div>
  </div>
    </page>
    </div>



    <div class="col-md-12">
      <center>
         <div class="hide-button">
         <a class="btn btn-fixed" href="{{url('home')}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
        <a class="btn btn-fixed" href="GharJaggaNamsariSifaris/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
        <a class="btn btn-fixed" id="ghar_jagga_namsari_print"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a>


    <a class="btn btn-fixed" href="{{url('GharJaggaNamsariSifaris/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a> </div> </center>
      </div>

       <!-- jQuery -->
<script src="{{ asset('admin/bower_components/jquery/dist/jquery.min.js') }}"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#ghar_jagga_namsari_print').click(function() {
    $('.hide-button').hide();

    window.print();

    $('.hide-button').show();
    });
  });
</script>
