<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $table = "detail_products";
    protected $fillable = [
        'image',
        'tittle',
        'link',
        'content',
        'describe',
        'outstand',
        'display',
        'product_code',
        'price',
        'gallery_id',
        'seo_id',
        'level1_product_id',
        'level2_product_id',
    ];
    // protected $attributes = ['outstand' => 1,];
    public $timestamps = false;

    public function seo()
    {
        return $this->belongsTo(Seo::class, 'seo_id', 'id');
    }
    public function level1_product()
    {
        return $this->belongsTo(Category_level1::class, 'level1_product_id', 'id');
    }
    public function level2_product()
    {
        return $this->belongsTo(Category_level2::class, 'level2_product_id', 'id');
    }
    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
}
