<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShrestaUparSifaris extends Model
{
    //

protected $table = 'shrestauparsifaris';
      protected $fillable=[
'patra_sankhya',
'chalani_no',
'issued_date',
'letter_subject',
'karyalaya_name',
'karyalaya_district',
'sabik_address',
'sabik_ward',
'local_state',
'ward',
'owner_name',
'of_name',
'of_address',
'hakim_ko_name',
'nibedak_name',
'nibedak_address',
'nibedak_citizenship_no',
'nibedak_nid',
'user_id',


'sabik_type',
'officer',
];
}
