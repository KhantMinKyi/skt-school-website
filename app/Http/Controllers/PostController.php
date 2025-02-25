<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostComment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::where('post_is_active', 1)->orderBy('created_at', 'desc')->paginate(10);
        $pendingCommentsCount = PostComment::where('post_comment_status', 'pending')->get()->count();
        $categories = Category::all();
        $branches = Branch::all();
        return view('admin.posts.post_index', compact('posts', 'categories', 'branches', 'pendingCommentsCount'));
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
            'post_banner' => 'required|file',
            'post_title' => 'required',
            'post_branch_id' => 'required',
            'post_category_id' => 'required',
            'post_body' => 'required',
            'post_video' => 'nullable',
            'post_image' => 'nullable',
            'post_is_show_front' => 'nullable',
        ]);
        $branch = Branch::find($data['post_branch_id']);
        $user_id = Auth::user()->id;
        if (!$branch) {
            return to_route('admin-posts.index')->with('error', 'No Branch Found ! Please Try Again');
        }
        if (isset($data['post_banner'])) {
            $filePath = "img/post_data/" . $branch->branch_short_name;
            if (!File::exists($filePath)) {
                $result = File::makeDirectory($filePath, 0755, true);
            }

            $photo = $data['post_banner'];
            $extension = $photo->getClientOriginalExtension();
            $imageUid = uniqid('', true);
            $photoName = $filePath . "/post_" . $imageUid . "." . $extension;

            $photo->move($filePath, "/post_" . $imageUid . "." . $extension);
            $data['post_banner'] = "/" . $photoName;
        }
        $data['post_created_date'] = Carbon::now();
        $data['post_created_user_id'] = $user_id;
        $data['post_updated_user_id'] = $user_id;
        Post::create($data);
        return to_route('admin-posts.index')->with('success', 'Post Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::with('branch', 'category')->find($id);
        if (!$post) {
            return to_route('admin-posts.index')->with('error', 'Post Not Found');
        }
        return view('partial_view.admin.posts.post_detail', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        $branches = Branch::all();
        if (!$post) {
            return to_route('admin-posts.index')->with('error', 'Post Not Found');
        }
        return view('partial_view.admin.posts.post_edit', compact('post', 'categories', 'branches'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());

        $data = $request->validate([
            'post_banner' => 'nullable|file',
            'post_title' => 'required',
            'post_branch_id' => 'required',
            'post_category_id' => 'required',
            'post_body' => 'required',
            'post_video' => 'nullable',
            'post_image' => 'nullable',
            'post_is_show_front' => 'nullable',
        ]);
        // dd($data);
        $post = Post::find($id);
        $branch = Branch::find($data['post_branch_id']);
        $user_id = Auth::user()->id;
        if (!$branch) {
            return to_route('admin-posts.index')->with('error', 'No Branch Found ! Please Try Again');
        }
        if (isset($data['post_banner'])) {
            if (File::exists(public_path($post->post_banner))) {
                File::delete(public_path($post->post_banner));
            }
            $filePath = "img/post_data/" . $branch->branch_short_name;
            if (!File::exists($filePath)) {
                $result = File::makeDirectory($filePath, 0755, true);
            }

            $photo = $data['post_banner'];
            $extension = $photo->getClientOriginalExtension();
            $imageUid = uniqid('', true);
            $photoName = $filePath . "/post_" . $imageUid . "." . $extension;

            $photo->move($filePath, "/post_" . $imageUid . "." . $extension);
            $data['post_banner'] = "/" . $photoName;
        }
        $data['post_updated_user_id'] = $user_id;
        $data['post_is_show_front'] = isset($data['post_is_show_front'])  ? 1 : 0;
        $post->update($data);
        return to_route('admin-posts.index')->with('success', 'Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function archivedPost(string $id, Request $request)
    {
        $post = Post::find($id);
        // dd($post);
        if ($post) {
            $post->update(['post_is_active' => $request->status]);
            return to_route('admin-posts.index')->with('success', 'Updated Successfully!');;
            // dd($user);
        } else {
            return response()->json([
                'message' => 'Cannot Find a Post'
            ]);
        }
    }
    public function showArchivedPost()
    {
        $archived_posts = Post::where('post_is_active', 0)->paginate(10);
        // dd($archived_posts);
        return view('partial_view.admin.posts.post_archived', compact('archived_posts'));
    }
}
