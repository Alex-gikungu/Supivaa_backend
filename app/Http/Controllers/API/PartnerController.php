<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Partner;

class PartnerController extends Controller
{
    /**
     * Return all partners (logos + stories).
     */
    public function index()
    {
        return response()->json(Partner::all());
    }

    /**
     * Return only partnership stories (records with description).
     */
    public function stories()
    {
        return response()->json(
            Partner::whereNotNull('description')->get()
        );
    }

    /**
     * Return only trusted partner logos (records marked as is_logo).
     * Restrict to the first 8 logos.
     */
    public function logos()
    {
        return response()->json(
            Partner::where('is_logo', true)
                   ->take(8)
                   ->get()
        );
    }
}
