<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KakshyaThap extends Model
{
  protected $table = 'kakshyathap';
  protected $fillable=[
    'patra_shankhya',
    'chalani_no',
    'issued_date',
    'officer_name',
    'related_name',
    'option',
    'school_name',
    'nibedak_name',
    'nibedak_address',
    'nibedak_citizenship_no',
    'nibedak_nid',
    'user_id',
];
}
