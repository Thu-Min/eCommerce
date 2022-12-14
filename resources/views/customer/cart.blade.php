@extends('customer.layout.app')

@section('content')

<section class="h-100" style="background-color: #d2c9ff;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            @if ($status == 1)
            <div class="col-12">
                @if (Session::has('deleted'))
                <div class="alert alert-success alert-dismissible fade show p-3" role="alert">
                    {{ Session::get('deleted') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">

                        <div class="row g-0">
                            <div class="col-lg-8">
                                <div class="p-5">
                                    <div class="d-flex justify-content-between align-items-center mb-5">
                                        <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                                        <h6 class="mb-0 text-muted">Total - {{ $product->total() }}</h6>
                                    </div>

                                    <hr class="my-4">

                                    @foreach ($product as $item)
                                        <div class="row mb-4 d-flex justify-content-between align-items-center">
                                            <div class="col-md-2 col-lg-2 col-xl-2">
                                                <img
                                                    src="{{ asset('product_album/'. $item->image) }}"
                                                    class="img-fluid rounded-3" alt="Cotton T-shirt">
                                            </div>
                                                <div class="col-md-3 col-lg-3 col-xl-3">
                                                <h6 class="text-muted">{{ $item->product_name }}</h6>
                                            </div>
                                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                <h6 class="mb-0">{{ $item->quantity }}</h6>
                                            </div>
                                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                <h6 class="mb-0">$ {{ $item->price * $item->quantity }}</h6>
                                            </div>
                                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                <form action="{{ route('user#deleteCart', $item->product_id) }}">
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    @endforeach

                                    <hr class="my-4">

                                    <div class="pt-5">
                                        <h6 class="mb-0"><a href="{{ route('user#shopPage') }}" class="text-body">
                                            <i class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                                    </div>
                                    <div class="">
                                        {{ $product->links() }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4" style="background-color: #d3d3d3">
                                <div class="p-5">
                                    <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                                    <hr class="my-4">

                                    <div class="d-flex justify-content-between mb-4">
                                        <h5 class="text-uppercase">Items {{ $product->total() }}</h5>
                                        <h5>$ {{ $totalPrice }}</h5>
                                    </div>

                                    <div class="mb-5">
                                        <div class="form-outline">
                                            <label class="form-label fs-4" for="form3Examplea2">Address</label>
                                            <input type="text" id="form3Examplea2" class="ms-0 form-control form-control-lg" value="{{ $userData->address }}"/>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-between mb-5">
                                        <h5 class="text-uppercase">Shipping fee</h5>
                                        <h5>$ 20</h5>
                                    </div>

                                    <hr class="my-4">

                                    <div class="d-flex justify-content-between mb-5">
                                    <h5 class="text-uppercase">Total price</h5>
                                    <h5>$ {{ $totalPrice - 20 }}</h5>
                                    </div>

                                    <a href="{{ route('user#payment', Auth::user()->id) }}">
                                        <button type="button" class="btn btn-dark btn-block btn-lg"
                                        data-mdb-ripple-color="dark">
                                            Payment
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="row d-flex justify-content-center align-items-center alert alert-danger" style="width: 800px; text-align: center" role="alert">
                <h1>
                    No Item in Cart!
                </h1>
            </div>
        </div>
    </div>
</section>
@endif
@endsection
