document.addEventListener('DOMContentLoaded', function () {
const uploadFiles = document.getElementById('uploadFiles');
const alreadyUploadedFile = document.getElementById('alreadyUploadFiles');

 window.allFiles = function() {
    uploadFiles.style.display = 'none';
    alreadyUploadedFile.style.display = 'block';
}

 window.uploadFile = function() {
    uploadFiles.style.display = 'block';
    alreadyUploadedFile.style.display = 'none';
}

// All Files Show 
let nextCursor = null;
 window.loadFiles = function() {
    // let url = "{{ route('allFiles') }}";
    // let url = "{{ route('allFiles') }}";
    const loadFileButton = document.getElementById('loadFile');
    const url = loadFileButton.dataset.allFilesUrl;
    if (nextCursor) {
        url += "?cursor=" + nextCursor;
    }

    $.ajax({
        // url: url,
        url: url,
        method: 'GET',
        success: function(response) {
            const uploadedFilesContainer = document.getElementById('uploadedFilesContainer');
            console.log(response.data);
            response.data.forEach(element => {
                uploadedFilesContainer.innerHTML += `
                <div class="col-sm-6 col-md-4 col-lg-3 item m-1">
                    <img class="img-fluid" onclick="selectImage(${element.id}, '${element.file_name}')"
                        src="storage/${element.file_name}">
                </div> 
            `;
            });

            nextCursor = response.next_cursor;

            if (!nextCursor) {
                document.getElementById('loadFile').disabled = true;
            }
        },
        error: function(error) {
            console.error('Error fetching files:', error);
        }
    });
}


// Upload Files
const uploadStatus = document.querySelector('.uploadStatus');
var dropzone = new Dropzone("#file-dropzone", {
    parallelUploads: 1,
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
            // console.log(response);
            
            response.paths.forEach(element => {
                currentUploadFiles.insertAdjacentHTML('beforeend', `
                    <div class="col-sm-6 col-md-4 col-lg-3 item m-1">
                        <img class="img-fluid" src="storage/${element}">
                    </div> 
                `);
            });

            uploadStatus.innerHTML = `<x-Balert success="FIle Upload Successful"></x-Balert>`;
        });

        this.on("error", function(file, response) {
            uploadStatus.innerHTML = `<x-Balert error="FIle Upload Fail"></x-Balert>`
        });
    }
});

});