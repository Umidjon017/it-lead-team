<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamOfExpert extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'profession',
        'description',
        'image',
        'link_telegram',
        'link_linkedin',
        'link_github',
    ];
}
