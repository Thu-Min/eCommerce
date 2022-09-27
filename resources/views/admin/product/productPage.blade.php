@extends('admin.layout.app')

@section('content')
<div class="container-fluid mt-5">
    @if (Session::has('added'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ Session::get('added') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if (Session::has('deleted'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ Session::get('deleted') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
        <div class="row">
            <div class="col-2">
                <div class="">
                    <h1>Product List</h1>
                </div>
            </div>
            <div class="offset-8 col-2">
                <a href="{{ route('admin#addProductPage') }}">
                    <button class="btn btn-primary me-0"><i class="fa-solid fa-plus"></i> Add New</button>
                </a>
            </div>
        </div>
        <div class="row">
            @foreach ($data as $item)
            <div class="col-2 mb-4">
                <div class="card">
                    <div class="view overlay">
                        <img class="card-img-top" src="{{ asset('product_album/' . $item->image) }}"
                            alt="" width="200px" height="190px">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title fs-3">
                            {{ $item->product_name }}
                        </h4>
                        <p class="card-text fs-5">
                            {{ $item->description }}
                        </p>
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-dark btn-light-blue btn-md mx-2">Edit</button>
                            <form action="{{ route('admin#deleteProduct', $item->product_id) }}" method="POST">
                                @csrf
                                    <button type="submit" class="btn btn-danger btn-light-blue btn-md mx-2">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</div>
@endsection
