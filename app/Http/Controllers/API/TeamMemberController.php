<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    /**
     * Display a listing of the team members.
     */
    public function index()
    {
        return response()->json(TeamMember::all());
    }

    /**
     * Store a newly created team member.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'image' => 'required|string',
            'location' => 'required|string',
            'role' => 'required|string',
            'focus' => 'nullable|string',
            'group' => 'required|string',
        ]);

        $member = TeamMember::create($validated);
        return response()->json($member, 201);
    }

    /**
     * Display the specified team member.
     */
    public function show($id)
    {
        $member = TeamMember::findOrFail($id);
        return response()->json($member);
    }

    /**
     * Update the specified team member.
     */
    public function update(Request $request, $id)
    {
        $member = TeamMember::findOrFail($id);
        $member->update($request->all());
        return response()->json($member);
    }

    /**
     * Remove the specified team member.
     */
    public function destroy($id)
    {
        $member = TeamMember::findOrFail($id);
        $member->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }
}
