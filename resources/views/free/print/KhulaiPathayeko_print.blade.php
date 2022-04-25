<link rel="stylesheet" type="text/css" href="{{ asset('css/custom_print.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

 <div id='page' class="short">
<page size="A4" >
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
<div class="top-part">
            <div class="row title-left">
              <div class="col-md-6">
               <p align="left"><b><span style="margin-left: 11px;">पत्र संख्या:</span>&nbsp; {{$data->patra_shankhya}}</b></p>
                <p align="left"><b><span style="margin-left: 11px;">चलानी नं.:</span>&nbsp; {{$data->chalani_no}}</b></p>
             </div>
             <div class="col-md-6">
              <p align="right"><b><span >मिति:</span>&nbsp; {{$data->issued_date}}</b></p>
             </div>
           </div>
</div>
           <div class="col-md-12 title-left">

            <p align="left">&nbsp;श्री <b>{{$data->officer_name}} कार्यालय,</b></p>


           </div>




          <div class="col-md-12">
            <p align="center" class="font-size-24">
              <h4 align="center"><b><u>विषय: खुलाई पठाएको|</u></b> </h4>
            </p>
          </div>
          <div class="col-md-12 content-para">

            <p align="left"> त्यहाँ सम्मानित अदालतको मिति च.नं को पत्रानुसार यस वडा
              कार्यालयबाट प्राविधिक मुल्यांकन गरी यसै पत्र साथ कार्यरत प्राविधिकको सक्कल प्रतिबेदन संलग्न राखी
              पठाइएको व्यहोरा अनुरोध छ |</p>
          </div>
            <p class="btm-last">  वडा अध्यक्ष </p>
          <div class="col-md-12">


            <!-- <center><input  type="submit" class="btn btn-success" name="save_nepal_sarkar_bato_kayem_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center> -->
          </div>
        </div>

    <footer>
      <!-- <p><b> <?php echo empty($local_state_name)?"":$local_state_name; ?></b>नेपाल , फोन नं.:<b> <?php echo empty($telephone_no)?"":$telephone_no; ?></b>फ्याक्स<b><?php echo empty($fax_no)?"":$fax_no; ?></b></p>
      <p>ईमेल:<b> <?php echo empty($email)?"":$email; ?></b>,वेभसाइट :<b> <?php echo empty($web_site)?"":$web_site;?></b></p> -->
    </footer>
</page>

</div>


    <div class="col-md-12">
 <center>
  <div class="hide-button" style="display: block;">
    <a class="btn btn-fixed" href="{{url('home')}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
       <a class="btn btn-fixed"  href="khulaipathayeko/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
    <a class="btn btn-fixed" id="print_khulai_pathayeko"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a>


    <a class="btn btn-fixed" href="{{url('khulaipathayeko/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
  </div></center>

  </center>
  </div>


  <!-- jQuery -->
<script src="{{ asset('admin/bower_components/jquery/dist/jquery.min.js') }}"></script>


<script type="text/javascript">
  $(document).ready(function(){
     $('.hide-button').show();
  });
  $('#print_khulai_pathayeko').click(function() {
    $('.hide-button').hide();

    window.print();

});
</script>
