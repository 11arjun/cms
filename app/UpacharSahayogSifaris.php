<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UpacharSahayogSifaris extends Model
{
    //
 protected $table = 'upacharsahayogsifaris';
      protected $fillable=[
    'chalani_no',
'issued_date',
'karyalaya_name',
'office_address',
'letter_subject',
'local_state',
'ward',
'sabik_address',
'sabik_ward',
'person_name',
'disease_name',
'hospital_name',
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
