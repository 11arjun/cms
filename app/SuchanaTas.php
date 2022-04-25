<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuchanaTas extends Model
{
    //
    protected $table = 'suchanatas';
      protected $fillable=[
      	'patra_sankhya',
'chalani_no',
'issued_date',
'letter_subject',
'karyalaya_name',
'sabik_address',
'sabik_ward',
'local_states',
'wards',
'landowner_name',
'malpot_address',
'landsabik_address',
'landsabik_ward',
'kitta_no',
'area',
'appsabik_address',
'appsabik_ward',
'applocal_states',
'appward',
'applicant_name',
'home_type2',
'hakim_ko_name',
'nibedak_name',
'nibedak_address',
'nibedak_citizenship_no',
'nibedak_nid',
'sabik_type',
'landsabik_type',
'appsabik_type',
'home_type',
'officer',
'user_id',

      ];
}
