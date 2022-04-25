<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UdyogDartaSifaris extends Model
{
    //
 protected $table = 'udyogdartasifaris';
      protected $fillable=[
    'patra_sankya',
'chalani_no',
'issued_date',
'letter_subject',
'office_chairman',
'office_address',
'prapta_patra_miti',
'prapta_patra_no',
'sanchalak_name',
'sabik_address',
'current_address',
'jagga_bibaran',
'bebasaye_objective',
'bebasaye_name',
'hakim_ko_name',
'nibedak_name',
'nibedak_address',
'nibedak_citizenship_no',
'nibedak_nid',
'user_id',

'officer',
];
}
