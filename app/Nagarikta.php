<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nagarikta extends Model
{
    //
    protected $table = 'nagarikta';
      protected $fillable=[

'issued_date',
'karyalaya',
'ward_num',
'letter_subject1',
'letter_subject2',
'district_name',
'loc_name',
'ward_no',
'grand_name',
'parent_name',
'dob',
'age',
'app_name',
'n_type',
'n_name',
'n_address',
'n_date',
'nibedak_name',
'nibedak_address',
'nibedak_citizenship_no',
'nibedak_nid',
'ng_option',
'child_option',
'ch_option',
'bodartha',
'user_id',
      ];
}
