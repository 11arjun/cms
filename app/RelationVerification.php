<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelationVerification extends Model
{
    protected $table = 'relation_verifications';

    protected $fillable = [
    	'ref_no','issued_date','applicant_title','applicant_name','previous_vdc_name','previous_ward_no','previous_district','user_id','nibedak_name','nibedak_address','nibedak_citizenship_no','nibedak_nid'
    ];

    public function relationverifydetail(){
		return $this->hasMany('App\RelationVerificationDetail','id','relation_id');    	
    }
}
