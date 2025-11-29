<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CTASection extends Model
{
    use HasFactory;

    protected $fillable = [
        'headline',
        'subtext',
        'button_text',
        'button_url',
    ];
}

