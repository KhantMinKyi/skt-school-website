<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Calendar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->is_admin == 1) {
            $branches = Branch::all();
            $calendars = Calendar::all();
            return view('admin.calendars.calendar_index', compact('calendars', 'branches'));
        } else {
            $calendars = Calendar::where('calendar_branch_id', $user->branch_id)->get();
            dd($calendars);
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
        // dd($request->all());
        $data = $request->validate([
            'calendar_photo'                     => 'required|file',
            'calendar_title'                     => 'required',
            'calendar_branch_id'                 => 'required',
        ]);
        $user = Auth::user();

        $branch = Branch::find($data['calendar_branch_id']);
        $user_id = Auth::user()->id;
        $old_data = Calendar::where('calendar_branch_id', $data['calendar_branch_id'])->first();
        if ($old_data) {
            if ($user->is_admin == 1) {
                return to_route('admin-calendars.index')->with('error', "Calendar Already Created");
            } else {
                dd('replace');
            }
        }


        if (isset($data['calendar_photo'])) {
            $filePath = "img/calendar_data/" . $branch->branch_short_name;
            if (!File::exists($filePath)) {
                $result = File::makeDirectory($filePath, 0755, true);
            }

            $photo = $data['calendar_photo'];
            $extension = $photo->getClientOriginalExtension();
            $imageUid = uniqid('', true);
            $photoName = $filePath . "/calendar_photo_" . $imageUid . "." . $extension;

            $photo->move($filePath, "/calendar_photo_" . $imageUid . "." . $extension);
            $data['calendar_photo'] = "/" . $photoName;
        }

        $data['calendar_created_user_id'] = $user_id;
        $data['calendar_updated_user_id'] = $user_id;
        $data['slug'] = $branch->branch_short_name;
        Calendar::create($data);
        if ($user->is_admin == 1) {
            return to_route('admin-calendars.index')->with('success', 'Calendar Created Successfully!');
        } else {
            dd('replace');
        }
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
        $calendar = Calendar::find($id);
        $branches = Branch::all();
        $user = Auth::user();
        if ($user->is_admin == 1) {
            return view('partial_view.admin.calendars.calendar_edit', compact('calendar', 'branches'));
        } else {
            dd($calendar);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'calendar_photo' => 'nullable|file',
            'calendar_title' => 'required',
            'calendar_branch_id' => 'required',
        ]);
        // dd($data);
        $calendar = Calendar::find($id);
        $branch = Branch::find($data['calendar_branch_id']);
        $user_id = Auth::user()->id;
        if (!$branch) {
            return to_route('admin-calendars.index')->with('error', 'No Calendar Found ! Please Try Again');
        }
        if (isset($data['calendar_photo'])) {
            if (File::exists(public_path($calendar->calendar_photo))) {
                File::delete(public_path($calendar->calendar_photo));
            }
            $filePath = "img/calendar_data/" . $branch->branch_short_name;
            if (!File::exists($filePath)) {
                $result = File::makeDirectory($filePath, 0755, true);
            }

            $photo = $data['calendar_photo'];
            $extension = $photo->getClientOriginalExtension();
            $imageUid = uniqid('', true);
            $photoName = $filePath . "/calendar_photo_" . $imageUid . "." . $extension;

            $photo->move($filePath, "/calendar_photo_" . $imageUid . "." . $extension);
            $data['calendar_photo'] = "/" . $photoName;
        }
        $data['calendar_updated_user_id'] = $user_id;
        $calendar->update($data);
        return to_route('admin-calendars.index')->with('success', 'Calendar Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
