<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Subservice;
use Illuminate\Http\Request;

class SubserviceController extends Controller
{
    public function create(Service $service)
    {
        return view('admin.subservices.create', compact('service'));
    }

    public function store(Request $request, Service $service)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'nullable|numeric|min:0',
            'time' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('subservices', 'public');
            $validated['image'] = $path;
        }

        $service->subservices()->create($validated);

        return redirect()->route('services.show', $service)
            ->with('success', 'Alt Hizmet başarıyla oluşturuldu.');
    }

    public function edit(Service $service, Subservice $subservice)
    {
        return view('admin.subservices.edit', compact('service', 'subservice'));
    }

    public function update(Request $request, Service $service, Subservice $subservice)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'nullable|numeric|min:0',
            'time' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('subservices', 'public');
            $validated['image'] = $path;
        }

        $subservice->update($validated);

        return redirect()->route('services.show', $service)
            ->with('success', 'Alt Hizmet başarıyla güncellendi.');
    }

    public function destroy(Service $service, Subservice $subservice)
    {
        $subservice->delete();
        return redirect()->route('services.show', $service)
            ->with('success', 'Alt Hizmet başarıyla silindi.');
    }
}