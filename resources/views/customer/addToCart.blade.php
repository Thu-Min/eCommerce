@extends('customer.layout.app')

@section('content')
<section>
    <div class="container py-5">

        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="{{ asset('product_album/' . $data->image) }}" alt="avatar"
                            class="w-100 h-100">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="card mb-4">
                        <form action="{{ route('user#addToCartP', $data->product_id) }}" method="post">
                            <div class="card-body fs-5">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Product Name</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ $data->product_name }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Quantity</p>
                                    </div>
                                    <div class="form-outline col-sm-9">
                                        <input type="text" name="quantity" id="form12" class="form-control mb-0" />
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Price</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ $data->price }} $</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Description</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ $data->description }}</p>
                                    </div>
                                </div>
                                <hr>
                                <a href="{{ route('user#shopPage') }}">
                                    <button class="btn btn-dark btn-lg">Back</button>
                                </a>

                                    @csrf
                                    <a href="{{ route('user#addToCart', $data->product_id) }}">
                                        <button class="btn btn-dark float-end btn-lg">Add to Cart</button>
                                    </a>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
