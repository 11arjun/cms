@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="right_col nep" role="main" style="min-height: 1158px;">
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">

        <div class="x_title">
          <h3 class="title-x"> घ वर्गको निर्माण व्यवसाय इजाजत पत्र</h3>
         
          <div class="clearfix"></div>
        </div>
<div class="x_content">
   @include('master.master_header_ne2')
     

              <form action="{{url('NirmanBebasaye', [$data->id])}}" method="POST" >
           {{method_field('PATCH')}}
          {{ csrf_field() }}


             <div class="row top-part">
                <div class="col-md-6">
                 <p align="left"><b>इजाजत पत्र नं. :<input type="text" class="dashed-input-field" placeholder="   *" name="ejajat_patra_no" id="ejajat_patra_no" required="required" value="{{$data->ejajat_patra_no}}"></b><br>

                  <b>आ.ब. :<input type="text" class="dashed-input-field" value="{{$data->fiscal_year}}" name="fiscal_year" id="fiscal_year" required="required"></b>


                </p>
              </div>
              <div class="col-md-6">
                 <div class="img-box"><p>निवेदकको दुवै कान देखिने पासपोर्ट साइजको फोटो</p></div>
              </div>

            </div>

          <div class="row content-para">
            <p> स्थानीय सरकार सञ्चालन एेन २०७४ को दफा (११)  को उप दफा (२)  को देहाय छ (१०)  बमोजिम प्रचलित कानुनको परिधिभित्र रही निर्माण व्यवसाय सञ्चालन गर्न <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="location" value="{{$data->location}}"> स्थित कार्यालय भएको प्रो. श्री <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="company_name" value="{{$data->company_name}}"> फर्म वा कम्पनीलाई"घ" वर्गको इजाजतपत्र प्रदान गरीएको छ |





            </p>







          <div class="row content-para">
            <div class="col-md-6">
            </div>
            
           <div class="col-md-6">

            <p><b>इजाजतपत्र दिनेको :  </b></p>

            <div id="other_organization_resiter">

              <p align="left">दस्तखत :<input type="text" class="dashed-input-field"> </p>
              <p align="left">नाम:<input type="text" class="dashed-input-field" required="required" placeholder="   *" name="ejajat_dineko_name" value="{{$data->ejajat_dineko_name}}"> </p>
              <p align="left">पद:<input type="text" class="dashed-input-field" required="required" placeholder="   *" name="post" value="{{$data->post}}"> </p>

              <p align="left">मिति :<input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" required="required" id="issued_date" name="issued_date" onfocus="showNdpCalendarBox('issued_date')" value="{{$data->issued_date}}"> </p>
            </div>


          </div>
        </div>
<div class="clearfix"></div>
<hr>
<section class="bibaran">
    <fieldset>

      <legend>निवेदकको विवरण</legend>


      <div class="form-group">
        <label>निवेदकको नाम</label>
        <input type="text" name="nibedak_name" class="form-control" value="{{$data->nibedak_name}}" required>
      </div>
      <div class="form-group">
        <label>निवेदकको ठेगाना</label><input type="text" name="nibedak_address" class="form-control" value="{{$data->nibedak_address}}" required>
      </div><div class="form-group">
        <label>निवेदकको नागरिकता नं.</label>
        <input type="text" name="nibedak_citizenship_no" class="form-control" value="{{$data->nibedak_citizenship_no}}" required>
      </div>
      <div class="form-group">
        <label>निवेदक (NID) </label>
        <input type="text" name="nibedak_nid" class="form-control" value="{{$data->nibedak_nid}}" required>
      </div>

    </fieldset>
  </section>



      </div>
      <div class="col-md-12">
        <hr>
<input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
  
        <center><input type="submit" class="btn btn-success" name="save_nirman_bebasaye_ejajat" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
      </div>
    </form>
  </div>
</div>
</div>
</div>

</div>
@stop