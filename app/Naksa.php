<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Naksa extends Model
{
    //
     protected $table = 'naksa';
      protected $fillable=[

'patra_sankhya',
'chalani_no',
'issued_date',
'letter_subject',
'karyalaya_name',
'karyalaya_district',
'local_state',
'ward',
'sabik_address',
'sabik_ward',
'nibedak',
'plot_local_state_name',
'oda_ko_name',
'hakim_ko_name',
'nibedak_name',
'nibedak_address',
'nibedak_citizenship_no',
'nibedak_nid',
'sabik_type',
'officer',
'user_id',

      ];
}
