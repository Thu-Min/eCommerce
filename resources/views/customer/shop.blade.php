@extends('customer.layout.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-2">
            <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse float-end">
                <div class="position-sticky fs-5">
                    <div class="list-group list-group-flush mx-3 mt-4">
                        <div class="dropdown">
                            <button class="btn btn-dark dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-list"></i> Category
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('user#shopPage') }}" class="dropdown-item">All</a>
                                </li>
                            @foreach ($category as $item)
                                <li>
                                    <a class="dropdown-item" href="{{ route('user#categorySearch', $item->category_id) }}" value="{{ $item->cateogry_name }}">{{ $item->cateogry_name }}</a>
                                </li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                    <form action="{{ route('user#productSearch') }}" method="get">
                        @csrf
                        <div class="d-flex list-group list-group-flush mx-3 mt-4">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="keyword" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-dark" type="submit" id="button-addon2">Button</button>
                              </div>
                        </div>
                    </form>
                    <div class="list-group list-group-flush mx-3 mt-4">
                        <a href="{{ route('user#cart', Auth::user()->id) }}">
                            <button class="btn btn-dark w-100" type="button"><i class="fa-solid fa-cart-shopping"></i> Cart</button>
                        </a>
                    </div>
                    <div class="list-group list-group-flush mx-3 mt-4">
                        <a href="{{ route('user#transactionPage', Auth::user()->id) }}">
                            <button class="btn btn-dark w-100"><i class="fa-solid fa-sack-dollar"></i> Transaction</button>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-10 mt-4">
            @if (Session::has('added'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('added') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (Session::has('confirmed'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('confirmed') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="row g-4">
                @foreach ($product as $item)
                <div class="col-3">
                    <div class="card h-100">
                            <img src="{{ asset('product_album/' . $item->image) }}" alt="" style="height: 220px;">
                        <div class="card-body">
                            <h5 class="card-title text-center fs-3 mb-3">{{ $item->product_name }}</h5>
                            <div class="text-center">
                                <a href="{{ route('user#detail', $item->product_id) }}">
                                    <button class="btn btn-outline-success">Details</button> |
                                </a>
                                <a href="{{ route('user#addToCart', $item->product_id) }}">
                                    <button class="btn btn-outline-dark">Add to Cart</button>
                                </a>
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
        <div class="">
            {{ $product->links() }}
        </div>
    </div>
</div>
@endsection
