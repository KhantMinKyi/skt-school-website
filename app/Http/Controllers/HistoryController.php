<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->is_admin == 1) {
            $branches = Branch::all();
            $histories = History::all();
            return view('admin.histories.history_index', compact('histories', 'branches'));
        } else {
            $histories = History::where('history_branch_id', $user->branch_id)->get();
            dd($histories);
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
            'history_photo'                     => 'required|file',
            'history_title'                     => 'required',
            'history_body'                      => 'required',
            'history_branch_id'                 => 'required',
        ]);
        $user = Auth::user();

        $branch = Branch::find($data['history_branch_id']);
        $user_id = Auth::user()->id;
        $old_data = History::where('history_branch_id', $data['history_branch_id'])->first();
        if ($old_data) {
            if ($user->is_admin == 1) {
                return to_route('admin-histories.index')->with('error', "History Already Created");
            } else {
                dd('replace');
            }
        }


        if (isset($data['history_photo'])) {
            $filePath = "img/history_data/" . $branch->branch_short_name;
            if (!File::exists($filePath)) {
                $result = File::makeDirectory($filePath, 0755, true);
            }

            $photo = $data['history_photo'];
            $extension = $photo->getClientOriginalExtension();
            $imageUid = uniqid('', true);
            $photoName = $filePath . "/history_photo_" . $imageUid . "." . $extension;

            $photo->move($filePath, "/history_photo_" . $imageUid . "." . $extension);
            $data['history_photo'] = "/" . $photoName;
        }

        $data['history_created_user_id'] = $user_id;
        $data['history_updated_user_id'] = $user_id;
        $data['slug'] = $branch->branch_short_name;
        History::create($data);
        if ($user->is_admin == 1) {
            return to_route('admin-histories.index')->with('success', 'History Created Successfully!');
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
        $history = History::find($id);
        $branches = Branch::all();
        $user = Auth::user();
        if ($user->is_admin == 1) {
            return view('partial_view.admin.histories.history_edit', compact('history', 'branches'));
        } else {
            dd($history);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $data = $request->validate([
            'history_photo' => 'nullable|file',
            'history_title' => 'required',
            'history_branch_id' => 'required',
            'history_body' => 'required',
        ]);
        // dd($data);
        $history = History::find($id);
        $branch = Branch::find($data['history_branch_id']);
        $user_id = Auth::user()->id;
        if (!$branch) {
            return to_route('admin-histories.index')->with('error', 'No History Found ! Please Try Again');
        }
        if (isset($data['history_photo'])) {
            if (File::exists(public_path($history->history_photo))) {
                File::delete(public_path($history->history_photo));
            }
            $filePath = "img/history_data/" . $branch->branch_short_name;
            if (!File::exists($filePath)) {
                $result = File::makeDirectory($filePath, 0755, true);
            }

            $photo = $data['history_photo'];
            $extension = $photo->getClientOriginalExtension();
            $imageUid = uniqid('', true);
            $photoName = $filePath . "/history_photo_" . $imageUid . "." . $extension;

            $photo->move($filePath, "/history_photo_" . $imageUid . "." . $extension);
            $data['history_photo'] = "/" . $photoName;
        }
        $data['history_updated_user_id'] = $user_id;
        $history->update($data);
        return to_route('admin-histories.index')->with('success', 'History Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
