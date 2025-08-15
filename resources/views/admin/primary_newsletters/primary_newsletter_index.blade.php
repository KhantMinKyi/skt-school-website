@extends('layouts.admin_layout')

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
        <div class="card-header font-weight-bold h5">Primary Newsletters</div>
        <div class="text-right m-4 ">
            <a href="#" class="btn btn-success btn-md" data-bs-toggle="modal"
                data-bs-target="#modalNewPrimaryNewsletter">
                <div class="d-flex  align-items-center">
                    <span class="animated-icon mr-2 ">
                        <div style="width:14px;height:14px; cursor: pointer;"
                            data-animation-path="{{ asset('admin/vendor/animated-icons/add/add.json') }}"
                            data-anim-loop="false" title="Add Principal Messsage"></div>
                    </span>
                    Add New Primary Newsletter
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
                                <th>Branch Name</th>
                                <th>File</th>
                                <th> Title</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($primary_newsletters as $primary_newsletter)
                                <tr>
                                    <td>{{ $primary_newsletter->id }}</td>
                                    <td>{{ $primary_newsletter->branch->branch_name }}</td>
                                    <td>
                                        <div id="pdfThumbnails" class=" inline-block w-full ">
                                            <div class="pdf-item flex flex-wrap">
                                                <canvas
                                                    class="pdf-thumbnail w-48 h-auto cursor-pointer shadow-lg rounded-lg m-4"
                                                    data-pdf="{{ asset($primary_newsletter->primary_newsletter_file) }}">
                                                </canvas>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $primary_newsletter->primary_newsletter_title }}</td>
                                    <td class="">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <a class="animated-icon mr-2"
                                                href="{{ route('admin-primary-newsletters.edit', $primary_newsletter->id) }}">
                                                <div style="width:14px;height:14px; cursor: pointer;"
                                                    data-animation-path="{{ asset('admin/vendor/animated-icons/edit/edit.json') }}"
                                                    data-anim-loop="false" title="Edit Primary Newsletter">
                                                </div>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- {{ $primary_newsletters->links() }} --}}
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="modalNewPrimaryNewsletter">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <form action="{{ route('admin-primary-newsletters.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Primary Newsletter</h5>
                        <button type="button" class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                            data-bs-dismiss="modal" aria-label="Close">
                            <span class="svg-icon svg-icon-2x"><i class="fa-solid fa-xmark"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label"> Branch</label>
                                    <div class="col-sm-9">
                                        <select class="form-control select2" name="primary_newsletter_branch_id" required
                                            title="Branch is required">
                                            <option disabled selected>Select a Branch</option>
                                            @foreach ($branches as $key => $data)
                                                <option value='{{ $data->id }}'>{{ $data->branch_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label"> File </label>
                                    <div class="col-9">
                                        {{-- <small class="text-danger">Photo Size Must be 1024x1084</small> --}}
                                        <input type="file" placeholder="Choose File " value=""
                                            name="primary_newsletter_file" title="File is required" required
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label">Primary Newsletter Title </label>
                                    <div class="col-9">
                                        <input type="text" class="form-control"
                                            placeholder="Enter Primary Newsletter Title " required
                                            name="primary_newsletter_title">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary" id="btnSubmitNewAssessment">
                            Create
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

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
