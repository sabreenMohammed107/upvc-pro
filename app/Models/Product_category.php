<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_category extends Model
{
    protected $fillable = [
        'en_name',
        'ar_name',
    ];

    public function Products()
    {
        return $this->hasMany(Product::class);
    }

}
