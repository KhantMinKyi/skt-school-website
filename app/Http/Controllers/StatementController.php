<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Statement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class StatementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->is_admin == 1) {
            $branches = Branch::all();
            $statements = Statement::all();

            return view('admin.statements.statement_index', compact('statements', 'branches'));
        } else {
            $statements = Statement::where('statement_branch_id', $user->branch_id)->get();
            dd($statements);
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
            'statement_photo'                     => 'required|file',
            'statement_branch_id'                 => 'required',
            'statement_vision'                    => 'required',
            'statement_mission'                   => 'required',
            'statement_philosophy'                => 'required',
        ]);
        $user = Auth::user();

        $branch = Branch::find($data['statement_branch_id']);
        $user_id = Auth::user()->id;
        $old_data = Statement::where('statement_branch_id', $data['statement_branch_id'])->first();
        if ($old_data) {
            if ($user->is_admin == 1) {
                return to_route('admin-statements.index')->with('error', "Statement Already Created");
            } else {
                dd('replace');
            }
        }


        if (isset($data['statement_photo'])) {
            $filePath = "img/statement_data/" . $branch->branch_short_name;
            if (!File::exists($filePath)) {
                $result = File::makeDirectory($filePath, 0755, true);
            }

            $photo = $data['statement_photo'];
            $extension = $photo->getClientOriginalExtension();
            $imageUid = uniqid('', true);
            $photoName = $filePath . "/statement_photo_" . $imageUid . "." . $extension;

            $photo->move($filePath, "/statement_photo_" . $imageUid . "." . $extension);
            $data['statement_photo'] = "/" . $photoName;
        }

        $data['statement_created_user_id'] = $user_id;
        $data['statement_updated_user_id'] = $user_id;
        $data['slug'] = $branch->branch_short_name;
        Statement::create($data);
        if ($user->is_admin == 1) {
            return to_route('admin-statements.index')->with('success', 'statement Created Successfully!');
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
        $statement = Statement::find($id);
        $branches = Branch::all();
        $user = Auth::user();
        if ($user->is_admin == 1) {
            return view('partial_view.admin.statements.statement_edit', compact('statement', 'branches'));
        } else {
            dd($statement);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = $request->validate([
            'statement_photo' => 'nullable|file',
            'statement_branch_id' => 'required',
            'statement_vision' => 'required',
            'statement_mission' => 'required',
            'statement_philosophy' => 'required',
        ]);
        // dd($data);
        $statement = Statement::find($id);
        $branch = Branch::find($data['statement_branch_id']);
        $user_id = Auth::user()->id;
        if (!$branch) {
            return to_route('admin-statements.index')->with('error', 'No Statement Found ! Please Try Again');
        }
        if (isset($data['statement_photo'])) {
            if (File::exists(public_path($statement->statement_photo))) {
                File::delete(public_path($statement->statement_photo));
            }
            $filePath = "img/statement_data/" . $branch->branch_short_name;
            if (!File::exists($filePath)) {
                $result = File::makeDirectory($filePath, 0755, true);
            }

            $photo = $data['statement_photo'];
            $extension = $photo->getClientOriginalExtension();
            $imageUid = uniqid('', true);
            $photoName = $filePath . "/statement_photo_" . $imageUid . "." . $extension;

            $photo->move($filePath, "/statement_photo_" . $imageUid . "." . $extension);
            $data['statement_photo'] = "/" . $photoName;
        }
        $data['statement_updated_user_id'] = $user_id;
        $statement->update($data);
        return to_route('admin-statements.index')->with('success', 'Statement Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
