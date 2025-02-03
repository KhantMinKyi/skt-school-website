<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Category;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::where('event_is_active', 1)->orderBy('created_at', 'desc')->paginate(10);
        $categories = Category::all();
        $branches = Branch::all();
        return view('admin.events.event_index', compact('events', 'categories', 'branches'));
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

        $data = $request->validate([
            'event_banner'                  => 'required|file',
            'event_title'                   => 'required',
            'event_branch_id'               => 'required',
            'event_category_id'             => 'required',
            'event_body'                    => 'required',
            'event_video'                   => 'nullable',
            'event_image'                   => 'nullable',
            'event_is_show_front'           => 'nullable',
            'event_start_date'              => 'required',
            'event_end_date'                => 'required',
            'event_time'                    => 'required',
            'event_location'                => 'required',
            'event_registration_fee'        => 'required',
        ]);
        $branch = Branch::find($data['event_branch_id']);
        $user_id = Auth::user()->id;
        if (!$branch) {
            return to_route('admin-events.index')->with('error', 'No Branch Found ! Please Try Again');
        }
        if (isset($data['event_banner'])) {
            $filePath = "img/event_data/" . $branch->branch_short_name;
            if (!File::exists($filePath)) {
                $result = File::makeDirectory($filePath, 0755, true);
            }

            $photo = $data['event_banner'];
            $extension = $photo->getClientOriginalExtension();
            $imageUid = uniqid('', true);
            $photoName = $filePath . "/event_" . $imageUid . "." . $extension;

            $photo->move($filePath, "/event_" . $imageUid . "." . $extension);
            $data['event_banner'] = "/" . $photoName;
        }
        $data['event_created_date'] = Carbon::now();
        $data['event_created_user_id'] = $user_id;
        $data['event_updated_user_id'] = $user_id;
        Event::create($data);
        return to_route('admin-events.index')->with('success', 'Event Created Successfully!');
        // dd($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
