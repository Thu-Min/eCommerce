@extends('admin.layout.app')

@section('content')
<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-10">

            <h1 style="text-align: center" class="text-decoration-underline mb-3">Order List</h1>

            <div class="card p-3">
                <table class="table table-hover text-center">
                    <thead class="fs-4">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody class="fs-5 border border-rounded">
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->contact_id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->message }}</td>
                            <td>{{ $item->created_at }}</td>
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
