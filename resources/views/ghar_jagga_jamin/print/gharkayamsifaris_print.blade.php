<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

 <div id="page">
      <page size="A4"  class="short">
         <div class="x_panel">
            <div class="x_content">
     @include('master.master_header_print_ne',['chalaniNo'=>$data->chalani_no,'patraSankhya'=>$data->patra_sankhya])
  <div class="row top-part">
    <div class="col-md-6">
     {{-- <p align="left"><b> पत्र संख्या: {{$data->patra_sankhya}} </b></p> --}}

     {{-- <p align="left"><b> चलानी नं.: {{$data->chalani_no}}</b></p> --}}


   </div>
   <div class="col-md-6">
    <p align="right"><b>मिति :{{$data->issued_date}}</b></p>
  </div>
</div>


<div class="row">
  <div class="col-md-12">
    <p align="center" class="font-size-24">
      </p><h4 align="center"><b>विषय: घर कायम सिफारिस।</b></h4>

  </div>
</div>

<div class="row title-left">
  <div class="col-md-12">
    <p align="left">श्री {{$data->office_chairman}},</p>
    <p align="left">  {{$data->office_name}} |</p>

  </div>
</div>




<div class="row">
  <div class="col-md-12 content-para">

    <p>उपरोक्त विषयमा {{$data->local_state}} वडा नं. {{$data->ward}} (साविक



      <!--  -->

            {{$data->sabik_address}}
     {{$data->sabik_type}}

, वडा नं. {{$data->sabik_ward}}) अन्तर्गत

    {{$data->person_title}}




    {{$data->person_name}} को नाममा त्यस कार्यालयमा श्रेस्ता  दर्ता कायम रहेको निम्न उल्लेखित जग्गामा

    {{$data->ghar_nirman_option}}




  घर निर्माण गरी यस वडा कार्यालयमा निजले चालु आर्थिक वर्षसम्मको घरजग्गा कर/ एकीकृत सम्पत्ति कर चुक्ता गरीसकेको हुनाले निजको जग्गा धनी प्रमाण पुर्जामा घर कायम गरी दिनुहुन सिफारिस साथ अनुरोध गरिन्छ। </p>
</div>

<h4 align="center"><b>घर कायम गर्नु पर्ने जग्गाको विवरण</b> </h4>
<div class="col-md-12">
  <div class="table-responsive">
    <table class="table table-bordered" id="house_kayem_table">
      <thead>
        <tr>

          <th width="2%" rowspan="2">क्र.स.</th>

          <th colspan="2" style="text-align:center">साविक </th>
          <th colspan="2" style="text-align:center">हाल </th>


          <th rowspan="2">सिट नं/कि.नं.</th>
          <th rowspan="2">क्षेत्रफ़ल </th>
          <th rowspan="2" width="15%">घर निर्माण भएको साल /अनुमति लिएको</th>


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

          $sabik_vdc=explode(',',$data->sabik_vdc);
             $len=sizeof($sabik_vdc);
            $sabik_ward_no=explode(',',$data->sabik_ward_no);
            $nagarpalika_name=explode(',',$data->nagarpalika_name);
            $ward_no=explode(',',$data->ward_no);

            $kitta_no=explode(',',$data->kitta_no);
            $area=explode(',',$data->area);
            $ghar_nirman_year=explode(',',$data->ghar_nirman_year);

            $count=1;

          ?>
           <?php for($i=0;$i<$len;$i++){?>
        <tr>
        <td>{{ Helpers::convertNos($count)}}
                        <?php $count++; ?></td>

          <td>
                         {{$sabik_vdc[$i]}}
          </td>

          <td>{{$sabik_ward_no[$i]}} </td>

          <td>{{$nagarpalika_name[$i]}} </td>

          <td>{{$ward_no[$i]}} </td>

          <td>{{$kitta_no[$i]}} </td>
          <td>{{$area[$i]}} </td>

          <td>{{$ghar_nirman_year[$i]}} </td>



        </tr>
    <?php }?>
      </tbody>
    </table>

  </div>
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
      <a class="btn btn-fixed" href="{{url('home')}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
      <a class="btn btn-fixed"  href="GharKaymSifaris/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
      <a class="btn btn-fixed" id="print_gharkayem_sifaris"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a>
      <a class="btn btn-fixed" href="{{url('GharKaymSifaris/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
    </div>
   </center>
</div>
<!-- jQuery -->
<!-- jQuery 3 -->
<script src="{{ asset('admin/bower_components/jquery/dist/jquery.min.js') }}"></script>


<script type="text/javascript">
  $(document).ready(function(){
    $('#print_gharkayem_sifaris').click(function() {
    $('.hide-button').hide();

    window.print();

    $('.hide-button').show();
    });
  });
</script>
