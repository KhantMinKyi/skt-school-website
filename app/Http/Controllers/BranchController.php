<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $branches = Branch::where('is_active', 1)->paginate(10);
        return view('admin.branches.branch_index', compact('branches'));
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
            'branch_logo' => 'required|file',
            'branch_name' => 'required',
            'branch_short_name' => 'required',
            'branch_location' => 'required',
            'branch_description' => 'nullable',
        ]);

        if (isset($data['branch_logo'])) {
            $filePath = "img/branch_data/" . $data['branch_short_name'];
            if (!File::exists($filePath)) {
                $result = File::makeDirectory($filePath, 0755, true);
            }

            $photo = $data['branch_logo'];
            $extension = $photo->getClientOriginalExtension();
            $imageUid = uniqid('', true);
            $photoName = $filePath . "/team_" . $imageUid . "." . $extension;

            $photo->move($filePath, "/team_" . $imageUid . "." . $extension);
            $data['branch_logo'] = "/" . $photoName;
        }
        Branch::create($data);
        return to_route('admin-branches.index')->with('success', 'Branch Created Successfully!');
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
