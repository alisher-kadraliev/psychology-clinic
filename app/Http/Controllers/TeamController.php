<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
        return view('admin.teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.teams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'title' => 'required|max:255',
            'position' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'facebook' => 'required|url',
            'twitter' => 'required|url',
            'linkedin' => 'required|url'
        ]);
        if ($request->hasFile('image')) {
            // Store the image in storage/app/public/teams
            $imagePath = $request->file('image')->store('teams', 'public');
            $validated['image'] = $imagePath;
        }

        Team::create($validated);

        return redirect()->route('teams.index')
            ->with('success', 'Kadromuza başarıyla eklendi.');
    }


    public function edit(string $id)
    {
        //
        $team = Team::find($id);
        return view('admin.teams.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validated = $request->validate([
            'title' => 'required|max:255',
            'position' => 'required|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Made nullable
            'facebook' => 'required|url',
            'twitter' => 'required|url',
            'linkedin' => 'required|url'
        ]);

        $team = Team::find($id);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($team->image) {
                Storage::disk('public')->delete($team->image);
            }

            // Store new image
            $imagePath = $request->file('image')->store('teams', 'public');
            $validated['image'] = $imagePath;
        }


        $team->update($validated);

        return redirect()->route('teams.index')
            ->with('success', 'Kadromuz başarıyla güncellendi.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $team = Team::find($id);

        // Delete the image file when deleting the team member
        if ($team->image) {
            Storage::disk('public')->delete($team->image);
        }

        $team->delete();

        return redirect()->route('teams.index')
            ->with('success', 'Kadromuz başarıyla silindi.');
    }
}
