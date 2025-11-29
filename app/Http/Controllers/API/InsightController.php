<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller; // <-- REQUIRED IMPORT
use App\Models\Insight;
use Illuminate\Http\Request;

class InsightController extends Controller
{
    public function index()
    {
        return response()->json(Insight::all());
    }
}
