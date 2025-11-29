<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Value;

class ValueController extends Controller
{
    /**
     * Return all values (Impact First, Partnership Mindset, etc.)
     */
    public function index()
    {
        return response()->json(Value::all());
    }
}
