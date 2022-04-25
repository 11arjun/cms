<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BasobasSifarisDetail extends Model
{
    protected $table = "basobas_sifaris_details";

    protected $fillable = [
    	'basobas_id','toll','batto_name','ghar_no'
    ];
}
