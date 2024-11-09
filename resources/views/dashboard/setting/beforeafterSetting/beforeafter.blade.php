@extends('layouts.contentNavbarLayout')
@section('title', 'Before After')


<x-uploads.fileUploadModal ids="before_imageModal" inputId="before_image" />
<x-uploads.fileUploadModal ids="after_imageModal" inputId="after_image" />


@section('content')
    <div class="container">
        <h2 class=" text-capitalize my-4">Create and Manage Sliders</h2>

    </div>

    <div class="container mt-5">
        <x-form action="{{ route('beforeAfter.store') }}" method="POST">

            <!-- Before After Name & Title -->
            <div class="row">
                <div class="col-md-6">
                    <x-Binput type="text" name="name" inputID="name" labelText="Before After Name"
                        placeholder="Enter Before After Name"></x-Binput>
                </div>
                <div class="col-md-6">
                    <x-Binput type="text" name="title" inputID="title" labelText="Before After Title"
                        placeholder="Enter Before After Title"></x-Binput>
                </div>
            </div>
            <!-- Before After Image Button -->
            <div class="row">
                <div class="col-md-6">
                    <x-Binput type="text" name="before_image" inputID="before_image" labelText="Before Image"
                        uploadBTNText="Add Before Image" uploadBTNID="before_imageModal"></x-Binput>
                </div>
                <div class="col-md-6">
                    <x-Binput type="text" name="after_image" inputID="after_image" labelText="After Image"
                        uploadBTNText="Add After Image" uploadBTNID="after_imageModal"></x-Binput>
                </div>
            </div>

            <!-- Before After Description -->
            <div class="row">
                <div class="col-md-6">
                    <x-Binput type="text" name="unique_key" inputID="unique_key" labelText="Before After Unique KEY"
                        placeholder="Enter Before After Unique KEY"></x-Binput>
                </div>
                <div class="col-md-6">
                    <x-Binput type="text" name="goto_link" inputID="goto_link" labelText="Goto Link"
                        placeholder="Enter Goto Link"></x-Binput>
                </div>
            </div>

            <!-- Slider Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Before After Description</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" id="description" name="description"
                    rows="3" placeholder="Enter Before After Description">{{ old('description') }}</textarea>
            </div>
            @error('description')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <!-- Submit Button -->
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary">Save Before After</button>
            </div>
        </x-form>

        <div class="row" id="AllDataBeforeAfter">
            <h4 class="text-center" id="loading">Loading...</h4>
            <!-- all content show -->
        </div>
    @endsection

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const AllDataBeforeAfter = document.getElementById('AllDataBeforeAfter');
            const loading = document.getElementById('loading');
            const storePath = "{{ asset('storage/') }}";

            $.ajax({
                type: 'GET',
                url: "{{ route('beforeAfter.getData') }}",
                success: function(response) {
                    response.forEach(element => {
                        loading.style.display = 'none';
                        AllDataBeforeAfter.innerHTML += `
                        <div class="col-md-4 my-3">
                            <div class="cardBeforeAfter shadow-sm">
                                <div class="row">
                                    <div class="col-md-6 p-2">
                                        <img src="${storePath}/${element.after_image.file_name}"
                                            alt="Before Image" class="img-fluid rounded">
                                    </div>
                                    <div class="col-md-6 p-2">
                                        <img src="${storePath}/${element.before_image.file_name}"
                                            alt="Before Image" class="img-fluid rounded">
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <h4 class="card-title text-primary mt-3">${element.name}</h4>
                                    <p class="card-text text-muted">${element.description}</p>
                                </div>
                            </div>
                        </div>
                      `;
                    });
                },
                error: function(err) {
                    console.log(err);

                }
            })
        })
    </script>

    <style>
        .cardBeforeAfter {
            border: 1px solid #007bff;
            border-radius: 8px;
            background: #ffffff;
            padding: 1.5rem;
            transition: transform 0.2s ease-in-out;
            overflow: hidden;
        }

        .cardBeforeAfter:hover {
            transform: translateY(-5px);
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.15);
        }

        .card-title {
            font-weight: 600;
        }

        .card-text {
            font-size: 0.9rem;
            line-height: 1.5;
        }
    </style>
