<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbibahitPramanit extends Model
{
    protected $table = 'abibahit_pramanits';

    protected $fillable = [
    	'patra_sankya','chalani_no','issued_date','sabik_address','father_name','mother_name','children_gender','children_title','children_name','nibedak_name','nibedak_address','nibedak_citizenship_no','nibedak_nid','user_id'
    ];
}
