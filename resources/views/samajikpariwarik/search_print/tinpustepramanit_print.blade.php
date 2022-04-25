<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
@foreach($data as $data)
    <div id="page{{$data->id}}">
    <div class="btn-grp hide-button" id="hide-btn-grp">

    <a class="btn btn-success"  href="tinpustepramanit/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
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
      <page size="A4" class="short">
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
          <div class="row title-left">
                  <div class="col-md-12">
                     <h4 align="center">तीन पुस्ते प्रमाण पत्र </h4>
                  </div>
              </div>
            <div class="row title-left">
              <div class="col-md-6">
               <p align="left"><b>पत्र संख्या : {{$data->patra_sankya}}</b></p>
             </div>
             <div class="col-md-6">
             </div>
           </div>


           <div class="row title-left">
            <div class="col-md-6">
              <p align="left"><b>चलानी नं. : {{$data->chalani_no}}</b></p>


            </div>
            <div class="col-md-6">
              <p align="right"><b>मिति : {{$data->issued_date}}</b></p>
            </div>
          </div>



          <div class="col-md-12">
            <p align="center" class="font-size-24">
              <h4 align="center"><b><u>विषय: तीन पुस्ते प्रमाणित</u></b> </h4>
            </p>
          </div>





          <div class="col-md-12">
            <p>

            <b> {{$local_state[0]->local_state_name}}</b> वडा नं.  <b>  {{Helpers::convertNos(auth()->user()->isAdmin)}}</b> (साबिकको ठेगाना <b>{{$data->sabik_address}}</b> )निवासी

              <b>{{$data->person_title}} {{$data->person_name}} </b> को तीन पुस्ते तपसिलमा उल्लेख भए अनुसार रहेको व्यहोरा प्रमाणित साथ अनुरोध गरिन्छ | साथै निजको नाममा मालपोत कार्यलयमा दर्ता रहेको जग्गाको विवरण तपसिल बमोजिम रहेको व्यहोरा समेत अनुरोध गरिन्छ |</p>



            </div>
            <div class="col-md-12">

              <h4 align="center"><b>जग्गाको  विवरण</b></h4>
              <div class="col-md-12">
                <div class="table-responsive">
                  <table class="table table-bordered" id="tinpuste_jagga_bibaran_table">
                    <thead>

                      <th>क्र.स.</th>
                      <th>कित्ता नं.</th>
                      <th> सिट नं. </th>
                      <th>क्षेत्रफ़ल</th>
                    </thead>
                    <tbody>
                      <?php $count=1;?>
                      @foreach($detail as $d)
                      <tr>
                        <td>{{Helpers::convertNos($count)}}
                          <?php $count++;?>
                        </td>
                        <td>{{$d->seat_no}}</td>
                        <td>{{$d->kitta_no}}</td>
                        <td>{{$d->area}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="col-md-12">

              <h4 align="center"><b>तीन पुस्ते विवरण</b></h4>
              <div class="col-md-12">
                <div class="table-responsive">
                  <table class="table table-bordered" id="tinpuste_bibaran_table">
                    <thead>

                      <th>क्र.स.</th>
                      <th>नाम </th>
                      <th>नाता</th>
                      <th>नागरिकता नं. </th>
                      <th>जारी मिति </th>
                      <th>जिल्ला </th>
                    </thead>
                    <tbody>
                      @foreach($bibaran as $b)
                      <tr>
                        <td></td>
                        <td>{{$b->name}}</td>
                        <td>{{$b->relation}}</td>
                        <td>{{$b->citizenship_no}}</td>
                        <td>{{$b->citizenship_issued_date}}</td>
                        <td>{{$b->citizenship_issued_district}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                  <p class="btm-last">  वडा अध्यक्ष </p>
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
      <!-- <a class="btn btn-success btn-fixed"  href="tinpustepramanit/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
      <a class="btn btn-success btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a> -->
      <a class="btn btn-success btn-fixed" href="{{url('tinpustepramanit/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
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
