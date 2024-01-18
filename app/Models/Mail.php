<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    use HasFactory;
    public $table = "mails";
    protected $fillable = [
        'name',
        'phone',
        'email',
        'topic',
        'address',
        'status',
        'content',
        'note',
        'number',
    ];
    // protected $attributes = ['outstand' => 1,];
    public $timestamps = false;
}
