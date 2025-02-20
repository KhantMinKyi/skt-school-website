<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        if ($user->is_admin == 1) {
            $branches = Branch::all();
            $teachers = Teacher::with('branch')->get();
            return view('admin.teachers.teacher_index', compact('teachers', 'branches'));
        } else {
            $teachers = Teacher::where('teacher_branch_id', $user->branch_id)->get();
            dd($teachers);
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
            'teacher_photos'                     => 'required|array',
            'teacher_branch_id'                 => 'required',
            'teacher_class'                     => 'required',
        ]);
        $user = Auth::user();

        $branch = Branch::find($data['teacher_branch_id']);
        $user_id = Auth::user()->id;

        if (isset($data['teacher_photos'])) {

            foreach ($data['teacher_photos'] as $teacher_photo) {
                $filePath = "img/teacher_data/" . $branch->branch_short_name;
                if (!File::exists($filePath)) {
                    $result = File::makeDirectory($filePath, 0755, true);
                }

                $photo = $teacher_photo;
                $extension = $photo->getClientOriginalExtension();
                $name = $photo->getClientOriginalName();
                $imageUid = uniqid('', true);
                $photoName = $filePath . "/teacher_photo_" . $imageUid . "." . $extension;
                $photo->move($filePath, "/teacher_photo_" . $imageUid . "." . $extension);
                $data['teacher_photo'] = "/" . $photoName;
                $data['teacher_name'] = $name;
                $data['teacher_created_user_id'] = $user_id;
                $data['teacher_updated_user_id'] = $user_id;
                $data['slug'] = $branch->branch_short_name;
                Teacher::create($data);
            }
        }
        if ($user->is_admin == 1) {
            return to_route('admin-teachers.index')->with('success', ' Created Successfully!');
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
        $teacher = Teacher::find($id);
        $branches = Branch::all();
        $user = Auth::user();
        if ($user->is_admin == 1) {
            return view('partial_view.admin.teachers.teacher_edit', compact('teacher', 'branches'));
        } else {
            dd($teacher);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        //
        $data = $request->validate([
            'teacher_photo' => 'nullable|file',
            'teacher_branch_id' => 'required',
            'teacher_name' => 'required',
            'teacher_class' => 'required',
        ]);
        // dd($data);
        $teacher = Teacher::find($id);
        $branch = Branch::find($data['teacher_branch_id']);
        $user_id = Auth::user()->id;
        if (!$branch) {
            return to_route('admin-teachers.index')->with('error', 'No Teacher Found ! Please Try Again');
        }
        if (isset($data['teacher_photo'])) {
            if (File::exists(public_path($teacher->teacher_photo))) {
                File::delete(public_path($teacher->teacher_photo));
            }
            $filePath = "img/teacher_data/" . $branch->branch_short_name;
            if (!File::exists($filePath)) {
                $result = File::makeDirectory($filePath, 0755, true);
            }

            $photo = $data['teacher_photo'];
            $extension = $photo->getClientOriginalExtension();
            $imageUid = uniqid('', true);
            $photoName = $filePath . "/teacher_photo_" . $imageUid . "." . $extension;

            $photo->move($filePath, "/teacher_photo_" . $imageUid . "." . $extension);
            $data['teacher_photo'] = "/" . $photoName;
        }
        $data['teacher_updated_user_id'] = $user_id;
        $teacher->update($data);
        return to_route('admin-teachers.index')->with('success', 'Teacher Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        dd($id);
    }
    public function deleteTeacher($id)
    {
        $teacher = Teacher::find($id);
        if (!$teacher) {
            return to_route('admin-teachers.index')->with('error', 'User not Found');
        }
        if (File::exists(public_path($teacher->teacher_photo))) {
            File::delete(public_path($teacher->teacher_photo));
        }
        $teacher->delete();
        return to_route('admin-teachers.index')->with('success', 'Deleted Successfully');
    }
}
