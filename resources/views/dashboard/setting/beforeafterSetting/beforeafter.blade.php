@extends('layouts.contentNavbarLayout')
@section('title', 'Before After')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2 class=" text-capitalize my-4">Create and Manage Sliders</h2>
        </div>
        <div class="col-md-6 text-end">
            <button class="btn btn-primary">Add</button>
        </div>
    </div>
</div>

<div class="container mt-5">
    <x-form action="{{ route('about') }}" method="POST" enctype="multipart/form-data">

        <!-- Slider Title -->
        <div class="mb-3">
            <label for="sliderTitle" class="form-label">Slider Title</label>
            <input type="text" class="form-control" id="sliderTitle" name="title" placeholder="Enter Slider Title" required>
        </div>

        <!-- Slider Image -->
        <div class="mb-3">
            <label for="sliderImage" class="form-label">Slider Image</label>
            <input type="file" class="form-control" id="sliderImage" name="image" required>
        </div>

        <!-- Slider Description -->
        <div class="mb-3">
            <label for="sliderDescription" class="form-label">Slider Description</label>
            <textarea class="form-control" id="sliderDescription" name="description" rows="3" placeholder="Enter Slider Description" required></textarea>
        </div>

        <!-- Slider Status (Active or Inactive) -->
        <div class="mb-3">
            <label for="sliderStatus" class="form-label">Status</label>
            <select class="form-control" id="sliderStatus" name="status" required>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>

        <!-- Submit Button -->
        <div class="mb-3 text-center">
            <button type="submit" class="btn btn-primary">Save Slider</button>
        </div>
    </x-form>
</div>
@endsection