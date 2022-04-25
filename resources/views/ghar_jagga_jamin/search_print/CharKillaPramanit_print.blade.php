<link rel="stylesheet" type="text/css" href="{{ asset('css/custom_print.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

@foreach($data as $data)
<div id="page{{$data->id}}" class="short">
<div class="btn-grp hide-button" id="hide-btn-grp">

<a class="btn btn-success"  href="charkillapramanit/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
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
<page size="A4" >
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
<div class="top-part">
       <div class="row title-left">
        <div class="col-md-6">
         <p align="left"><b><span style="margin-left: 11px;">पत्र संख्या:</span>&nbsp;{{$data->patra_sankya}}</b></p>
       </div>
       <div class="col-md-6">
       </div>
     </div>


     <div class="row title-left">
      <div class="col-md-6">
        <p align="left"><b><span style="margin-left: 11px;">चलानी नं.:</span>&nbsp;{{$data->chalani_no}}</b></p>


      </div>
      <div class="col-md-6">
        <p align="right"><b><span <?php echo empty($print_mode)?"":$print_mode;?>>मिति:</span>&nbsp;{{$data->issued_date}}</b></p>
      </div>
    </div>
  </div>




    <div class="col-md-12">
      <p align="center" class="font-size-24">
        <h4 align="center"><b><u>विषय: चार किल्ला प्रमाणित।</u></b></h4>
      </p>
    </div>




    <div class="col-md-12 content-para">

      <p align="justify"><b>{{$local_state[0]->local_state_name}}</b> वडा नं.<b>  {{Helpers::convertNos(auth()->user()->isAdmin)}} </b> (साबिकको ठेगाना <b>{{$data->sabik_address}}</b>) अन्तर्गत <b>{{$data->person_title}} {{$data->person_name}}</b> को नाममा मालपोत कार्यलयमा श्रेस्ता दर्ता कायम रहेको जग्गाको चार किल्ला निम्न विवरण अनुसार भएको प्रमाणित गरिन्छ।</p>
      </div>

      <div class="col-md-12">

        <h4 align="center"><b>चार किल्ला विवरण</b> </h4>
        <div class="col-md-12">
          <div class="table-responsive">
            <table class="table table-bordered" id="char_killa_bibaran_table">
              <thead>

                <th>क्र.स.</th>
                <th>वडा नं.</th>
                <th>सिट नं./कि नं./क्षेत्रफ़ल</th>
                <th>बाटो भएको/नभएको </th>
                <th>पूर्व </th>
                <th>पश्चिम</th>
                <th>उत्तर </th>
                <th>दक्षिण </th>
                <th>कैफियत </th>

              </thead>
              <tbody>

                <?php $count=1; ?>
                    @foreach($detail as $d)
                    <tr>
                      <td>{{ Helpers::convertNos($count)}}
                        <?php $count++; ?></td>

                      <td>{{$d->ward_no}}</td>
                      <td>{{$d->seat_kitta_area}}</td>
                      <td>{{$d->batto_abastha}}</td>
                      <td>{{$d->east}}</td>
                      <td>{{$d->west}}</td>
                      <td>{{$d->north}}</td>
                      <td>{{$d->south}}</td>
                      <td>{{$d->remark}}</td>

                    </tr>
                    @endforeach
              </tbody>
            </table>
          </div>
          <p class="btm-last">  वडा अध्यक्ष </p>
        </div>
      </div>

    </div>
</page>
</div>




<div class="col-md-12">
 <center>
   <div class="hide-button" style="display: block;">
       <a class="btn btn-success btn-fixed" href="{{'home'}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
       <!-- <a class="btn btn-success btn-fixed"  href="charkillapramanit/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
    <a class="btn btn-success btn-fixed" id="print_char_killa_pramanit"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a> -->


    <a class="btn btn-success btn-fixed" href="{{url('charkillapramanit/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
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
