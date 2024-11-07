@section('title', 'File Upload')
@extends('layouts.contentNavbarLayout')
@section('content')

    <div class="container text-center mt-5">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fullscreenModal">
            Open File Uploader
        </button>
    </div>

    <x-uploads.fileUploadModal ids="fullscreenModal" />


@endsection
