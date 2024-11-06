@extends('layouts.contentNavbarLayout')
@section('title', 'Home')

<x-upload ids="AddHomeImage"></x-upload>

@section('content')
    <h2 class="text-center text-capitalize ">Home page Setting</h2>
    <hr>
    <section>
        <div class="d-flex justify-content-between settingFlexDesign" style="  padding: 6px 42px;">
            <h3 class="m-0">Setting slider</h3>
            <a href="{{ route('setting.slider') }}">Goto Slider Setting</a>
        </div>
        <div class="d-flex justify-content-between settingFlexDesign" style="  padding: 6px 42px;">
            <h3 class="m-0">Setting Counter</h3>
            <a href="{{ route('setting.counter') }}">Goto Counter Setting</a>
        </div>

        <div class="settingFlexDesign" style="  padding: 6px 2rem;">
            <h3>Service OverView Setting</h3>
            <div class="">
                <x-form action="{{ route('homePageSetting.store') }}" method="POST">
                    <div class="row g-3 align-items-center">
                        <!-- Add File Button -->
                        <div class="col-md-4">
                            <input type="hidden" name="image" id="image">
                            <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#AddHomeImage" type="button">
                                Add File
                            </button>
                        </div>
                        <!-- Heading Input -->
                        <div class="col-md-4">
                            <label for="input2" class="form-label">Heading</label>
                            <input type="text" name="heading" class="form-control" id="input2" placeholder="Enter heading">
                        </div>
                        <!-- Description Input -->
                        <div class="col-md-4">
                            <label for="input3" class="form-label">Description</label>
                            <input type="text" name="description" class="form-control" id="input3" placeholder="Enter description">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center">
                        <!-- Add File Button -->
                        <div class="col-md-4">
                            <input type="hidden" name="image" id="image">
                            <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#AddHomeImage" type="button">
                                Add File
                            </button>
                        </div>
                        <!-- Heading Input -->
                        <div class="col-md-4">
                            <label for="input2" class="form-label">Heading</label>
                            <input type="text" name="heading" class="form-control" id="input2" placeholder="Enter heading">
                        </div>
                        <!-- Description Input -->
                        <div class="col-md-4">
                            <label for="input3" class="form-label">Description</label>
                            <input type="text" name="description" class="form-control" id="input3" placeholder="Enter description">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center">
                        <!-- Add File Button -->
                        <div class="col-md-4">
                            <input type="hidden" name="image" id="image">
                            <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#AddHomeImage" type="button">
                                Add File
                            </button>
                        </div>
                        <!-- Heading Input -->
                        <div class="col-md-4">
                            <label for="input2" class="form-label">Heading</label>
                            <input type="text" name="heading" class="form-control" id="input2" placeholder="Enter heading">
                        </div>
                        <!-- Description Input -->
                        <div class="col-md-4">
                            <label for="input3" class="form-label">Description</label>
                            <input type="text" name="description" class="form-control" id="input3" placeholder="Enter description">
                        </div>
                    </div>
                    
                </x-form>
            </div>
        </div>

    </section>
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
</style>
