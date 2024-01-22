<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    public $table = "gallery";
    protected $fillable = [
        'image1',
        'image2',
        'image3',
    ];
    // protected $attributes = ['outstand' => 1,];
    public $timestamps = false;
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
