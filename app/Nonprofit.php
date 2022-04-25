<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nonprofit extends Model
{
    //
 protected $table = 'nonprofit';
      protected $fillable=[
    'patra_sankhya',
'chalani_no',
'issued_date',
'letter_subject',
'registration_no',
'registration_date',
'organization_name',
'organization_address',
'subjective_area',
'transaction_start_date',
'organization_email',
'organization_contact',
'chairman_name',
'chairman_address',
'chairman_email',
'chairman_contact_no',
'hakim_ko_name',
'nibedak_name',
'nibedak_address',
'nibedak_citizenship_no',
'nibedak_nid',
'user_id',
'officer',];
}
