<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MigrationRegistrations extends Model
{
    //
     protected $table = 'migration';
      protected $fillable=[
  
'registration_no', 
'family_form_no', 
 'registration_date',
 'applicant_name',
 'house_owner_name',
 'migrate_date',
 'migrate_province_name',
 'issued_district',
 'migrate_local_state',
 'migrate_ward',

 'family_member_name',
 'date_of_birth',
 'relation',
 'event_registration',
 'remakrs',

 'citizenship_no',
 'issued_date',
 'issued_districts',
 'local_registar_name',
 'signed_date',
 'reg_no',
'form_no',
'reg_date',
 'applicant_name_eng',
 'house_owner_name_eng',
 'mig_ward_eng',
 'mig_local_state_eng',
 'mig_district_eng',
 'mig_provience_name_eng',
 'family_member_name_eng',
 'date_of_birth_eng',
 'relation_eng',
 'event_reg_eng',
 'remarks_eng',
 'citizen_no_eng',
  'issued_date_eng',
  'issued_district_eng',
  'local_registar_name_eng',
  'nibedak_name',
  'nibedak_address',
  'nibedak_citizenship_no',
  'nibedak_nid',
  'user_id',
  'migrate_type',
  'applicant_title',
  'applicant_title2',
  'permanent_address_np',
  'permanent_address_en',
  'father_name_np',
  'father_name_en',
  'mother_name_np',
  'mother_name_en',
  'migrated_form_address_np',
  'migrated_form_address_en',
      ];
}
