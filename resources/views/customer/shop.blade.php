@extends('customer.layout.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-2">
            <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse float-end">
                <div class="position-sticky fs-5">
                    <div class="list-group list-group-flush mx-3 mt-4">
                        <div class="dropdown">
                            <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-list"></i> Category
                            </button>
                            <ul class="dropdown-menu">
                            @foreach ($category as $item)
                                <li>
                                    <a class="dropdown-item" href="#">{{ $item->cateogry_name }}</a>
                                </li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="list-group list-group-flush mx-3 mt-4">
                        <button class="btn btn-dark"><i class="fa-solid fa-magnifying-glass"></i> Search</button>
                    </div>
                    <div class="list-group list-group-flush mx-3 mt-4">
                        <button class="btn btn-dark"><i class="fa-solid fa-cart-shopping"></i> Cart</button>
                    </div>
                    <div class="list-group list-group-flush mx-3 mt-4">
                        <button class="btn btn-dark"><i class="fa-solid fa-sack-dollar"></i> Transaction</button>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-10 mt-4">
            <div class="row g-4">
                @foreach ($product as $item)
                <div class="col-3">
                    <div class="card h-100">
                            <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/044.webp" class="card-img-top"
                        alt="Skyscrapers" />
                        <div class="card-body">
                            <h5 class="card-title text-center fs-3 mb-3">{{ $item->product_name }}</h5>
                            <div class="text-center">
                                <button class="card-text btn btn-outline-primary">
                                    {{ $item->price }}
                                </button> |
                                <button class="btn btn-outline-success">Details</button> |
                                <button class="btn btn-outline-dark">Add to Cart</button>
                            </div>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">{{ $item->description }}</small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
