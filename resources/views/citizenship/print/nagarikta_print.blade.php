<link href="{!! asset('css/custom_print.css') !!}" rel="stylesheet">
<link rel="stylesheet" href="{!! asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}">

<div id="page">
<page size="A4"  class="short">
   <div class="x_panel">
     <div class="x_content">
          <div class="row top-part">


            </div>

            <div class="row title-left">
              <div class="col-md-6">
                <p>श्रीमान्
                {!!$data->karyalaya!!} ज्यू
                </p><p>{{$local_state[0]->local_state_name}}</p>
                <p><b>{{Helpers::convertNos(auth()->user()->isAdmin)}}</b>&nbsp;वडा कार्यालय,{{$district[0]->district_name}}।
                </p>
              </div>
              <div class="col-md-6">
               <p align="right"><b>मिति :{!!$data->issued_date!!}</b></p>
             </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <p align="center" class="font-size-24">
                  </p><h4 align="center"><b>विषय:नागरिकता {!!$data->ng_option!!}
पाउनको लागि सिफारिस गरि पाउँ।&nbsp;
 </b></h4>
  <input type="hidden" name="letter_subject1" value="नागरिकता">

<input type="hidden" name="letter_subject2" value="पाउनको लागि सिफारिस गरि पाउँ।">                <p></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <p>महोदय,</p>

              </div>

              <div class="col-md-12">
                <p>
                  उपरोक्त बिषयमा म निवेदक {!!$data->district_name!!} जिल्ला {!!$data->loc_name!!} वडा नं. {!!$data->ward_no!!} बस्ने {!!$data->grand_name!!}को {!!$data->child_option!!}

 {!!$data->parent_name!!}को {!!$data->ch_option!!}

जन्म मिति {!!$data->dob!!} भई&nbsp;वर्ष {!!$data->age!!} को {!!$data->app_name!!} लाई&nbsp; नेपाली&nbsp;&nbsp;नागरिकताको {!!$data->n_type!!} पाउनको लागि देहायको प्रमाण कगजातहरु&nbsp;यसै साथ   संलग्न राखि पेश गरेको छु।  यसमा उल्लेखित विवरण ठिक साँचो हो। झुट्टा ठहरिएमा कानून बमोजिम&nbsp;सहुँला&nbsp;बुझाउँला&nbsp;भनि यो निवेदन पेश गरेको छु।&nbsp;
                </p>
              </div>
 <div class="col-md-6">


<script type="text/javascript">
  function myFunction() {
    var x = document.getElementById("mySelect").value;
    document.getElementById("ntype").value=x;
}
</script>

           </div>

              <div class="col-md-6">

             <p align="right" style="margin-right: 148px;"> निवेदक</p>
             <p align="right">नाम :-{!!$data->n_name!!}</p>

             <p align="right">ठेगाना&nbsp;:-{!!$data->n_address!!}</p>
             <p align="right">मिति&nbsp;:-{!!$data->n_date!!}</p>



           </div>
       </div>
           <div class="col-md-12">

          <h2>तपशिल </h2>


              <table class="table table-bordered" id="sabik_address_table">
                <tbody>


                   <tr>
                    <td>
                      {!!$data->bodartha!!}
                    </td>

                  </tr>
                </tbody>
              </table>



          </div>

     </div>
   </div>
</page>
</div>

<div class="col-md-12">
   <center>
     <div class="hide-button">
      <a class="btn btn-fixed" href="{!!url('home')!!}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
      <a class="btn btn-fixed"  href="Nagarikta/{!!$data->id!!}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
          <a class="btn btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a>
      <a class="btn btn-fixed" href="{!!url('Nagarikta/create')!!}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
    </div>
   </center>
</div>
<!-- jQuery -->
<!-- jQuery 3 -->
<script src="{!! asset('admin/bower_components/jquery/dist/jquery.min.js') !!}"></script>


<script type="text/javascript">
  $(document).ready(function(){
    $('#print_certificate').click(function() {
    $('.hide-button').hide();

    window.print();

    $('.hide-button').show();
    });
  });
</script>
