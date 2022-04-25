<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FarakNameTharNagarikta extends Model
{
    //

protected $table = 'faraknametharnagarikta';
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
'citi_no',
'citi_date',
'mistake_info',
'document_holder',
'document_type',
'document_mistake',
'document_name',
'rel_name',
'doc_name',
'hakim_ko_name',
'nibedak_name',
'nibedak_address',
'nibedak_citizenship_no',
'nibedak_nid',
'user_id',
'sabik_type',
'person_title',
'mistake_type',
'relation_type',
'officer',
];
}
