<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'category_id';

    public function product(){
        return $this->hasMany(Product::class,'category_id');
    }

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }


}
