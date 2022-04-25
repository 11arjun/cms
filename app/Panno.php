<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panno extends Model
{
    //

  protected $table = 'pannoa';
      protected $fillable=[
'patra_sankya',
'chalani_no',
'issued_date',
'letter_subject',
'pan_office_name',
'pan_office_address',
'local_state',
'ward',
'sabik_address',
'sabik_ward',
'person_name',
'pan_no_date',
'pasal_address',
'pasal_name',
'hakim_ko_name',
'nibedak_name',
'nibedak_address',
'nibedak_citizenship_no',
'nibedak_nid',
'user_id',


'sabik_type',
 'person_title',
 'officer',
 'bodartha',
];
}
