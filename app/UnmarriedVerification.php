<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnmarriedVerification extends Model
{
    protected $table = 'unmarriedverification';

     protected $fillable=[
    'ref_no',
	'issued_date',
	'applicant_title',
	'applicant_name',
	'applicant_gender',
	'applicant_father_name',
	'applicant_mother_name',
	'applicant_citizenship_no',
	'permanent_ward_no',
	'permanent_district',
	'previous_vdc',
	'previous_ward_no',
	'previous_district',
	'till_date',
	'user_id',
	'nibedak_name',
    'nibedak_address',
    'nibedak_citizenship_no',
    'nibedak_nid',
	
	];
}
