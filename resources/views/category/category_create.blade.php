@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Category Arrangements</div>

                <div class="panel-body">
                    @if(Session::has('message'))
<p class="alert alert-info">{{ Session::get('message') }}</p>
@endif
                     <form action="{{url('category')}}" method="post">
          	 {{ csrf_field() }}



                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">सिफारिस शिर्षक</label>

                            <div class="col-md-6">
                               <select class="form-control" name="sifaris_title">
                               	<option value="रास्ट्रिय पञ्जीकरण">रास्ट्रिय पञ्जीकरण</option>
                               	<option value="नेपाली नागरिकता">नेपाली नागरिकता </option>
                               	<option value="घर / जग्गा जमिन">घर / जग्गा जमिन</option>
                               	<option value="संघ संस्था">संघ संस्था</option>
                               	<option value="व्यापार / व्यवसाय">व्यापार / व्यवसाय</option>
                               	<option value="शैक्षिक">शैक्षिक </option>
                                <option value="भौतिक निर्माण">भौतिक निर्माण</option>
                               	<option value="English Format">English Format</option>
                               	<option value="आर्थिक">आर्थिक</option>
                                <option value="सामाजिक / पारिवारिक">सामाजिक / पारिवारिक</option>
                               	<option value="बैंक / वित्तीय संस्था">बैंक / वित्तीय संस्था</option>
                               	<option value="न्याय / कानुन">न्याय / कानुन</option>
                               	<option value="खुल्ला ढाँचा">खुल्ला ढाँचा</option>
                               	<option value="अन्य">अन्य</option>
                               </select>

                            </div>
                        </div>
