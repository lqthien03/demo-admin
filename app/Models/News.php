<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    public $table = "news";
    protected $fillable = [
        'image',
        'link',
        'tittle',
        'describe',
        'content',
        'outstand',
        'display',
        'number',
        'seo_id',
    ];
    public $timestamps = false;
    public function seo()
    {
        return $this->belongsTo(Seo::class, 'seo_id', 'id');
    }
}
