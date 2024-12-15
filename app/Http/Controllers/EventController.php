<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Visit;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageName = '';
        return view('events.index', compact('pageName'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {}

    /**
     * Display the specified resource.
     */
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
        //
    }

    public function getEvents()
    {
        $visit = Visit::where('id', 1)->value('count');

        $pageName = 'Event Detail';

        return view('events', compact('pageName', 'visit'));
    }

    public function eventDetail()
    {
        $visit = Visit::where('id', 1)->value('count');

        $pageName = 'Events';

        return view('event_detail', compact('pageName', 'visit'));
    }
}
