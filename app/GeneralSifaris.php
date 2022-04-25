<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeneralSifaris extends Model
{
    //


    protected $table = 'generalsifaris';
      protected $fillable=[
      'patra_sankhya',
 'chalani_no',
 'issued_date',
 'office_name',
 'office_address',
 'office_address2',
 'subject',
 'letter_subject',
 'hakim_ko_name',
 'nibedak_name',
 'nibedak_address',
 'nibedak_citizenship_no',
 'nibedak_nid',
'officer',
'behora',
'user_id',
];
}
