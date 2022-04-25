<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BijuliJadanSifaris extends Model
{
    protected $table = 'bijuli_jadan_sifaris';

      protected $fillable=[
      	 'patra_sankya',
            'chalani_no',
            'issued_date',
            'office_chairman',
            'office_name',
            'sabik_address',
            'person_title',
            'person_name',
            'kitta_no',
            'house_approve_date',
            'construction_type',
            'electricity_line_name',
            'electricity_capacity',
            'user_id',
            'nibedak_name',
            'nibedak_address',
            'nibedak_citizenship_no',
            'nibedak_nid',

      ];
}
