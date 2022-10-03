<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'img','name','description','price','brand','review','type','rate','discount'
    ];

    public function Product_preview(){

        return $this->hasMany(ProductPreview::class,'product_id','id');

    }
}
