<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSection;

class HomeSectionController extends Controller
{
    /**
     * Public endpoint: return the single HomeSection record.
     */
    public function index()
    {
        $home = HomeSection::first();

        if (!$home) {
            return response()->json(['error' => 'No HomeSection found'], 404);
        }

        return response()->json($home);
    }

    /**
     * Show a specific HomeSection by ID (admin use).
     */
    public function show($id)
    {
        return response()->json(HomeSection::findOrFail($id));
    }

    /**
     * Admin: create a new HomeSection (not usually needed since you seed one).
     */
    public function store(Request $request)
    {
        $section = HomeSection::create($request->all());
        return response()->json($section, 201);
    }

    /**
     * Admin: update an existing HomeSection.
     */
    public function update(Request $request, $id)
    {
        $section = HomeSection::findOrFail($id);
        $section->update($request->all());
        return response()->json($section);
    }

    /**
     * Admin: delete a HomeSection.
     */
    public function destroy($id)
    {
        HomeSection::destroy($id);
        return response()->json(null, 204);
    }
}
