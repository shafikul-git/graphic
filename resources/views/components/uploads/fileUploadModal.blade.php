@props(['ids', 'inputId' => ''])

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
                                onclick="uploadFile(this)" click-ids="{{ $ids }}">
                                upload
                            </div>
                            <div class="border-bottom border-primary px-3 " style="cursor: pointer;"
                                onclick="allFiles(this)" click-ids="{{ $ids }}">
                                already Uploaded
                            </div>
                        </div>

                        <!-- File Upload Section -->
                        <div class="container mt-5 " id="{{ $ids }}uploadFiles" inputId="{{ $inputId }}" style="display: none;">
                            <x-uploads.upload ids="{{ $ids }}"/>
                        </div>

                        <!-- Already Uploaded Files -->
                        <div id="{{ $ids }}alreadyUploadFiles">
                            <x-uploads.all-files buttonID="{{ $ids }}" inputId="{{ $inputId }}"/>
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
