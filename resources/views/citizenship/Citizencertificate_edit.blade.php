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
          <h2 class="title-x">नेपाली नागरिकताको प्रमाण-पत्र पाऊँ </h2>

          <div class="clearfix"></div>
        </div>


         
<form action="{{url('CitizenshipCertificate', [$data->id])}}" method="POST" >
           {{method_field('PATCH')}}
          {{ csrf_field() }}
          <div class="x_content">
               <div class="row">
            <div class="col-md-12">
          <p align="center"> <b>अनुसूची-१</b></p>
          <p align="center" class="small"> (नियम ३ को उपनियम (१) र (३) नियम ४ को उपनियम (१) र नियम १६ को उपनियम (१) संग सम्बन्धित)  </p>
        </div>
      </div>

       <div class="row">
          <div class="col-md-6">
              
                <h4>श्रीमान् प्रमुख जिल्ला अधीकारी ज्यू।</h4>
                <input type="hidden" name="karyalaya" value="प्रमुख जिल्ला अधीकारी">
                <p><b> &nbsp;&nbsp;जिल्ला प्रशासन कार्यालय </b><br>
                 &nbsp;&nbsp;<b><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="office_address" value="{{$data->office_address}}"></b>।</p>
              
                
              </div>
              <div class="col-md-6">
                 <p style="float: left;"><b>{{$provience[0]->province_name}}, नेपाल</b></p>
                 <div style="border: solid 1px #000; border-radius: 10px;
                  padding:50px 10px;text-align:center;float: right;height: 180px;width: 130px;">
                   निवेदकको दुवैकान देखिने पासपोर्ट साइजको फोटो
                 </div>
              </div>
            
              <div class="col-md-12">
                <h4 align="center" style="margin-top: -50px;">
                   विषय: <u>नेपाली नागरिकताको प्रमाण-पत्र पाऊँ।</u></h4>
                   
                <p><b>महोदय,</b></p>

              </div>

              <div class="col-md-12">

                <p>
                      &nbsp;&nbsp;&nbsp;&nbsp;  म वंशजको नाताले / जन्मका आधारले नेपाली नागरीक भएकोले देहायको विवरण खोली नेपाली नागरिकताको प्रमाण-पत्र पाउनको लागि सिफारिस साथ रु ५।- को टिकट टाँसी यो निवेदन पेश गरेको छु।मैले यस अघि नेपाली नागरिकताको प्रमाण-पत्र लिएको छैन।</p>

              </div>
                </div>
           
        
            <div class="row">
              

              

              <div class="col-md-12">


                <p>
                 नाम थर :
                  <input type="text" class="dashed-input-field" placeholder="   *" name="app_full_name" required="required" value="{{$data->app_full_name}}">
                </p>
                <p><span class="eng">
                 Full Name (In Block) :
                  <input type="text" class="dashed-input-field" placeholder="   *" name="app_full_name_english" required="required" value="{{$data->app_full_name_english}}">
                </span>

                </p>



                <p>
                 लिङ्ग:
                 <select name="sex">
                  <option value="पुरुष" {{$data->sex == 'पुरुष' ? 'selected' : ''}}>पुरुष</option>
                  <option value="महिला" {{$data->sex == 'महिला' ? 'selected' : ''}}>महिला</option>
                  <option value="तेस्रो लिङ्ग" {{$data->sex == 'तेस्रो लिङ्ग' ? 'selected' : ''}}>तेस्रो लिङ्ग</option>
                  </select>
                  <span class="eng">

                 Sex:
                 <select name="sex_english">
                  <option value="Male" {{$data->sex_english == 'Male' ? 'selected' : ''}}>Male</option>
                  <option value="Female" {{$data->sex_english == 'Female' ? 'selected' : ''}}>Female</option>
                  <option value="Third Gender" {{$data->sex_english == 'Third Gender' ? 'selected' : ''}}>Third Gender</option>
                  </select>
                </span>


                </p>

                <p>
                 जन्मस्थान:
                  <input type="text" class="dashed-input-field" placeholder="   *" name="place_of_birth" required="required" value="{{$data->place_of_birth}}">

                </p>
                <p>
                  <span class="eng">
                 Place of Birth (In Block) :
                  <input type="text" class="dashed-input-field" placeholder="   *" name="place_of_birth_english" required="required" value="{{$data->place_of_birth_english}}">
                </span>

                </p>

                <p>
                  स्थायी ठेगाना : जिल्ला<input type="text" class="dashed-input-field" placeholder="   *" name="permanent_address_place" required="required" value="{{$data->permanent_address_place}}">न.पा.  <input type="text" class="dashed-input-field" placeholder="   *" name="permanent_address_district" required="required" value="{{$data->permanent_address_district}}">वडा नं. <input type="text" class="dashed-input-small-field" placeholder="   *" name="permanent_address_ward" required="required" value="{{$data->permanent_address_ward}}">
                </p>

                <p>
                  <span class="eng">
                  Permanent Address : District<input type="text" class="dashed-input-field" placeholder="   *" name="local_permanent_address" required="required" value="{{$data->local_permanent_address}}"> Municipality\Sub-Metropolis<input type="text" class="dashed-input-field" placeholder="   *" name="local_permanent_address_district" required="required" value="{{$data->local_permanent_address_district}}">Ward No <input type="text" class="dashed-input-small-field" placeholder="   *" name="local_permanent_address_ward" required="required" value="{{$data->local_permanent_address_ward}}">
                </span>
                </p>

                <p>
                  जन्म मिति: <input type="text" class="dashed-input-small-field" placeholder="   *" name="date_of_birth" required="required" id="" value="{{$data->date_of_birth}}">
                  साल<input type="text" class="dashed-input-small-field" placeholder="   *" name="date_of_birth_month" required="required" value="{{$data->date_of_birth_month}}">महिना<input type="text" class="dashed-input-small-field" placeholder="   *" name="date_of_birth_day" required="required" value="{{$data->date_of_birth_day}}"> गते 
                  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                  <span class="eng">
                  Date of Birth (A.D) <input type="text" class="dashed-input-small-field" placeholder="   *" name="date_of_birth_english" id="" required="required" value="{{$data->date_of_birth_english}}">Year<input type="text" class="dashed-input-small-field" placeholder="   *" name="date_of_birth_english_month" required="required" value="{{$data->date_of_birth_english_month}}">Month<input type="text" class="dashed-input-small-field" placeholder="   *" name="date_of_birth_english_day" required="required" value="{{$data->date_of_birth_english_day}}">Day </span>
                  <br>
                   (शैक्षिक प्रमाण-पत्र हुनेले सोही मिति उल्लेख गर्ने) 
                </p>
              <!--  Guardains Info-->
                <p>
                   बुबाको नाम, थर : <input type="text" class="dashed-input-field" placeholder="   *" name="name_of_father" required="required" value="{{$data->name_of_father}}"> 

                ठेगाना :  <input type="text" class="dashed-input-field" placeholder="   *" name="father_address" required="required" value="{{$data->father_address}}">        

                नागरिकता:
                  <input type="text" class="dashed-input-field" placeholder="   *" name="father_citi" required="required" value="{{$data->father_citi}}">
                </p>

                <p>
                 आमाको नाम, थर : <input type="text" class="dashed-input-field" placeholder="   *" name="name_of_mother" required="required" value="{{$data->name_of_mother}}">

                  ठेगाना:
                  <input type="text" class="dashed-input-field" placeholder="   *" name="mother_address" required="required" value="{{$data->mother_address}}">

                  नागरिकता:
                  <input type="text" class="dashed-input-field" placeholder="   *" name="mother_citi" required="required" value="{{$data->mother_citi}}">

                </p>

                <p>
                पति / पत्नीको नाम, थर  : <input type="text" class="dashed-input-field" placeholder="   *" name="name_of_spouse" required="required" value="{{$data->name_of_spouse}}">

                  ठेगाना:
                  <input type="text" class="dashed-input-field" placeholder="   *" name="spouse_address" required="required" value="{{$data->spouse_address}}">

                  नागरिकता:
                  <input type="text" class="dashed-input-field" placeholder="   *" name="spouse_citi" required="required" value="{{$data->spouse_citi}}">

                </p>

               

                <p>
                  संरक्षकको नाम, थर  : <input type="text" class="dashed-input-field" placeholder="   *" name="sam_name" required="required" value="{{$data->sam_name}}">  ठेगाना <input type="text" class="dashed-input-field" placeholder="   *" name="sam_address" required="required" value="{{$data->sam_address}}"> 
                </p>

               
              </div>

              <div class="col-md-12">
                 
                  <p align="center"><b>मैले माथि लेखिदिएको व्यहोरा ठिक साँचो हो।झुट्ठा ठहरे कानुन बमोजिम सँहुला, बुझाउँला।</b></p>
        </div>
                <div class="col-md-6">
                      <table border="1" style=" border-color: transparent;">
                    <tbody><tr>
                      <td colspan="2" style="text-align: center"><b>औंठा छाप</b></td>
                    </tr>
                    </tbody><tbody style=" border:solid 1px #000;">
                    <tr>

                      <td align="center"><b>दायाँ</b></td>
                      <td align="center"><b>बायाँ</b></td>
                      
                   </tr>
                    
                     
                      <tr>
                        <td height="120px" width="120px"> </td>
                        <td height="120px" width="120px"> </td>
                      </tr>
                     </tbody>
                  </table>

                </div>

            <!-- Nibedak Block -->

                <div class="col-md-6">


                 <p><b><u> भवदिय</u></b> </p>
                 <p>निवेदकको दस्तखत :</p>
                  
                 <p>मिति<input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" required="required" name="application_date" id="application_date" onfocus="showNdpCalendarBox('application_date')" value="{{$data->application_date}}"></p>
                 
               </div>

           <div class="col-md-12">
               <!-- Sifaris -->

               <h4 align="center">  नगरपालिकाको सिफारिस </h4>
               <p>

                <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="local_add" value="{{$data->local_add}}"> वडा नं.   <input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="local_ward" value="{{$data->local_ward}}"> मा मिति <input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" required="required" id="applicant_dob" name="appsifaris_date" onfocus="showNdpCalendarBox('applicant_dob')" value="{{$data->appsifaris_date}}">मा जन्म भई हाल <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="app_cur_district" value="{{$data->app_cur_district}}"> वडा नं. <input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="app_cur_np" value="{{$data->app_cur_np}}">मा स्थायी रुपमा बसोबास गरी आएका यसमा लेखिएका
                  <select name="guardian_title" >
