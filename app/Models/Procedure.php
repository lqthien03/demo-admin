<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    use HasFactory;
    public $table = "procedures";
    protected $fillable = [
        'link',
        'tittle',
        'describe',
        'content',
        'image',
        'number',
        'display',
        'seo_id',

    ];
    // protected $attributes = ['outstand' => 1,];
    public $timestamps = false;

    public function seo()
    {
        return $this->belongsTo(Seo::class, 'seo_id', 'id');
    }
}
