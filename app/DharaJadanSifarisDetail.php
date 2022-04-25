<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DharaJadanSifarisDetail extends Model
{
    protected $table = 'dhara_jadan_sifaris_detail';

      protected $fillable=[
      	 'dhara_jadan_sifaris_id',
            'dhara_jadan_kitta_no',
            

      ];
}
