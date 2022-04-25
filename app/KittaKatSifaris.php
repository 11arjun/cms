<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KittaKatSifaris extends Model
{
    protected $table = 'kitta_kat_sifaris';

      protected $fillable=[
      	 'patra_sankya',
            'chalani_no',
            'issued_date',
            'office_chairman',
            'office_name',
            'sabik_address',
            'person_title',
            'person_name',
            'jagga_location',
            'jagga_area',
            'ghaderi_area',
            'ghar_total_area',
            'last_floor_area',
            'paune_far',
            'sifaris_reason',
            'technician_name',
            'user_id',
            'nibedak_name',
            'nibedak_address',
            'nibedak_citizenship_no',
            'nibedak_nid',

      ];
}
