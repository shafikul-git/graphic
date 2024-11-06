@extends('layouts.contentNavbarLayout')
@section('title', 'Sample')

@section('content')
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">

                        <div class="col-sm-6">
                            <form action="" method="get">
                                <div class="d-flex align-items-center">
                                    <div class="input-group">
                                        <input type="search" name="search" value="{{ request()->query('search') }}" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                        <button type="submit" class="btn btn-outline-primary">Search</button>
                                    </div>
                                    <select name="option" class="form-select ms-2" aria-label="Default select example" style="width: 200px;">
                                        <option value="" {{ request()->query('option') == '' ? 'selected' : '' }}>Select</option>
                                        <option value="email" {{ request()->query('option') == 'email' ? 'selected' : '' }}>Email</option>
                                        <option value="country" {{ request()->query('option') == 'country' ? 'selected' : '' }}>Country</option>
                                        <option value="category" {{ request()->query('option') == 'category' ? 'selected' : '' }}>Category</option>
                                 </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
                        @foreach ($allSample as $key => $value)
                            <tr>
                                <td class="text-elips">{{ $key + 1 }}</td>
                                <td class="text-elips">{{ $value->name }}</td>
                                <td class="text-elips">{{ $value->email }}</td>
                                <td class="text-elips">{{ $value->country }}</td>
                                <td class="text-elips">{{ $value->category }}</td>
                                <td class="text-elips">{{ $value->instruction }}</td>
                                <td class="text-elips">{{ Carbon\Carbon::parse($value->created_at)->diffForHumans() }}</td>
                                <td class="">
                                    <div class="d-flex align-self-center gap-3">
                                        <button type="button" class="edit border-0 p-0" style="background: no-repeat;"
                                            title="Preview" data-toggle="tooltip" data-bs-toggle="modal"
                                            data-bs-target="#updateUserModal"
                                            onclick="updateUserModalFN({{ $value->id }})">
                                            <i class="fa-regular  fa-eye"></i>
                                        </button>
                                        <a href="#" class="delete" title="Delete" data-toggle="tooltip">
                                            <i class="material-icons text-danger">&#xE872;</i>
                                        </a>
                                        <a href="#">
                                            <i class='bx bxl-telegram'></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>
        {{ $allSample->links('pagination::bootstrap-5') }}
    </div>
@endsection
<script>
    console.log(@json($allSample));
</script>
<style>

</style>
