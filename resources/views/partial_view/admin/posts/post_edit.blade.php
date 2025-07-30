@extends('layouts.admin_layout')

@section('content')
    <script src="{{ asset('tinymce/tinymce.min.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            tinymce.init({
                selector: '.tinymceBox',
                plugins: 'advlist autolink lists link charmap print preview anchor',
                toolbar: 'undo redo | formatselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link',
                height: 300,
            });
        });
    </script>
    <div class="card">
        <div class="card-header font-weight-bold h5">Edit Post - {{ $post->post_title }}</div>
        <form action="{{ route('admin-posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Banner </label>
                            <div class="col-6">
                                <input type="file" placeholder="Choose Banner " value="{{ $post->post_banner }}"
                                    name="post_banner" title="Logo is required" class="form-control">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset($post->post_banner) }}" width="120px" alt="old banner"
                                    title="old banner">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Branch</label>
                            <div class="col-sm-9">
                                <select class="form-control select2" name="post_branch_id" required
                                    title="Branch is required">
                                    <option disabled selected>Select a Branch</option>
                                    @foreach ($branches as $key => $data)
                                        <option value='{{ $data->id }}'
                                            @if ($post->post_branch_id === $data->id) selected @endif>{{ $data->branch_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Category</label>
                            <div class="col-sm-9">
                                <select class="form-control select2" name="post_category_id" required
                                    title="Category is required">
                                    <option disabled selected>Select a Category</option>
                                    @foreach ($categories as $key => $category)
                                        <option value='{{ $category->id }}'
                                            @if ($post->post_category_id === $category->id) selected @endif>
                                            {{ $category->category_title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Title </label>
                            <div class="col-9">
                                <input type="text" placeholder="Choose Title " value="{{ $post->post_title }}"
                                    name="post_title" title="Title is required" required class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Body </label>
                            <div class="col-9">
                                <textarea class="form-control tinymceBox" name="post_body" placeholder="Enter Post Body ">{{ $post->post_body }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Video </label>
                            <div class="col-9">
                                <span><small>You can add video link if there is a video</small></span>
                                <input type="text" placeholder="Choose Post Video Link (Optional)"
                                    value="{{ $post->post_video }}" name="post_video" class="form-control">
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Image </label>
                            <div class="col-9">
                                <span><small>You can add an image link if there is an image</small></span>
                                <input type="text" placeholder="Choose Post Image Link (Optional)"
                                    value="{{ $post->post_image }}" name="post_image" class="form-control">
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Images </label>
                            <div class="col-9 mb-3">
                                <input type="file" placeholder="Choose Banner " value="{{ $post->post_image }}"
                                    name="post_image[]" title="Logo is required" class="form-control" multiple>
                            </div>
                            <div class="col-3"></div>
                            <div class="col-6">
                                @php
                                    $post_images = explode(',', $post->post_image);
                                @endphp
                                @foreach ($post_images as $post_image)
                                    <img src="{{ asset($post_image) }}" width="120px" alt="old banner" title="old banner">
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Will Show at the Landing Page ?
                            </label>
                            <div class="col-9">
                                <input type="checkbox" name="post_is_show_front" id="" value="1"
                                    @if ($post->post_is_show_front == 1) checked @endif>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <a href="{{ route('admin-posts.index') }}" class="btn btn-light" data-bs-dismiss="modal">
                        Close
                    </a>
                    <button type="submit" class="btn btn-primary" id="btnSubmitNewAssessment">
                        Edit
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
