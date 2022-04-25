<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EsthaieBasobasSifaris extends Model
{
    protected $table = "esthaie_basobas_sifaris";

    protected $fillable = [
    	'patra_sankya','chalani_no','issued_date','person_title','person_name','sabik_address','houseowner_title','houseowner_name','living_starting_date','basobas_type','citizenship_no','district_name','citizenship_issued_date','user_id','nibedak_name','nibedak_address','nibedak_citizenship_no','nibedak_nid'
    ];
}
