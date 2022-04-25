<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
@foreach($data as $data)
   <div id="page{{$data->id}}">
   <div class="btn-grp hide-button" id="hide-btn-grp">

   <a class="btn btn-success"  href="nonprofit/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
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
                        {{Helpers::convertNos(auth()->user()->isAdmin)}}  नं. वडा कार्यालय <p></p>
        </h2><h3 align="center" class="sm-head">, {{$district[0]->district_name}}</h3>
        <h3 align="center" class="sm-head">{{$provience[0]->province_name}}, नेपाल</h3></p>
                     </div>
                  </div>
               </header>
   <div class="row top-part">
              <div class="col-md-6">
                <p align="left"> <b> पत्र संख्या :{{$data->patra_sankhya}}</b></p>

              <p align="left"><b>चलानी नं. :{{$data->chalani_no}}</b></p>


            </div>
            <div class="col-md-6">
              <p align="right"><b>मिति :{{$data->issued_date}}</b></p>
            </div>
          </div>
          <div class="row">
          <div class="col-md-12">
            <p align="center" class="font-size-24">
              </p><h4 align="center"><b>विषय: गैर नाफामूलक संस्था दर्ता प्रमाण पत्र।</b></h4>

            <p></p>
          </div>
        </div>






          <div class="row">
            <div class="col-md-6">
             <p align="left">दर्ता नं. :{{$data->registration_no}}</p>

             <p align="left">दर्ता मिति :{{$data->registration_date}}</p>
           </div>
           <div class="col-md-6">
            <div class="img-box"><p>संस्थाको छाप वा फोटो </p></div>
           </div>
         </div>

         <div class="margin-top"></div>


         <div class="row">
          <div class="col-md-6 letter-margin">
            <p align="left"><span class="no"> १) </span>संस्थाको नाम :{{$data->organization_name}} </p>
            <p align="left">ठेगाना :{{$data->organization_address}} </p>


            <p align="left">विषयगत  क्षेत्र  :{{$data->subjective_area}} </p>
            <p align="left">संस्थाको कारोवार शुरु भएको मिति:{{$data->transaction_start_date}} </p>
            <p align="left">ई-मेल :<span class="eng">{{$data->organization_email}}</span> </p>
            <p align="left">सम्पर्क फोन नं. :{{$data->organization_contact}} </p>







            <p align="left"><span class="no"> २)</span>सञ्चालक/अध्यक्ष/मुख्य व्यक्तिको नाम, थर :{{$data->chairman_name}} </p>
            <p align="left">ठेगाना :{{$data->chairman_address}} </p>
            <p align="left">ई-मेल :<span class="eng">{{$data->chairman_email}} </span></p>
            <p align="left">सम्पर्क फोन नं. :{{$data->chairman_contact_no}} </p>






          </div>
          <div class="col-md-6">

          </div>
        </div>
                  <div class="text-right btm-last">
            <p>{{$data->hakim_ko_name}}</p>


             <p>  {{$data->officer}}

 </p>
            </div>


      </div>




            </div>

    </page>
    </div>

 <div class="col-md-12">
   <center>
      <div class="hide-button">
      <a class="btn btn-success btn-fixed" href="{{url('home')}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
      <!-- <a class="btn btn-success btn-fixed"  href="nonprofit/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
          <a class="btn btn-success btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a> -->
      <a class="btn btn-success btn-fixed" href="{{url('nonprofit/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
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
