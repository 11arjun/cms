<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citizenship extends Model
{
    //
    protected $table = 'citizenship';

      protected $fillable=[
      	 'karyalaya',
 'dis_name',

 'registrate_office_one',
 'registrate_office_two',
 'anchal_karyalaya',
 'citi_no',
 'citi_date',
 'citi_type',
 'name_nepali',
 'name_english',
 'gender_nepali',
 'gender_english',
 'birthplace_nepali',
 'birthplace_english',
 'citi_dis_name',
 'citi_ward_no',
 'citi_dis_english',
 'citi_ward_english',
 'year_nepali',
 'month_nepali',
 'day_nepali',
 'year_english',
 'month_english',
 'day_english',
 'father_name',
 'father_citi_type',
 'mother_name',
 'mother_citi_type',
 'spouse_name',
 'spouse_citi_type',
 'karyalaya_name',
 'rasid_no',

 'nibedak_names',
 'nibedan_date',
 'palika_name',
 'palika_ward',
 'palika_date',
 'hal_palika',
 'hal_ward',
 'spouse_option_name',
 'child_age',
 'title_name',
 'bibaran_no',
 'bibaran_date',
 'office_name',

 'sifaris_name',
 'sifaris_post',
 'nibedak_name',
 'nibedak_address',
 'nibedak_citizenship_no',
 'nibedak_nid',
'bigrinuko_karan',
'sakkal_nakkal',
 'spouse_option',
 'child_option',
'title_option',
'citi_reason',
'user_id',

      ];
}
