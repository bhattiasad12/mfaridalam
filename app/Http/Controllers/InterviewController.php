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

        $data = Interview::orderBy('id', 'desc')->paginate(10);
        return view('interviews.index', compact('pageName', 'data'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('interviews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|string|max:255',
        ]);

        $url = explode('=', $request->url);

        Interview::create([
            'name' => $request->name,
            'url' => $url[1],
        ]);

        return redirect()->route('interviews.create')->with('success', 'Interview saved successfully!');
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
        $interview->delete();

        return redirect()->route('interviews.index')->with('success', 'interview deleted successfully!');
    }

    public function getInterviews(Request $request)
    {
        $data = Interview::orderBy('id', 'desc')->paginate(8);

        if ($request->ajax()) {
            return response()->json([
                'data' => view('partials.interview_videos', compact('data'))->render(),
                'nextPageUrl' => $data->nextPageUrl()
            ]);
        }

        $pageName = 'Interviews';
        return view('interviews', compact('pageName', 'data'));
    }
}
