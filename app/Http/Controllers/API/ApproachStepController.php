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

    // ✅ Added edit method for admin dashboard
    public function edit($id)
    {
        $step = ApproachStep::findOrFail($id);
        return view('admin.approach-steps.edit', compact('step'));
    }
}
