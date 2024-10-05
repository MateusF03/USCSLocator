<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;
    use HasProfilePhoto;

    protected $fillable = [
        'name',
        'email',
        'time_range'
    ];

    protected $appends = [
        'profile_photo_url',
    ];
}
