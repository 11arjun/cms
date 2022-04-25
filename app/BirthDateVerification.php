<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BirthDateVerification extends Model
{
    protected $table = 'birth_date_verifications';

    protected $fillable = [
    	'ref_no','issued_date','applicant_title','applicant_name','applicant_relation','father_name','mother_name','born_local_state','born_ward_no','born_district','applicant_title_options','applicant_name_options','citizen_issued_district','date_ad','date_bs','user_id','nibedak_name','nibedak_address','nibedak_citizenship_no','nibedak_nid'
    ];
}
