@extends('layouts.staff_layout')

@section('content')
    @if (Session::has('error'))
        <div class="alert alert-danger alert-dismissible fade show w-50 mx-auto text-center" role="alert">
            {{ Session::get('error') }}
        </div>
    @endif
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show w-50 mx-auto text-center" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif


    <div class="card">
        <div class="card-header font-weight-bold h5">Posts</div>
        <div class="text-right m-4 ">
            <a href="#" class="btn btn-success btn-md" data-bs-toggle="modal" data-bs-target="#modalNewPost">
                <div class="d-flex  align-items-center">
                    <span class="animated-icon mr-2 ">
                        <div style="width:14px;height:14px; cursor: pointer;"
                            data-animation-path="{{ asset('admin/vendor/animated-icons/add/add.json') }}"
                            data-anim-loop="false" title="Add Post"></div>
                    </span>
                    Add New Post
                </div>
            </a>
            <a href="{{ route('staff-posts.show_archived_post') }}" class="btn btn-secondary btn-md">
                <div class="d-flex  align-items-center">
                    <span class="animated-icon mr-2 ">
                        <div style="width:14px;height:14px; cursor: pointer;"
                            data-animation-path="{{ asset('admin/vendor/animated-icons/open-box/open-box.json') }}"
                            data-anim-loop="false"></div>
                    </span>
                    Archived Posts
                </div>
            </a>
            <a href="{{ route('staff-post-comments.index') }}" class="btn btn-primary btn-md position-relative">
                <div class="d-flex align-items-center">
                    <span class="animated-icon mr-2">
                        <div style="width:14px;height:14px; cursor: pointer;"
                            data-animation-path="{{ asset('admin/vendor/animated-icons/typing/typing.json') }}"
                            data-anim-loop="false">
                        </div>
                    </span>
                    Comments
                    @if ($pendingCommentsCount > 0)
                        <span class="badge badge-danger position-absolute top-0 start-100 translate-middle rounded-circle">
                            {{ $pendingCommentsCount }}
                        </span>
                    @endif
                </div>
            </a>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                {{-- <th>Banner</th> --}}
                                <th>Title</th>
                                <th>Branch</th>
                                <th>Created By</th>
                                <th>Category </th>
                                <th>Date </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    {{-- <td>
                                        <img src="{{ asset($post->post_banner) }}" alt="" width="80px">
                                    </td> --}}
                                    <td class="font-weight-bold">
                                        <a href="{{ route('staff-posts.show', $post->id) }}">
                                            {{ $post->post_title }}
                                        </a>
                                    </td>
                                    <td>{{ $post->branch->branch_name }}</td>
                                    <td>{{ $post->created_user->name }}</td>
                                    <td>{{ $post->category->category_title }}</td>
                                    <td> Created - {{ date('d-m-Y h:s', strToTime($post->created_at)) }} <br>
                                        Last Updated - {{ date('d-m-Y h:s', strToTime($post->updated_at)) }}
                                    </td>
                                    <td class="">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <a class="animated-icon mr-2"
                                                href="{{ route('staff-posts.edit', $post->id) }}">
                                                <div style="width:14px;height:14px; cursor: pointer;"
                                                    data-animation-path="{{ asset('admin/vendor/animated-icons/edit/edit.json') }}"
                                                    data-anim-loop="false" title="edit post">
                                                </div>
                                            </a>
                                            <a href="{{ route('staff-posts.archived_post', $post->id) }}?status=0"
                                                onclick="return confirm('Are you sure you want to archive this Post?');"
                                                class="animated-icon mr-2 ">
                                                <div style="width:14px;height:14px; cursor: pointer;"
                                                    data-animation-path="{{ asset('admin/vendor/animated-icons/trash-bin/trash-bin.json') }}"
                                                    data-anim-loop="false" title="archive Post"></div>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="modalNewPost">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <form action="{{ route('staff-posts.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Post</h5>
                        <button type="button" class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                            data-bs-dismiss="modal" aria-label="Close">
                            <span class="svg-icon svg-icon-2x"><i class="fa-solid fa-xmark"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <input type="hidden" value="{{ $user->branch_id }}" name="post_branch_id">

                            <div class="col-12">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label"> Category</label>
                                    <div class="col-sm-9">
                                        <select class="form-control select2" name="post_category_id" required
                                            title="Category is required">
                                            <option disabled selected>Select a Category</option>
                                            @foreach ($categories as $key => $category)
                                                <option value='{{ $category->id }}'>{{ $category->category_title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label"> Banner </label>
                                    <div class="col-9">
                                        <span class="text-danger">Banner Size have to be 370x260!</span>
                                        <input type="file" placeholder="Choose Post Banner " value=""
                                            name="post_banner" title="Post Banner is required" required
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label"> Title </label>
                                    <div class="col-9">
                                        <input type="text" placeholder="Choose Title " value=""
                                            name="post_title" title="Title is required" required class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label"> Body </label>
                                    <div class="col-9">
                                        <textarea class="form-control" name="post_body" id="" cols="30" rows="5" required
                                            placeholder="Enter Post Body "></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label"> Video </label>
                                    <div class="col-9">
                                        <span><small>You can add video link if there is a video</small></span>
                                        <input type="text" placeholder="Choose Post Video Link (Optional)"
                                            value="" name="post_video" class="form-control">
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-12">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label"> Image </label>
                                    <div class="col-9">
                                        <span><small>You can add an image link if there is an image</small></span>
                                        <input type="text" placeholder="Choose Post Image Link (Optional)"
                                            value="" name="post_image" class="form-control">
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-12">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label"> Images</label>
                                    <div class="col-9">
                                        <span class="text-danger">Image Size have to be 370x260!</span>
                                        <input type="file" placeholder="Choose Post Images " value=""
                                            name="post_image[]" title="Post Images are required" multiple
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label"> Will Show at the Landing Page ?
                                    </label>
                                    <div class="col-9">
                                        <input type="checkbox" name="post_is_show_front" id="" value="1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Create
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