<option value="श्रीमान" {{ $data->guardian_title == 'श्रीमान' ? 'selected' : ''}}>श्रीमान</option>
<option value="श्रीमती" {{ $data->guardian_title == 'श्रीमती' ? 'selected' : ''}}>श्रीमती</option>
</select>
                  <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="guardian_name" value="{{$data->guardian_name}}">को <select name="child_type">
<option value="छोरा" {{ $data->child_type == 'छोरा' ? 'selected' : ''}}>छोरा</option>
<option value="छोरी" {{ $data->child_type == 'छोरी' ? 'selected' : ''}}>छोरी</option>
<option value="पत्नी" {{ $data->child_type == 'पत्नी' ? 'selected' : ''}}>पत्नी</option>
</select>
 वर्ष <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="child_age" value="{{$data->child_age}}"> को 
                <select name="child_title">
<option value="श्री" {{ $data->child_title == 'श्री' ? 'selected' : ''}}>श्री</option>
<option value="सुश्री" {{ $data->child_title == 'सुश्री' ? 'selected' : ''}}>सुश्री</option>
<option value="श्रीमती" {{ $data->child_title == 'श्रीमती' ? 'selected' : ''}}>श्रीमती</option>
</select>
                <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="child_name" value="{{$data->child_name}}">   लाई म राम्ररी चिन्दछु।उपयुक्त लेखिए बमोजिमको निजको व्यहोरा मैले जानेबुझे सम्म साँचो हो।निजलाई 
                  <select name="nagarikta_type1">
