<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageName = 'News List'; // Set a page name
        $data = News::all(); // Fetch all articles from the database
        return view('news.index', compact('pageName', 'data'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'file' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        $folderName = 'uploads/news/' . Str::slug($request->name) . '_' . time();

        $directory = public_path($folderName);
        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0755, true);
        }

        $originalFileName = $request->file('file')->getClientOriginalName();

        $filePath = $request->file('file')->move($directory, $originalFileName);

        News::create([
            'name' => $request->name,
            'path' => $folderName . '/' . $originalFileName,
        ]);

        return redirect()->route('news.create')->with('success', 'News saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $filePath = public_path($news->path);

        if (File::exists($filePath)) {
            File::delete($filePath); // Delete the file from storage
        }

        $news->delete();

        return redirect()->route('news.index')->with('success', 'news and file deleted successfully!');
    }

    public function getNews()
    {
        $pageName = 'News';

        return view('news', compact('pageName'));
    }

    public function download($id)
    {
        $resource = News::findOrFail($id);

        $filePath = public_path($resource->path);
        $originalFileName = basename($resource->path);

        if (file_exists($filePath)) {
            return response()->download($filePath, $originalFileName);
        } else {
            return redirect()->route('news.index')->with('error', 'File not found.');
        }
    }
}
