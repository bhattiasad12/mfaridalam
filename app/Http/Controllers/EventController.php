<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

ini_set('max_file_uploads', '70');

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageName = '';
        $data = Event::orderBy('id', 'desc')->paginate(10);

        return view('events.index', compact('pageName', 'data'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'file.*' => 'required|image|mimes:jpg,jpeg,png|max:20048',
        ]);

        // Create the event
        $event = Event::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        // Create a unique folder name based on event name and timestamp
        $folderName = 'uploads/events/' . Str::slug($request->name) . '_' . time(); // Unique folder name
        $directory = public_path($folderName); // Full directory path

        // Ensure the directory exists
        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0755, true);
        }

        if ($request->hasFile('file')) {
            foreach ($request->file('file') as $image) {
                // Get the original file name
                $originalFileName = $image->getClientOriginalName();

                // Store the file in the unique folder
                $image->move($directory, $originalFileName);

                // Store the relative path in the database
                $relativePath = $folderName . '/' . $originalFileName;

                // Save image details in the event_images table
                $event->images()->create([
                    'image_name' => $originalFileName,
                    'image_path' => $relativePath, // Save relative path
                ]);
            }
        }

        return response()->json([
            'message' => 'Event created successfully!',
            'event' => $event,
        ]);
    }


    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        // Delete the article record from the database
        $event->delete();

        return redirect()->route('events.index')->with('success', 'event and file deleted successfully!');
    }

    public function getEvents(Request $request)
    {
        $pageName = 'Events';
        $data = Event::with('images')->orderBy('id', 'desc')->paginate(6);

        if ($request->ajax()) {
            return response()->json([
                'data' => view('partials.events', compact('data'))->render(),
                'nextPageUrl' => $data->nextPageUrl()
            ]);
        }

        return view('events', compact('pageName', 'data'));
    }

    public function eventDetail()
    {
        $pageName = 'Events';

        return view('event_detail', compact('pageName'));
    }
}
