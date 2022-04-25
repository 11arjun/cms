<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KothaKhaliSifaris extends Model
{
    protected $table = "kotha_khali_sifaris";

    protected $fillable = [
      'id','patra_sankhya','chalani_no','issued_date','letter_subject','local_state','sabik_address',
      'applicant_title','applicant_name','user_id','nibedak_name','nibedak_address','nibedak_citizenship_no',
      'nibedak_nid'
    ];
}
