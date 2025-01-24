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
        $admin_users = User::where('user_status', 1)->where('user_type', 'admin')->paginate(10);
        $staff_users = User::where('user_status', 1)->where('user_type', 'staff')->paginate(10);
        $branches = Branch::all();
        // dd($users);
        return view('admin.users.user_index', compact('admin_users', 'staff_users', 'branches'));
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
        $same_data = User::where('user_name', $data['user_name'])->orWhere('email', $data['email'])->get();
        if (count($same_data) > 0) {
            return to_route('admin-users.index')->with('error', 'Email or Username is Invalid . Try Again!');
        }
        if ($data['user_type']) {
            $data['is_admin'] = $data['user_type'] == 'admin' ? 1 : 0;
        }
        $data['password'] = bcrypt($data['password']);
        // dd($data);
        User::create($data);
        return to_route('admin-users.index')->with('success', 'User Created Successfully!');
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
        $user = User::find($id);
        $branches = Branch::all();
        if ($user) {
            return view('partial_view.admin.users.user_edit', compact('user', 'branches'));
        } else {
            return response()->json([
                'message' => 'Error Finding User'
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->user_type) {
            $request['is_admin'] = $request->user_type == 'admin' ? 1 : 0;
        }
        $user = User::find($request->user_id);
        $user->update($request->all());
        return to_route('admin-users.index')->with('success', 'User Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function archivedUser(string $id, Request $request)
    {
        $user = User::find($id);
        // dd($user);
        if ($user) {
            $user->update(['user_status' => $request->status]);
            return to_route('admin-users.index')->with('success', 'Updated Successfully!');;
            // dd($user);
        } else {
            return response()->json([
                'message' => 'Cannot Find a User'
            ]);
        }
    }
    public function showArchivedUser()
    {
        $archived_users = User::where('user_status', 0)->paginate(10);
        // dd($archived_users);
        return view('partial_view.admin.users.user_archived', compact('archived_users'));
    }
}
