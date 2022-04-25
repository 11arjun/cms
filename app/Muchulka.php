<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Muchulka extends Model
{
    //

protected $table = 'muchulka';
      protected $fillable=[
    'patra_sankhya',
'chalani_no',
'issued_date',
'letter_subject',
'office_name',
'office_address',
'sabik_address',
'sabik_ward',
'local_states',
'wards',
'landowner_name',
'malpot_address',
'landsabik_address',
'landsabik_ward',
'landlocal_states',
'landwards',
'kitta_no',
'area',
'appsabik_address',
'appsabik_ward',
'applocal_states',
'appward',
'applicant_name',
'hakim_ko_name',
'nibedak_name',
'nibedak_address',
'nibedak_citizenship_no',
'nibedak_nid',
'user_id',

'sabik_type',
'landsabik_type',
'appsabik_type',
'officer',
];
}
