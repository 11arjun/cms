<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyValuation extends Model
{
    protected $table = "property_valuation";

    protected $fillable = [
        'id','ref_no','issued_date','title','title_name','address','total_amount','total_amount_dollar','dollar_to_nepali','ward_president','nibedak_name','nibedak_address',
        'nibedak_citizenship_no','nibedak_nid','user_id'
    ];
}
