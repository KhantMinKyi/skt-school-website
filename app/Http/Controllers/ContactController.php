<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    protected $user;
    public function __construct()
    {
        $this->user = Auth::user();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::with('branch');
        if ($this->user->is_admin == 1) {
            $contacts = $contacts->paginate(10);
            return view('partial_view.admin.contacts.contact_index', compact('contacts'));
        } else {
            $contacts = $contacts->where('contact_branch_id', $this->user->branch_id)->paginate(10);
            return view('partial_view.staff.contacts.contact_index', compact('contacts'));
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
            'contact_branch_id'         => 'required',
            'contact_name'              => 'required',
            'contact_email'             => 'required',
            'contact_subject'           => 'required',
            'contact_message'           => 'required',
        ]);
        $contact = Contact::create($data);
        return to_route('contact_us.home', $contact->branch->branch_short_name)->with('success', ' Submitted Successfully ! We Will Contact You Back ');
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
        $contact = Contact::find($id);
        if ($contact) {
            $contact->delete();
        }
        if ($this->user->is_admin == 1) {
            return to_route('admin-contacts.index')->with('success', 'Deleted Successfully');
        } else {
            return to_route('staff-contacts.index')->with('success', 'Deleted Successfully');
        }
    }
}
