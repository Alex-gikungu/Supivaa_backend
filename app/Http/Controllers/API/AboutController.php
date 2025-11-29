<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Public: Return the About section (first record).
     */
    public function index()
    {
        return response()->json(AboutSection::first());
    }

    /**
     * Admin: Create a new About section.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'subtitle' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|string',
            'alt_text' => 'nullable|string',
            'mission' => 'nullable|string',
            'mission_image' => 'nullable|string',
            'mission_alt' => 'nullable|string',
            'vision' => 'nullable|string',
            'vision_image' => 'nullable|string',
            'vision_alt' => 'nullable|string',
            'story' => 'nullable|string',
            'story_image' => 'nullable|string',
            'story_alt' => 'nullable|string',
        ]);

        $about = AboutSection::create($validated);
        return response()->json($about, 201);
    }

    /**
     * Admin: Update an existing About section.
     */
    public function update(Request $request, $id)
    {
        $about = AboutSection::findOrFail($id);

        $validated = $request->validate([
            'title' => 'sometimes|string',
            'subtitle' => 'sometimes|string',
            'description' => 'sometimes|string',
            'image' => 'nullable|string',
            'alt_text' => 'nullable|string',
            'mission' => 'nullable|string',
            'mission_image' => 'nullable|string',
            'mission_alt' => 'nullable|string',
            'vision' => 'nullable|string',
            'vision_image' => 'nullable|string',
            'vision_alt' => 'nullable|string',
            'story' => 'nullable|string',
            'story_image' => 'nullable|string',
            'story_alt' => 'nullable|string',
        ]);

        $about->update($validated);
        return response()->json($about);
    }

    /**
     * Admin: Delete an About section.
     */
    public function destroy($id)
    {
        $about = AboutSection::findOrFail($id);
        $about->delete();

        return response()->json(['message' => 'About section deleted']);
    }
}
