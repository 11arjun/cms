<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaxClearance extends Model
{
    protected $table = "tax_clearances";

    protected $fillable = [
        'id','ref_no','issued_date','applicant_title','applicant_name','tax','plot_no','office_name','bs_date','nibedak_name','nibedak_address',
        'nibedak_citizenship_no','nibedak_nid','user_id'
    ];
}
