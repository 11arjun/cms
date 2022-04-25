<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InternalMigrationSifaris extends Model
{
    protected $table = 'internal_migration_sifaris';

    protected $fillable = [
    	'patra_sankya','chalani_no','issued_date','person_title','person_name','office_address','house_owner','migration_date','district','palika_name','palika_options','ward_no','migration_place','nibedak_name','nibedak_address','nibedak_citizenship_no','nibedak_nid','user_id'
    ];
}
