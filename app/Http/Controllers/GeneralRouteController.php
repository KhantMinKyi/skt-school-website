<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;

class GeneralRouteController extends Controller
{
    public function riverHome()
    {
        $branch = Branch::with([
            'posts' => function ($query) {
                $query->with('category')->where('post_is_show_front', 1);
            },
            'events' => function ($query) {
                $query->with('category')->where('event_is_show_front', 1);
            },
            'principal_message',
            'history',
            'statement'
        ])->where('branch_short_name', 'SKT-RC')->first();
        if (!$branch) {
            return response()->json([
                'error' => 'Campus Not Found'
            ]);
        }
        // return response()->json($branch);
        return view('pages.riverside.home', compact('branch'));
    }
    public function cityHome()
    {
        $branch = Branch::with([
            'posts' => function ($query) {
                $query->with('category')->where('post_is_show_front', 1);
            },
            'events' => function ($query) {
                $query->with('category')->where('event_is_show_front', 1);
            },
            'principal_message',
            'history',
            'statement'
        ])->where('branch_short_name', 'SKT-CC')->first();
        if (!$branch) {
            return response()->json([
                'error' => 'Campus Not Found'
            ]);
        }
        // return response()->json($branch);
        return view('pages.city.home', compact('branch'));
    }
}
