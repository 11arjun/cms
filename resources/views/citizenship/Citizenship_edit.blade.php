@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endpush
@section('content')

<div class="right_col nep" role="main" style="min-height: 1056px;">
  <div class="clearfix"></div>
  <div class="row">


    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">

        <div class="x_title">
          <h2 class="title-x">नेपाली नागरिकताको प्रमाण-पत्र प्रतिलिपि पाऊँ।</h2>

          <div class="clearfix"></div>
        </div>

<form action="{{url('Citizenship', [$data->id])}}" method="POST" >
           {{method_field('PATCH')}}
          {{ csrf_field() }}
          <div class="x_content">
            <div class="row title-left">
              <div class="col-md-12">
                <p>श्रीमान् प्रमुख जिल्ला अधिकारीज्यू</p>
                <input type="hidden" name="karyalaya" value="प्रमुख जिल्ला अधिकारी">
                <p>जिल्ला प्रशासन कार्यालय</p>
                <p><b><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="dis_name" value="{{$data->dis_name}}"></b>।</p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <p align="center" class="font-size-24">
                  </p><h4 align="center"><b>विषय: नेपाली नागरिकताको प्रमाण-पत्र प्रतिलिपि पाऊँ।
 </b></h4>

                <p></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <p>महोदय,</p>

              </div>

              <div class="col-md-12">
                <p>
                  मैले रजिस्ट्रेट अफिस  <input type="text" class="dashed-input-field" placeholder="   *" name="registrate_office_one" required="required" value="{{$data->registrate_office_one}}">/ <input type="text" class="dashed-input-field" placeholder="   *" name="registrate_office_two" required="required" value="{{$data->registrate_office_two}}"> अन्चलाधिसको  कार्यालय <input type="text" class="dashed-input-field" placeholder="   *" name="anchal_karyalaya" required="required" value="{{$data->anchal_karyalaya}}"> गोश्वारा कार्यालय  र यसै कार्यालयबाट देहायको विवरण भएको नेपाली नागरिकता प्रमाण-पत्र लिएकोमा सो प्रमाण-पत्रको सक्कल  <select name="bigrinuko_karan">
<option value="झुत्रो भएको" {{ $data->bigrinuko_karan == 'झुत्रो भएको' ? 'selected' : ''}}>झुत्रो भएको</option>
<option value="हराएको" {{ $data->bigrinuko_karan == 'हराएको' ? 'selected' : ''}}>हराएको</option>
<option value="नया ढाँचाको आवश्यक भएको" {{ $data->bigrinuko_karan == 'नया ढाँचाको आवश्यक भएको' ? 'selected' : ''}}>नया ढाँचाको आवश्यक भएको</option>
</select>
 हुँदा सोको प्रतिलिपि पाउनको लागि सो नागरिकता प्रमाण-पत्रको <select name="sakkal_nakkal">
<option value="सक्कल" {{ $data->sakkal_nakkal == 'सक्कल' ? 'selected' : ''}}>सक्कल</option>
<option value="नक्कल" {{ $data->sakkal_nakkal == 'नक्कल' ? 'selected' : ''}}>नक्कल</option>
</select>
 प्रति संलग्न राखि रु. ५ (पाँच) को टिकट टाँसी सिफारिस सहित यो निवेदन पेश गरेको छु।</p>
               
              </div>

              <div class="col-md-12">
                <p align="center" class="font-size-24">
                  </p><h4 align="center"><b>मैले नागरिकताको प्रमाण-पत्र लिदाको यस प्रकार छ ।
