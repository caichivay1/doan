<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	const CATE_URL = 'list-all/';
    protected $table = "category";
   public $fillable = ['name','slug','is_menu','parent'];

}
