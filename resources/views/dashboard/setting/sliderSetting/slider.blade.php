@extends('layouts.contentNavbarLayout')
@section('title', 'Slider')

<x-uploads.fileUploadModal ids="imagesModal" inputId="images" multipleSelect="true"/>

@section('content')
    <div class="container">
        <h2 class=" text-capitalize my-4">Create and Manage Sliders</h2>

    </div>

    <div class="container mt-5">
        <x-form action="{{ route('beforeAfter.store') }}" method="POST">

            <!-- Before After Name & Title -->
            <div class="row">
                <div class="col-md-6">
                    <x-Binput type="text" name="name" inputID="name" labelText="Slider Name"
                        placeholder="Enter Slider Name"></x-Binput>
                </div>
                <div class="col-md-6">
                    <x-Binput type="text" name="title" inputID="title" labelText="Slider Title"
                        placeholder="Enter Slider Title"></x-Binput>
                </div>
            </div>
            <!-- Before After Description -->
            <div class="row">
                <div class="col-md-6">
                    <x-Binput type="text" name="slider_key" inputID="slider_key" labelText="Slider Unique KEY"
                        placeholder="Enter Slider Unique KEY"></x-Binput>
                </div>
                <div class="col-md-6">
                    <x-Binput type="text" name="images" inputID="images" labelText="Add Image"
                        uploadBTNText="Add Image" uploadBTNID="imagesModal"></x-Binput>
                </div>
            </div>

            <!-- Slider Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Slider Description</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" id="description" name="description"
                    rows="3" placeholder="Enter Slider Description">{{ old('description') }}</textarea>
            </div>
            @error('description')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <!-- Submit Button -->
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary">Save Slider</button>
            </div>
        </x-form>

        <div class="row" id="AllDataSlider">
            <h4 class="text-center" id="loading">Loading...</h4>
            <!-- all content show -->
        </div>
@endsection


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const AllDataSlider = document.getElementById('AllDataSlider');
        const loading = document.getElementById('loading');
        const storePath = "{{ asset('storage/') }}";

        $.ajax({
            type: 'GET',
            url: "{{ route('beforeAfter.getData') }}",
            success: function(response) {
                response.forEach(element => {

                    loading.style.display = 'none';
                    AllDataSlider.innerHTML += `
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
                                <p class="card-text text-muted">${element.description ?? ''}</p>
                            </div>
                            <input type="text" name="" id="" class="form-control" value="${element.unique_key}">
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
