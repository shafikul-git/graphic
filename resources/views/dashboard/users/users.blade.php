@extends('layouts/contentNavbarLayout')

@section('title', 'Users - All')

@section('content')

    <x-Bmodal static="true" MId="backDropModal" title="Add User">
        <x-form id="submit" method="POST" action="{{ route('user.store') }}" :fields="[
            [
                'inputDuel' => true,
                'inputs' => [
                    [
                        'type' => 'text',
                        'name' => 'name',
                        'id' => 'name',
                        'placeholder' => 'Enter Name ...',
                        'class' => 'form-control',
                        'label' => [
                            'name' => 'Enter Name ',
                            'class' => 'form-label',
                        ],
                    ],
                    [
                        'type' => 'select',
                        'name' => 'role',
                        'id' => 'role',
                        'class' => 'form-select',
                        'label' => [
                            'name' => 'Select Role',
                            'class' => 'form-label',
                        ],
                        'options' => [
                            'admin' => 'Admin',
                            'editor' => 'Manager',
                            'employee' => 'Employee',
                            'user' => 'User',
                        ],
                    ],
                ],
            ],
            [
                'type' => 'email',
                'name' => 'email',
                'id' => 'email',
                'placeholder' => 'example@mail.com',
                'class' => 'form-control',
                'label' => [
                    'name' => 'Enter Email ',
                    'class' => 'form-label',
                ],
            ],
            [
                'inputDuel' => true,
                'inputs' => [
                    [
                        'type' => 'password',
                        'name' => 'password',
                        'id' => 'password',
                        'placeholder' => '*******',
                        'class' => 'form-control',
                        'label' => [
                            'name' => 'Enter password ',
                            'class' => 'form-label',
                        ],
                    ],
                    [
                        'type' => 'password',
                        'name' => 'password_confirmation',
                        'id' => 'password_confirmation',
                        'placeholder' => '*******',
                        'class' => 'form-control',
                        'label' => [
                            'name' => 'Enter Repassword ',
                            'class' => 'form-label',
                        ],
                    ],
                ],
            ],
        ]">
            <input type="submit" value="Submit" class="btn btn-primary mt-3">
        </x-form>
    </x-Bmodal>

    <x-Bmodal static="true" MId="updateUserModal" title="Add User">
    </x-Bmodal>
    <!-- Hoverable Table rows -->
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#backDropModal">
                                Add User
                            </button>
                        </div>
                        <div class="col-sm-4">
                            <div class="search-box">
                                <i class="material-icons">&#xE8B6;</i>
                                <input type="text" class="form-control" placeholder="Search&hellip;">
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name <i class="fa fa-sort"></i></th>
                            <th>Address <i class="fa fa-sort"></i></th>
                            <th>email <i class="fa fa-sort"></i></th>
                            <th>Role <i class="fa fa-sort"></i></th>
                            <th>Country <i class="fa fa-sort"></i></th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="allUserList">
                        @foreach ($users as $key => $user)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td class="text-capitalize">{{ $user->name }}</td>
                                <td class="text-capitalize">bangladesh</td>
                                <td class="text-capitalize">{{ $user->email }}</td>
                                <td class="text-capitalize">{{ $user->role }}</td>
                                <td class="text-capitalize">USA</td>
                                <td>
                                    <button type="button" class="edit border-0 p-0" style="background: no-repeat;"
                                        title="Edit" data-toggle="tooltip" data-bs-toggle="modal"
                                        data-bs-target="#updateUserModal" onclick="updateUserModalFN({{ $user->id }})">
                                        <i class="material-icons">&#xE254;</i>
                                    </button>
                                    <a href="#" class="delete" title="Delete" data-toggle="tooltip">
                                        <i class="material-icons">&#xE872;</i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                {{ $users->links('pagination::bootstrap-5') }}

            </div>
        </div>
    </div>
    <!--/ Hoverable Table rows -->
@endsection

@include('components.createDynamicRoute')

