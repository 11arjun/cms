<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OccupationVerification extends Model
{
    protected $table = "occupation_verifications";

    protected $fillable = [
    	'applicant_name','father_name','mother_name','previous_vdc_name','previous_ward_no','previous_district','business_name','ref_no','issued_date','user_id','nibedak_name','nibedak_address','nibedak_citizenship_no','nibedak_nid'
    ];
}
