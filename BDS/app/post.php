<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = "post";
    public $fillable = ['user_id','title','description','phone','address','slug','map','land_type','price','trend','facade','avatar','area','action','type','province','distrist','ward','acr','like','type_price'];
}
