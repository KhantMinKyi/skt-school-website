<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\PrincipalMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PrincipalMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->is_admin == 1) {
            $branches = Branch::all();
            $principal_messages = PrincipalMessage::all();
            return view('admin.principal_messages.principal_message_index', compact('principal_messages', 'branches'));
        } else {
            $principal_messages = PrincipalMessage::where('principal_message_branch_id', $user->branch_id)->get();
            dd($principal_messages);
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
            'principal_photo'               => 'required|file',
            'principal_name'                => 'required',
            'principal_message'             => 'required',
            'principal_message_branch_id'   => 'required',
        ]);
        $user = Auth::user();

        $branch = Branch::find($data['principal_message_branch_id']);
        $user_id = Auth::user()->id;
        $old_data = PrincipalMessage::where('principal_message_branch_id', $data['principal_message_branch_id'])->first();
        if ($old_data) {
            if ($user->is_admin == 1) {
                return to_route('admin-principal-messages.index')->with('error', "Principal Message Already Created");
            } else {
                dd('replace');
            }
        }


        if (isset($data['principal_photo'])) {
            $filePath = "img/principal_data/" . $branch->branch_short_name;
            if (!File::exists($filePath)) {
                $result = File::makeDirectory($filePath, 0755, true);
            }

            $photo = $data['principal_photo'];
            $extension = $photo->getClientOriginalExtension();
            $imageUid = uniqid('', true);
            $photoName = $filePath . "/principal_photo_" . $imageUid . "." . $extension;

            $photo->move($filePath, "/principal_photo_" . $imageUid . "." . $extension);
            $data['principal_photo'] = "/" . $photoName;
        }

        $data['principal_message_created_user_id'] = $user_id;
        $data['principal_message_updated_user_id'] = $user_id;
        PrincipalMessage::create($data);
        if ($user->is_admin == 1) {
            return to_route('admin-principal-messages.index')->with('success', 'Principal Message Created Successfully!');
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
        $principal_message = PrincipalMessage::find($id);
        $branches = Branch::all();
        $user = Auth::user();
        if ($user->is_admin == 1) {
            return view('partial_view.admin.principal_messages.principal_message_edit', compact('principal_message', 'branches'));
        } else {
            dd($principal_message);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $data = $request->validate([
            'principal_photo' => 'nullable|file',
            'principal_name' => 'required',
            'principal_message_branch_id' => 'required',
            'principal_message' => 'required',
        ]);
        // dd($data);
        $principal_message = PrincipalMessage::find($id);
        $branch = Branch::find($data['principal_message_branch_id']);
        $user_id = Auth::user()->id;
        if (!$branch) {
            return to_route('admin-principal-messages.index')->with('error', 'No Principal Found ! Please Try Again');
        }
        if (isset($data['principal_photo'])) {
            if (File::exists(public_path($principal_message->principal_photo))) {
                File::delete(public_path($principal_message->principal_photo));
            }
            $filePath = "img/principal_data/" . $branch->branch_short_name;
            if (!File::exists($filePath)) {
                $result = File::makeDirectory($filePath, 0755, true);
            }

            $photo = $data['principal_photo'];
            $extension = $photo->getClientOriginalExtension();
            $imageUid = uniqid('', true);
            $photoName = $filePath . "/principal_photo_" . $imageUid . "." . $extension;

            $photo->move($filePath, "/principal_photo_" . $imageUid . "." . $extension);
            $data['principal_photo'] = "/" . $photoName;
        }
        $data['principal_message_updated_user_id'] = $user_id;
        $principal_message->update($data);
        return to_route('admin-principal-messages.index')->with('success', 'Principal Message Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
