<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KittaKatJaggaBibaran extends Model
{
    protected $table = 'kitta_kat_jagga_bibaran';

      protected $fillable=[
      	 'kitta_kat_id',
      	 'seat_no',
      	 'kitta_no',
      	 'area',

      ];
}
