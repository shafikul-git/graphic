document.addEventListener("DOMContentLoaded", function () {
    const uploadFiles = document.getElementById("uploadFiles");
    const alreadyUploadedFile = document.getElementById("alreadyUploadFiles");
    const uploadStatus = document.getElementById("uploadStatus");
    let nextCursor = null;
    let selectImage = null;

    // Already file upload button
    window.allFiles = function () {
        uploadFiles.style.display = "none";
        alreadyUploadedFile.style.display = "block";
    };

    // upload file Button
    window.uploadFile = function () {
        uploadFiles.style.display = "block";
        alreadyUploadedFile.style.display = "none";
    };

    // All Files Show
    window.loadFiles = function (button) {
        let url = button.getAttribute("data-route");
        // console.log(url);
        // let url = "{{ route('allFiles') }}";
        const loadFileButton = document.getElementById("loadFile");

        if (nextCursor) {
            url += "?cursor=" + nextCursor;
        }

        $.ajax({
            // url: url,
            url: url,
            method: "GET",
            success: function (response) {
                const uploadedFilesContainer = document.getElementById(
                    "uploadedFilesContainer",
                );
                // console.log(response.data);
                response.data.forEach((element) => {
                    uploadedFilesContainer.innerHTML += `
                        <div class="col-sm-6 col-md-4 col-lg-3 item m-1">
                            <img class="img-fluid" onclick="selectImage(${element.id}, '${element.file_name}')"
                                src="storage/${element.file_name}">
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
    window.selectImage = function(id, name){
        console.log(id);
        console.log(name);
        
    }

    // Upload Files
    var dropzone = new Dropzone("#file-dropzone", {
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

                response.paths.forEach((element) => {
                    currentUploadFiles.insertAdjacentHTML(
                        "beforeend",
                        `
                        <div class="col-sm-6 col-md-4 col-lg-3 item m-1">
                            <img class="img-fluid" src="storage/${element}">
                        </div> 
                        `,
                    );
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
});

