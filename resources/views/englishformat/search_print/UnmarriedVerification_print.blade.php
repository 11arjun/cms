
<link rel="stylesheet" type="text/css" href="{{ asset('css/custom_print.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
@foreach($data as $data)

<div id="page{{$data->id}}">
<div class="btn-grp hide-button" id="hide-btn-grp">

<a class="btn btn-success"  href="unmarriedverification/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
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
    <page size="A4">
  <div class="x_content">
    <header>
    <div class="col-md-12" style="margin-top: 40px;">
      <div class="col-md-2">
        <p><img src="{{asset('images/logo.png') }}"> </p>
      </div>
      <div class="col-md-8">
        <p align="center" class="font-size-24"><b>
            {{$local_state[0]->local_state_name_english}} </b></p>
           <p align="center" class="font-size-24"> Ward No.
            <b> {{(auth()->user()->isAdmin)}}</b></p>
            <p align="center"><b>Province No.{{(auth()->user()->provience_id)}}, Nepal</b></p>

      </div>
      <div class="col-md-2">
      </div>
    </div>
  </header>


    <div class="col-md-12 top-part">
      <div class="col-md-6">
        <p align="left">Ref No.&nbsp; <b>{{$data->ref_no}}</b></p>
      </div>
      <div class="col-md-6">
        <p align="right">Date:&nbsp; <b> {{$data->issued_date}} </b></p>
      </div>
    </div>



     <div class="col-md-12">
              <p align="center" class="font-size-24">
                <h3 align="center"><u> <b>Subject:UnMarried Verification </b></u> </h3>
              </p>
              <p align="center" class="font-size-24">
                <h4 align="center" class="space"><u>To Whom It May Concern</u> </h4>
              </p>
            </div>





         <div class="col-md-12 content-para">
              <p align="left"> This is to certify that, <b>{{$data->applicant_title}}.</b><b>{{$data->applicant_name}}</b>
               {{$data->applicant_gender}}
               of <b>Mr.</b><b>{{$data->applicant_father_name}}</b>
               and <b>Mrs.</b><b>{{$data->applicant_mother_name}}</b>
                having citizenship no. <b>{{$data->applicant_citizenship_no}}</b>,

              permanent resident of <b> {{$local_state[0]->local_state_name_english}}</b> Ward No.<b>{{(auth()->user()->isAdmin)}}</b> <b> {{$district[0]->district_name_english}}</</b> District  Nepal, (Previously designated as <b>{{$data->previous_vdc}}</b>  V.D.C., Ward No.<b>{{$data->previous_ward_no}}</b>) has submitted an application letter for Marital Status Certificate at this Municipality, and according to witnesses at ward level, he has been found to be single in Marital Status till <b>{{$data->till_date}}</b> A.D.





              </div>

            </div>







</div>

<p class="btm-last">  Ward President </p>

</div>
<!-- <footer>
  <p><b> <?php echo empty($local_state_name)?"":$local_state_name; ?></b>नेपाल , फोन नं.:<b> <?php echo empty($telephone_no)?"":$telephone_no; ?></b>फ्याक्स<b><?php echo empty($fax_no)?"":$fax_no; ?></b></p>
  <p>ईमेल:<b> <?php echo empty($email)?"":$email; ?></b>,वेभसाइट :<b> <?php echo empty($web_site)?"":$web_site;?></b></p>
</footer> -->
</div>
</page>
</div>




<div class="col-md-12">
 <center>
   <div class="hide-button" style="display: block;">
   <a class="btn btn-success btn-fixed" href="{{url('home')}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
   <!-- <a class="btn btn-success btn-fixed"  href="unmarriedverification/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
   <a class="btn btn-success btn-fixed" id="print_unmarried_verification"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a> -->


    <a class="btn btn-success btn-fixed" href="{{url('unmarriedverification/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
  </div>
     </center>
 </div>
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
