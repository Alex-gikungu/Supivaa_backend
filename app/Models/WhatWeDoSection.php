<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhatWeDoSection extends Model
{
    protected $table = 'what_we_do_sections';

    protected $fillable = [
        'whatwedo_intro',       
        'whatwedo_title',
        'whatwedo_description',
        'whatwedo_button_1',
        'whatwedo_button_2',
        'whatwedo_image',
        'approach_steps',
        'different_title',
        'different_points',
        'different_image',
        'serve_title',
        'serve_cards',
        'ready_title',
        'ready_subtext',
        'ready_button_1',
        'ready_button_2',
    ];

    protected $casts = [
        'approach_steps'   => 'array',
        'different_points' => 'array',
        'serve_cards'      => 'array',
    ];

    // Convert relative image paths to absolute URLs only if present
    public function getWhatwedoImageAttribute($value)
    {
        return ($value && is_string($value)) ? url($value) : null;
    }

    public function getDifferentImageAttribute($value)
    {
        return ($value && is_string($value)) ? url($value) : null;
    }

    public function getServeCardsAttribute($value)
    {
        // If $casts didn’t kick in or DB returns a string, decode safely
        $cards = is_string($value) ? json_decode($value, true) : $value;

        if (!is_array($cards)) {
            return [];
        }

        foreach ($cards as &$card) {
            // Only convert to full URL if a non-empty string path exists
            if (isset($card['icon']) && is_string($card['icon']) && strlen(trim($card['icon'])) > 0) {
                $card['icon'] = url($card['icon']);
            } else {
                
                $card['icon'] = null;
            }
        }

        return $cards;
    }
}
