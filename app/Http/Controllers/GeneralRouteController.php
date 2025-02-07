<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\PrincipalMessage;
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
    public function principalMessage($param)
    {
        $principal_message = PrincipalMessage::where('principal_message_branch_id', $param)->first();
        $layout = ($principal_message && $principal_message->branch->branch_short_name === 'SKT-CC')
            ? 'layouts.city_layout'
            : 'layouts.riverside_layout';
        return view('partial_view.guest.principal_message_index', compact('principal_message', 'layout'));
    }
}
