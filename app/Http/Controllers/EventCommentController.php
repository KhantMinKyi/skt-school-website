<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;

class EventCommentController extends Controller
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
        $eventCommentQuery = EventComment::with('event');
        if ($this->user->is_admin == 1) {
            $event_comments = $eventCommentQuery->paginate(10);
            return view('partial_view.admin.events.event_comment_index', compact('event_comments'));
        } else {
            $event_comments = $eventCommentQuery->where('event_comment_branch_id', $this->user->branch_id)->paginate(10);
            return view('partial_view.staff.events.event_comment_index', compact('event_comments'));
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
            'event_comment_event_id'          => 'required',
            'event_comment_user_name'        => 'required',
            'event_comment_user_email'       => 'required',
            'event_comment_subject'          => 'required',
            'event_comment_body'             => 'required',
        ]);
        $event = Event::find($data['event_comment_event_id']);
        $executed = RateLimiter::attempt(
            'send-message:',
            $perTwoMinutes  = 5,
            function () {},
            $decayRate = 120,
        );
        if (!$event) {
            return to_route('event.home');
        }
        $data['event_comment_branch_id'] = $event->event_branch_id;
        EventComment::create($data);
        return to_route('event-detail.home', $event->id)->with('success', ' Comment Added , It will be shown after validation . ');
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
        // dd($id);
        $event_comment = EventComment::find($id);
        if ($event_comment) {
            $event_comment->delete();
        }
        if ($this->user->is_admin == 1) {
            return to_route('admin-event-comments.index')->with('success', 'Deleted Successfully');
        } else {
            return to_route('staff-event-comments.index')->with('success', 'Deleted Successfully');
        }
    }

    public function changeCommentStatus(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'event_comment_id' => 'required',
            'event_comment_status' => 'required',
        ]);
        $event_comment = EventComment::find($data['event_comment_id']);
        if ($event_comment) {
            $event_comment->update(
                [
                    'event_comment_status' => $data['event_comment_status'],
                    'event_comment_action_user_id' => Auth::user()->id,
                ]
            );
        }
        if ($this->user->is_admin == 1) {
            return to_route('admin-event-comments.index')->with('success', 'Updated Successfully');
        } else {
            return to_route('staff-event-comments.index')->with('success', 'Updated Successfully');
        }
    }
}
