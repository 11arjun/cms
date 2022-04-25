<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
@foreach($data as $data)
 <div id="page{{$data->id}}">
 <div class="btn-grp hide-button" id="hide-btn-grp">

 <a class="btn btn-success"  href="GharKaymSifaris/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
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

     <p align="left"><b> चलानी नं. :{{$data->chalani_no}}</b></p>


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
          <td>{{$count}} </td>

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
    <?php $count++;}?>
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
      <a class="btn btn-success btn-fixed" href="{{url('home')}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
      <!-- <a class="btn btn-success btn-fixed"  href="GharKaymSifaris/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
      <a class="btn btn-success btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a> -->
      <a class="btn btn-success btn-fixed" href="{{url('GharKaymSifaris/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a> 
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
