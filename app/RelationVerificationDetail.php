<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelationVerificationDetail extends Model
{
    protected $table = 'relation_verification_details';

    protected $fillable = [
    	'relation_id','relative_title','relative_name','relation'
    ];

    public function relationverify(){
		return $this->belongsTo('App\RelationVerification','relation_id','id');    	
    }
}
