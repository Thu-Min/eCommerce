@extends('admin.layout.app')

@section('content')
<section>
    <div class="container py-5">

        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                            class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3">{{ $userData->name }}</h5>
                        <div class="d-flex justify-content-center mb-2">
                            <button type="button" class="btn btn-outline-primary ms-1">Message</button>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                            <p class="mb-0">Full Name</p>
                            </div>
                            <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $userData->name }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                            <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $userData->email }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                            <p class="mb-0">Phone</p>
                            </div>
                            <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $userData->phone }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                            <p class="mb-0">Address</p>
                            </div>
                            <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $userData->address }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                            <p class="mb-0">Joined</p>
                            </div>
                            <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $userData->created_at }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('admin#userAccount') }}">
                    <button type="button" class="btn btn-primary">Back</button>
                </a>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                                <p class="mb-4">
                                    <span class="font-italic me-1 fs-5">Transactions</span>
                                </p>
                                <table class="table table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Amount</th>
                                            <th>Payment</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transaction as $item)
                                            <tr>
                                                <td>{{ $item->order_id }}</td>
                                                <td>{{ $item->amount }}</td>
                                                <td>{{ $item->method }}</td>
                                                <td>{{ $item->created_at }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection
