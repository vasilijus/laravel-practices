<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Model\User;

class Channel extends Model
{
    //
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image_filename'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
