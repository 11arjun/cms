<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourtFeeNarakhneSifaris extends Model
{
    protected $table = "court_fee_narakhne_sifaris";

    protected $fillable = [
      'id','patra_sankhya','chalani_no','issued_date','local_state','state','sabik_address','applicant_title','applicant_name','relation_title',
      'second_applicant_title','second_applicant_name','case_name','case_date','user_id','nibedak_name',
      'nibedak_address','nibedak_citizenship_no','nibedak_nid'
    ];
}
