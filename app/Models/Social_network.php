<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social_network extends Model
{
    use HasFactory;
    public $table = "social_networks";
    protected $fillable = [
        'number',
        'image',
        'display',
        'link',
    ];
    // protected $attributes = ['outstand' => 1,];
    public $timestamps = false;
}
