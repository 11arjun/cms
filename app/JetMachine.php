<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JetMachine extends Model
{
    protected $table = "jet_machines";

    protected $fillable = [
      'id','patra_sankhya','chalani_no','issued_date','letter_subject','state','local_state','karyalaya_name','address','road_name','nibedak_name',
      'nibedak_address','nibedak_citizenship_no','nibedak_nid','user_id'
    ];
}
