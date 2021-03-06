<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_mess',
        'email_mess',
        'subject',
        'message',
        'slug'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    // relation with users
    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }
}
