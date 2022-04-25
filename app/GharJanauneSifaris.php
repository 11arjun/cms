<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GharJanauneSifaris extends Model
{
    protected $table = "ghar_janaune_sifaris";

    protected $fillable = [
      'id','patra_sankhya','chalani_no','issued_date','district','local_state','ward',
      'person_name','malpot_name','sabik_address','sabik_type','sabik_ward','local_states','wards','kitta_no',
      'area','hakim_ko_name','officer','nibedak_name','nibedak_address','nibedak_citizenship_no','nibedak_nid','user_id'
    ];
}
