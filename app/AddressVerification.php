<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddressVerification extends Model
{
    protected $table = 'addressverification';
    protected $fillable=[
    	'ref_no',
    	'issued_date',
    	'title_options',
    	'applicant_name',
    	'previous_vdc_name',
    	'previous_ward_no',
    	'nibedak_name',
    	'nibedak_address',
    	'nibedak_citizenship_no',
    	'nibedak_nid',
    	'user_id',
];
}
