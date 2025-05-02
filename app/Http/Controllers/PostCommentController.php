<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;

class PostCommentController extends Controller
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
        $postCommentQuery = PostComment::with('post');
        $post_comments = $postCommentQuery->paginate(10);
        if ($this->user->is_admin == 1) {
            return view('partial_view.admin.posts.post_comment_index', compact('post_comments'));
        } else {
            // $post_comments = $postCommentQuery->where('post_comment_branch_id', $this->user->branch_id)->paginate(10);
            return view('partial_view.staff.posts.post_comment_index', compact('post_comments'));
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
            'post_comment_post_id'          => 'required',
            'post_comment_user_name'        => 'required',
            'post_comment_user_email'       => 'required',
            'post_comment_subject'          => 'required',
            'post_comment_body'             => 'required',
        ]);
        $post = Post::find($data['post_comment_post_id']);
        $executed = RateLimiter::attempt(
            'send-message:',
            $perTwoMinutes  = 5,
            function () {},
            $decayRate = 120,
        );

        if (! $executed) {
            return 'Too Many Comment at Once , Please Wait for a minute and Comment Again ! ';
        }
        if (!$post) {
            return to_route('news.home');
        }
        $data['post_comment_branch_id'] = $post->post_branch_id;
        PostComment::create($data);
        return to_route('news-detail.home', $post->id)->with('success', ' Comment Added , It will be shown after validation . ');
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
    public function update(Request $request, string $id) {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id);
        $post_comment = PostComment::find($id);
        if ($post_comment) {
            $post_comment->delete();
        }
        if ($this->user->is_admin == 1) {
            return to_route('admin-post-comments.index')->with('success', 'Deleted Successfully');
        } else {
            return to_route('staff-post-comments.index')->with('success', 'Deleted Successfully');
        }
    }

    public function changeCommentStatus(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'post_comment_id' => 'required',
            'post_comment_status' => 'required',
        ]);
        $post_comment = PostComment::find($data['post_comment_id']);
        if ($post_comment) {
            $post_comment->update(
                [
                    'post_comment_status' => $data['post_comment_status'],
                    'post_comment_action_user_id' => Auth::user()->id,
                ]
            );
        }
        if ($this->user->is_admin == 1) {
            return to_route('admin-post-comments.index')->with('success', 'Updated Successfully');
        } else {
            return to_route('staff-post-comments.index')->with('success', 'Updated Successfully');
        }
    }
}
