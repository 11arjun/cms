<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FarakFarakEnglishHijePramanit extends Model
{
    //

 protected $table = 'farakfarakenglishhijepramanit';
      protected $fillable=[
     'patra_sankya',
'chalani_no',
'issued_date',
'letter_subject',
'local_state',
'ward',
'sabik_address',
'sabik_ward',
'person_name',
'actual_document',
'right_word',
'mistake_document',
'mistake_english_word',
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
