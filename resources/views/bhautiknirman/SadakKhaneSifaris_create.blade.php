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
          <h2>सडक खन्ने स्वीकृतिको सिफारिस </h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>


        <form action="{{url('sadakkhanesifaris')}}" method="post">
           {{ csrf_field() }}
          <div class="x_content">
              @include('master.master_header_ne2')
            <!-- <div class="col-md-12">

              <div class="col-md-2">
                <p><img src="{{asset('images/logo.png') }}"> </p>
              </div>
              
              <div class="col-md-8">

               <p align="center" class="font-size-24"><b> {{$local_state[0]->local_state_name}} </b></p>
              <b> <p align="center" class="font-size-24"> 
               {{Helpers::convertNos(auth()->user()->isAdmin)}} नं वडा कार्यालय,</b><br>
                  <?php echo empty($ward_office)?"":$ward_office;?></p> </b></p>
                <h3 align="center" class="sm-head">{{Helpers::convertNos(auth()->user()->provience_id)}} नं. प्रदेश, नेपाल</h3>

              </div>
              <div class="col-md-2">


              </div>
            </div>
 -->
            <div class="col-md-12">
              <div class="col-md-6">
               <p align="left"><b>पत्र संख्या&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankya" id="patra_sankya"  required="required"/></b></p>
               <p align="left"><b>चलानी नं.&nbsp;<input type="text" class="dashed-input-field" placeholder="   *"   name="chalani_no" id="chalani_no" required="required"/></b></p>
             </div>
             <div class="col-md-6">
              <p align="right"><b>मिति:&nbsp;<input type="text" class="dashed-input-field" placeholder="   *" name="issued_date" id="issued_date" required="required"/></b></p>
            </div>
          </div>






          <div class="col-md-12">
            <p align="center" class="font-size-24">
              <h4 align="center"><b><u>विषय: सडक खन्ने स्वीकृति |</u></b> </h4>
            </p>
          </div>
          <div class="col-md-12">
            <p> 

                <select name= "person_title">
                    <option value="श्री">श्री</option>
                    <option value="सुश्री">सुश्री</option>
                     <option value="श्रीमती">श्रीमती</option>
                </select>


              <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="person_name"/>
            </p>
            <p>
           {{$local_state[0]->local_state_name}} वडा न.<b>{{Helpers::convertNos(auth()->user()->isAdmin)}} </b>
           </p>
           <p>
             <?php echo empty($ward_office)?"":$ward_office; ?> |
           </p>



        







           <p align="left">
            तपाईको त्यस कार्यालयको मिति   <input type="text" class="dashed-input-field ndp-nepali-calendar" placeholder="   *" required="required" name="application_submit_date" id="application_submit_date" onfocus="showNdpCalendarBox('application_submit_date')"/> को निवेदन पत्र अनुसार निम्न बमोजिम स्थानको <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="sadak_location"/> सडक खन्ने अनुमति दिईएको छ | लेखिए बमोजिमको शर्तहरु पालना गरी  यो पत्र प्राप्त भएको मितिले <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="work_complete_days"/> दिन भित्र कार्य सम्पन्न गर्नुहोला | </p>
            <p><b>खन्न स्वीकृति प्रदान गरको सडक <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="swikrit_sadak_name"/></b></p>

            <p><b>सडक खन्न स्वीकृति प्रदान गरको इकाइ <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="swikrit_pradan_unit"/></b>बर्ग मिटर</p>
            <p><b>सडक खन्न स्वीकृति प्रदान धरौटी रकम रु.<input type="text" class="dashed-input-field" placeholder="   *" required="required" name="deposite_amount"/></b></p>
            <p><b>शर्तहरु</b></p>
            <p>१. सडक खन्नु अघि खन्ने ठाउँको चारैतिर कमसेकम १०० मिटर टाढाबाट देखिने गरी  १ मिटर अग्लो काठको बार लागाउनु पर्दछ र बारको चारैतिर रातो झण्डा राखी सवारी आवागमन बाधा नपर्ने व्यवस्था मिलाउनु पर्नेछ |</p>
            <p>२. सडक खनेर निस्केको माटो, ढुङ्गा, बालुवा, आदि बाट सवारीको आवागमनमा बाधा नपर्ने व्यवस्था मिलाउनु पर्नेछ | </p>
            <p>३. काम समाप्त भएपछि पुरानै अबस्थामा हुने गरी मर्मत गर्नु पर्दछ| </p>
            <p>४. सम्बन्धित कार्यालयसंग सम्पर्क राखी लाइन पाएपछि मात्र काम सुरु गर्नु पर्नेछ| </p>
            <p>५. महत्वपूर्ण सडक खन्ने स्वीकृतिका हकमा सडक खन्न थालेको दिनमा काम समाप्त गर्नु पर्नेछ | कुनै कारणवश सोही दिनमा सम्पन्न गर्न नसकी रातभर यथावत राख्नुपर्ने भएमा सम्बन्धित कार्यलय /व्यक्तिले यस कार्यलयसंग सम्पर्क राखी ब्लिकिंग लाइट बाली राख्न्नु पर्नेछ| </p>

            <p>६.सडक खन्दा सडक भित्र भूमिगत अबस्थामा रहेको खानेपानी, बिधुत, टेलीफोन आदिसंग सम्बन्धित लाइन टुटफुट हुन गएमा सोको मर्मत गर्ने जिम्मेवारी पनि स्वीकृति लिन खनेका व्यक्ति / संस्थाको नै हुनेछ| </p>

            <p>७.पिच सडक खन्ने काम रातको १० बजेदेखि बिहान ५ बजे सक्नु पर्नेछ | </p>
            <p>८.उक्त कार्य पानी नपरेको दिन गर्नु पर्नेछ | </p>
            <p>९.पाइप बिछ्याउनु पर्ने अबस्थामा सडकभन्दा कम्तीमा १ फिट ६ इन्च तलबाट पाइप बिछ्यानु पर्नेछ | </p>
            <p>१०. सडक खन्ने ठाउँमा पुन: निर्माण गरी पर्ववत आवस्थामा पुर्याउने जिम्मा सम्बन्धित व्यक्ति वा संस्थाको नै हुने छ |</p>
            <p>११.तोकिए बमोजिम धरौटी रकम सम्बन्धनमा प्राबिधिक प्रतिवेदन प्राप्त भए पश्चात फिर्ता गरी ने छ |</p>
            <p>१२.कार्य प्रयोजन समाप्त भएको मितिले ठीक एक वर्षपछि धरौटी रकम फिर्ता हुने छैन |</p>

          </div>
          <div class="col-md-12">
            <div class="col-md-6">
              <p><b> निवेदकको साबिकको ठेगाना </b></p>
              <p><b> <input type="text" class="dashed-input-field" placeholder="   *" required="required" name="applicant_address"/></b></p>
              </div>
              <div class="col-md-6">
              <p class="btm-last">  वडा अध्यक्ष </p>

            </div>
          </div>
          <div class="col-md-12">
            <p><b> बोधार्थ </b></p>
            <p><b> १. श्री प्राबिधिक शाखा : </b></p>
            <p>माथि उल्लेखित शर्तहरु पालना भए नभएको अनुगमन गरी प्रतिवेदन पेश गर्नु हुन | </p>
            <p><b> २. श्री ट्राफिक प्रहरी कार्यलय : </b></p>
            <p>सवारी साधनको सहजताको लागि अनुरोध छ | </p>
          </div>



          <div class="col-md-12">
            <hr/>
              <input type="text" name="user_id" value="{{auth()->user()->isAdmin}}" style="display: none;">
              
            <center><input  type="submit" class="btn btn-success" name="save_sadak_khane_sifaris_data" value="रेकर्ड सेभ गरी प्रिन्टको लागि तयार गर्नुहोस"></center>
          </div>
        </div>
      </div>

    </form>

  </div>
</div>
</div>
</div>

@stop