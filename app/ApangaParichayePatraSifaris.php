<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApangaParichayePatraSifaris extends Model
{
    protected $table = 'apanga_parichaye_patra_sifaris';

    protected $fillable = [
    	'patra_sankya','chalani_no','issued_date','office_address','sabik_address','person_title','person_name','apanga_type','nibedak_name','nibedak_address','nibedak_citizenship_no','nibedak_nid','user_id'
    ];
}
