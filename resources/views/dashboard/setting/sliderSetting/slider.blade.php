@extends('layouts.contentNavbarLayout')
@section('title', 'Slider')

<x-uploads.fileUploadModal ids="imagesModal" inputId="images" multipleSelect="true" />

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between">

            <h2 class=" text-capitalize my-4">Create and Manage Sliders</h2>
        </div>
    </div>

    <div class="container mt-5">
        <x-form action="{{ route('slider.store') }}" method="POST">

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
                    <x-Binput type="text" name="unique_key" inputID="unique_key" labelText="Slider Unique KEY"
                        placeholder="Enter Slider Unique KEY"></x-Binput>
                </div>
                <div class="col-md-6">
                    <x-Binput type="text" name="goto_link" inputID="goto_link" labelText="Slider Goto Link"
                        placeholder="Enter Slider Goto Link"></x-Binput>
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

            <!-- Slider Imags -->
            <x-Binput type="hidden" name="images" inputID="images" uploadBTNText="Add Image"
                uploadBTNID="imagesModal"></x-Binput>

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

    @php
        print_r($errors->all());
    @endphp

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const AllDataSlider = document.getElementById('AllDataSlider');
            const loading = document.getElementById('loading');
            const storePath = "{{ asset('storage/') }}";

            $.ajax({
                type: 'GET',
                url: "{{ route('slider.getData') }}",
                success: function(response) {
                   // console.log(response);
                    
                    if (response.length <= 0) {
                        loading.innerHTML = "Data Is Empty ..";
                    } else {
                        response.forEach(element => {
                            loading.style.display = 'none';
                            const images = element.images;
                            AllDataSlider.innerHTML += `
                                <div class="col-md-4 my-3">
                                    <div class="cardBeforeAfter shadow-sm">
                                        <div class="row">
                                            ${images.map(image => `
                                            <div class="col-md-6 p-2">
                                                    <img src="${storePath}/${image}" alt="Image" class="img-fluid rounded mb-2">
                                                    </div>
                                                `).join('')}
                                        </div>
                                        <div class="card-body text-center">
                                            <h4 class="card-title text-primary mt-3">${element.name}</h4>
                                            <p class="card-text text-muted">${element.description ?? ''}</p>
                                        </div>
                                       <div class="form-group">
                                            <label for="uniqueKeyInput-${element.id}">Unique Key</label>
                                            <input type="text" id="uniqueKeyInput-${element.id}" class="form-control" value="${element.unique_key}" onclick="copyToClipboard(this)">
                                            <small id="copyMessage-${element.id}" style="display:none; color: green;">Text successfully copied to clipboard!</small>
                                        </div>
                                    </div>
                                </div>
                            `;
                        });
                    }
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
