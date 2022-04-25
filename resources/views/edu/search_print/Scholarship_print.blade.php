<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
@foreach($data as $data)
<div id="page{{$data->id}}">
<div class="btn-grp hide-button" id="hide-btn-grp">

<a class="btn btn-success"  href="scholarship/{$data->id}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
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

   		 {{--  <header>
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
               </header> --}}
               @include('master.master_header_print_ne',['chalaniNo'=>$data->chalani_no,'patraSankhya'=>$data->patra_sankhya])

               <div class="row top-part">
                  <div class="col-md-6">
                   {{-- <p align="left"> <b> पत्र संख्या :{{$data->patra_sankhya}}</b></p> --}}

                  {{--  <p align="left" class="star"><b>चलानी नं. :{{$data->chalani_no}}</b>
                   </p> --}}


                 </div>
                 <div class="col-md-6">
                  <p align="right" class="star"><b>मिति :{{$data->issued_date}}</b></p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <p align="center" class="font-size-24">
                    </p><h4 align="center"><b>विषय: छात्रवृत्ति सिफारिस।</b></h4>

                </div>
              </div>

              <div class="row title-left">
                <div class="col-md-12">
                  <p align="left"><b>जो सँग सम्बन्धित छ।</b></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 content-para">

                  <p>उपरोक्त विषयमा  <b> {{$data->local_state}} </b> (साविक



                     <!--  -->
                                             {{$data->sabik_address}}
                   <b> {{$data->sabik_type}}

</b>, वडा नं. {{$data->sabik_ward}})
                    अन्तर्गत

                    <b>{{$data->address_type}}

</b>
                    बसोबास गर्ने श्री {{$data->father_name}}<span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><span class="star"></span> तथा श्रीमती {{$data->mother_name}}<span class="star"></span> को आर्थिक अवस्था
                    <b>{{$data->economy_type}}

</b>
                    भएको हुँदा निजहरूको
                    <b>{{$data->children_gender}}

</b>
                    <b>{{$data->children_title}}

</b>
                    {{$data->children_name}}
                     लाई नियमानुसार छात्रवृत्तिको लागि सिफारिस गरिन्छ।</p>
                </div>
                                <div class="text-right btm-last">
                  <p>{{$data->hakim_ko_name}}</p>


                  <p><b>  {{$data->officer}}

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
      <a class="btn btn-success btn-fixed" href="{!!url('home')!!}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
      <!-- <a class="btn btn-success btn-fixed"  href="scholarship/{!!$data->id!!}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
          <a class="btn btn-success btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a> -->
      <a class="btn btn-success btn-fixed" href="{!!url('scholarship/create')!!}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
    </div>
   </center>
</div>
<!-- jQuery -->
<!-- jQuery 3 -->
@endforeach
<script src="{!! asset('admin/bower_components/jquery/dist/jquery.min.js') !!}"></script>
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
