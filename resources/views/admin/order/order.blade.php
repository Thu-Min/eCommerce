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
                            <th>Amount</th>
                            <th>Method</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody class="fs-5 border border-rounded">
                        @foreach ($data as $item)
                            <tr>
                                <th>{{ $item->order_id }}</th>
                                <th>{{ $item->name }}</th>
                                <th>{{ $item->email }}</th>
                                <th>{{ $item->amount }}</th>
                                <th>{{ $item->method }}</th>
                                <th>{{ $item->created_at }}</th>
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
