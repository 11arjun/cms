<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NabalakParichayePatraSifaris extends Model
{
    protected $table = 'nabalak_parichaye_patra_sifaris';

    protected $fillable = [
    	'patra_sankya','chalani_no','issued_date','office_address','nabalak_relation','nabalak_full_name','nabalak_full_name_english','sex','sex_english','place_of_birth','place_of_birth_english','father_name','father_name_english','mother_name','mother_name_english','guardian_name','guardian_name_english','guardian_address','pa_district','pa_palika','palika_option','pa_ward_no','date_of_birth','date_of_birth_ad','applicant_full_name','relation_with_applicant','application_date','sabik_address','first_person_title','first_person_name','second_person_title','second_person_name','nibedak_name','nibedak_address','nibedak_citizenship_no','nibedak_nid','user_id'
    ];
}
