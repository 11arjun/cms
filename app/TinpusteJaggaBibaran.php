<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinpusteJaggaBibaran extends Model
{
    protected $table = 'tinpuste_jagga_bibarans';

    protected $fillable = [
    	'tinpuste_id','seat_no','kitta_no','area'
    ];
}
