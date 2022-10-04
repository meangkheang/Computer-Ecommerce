<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPreview extends Model
{
    use HasFactory;
    protected $fillable =['product_id','product_side'];

    public function Product_preview(){
            
        return $this->belongsTo(Product::class,'id','product_id');
    }
}
