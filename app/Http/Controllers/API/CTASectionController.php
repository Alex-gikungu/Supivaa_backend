<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller; // <-- REQUIRED
use App\Models\CTASection;
use Illuminate\Http\Request;

class CTASectionController extends Controller
{
    public function index()
    {
        return response()->json(CTASection::all());
    }
}
