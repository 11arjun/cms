
<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
@foreach($data as $data)
    <div id="page{{$data->id}}">
    <div class="btn-grp hide-button" id="hide-btn-grp">

    <a class="btn btn-success"  href="annualincomeverification/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
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
              <div class="col-md-3">
                <p><img src="{{ asset('images/logo.png') }}"> </p>
              </div>
               <div class="col-md-9">
                </div>
              <div class="col-md-12 title_header">
                 <p align="center" class="font-size-24">{{$local_state[0]->local_state_name_english}}<br> Ward No.
                  <b>{{auth()->user()->isAdmin}},</b><br></p>
                  <p align="center" class="font-size-24"><b> Province No. {{auth()->user()->provience_id}} Nepal </b></p>

                </div>
                <div class="col-md-2">

                </div>
              </div>
              </header>
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
                  <h3 align="center"><b><u> Subject: Verification of Annual Income </u></b></h3>
                </p>
                <p align="center" class="font-size-24">
                  <h5 align="center"><b>To Whom It May Concern</b></h5>
                </p>
              </div>




          <div class="col-md-12">
                <p align="left">This is to certify that <b>
            {{$data->person_title}} {{$data->person_name}}, </b>
                permanent resident of {{$district[0]->district_name_english}} Ward No. {{auth()->user()->isAdmin}}, {{$data->address}}, has income from the following sources:</p>
              </div>


              <div class="col-md-12">
                <div class="table-responsive">

                  <table class="table table-bordered" id="annual-income-verification-table">

                    <thead>
                      <th> S.N. </th>
                      <th> Relation with Applicant </th>
                      <th> Parties Name  </th>
                      <th> Annual Income </th>
                      <th> Remarks </th>
                    </thead>
                    <tbody>

                       <?php
                        $applicant_relation=explode(',',$data->applicant_relation);
                        $parties_name=explode(',',$data->parties_name);
                        $annual_income=explode(',',$data->annual_income);
                         $remarks=explode(',',$data->remarks);
                        $len=sizeof($applicant_relation);
                        $count_1=1;
                           ?>
                           <?php for ($i=0; $i <$len ; $i++) {
                            ?>
                          <tr>
                            <td>{{($count_1)}}
                                        <?php $count_1++; ?></td>
                            <td>{{$applicant_relation[$i]}} </td>
                            <td>{{$parties_name[$i]}} </td>
                           <td>{{$annual_income[$i]}}</td>
                           <td>{{$remarks[$i]}}</td>
                          </tr>
                        <?php  # code...
                // $count_1++;
                           }?>

                    </tbody>
                  </table>


                </div>


         </div>
           <p> &nbsp;&nbsp;Total valuation of income source is <b>NRs.</b>{{$data->total_nepali_rs}} which is equvalent to <b>$</b>{{$data->total_us_dollar}}</p>
              <p> &nbsp;&nbsp;Note:Today's exchange rate <b>1$ = NRs.</b> {{$data->us_dollar}}</p>
       </div>
       <!--  <div class="col-sm-12">

      </div> -->




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
      <!-- <a class="btn btn-success btn-fixed"  href="annualincomeverification/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
      <a class="btn btn-success btn-fixed" id="print_annual_income_verification"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a> -->
      <a class="btn btn-success btn-fixed" href="{{url('annualincomeverification/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
    </div>
   </center>
</div>
@endforeach
<!-- jQuery -->
<!-- jQuery 3 -->
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
