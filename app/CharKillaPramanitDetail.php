<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CharKillaPramanitDetail extends Model
{
    protected $table = 'char_killa_pramanit_detail';

      protected $fillable=[
      	 'char_killa_id',
            'ward_no',
            'seat_kitta_area',
            'batto_abastha',
            'east',
            'west',
            'north',
            'south',
            'remark',
            

      ];
}
