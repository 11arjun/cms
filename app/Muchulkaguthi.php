<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Muchulkaguthi extends Model
{
    //
protected $table = 'muchulkaguthi';
      protected $fillable=[
    'patra_sankhya',
'chalani_no',
'issued_date',
'letter_subject',
'office_name',
'office_address',
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
'landsabik_type',
'appsabik_type',
'officer',
'user_id',
];
}
