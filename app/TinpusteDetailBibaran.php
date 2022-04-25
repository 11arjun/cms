<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinpusteDetailBibaran extends Model
{
    protected $table = 'tinpuste_detail_bibarans';

    protected $fillable = [
    	'tinpustedetail_id','name','relation','citizenship_no','citizenship_issued_date','citizenship_issued_district'
    ];
}
