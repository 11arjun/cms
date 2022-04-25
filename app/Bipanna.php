<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bipanna extends Model
{
    //

 protected $table = 'bipanna';

    protected $fillable=[
    'patra_sankya',
'chalani_no',
'issued_date',
'letter_subject',
'local_state',
'ward',
'sabik_address',
'sabik_ward',
'children_name',
'hakim_ko_name',
'nibedak_name',
'nibedak_address',
'nibedak_citizenship_no',
'nibedak_nid',
'user_id',

'sabik_type',
'children_title',
'officer',
];
}
