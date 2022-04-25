<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MigrationDetail extends Model
{
    protected $table = 'migration_details';

    protected $fillable = [
    	'migration_id','fullname_np','fullname_en','dob_np','dob_en','relation_with_informant_np','relation_with_informant_en','primary_legal_id_np','primary_legal_id_en',
    ];
}
