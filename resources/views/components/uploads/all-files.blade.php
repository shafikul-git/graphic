@props(['buttonID', 'inputId' => ''])
<div class="container">
    <div class="intro">
        <h2 class="text-center text-capitalize">All FIles</h2>
    </div>
    <div class="row photos" id="uploadedFilesContainer">
        <!-- All Files -->
    </div>
    <div class="text-center my-3">
        <button id="loadFile" onclick="loadFiles(this)" data-route="{{ route('allFiles') }}" buttonID="{{ $buttonID }}" inputId="{{ $inputId }}" class="text-capitalize btn btn-primary ">load file</button>
    </div>
</div>
