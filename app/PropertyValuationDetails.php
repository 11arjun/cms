<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyValuationDetails extends Model
{
    protected $table = "property_valuation_details";

    protected $fillable = [
        'id','relation_id','owner','particular_plot_no','area','total_value','remarks'
    ];
}
