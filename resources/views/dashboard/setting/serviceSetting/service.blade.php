@section('title', 'Service Setting')
@extends('layouts.contentNavbarLayout')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class=" text-capitalize my-4">Create and Manage Service</h2>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <x-form action="{{ route('about') }}" method="POST" enctype="multipart/form-data">

            <!-- Slider Title -->
            <div class="mb-3">
                <label for="sliderTitle" class="form-label">Slider Title</label>
                <input type="text" class="form-control" id="sliderTitle" name="title" placeholder="Enter Slider Title"
                    required>
            </div>

            <!-- Slider Image -->
            <div class="mb-3">
                <label for="sliderImage" class="form-label">Slider Image</label>
                <input type="file" class="form-control" id="sliderImage" name="image" required>
            </div>

            <!-- Slider Description -->
            <div class="mb-3">
                <label for="sliderDescription" class="form-label">Slider Description</label>
                <textarea class="form-control" id="sliderDescription" name="description" rows="3"
                    placeholder="Enter Slider Description" required></textarea>
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
            <h3 class="m-0">Setting slider</h3>
            <x-form action="{{ route('setting.slider') }}" method="POST">
                <div class="d-flex gap-4">
                    <input type="text" name="heading" class="form-control" id="input2" placeholder="Enter Slider Key">
                    <input type="submit" value="Submit">
                </div>
            </x-form>
            <a href="{{ route('setting.slider') }}">Goto Slider Setting</a>
        </div>

    </div>
    </div>


@endsection


<style>
    .settingFlexDesign {
        margin: 31px 0;
        border: 2px dashed;

        align-items: center;
        border-radius: 6px box-shadow: 0px 7px 21px 1px rgba(0, 0, 0, 0.46);
        -webkit-box-shadow: 0px 7px 21px 1px rgba(0, 0, 0, 0.46);
        -moz-box-shadow: 0px 7px 21px 1px rgba(0, 0, 0, 0.46);
    }

    .settingFlexDesign>a {
        padding: 2px 12px;
    }

    .settingFlexDesign>a:hover {
        border: 2px solid;
        padding: 2px 12px;
        border-radius: 7px;
    }
    .gotoSetting{
        padding: 0 12px;
    }
    .gotoSetting:hover{
        border: 2px solid;
        border-radius: 7px;
    }

</style>
