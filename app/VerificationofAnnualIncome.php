<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerificationofAnnualIncome extends Model
{
    protected $table = 'verification_of_annual_income';

     protected $fillable=[
    'ref_no',
	'issued_date',
	'person_title',
	'person_name',
	'address',
	'total_income',
	'applicant_relation',
	'parties_name',
	'annual_income',
	'remarks',
	'total_nepali_rs',
	'total_us_dollar',
	'us_dollar',
    'officer_title',
    'officer_name',
	'user_id',
	'nibedak_name',
    'nibedak_address',
    'nibedak_citizenship_no',
    'nibedak_nid',
	
	];
}
