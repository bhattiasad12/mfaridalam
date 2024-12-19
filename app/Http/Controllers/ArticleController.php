<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageName = 'Articles List'; // Set a page name
        $data = Article::orderBy('id', 'desc')->paginate(10);

        return view('articles.index', compact('pageName', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
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

        // Create a unique folder name based on article name and timestamp
        $folderName = 'uploads/articles/' . Str::slug($request->name) . '_' . time(); // Ensure uniqueness by appending timestamp

        // Ensure the directory exists
        $directory = public_path($folderName);
        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0755, true);
        }

        // Get the original file name
        $originalFileName = $request->file('file')->getClientOriginalName();

        // Store the file in the unique folder with the original file name
        $filePath = $request->file('file')->move($directory, $originalFileName);

        // Save article to the database with the relative file path
        Article::create([
            'name' => $request->name,
            'path' => $folderName . '/' . $originalFileName, // Store the relative file path
        ]);

        return redirect()->route('articles.create')->with('success', 'Article saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $filePath = public_path($article->path);

        if (File::exists($filePath)) {
            File::delete($filePath); // Delete the file from storage
        }

        // Delete the article record from the database
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Article and file deleted successfully!');
    }

    public function getArticles()
    {
        $pageName = 'Articles';
        // $data = Article::all();
        $data = Article::orderBy('id', 'desc')->get();

        return view('articles', compact('pageName', 'data'));
    }

    public function download($id)
    {
        $article = Article::findOrFail($id); // Find the article by ID

        $filePath = public_path($article->path); // Get the full file path
        $originalFileName = basename($article->path); // Get the original file name from the file path

        if (file_exists($filePath)) {
            return response()->download($filePath, $originalFileName); // Return file with original name
        } else {
            return redirect()->route('articles.index')->with('error', 'File not found.');
        }
    }
}
