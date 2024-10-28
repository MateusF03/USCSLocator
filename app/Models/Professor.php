<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Jetstream\HasProfilePhoto;
class Professor extends Model
{
    use HasFactory;
    use HasProfilePhoto;

    protected $fillable = [
        'name',
        'email',
        'discipline',
        'time_range',
        'room'
    ];

    protected $appends = [
        'profile_photo_url',
    ];
}
