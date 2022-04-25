<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MohiLagatKattaSifaris extends Model
{
    protected $table = "mohi_lagat_katta_sifaris";

    protected $fillable = [
      'id','patra_sankhya','chalani_no','issued_date','local_state','sabik_address','seat_no','kitta_no','total_area',
      'relation_title','relation_name','second_relation_title','second_relation_name','sifaris_date',
      'user_id','nibedak_name','nibedak_address','nibedak_citizenship_no','nibedak_nid'
    ];
}