<option value="वंशजको नाताले" {{ $data->nagarikta_type1 == 'वंशजको नाताले' ? 'selected' : ''}}>वंशजको नाताले</option>
<option value="जन्मको आधारले" {{ $data->nagarikta_type1 == 'जन्मको आधारले' ? 'selected' : ''}}>जन्मको आधारले</option>
</select>
                 नागरिकताको प्रमाण-पत्र दिए हुन्छ।उक्त विवरण झुटो ठहरे कानुन बमोजिम सहुँला बुझाउँला।</p>
             

             </div>

</div>
<div class="row">
<div class="col-md-7">
  <b>
              <p>मिति<input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" required="required" name="app_date" id="app_date" onfocus="showNdpCalendarBox('app_date')" value="{{$data->app_date}}"></p>
             <p> कार्यालयको नाम र छाप </p>
           </b>
              


           </div>

              <div class="col-md-5">
                 <b>
             <p style="margin-right: 148px;"> <u>सिफारिस गर्नेको :</u></p>
             <p>दस्तखत </p>
             <p>नाम,थर <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="sifaris_username" value="{{$data->sifaris_username}}"></p>
             <p>पद<input type="text" class="dashed-input-field" placeholder="   *" required="required" name="sifaris_userpost" value="{{$data->sifaris_userpost}}"></p>
           </b>
 

           </div>
       </div>
       <hr>
       
       <div class="row">
         <div class="col-md-12">
               <!-- Sifaris -->

                
               <p>

                <input type="text" class="dashed-input-field" name="local_add2" value="{{$data->local_add2}}">बाट सर्जमिन  सनाखतको लागि प्रेषित <input type="text" class="dashed-input-field" name="local_ward2" value="{{$data->local_ward2}}">वडा नं. <input type="text" class="dashed-input-small-field" id="app_name" name="app_name" value="{{$data->app_name}}">बस्ने <input type="text" class="dashed-input-field" name="app_name2" value="{{$data->app_name2}}">को
                <select name="relative_type">
