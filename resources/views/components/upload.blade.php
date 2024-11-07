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
                            <div class="border-bottom border-primary px-3 " style="cursor: pointer;"
                                onclick="uploadFile()">
                                upload
                            </div>
                            <div class="border-bottom border-primary px-3 " style="cursor: pointer;"
                                onclick="allFiles()">
                                already Uploaded
                            </div>
                        </div>

                        <!-- File Upload Section -->
                        <div class="container mt-5 " id="uploadFiles" style="display: none;">
                            <form action="{{ route('storeFiles') }}" class="dropzone" id="file-dropzone"
                                enctype="multipart/form-data" method="POST">
                                @csrf
                            </form>
                            <div class="progress mt-4">
                                <div class="progress-bar" id="progressBar" role="progressbar" style="width: 0%;"
                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <!-- Already Uploaded Files -->
                        <div id="alreadyUploadFiles">
                            <div class="container">
                                <div class="intro">
                                    <h2 class="text-center text-capitalize">All FIles</h2>
                                </div>
                                <div class="row photos" id="uploadedFilesContainer">
                                    
                                </div>
                                <div class="text-center my-3">
                                    <button id="loadFile" onclick="allFiles()" class="text-capitalize btn btn-primary ">load file</button>
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
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
    <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
@endpush


@push('scripts')
    <script>
        const uploadFiles = document.getElementById('uploadFiles');
        const alreadyUploadedFile = document.getElementById('alreadyUploadFiles');

        function allFiles() {
            uploadFiles.style.display = 'none';
            alreadyUploadedFile.style.display = 'block';
            loadUploadedFiles();
        }

        function uploadFile() {
            uploadFiles.style.display = 'block';
            alreadyUploadedFile.style.display = 'none';
        }

        function loadUploadedFiles() {
            $.ajax({
                url: "{{ route('allFiles') }}",
                method: 'GET',
                success: function(response) {
                    const uploadedFilesContainer = document.getElementById('uploadedFilesContainer');
                   console.log(response);
                   uploadedFilesContainer.innerHTML = '';
                   response.data.forEach(element => {
                    uploadedFilesContainer.innerHTML += `
                        <div class="col-sm-6 col-md-4 col-lg-3 item m-1">
                            <img class="img-fluid"
                                src="storage/${element.file_name}">
                        </div> 
                    `;
                   }); 
                },
                error: function(error) {
                    console.error('Error fetching files:', error);
                }
            });
        }
    </script>


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
