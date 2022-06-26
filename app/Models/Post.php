<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'text',
        'photo',
        'user_id'
    ];

    // relation with users
    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }
}
