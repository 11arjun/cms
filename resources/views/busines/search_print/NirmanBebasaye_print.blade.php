<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
@foreach($data as $data)
<div id="page{{$data->id}}"> 
<div class="btn-grp hide-button" id="hide-btn-grp">

<a class="btn btn-success"  href="NirmanBebasaye/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
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

   	  <header>
                  <div class="col-md-12" style="margin-top: 40px;">
                     <div class="col-md-3">
                        <p><img src="{{ asset('images/logo.png') }}"> </p>
                     </div>
                     <div class="col-md-9">
                     </div>
                     <div class="col-md-12 title_header">
                        <p align="center"> <h1 class="name_header">  {{$local_state[0]->local_state_name}} </h1>
                        {{Helpers::convertNos(auth()->user()->isAdmin)}} नं. वडा कार्यालय <p></p>
        </h2><h3 align="center" class="sm-head">, {{$district[0]->district_name}}</h3>
        <h3 align="center" class="sm-head">{{$provience[0]->province_name}}, नेपाल</h3></p>
                     </div>
                  </div>
               </header>
  <div class="row top-part">
                <div class="col-md-6">
                 <p align="left"><b>इजाजत पत्र नं. :{{$data->ejajat_patra_no}}</b><br>

                  <b>आ.ब. :{{$data->fiscal_year}}</b>


                </p>
              </div>
              <div class="col-md-6">
                 <div class="img-box"><p>निवेदकको दुवै कान देखिने पासपोर्ट साइजको फोटो</p></div>
              </div>

            </div>

          <div class="row content-para">
            <p> स्थानीय सरकार सञ्चालन एेन २०७४ को दफा (११)  को उप दफा (२)  को देहाय छ (१०)  बमोजिम प्रचलित कानुनको परिधिभित्र रही निर्माण व्यवसाय सञ्चालन गर्न {{$data->location}} स्थित कार्यालय भएको प्रो. श्री {{$data->company_name}} फर्म वा कम्पनीलाई"घ" वर्गको इजाजतपत्र प्रदान गरिएको छ |





            </p>







          <div class="row content-para">
            <div class="col-md-8">
            </div>

           <div class="col-md-4">

            <p><b>इजाजतपत्र दिनेको :  </b></p>

            <div id="other_organization_resiter">

              <p align="left">दस्तखत :</p>
              <p align="left">नाम:{{$data->ejajat_dineko_name}} </p>
              <p align="left">पद:{{$data->post}} </p>

              <p align="left">मिति :{{$data->issued_date}}</p>
            </div>


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
      <!-- <a class="btn btn-success btn-fixed"  href="NirmanBebasaye/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
      <a class="btn btn-success btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a> -->
      <a class="btn btn-success btn-fixed" href="{{url('NirmanBebasaye/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
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
