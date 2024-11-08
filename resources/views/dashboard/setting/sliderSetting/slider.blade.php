@extends('layouts.contentNavbarLayout')
@section('title', 'Slider')

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
    
        <!-- Existing Sliders Section -->
        <div class="mt-5">
            <h3 class="text-center">Existing Sliders</h3>
            <div class="row" id="sliderList">
                <!-- Sliders will be displayed here -->
            </div>
        </div>
    </div>

    
@endsection


<script>
    function loadSliders() {
        // Example slider data (replace this with actual data from your backend)
        const sliders = [
            { title: 'Summer Sale', description: 'Get 50% off on all items!', status: 'active', image: 'slider1.jpg' },
            { title: 'Winter Collection', description: 'New arrivals for winter!', status: 'inactive', image: 'slider2.jpg' },
            { title: 'Holiday Deals', description: 'Exciting offers on holiday items!', status: 'active', image: 'slider3.jpg' },
            { title: 'Spring Collection', description: 'Fresh arrivals for the season!', status: 'inactive', image: 'slider4.jpg' },
        ];

        // Get the container where the sliders will be displayed
        const sliderList = document.getElementById('sliderList');
        sliderList.innerHTML = ''; // Clear the container before adding new sliders

        // Loop through each slider and add to the grid
        sliders.forEach(slider => {
            const sliderItem = document.createElement('div');
            sliderItem.classList.add('col-sm-6', 'col-md-4', 'col-lg-3', 'mb-4');
            sliderItem.innerHTML = `
                <div class="card">
                    <img src="storage/${slider.image}" class="card-img-top" alt="${slider.title}">
                    <div class="card-body">
                        <h5 class="card-title">${slider.title}</h5>
                        <p class="card-text">${slider.description}</p>
                        <span class="badge bg-${slider.status === 'active' ? 'success' : 'secondary'}">${slider.status}</span>
                    </div>
                </div>
            `;
            sliderList.appendChild(sliderItem);
        });
    }

    // Call the loadSliders function when the page is loaded
    window.onload = function() {
        loadSliders();
    };
</script>