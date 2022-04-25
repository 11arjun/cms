<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GharBatoPramanitDetail extends Model
{
    protected $table = 'ghar_bato_pramanit_detail';

      protected $fillable=[
      	 'ghar_bato_id',
            'ward_no',
            'seat_no',
            'kitta_no',
            'area',
            'batto_name',
            'ghar_abastha',
            'bato_type',
            'remark',
           

      ];
}