<br>
<br>
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">सिफारिसको नाम</label>

                            <div class="col-md-6">
                            	<select class="form-control" name="table_readable_name">
                            		<option value="जन्म दर्ता">जन्म दर्ता</option>
                            		<option value="मृत्यु दर्ता">मृत्यु दर्ता</option>
                            		<option value="विवाह दर्ता">विवाह दर्ता</option>
                                    <option value="बसाइँसराई दर्ता">बसाइँसराई दर्ता</option>
                            		<option value="नागरिकता प्रतिलिपि सिफारिस">नागरिकता प्रतिलिपि सिफारिस</option>
                            		<option value="नागरिकता प्रमाणपत्र सिफारिस">नागरिकता प्रमाणपत्र सिफारिस</option>
                            		<option value="नागरिकता सिफारिस">नागरिकता सिफारिस</option>
                            		<option value="नागरिकता निवेदन">नागरिकता निवेदन</option>
                            		<option value="ट्रेस  सिफारिस">ट्रेस  सिफारिस</option>
                            		<option value="नक्सा सिफारिस">नक्सा सिफारिस</option>
                            		<option value="सर्जमिन सिफारिस">सर्जमिन सिफारिस</option>
                            		<option value="वडा सर्जमिन सिफारिस">वडा सर्जमिन सिफारिस</option>
                            		<option value="श्रेस्ता कार्यान्वयन">श्रेस्ता कार्यान्वयन</option>
                            		<option value="श्रेस्ता उपर सिफारिस">श्रेस्ता उपर सिफारिस</option>
                            		<option  value="सर्जमिन  मुचुल्का">सर्जमिन  मुचुल्का</option>
                            		<option value="सर्जमिन  मुचुल्का (गुठी)">सर्जमिन  मुचुल्का (गुठी)</option>
                            		<option value="सूचना टाँस">सूचना टाँस</option>
                            		<option value="सूचना टाँस (गुठी)">सूचना टाँस (गुठी)</option>
                            		<option value="घर जग्गा नामसारी सिफारिस (किटानी)">घर जग्गा नामसारी सिफारिस (किटानी)</option>
                            		<option value="घर कायम सिफारिस">घर कायम सिफारिस</option>
                            		<option value="घर जग्गा नामसारी सिफारिस">घर जग्गा नामसारी सिफारिस</option>
                            		<option value="घर जनाउने सिफारिस">घर जनाउने सिफारिस</option>
                            		<option value="पुर्जामा फोटो टाँस सिफारिस">पुर्जामा फोटो टाँस सिफारिस</option>
                            		<option value="कित्ताकाट सिफारिस">कित्ताकाट सिफारिस</option>
                            		<option value="घरबाटो प्रमाणित">घरबाटो प्रमाणित</option>
                            		<option value="चार किल्ला प्रमाणित">चार किल्ला प्रमाणित</option>
                                <option value="कित्ताकाट सिफारिस">कित्ताकाट सिफारिस</option>
                                <option value="घरबाटो प्रमाणित">घरबाटो प्रमाणित</option>
                            		<option value="जग्गाधनी प्रमाण पत्रको प्रतिलिपि  सिफारिस">जग्गाधनी प्रमाण पत्रको <br>प्रतिलिपि  सिफारिस</option>
                            		<option value="जग्गाधनी प्रमाण पुर्जामा घर कायम सिफारिस">जग्गाधनी प्रमाण पुर्जामा घर कायम <br> सिफारिस</option>
                            		<option value="घर पाताल भएको सिफारिस">घर पाताल भएको सिफारिस</option>
                            		<option value="जमिन र जोत कायम एकै व्यक्ति भएको">जमिन र जोत कायम एकै <br> व्यक्ति भएको</option>
                            		<option value="मोही कट्टा गरिदिने सिफारिस">मोही कट्टा गरिदिने सिफारिस</option>
                            		<option value="जोत छोडपत्र सिफारिस">जोत छोडपत्र सिफारिस</option>
                            		<option value="जोत कायम जग्गा बाडफाड सिफारिस">जोत कायम जग्गा बाडफाड <br> सिफारिस</option>
                            		<option value="मोहिनाम सारी सिफारिस">मोहिनाम सारी सिफारिस</option>
                            		<option value="जमिन र जोत कायम फरक व्यक्ति भएको">जमिन र जोत कायम फरक <br> व्यक्ति भएको</option>
                            		<option value="गैर नाफामुलुक संस्था दर्ता">गैर नाफामुलुक संस्था दर्ता</option>
                            		<option value="संस्था नबिकरण सिफारिस">संस्था नबिकरण सिफारिस</option>
                            		<option value="संस्था दर्ता सिफारिस">संस्था दर्ता सिफारिस</option>
                            		<option value="घ वर्गको निर्माण व्यवसाय इजाजत पत्र">घ वर्गको निर्माण व्यवसाय इजाजत पत्र</option>
                            		<option value="व्यवसाय दर्ता दरखास्त फारम">व्यवसाय दर्ता दरखास्त फारम</option>
                            		<option value="व्यवसाय बन्द">व्यवसाय बन्द</option>
                            		<option value="नयाँ  स्थायी लेखा नं">नयाँ  स्थायी लेखा नं</option>
                            		<option value="कारोबार थप स्थायी लेखा नं.">कारोबार थप स्थायी लेखा नं.</option>
                            		<option value="उद्योग दर्ता सिफारिस">उद्योग दर्ता सिफारिस</option>
                            		<option value="छात्रवृत्ति सिफारिस">छात्रवृत्ति सिफारिस</option>
                            		<option value="विपन्नता सिफारिस">विपन्नता सिफारिस</option>
                                <option value="धारा जडान सिफारिस">धारा जडान सिफारिस</option>
                                <option value="बिजुली जडान सिफारिस">बिजुली जडान सिफारिस</option>
                                <option value="सडक खन्ने स्वीकृतिको सिफारिस">सडक खन्ने स्वीकृतिको सिफारिस</option>
                                <option value="नेपाल सरकारको नाममा बाटो">नेपाल सरकारको नाममा बाटो</option>
                            		<option value="Verification of Annual Income">Verification of Annual Income</option>
                            		<option value="Verification of Annual Income <br>For Japan">Verification of Annual Income For Japan</option>
                            		<option value="Property Valuation">Property Valuation</option>
                            		<option value="Tax Clearance Certificate">Tax Clearance Certificate</option>
                            		<option value="Relationship Verification">Relationship Verification</option>
                            		<option value="Birth Date Verification">Birth Date Verification</option>
                            		<option value="Unmarried Verification">Unmarried Verification</option>
                            		<option value="Marrige Verification">Marrige Verification</option>
                            		<option value="Address Verification">Address Verification</option>
                            		<option value="Occupation Verification">Occupation Verification</option>
                            		<option value="Identity Verification 1">Identity Verification 1</option>
                            		<option value="Identity Verification 2">Identity Verification 2</option>
                            		<option value="उपचारमा आर्थीक सहायता सिफारिस">उपचारमा आर्थीक सहायता सिफारिस</option>
                            		<option value="बार्षिक आम्दानी प्रमाणित">बार्षिक आम्दानी प्रमाणित</option>
                                <option value="अस्थायी बसोबास सिफारिस">अस्थायी बसोबास सिफारिस</option>
                                <option value="स्थायी बसोबास सिफारिस">स्थायी बसोबास सिफारिस</option>
                                <option value="विवाह प्रमणित">विवाह प्रमणित</option>
                                <option value="जन्म मिति प्रमाणित">जन्म मिति प्रमाणित</option>
                                <option value="अविवाहित प्रमाणित">अविवाहित प्रमाणित</option>
                                <option value="नाता प्रमाणित">नाता प्रमाणित</option>
                                <option value="तीन पुस्ते प्रमाणित">तीन पुस्ते प्रमाणित</option>
                                <option value="आन्तरिक बसाइँसराई सिफारिस">आन्तरिक बसाइँसराई सिफारिस</option>
                                <option value="नाबालक परीचय पत्र सिफारिस">नाबालक परीचय पत्र सिफारिस</option>
                                <option value="मृतकका हकदारको सिफारिस">मृतकका हकदारको सिफारिस</option>
                                <option value="अपांग परीचय पत्र सिफारिस">अपांग परीचय पत्र सिफारिस</option>
                            		<option value="खाता खोल्ने सिफारिस">खाता खोल्ने सिफारिस</option>
                            		<option value="खाता बन्द  सिफारिस">खाता बन्द  सिफारिस</option>
                            		<option value="खाता नबिकरण सिफारिस">खाता नबिकरण सिफारिस</option>
                            		<option value="रकम ट्रान्सफर सिफारिस">रकम ट्रान्सफर सिफारिस</option>
                            		<option value="मिलापत्र सिफारिस">मिलापत्र सिफारिस</option>
                            		<option value="सयुक्त दरखास्त सिफारिस">सयुक्त दरखास्त सिफारिस</option>
                            		<option value="वारेस अख्तियारिनामा सिफारिस">वारेस अख्तियारिनामा सिफारिस</option>
                            		<option value="नेपाली भाषामा">नेपाली भाषामा</option>
                            		<option value="अंग्रेजी भाषामा">अंग्रेजी भाषामा</option>
                            		<option value="फरक फरक व्यहोरा प्रमाणित">फरक फरक व्यहोरा प्रमाणित</option>
                            		<option value="फरक फरक नाम थर प्रमाणित">फरक फरक नाम थर प्रमाणित</option>
                            		<option value="फरक फरक जन्म मिति प्रमाणित">फरक फरक जन्म मिति प्रमाणित</option>
                            		<option value="फरक फरक अंग्रेजी हिज्जे प्रमाणित">फरक फरक अंग्रेजी हिज्जे प्रमाणित</option>
                            		<option value="खुलाई पठाएको सिफारिस">खुलाई पठाएको सिफारिस</option>
                            		<option value="जेट मेसिन सिफारिस">जेट मेसिन सिफारिस</option>
                            		<option value="कोठा खाली गर्ने सिफारिस">कोठा खाली गर्ने सिफारिस</option>
                            		<option value="कोर्ट फि नराख्ने सिफारिस">कोर्ट फि नराख्ने सिफारिस</option>
                            		<option value="कक्षा थप स्वीकृतिको सिफारिस">कक्षा थप स्वीकृतिको सिफारिस</option>
                            		<option value="हाजिरी प्रमाणित">हाजिरी प्रमाणित</option>
                            		<option value="उपभोक्ता समिति गठन">उपभोक्ता समिति गठन</option>
                            		<option value="सहुलियत काठ सिफारिस">सहुलियत काठ सिफारिस</option>
                            		<option value="दैविक प्रकोप सिफारिस">दैविक प्रकोप सिफारिस</option>



                            	</select>


                                    <span class="help-block">
                                        <strong>Human Readable Text For Table</strong>
                                    </span>



                            </div>
                        </div>

                          <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Database Table Name</label>

                            <div class="col-md-6">


                            	<?php $len=sizeof($data); ?>
                               <select class="form-control" name="table_name">
                               @for($i=0;$i<$len;$i++)
                               	<option value="{{$data[$i]->table_name}}">{{$data[$i]->table_name}}</option>
                             @endfor
                               </select>

                            </div>
                        </div>


<br>
<br>

                        <div class="form-group" >
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" style="margin-top: 10px;">
                                    Commit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
