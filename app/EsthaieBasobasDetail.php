<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EsthaieBasobasDetail extends Model
{
    protected $table = "esthaie_basobas_details";

    protected $fillable = [
    	'basobas_id','toll','batto_name','ghar_no'
    ];
}