</b></h4>
                <p></p>
              </div>
            </div>

 
              <div class=" labell" style="border:  solid 1px #000; padding-top:10px;padding :15px;">

               <div class="row">
                  <div class="col-md-4">
                   १.  ना प्र प नं. :-
                  <input type="text" class="dashed-input-field" placeholder="   *" name="citi_no" required="required" value="{{$data->citi_no}}"></div>
                   <div class="col-md-4">
                  मिति  :-
                  <input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" name="citi_date" id="citi_date" required="required" onfocus="showNdpCalendarBox('citi_date')" value="{{$data->citi_date}}"></div>

                  <div class="col-md-4">

                  किसिम  :-
                  <input type="text" class="dashed-input-field" placeholder="   *" name="citi_type" required="required" value="{{$data->citi_type}}"></div> 
                </div>
                <div class="row">
                  <div class="col-md-12">
                  
                   २.  नाम थर :-
                  <input type="text" class="dashed-input-field" placeholder="   *" name="name_nepali" required="required" value="{{$data->name_nepali}}"></div>
                </div>
                <div class="row">
                  <div class="col-md-12"> <span class="eng">
                  FULL NAME (IN BLOCK) :-
                  <input type="text" class="dashed-input-field" placeholder="   *" name="name_english" required="required" value="{{$data->name_english}}"></span></div> 
                </div>
                <div class="row">
                  <div class="col-md-6">
                  
                   ३.लिङ्ग :-
                  <input type="text" class="dashed-input-field" placeholder="   *" name="gender_nepali" required="required" value="{{$data->gender_nepali}}"></div>
                  <div class="col-md-6">
                  Sex :-
                  <input type="text" class="dashed-input-field" placeholder="   *" name="gender_english" required="required" value="{{$data->gender_english}}"></div> 
                </div>
                <div class="row">
                  <div class="col-md-12">
                  
                   ४.जन्म स्थान :-
                  <input type="text" class="dashed-input-field" placeholder="   *" name="birthplace_nepali" required="required" value="{{$data->birthplace_nepali}}"></div>
                </div>
                <div class="row">
                  <div class="col-md-12"> <span class="eng">
                  Place of Birth (in block) :-
                  <input type="text" class="dashed-input-field" placeholder="   *" name="birthplace_english" required="required" value="{{$data->birthplace_english}}"></span></div> 
                </div>
                <div class="row">
                  <div class="col-md-6">
                  
                   ५.स्थायी बासस्थान: जिल्ला  :-
                  <input type="text" class="dashed-input-field" placeholder="   *" value="इलाम" name="citi_dis_name" required="required" value="{{$data->citi_dis_name}}"></div>
                  <div class="col-md-4">
                  {{$local_state[0]->local_state_name}}</div>

                   <div class="col-md-2">
                  वडा नं.  :-
                  <input type="text" class="dashed-input-small-field" placeholder="   *"  name="citi_ward_no" required="required" value="{{$data->citi_ward_no}}"></div></div>
                  <div class="row">
                  
                  <div class="col-md-6"> <span class="eng">
                  
                   ५.Permanent Address: District  :-
                  <input type="text" class="dashed-input-field" placeholder="   *" value="{{$district[0]->district_name_english}}" name="citi_dis_english" required="required" value="{{$data->citi_dis_english}}"></span></div>
                  <div class="col-md-4">
                   {{$local_state[0]->local_state_name_english}}</div>

                   <div class="col-md-2">
                     <span class="eng">
                  Ward no  :-
                  <input type="text" class="dashed-input-small-field" placeholder="   *" value="1" name="citi_ward_english" required="required" value="{{$data->citi_ward_english}}"></span></div>
                </div>
                  <div class="row">
                   <div class="col-md-6">
                  
                   ६.जन्म मिति (बि.सं) :-
                  <input type="text" class="dashed-input-small-field" placeholder="   *" name="year_nepali" required="required" value="{{$data->year_nepali}}"> साल<input type="text" class="dashed-input-small-field" placeholder="   *" name="month_nepali" required="required" value="{{$data->month_nepali}}">महिना <input type="text" class="dashed-input-small-field" placeholder="   *" name="day_nepali" required="required" value="{{$data->day_nepali}}">गते  </div>
                  <div class="col-md-6">
                   <span class="eng">
                   Date of birth (A.D) :-
                  <input type="text" class="dashed-input-small-field" placeholder="   *" name="year_english" required="required" value="{{$data->year_english}}">Year<input type="text" class="dashed-input-small-field" placeholder="   *" name="month_english" required="required" value="{{$data->month_english}}">Month<input type="text" class="dashed-input-small-field" placeholder="   *" name="day_english" required="required" value="{{$data->day_english}}">Day</span></div> 
                </div>
                <div class="row">
                  <div class="col-md-6">
                  
                   ७.बाबुको नाम, थर, वतन :-
                  <input type="text" class="dashed-input-field" placeholder="   *" name="father_name" required="required" value="{{$data->father_name}}"> </div>
                  <div class="col-md-6">
                  
                   नागरिकताको किसिम  :-
                  <input type="text" class="dashed-input-field" placeholder="   *" name="father_citi_type" required="required" value="{{$data->father_citi_type}}"></div> 
                </div>
                <div class="row">
                  <div class="col-md-6">
                  
                   ८.आमाको  नाम, थर, वतन :-
                  <input type="text" class="dashed-input-field" placeholder="   *" name="mother_name" required="required" value="{{$data->mother_name}}"> </div>
                  <div class="col-md-6">
                  
                   नागरिकताको किसिम  :-
                  <input type="text" class="dashed-input-field" placeholder="   *" name="mother_citi_type" required="required" value="{{$data->mother_citi_type}}"></div> 
                </div>
                <div class="row">

                   <div class="col-md-6">
                  
                   ९ .पतिको  नाम, थर, वतन :-
                  <input type="text" class="dashed-input-field" placeholder="   *" name="spouse_name" required="required" value="{{$data->spouse_name}}"> </div>
                  <div class="col-md-6">
                  
                   नागरिकताको किसिम  :-
                  <input type="text" class="dashed-input-field" placeholder="   *" name="spouse_citi_type" required="required" value="{{$data->spouse_citi_type}}"></div> 

                  
                </div>

                 

              </div>
            <div class="row">
              <div class="col-md-12">
                <p align="left"></p>
                <p>माथि उल्लेखित विवरण मैले <input type="text" class="dashed-input-field" placeholder="   *" name="karyalaya_name" required="required" value="{{$data->karyalaya_name}}"> कार्यालयबाट लीएको नं. <input type="text" class="dashed-input-small-field" placeholder="   *" name="rasid_no" required="required" value="{{$data->rasid_no}}"> को ना प्र प को व्यहोरा संग दुरुस्त छ।फरक छैन।लेखिएको व्यहोरा झुट्टा ठहरेमा  कानुन बमोजिम सहुँला बुझाउँला ।</p>
              </div>
            </div>
            <div class="row">

                <div class="col-md-6">
                 <table border="1" cellpadding="5" style=" border-color: transparent;">
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

                <div class="col-md-6">


                 <p align="right" style="margin-right: 192px;"><b>भवदिय,</b> </p>
                 <p align="right">निवेदकको दस्तखत </p>
                 <p align="right">नाम/थर <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="nibedak_names" value="{{$data->nibedak_names}}"></p>

                 <p align="right">मिति<input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" required="required" name="nibedan_date" id="nibedan_date" onfocus="showNdpCalendarBox('nibedan_date')" value="{{$data->nibedan_date}}">
                </p>
               </div>

