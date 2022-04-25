<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

  @foreach($data as $data)
  <div id="page{{$data->id}}">
  <div class="btn-grp hide-button" id="hide-btn-grp">

  <a class="btn btn-success"  href="CitizenSifaris/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
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
                     <div class="col-md-9" style="margin-right: 1px;">
                      <p align="left"><b>प. सं. :{{$data->patra_sankya}} </b></p>

      <p align="left"><b>च. नं. :{{$data->chalani_no}}</b></p>

                     </div>
                     <div class="col-md-9 title_header" style="    margin-left: 70px;margin-top: -175px !important;">
        @if(auth()->user()->isAdmin == 0)
          <h2 class="font-size-24">  
            {{$local_state[0]->local_state_name}} 
          </h2>
            <h1 class="name_header">  
            गाउँ कार्यपालिकाको कार्यालय 
          </h1>
            <h3 align="center" class="sm-head">
              {{Helpers::wardNames(auth()->user()->isAdmin)}} ,
              {{$district[0]->district_name}}
            </h3>
        @else
          <h1 class="name_header">  {{$local_state[0]->local_state_name}} </h1>
          @if(auth()->user()->isAdmin != 0)  
          <h2 class="font-size-24">
                    
          {{Helpers::convertNos(auth()->user()->isAdmin)}} नं. वडा कार्यालय <p></p>
          </h2>
          @endif
          <h3 align="center" class="sm-head"> {{Helpers::wardNames(auth()->user()->isAdmin)}} ,{{$district[0]->district_name}}</h3>
          {{-- <h3 align="center" class="sm-head">{{$provience[0]->province_name}}, नेपाल</h3> --}}
        @endif
                  </div>
                  <div class="col-md-3 " style="margin-left: 530px;margin-top: -165px;">
        <div class="side-info">
          <span>फोन: ०८६-४२०१८० </span><br>
          <span>फ्याक्स:०८६-४२०१८० </span><br>
          <span>Email: ito.mallaranimun@gmail.com</span><br>
          <span>Website: www.mallaranimun.gov.np</span><br>
          <span>{{$provience[0]->province_name}}, नेपाल</span>
        </div>
      </div>
      <div class="row" >
      <div class="col-md-12">
        <hr style="    background-color: red;
    height: 2px;
    padding: 0;
    margin: 0;">
      </div>
    </div>  

               </header>


          <div class="x_content">
            <div class="row top-part">
    <div class="col-md-6">
      {{-- <p align="left"><b>पत्र संख्या :{{$data->patra_sankya}} </b></p>

      <p align="left"><b>चलानी नं. :{{$data->chalani_no}}</b></p>
 --}}

    </div>
    <div class="col-md-6">
      <p align="right"><b>मिति :{{$data->issued_date}}</b></p>
    </div>
  </div>

            <div class="row title-left">
              <div class="col-md-12">

                <p>श्री जिल्ला प्रशासन कार्यालय</p>
                <p><b>{{$data->dis_name}}</b>।</p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <p align="center" class="font-size-24">
                  </p><h4 align="center"><b>विषय:सिफारिस गरिएको ।
 </b></h4>
  {{$data->letter_subject}}
                <p></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <p>महोदय,</p>

              </div>

              <div class="col-md-12">
                <p>
                  यस नगरपालिका अन्तर्गत निम्न लिखित विवरण भएका श्री {{$data->n_name}} ले स्थायी नेपाली नागरिकताको प्रमाण-पत्र बनाउनको लागि सिफारिस पाऊ भनि निबेदन दिएको हुँदा निम्न विवरणमा उल्लेखित ब्यक्तिलाई स्थायी नेपाली नागरिकताको प्रमाण-पत्र उपलब्ध गराई दिनुहुन सिफारिस साथ अनुरोध गर्दछु !


              </p></div>


            </div>


              <div class=" labell">

               <div class="row">
                  <div class="col-md-12">
                   जन्मस्थान  :-
                 {{$data->birth_place}}</div>
                   <div class="col-md-12">
                  बाबुको नाम थर, वतन :-
                 {{$data->father_name}}</div>
                  <div class="col-md-12">
                  आमाको  नाम थर, वतन :-
                 {{$data->mother_name}}</div>
                  <div class="col-md-12">
                  पति/पत्नीको नाम थर, वतन :-
                 {{$data->patipatni_name}}</div>
                  <div class="col-md-12">
                  स्थायी ठेगाना  :-
                 {{$data->per_add}}</div>
                  <div class="col-md-12">
                  सम्बन्धित व्यक्तिको नाम थर, वतन :-
                 {{$data->person_name}}</div>
                  <div class="col-md-12">
                  जन्म मिति :-
                {{$data->birth_date}}</div>
                  <div class="col-md-12">
                  जिल्ला प्रशासनबाट खटिएको नागरिकता टोलीमा नाम दर्ता  :-
                 {{$data->toli_ko_name}}</div>
                  <div class="col-md-12">
                  सिफारिस माग गर्ने व्यक्तिको सही  :-
                  </div>
                  <div class="col-md-12">
                  सिफारिस माग गर्नेको फोटो </div>
                  <div class="col-md-4"><div style="border: solid 1px #000;  width: 4cm;height:4cm;
padding:30px 0;"><p align="center">फोटो</p></div></div>




                </div>



              </div>

     </div>
</div>
</div>
</page>

<br>
<br>

<br>
<div id="page">
<page size="A4">
   <div class="x_panel">
   <div class="x_content">


            
              <div class="col-md-12" style="margin-top: 40px;">
                <p align="center"><b> सनाखत</b> </p>
                <p> {{$data->nibedak_options}}

{{$data->nibedan_name}} मेरो {{$data->nibedan_relation}} नाता हुन् ! निजले हालसम्म कही  कतैबाट नेपाली नागरिकताको प्रमाण-पत्रलीएको छैन ! ब्येहोरा झुट्ठा ठहरेमा कानुन बमोजिम सहुँला बुझाउला भनि सनाखत र सहिछाप गर्नेको : </p>
              </div>

            <div class="col-md-12">
             <div class="col-md-6">
              <p align="left">
                  नाम  :-
                 {{$data->sanakhat_name}}<br>
                  ना.प्र नं. :-
                 {{$data->sanakhat_relation}}<br>

                  सही छाप :-
               <br>   मिति   :-
                {{$data->sanakhat_date}}</p></div>


                <div class="col-md-6">
                 <table border="1" cellpadding="5" style=" border-color: transparent" align="right">
                    <tbody><tr>
                      <th colspan="2" style="text-align: center">औंठा छाप</th>
                    </tr>
                    </tbody><tbody style=" border:solid 1px #000;">
                    <tr>

                      <th>दायाँ</th>
                      <th>बायाँ</th>

                   </tr>


                      <tr>
                        <td height="100px" width="100px"> </td>
                        <td height="100px" width="100px"> </td>
                      </tr>
                     </tbody>
                  </table>
                </div>

            <!-- Nibedak Block -->


</div>
     </div>
 </div>
</page>
</div>
</div>
  <div class="col-md-12">
   <center>
      <div class="hide-button">
      <a class="btn btn-success btn-fixed" href="{{url('home')}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
      <!-- <a class="btn btn-success btn-fixed"  href="CitizenSifaris/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
        <a class="btn btn-success btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a> -->
      <a class="btn btn-success btn-fixed" href="{{url('CitizenSifaris/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
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
