<header <?php echo empty($print_mode)?"":$print_mode;?>>
      <div class="row fontSize">
    <div class="col-md-12" style="margin: 40px 0px 20px 0px; position:relative;" >
      <div class="row">
      <div class="col-md-2 left-header" style="padding-left: 10px position:absolute; margin-left:7%;">
        <div class="row" style="width: 50%"><p><img src="{{asset('images/logo.png')}}"> </p></div>
        <div class="row">
          <p align="left"><b><span style="margin-left: 11px;">प सं:</span>&nbsp;<span class="patraSankya">{{$patraSankhya}}</span></b></p>
          <p align="left"><b><span style="margin-left: 11px;">च नं.:</span>&nbsp;<span class="chalani_no">
          {{$chalaniNo}}</span></b></p>
        </div>
        
      </div>
      <div class="col-md-8" style="position: absolute;margin-left:18%;">
         @if(auth()->user()->isAdmin == 0)
          <h3 align="center" class="font-size-24" >  
            {{$local_state[0]->local_state_name}} 
          </h3>
            <h2 class="name_header">  
            गाउँ कार्यपालिकाको कार्यालय 
          </h2>
            <p align="center" class="sm-head">
              {{Helpers::wardNames(auth()->user()->isAdmin)}} ,
              {{$district[0]->district_name}}
            </p>
        @else
        <p align="center" class="font-size-24"><b> {{$local_state[0]->local_state_name}} </b></p>
          @if(auth()->user()->isAdmin != 0)  
          <p align="center" class="name_header">
          <b> {{Helpers::convertNos(auth()->user()->isAdmin)}} नं वडा कार्यालय </b></p>
          @endif
          <h4 align="center" class="sm-head"> {{Helpers::wardNames(Helpers::convertNos(auth()->user()->isAdmin))}} ,{{$district[0]->district_name}}</h4>
          {{-- <h3 align="center" class="sm-head">{{$provience[0]->province_name}}, नेपाल</h3> --}}
        @endif                

        </div>
        <div class="col-md-2 right-header" style="position: absolute; margin-left:80%;">
          <div class="side-info" style="margin-left: -90px; position: absolute; margin-top: 10px; font-size:12px;">
          <span>फोन: ०८६-४२०१८० </span><br>
          <span>फ्याक्स:०८६-४२०१८० </span><br>
          <span>Email: ito.mallaranimun@gmail.com</span><br>
          <span>Website: www.mallaranimun.gov.np</span><br>
          <span>{{$provience[0]->province_name}}, नेपाल</span>
          </div>

        </div>
      </div>
      </div>
    </div>
    <div class="row" >
      <div class="col-md-12">
        <hr style="    background-color: red;
    height: 2px;
    padding: 0;
    margin: 0;">
      </div>
</header>