<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Calendar;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\History;
use App\Models\Post;
use App\Models\PrincipalMessage;
use App\Models\Statement;
use App\Models\Teacher;
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
            'statement',
            'galleries' => function ($query) {
                $query->take(8); // Limit to 8 galleries
            }
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
            'statement',
            'galleries' => function ($query) {
                $query->take(8); // Limit to 8 galleries
            }
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
        return view('partial_view.guest.about_us.principal_message_index', compact('principal_message', 'layout'));
    }
    public function ourHistory($param)
    {
        $our_history = History::where('slug', $param)->first();
        $layout = ($our_history && $our_history->slug === 'SKT-CC')
            ? 'layouts.city_layout'
            : 'layouts.riverside_layout';
        return view('partial_view.guest.about_us.history_index', compact('our_history', 'layout'));
    }
    public function ourStatement($param)
    {
        $our_statement = Statement::with('branch')->where('slug', $param)->first();
        $layout = ($our_statement && $our_statement->slug === 'SKT-CC')
            ? 'layouts.city_layout'
            : 'layouts.riverside_layout';
        return view('partial_view.guest.about_us.statement_index', compact('our_statement', 'layout'));
    }
    public function ourTeacher($param)
    {
        $our_teachers = Teacher::with('branch')->where('slug', $param)->get();
        $branch = Branch::where('branch_short_name', $param)->first();
        $layout = ($branch && $branch->branch_short_name === 'SKT-CC')
            ? 'layouts.city_layout'
            : 'layouts.riverside_layout';
        return view('partial_view.guest.about_us.teacher_index', compact('our_teachers', 'layout', 'branch'));
    }
    public function sisterSchool($param)
    {
        $branch = Branch::where('branch_short_name', $param)->first();
        $layout = ($branch && $branch->branch_short_name === 'SKT-CC')
            ? 'layouts.city_layout'
            : 'layouts.riverside_layout';
        return view('partial_view.guest.about_us.sister_school_index', compact('layout', 'branch'));
    }
    public function showAlumni($param)
    {
        $branch = Branch::where('branch_short_name', $param)->first();
        $layout = ($branch && $branch->branch_short_name === 'SKT-CC')
            ? 'layouts.city_layout'
            : 'layouts.riverside_layout';
        return view('partial_view.guest.student_life.alumni_index', compact('layout', 'branch'));
    }
    public function showNews($param)
    {
        $branch = Branch::where('branch_short_name', $param)->first();
        $posts = Post::where('post_branch_id', $branch->id)->get();
        $layout = ($branch && $branch->branch_short_name === 'SKT-CC')
            ? 'layouts.city_layout'
            : 'layouts.riverside_layout';
        return view('partial_view.guest.student_life.news_index', compact('layout', 'branch', 'posts'));
    }
    public function showNewsDetail($param)
    {
        $post = Post::find($param);
        if (!$post) {
            return to_route('news.home');
        }
        $branch = Branch::find($post->post_branch_id);
        $posts = Post::where('post_branch_id', $post->post_branch_id)->orderBy('created_at', 'desc')->limit(5)->get();
        $categories = Category::withCount(['posts' => function ($query) use ($post) {
            $query->where('post_branch_id', $post->post_branch_id);
        }])->get();
        $layout = ($branch && $branch->branch_short_name === 'SKT-CC')
            ? 'layouts.city_layout'
            : 'layouts.riverside_layout';
        return view('partial_view.guest.student_life.news_detail', compact('layout', 'branch', 'post', 'posts', 'categories'));
    }
    public function showGallery($param)
    {
        $branch = Branch::where('branch_short_name', $param)->first();
        $galleries = Gallery::where('gallery_branch_id', $branch->id)->get();
        $layout = ($branch && $branch->branch_short_name === 'SKT-CC')
            ? 'layouts.city_layout'
            : 'layouts.riverside_layout';
        return view('partial_view.guest.student_life.gallery_index', compact('layout', 'branch', 'galleries'));
    }
    public function showCalendar($param)
    {
        $branch = Branch::where('branch_short_name', $param)->first();
        $calendar = Calendar::where('calendar_branch_id', $branch->id)->first();
        $layout = ($branch && $branch->branch_short_name === 'SKT-CC')
            ? 'layouts.city_layout'
            : 'layouts.riverside_layout';
        return view('partial_view.guest.student_life.calendar_index', compact('layout', 'branch', 'calendar'));
    }
    public function showPreSchool($param)
    {
        $branch = Branch::where('branch_short_name', $param)->first();
        if ($branch && $branch->branch_short_name === 'SKT-CC') {
            return view('partial_view.guest.education.pre_school_city', compact('branch'));
        } else {
            return view('partial_view.guest.education.pre_school_riverside', compact('branch'));
        }
    }
}
