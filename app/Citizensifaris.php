<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citizensifaris extends Model
{
    //
    protected $table = 'citizensifaris';

      protected $fillable=[

'patra_sankya',
'chalani_no',
'issued_date',
'dis_name',
'letter_subject',
'n_name',
'birth_place',
'father_name',
'mother_name',
'patipatni_name',
'per_add',
'person_name',
'birth_date',
'toli_ko_name',
'nibedan_name',
'nibedan_relation',
'sanakhat_name',
'sanakhat_relation',
'sanakhat_date',
'nibedak_name',
'nibedak_address',
'nibedak_citizenship_no',
'nibedak_nid',

'nibedak_options',

'user_id',

      ];
}
