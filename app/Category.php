<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

     protected $table = 'category';

      protected $fillable=[
      	'sifaris_title',
      	'table_name',
      	'table_readable_name'

      ];
}
