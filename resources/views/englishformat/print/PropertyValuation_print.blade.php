<link href="{{ asset('css/custom_print.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
<page size="A4" class="short">
      <div class="x_panel">
        <div class="x_content">

          {{-- <header>
          <div class="col-md-12"  style="margin-top: 40px;">
            <div class="col-md-2">
              <p><img src="{{asset('images/logo.png') }}"> </p>
            </div>
            <div class="col-md-8">
              <p align="center" class="font-size-24"><b>
                  {{$local_state[0]->local_state_name_english}} </b></p>
                 <p align="center" class="font-size-24"> Ward No.
                  <b> {{(auth()->user()->isAdmin)}}</b></p>
                  <p align="center"><b>Province No.{{(auth()->user()->provience_id)}}, Nepal</b></p>

            </div>
            <div class="col-md-2">
            </div>
          </div>
        </header> --}}
        @include('master.master_header_print_en')
            {{-- <div class="row top-part">
                <div class="col-md-12">
                    <h4 align="center">Property Valuation</h4>
                </div>
            </div>                 --}}
            <div class="row title-left">
                    <div class="col-md-6">
                      {{-- <p align="left"><b>Ref No : {{$data->ref_no}}</b></p> --}}
                    </div>
                    <div class="col-md-6">
                      <p align="right"><b>Date : {{$data->issued_date}}</b> </p>
                    </div>
                  </div>


              <div class="col-md-12">
                <p align="center" class="font-size-24">
                  <h3 align="center"><b><u> Subject: Property Valuation </u></b></h3>
                </p>
                <p align="center" class="font-size-24">
                  <h4 align="center"><b><u>To Whom It May Concern</u></b></h4>
                </p>
              </div>




          <div class="col-md-12">
                <p align="left">This is to certify that <b>
                  {{$data->title}} {{$data->title_name}}</b>

                permanent resident of <b>{{$data->address}}</b> City Ward No: {{auth()->user()->isAdmin}} {{$district[0]->district_name_english}} Nepal, owns and possesses estate property as mentioned below, according to certificate issued by concerned land and revenue office.</p>

            </div>

              <div class="col-md-12">
                    <h4>PROPERTY VALUATION</h4>
                <div class="table-responsive table-bordered">

                  <table class="table" id="relation-verification-table">

                    <thead>
                      <th> S.N. </th>
                      <th> Owner </th>
                      <th> Paticular Plot no. </th>
                      <th> Area </th>
                      <th>Total Value</th>
                      <th>Remarks</th>
                    </thead>
                    <tbody>
                            <?php $count=1; ?>
                            @foreach($detail as $d)
                      <tr>
                        <td>{{ $count }}<?php $count++;?></td>
                        <td>{{$d->owner}}</td>
                        <td>{{$d->particular_plot_no}}</td>
                        <td>{{$d->area}}</td>
                        <td>{{$d->total_value}}</td>
                        <td>{{$d->remarks}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>


                </div>


         </div>

         <p>Total Valuation of property is NPR <b>{{$data->total_amount}}</b> which is $ <b>{{$data->total_amount_dollar}}</b></p>
         <p><b>Note: $1</b> equivalent to <b>NPR</b> <b>{{$data->dollar_to_nepali}}</b></p>
       </div>

       <div class="col-md-12">

        <p class="btm-last">Ward President </p>
      </div>
    </div>
</page>
<div class="col-md-12">
        <center>
         <div class="hide-button">
           <a class="btn btn-fixed" href="{{url('home')}}"><span class="glyphicon glyphicon-home"></span>गृहपृष्ठ </a>
           <a class="btn btn-fixed"  href="propertyvaluation/{{$data->id}}/edit"><span class="glyphicon glyphicon-edit"></span>रेकर्ड सच्याउनुहोस </a>
           <a class="btn btn-fixed" id="print_certificate"><span class="glyphicon glyphicon-print"></span> प्रिन्ट गर्नुहोस </a>
           <a class="btn btn-fixed" href="{{url('propertyvaluation/create')}}"><span class="glyphicon glyphicon-print"></span> नयाँ फर्म खोल्नुहोस</a>
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
