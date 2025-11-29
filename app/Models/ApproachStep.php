<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApproachStep extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'badge_color',
    ];
}




