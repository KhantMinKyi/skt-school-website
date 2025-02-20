<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->is_admin == 1) {
            $branches = Branch::all();
            $galleries = Gallery::with('branch')->get();
            return view('admin.galleries.gallery_index', compact('galleries', 'branches'));
        } else {
            $galleries = Gallery::where('gallery_branch_id', $user->branch_id)->get();
            dd($galleries);
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
            'gallery_photos'                        => 'required|array',
            'gallery_branch_id'                     => 'required',
            'gallery_title'                         => 'required',
            'gallery_category'                      => 'required',
        ]);
        $user = Auth::user();

        $branch = Branch::find($data['gallery_branch_id']);
        $user_id = Auth::user()->id;

        if (isset($data['gallery_photos'])) {

            foreach ($data['gallery_photos'] as $gallery_photo) {
                $filePath = "img/gallery_data/" . $branch->branch_short_name;
                if (!File::exists($filePath)) {
                    $result = File::makeDirectory($filePath, 0755, true);
                }

                $photo = $gallery_photo;
                $extension = $photo->getClientOriginalExtension();
                $name = $photo->getClientOriginalName();
                $imageUid = uniqid('', true);
                $photoName = $filePath . "/gallery_photo_" . $imageUid . "." . $extension;
                $photo->move($filePath, "/gallery_photo_" . $imageUid . "." . $extension);
                $data['gallery_photo'] = "/" . $photoName;
                $data['gallery_created_user_id'] = $user_id;
                $data['gallery_updated_user_id'] = $user_id;
                $data['slug'] = $branch->branch_short_name;
                Gallery::create($data);
            }
        }
        if ($user->is_admin == 1) {
            return to_route('admin-galleries.index')->with('success', ' Created Successfully!');
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
        $gallery = Gallery::find($id);
        $branches = Branch::all();
        $user = Auth::user();
        if ($user->is_admin == 1) {
            return view('partial_view.admin.galleries.gallery_edit', compact('gallery', 'branches'));
        } else {
            dd($gallery);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $data = $request->validate([
            'gallery_photo'                 => 'nullable|file',
            'gallery_title'                 => 'required',
            'gallery_branch_id'             => 'required',
            'gallery_category'              => 'required',
        ]);
        // dd($data);
        $gallery = Gallery::find($id);
        $branch = Branch::find($data['gallery_branch_id']);
        $user_id = Auth::user()->id;
        if (!$branch) {
            return to_route('admin-galleries.index')->with('error', 'No Gallery Found ! Please Try Again');
        }
        if (isset($data['gallery_photo'])) {
            if (File::exists(public_path($gallery->gallery_photo))) {
                File::delete(public_path($gallery->gallery_photo));
            }
            $filePath = "img/gallery_data/" . $branch->branch_short_name;
            if (!File::exists($filePath)) {
                $result = File::makeDirectory($filePath, 0755, true);
            }

            $photo = $data['gallery_photo'];
            $extension = $photo->getClientOriginalExtension();
            $imageUid = uniqid('', true);
            $photoName = $filePath . "/gallery_photo_" . $imageUid . "." . $extension;

            $photo->move($filePath, "/gallery_photo_" . $imageUid . "." . $extension);
            $data['gallery_photo'] = "/" . $photoName;
        }
        $data['gallery_updated_user_id'] = $user_id;
        $gallery->update($data);
        return to_route('admin-galleries.index')->with('success', 'Gallery Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function deleteGallery($id)
    {
        $gallery = Gallery::find($id);
        if (!$gallery) {
            return to_route('admin-galleries.index')->with('error', 'User not Found');
        }
        if (File::exists(public_path($gallery->gallery_photo))) {
            File::delete(public_path($gallery->gallery_photo));
        }
        $gallery->delete();
        return to_route('admin-galleries.index')->with('success', 'Deleted Successfully');
    }
}
