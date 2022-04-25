<?php
namespace App\Helper;

use App\User;
use Auth;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Mail;

class Helpers {
	
public static function convertNos($nos){
    $n = '';
    switch($nos){
      case "०": $n = 0; break;
      case "१": $n = 1; break;
      case "२": $n= 2; break;
      case "३": $n = 3; break;
      case "४": $n = 4; break;
      case "५": $n = 5; break;
      case "६": $n = 6; break;
      case "७": $n = 7; break;
      case "८": $n = 8; break;
      case "९": $n = 9; break;
      case "0": $n = "०"; break;
      case "1": $n = "१"; break;
      case "2": $n = "२"; break;
      case "3": $n = "३"; break;
      case "4": $n = "४"; break;
      case "5": $n = "५"; break;
      case "6": $n = "६"; break;
      case "7": $n = "७"; break;
      case "8": $n = "८"; break;
      case "9": $n = "९"; break;
      case "10": $n = "१०"; break;
      case "11": $n = "११"; break;
      case "12": $n = "१२"; break;
      case "13": $n = "१३"; break;
      case "14": $n = "१४"; break;
      case "15": $n = "१५"; break;
      case "16": $n = "१६"; break;
      case "17": $n = "१७"; break;
      case "18": $n = "१८"; break;
      case "19": $n = "१९"; break;
      case "20": $n = "२०"; break;
      case "21": $n = "२१"; break;
      case "22": $n = "२२"; break;
      case "23": $n = "२३"; break;
      case "24": $n = "२४"; break;
      case "25": $n = "२५"; break;
   }
   return $n;
}

public static function wardNames($nos){
    $n = '';
    switch($nos){
      case "०": $n = "खलंगा"; break;
      case "१": $n = "चुजाँ"; break;
      case "२": $n= "कुडार"; break;
      case "३": $n = "निशानटाकुरा"; break;
      case "४": $n = "खलंगा"; break;
      case "५": $n = "कुमिकोट"; break;

      case "0": $n = "Khalanga"; break;
      case "1": $n = "Chunja"; break;
      case "2": $n = "Kudar"; break;
      case "3": $n = "Nishantakura"; break;
      case "4": $n = "Khalanga"; break;
      case "5": $n = "KumiKot"; break;

   }
   return $n;
}

}