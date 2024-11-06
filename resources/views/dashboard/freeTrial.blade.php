@extends('layouts.contentNavbarLayout')
@section('title', 'Sample')

<x-Bmodal MId="singleSampleData" title="Sample Data">
    <div class="" id="previewData"></div>
</x-Bmodal>
<x-Bmodal MId="completeSamplesent" title="Sample Send Form">
    <div class="" id="completeSampleBody"></div>
</x-Bmodal>

@section('content')
    <div class="container-xl">
        <div class="table-title">
            <div class="row">
                <div class="col-md-6">
                    <form action="" method="get">
                        <div class="d-flex align-items-center">
                            <div class="input-group">
                                <input type="search" name="search" value="{{ request()->query('search') }}"
                                    class="form-control  rounded" placeholder="Search" aria-label="Search"
                                    aria-describedby="search-addon" />
                                <button type="submit" class="btn btn-outline-primary btn-sm btn-md">Search</button>
                            </div>
                            <select name="option" class="form-select ms-2 mt-2 mt-md-0 form-select-sm form-select-md"
                                aria-label="Default select example" style="width: 200px;">
                                <option value="" {{ request()->query('option') == '' ? 'selected' : '' }}>
                                    Select
                                </option>
                                <option value="name" {{ request()->query('option') == 'name' ? 'selected' : '' }}>
                                    Name
                                </option>
                                <option value="email" {{ request()->query('option') == 'email' ? 'selected' : '' }}>
                                    Email
                                </option>
                                <option value="country" {{ request()->query('option') == 'country' ? 'selected' : '' }}>
                                    Country
                                </option>
                                <option value="category" {{ request()->query('option') == 'category' ? 'selected' : '' }}>
                                    Category
                                </option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <div class="table-wrapper">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th class="text-capitalize">Name <i class="fa fa-sort"></i></th>
                            <th class="text-capitalize">email <i class="fa fa-sort"></i></th>
                            <th class="text-capitalize">country <i class="fa fa-sort"></i></th>
                            <th class="text-capitalize">category <i class="fa fa-sort"></i></th>
                            <th class="text-capitalize">instruction <i class="fa fa-sort"></i></th>
                            <th class="text-capitalize">added date <i class="fa fa-sort"></i></th>
                            <th class="text-capitalize">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($allSample) < 0)
                            <tr>
                                <td>
                                    <h3>Not sample here</h3>
                                </td>
                            </tr>
                        @else
                            @foreach ($allSample as $key => $value)
                                <tr>
                                    <td class="text-elips">{{ $key + 1 }}</td>
                                    <td class="text-elips">{{ $value->name }}</td>
                                    <td class="text-elips">{{ $value->email }}</td>
                                    <td class="text-elips">{{ $value->country }}</td>
                                    <td class="text-elips">{{ $value->category }}</td>
                                    <td class="text-elips">{{ $value->instruction }}</td>
                                    <td class="text-elips">{{ Carbon\Carbon::parse($value->created_at)->diffForHumans() }}
                                    </td>
                                    <td class="text-center">
                                        <div class="d-flex align-items-center justify-content-center gap-3">
                                            <button type="button" class="view border-0 p-0" style="background: no-repeat;"
                                                title="Preview" data-toggle="tooltip" data-bs-toggle="modal"
                                                data-bs-target="#singleSampleData"
                                                onclick="previewSample({{ $value->id }})">
                                                <i class="fa-regular fa-eye"></i>
                                            </button>

                                            <x-form action="{{ route('freeTrial.destroy', $value->id) }}" method="DELETE"
                                                class="align-items-center justify-content-center" title="Delete">
                                                <button type="submit" style="border: none;">
                                                    <i class="material-icons text-danger">&#xE872;</i>
                                                </button>
                                            </x-form>

                                            <button type="button" class="sent border-0 p-0" style="background: no-repeat;"
                                                title="Preview" data-toggle="tooltip" data-bs-toggle="modal"
                                                data-bs-target="#completeSamplesent">
                                                <i class='bx bxl-telegram'></i>
                                            </button>

                                            <a href="#" class="download border-0 p-0">
                                                <i class="fa-solid fa-file-arrow-down"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        {{ $allSample->links('pagination::bootstrap-5') }}
    </div>
@endsection

@include('components.createDynamicRoute')
<script>
    const filePath = @json(url('storage/'));
    console.log(filePath);

    function previewSample(param) {
        const url = createDynamicRoute('singleData', {
            id: param
        });
        const previewData = document.getElementById('previewData');
        previewData.innerHTML = `<h3>Loding...</h3>`;

        (async () => {
            try {
                const getDataResult = await getData(url);
                console.log(getDataResult);
                previewData.innerHTML = `
                       <div class="container">
                            <div class="row mb-3">
                                <div class="col-sm-4 fw-bold">Name:</div>
                                <div class="col-sm-8" id="userName">${getDataResult.name}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-4 fw-bold">Email:</div>
                                <div class="col-sm-8" id="userEmail">${getDataResult.email}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-4 fw-bold">Category:</div>
                                <div class="col-sm-8" id="userCategory">${getDataResult.category}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-4 fw-bold">Country:</div>
                                <div class="col-sm-8" id="userCountry">${getDataResult.country}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-4 fw-bold">Instruction:</div>
                                <div class="col-sm-8" id="userInstruction">${getDataResult.instruction}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-4 fw-bold">Created At:</div>
                                <div class="col-sm-8">${new Date(getDataResult.created_at).toLocaleString()}</div>
                            </div>
                             <div class="row mb-3">
                                <div class="col-sm-4 fw-bold">Other Link:</div>
                                <div class="col-sm-8" id="createdAt">${getDataResult.file_link}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-4 fw-bold">Files:</div>
                                <div class="col-sm-8" id="fileLinksContainer">
                                    <!-- Files will be appended here -->
                                </div>
                            </div>
                        </div>
                    `;

                const fileLinksContainer = document.getElementById('fileLinksContainer');
                getDataResult.files.forEach((file) => {
                    const fileUrl = `${filePath}/${file}`;
                    const fileExtension = file.split('.').pop().toLowerCase();
                    const isImage = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp'].includes(
                        fileExtension);

                    let fileHTML;
                    if (isImage) {
                        fileHTML =
                            `<div class="mb-2"><img src="${fileUrl}" alt="Image File" style="max-width: 100%; height: auto;"></div>`;
                    } else {
                        fileHTML = `
                            <div class="mb-2">
                                <a href="${fileUrl}" target="_blank">
                                    <i class="fas fa-file-alt"></i> Download File
                                </a>
                            </div>`;
                    }

                    // Append file HTML to container
                    fileLinksContainer.insertAdjacentHTML('beforeend', fileHTML);
                });
            } catch (error) {
                console.error('Error fetching data:', error);
            }


        })();



    }
</script>
<style>

</style>
