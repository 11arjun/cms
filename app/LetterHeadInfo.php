<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LetterHeadInfo extends Model
{
    protected $table = 'letter_head_info';

    protected $fillable = [
    	'palika_id','ward_id','ward_no_eng','ward_no_nep','phone_no_eng','phone_no_nep','fax_eng','fax_nep','ward_name_eng','ward_name_nep','fiscal_year_eng','fiscal_year_nep','email','website'
    ];
}
