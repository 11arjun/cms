<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BijuliJadanSifarisDetail extends Model
{
    protected $table = 'bijuli_jadan_sifaris_detail';

      protected $fillable=[
      	 'bijuli_jadan_sifaris_id',
            'bijuli_jadan_kitta_no',
            

      ];
}
