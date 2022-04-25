<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GharBatoPramanit extends Model
{
    protected $table = 'ghar_bato_pramanit';

      protected $fillable=[
      	 'patra_sankya',
            'chalani_no',
            'issued_date',
            'office_chairman',
            'office_name',
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
