<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
<div id="page">
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
                 <p align="left"><b>पत्र संख्या {{$data->patra_sankya}}</b></p>

                <p align="left"><b>चलानी नं. :{{$data->chalani_no}}</b></p>


              </div>
              <div class="col-md-6">
                <p align="right"><b>मिति :{{$data->issued_date}}</b></p>
              </div>
            </div>

          <div class="row">
            <div class="col-md-12">
              <p align="center" class="font-size-24">
                </p><h4 align="center"><b>विषय: सिफारिस गरिएको बारे।</b></h4>

            </div>
          </div>

          <div class="row title-left">
          <div class="col-md-12">
            <p align="left">श्री {{$data->pan_office_name}} ,</p>
            <p align="left">  {{$data->pan_office_address}} ।</p>

          </div>
        </div>




          <div class="row content-para">
            <div class="col-md-12">
              <p align="left">उपरोक्त सम्बन्धमा  <b>{{$data->local_state}}</b> वडा नं.  <b>{{$data->ward}}</b> (साविक

               <!--  -->
                                 {{$data->sabik_address}}
                 <b>{{$data->sabik_type}}

            </b>, वडा नं.{{$data->sabik_ward}})
               मा बस्ने
          <b>{{$data->person_title}}</b>

            {{$data->person_name}} ले मिति {{$data->pan_no_date}} देखि {{$data->pasal_address}} मा {{$data->pasal_name}} नामको व्यवसाय संचालन गर्दै आएको हुँदा निजलाई नियम बमोजिम पान न. उपलब्ध गरी दिनुहुन सिफारिस गरिएको व्यहोरा अनुरोध छ।</p>
              </div>
            </div>
             <h2>बोधार्थ&nbsp;  </h2>
              <table class="table table-bordered" id="sabik_address_table">
                <tbody>


                   <tr>
                    <td>{!!$data->bodartha!!}</td>

                  </tr>
                </tbody>
              </table>

                           <div class="text-right btm-last">
            <p>{{$data->hakim_ko_name}}</p>


             <p> <b> {{$data->officer}}

 </b></p>
            </div>


<!--views for nibedak detail -->
<div class="clearfix"></div>






  </div>
</div>
</page>
</div>
<div class="col-md-12">
   <center>
    <div class="hide-button">
      <a class="btn btn-fixed" href="{{url('home')}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
      <a class="btn btn-fixed"  href="Panno/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
      <a class="btn btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a>
      <a class="btn btn-fixed" href="{{url('Panno/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
    </div>
   </center>
</div>
<!-- jQuery -->
<!-- jQuery 3 -->
<script src="{{ asset('admin/bower_components/jquery/dist/jquery.min.js') }}"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#print_certificate').click(function() {
    $('.hide-button').hide();

    window.print();

    $('.hide-button').show();
    });
  });
</script>
