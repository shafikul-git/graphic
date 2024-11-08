document.addEventListener("DOMContentLoaded", function () {
    const uploadStatus = document.getElementById("uploadStatus");
    let nextCursor = null;
    let selectImage = null;

    // Already file upload button
    window.allFiles = function (param) {
        const attribute = param.getAttribute("click-ids");
        const uploadFiles = document.getElementById(attribute + "uploadFiles");
        const alreadyUploadFiles = document.getElementById(
            attribute + "alreadyUploadFiles",
        );
        uploadFiles.style.display = "none";
        alreadyUploadFiles.style.display = "block";
    };

    // upload file Button
    window.uploadFile = function (param) {
        const attribute = param.getAttribute("click-ids");
        const uploadFiles = document.getElementById(attribute + "uploadFiles");
        const alreadyUploadFiles = document.getElementById(
            attribute + "alreadyUploadFiles",
        );
        uploadFiles.style.display = "block";
        alreadyUploadFiles.style.display = "none";
        dragDeopFiles(attribute);
    };

    // All Files Show
    window.loadFiles = function (button) {
        let url = button.getAttribute("data-route");
        let buttonID = button.getAttribute("buttonID");
        let inputId = button.getAttribute("inputId");
        // let url = "{{ route('allFiles') }}";
        const loadFileButton = document.getElementById("loadFile");

        if (nextCursor) {
            url += "?cursor=" + nextCursor;
        }

        $.ajax({
            url: url,
            method: "GET",
            success: function (response) {
                const uploadedFilesContainer = document.getElementById(
                    buttonID + "AllFiles",
                );
                // console.log(response.data);
                response.data.forEach((image) => {
                    uploadedFilesContainer.innerHTML += `
                        <div class="col-sm-6 col-md-4 col-lg-3 item m-1">
                            <img class="img-fluid" onclick="selectImage(${image.id}, '${buttonID}', '${inputId}')"
                                src="storage/${image.file_name}">
                        </div> 
                    `;
                });

                nextCursor = response.next_cursor;
                if (!nextCursor) {
                    document.getElementById("loadFile").disabled = true;
                }
            },
            error: function (error) {
                console.error("Error fetching files:", error);
            },
        });
    };

    // image click function
    window.selectImage = function (id, buttonID, inputId) {
        if (selectImage) {
            selectImage.style.border = "";
        }

        const imageElement = document.querySelector(
            `img[onclick="selectImage(${id}, '${buttonID}', '${inputId}')"]`,
        );
        if (imageElement) {
            imageElement.style.border = "2px solid blue";
            imageElement.style.padding = "4px";
            imageElement.style.margin = "4px";
            selectImage = imageElement;
        }
        if (inputId) {
            document.getElementById(inputId).value = id;
        }
    };

    // Upload Files
    function dragDeopFiles(param) {
        
        var dropzone = new Dropzone( "#" + param + "uploading", {
            parallelUploads: 1,
            uploadMultiple: true,
            addRemoveLinks: true,
            init: function () {
                this.on("sending", function (file, xhr, formData) {
                    formData.append("_token", "{{ csrf_token() }}");
                });

                this.on("totaluploadprogress", function (progress) {
                    $("#progressBar").css("width", progress + "%");
                    $("#progressBar").attr("aria-valuenow", progress);
                });

                this.on("queuecomplete", function () {
                    $("#progressBar").css("width", "0%");
                });

                this.on("success", function (file, response) {
                    // console.log(response);
                    const currentFileUploading = document.getElementById(param + "currentUploadFiles");
                    response.paths.forEach((element) => {
                        currentFileUploading.innerHTML += `
                         <div class="col-sm-6 col-md-4 col-lg-3 item m-1">
                                <img class="img-fluid" src="storage/${element}">
                            </div> 
                        `;
                    });

                    document.getElementById("uploadStatus").innerHTML = `
                        <div class="bs-toast toast fade show bg-success position-fixed top-0 end-0 m-3" role="alert" aria-live="assertive" aria-atomic="true" style="z-index: 1055;">
                            <div class="toast-header">
                                <i class='bx bx-bell me-2 text-black'></i>
                                <div class="me-auto fw-medium text-black">Success</div>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body text-black">
                                File Upload Successful
                            </div>
                        </div>
                    `;

                    var toastEl = document.querySelector(".toast");
                    var toast = new bootstrap.Toast(toastEl);
                    toast.show();
                    // console.log(uploadStatus);
                });

                this.on("error", function (file, response) {
                    uploadStatus.innerHTML = `<x-Balert error="FIle Upload Fail"></x-Balert>`;
                });
            },
        });
    }
});
