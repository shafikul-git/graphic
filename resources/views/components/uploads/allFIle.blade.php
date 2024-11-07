<div class="container">
    <div class="intro">
        <h2 class="text-center text-capitalize">All FIles</h2>
    </div>
    <div class="row photos" id="uploadedFilesContainer">
        <!-- All Files -->
    </div>
    <div class="text-center my-3">
        <button id="loadFile" onclick="loadFiles()" class="text-capitalize btn btn-primary ">load file</button>
    </div>
</div>



<script>
    let nextCursor = null;

    function loadFiles() {
        let url = "{{ route('allFiles') }}";

        if (nextCursor) {
            url += "?cursor=" + nextCursor;
        }

        $.ajax({
            url: url,
            method: 'GET',
            success: function(response) {
                const uploadedFilesContainer = document.getElementById('uploadedFilesContainer');
                console.log(response);
                response.data.forEach(element => {
                    uploadedFilesContainer.innerHTML += `
                    <div class="col-sm-6 col-md-4 col-lg-3 item m-1">
                        <img class="img-fluid"
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
</script>
