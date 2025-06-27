<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    //
    protected $fillable = [
        'name',
        'slug',
        'price',
        'description',
        'sku',
        'category_id',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function subCategory() {
        return $this->belongsTo(SubCategory::class);
    }

    public function brand() {
        return $this->belongsTo(Brand::class);
    }

    public function productImages() {
        return $this->hasMany(ProductImage::class);
    }

    public function productReviews() {
        return $this->hasMany(ProductReview::class);
    }
}
