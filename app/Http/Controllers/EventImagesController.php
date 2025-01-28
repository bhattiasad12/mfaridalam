<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class EventImagesController extends Controller
{
    /**
     * Display images for a specific event.
     */
    public function index(Event $event)
    {
        $images = $event->images;
        $pageName = "Event Images";

        return view('events.images.index', compact('event', 'images', 'pageName'));
    }

    /**
     * Show the form for uploading new images for a specific event.
     */
    public function create(Event $event)
    {
        $pageName = "Upload Images";

        return view('events.images.create', compact('event', 'pageName'));
    }

    /**
     * Store newly uploaded images for a specific event.
     */
    public function store(Request $request, Event $event)
    {
        $request->validate([
            'file.*' => 'required|image|mimes:jpg,jpeg,png|max:20048',
        ]);

        // Create a unique folder for the event if it doesn't exist
        $folderName = 'uploads/events/' . Str::slug($event->name) . '_' . $event->id;
        $directory = public_path($folderName);

        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0755, true);
        }

        // Process and store each uploaded image
        if ($request->hasFile('file')) {
            foreach ($request->file('file') as $image) {
                $uniqueFileName = uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move($directory, $uniqueFileName);
                $relativePath = $folderName . '/' . $uniqueFileName;

                // Save the image details in the database
                $event->images()->create([
                    'image_name' => $uniqueFileName,
                    'image_path' => $relativePath,
                ]);
            }
        }

        return redirect()->route('events.images.index', $event)->with('success', 'Images uploaded successfully!');
    }

    /**
     * Remove an image.
     */
    public function destroy(Event $event, EventImages $image)
    {
        $imagePath = public_path($image->image_path);

        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        $image->delete();

        return redirect()->route('events.images.index', $event)->with('success', 'Image deleted successfully!');
    }
}
