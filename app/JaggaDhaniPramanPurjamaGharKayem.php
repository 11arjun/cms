<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JaggaDhaniPramanPurjamaGharKayem extends Model
{
    protected $table = 'jagga_dhani_purjama_gharkayem_sifaris';
      protected $fillable=[
      	 'patra_sankya',
		 'chalani_no',
		 'issued_date',
		 'office_name',
		 'office_chairman',
		 'sabik_address',
		 'ward_no',
		 'kitta_no',
		 'area',
		 'nibedak_name',
		 'nibedak_address',
		 'nibedak_citizenship_no',
		 'nibedak_nid',
		 'user_id',

      ];
}
