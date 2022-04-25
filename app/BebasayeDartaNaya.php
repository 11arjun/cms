<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BebasayeDartaNaya extends Model
{
    //
    protected $table = 'bebasayedartanaya';

    protected $fillable=[
    'p_name',
'p_office',
'p_ward',
'p_address',
'letter_subject',
'bebasaye_name',
'bebasaye_name_english',
'bebasaye_district',
'bebasaye_local_state',
'bebasaye_wardno',
'bebasaye_tole',
'bebasaye_phone',
'bebasaye_amount',
'bebasaye_amount_english',
'bebasaye_item',
'prop_name',
'prop_jilla',
'prop_localstate',
'prop_ward',
'prop_tole',
'prop_phone',
'prop_citi_no',
'prop_citi_jilla',
'citi_date',
'prop_dis',
'prop_local_state',
'prop_wada',
'prop_tole_name',
'prop_grand',
'prop_father',
'prop_husband',
'owner_prop',

'owner_grandfather',
'owner_grandchild',
'owner_add',
'owner_age',
'owner_name',
'owner_business',
'business_localaddress',
'business_ward',
'b_year',
'b_month',
'b_day',
'b_roj',
'san_localstate',
'san_ward',
'san_name',
'san_date',
'tip_business',
'tip_owner',
'tip_amt',
'tip_amount',

'nibedak_name',
'nibedak_address',
'nibedak_citizenship_no',
'nibedak_nid',
'user_id',


'b_type',
'owner_child',
];
}
