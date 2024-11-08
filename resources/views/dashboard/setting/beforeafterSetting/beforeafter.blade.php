@extends('layouts.contentNavbarLayout')
@section('title', 'Before After')

@section('content')
    <div class="container">
        <h2 class=" text-capitalize my-4">Create and Manage Sliders</h2>

    </div>

    <div class="container mt-5">
        <x-form action="{{ route('about') }}" method="POST" enctype="multipart/form-data">

            <!-- Slider Title -->
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name" class="form-label text-capitalize">Before After Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="Enter Before After Name" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="title" class="form-label"> Before After Title</label>
                        <input type="text" class="form-control" id="title" name="title"
                            placeholder="Enter Before After Title" required>
                    </div>

                </div>
            </div>
            <!-- Slider Image -->
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="before_image" class="form-label">Before Image</label>
                        <input type="hidden" class="form-control" id="before_image" name="before_image" required>
                        <button type="button" class=" form-control btn-primary">Add Before Image</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="after_image" class="form-label">After Image</label>
                        <input type="hidden" class="form-control" id="after_image" name="after_image" required>
                        <button type="button" class=" form-control btn-primary">Add After Image</button>
                    </div>
                </div>
            </div>

            <!-- Slider Description -->
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="unique_key" class="form-label">Before After Unique KEY</label>
                        <input type="text" class="form-control" id="unique_key" name="unique_key"
                            placeholder="Enter Before After Unique KEY" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="goto_link" class="form-label">Goto Link</label>
                        <input type="text" class="form-control" id="goto_link" name="goto_link"
                            placeholder="Enter Goto Link" required>
                    </div>

                </div>
            </div>

            <!-- Slider Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Before After Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"
                    placeholder="Enter Before After Description" required></textarea>
            </div>

            <!-- Submit Button -->
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary">Save Before After</button>
            </div>
        </x-form>

        <div class="row">
            <div class="col-md-4 my-3">
                <div class="cardBeforeAfter shadow-sm">
                    <div class="row">
                        <div class="col-md-6 p-2">
                            <img src="{{ url('frontend/image/Cliping%20path/cosmetics/after.png') }}" alt="Before Image" class="img-fluid rounded">
                        </div>
                        <div class="col-md-6 p-2">
                            <img src="{{ url('frontend/image/Cliping%20path/cosmetics/after.png') }}" alt="After Image" class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <h4 class="card-title text-primary mt-3">Lorem ipsum dolor sit</h4>
                        <p class="card-text text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ut et explicabo quia magnam nostrum qui debitis deleniti odit ea!</p>
                    </div>
                </div>
            </div>
           
    </div>
@endsection


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
