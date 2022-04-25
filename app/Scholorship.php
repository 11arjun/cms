<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scholorship extends Model
{
    //
 protected $table = 'scholarship';
      protected $fillable=[
    'patra_sankhya',
 'chalani_no',
 'issued_date',
 'letter_subject',
 'local_state',
 'sabik_address',
 'sabik_ward',
 'father_name',
 'mother_name',
 'children_name',
 'hakim_ko_name',
 'nibedak_name',
 'nibedak_address',
 'nibedak_citizenship_no',
 'nibedak_nid',


'sabik_type',
 'address_type',
 'economy_type',
 'children_gender',
 'children_title',
 'officer',
 'user_id',
];
}
