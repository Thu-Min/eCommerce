@extends('admin.layout.app')

@section('content')
<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-10">
            <h1 style="text-align: center" class="text-decoration-underline">User Account List</h1>
            <div class="my-3">
                <a href="{{ route('admin#userAccount') }}">
                    <button class="btn btn-dark">User</button>
                </a>
                <a href="{{ route('admin#adminAccount') }}">
                    <button class="btn btn-dark">Admin</button>
                </a>
            </div>
            <div class="card p-3">
                <table class="table table-hover">
                    <thead class="fs-4">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="fs-5 border border-rounded">
                        @foreach ($userData as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    <a href="{{ route('admin#detailUserAcc', $item->id) }}">
                                        <i class="fa-solid fa-circle-info text-dark"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot></tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
