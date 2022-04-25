<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DharaJadanSifaris extends Model
{
    protected $table = 'dhara_jadan_sifaris';

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
            'khanepani_line_name',
            'user_id',
            'nibedak_name',
            'nibedak_address',
            'nibedak_citizenship_no',
            'nibedak_nid',

      ];
}
