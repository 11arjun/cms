<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tresnaksa extends Model
{
    //

      protected $table = 'tresnaksa';
      protected $fillable=[
      	'patra_sankhya',
'chalani_no',
'issued_date',
'letter_subject',
'karyalaya_name',
'karyalaya_district',
'local_state',
'ward',
'sabik_address',
'sabik_ward',
'nibedak',
'plot_local_state_name',
'plot_ward_no',
'plot_sabik_address',
'plot_sabik_ward',
'kitta_no',
'area_no',
'request_for',
'hakim_ko_name',
'nibedak_name',
'nibedak_address',
'nibedak_citizenship_no',
'nibedak_nid',

'sabik_type',
'plot_sabik_type',
'officer',
'user_id',

      ];
}
