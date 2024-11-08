@props(['ids'])
<form action="{{ route('storeFiles') }}" class="dropzone" id="{{ $ids }}uploading" enctype="multipart/form-data" method="POST">
    @csrf
</form>
<div class="progress mt-4">
    <div class="progress-bar" id="progressBar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0"
        aria-valuemax="100"></div>
</div>

<div class="container">
    <div class="row photos" id="{{ $ids }}currentUploadFiles">
        <!-- All Files -->
    </div>
</div>


<div id="uploadStatus"></div>
