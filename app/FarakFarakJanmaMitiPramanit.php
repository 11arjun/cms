<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FarakFarakJanmaMitiPramanit extends Model
{
    //

  protected $table = 'farakfarakjanmamitipramanit';
      protected $fillable=[
 'chalani_no',
'issued_date',
'letter_subject',
'local_state',
'ward',
'sabik_address',
'sabik_ward',
'person_name',
'actual_document',
'valid_dob',
'mistake_document',
'mistake_dob',
'hakim_ko_name',
'nibedak_name',
'nibedak_address',
'nibedak_citizenship_no',
'nibedak_nid',
'user_id',
'sabik_type',
'person_title',
'officer',
];
}
