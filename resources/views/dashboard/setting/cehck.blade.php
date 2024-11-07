@section('title', 'File Upload')
@extends('layouts.contentNavbarLayout')
@section('content')


<div class="container mt-5">
    <form action="{{ route('test') }}" class="dropzone" id="file-dropzone" enctype="multipart/form-data" method="POST">
        @csrf
    </form>
    <div class="progress mt-4">
        <div class="progress-bar" id="progressBar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
</div>


@endsection


@push('heads')
<script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
<link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
@endpush


@push('scripts')

<script type="text/javascript">
    var dropzone = new Dropzone("#file-dropzone", {
    parallelUploads: 10,
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
            console.log('File uploaded successfully');
        });

        this.on("error", function(file, response) {
            console.log('Error uploading file');
        });
    }
});

</script>

@endpush
