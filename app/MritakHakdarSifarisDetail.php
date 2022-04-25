<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MritakHakdarSifarisDetail extends Model
{
    protected $table = 'mritak_hakdar_sifaris_details';

    protected $fillable  = [
    	'mritak_hakdar_id','hakdar_full_name','relation','father_name','citizenship_no','house_no','kitta_no','batto_name'
    ];
}