<option value="" selected="selected">छान्नुहोस्</option>
<option value="छोरा" {{ $data->relative_type == 'छोरा' ? 'selected' : ''}}>छोरा</option>
<option value="छोरी" {{ $data->relative_type == 'छोरी' ? 'selected' : ''}}>छोरी</option>
<option value="पत्नी" {{ $data->relative_type == 'पत्नी' ? 'selected' : ''}}>पत्नी</option>
</select>

                  वर्ष  <input type="text" class="dashed-input-small-field" name="app_age"
                   value="{{$data->app_age}}"> का 
                  <select name="relative_title">
<option value="" selected="selected">छान्नुहोस्</option>
<option value="श्री" {{ $data->relative_title == 'श्री' ? 'selected' : ''}}>श्री</option>
<option value="सुश्री" {{ $data->relative_title == 'सुश्री' ? 'selected' : ''}}>सुश्री</option>
<option value="श्रीमती" {{ $data->relative_title == 'श्रीमती' ? 'selected' : ''}}>श्रीमती</option>
</select>
                  <input type="text" class="dashed-input-field" name="app_child" value="{{$data->app_child}}">ले एन र नियमले ताकेको प्रमाण पेश गर्न नसकेकोले निजलाई स्थलगत सर्जमिन र सनाखतको प्रकृया अवलम्बन गरी वंशजको

                  <select name="nagarikta_type2">
