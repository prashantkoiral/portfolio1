<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'birthday',
        'website',
        'phone',
        'city',
        'age',
        'degree',
        'freelance',
        'description',
        'profile_photo',
        // You can add any other fields you want to be fillable here
    ];
}

