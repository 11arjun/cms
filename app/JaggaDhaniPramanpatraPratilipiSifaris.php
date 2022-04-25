<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JaggaDhaniPramanpatraPratilipiSifaris extends Model
{
    protected $table = 'jagga_dhani_pramanpatra_pratilipi_sifaris';

      protected $fillable=[
      	 'patra_sankya',
            'chalani_no',
            'issued_date',
            'office_chairman',
            'office_name',
            'land_owner_title',
             'land_owner_name',
            'palika_name',
            'palika_type',
            'ward_no',
            'sabik_address',
             'kitta_no',
            'area',
            'person_sabik_address',
            'applicant_title',
             'applicant_name',
            'citizenship_no',
             'citizenship_issued_date',
            'father_name',
            'grand_father_name',
           
            'user_id',
            'nibedak_name',
            'nibedak_address',
            'nibedak_citizenship_no',
            'nibedak_nid',

      ];
}
