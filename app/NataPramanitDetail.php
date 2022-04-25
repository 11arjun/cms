<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NataPramanitDetail extends Model
{
    protected $table = 'nata_pramanit_details';

    protected $fillable = [
    	'nata_id','relative_name','relation'
    ];
}
