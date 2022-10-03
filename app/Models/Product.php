<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function Product_preview(){

        return $this->hasMany(ProductPreview::class,'user_id','id');

    }
}