<option value="" selected="selected">छान्नुहोस्</option>
<option value="नाताको " {{ $data->nagarikta_type2 == 'नाताको ' ? 'selected' : ''}}>नाताको </option>
<option value="जन्मको" {{ $data->nagarikta_type2 == 'जन्मको' ? 'selected' : ''}}>जन्मको </option>
</select>
 आधारमा
                  नागरिकता सम्बन्धित निर्णय हुन प्रेषित गरीएको छ।</p>
             </div>
      </div>
      <div class="row">
        <div class="col-md-6">
               <p>मिति<input type="text" class="dashed-input-field ndp-nepali-calendar" name="application_date2" id="application_date2" onfocus="showNdpCalendarBox('application_date2')" value="{{$data->application_date2}}"></p>
             <p> कार्यालयको नाम र छाप  </p>
              


           </div>

              <div class="col-md-6">

              
             <p align="right">दस्तखत </p>
             <p align="right">नाम,थर <input type="text" class="dashed-input-field" name="off_name" value="{{$data->off_name}}"></p>
             <p align="right">पद<input type="text" class="dashed-input-field" name="off_post" value="{{$data->off_post}}"></p>


           </div>
       </div>

       <div class="row">
        <div class="col-md-12">
          <h4 align="center"><u> कार्यालयले भर्ने </u></h4>
          <div class="table-responsive">
        <table border="1" class="table table-bordered">
          <tbody><tr>
            <td>
              <p>
                <select name="nibedak_type">
<option value="" selected="selected">छान्नुहोस्</option>
<option value="निवेदक 
  " {{ $data->nibedak_type == 'निवेदक' ? 'selected' : ''}}>निवेदक</option>
<option value="निवेदीका" {{ $data->nibedak_type == 'निवेदीका' ? 'selected' : ''}}>निवेदीका</option>
</select>

<input type="text" class="dashed-input-field" name="nibedak" value="{{$data->nibedak}}">मेरो आफ्नो 
  <input type="text" class="dashed-input-field" name="nibedak_relation" value="{{$data->nibedak_relation}}">नाताको हुन्।निजलाई वंशजको
<select name="nagarikta_type">
<option value="" selected="selected">छान्नुहोस्</option>
<option value="नाताले" {{ $data->nagarikta_type == 'निवेदीका' ? 'selected' : ''}}>नाताले</option>
<option value="जन्मको आधारले" {{ $data->nagarikta_type == 'जन्मको आधारले' ? 'selected' : ''}}>जन्मको आधारले</option>
</select>

  <!-- वंशजको नाताले /जन्मको आधारले -->

   नेपाली नागरिकताको प्रमाण-पत्र दिएमा पछि सम्म फरक पर्ने छैन।फरक परेमा कानुन बमोजिम सँहुला बुझाउँला भनी कार्यालयमा उपस्थित भई सनाखत सहीछाप गर्नेको 
              </p>
              <p> नाम<input type="text" class="dashed-input-field" name="s_name" value="{{$data->s_name}}"></p>
              <p> ना.प्र.प.नं.<input type="text" class="dashed-input-field" name="s_nagarikta" value="{{$data->s_nagarikta}}"></p>
              <p> सहीछाप</p>
              <p> मिति<input type="text" class="dashed-input-field ndp-nepali-calendar" name="s_date" id="s_date" onfocus="showNdpCalendarBox('s_date')" value="{{$data->s_date}}"></p>

            </td>

            <td><p>माथिको विवरण बमोजिम मेरो रोहवरमा सनाखत सहीछाप भएको ठिक साँचो हो।माथि विवरण ठिक दुरुस्त  छ, फरक छैन।फरक परेमा कानुन बमोजिम सँहुला बुझाउँन मञ्जुर छु भनी सहीछाप गर्ने निवेदक   </p>
              <p> नाम<input type="text" class="dashed-input-field" name="s2_name" value="{{$data->s2_name}}"></p>
             
              <p> सहीछाप </p>
              <p> मिति<input type="text" class="dashed-input-field ndp-nepali-calendar" name="s2_date" id="s2_date" onfocus="showNdpCalendarBox('s2_date')" value="{{$data->s2_date}}"></p>
            </td>
          </tr>
        </tbody></table>
        <table border="1" class="table table-bordered">

          <tbody><tr>
            <td colspan="2"><h4 align="center"><u>
           
