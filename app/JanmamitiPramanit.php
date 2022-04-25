<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JanmamitiPramanit extends Model
{
    protected $table = 'janmamiti_pramanits';

    protected $fillable = [
    	'patra_sankya','chalani_no','issued_date','father_name','mother_name','children_gender','sabik_address','children_title','children_name','birth_date','birth_place','nibedak_name','nibedak_address','nibedak_citizenship_no','nibedak_nid','user_id'
    ];
}
