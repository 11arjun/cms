<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NirmanBebasaye extends Model
{
    //


 protected $table = 'nirmanbebasaye';
      protected $fillable=[
'ejajat_patra_no',
'fiscal_year',
'location',
'company_name',
'ejajat_dineko_name',
'post',
'issued_date',
'nibedak_name',
'nibedak_address',
'nibedak_citizenship_no',
'nibedak_nid',
'user_id',

];
}
