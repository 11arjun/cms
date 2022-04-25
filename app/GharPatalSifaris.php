<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GharPatalSifaris extends Model
{
    protected $table = 'ghar_patal_sifaris';

      protected $fillable=[
      	 'patra_sankya',
            'chalani_no',
            'issued_date',
            'office_chairman',
            'office_name',
            'kitta_no',
            'area',
            'person_title',
            'person_name',
            'user_id',
            'nibedak_name',
            'nibedak_address',
            'nibedak_citizenship_no',
            'nibedak_nid',

      ];
}
