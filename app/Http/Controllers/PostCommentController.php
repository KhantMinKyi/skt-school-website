<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostComment;
use Illuminate\Http\Request;

class PostCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            'post_comment_post_id'          => 'required',
            'post_comment_user_name'        => 'required',
            'post_comment_user_email'       => 'required',
            'post_comment_subject'          => 'required',
            'post_comment_body'             => 'required',
        ]);
        $post = Post::find($data['post_comment_post_id']);
        if (!$post) {
            return to_route('news.home');
        }
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
