<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InternalMigrationDetail extends Model
{
    protected $table = 'internal_migration_details';

    protected $fillable = [
    	'migration_id','full_name','relation','citizenship_no','ghar_no','batto_name','age'
    ];
}
