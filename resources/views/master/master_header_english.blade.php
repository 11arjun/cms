<header>
  <div class="row">
    <div class="col-md-3">
      <p><img src="{{asset('images/logo.png')}}"> </p>
    </div>
    <div class="col-md-9 head-edt" style="margin-top: -20px;">
      <p align="left"><b>Ref No.<input class="dashed-input-field" placeholder="   *" name="ref_no" required="required" type="text"/></b></p>
    </div>

  </div>
  <div class="row">
    <div class="col-md-9 title_header" style="margin-left: 100px;margin-top: -175px !important;">
        <h2 class="font-size-24">  {{$local_state[0]->local_state_name_english}} </h2>
        
    @if(auth()->user()->isAdmin != 0)
      <h1 class="name_header">
        {{auth()->user()->isAdmin}} No. Ward Office 
      </h1>
    @else
        <h1 class="name_header">
        Office of the Municipal Executive
      </h1>
    @endif
      <h3 align="center" class="sm-head"> {{Helpers::wardNames(auth()->user()->isAdmin)}} , {{$district[0]->district_name_english}}</h3>
      {{-- <h3 align="center" class="sm-head">{{$provience[0]->province_name_english}}, Nepal</h3> --}}
    </div>
    <div class="col-md-3" style="margin-left: 786px;margin-top: -165px;">
      <div class="side-info">
          <span>Phone: 086-420180</span><br>
          <span>Fax: 086-420180 </span><br>
          <span>Email: ito.mallaranimun@gmail.com</span><br>
          <span>Website: www.mallaranimun.gov.np</span><br>
          <span>{{$provience[0]->province_name_english}}, Nepal</span>
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
    </div>
</header>
