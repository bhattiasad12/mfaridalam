<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageName = 'Reports List';
        $data = Report::orderBy('id', 'desc')->paginate(10);
        return view('reports.index', compact('pageName', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reports.create');
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

        $folderName = 'uploads/reports/' . Str::slug($request->name) . '_' . time();

        $directory = public_path($folderName);
        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0755, true);
        }

        $originalFileName = $request->file('file')->getClientOriginalName();

        $filePath = $request->file('file')->move($directory, $originalFileName);

        Report::create([
            'name' => $request->name,
            'path' => $folderName . '/' . $originalFileName,
        ]);

        return redirect()->route('reports.create')->with('success', 'Report saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Report $report)
    {
        $filePath = public_path($report->path);

        if (File::exists($filePath)) {
            File::delete($filePath); // Delete the file from storage
        }

        // Delete the report record from the database
        $report->delete();

        return redirect()->route('reports.index')->with('success', 'Reports and file deleted successfully!');
    }

    public function getReports(Request $request)
    {
        $pageName = 'Reports';
        if ($request->ajax()) {
            $data = Report::orderBy('id', 'desc')->paginate(10);
            return response()->json([
                'data' => view('partials.report-list', compact('data'))->render(),
                'next_page_url' => $data->nextPageUrl()
            ]);
        }

        $data = Report::orderBy('id', 'desc')->paginate(10);

        return view('reports', compact('pageName', 'data'));
    }

    public function download($id)
    {
        $resource = Report::findOrFail($id); // Find the article by ID

        $filePath = public_path($resource->path); // Get the full file path
        $originalFileName = basename($resource->path); // Get the original file name from the file path

        if (file_exists($filePath)) {
            return response()->download($filePath, $originalFileName); // Return file with original name
        } else {
            return redirect()->route('reports.index')->with('error', 'File not found.');
        }
    }
}