</div>
 <div class="row">
          <div class="col-md-12">
               <!-- Sifaris -->

               <p align="center"> नगरपालिकाको प्रतिलिपि ना.प्र.प. का लागि सिफारिस</p>
               <p>

                <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="palika_name" value="{{$data->palika_name}}">नगरपालिका वडा नं.   <input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="palika_ward" value="{{$data->palika_ward}}"> मा मिति <input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" required="required" id="palika_date" name="palika_date" onfocus="showNdpCalendarBox('palika_date')" value="{{$data->palika_date}}">मा जन्म भई हाल <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="hal_palika" value="{{$data->hal_palika}}"> नगरपालिका वडा नं. <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="hal_ward" value="{{$data->hal_ward}}">मा स्थायी रुपमा बसोबास गरी आएका यसमा लेखिएका <select name="spouse_option">
<option value="श्रीमान" {{ $data->spouse_option == 'श्रीमान' ? 'selected' : ''}}>श्रीमान</option>
<option value="श्रीमती" {{ $data->spouse_option == 'श्रीमती' ? 'selected' : ''}}>श्रीमती</option>
</select>
 <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="spouse_option_name" value="{{$data->spouse_option_name}}">को <select name="child_option">
<option value="छोरा" {{ $data->child_option == 'छोरा' ? 'selected' : ''}}>छोरा</option>
<option value="छोरी" {{ $data->child_option == 'छोरी' ? 'selected' : ''}}>छोरी</option>
<option value="पत्नी" {{ $data->child_option == 'पत्नी' ? 'selected' : ''}}>पत्नी</option>
</select>
वर्ष <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="child_age" value="{{$data->child_age}}"> को <select name="title_option">
<option value="श्री" {{ $data->title_option == 'श्री' ? 'selected' : ''}}>श्री</option>
<option value="सुश्री" {{ $data->title_option == 'सुश्री' ? 'selected' : ''}}>सुश्री</option>
<option value="श्रीमती" {{ $data->title_option == 'श्रीमती' ? 'selected' : ''}}>श्रीमती</option>
</select>
 <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="title_name" value="{{$data->title_name}}">   लाई म चिन्दछु।निजको माग बमोजिम उपयुक्त विवरण भएको नं. <input type="text" class="dashed-input-field" required="required" name="bibaran_no" placeholder="   *" value="{{$data->bibaran_no}}"> मिति <input type="text" name="bibaran_date" id="bibaran_date" class="dashed-input-field ndp-nepali-calendar" required="required" placeholder="   *" onfocus="showNdpCalendarBox('bibaran_date')" value="{{$data->bibaran_date}}">को नगरिकता प्रमाण-पत्रको सक्कल प्रति <select name="citi_reason">
