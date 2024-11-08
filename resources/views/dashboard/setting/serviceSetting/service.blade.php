@section('title', 'Service Setting')
@extends('layouts.contentNavbarLayout')
@section('content')

    <div class="container">
        <h2 class=" text-capitalize my-4">Manage Service Page</h2>

    </div>

    <div class="container mt-5">
        <x-form action="{{ route('about') }}" method="POST" enctype="multipart/form-data">

            <!-- Slider Title -->
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="sliderTitle" class="form-label">Slider Title</label>
                        <input type="text" class="form-control" id="sliderTitle" name="title"
                            placeholder="Enter Slider Title" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="sliderTitle" class="form-label">Slider Title</label>
                        <input type="text" class="form-control" id="sliderTitle" name="title"
                            placeholder="Enter Slider Title" required>
                    </div>

                </div>
            </div>
            <!-- Slider Image -->
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="sliderImage" class="form-label">Slider Image</label>
                        <input type="hidden" class="form-control" id="sliderImage" name="image" required>
                        <button type="button" class=" form-control btn-primary">Add Fie</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="sliderImage" class="form-label">Slider Image</label>
                        <input type="hidden" class="form-control" id="sliderImage" name="image" required>
                        <button type="button" class=" form-control btn-primary">Add Fie</button>
                    </div>
                </div>
            </div>

            <!-- Slider Description -->
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="sliderTitle" class="form-label">Goto Link</label>
                        <input type="text" class="form-control" id="sliderTitle" name="title"
                            placeholder="Enter Slider Title" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="sliderTitle" class="form-label">GOto Title</label>
                        <input type="text" class="form-control" id="sliderTitle" name="title"
                            placeholder="Enter Slider Title" required>
                    </div>

                </div>
            </div>

            <!-- Slider Description -->
            <div class="mb-3">
                <label for="sliderDescription" class="form-label">Slider Description</label>
                <textarea class="form-control" id="sliderDescription" name="description" rows="3"
                    placeholder="Enter Slider Description" required></textarea>
            </div>

            <!-- Submit Button -->
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary">Save Slider</button>
            </div>
        </x-form>

        <div class="text-center text-capitalize settingFlexDesign" style="  padding: 6px 42px;">
            <h3 class="">First Section</h3>
            <div class="row">
                <div class="col-md-8">
                    <x-form action="{{ route('setting.slider') }}" method="POST">
                        <div class="d-flex gap-4">
                            <input type="text" name="heading" class="form-control" id="input2"
                                placeholder="Enter Slider Key">
                            <input type="submit" value="Submit">
                        </div>
                    </x-form>
                </div>
                <div class="col-md-3">
                    <div class="text-end">
                        <a href="{{ route('setting.slider') }}">Goto Slider Setting</a>

                    </div>
                </div>
            </div>
        </div>
        <div class="text-center text-capitalize settingFlexDesign" style="  padding: 6px 42px;">
            <h3 class="">Second Section</h3>
            <div class="row">
                <div class="col-md-8">
                    <x-form action="{{ route('setting.slider') }}" method="POST">
                        <div class="d-flex gap-4">
                            <input type="text" name="heading" class="form-control" id="input2"
                                placeholder="Enter Slider Key">
                            <input type="submit" value="Submit">
                        </div>
                    </x-form>
                </div>
                <div class="col-md-3">
                    <div class="text-end">
                        <a href="{{ route('setting.slider') }}">Goto before After Setting</a>

                    </div>
                </div>
            </div>
        </div>
        <div class="text-center text-capitalize settingFlexDesign" style="  padding: 6px 42px;">
            <h3 class="">Thred Section</h3>
            <div class="row">
                <div class="col-md-8">
                    <x-form action="{{ route('setting.slider') }}" method="POST">
                        <div class="d-flex gap-4">
                            <input type="text" name="heading" class="form-control" id="input2"
                                placeholder="Enter Slider Key">
                            <input type="submit" value="Submit">
                        </div>
                    </x-form>
                </div>
                <div class="col-md-3">
                    <div class="text-end">
                        <a href="{{ route('setting.slider') }}">Goto before After Setting</a>

                    </div>
                </div>
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

    .gotoSetting {
        padding: 0 12px;
    }

    .gotoSetting:hover {
        border: 2px solid;
        border-radius: 7px;
    }
</style>
