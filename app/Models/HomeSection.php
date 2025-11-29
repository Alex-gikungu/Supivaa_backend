<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSection extends Model
{
    use HasFactory;

    protected $fillable = [
    'hero_title',
    'hero_subtext',
    'hero_button_1',
    'hero_button_2',
    'challenge_heading',
    'challenge_paragraph',
    'stat_1_value',
    'stat_1_text',
    'stat_2_value',
    'stat_2_text',
];

}

