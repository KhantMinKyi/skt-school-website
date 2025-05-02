<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Calendar;
use App\Models\CareerJob;
use App\Models\Category;
use App\Models\Event;
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
        if (!$principal_message) {
            return view('pages.not_found');
        }
        $layout = ($principal_message && $principal_message->branch->branch_short_name === 'SKT-CC')
            ? 'layouts.city_layout'
            : 'layouts.riverside_layout';
        return view('partial_view.guest.about_us.principal_message_index', compact('principal_message', 'layout'));
    }
    public function ourHistory($param)
    {
        $our_history = History::where('slug', $param)->first();
        if (!$our_history) {
            return view('pages.not_found');
        }
        $layout = ($our_history && $our_history->slug === 'SKT-CC')
            ? 'layouts.city_layout'
            : 'layouts.riverside_layout';
        return view('partial_view.guest.about_us.history_index', compact('our_history', 'layout'));
    }
    public function ourStatement($param)
    {
        $our_statement = Statement::with('branch')->where('slug', $param)->first();
        if (!$our_statement) {
            return view('pages.not_found');
        }
        $layout = ($our_statement && $our_statement->slug === 'SKT-CC')
            ? 'layouts.city_layout'
            : 'layouts.riverside_layout';
        return view('partial_view.guest.about_us.statement_index', compact('our_statement', 'layout'));
    }
    public function ourTeacher($param)
    {
        $our_teachers = Teacher::with('branch')->where('slug', $param)->get();
        $branch = Branch::where('branch_short_name', $param)->first();
        if (!$branch) {
            return view('pages.not_found');
        }
        $layout = ($branch && $branch->branch_short_name === 'SKT-CC')
            ? 'layouts.city_layout'
            : 'layouts.riverside_layout';
        return view('partial_view.guest.about_us.teacher_index', compact('our_teachers', 'layout', 'branch'));
    }
    public function sisterSchool($param)
    {
        $branch = Branch::where('branch_short_name', $param)->first();
        if (!$branch) {
            return view('pages.not_found');
        }
        $layout = ($branch && $branch->branch_short_name === 'SKT-CC')
            ? 'layouts.city_layout'
            : 'layouts.riverside_layout';
        return view('partial_view.guest.about_us.sister_school_index', compact('layout', 'branch'));
    }
    public function showPolicy($param)
    {
        $branch = Branch::where('branch_short_name', $param)->first();
        if (!$branch) {
            return view('pages.not_found');
        }
        $layout = ($branch && $branch->branch_short_name === 'SKT-CC')
            ? 'layouts.city_layout'
            : 'layouts.riverside_layout';
        return view('partial_view.guest.about_us.policy_index', compact('layout', 'branch'));
    }
    public function showAlumni($param)
    {
        $branch = Branch::where('branch_short_name', $param)->first();
        if (!$branch) {
            return view('pages.not_found');
        }
        $layout = ($branch && $branch->branch_short_name === 'SKT-CC')
            ? 'layouts.city_layout'
            : 'layouts.riverside_layout';
        return view('partial_view.guest.student_life.alumni_index', compact('layout', 'branch'));
    }
    public function showNews($param)
    {
        $branch = Branch::where('branch_short_name', $param)->first();
        if (!$branch) {
            return view('pages.not_found');
        }
        $posts = Post::with('category')->where('post_branch_id', $branch->id)->where('post_is_active', 1)->get();
        $layout = ($branch && $branch->branch_short_name === 'SKT-CC')
            ? 'layouts.city_layout'
            : 'layouts.riverside_layout';
        return view('partial_view.guest.student_life.news_index', compact('layout', 'branch', 'posts'));
    }
    public function showNewsDetail($param)
    {
        $post = Post::with(['comments' => function ($query) {
            $query->where('post_comment_status', 'approved');
        }])->find($param);
        if (!$post) {
            return view('pages.not_found');
        }
        // dd($post);
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
        if (!$branch) {
            return view('pages.not_found');
        }
        $galleries = Gallery::where('gallery_branch_id', $branch->id)->get();
        $layout = ($branch && $branch->branch_short_name === 'SKT-CC')
            ? 'layouts.city_layout'
            : 'layouts.riverside_layout';
        return view('partial_view.guest.student_life.gallery_index', compact('layout', 'branch', 'galleries'));
    }
    public function showCalendar($param)
    {
        $branch = Branch::where('branch_short_name', $param)->first();
        if (!$branch) {
            return view('pages.not_found');
        }
        $calendar = Calendar::where('calendar_branch_id', $branch->id)->first();
        $layout = ($branch && $branch->branch_short_name === 'SKT-CC')
            ? 'layouts.city_layout'
            : 'layouts.riverside_layout';
        return view('partial_view.guest.student_life.calendar_index', compact('layout', 'branch', 'calendar'));
    }
    public function showWelfare($param)
    {
        $branch = Branch::where('branch_short_name', $param)->first();
        if (!$branch) {
            return view('pages.not_found');
        }
        $layout = ($branch && $branch->branch_short_name === 'SKT-CC')
            ? 'layouts.city_layout'
            : 'layouts.riverside_layout';
        return view('partial_view.guest.student_life.welfare_index', compact('layout', 'branch'));
    }
    public function showPreSchool($param)
    {
        $branch = Branch::where('branch_short_name', $param)->first();
        if (!$branch) {
            return view('pages.not_found');
        }
        if ($branch && $branch->branch_short_name === 'SKT-CC') {
            return view('partial_view.guest.education.pre_school_city', compact('branch'));
        } else {
            return view('partial_view.guest.education.pre_school_riverside', compact('branch'));
        }
    }
    public function showPrimary($param)
    {
        $branch = Branch::where('branch_short_name', $param)->first();
        if (!$branch) {
            return view('pages.not_found');
        }
        if ($branch && $branch->branch_short_name === 'SKT-CC') {
            return view('partial_view.guest.education.primary_city', compact('branch'));
        } else {
            return view('partial_view.guest.education.primary_riverside', compact('branch'));
        }
    }
    public function showSecondary($param)
    {
        $branch = Branch::where('branch_short_name', $param)->first();
        if (!$branch) {
            return view('pages.not_found');
        }
        if ($branch && $branch->branch_short_name === 'SKT-CC') {
            return view('partial_view.guest.education.secondary_city', compact('branch'));
        } else {
            return view('partial_view.guest.education.secondary_riverside', compact('branch'));
        }
    }
    public function showIgcse($param)
    {
        $branch = Branch::where('branch_short_name', $param)->first();
        if (!$branch) {
            return view('pages.not_found');
        }
        if ($branch && $branch->branch_short_name === 'SKT-CC') {
            return view('partial_view.guest.education.igcse_city', compact('branch'));
        } else {
            return view('partial_view.guest.education.igcse_riverside', compact('branch'));
        }
    }
    public function showIb($param)
    {
        $branch = Branch::where('branch_short_name', $param)->first();
        if (!$branch) {
            return view('pages.not_found');
        }
        if ($branch && $branch->branch_short_name === 'SKT-CC') {
            // No IB In City
            // return view('partial_view.guest.education.ib_city', compact('branch'));
            return to_route('city.home');
        } else {
            return view('partial_view.guest.education.ib_riverside', compact('branch'));
        }
    }
    public function showEvents($param)
    {
        $branch = Branch::where('branch_short_name', $param)->first();
        if (!$branch) {
            return view('pages.not_found');
        }
        $events = Event::with('category')->where('event_branch_id', $branch->id)->where('event_is_active', 1)->get();
        $layout = ($branch && $branch->branch_short_name === 'SKT-CC')
            ? 'layouts.city_layout'
            : 'layouts.riverside_layout';
        return view('partial_view.guest.events.event_index', compact('layout', 'branch', 'events'));
    }
    public function showEventDetail($param)
    {
        $event = Event::with(['comments' => function ($query) {
            $query->where('event_comment_status', 'approved');
        }])->find($param);
        if (!$event) {
            return view('pages.not_found');
        }
        $branch = Branch::find($event->event_branch_id);
        $events = Event::where('event_branch_id', $event->event_branch_id)->orderBy('created_at', 'desc')->limit(5)->get();
        $categories = Category::withCount(['events' => function ($query) use ($event) {
            $query->where('event_branch_id', $event->event_branch_id);
        }])->get();
        $layout = ($branch && $branch->branch_short_name === 'SKT-CC')
            ? 'layouts.city_layout'
            : 'layouts.riverside_layout';
        return view('partial_view.guest.events.event_detail', compact('layout', 'branch', 'event', 'events', 'categories'));
    }
    public function showContactUs($param)
    {
        $branch = Branch::where('branch_short_name', $param)->first();
        if (!$branch) {
            return view('pages.not_found');
        }
        if ($branch && $branch->branch_short_name === 'SKT-CC') {
            return view('partial_view.guest.contact_us.contact_us_city', compact('branch'));
        } else {
            return view('partial_view.guest.contact_us.contact_us_riverside', compact('branch'));
        }
    }
    public function showStudentAdmission($param)
    {
        $branch = Branch::where('branch_short_name', $param)->first();
        if (!$branch) {
            return view('pages.not_found');
        }
        if ($branch && $branch->branch_short_name === 'SKT-CC') {
            return view('partial_view.guest.admission.student_admission_city', compact('branch'));
        } else {
            return view('partial_view.guest.admission.student_admission_riverside', compact('branch'));
        }
    }
    public function showAdmissionProcess($param)
    {
        $branch = Branch::where('branch_short_name', $param)->first();
        if (!$branch) {
            return view('pages.not_found');
        }
        if ($branch && $branch->branch_short_name === 'SKT-CC') {
            return view('partial_view.guest.admission.admission_process_city', compact('branch'));
        } else {
            return view('partial_view.guest.admission.admission_process_riverside', compact('branch'));
        }
    }
    public function showWithdrawalPolicy($param)
    {
        $branch = Branch::where('branch_short_name', $param)->first();
        if (!$branch) {
            return view('pages.not_found');
        }
        if ($branch && $branch->branch_short_name === 'SKT-CC') {
            return view('partial_view.guest.admission.withdrawal_policy_city', compact('branch'));
        } else {
            return view('partial_view.guest.admission.withdrawal_policy_riverside', compact('branch'));
        }
    }
    public function showCollegeCounselingService($param)
    {
        $branch = Branch::where('branch_short_name', $param)->first();
        if (!$branch) {
            return view('pages.not_found');
        }
        $layout = ($branch && $branch->branch_short_name === 'SKT-CC')
            ? 'layouts.city_layout'
            : 'layouts.riverside_layout';
        return view('partial_view.guest.admission.college_counseling_service_index', compact('layout', 'branch'));
    }
    public function showCareer($param)
    {
        $branch = Branch::where('branch_short_name', $param)->first();
        if (!$branch) {
            return view('pages.not_found');
        }
        if ($branch && $branch->branch_short_name === 'SKT-CC') {
            return view('partial_view.guest.admission.career_city', compact('branch'));
        } else {
            return view('partial_view.guest.admission.career_riverside', compact('branch'));
        }
    }
    public function showCareerDetail($param)
    {
        $job = CareerJob::find($param);
        if (!$job) {
            return view('pages.not_found');
        }
        // dd($post);
        $branch = Branch::find($job->career_job_branch_id);
        $layout = ($branch && $branch->branch_short_name === 'SKT-CC')
            ? 'layouts.city_layout'
            : 'layouts.riverside_layout';
        return view('partial_view.guest.admission.career_detail', compact('layout', 'branch', 'job'));
    }
}
