<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\PrimaryActivityPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PrimaryActivityPhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            'primary_activity_files'                     => 'required',
            'primary_activity_title'                     => 'required',
            'primary_activity_branch_id'                 => 'required',
        ]);
        $user = Auth::user();

        $branch = Branch::find($data['primary_activity_branch_id']);
        $user_id = Auth::user()->id;
        $uuid = Str::uuid();
        // dd($uuid);
        if (!empty($data['primary_activity_files'])) {
            foreach ($data['primary_activity_files'] as $primary_activity_file) {


                $filePath = "pdf/primary_activity_data/" . $branch->branch_short_name;
                if (!File::exists($filePath)) {
                    $result = File::makeDirectory($filePath, 0755, true);
                }

                $file = $primary_activity_file;
                $extension = $file->getClientOriginalExtension();
                $imageUid = uniqid('', true);
                $fileName = $filePath . "/primary_activity_file_" . $imageUid . "." . $extension;
                $file->move($filePath, "/primary_activity_file_" . $imageUid . "." . $extension);
                $data['primary_activity_file'] = "/" . $fileName;
                $data['primary_activity_created_user_id'] = $user_id;
                $data['primary_activity_updated_user_id'] = $user_id;
                $data['primary_activity_uid'] = $uuid;
                PrimaryActivityPhoto::create($data);
            }
        }
        if ($user->is_admin == 1) {
            return to_route('admin-primary-newsletters.index')->with('success', 'Activity Photos Created Successfully!');
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
        $primary_activity = PrimaryActivityPhoto::find($id);
        $branches = Branch::all();
        $user = Auth::user();
        if ($user->is_admin == 1) {
            return view('partial_view.admin.primary.primary_activity_photo_edit', compact('primary_activity', 'branches'));
        } else {
            dd($primary_activity);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = $request->validate([
            'primary_activity_file' => 'nullable|file',
            'primary_activity_title' => 'required',
            'primary_activity_branch_id' => 'required',
        ]);
        // dd($data);
        $primary_activity = PrimaryActivityPhoto::find($id);
        $branch = Branch::find($data['primary_activity_branch_id']);
        $user_id = Auth::user()->id;
        if (!$branch) {
            return to_route('admin-primary-newsletters.index')->with('error', 'No NewsLetter Found ! Please Try Again');
        }
        if (isset($data['primary_activity_file'])) {
            if (File::exists(public_path($primary_activity->primary_activity_file))) {
                File::delete(public_path($primary_activity->primary_activity_file));
            }
            $filePath = "pdf/primary_activity_data/" . $branch->branch_short_name;
            if (!File::exists($filePath)) {
                $result = File::makeDirectory($filePath, 0755, true);
            }

            $photo = $data['primary_activity_file'];
            $extension = $photo->getClientOriginalExtension();
            $imageUid = uniqid('', true);
            $photoName = $filePath . "/primary_activity_file_" . $imageUid . "." . $extension;

            $photo->move($filePath, "/primary_activity_file_" . $imageUid . "." . $extension);
            $data['primary_activity_file'] = "/" . $photoName;
        }
        $data['primary_activity_updated_user_id'] = $user_id;
        $primary_activity->update($data);
        return to_route('admin-primary-newsletters.index')->with('success', 'Activity Photo Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $primary_activity = PrimaryActivityPhoto::find($id);
        if (!$primary_activity) {
            return to_route('admin-primary-newsletters.index')->with('error', 'Activity Photo not Found');
        }
        if (File::exists(public_path($primary_activity->primary_activity_file))) {
            File::delete(public_path($primary_activity->primary_activity_file));
        }
        $primary_activity->delete();
        return to_route('admin-primary-newsletters.index')->with('success', 'Deleted Successfully');
    }
}
