<?php

namespace App\Http\Controllers;

use App\Models\Interview;
use App\Models\Visit;
use Illuminate\Http\Request;

class InterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageName = '';
        return view('interviews.index', compact('pageName'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Interview $interview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Interview $interview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Interview $interview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Interview $interview)
    {
        //
    }

    public function getInterviews()
    {
        $visit = Visit::where('id', 1)->value('count');

        $pageName = 'Interviews';

        return view('interviews', compact('pageName', 'visit'));
    }
}
