<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeathRegistrations extends Model
{
    //
    protected $table = 'deathcertificate';

      protected $fillable=[
      	 'registration_no_nep',
            'registration_date_nep',
            'family_form_no_nep',
            'applicant_title_nep',
            'applicant_name_nep',
            'grand_father_name_nep',
            'grand_children_option_nep',
            'father_name_nep',
            'children_option_nep',
            'children_name_nep',
            'spouse_option_nep',
            'province_name_nep',
            'district_name_nep',
            'local_state_name_nep',
            'ward_no_nep',
            'age_nep',
            'person_title_nep',
             'person_name_nep',
            'death_date_bs_nep',
            'death_place_local_state_nep',
            'death_place_ward_nep',
            'citizenship_no_nep',
            'issued_date_nep',
            'issued_district_nep',
            'local_registar_name_nep',
            'signed_date_nep',
            'registration_no',
            'registration_date',
            'family_form_no',
            'applicant_title',
            'applicant_name',
            'death_person_title',
            'death_person_name',
            'death_person_age',
            'children_option',
            'father_title_option',
            'father_name',
            'spouse_option',
            'husband_wife_title',
            'spouse_name',
            'ward_no',
            'local_state',
            'district',
            'province',
            'death_date_bs',
            'citizenship_no',
            'issued_date',
            'issued_district',
            'local_registar_name',
            'signed_date',
           'nibedak_name',
         'nibedak_address',
         'nibedak_citizenship_no',
         'nibedak_nid',
         'user_id',
         'death_place_np',
         'death_place_en',
         'permanent_address_np',
         'permanent_address_en',
         'grand_father_name_en',
         'mother_name_np',
         'mother_name_en',
         'applicant_citizenship_no_np',
         'applicant_citizenship_no_en',


      ];
}
