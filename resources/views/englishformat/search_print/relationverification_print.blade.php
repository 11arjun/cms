
<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
@foreach($data as $data)
    <div id="page{{$data->id}}">
    <div class="btn-grp hide-button" id="hide-btn-grp">

    <a class="btn btn-success"  href="relationverification/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
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
          <header>
          <div class="col-md-12" style="margin-top: 40px;">
            <div class="col-md-2">
              <p><img src="{{asset('images/logo.png') }}"> </p>
            </div>
            <div class="col-md-8">
              <p align="center" class="font-size-24"><b>
                  {{$local_state[0]->local_state_name_english}} </b></p>
                 <p align="center" class="font-size-24"> Ward No.<b>{{(auth()->user()->isAdmin)}}</b></p>
                <p align="center"><b>Province No.{{(auth()->user()->provience_id)}}, Nepal</b></p>


            </div>
            <div class="col-md-2">
            </div>
          </div>
        </header>
              <div class="row top-part">
                  <div class="col-md-12">
                     <h4 align="center">Relation Verification</h4>
                  </div>
              </div>
              <div class="row title-left">
                <div class="col-md-6">
                  <p align="left"><b>Ref No : {{$data->ref_no}}</b></p>
                </div>
                <div class="col-md-6">
                  <p align="right"><b>Date : {{$data->issued_date}}</b> </p>
                </div>
              </div>


              <div class="col-md-12">
                <p align="center" class="font-size-24">
                  <h3 align="center"><b><u> Subject:Relationship Verification </u></b></h3>
                </p>
                <p align="center" class="font-size-24">
                  <h4 align="center"><b><u>To Whom It May Concern</u></b></h4>
                </p>
              </div>




          <div class="col-md-12">
                <p align="left">This is to certify that <b>
            {{$data->applicant_title}} {{$data->applicant_name}}</b>

                permanent resident of Ward No. {{auth()->user()->isAdmin}} {{$district[0]->district_name_english}} District Nepal, (Previously designated as<b>{{$data->previous_vdc_name}}</b>  V.D.C., Ward No.<b>{{$data->previous_ward_no}}</b>,<b> {{$data->previous_district}}</b> District, Nepal) has following relations to the people as mentioned below. </p>
              </div>


              <div class="col-md-12">
                <div class="table-responsive">

                  <table class="table table-bordered" id="relation-verification-table">

                    <thead>
                      <th> S.N. </th>
                      <th> Title </th>
                      <th> Relative's Name </th>
                      <th> Relation with Applicant </th>
                      <th> Photo </th>
                    </thead>
                    <tbody>
                      <?php $count=1; ?>
                      @foreach($detail as $d)
                      <tr>
                        <td>
                        {{ $count }}
                        <?php $count++;?>
                      </td>
                        <td>{{$d->relative_title}}</td>
                        <td>{{$d->relative_name}}</td>
                        <td>{{$d->relation}}</td>
                        <td width="120" height="120">
                          <div style="height: 100%;width: 100;border: 1px solid #000;"></div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>


                </div>


         </div>

       </div>




       <div class="col-md-12">

        <p class="btm-last">  Ward President </p>
      </div>



<!--       <div class="col-md-12">
        <hr/>

        <center><input  type="submit" class="btn btn-success" name="save_relation_verification_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
      </div> -->
    </div>
</page>
</div>
<div class="col-md-12">
   <center>
    <div class="hide-button">
      <a class="btn btn-success btn-fixed" href="{{url('home')}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
      <!-- <a class="btn btn-success btn-fixed"  href="relationverification/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
      <a class="btn btn-success btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a> -->
      <a class="btn btn-success btn-fixed" href="{{url('relationverification/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
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
