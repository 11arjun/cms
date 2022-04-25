<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NataPramanit extends Model
{
    protected $table = 'nata_pramanits';

    protected $fillable = [
    	'patra_sankya','chalani_no','issued_date','person_name','person_title','application_date','nibedak_name','nibedak_address','nibedak_citizenship_no','nibedak_nid','user_id'
    ];
}
