<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SadakKhaneSifaris extends Model
{
    protected $table = 'sadak_khane_sifaris';

     protected $fillable=[
    'patra_sankya',
	'chalani_no',
	'issued_date',
	'person_title',
	'person_name',
	'application_submit_date',
	'sadak_location',
	'work_complete_days',
	'swikrit_sadak_name',
	'swikrit_pradan_unit',
	'deposite_amount',
	'applicant_address',
	'user_id',
	
	];
}
