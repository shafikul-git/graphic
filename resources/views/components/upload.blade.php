@props(['ids'])
<div class="col-lg-4 col-md-6">
    <div class="mt-4">
        <!-- Modal -->
        <div class="modal fade" id="{{ $ids }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="{{ $ids }}">File Upload</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex justify-content-start text-capitalize gap-4">
                            <div class="border-bottom border-primary px-3 " style="cursor: pointer;">
                                upload
                            </div>
                            <div class="border-bottom border-primary px-3 " style="cursor: pointer;">
                                select
                            </div>
                        </div>

                        <!-- File Upload Section -->
                        <div class="container mt-5" id="{{ $ids }}">
                            <form action="{{ route('test') }}" class="dropzone" id="file-dropzone"
                                enctype="multipart/form-data" method="POST">
                                @csrf
                            </form>
                            <div class="progress mt-4">
                                <div class="progress-bar" id="progressBar" role="progressbar" style="width: 0%;"
                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <!-- Already Uploaded Files -->

                        <div class="lightbox-gallery">
                            <div class="container">
                                <div class="intro">
                                    <h2 class="text-center">Already Uploaded File</h2>
                                </div>
                                <div class="row photos">
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <img class="img-fluid" src="data:image/jpeg;base64,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">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="uploadStatus"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@push('heads')
    <style>
        .lightbox-gallery {
            background-image: linear-gradient(#4A148C, #E53935);
            background-repeat: no-repeat;
            color: #000;
            overflow-x: hidden
        }

        .lightbox-gallery p {
            color: #fff
        }

        .lightbox-gallery h2 {
            font-weight: bold;
            margin-bottom: 40px;
            padding-top: 40px;
            color: #fff
        }

        @media (max-width:767px) {
            .lightbox-gallery h2 {
                margin-bottom: 25px;
                padding-top: 25px;
                font-size: 24px
            }
        }

        .lightbox-gallery .intro {
            font-size: 16px;
            max-width: 500px;
            margin: 0 auto 40px
        }

        .lightbox-gallery .intro p {
            margin-bottom: 0
        }

        .lightbox-gallery .photos {
            padding-bottom: 20px
        }

        .lightbox-gallery .item {
            padding-bottom: 30px
        }
    </style>
@endpush

@push('heads')
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
    <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
@endpush


@push('scripts')
    <script type="text/javascript">
        const uploadStatus = document.querySelector('.uploadStatus');
        var dropzone = new Dropzone("#file-dropzone", {
            parallelUploads: 2,
            uploadMultiple: true,
            addRemoveLinks: true,
            init: function() {
                this.on("sending", function(file, xhr, formData) {
                    formData.append("_token", "{{ csrf_token() }}");
                });

                this.on("totaluploadprogress", function(progress) {
                    $('#progressBar').css('width', progress + '%');
                    $('#progressBar').attr('aria-valuenow', progress);
                });

                this.on("queuecomplete", function() {
                    $('#progressBar').css('width', '0%');
                });

                this.on("success", function(file, response) {
                    uploadStatus.innerHTML = `<x-Balert success="FIle Upload Successful"></x-Balert>`;
                });

                this.on("error", function(file, response) {
                    uploadStatus.innerHTML = `<x-Balert error="FIle Upload Fail"></x-Balert>`
                });
            }
        });
    </script>
@endpush
