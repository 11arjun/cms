<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinpustePramanit extends Model
{
    protected $table = 'tinpuste_pramanits';

    protected $fillable = [
    	'patra_sankya','chalani_no','issued_date','sabik_address','person_title','person_name','nibedak_name','nibedak_address','nibedak_citizenship_no','nibedak_nid','user_id'
    ];
}
