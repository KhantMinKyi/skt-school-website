<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Category;
use App\Models\Event;
use App\Models\EventComment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{

    protected $user;
    public function __construct()
    {
        $this->user = Auth::user();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        if ($this->user->is_admin == 1) {
            $branches = Branch::all();
            $events = Event::where('event_is_active', 1)->orderBy('created_at', 'desc')->paginate(10);
            $pendingCommentsCount = EventComment::where('event_comment_status', 'pending')->get()->count();
            return view('admin.events.event_index', compact('events', 'categories', 'branches', 'pendingCommentsCount'));
        } else {
            $user = $this->user;
            $events = Event::where('event_is_active', 1)->where('event_branch_id', $this->user->branch_id)->orderBy('created_at', 'desc')->paginate(10);
            $pendingCommentsCount = EventComment::where('event_comment_status', 'pending')->where('event_comment_branch_id', $this->user->branch_id)->get()->count();
            return view('staff.events.event_index', compact('events', 'categories', 'user', 'pendingCommentsCount'));
        }
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
        if ($this->user->is_admin == 1) {
            return to_route('admin-events.index')->with('success', 'Event Created Successfully!');
        } else {
            return to_route('staff-events.index')->with('success', 'Event Created Successfully!');
        }
        // dd($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $event = Event::with('branch', 'category')->find($id);
        if ($this->user->is_admin == 1) {
            if (!$event) {
                return to_route('admin-events.index')->with('error', 'Event Not Found');
            }
            return view('partial_view.admin.events.event_detail', compact('event'));
        } else {
            if (!$event) {
                return to_route('staff-events.index')->with('error', 'Event Not Found');
            }
            return view('partial_view.staff.events.event_detail', compact('event'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $event = Event::find($id);
        $categories = Category::all();
        $branches = Branch::all();
        if ($this->user->is_admin == 1) {
            if (!$event) {
                return to_route('admin-events.index')->with('error', 'Event Not Found');
            }
            return view('partial_view.admin.events.event_edit', compact('event', 'categories', 'branches'));
        } else {
            if (!$event) {
                return to_route('staff-events.index')->with('error', 'Event Not Found');
            }
            return view('partial_view.staff.events.event_edit', compact('event', 'categories', 'branches'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());


        $data = $request->validate([
            'event_banner'                  => 'nullable|file',
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
        // dd($data);
        $event = Event::find($id);
        $branch = Branch::find($data['event_branch_id']);
        $user_id = Auth::user()->id;

        if (!$branch) {
            if ($this->user->is_admin == 1) {
                return to_route('admin-events.index')->with('error', 'No Branch Found ! Please Try Again');
            } else {
                return to_route('staff-events.index')->with('error', 'No Branch Found ! Please Try Again');
            }
        }
        if (isset($data['event_banner'])) {
            if (File::exists(public_path($event->event_banner))) {
                File::delete(public_path($event->event_banner));
            }
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
        $data['event_updated_user_id'] = $user_id;
        $data['event_is_show_front'] = isset($data['event_is_show_front'])  ? 1 : 0;
        $event->update($data);
        if ($this->user->is_admin == 1) {
            return to_route('admin-events.index')->with('success', 'Event Updated Successfully');
        } else {
            return to_route('staff-events.index')->with('success', 'Event Updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function archivedEvent(string $id, Request $request)
    {
        $event = Event::find($id);
        // dd($event);
        if ($event) {
            $event->update(['event_is_active' => $request->status]);
            if ($this->user->is_admin == 1) {
                return to_route('admin-events.index')->with('success', 'Updated Successfully!');
            } else {
                return to_route('staff-events.index')->with('success', 'Updated Successfully!');
            }
            // dd($user);
        } else {
            return response()->json([
                'message' => 'Cannot Find a Event'
            ]);
        }
    }
    public function showArchivedEvent()
    {
        if ($this->user->is_admin == 1) {
            $archived_events = Event::where('event_is_active', 0)->paginate(10);
            // dd($archived_events);
            return view('partial_view.admin.events.event_archived', compact('archived_events'));
        } else {
            $archived_events = Event::where('event_is_active', 0)->where('event_branch_id', $this->user->branch_id)->paginate(10);
            return view('partial_view.staff.events.event_archived', compact('archived_events'));
        }
    }
}
