<header <?php echo empty($print_mode)?"":$print_mode;?>>
      <div class="row fontSize">
    <div class="col-md-12" style="margin: 40px 0px 20px 0px; position:relative;" >
      <div class="row">
      <div class="col-md-2 left-header" style="padding-left: 10px position:absolute; margin-left:7%;">
        <div class="row" style="width: 50%"><p><img src="{{asset('images/logo.png')}}"> </p></div>
        <div class="row">
          <p align="left"><b>Ref No : {{-- {{$data->ref_no}} --}}</b></p>
          
          </span></b></p>
        </div>
        
      </div>
      <div class="col-md-8" style="position: absolute;margin-left:18%;">
         @if(auth()->user()->isAdmin == 0)
          <h3 align="center" class="font-size-24" >  
            {{$local_state[0]->local_state_name_english}}
          </h3>
            <h2 class="name_header">  
            Office of the Municipal Executive
          </h2>
            <p align="center" class="sm-head">
              {{Helpers::wardNames(auth()->user()->isAdmin)}} ,
              {{$district[0]->district_name}}
            </p>
        @else
        <p align="center" class="font-size-24"><b> {{$local_state[0]->local_state_name_english}}</b></p>
          @if(auth()->user()->isAdmin != 0)  
          <p align="center" class="name_header">
          <b> {{auth()->user()->isAdmin}} No. Ward Office </b></p>
          @endif
          <h4 align="center" class="sm-head"> 
            {{Helpers::wardNames(auth()->user()->isAdmin)}} ,{{$district[0]->district_name_english}}
          </h4>
          {{-- <h3 align="center" class="sm-head">{{$provience[0]->province_name}}, नेपाल</h3> --}}
        @endif                

        </div>
        <div class="col-md-2 right-header" style="position: absolute; margin-left:80%;">
          <div class="side-info" style="margin-left: -90px; position: absolute; margin-top: 10px; font-size:12px;">
          <span>Phone: 086-420180</span><br>
          <span>Fax: 086-420180 </span><br>
          <span>Email: ito.mallaranimun@gmail.com</span><br>
          <span>Website: www.mallaranimun.gov.np</span><br>
          <span>{{$provience[0]->province_name_english}}, Nepal</span>
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
    margin:10px 0 0 0;">
      </div>
</header>