@push('scripts')
    <script>
        function updateUserModalFN(param) {
            const editRoute = generateRoute('userEdit', { id: param });
            const updateRoute = generateRoute('userUpdate', { id: param });

            (async () => {
                try {
                    const getDataResult = await getData(editRoute);
                    console.log(getDataResult.role);
                    
                    const modalBody = document.querySelector('#updateUserModal .modal-body');
                    modalBody.innerHTML = `
                                   <x-form id="sumitData" method="PUT" action="${updateRoute}" :fields="[
                                        [
                                            'inputDuel' => true,
                                            'inputs' => [
                                                [
                                                    'type' => 'text',
                                                    'name' => 'name',
                                                    'id' => 'name',
                                                    'placeholder' => 'Enter Name ...',
                                                    'class' => 'form-control',
                                                    'value' => '${getDataResult.name}',
                                                    'label' => [
                                                        'name' => 'Enter Name ',
                                                        'class' => 'form-label',
                                                    ],
                                                ],
                                                [
                                                    'type' => 'select',
                                                    'name' => 'role',
                                                    'id' => 'role',
                                                    'value' => '${getDataResult.role}',
                                                    'class' => 'form-select',
                                                    'label' => [
                                                        'name' => 'Select Role',
                                                        'class' => 'form-label',
                                                    ],
                                                    'options' => [
                                                        'admin' => 'Admin',
                                                        'editor' => 'Manager',
                                                        'employee' => 'Employee',
                                                        'user' => 'User',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        [
                                            'type' => 'email',
                                            'name' => 'email',
                                            'value' => '${getDataResult.email}',
                                            'id' => 'email',
                                            'placeholder' => 'example@mail.com',
                                            'class' => 'form-control',
                                            'label' => [
                                                'name' => 'Enter Email ',
                                                'class' => 'form-label',
                                            ],
                                        ],
                                        [
                                            'inputDuel' => true,
                                            'inputs' => [
                                                [
                                                    'type' => 'password',
                                                    'name' => 'password',
                                                    'id' => 'password',
                                                    'placeholder' => '*******',
                                                    'class' => 'form-control',
                                                    'label' => [
                                                        'name' => 'Enter password ',
                                                        'class' => 'form-label',
                                                    ],
                                                ],
                                                [
                                                    'type' => 'password',
                                                    'name' => 'password_confirmation',
                                                    'id' => 'password_confirmation',
                                                    'placeholder' => '*******',
                                                    'class' => 'form-control',
                                                    'label' => [
                                                        'name' => 'Enter Repassword ',
                                                        'class' => 'form-label',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ]">
                                        <input type="submit" value="Submit" class="btn btn-primary mt-3">
                                    </x-form>
                        `;
                    // console.log('GET Data:', getDataResult);
                } catch (error) {
                    console.error('Error fetching data:', error);
                }
            })();
            var updateUserModal = new bootstrap.Modal(document.getElementById('updateUserModal'));
            updateUserModal.show();

        }
        document.addEventListener('DOMContentLoaded', function() {
            var modalElement = document.getElementById('updateUserModal');

            modalElement.addEventListener('hidden.bs.modal', function() {
                var modalBackdrop = document.querySelector('.modal-backdrop');
                if (modalBackdrop) {
                    modalBackdrop.remove();
                }
            });
        });


        // POST request
        // const postDataResult = await postData(url, { key: 'value' });
        // console.log('POST Data:', postDataResult);

        // // UPDATE request
        // const updateDataResult = await updateData(url, { key: 'updatedValue' });
        // console.log('UPDATE Data:', updateDataResult);
    </script>
@endpush

<style>
    .table-responsive {
        margin: 30px 0;
    }

    .table-wrapper {
        min-width: 1000px;
        background: #fff;
        padding: 20px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    }

    .table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
        min-width: 100%;
    }

    .table-title h2 {
        margin: 8px 0 0;
        font-size: 22px;
    }

    .search-box {
        position: relative;
        float: right;
    }

    .search-box input {
        height: 34px;
        border-radius: 20px;
        padding-left: 35px;
        border-color: #ddd;
        box-shadow: none;
    }

    .search-box input:focus {
        border-color: #3FBAE4;
    }

    .search-box i {
        color: #a0a5b1;
        position: absolute;
        font-size: 19px;
        top: 8px;
        left: 10px;
    }

    table.table tr th,
    table.table tr td {
        border-color: #e9e9e9;
    }

    table.table-striped tbody tr:nth-of-type(odd) {
        background-color: #fcfcfc;
    }

    table.table-striped.table-hover tbody tr:hover {
        background: #f5f5f5;
    }

    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }

    table.table td:last-child {
        width: 130px;
    }

    table.table td a {
        color: #a0a5b1;
        display: inline-block;
        margin: 0 5px;
    }

    table.table td a.view {
        color: #03A9F4;
    }

    table.table td a.edit {
        color: #FFC107;
    }

    table.table td a.delete {
        color: #E34724;
    }

    table.table td i {
        font-size: 19px;
    }

    .pagination {
        float: right;
        margin: 0 0 5px;
    }

    .pagination li a {
        border: none;
        font-size: 95%;
        width: 30px;
        height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 30px !important;
        text-align: center;
        padding: 0;
    }

    .pagination li a:hover {
        color: #666;
    }

    .pagination li.active a {
        background: #03A9F4;
    }

    .pagination li.active a:hover {
        background: #0397d6;
    }

    .pagination li.disabled i {
        color: #ccc;
    }

    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }

    .hint-text {
        float: left;
        margin-top: 6px;
        font-size: 95%;
    }
</style>
