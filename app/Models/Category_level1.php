<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_level1 extends Model
{
    use HasFactory;
    public $table = "level1_products";
    protected $fillable = [
        // 'noibat',
        // 'tenkhongdauvi',
        // 'tenkhongdauen',
        // 'noidungvi',
        // 'noidungen',
        // 'motavi',
        // 'motaen',
        // 'tenen',
        // 'tenvi',
        'image',
        'number',
        'tittle',
        'outstand',
        'display',
        'new',
        'link',
        'seo_id',
        'descrie',
    ];
    // protected $attributes = ['outstand' => 1,];
    public $timestamps = false;

    public function seo()
    {
        return $this->belongsTo(Seo::class, 'seo_id', 'id');
    }
}
