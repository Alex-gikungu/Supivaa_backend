<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ApproachStep;

class ApproachStepController extends Controller
{
    public function index()
    {
        return response()->json(ApproachStep::all());
    }
}

