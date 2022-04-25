  <header>
    <div class="row">
      <div class="col-md-3">
        <p><img src="{{asset('images/logo.png')}}"> </p>
      </div>
      <div class="col-md-9 head-edt" style="margin-top: -20px;">
        <form action="{{url('CitizenSifaris')}}" method="post">
        <p align="left"><b>{{-- पत्र संख्या --}} प. सं. :<input type="text" class="dashed-input-field" placeholder="   *" name="patra_sankhya" value="२०७५/०७६" id="patra_sankhya" required="required"> </b></p>

      <p align="left"><b>च. {{-- चलानी --}} नं. :<input type="text" class="dashed-input-field" name="chalani_no" id="chalani_no"></b></p>
      </div>
    </div>
    <div class="row">
<div class="col-md-9 title_header" style="margin-left: 100px;margin-top: -175px !important;">
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
          <h2 class="font-size-24">  {{$local_state[0]->local_state_name}} </h2>
          @if(auth()->user()->isAdmin != 0)  
          <h1 class="name_header">
                    
          {{Helpers::convertNos(auth()->user()->isAdmin)}} नं. वडा कार्यालय 
          </h1>
          @endif
          <h3 align="center" class="sm-head"> {{Helpers::wardNames(Helpers::convertNos(auth()->user()->isAdmin))}} ,{{$district[0]->district_name}}</h3>
          {{-- <h3 align="center" class="sm-head">{{$provience[0]->province_name}}, नेपाल</h3> --}}
        @endif

    </div>
    <div class="col-md-3 " style="margin-left: 786px;margin-top: -165px;">
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
