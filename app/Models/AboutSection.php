<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    use HasFactory;

    protected $fillable = [
    'title',
    'subtitle',
    'description',
    'image',
    'alt_text',
    'mission',
    'mission_image',
    'mission_alt',
    'vision',
    'vision_image',
    'vision_alt',
    'story',
    'story_image',
    'story_alt',
];

}

