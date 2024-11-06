@section('title', 'File Upload')
@extends('layouts.contentNavbarLayout')
@section('content')

<x-form method="POST" action="{{ route('test') }}" enctype="multipart/form-data" id="formData">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="file" name="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div class="progress mt-4" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar" id="progressBar" style="width: 0%"></div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </x-form>
@endsection


{{-- @push('heads')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css" integrity="sha512-MCpE5+WLUt1ZP1OnGQx8HpUpxBlE7RjzXfwVVxRqcyFDRnTL0LGy3+JGGYXcmHSdFt06HREpQ9euEd0jAzdoQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@endpush --}}


@push('scripts')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js" integrity="sha512-pDZyQVDHJ4crfBcI1HdBiB9PeL5Nuj2FDiI05Xab7B8Gszcx+vn5/08KH3i2BimOpyu1mfj4VLHbV+kGKb27PA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
   $(document).ready(function(){
    $('#formData').on('submit', function(event){
        event.preventDefault();

        var formData = new FormData(this);
        $.ajax({
            xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(event) {
                    if (event.lengthComputable) {
                        var percentComplete = (event.loaded / event.total) * 100;
                        $('#progressBar').css('width', percentComplete + '%');
                        $('#progressBar').attr('aria-valuenow', percentComplete);
                    }
                }, false);
                return xhr;
            },
            url: "{{ route('test') }}",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response){
                alert('File uploaded successfully');
            },
            error: function(response){
                alert('An error occurred while uploading the file');
            }
        });
    });
   });
</script>
@endpush
