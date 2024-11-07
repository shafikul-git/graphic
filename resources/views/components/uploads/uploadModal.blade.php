@props(['ids'])
<!-- Fullscreen Modal -->

<!-- Modal -->
<div class="col-lg-4 col-md-6">
    <div class="mt-4">
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
                            <x-uploads.upload />
                        </div>

                        <!-- Already Uploaded Files -->
                        <div id="alreadyUploadFiles">
                            <x-uploads.allFile />
                        </div>

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

<script>
    const uploadFiles = document.getElementById('uploadFiles');
    const alreadyUploadedFile = document.getElementById('alreadyUploadFiles');

    function allFiles() {
        uploadFiles.style.display = 'none';
        alreadyUploadedFile.style.display = 'block';
    }

    function uploadFile() {
        uploadFiles.style.display = 'block';
        alreadyUploadedFile.style.display = 'none';
    }
</script>
