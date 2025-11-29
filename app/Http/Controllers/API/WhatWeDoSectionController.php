<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WhatWeDoSection;

class WhatWeDoSectionController extends Controller
{
    public function index()
    {
        return response()->json(WhatWeDoSection::all());
    }

    public function show($id)
    {
        return response()->json(WhatWeDoSection::findOrFail($id));
    }

    public function store(Request $request)
    {
        $section = WhatWeDoSection::create($request->all());
        return response()->json($section, 201);
    }

    public function update(Request $request, $id)
    {
        $section = WhatWeDoSection::findOrFail($id);
        $section->update($request->all());
        return response()->json($section);
    }

    public function destroy($id)
    {
        WhatWeDoSection::destroy($id);
        return response()->json(null, 204);
    }
}