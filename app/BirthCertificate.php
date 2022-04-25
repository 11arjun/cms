<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BirthCertificate extends Model
{
    //
    protected $table = 'birthcertificate';

    protected $fillable=[

            'reg_no_nep',
            'form_no_nep',
            'reg_date_nep',
            'applicant_title_options',
            'applicant_name_nep',
            'grand_father_name_nep',
          'grand_children_options',
          'father_name_nep',
         'mother_name_nep',
         'children_options',
         'children_relation_options',
         'holder_name_nep',
         'birth_date_bs_nep',
         'birth_date_ad_nep',
         'father_citizen_no_nep',
         'father_citizen_issued_date_nep',
         'father_citizen_issued_district_nep',
         'mother_citizen_no_nep',
         'mother_citizen_issued_date_nep',
         'mother_citizen_issued_district_nep',
         'local_registrar_name_nep',
         'signed_date_nep',
        

          'reg_no',
            'form_no',
            'reg_date',
            'applicant_title_options_eng',
            'applicant_name',
            'grand_father_name',
          'grand_children_options_eng',
          'father_name',
         'mother_name',
         'children_options_eng',
         'children_relation_options_eng',
         'grand_title_options_eng',
         'spouse_name',
         'birth_date_bs',
         'birth_date_ad',
         'father_citizen_issued_date',
         'father_citizen_no',
         
         'father_citizen_issued_district',
         'mother_citizen_no',
         'mother_citizen_issued_date',
         'mother_citizen_issued_district',
         'local_registrar_name',
         'signed_date',
         'nibedak_name',
         'nibedak_address',
         'nibedak_citizenship_no',
         'nibedak_nid',
         'sex_np',
         'sex_en',
         'permanent_address_np',
         'permanent_address_en',
         'birth_place_np',
         'birth_place_en',
         'nibedak_name_np',
         'nibedak_citizenship_no_np',
         'user_id',
     ];
}
