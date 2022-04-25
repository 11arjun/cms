<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gharkayamsifaris extends Model
{
    //\

  protected $table = 'gharkayamsifaris';
      protected $fillable=[
'patra_sankhya',
'chalani_no',
'issued_date',
'letter_subject',
'office_chairman',
'office_name',
'local_state',
'ward',
'sabik_address',
'sabik_ward',
'person_name',

//start
'sabik_vdc',
'sabik_ward_no',
'nagarpalika_name',
'ward_no',
'kitta_no',
'area',
'ghar_nirman_year',
//end
'hakim_ko_name',
'nibedak_name',
'nibedak_address',
'nibedak_citizenship_no',
'nibedak_nid',

'sabik_type',
'person_title',
'ghar_nirman_option',
'sabik',
'officer',
'user_id',
];
}
