<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeneralSifarisEnglish extends Model
{
    //
   protected $table = 'generalsifarisenglish';
      protected $fillable=[
    'ref_no',
'issued_date',
'office_name',
'office_address',
'office_add',
'subject',
'hakim_ko_name',
'nibedak_name',
'nibedak_address',
'nibedak_citizenship_no',
'nibedak_nid',
'user_id',
'officer',
'behora',
];
}
