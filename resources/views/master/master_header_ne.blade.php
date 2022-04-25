 <?php if(auth()->user()->isAdmin != 0) { ?>वडा नं.<b> 
  <?php if(auth()->user()->isAdmin == 1){
    echo "१";
  }else if(auth()->user()->isAdmin == 2){
    echo "२";
  }else if(auth()->user()->isAdmin == 3){
    echo "३";
  }else if(auth()->user()->isAdmin == 4){
    echo "४";
  }else if(auth()->user()->isAdmin == 5){
    echo "५";
  }else if(auth()->user()->isAdmin == 6){
    echo "६";
  }else if(auth()->user()->isAdmin == 7){
    echo "७";
  }else if(auth()->user()->isAdmin == 8){
    echo "८";
  }else if(auth()->user()->isAdmin == 9){
    echo "९";
  }else if(auth()->user()->isAdmin == 10){
    echo "१०";
  }else if(auth()->user()->isAdmin == 11){
    echo "११";
  }else if(auth()->user()->isAdmin == 12){
    echo "१२";
  }
else if(auth()->user()->isAdmin == 12){
    echo "१३";
  }
  else if(auth()->user()->isAdmin == 12){
    echo "१४";
  }
  else if(auth()->user()->isAdmin == 12){
    echo "१५";
  }
  else if(auth()->user()->isAdmin == 12){
    echo "१६";
  }
  else if(auth()->user()->isAdmin == 12){
    echo "१७";
  }
  else if(auth()->user()->isAdmin == 12){
    echo "१८";
  }
  else if(auth()->user()->isAdmin == 12){
    echo "१९";
  }
  else if(auth()->user()->isAdmin == 12){
    echo "२०";
  }
  else if(auth()->user()->isAdmin == 12){
    echo "२१";
  }
  else if(auth()->user()->isAdmin == 12){
    echo "२२";
  }
  else if(auth()->user()->isAdmin == 12){
    echo "२३";
  }
  else if(auth()->user()->isAdmin == 12){
    echo "२४";
  }
  else if(auth()->user()->isAdmin == 12){
    echo "२५";
  }
  else{

  }?>,<?php } ?> {{$local_state[0]->local_state_name}} </b><br>
                  <b>{{$district[0]->district_name}} जिल्ला,</b> <b>{{$provience[0]->province_name}}{{-- , नेपाल --}}</b>
                  
