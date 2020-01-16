<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    //
    protected $fillable = [
        'filename',
        'name', 'email', 'phone', 'city',
        'County', 'address', 'country', 'PostCode', 'dateAvailable',
        'desiredPay', 'weblink', 'linkedin', 'job_id'
    ];
}
