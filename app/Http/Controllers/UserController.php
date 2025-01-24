<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(10);
        $branches = Branch::all();
        // dd($users);
        return view('admin.users.user_index', compact('users', 'branches'));
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
        // dd($request);
        $data = $request->validate([
            'branch_id' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'birth_date' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'user_name' => 'required',
            'password' => 'required',
            'user_type' => 'required',
        ]);
        if ($data['user_type']) {
            $data['is_admin'] = $data['user_type'] == 'admin' ? 1 : 0;
        }
        $data['password'] = bcrypt($data['password']);
        // dd($data);
        User::create($data);
        return to_route('admin-users.index');
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
