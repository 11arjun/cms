<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CharKillaPramanit extends Model
{
    protected $table = 'char_killa_pramanit';

      protected $fillable=[
      	 'patra_sankya',
            'chalani_no',
            'issued_date',
            'sabik_address',
            'person_title',
            'person_name',
            'user_id',
            'nibedak_name',
            'nibedak_address',
            'nibedak_citizenship_no',
            'nibedak_nid',

      ];
}
