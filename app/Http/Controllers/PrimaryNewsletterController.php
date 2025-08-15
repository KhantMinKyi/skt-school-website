<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\PrimaryNewsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PrimaryNewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->is_admin == 1) {
            $branches = Branch::all();
            $primary_newsletters = PrimaryNewsletter::all();
            return view('admin.primary_newsletters.primary_newsletter_index', compact('primary_newsletters', 'branches'));
        } else {
            $primary_newsletters = PrimaryNewsletter::where('primary_newsletter_branch_id', $user->branch_id)->get();
            dd($primary_newsletters);
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
            'primary_newsletter_file'                     => 'required|file',
            'primary_newsletter_title'                     => 'required',
            'primary_newsletter_branch_id'                 => 'required',
        ]);
        $user = Auth::user();

        $branch = Branch::find($data['primary_newsletter_branch_id']);
        $user_id = Auth::user()->id;
        if (isset($data['primary_newsletter_file'])) {
            $filePath = "pdf/primary_newsletter_data/" . $branch->branch_short_name;
            if (!File::exists($filePath)) {
                $result = File::makeDirectory($filePath, 0755, true);
            }

            $file = $data['primary_newsletter_file'];
            $extension = $file->getClientOriginalExtension();
            $imageUid = uniqid('', true);
            $fileName = $filePath . "/primary_newsletter_file_" . $imageUid . "." . $extension;

            $file->move($filePath, "/primary_newsletter_file_" . $imageUid . "." . $extension);
            $data['primary_newsletter_file'] = "/" . $fileName;
        }

        $data['primary_newsletter_created_user_id'] = $user_id;
        $data['primary_newsletter_updated_user_id'] = $user_id;
        $data['slug'] = $branch->branch_short_name;
        PrimaryNewsletter::create($data);
        if ($user->is_admin == 1) {
            return to_route('admin-primary-newsletters.index')->with('success', 'Newsletter Created Successfully!');
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
