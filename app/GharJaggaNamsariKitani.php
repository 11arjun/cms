<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GharJaggaNamsariKitani extends Model
{
    //


    protected $table = 'gharjagganamsarikitani';
      protected $fillable=[
'patra_sankhya',
'chalani_no',
'issued_date',
'letter_subject',
'office_chairman',
'office_name',
'local_state',
'ward',
'sabik_address',
'sabik_ward',
'g_name',
'f_name',
'm_name',
'person_name',
'relation',
'death_person_name',
'death_date',
'land_local_state',
'land_ward',
'land_sabik_address',
'land_sabik_ward',
'land_kitta_no',
'jagga_area',
'darta_type',
//start
'app_name',
'app_relation',
'app_date',

'hakdarko_name',
'mritak_relation',
'father_husband_name',
'ciitizenship_no',
'kitta_no',

'namsarihakdarko_name',
'namsarimritak_relation',
' namsarifather_husband_name',
'namsariciitizenship_no',
'namsarikitta_no',
//end

'sarjaminlocal_state',
'sarjaminward',
'sarjaminbarsa',
'sarjaminname',
'sarjaminno',
'hakim_ko_name',
'nibedak_name',
'nibedak_address',
'nibedak_citizenship_no',
'nibedak_nid',

'sabik_type',
'g_title',
'c_title',
'person_title',
'nata_title',
'land_sabik_type',
'prop_type',
'hak_type',
'officer',
'user_id',
'behora',
];
}
