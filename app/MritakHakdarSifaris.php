<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MritakHakdarSifaris extends Model
{
    protected $table = 'mritak_hakdar_sifaris';

    protected $fillable = [
    	'patra_sankya','chalani_no','issued_date','sabik_address','person_title','person_name','registration_date','registration_no','death_person_title','death_person_name','hakdar_sankya','nibedak_name','nibedak_address','nibedak_citizenship_no','nibedak_nid','user_id'
    ];
}
