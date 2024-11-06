<div class="col-lg-4 col-md-6">
    <div class="mt-4">
        <!-- Modal -->
        <div class="modal fade" id="fullscreenModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalFullTitle">File Upload</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">


                        <div id="dropZone" class="file-upload-container"
                            onclick="document.getElementById('fileInput').click()" ondragover="handleDragOver(event)"
                            ondragleave="handleDragLeave(event)" ondrop="handleFileDrop(event)">
                            <input type="file" id="fileInput" multiple onchange="handleFileUpload(event)"
                                style="display: none;">
                            <p><strong>Drag & Drop files here</strong> or click to upload</p>
                            <small class="text-muted">Max upload size: 5 MB per file</small>
                        </div>

                        <!-- URL Input for Image Link -->
                        <div class="input-group mt-3">
                            <input type="text" class="form-control" id="imageUrlInput"
                                placeholder="Paste image URL here">
                            <button class="btn btn-outline-primary" onclick="addImageByUrl()">Add Image</button>
                        </div>

                        <!-- File Preview Section -->
                        <div id="filePreviewContainer" class="file-preview d-flex flex-wrap mt-3"></div>

                        <!-- Uploaded Files List -->
                        <h6 class="mt-4">Uploaded Files</h6>
                        <ul id="uploadedFilesList" class="list-group"></ul>


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
    const uploadedFiles = [];

    // Handle file upload (Drag & Drop or manual selection)
    function handleFileUpload(event) {
        const files = event.target.files;
        processFiles(files);
    }

    // Handle file drop in drag & drop area
    function handleFileDrop(event) {
        event.preventDefault();
        event.stopPropagation();
        const files = event.dataTransfer.files;
        processFiles(files);
        event.currentTarget.classList.remove('dragover');
    }

    // Show visual feedback for drag over
    function handleDragOver(event) {
        event.preventDefault();
        event.currentTarget.classList.add('dragover');
    }

    // Remove visual feedback when drag leaves
    function handleDragLeave(event) {
        event.preventDefault();
        event.currentTarget.classList.remove('dragover');
    }

    // Process files and display preview
    function processFiles(files) {
        Array.from(files).forEach(file => {
            uploadedFiles.push(file);
            displayFilePreview(file);
            displayFileList(file.name);
        });
    }

    // Add image by URL
    function addImageByUrl() {
        const imageUrl = document.getElementById('imageUrlInput').value;
        if (imageUrl) {
            displayFilePreview(imageUrl, true);
            displayFileList(imageUrl);
            document.getElementById('imageUrlInput').value = ''; // Clear input
        }
    }

    // Display file preview (local files or URLs)
    function displayFilePreview(file, isUrl = false) {
        const previewContainer = document.getElementById('filePreviewContainer');
        const img = document.createElement('img');
        if (isUrl) {
            img.src = file;
        } else {
            img.src = URL.createObjectURL(file);
        }
        img.alt = 'File Preview';
        previewContainer.appendChild(img);
    }

    // Display uploaded files list
    function displayFileList(fileName) {
        const uploadedFilesList = document.getElementById('uploadedFilesList');
        const listItem = document.createElement('li');
        listItem.className = 'list-group-item d-flex justify-content-between align-items-center';
        listItem.innerText = fileName;

        const renameInput = document.createElement('input');
        renameInput.type = 'text';
        renameInput.className = 'form-control form-control-sm me-2';
        renameInput.placeholder = 'Rename file';
        renameInput.onchange = () => (listItem.firstChild.nodeValue = renameInput.value);

        listItem.appendChild(renameInput);
        uploadedFilesList.appendChild(listItem);
    }
</script>


<style>
    .file-upload-container {
        border: 2px dashed #0073aa;
        border-radius: 8px;
        padding: 20px;
        text-align: center;
        color: #0073aa;
        cursor: pointer;
        transition: background-color 0.2s ease-in-out;
    }

    .file-upload-container.dragover {
        background-color: #f1f9ff;
    }

    .file-preview {
        margin-top: 15px;
        max-height: 200px;
        overflow-y: auto;
    }

    .file-preview img {
        max-width: 100px;
        margin: 5px;
    }
</style>
