<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhulaiPathayeko extends Model
{
  protected $table = 'khulai_pathayeko';
  protected $fillable=[
    'patra_shankhya',
    'chalani_no',
    'issued_date',
    'officer_name',
    'officer_title',
    'nibedak_name',
    'nibedak_address',
    'nibedak_citizenship_no',
    'nibedak_nid',
    'user_id',
];
}
