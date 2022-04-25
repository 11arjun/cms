<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GharJaggaNamsariSifaris extends Model
{
    protected $table = 'gharjagganamsarisifaris';
      protected $fillable=[
'patra_sankhya',
'chalani_no',
'issued_date',
'letter_subject',
'office_chairman',
'office_name',
'sabik_address',
'sabik_type',
'sabik_ward',
'person_title',
'person_name',
'relation',
'death_person_name',
'death_date',
'applicant_person_title',
'applicant_person_name',
'property_type',
'app_name',
'app_relation',
'app_date',
'hakdarko_name',
'mritak_relation',
'father_husband_name',
'ciitizenship_no',
'kitta_no',
'ward_no',
'area',
'jagga_bibaran_kitta_no',
'remakrs',

//end
'officer',
'hakim_ko_name',
'nibedak_name',
'nibedak_address',
'nibedak_citizenship_no',
'nibedak_nid',
'user_id',
];
}
