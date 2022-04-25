<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shresta extends Model
{
    //
  protected $table = 'shresta';
      protected $fillable=[
      'patra_sankya',
'chalani_no',
'issued_date',
'letter_subject',
'office_name',
'office_address',
'local_state',
'ward',
'sabik_address',
'sabik_ward',
'grand_father',
'father',
'child_name',
'prop_type',
// start here
'sabik_vdc_name',
'sabik_ward_no',
'nagarpalika_name',
'ward_no',
'kitta_no',
'area',
// end
'hakim_ko_name',

'nibedak_name',
'nibedak_address',
'nibedak_citizenship_no',
'nibedak_nid',

'jagga_dhani',
'sabik_type',
'grand_child',
'child',
'sabik',
'officer',
'user_id',
];
}
