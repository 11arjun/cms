<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sarjimin extends Model
{
    //
    protected $table = 'sarjimin';
      protected $fillable=[
      	        
'patra_sankhya',
'chalani_no',
'issued_date',
'letter_subject',
'karyalaya_name',
'oda_ward',
'district',
'local_state',
'ward',
'person_name',
'sabik_address',
'sabik_ward',
'kitta_no',
'area',
'hakim_ko_name',
'nibedak_name',
'nibedak_address',
'nibedak_citizenship_no',
'nibedak_nid',

'sabik_type',
'officer',
'user_id',
        


      ];
}
