@extends('layouts.admin_layout')

@section('content')
    <div class="card">
        <div class="card-header font-weight-bold h5">Edit NewsLetter - {{ $primary_newsletter->primary_newsletter_title }}
        </div>
        <form action="{{ route('admin-primary-newsletters.update', $primary_newsletter->id) }}" method="post"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Image </label>
                            <div class="col-6">
                                <input type="file" placeholder="Choose File "
                                    value="{{ $primary_newsletter->primary_newsletter_file }}"
                                    name="primary_newsletter_file" title="File is required" class="form-control">
                            </div>
                            <div class="col-3">
                                <div id="pdfThumbnails" class=" inline-block w-full ">
                                    <div class="pdf-item flex flex-wrap">
                                        <canvas class="pdf-thumbnail w-48 h-auto cursor-pointer shadow-lg rounded-lg m-4"
                                            data-pdf="{{ asset($primary_newsletter->primary_newsletter_file) }}">
                                        </canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Branch</label>
                            <div class="col-sm-9">
                                <select class="form-control select2" name="primary_newsletter_branch_id" required
                                    title="Branch is required">
                                    <option disabled selected>Select a Branch</option>
                                    @foreach ($branches as $key => $data)
                                        <option value='{{ $data->id }}'
                                            @if ($primary_newsletter->primary_newsletter_branch_id === $data->id) selected @endif>{{ $data->branch_name }}
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
                                <input type="text" placeholder="Choose Name "
                                    value="{{ $primary_newsletter->primary_newsletter_title }}"
                                    name="primary_newsletter_title" title="Name is required" required class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <a href="{{ route('admin-primary-newsletters.index') }}" class="btn btn-light" data-bs-dismiss="modal">
                        Close
                    </a>
                    <button type="submit" class="btn btn-primary" id="btnSubmitNewAssessment">
                        Edit
                    </button>
                </div>
            </div>
        </form>
    </div>
    <script>
        const pdfjsLib = window['pdfjs-dist/build/pdf'];
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.10.111/pdf.worker.min.js';

        document.querySelectorAll('.pdf-thumbnail').forEach(async (canvas) => {
            const pdfUrl = canvas.dataset.pdf;
            const pdf = await pdfjsLib.getDocument(pdfUrl).promise;
            const page = await pdf.getPage(1); // First page as cover
            const viewport = page.getViewport({
                scale: 0.5
            });
            const context = canvas.getContext('2d');
            canvas.width = viewport.width;
            canvas.height = viewport.height;
            page.render({
                canvasContext: context,
                viewport: viewport
            });
        });
    </script>
    <script>
        $(document).on('click', '.pdf-thumbnail', function() {
            const pdfUrl = $(this).data('pdf');
            window.open(pdfUrl, '_blank');
        });
    </script>
@endsection
