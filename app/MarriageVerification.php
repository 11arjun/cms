<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarriageVerification extends Model
{
    protected $table = 'marriage_verifications';

    protected $fillable = [
    	'patra_sankya','chalani_no','issued_date','boy_grand_father','boy_father','boy_mother','boy_name','boy_previous_address','girl_grand_father','girl_grand_mother','girl_father','girl_mother','girl_name','girl_previous_address','marriage_date','nibedak_name','nibedak_address','nibedak_citizenship_no','nibedak_nid','user_id'
    ];
}