<option value="झुत्रो भएको" {{ $data->citi_reason == 'झुत्रो भएको' ? 'selected' : ''}}>झुत्रो भएको</option>
<option value="हराएको" {{ $data->citi_reason == 'हराएको' ? 'selected' : ''}}>हराएको</option>
<option value="नया ढाँचाको आवश्यक भएको" {{ $data->citi_reason == 'नया ढाँचाको आवश्यक भएको' ? 'selected' : ''}}>नया ढाँचाको आवश्यक भएको</option>
</select>
 व्यहोरा साँचो हुँदा प्रतिलिपि दिएमा फरक नपर्ने व्यहोरा सिफारिस गर्दछु।
उक्त विवरण झुठ्ठा ठहरे कानुन बमोजिम सँहुला बुझाउँला।
 </p>
             

             </div>

</div>
             <div class="row">
              <div class="col-md-4"><div style="border: solid 1px #000;  width: 4cm;height:4cm;
padding:30px 0;"><p align="center">दुवै कान देखिने हाल खिचिएको २.५ X ३ से.मी. फोटो</p></div></div>
<div class="col-md-4">

             <p> कार्यालयको नाम र छाप  <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="office_name" value="{{$data->office_name}}"></p>
              


           </div>

              <div class="col-md-4">

             <p align="right" style="margin-right: 148px;"> सिफारिस गर्नेको :</p>
             <p align="right">दस्तखत </p>
             <p align="right">नाम/थर <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="sifaris_name" value="{{$data->sifaris_name}}"></p>
             <p align="right">पद<input type="text" class="dashed-input-field" placeholder="   *" required="required" name="sifaris_post" value="{{$data->sifaris_post}}"></p>


           </div>
       </div>
 
           <div class="col-md-12">
            

  <!--views for nibedak detail -->
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
  <!-- END -->

            <hr>
<input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
            <center><input type="submit" class="btn btn-success" name="save_citizen_sifaris_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
          </div>
       
     </div></form>
   </div>
 </div>
</div>

<!-- footer content -->

</div>
@stop