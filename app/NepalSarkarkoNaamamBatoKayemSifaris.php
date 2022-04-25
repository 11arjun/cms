<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NepalSarkarkoNaamamBatoKayemSifaris extends Model
{
    protected $table = 'nepalsarkarko_naamma_bato_kayem_sifaris';
      protected $fillable=[

		'patra_sankya',
		'chalani_no',
		'issued_date',
		'office_chairman',
		'office_name',
		'sabik_address',
		'palika_type',
		'kitta_no',
		'area',
		'jagga_breadth',
		'jagga_length',
		'person_title',
		'person_name',
		'user_id',

      ];
}
