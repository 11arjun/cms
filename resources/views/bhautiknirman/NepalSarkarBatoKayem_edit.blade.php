@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="right_col" role="main">
  <div class="clearfix"></div>
  <div class="row">


    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">

        <div class="x_title">
          <h2>नेपाल सरकारको नाममा बाटो कायम सिफारिस </h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>


        <form action="{{url('nepalsarkarbatokayem', [$data->id])}}" method="post">
          {{method_field('PATCH')}}
          {{ csrf_field() }}
          <div class="x_content">
              @include('master.master_header_ne2')
      

            <div class="col-md-12">
              <div class="col-md-6">
               <p align="left"><b>पत्र संख्या&nbsp;<input type="text" class="dashed-input-field" placeholder="   *"  value="{{$data->patra_sankya}}" name="patra_sankya" id="patra_sankya" required="required"/></b></p>
                <p align="left"><b>चलानी नं.&nbsp;<input type="text" class="dashed-input-field" placeholder="   *"  value="{{$data->chalani_no}}" name="chalani_no" id="chalani_no" required="required"/></b></p>
             </div>
             <div class="col-md-6">
              <p align="right"><b>मिति:&nbsp;<input type="text" class="dashed-input-field" placeholder="   *"  value="{{$data->issued_date}}" name="issued_date" id="issued_date" required="required"/></b></p>
             </div>
           </div>

           <div class="col-md-12">

            <p align="left"><b>&nbsp;&nbsp;&nbsp;श्री <input type="text" class="dashed-input-field" placeholder="   *" name="office_chairman"  value="{{$data->office_chairman}}" id="office_chairman" required="required"/></b></p>
                <p align="left"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" name="office_name" id="office_name"  value="{{$data->office_name}}" required="required"/></b>|</p>

           </div>




          <div class="col-md-12">
            <p align="center" class="font-size-24">
              <h4 align="center"><b><u>विषय: सिफारिस सम्बन्धमा</u></b> </h4>
            </p>
          </div>
          <div class="col-md-12">


            <p align="left"> उपरोक्त सम्बन्धमा मेरो नाममा दर्ता श्रेस्ता  भएको <b> {{$local_state[0]->local_state_name}} </b> वडा नं.  <b> {{Helpers::convertNos(auth()->user()->isAdmin)}} </b>  (साबिकको ठेगाना <input type="text" class="dashed-input-field star" name="sabik_address" id="sabik_address" value="{{$data->sabik_address}}" autocomplete="off" required="required">)कि.न.<input type="text" class="dashed-input-field" placeholder="   *"  value="{{$data->kitta_no}}" required="required" name="kitta_no"/>को क्षे.फ़.<input type="text" class="dashed-input-field" placeholder="   *" required="required"  value="{{$data->area}}" name="area"/>जग्गामध्ये पूर्वतर्फबाट <input type="text" class="dashed-input-field" placeholder="   *"  value="{{$data->jagga_breadth}}" required="required" name="jagga_breadth"/>चौडाइ र <input type="text" class="dashed-input-field" placeholder="   *" required="required"  value="{{$data->jagga_length}}" name="jagga_length"/>फिट लम्बाई नेपाल सरकारको नाममा कित्ताकाट गरी नेपाल सरकारको नाममा बाटो कायम गर्न सिफारिस गरी पाउँ भनी जग्गाधनी   <select name= "person_title">
                    <option value="श्री" {{ $data->person_title== 'श्री' ? 'selected' : ''}}>श्री</option>
                    <option value="सुश्री" {{ $data->person_title== 'सुश्री' ? 'selected' : ''}}>सुश्री</option>
                     <option value="श्रीमती" {{ $data->person_title== 'श्रीमती' ? 'selected' : ''}}>श्रीमती</option>
                    </select>

               <input type="text" class="dashed-input-field" placeholder="   *"  value="{{$data->person_name}}" required="required" name="person_name"/>ले यस वडा कार्यलयमा निवेदन दिनु भएको हुदाँ सो सम्बन्धमा प्राबिधिक प्रतिवेदन अनुसार कित्ताकाट गर्न मिल्ने देखिएकोले प्राबिधिक फिल्ड निरीक्षण प्रतिवेदन सहित पठाइएको छ | त्यहाको नियमानुसार नेपाल सरकारको नाममा बाटो कायम गरिदिनुहुन सिफारिस गरिन्छ |</p>
          </div>
            <p class="btm-last">  वडा अध्यक्ष </p>
          <div class="col-md-12">
            <hr/>

            <center><input  type="submit" class="btn btn-success" name="update_nepal_sarkar_bato_kayem_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
          </div>
        </div>
      </div>

    </form>

  </div>
</div>
</div>
</div>

@stop