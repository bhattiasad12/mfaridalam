<?php

namespace App\Http\Controllers;

use App\Models\Presentation;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PresentationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageName = 'Presentations List'; // Set a page name
        $data = Presentation::orderBy('id', 'desc')->paginate(10);
        return view('presentations.index', compact('pageName', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('presentations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'file' => 'required|file|mimes:jpg,jpeg,png,pdf|max:10048',
        ]);

        $folderName = 'uploads/presentations/' . Str::slug($request->name) . '_' . time();

        $directory = public_path($folderName);
        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0755, true);
        }

        $originalFileName = $request->file('file')->getClientOriginalName();

        $filePath = $request->file('file')->move($directory, $originalFileName);

        Presentation::create([
            'name' => $request->name,
            'path' => $folderName . '/' . $originalFileName,
        ]);

        return redirect()->route('presentations.create')->with('success', 'Presentation saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Presentation $presentation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Presentation $presentation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Presentation $presentation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Presentation $presentation)
    {
        $filePath = public_path($presentation->path);

        if (File::exists($filePath)) {
            File::delete($filePath); // Delete the file from storage
        }

        $presentation->delete();

        return redirect()->route('presentations.index')->with('success', 'presentations and file deleted successfully!');
    }

    public function getPresentations()
    {
        $pageName = 'Presentations';
        $data = Presentation::orderBy('id', 'desc')->get();

        return view('presentations', compact('pageName', 'data'));
    }

    public function download($id)
    {
        $resource = Presentation::findOrFail($id);

        $filePath = public_path($resource->path);
        $originalFileName = basename($resource->path);

        if (file_exists($filePath)) {
            return response()->download($filePath, $originalFileName);
        } else {
            return redirect()->route('presentations.index')->with('error', 'File not found.');
        }
    }
}