सर्जमिनमा बस्नेको नाम, थर, ठेगाना</u>
</h4>
<!--  -->
<table class="table table-bordered" style=" background:transparent;" cellpadding="5" id="sarjamin_table">
    <tbody>
      <tr>
       
        <td>
        <textarea class="form-control" name="si_name">{{$data->si_name}}</textarea> </td>
       
      </tr>
    </tbody>
  </table>
<!--  -->
</td>
</tr>
</tbody></table>

  <table border="1" class="table table-bordered">

          <tbody><tr>
            <td colspan="2"><h4 align="center"><u>
सनाखत गर्ने व्यक्तिको  नाम, थर, ठेगाना</u></h4>
<!--  -->
  <table class="table-bordered table" cellpadding="5" style="background:transparent;" id="sanakhat_table">
    <tbody>
      <tr>
       
        <td>
          <textarea class="form-control" name="se_name">{{$data->se_name}}</textarea>
        </td>
        
      </tr>
    </tbody>
  </table>
<!--  -->

</td>
          </tr>
        </tbody></table>

       </div>
   </div>
</div>
<div class="row">
<div class="col-md-12">

  <h4 align="center"><u>निर्णय  </u></h4>
  <p>यस अनुसूचीमा भएको सिफारिस निवेदकको <input type="text" name="sifaris_nibedan" class="dashed-input-field" value="{{$data->sifaris_nibedan}}">का सनाखत सहीछाप र संलग्न निम्न प्रमाण-पत्रका आधारमा निवेदकलाई वंशजको
<select name="nagarikta_type3">
<option value="" selected="selected">छान्नुहोस्</option>
<option value="नाताले" {{ $data->nagarikta_type3 == 'नाताले' ? 'selected' : ''}}>नाताले</option>
<option value="जन्मको आधारले" {{ $data->nagarikta_type3 == 'जन्मको आधारले' ? 'selected' : ''}}>जन्मको आधारले</option>
</select>
    नेपाली नागरिकताको प्रमाण-पत्र दिन उपयुक्त हुने देखि निर्णयार्थ पेश गरेको छु।</p>
  <h4 align="center"><u>संलग्न प्रमाणपत्रहरु</u></h4>
  <!--  -->
  <table cellpadding="5" style="background:transparent;" class="table table-bordered" id="paper_table">
    <tbody>
      <tr>
       
        <td><textarea name="paper_name" class="form-control">{{$data->paper_name}}</textarea> </td>
       
      </tr>
    </tbody>
  </table>
<!--  -->
</div>
</div>
<div class="row">
  <b>
<div class="col-md-4">
  <p>वितरित ना. प्र. नं.<input type="text" class="dashed-input-field" name="bitarit_num" value="{{$data->bitarit_num}}">
    </p>
    <p>
मिति <input type="text" class="dashed-input-field ndp-nepali-calendar" id="bitarit_date" name="bitarit_date" onfocus="showNdpCalendarBox('bitarit_date')" value="{{$data->bitarit_date}}"> </p>
  </div>
<div class="col-md-3">
   
  <p>सनाखत गराउने </p>
  </div>
  <div class="col-md-3">
   
  <p>पेश गर्ने </p>
  </div>
  <div class="col-md-2">
  
  <p>सदर गर्ने  </p>
  </div>
</b>
  </div>

       <div class="row">
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
  
            <center><input type="submit" class="btn btn-success" name="save_citizenship_certificate_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
         </div>
     </div>
 </div>
</form>
</div>
</div>
</div>
</div>
@stop