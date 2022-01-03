<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * RELATIONSHIP
     */
    // n - n: Danh mục
    public function categories()
    {
        return $this->belongsToMany(Category::class, "category_product");
    }

    // n - n: Thuộc tính sản phẩm
    public function vagrants()
    {
        return $this->belongsToMany(Vagrant::class, "product_vagrant");
    }
}
