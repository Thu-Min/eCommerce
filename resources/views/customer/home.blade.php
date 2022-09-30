@extends('customer.layout.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col" style="margin-top: 220px;">
            <div class="text-center">
                <h1 class="py-3">Shop in one second!</h1>
                <h4 class="py-3"> Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>
                <a href="{{ route('user#shopPage') }}" class="py-3">
                    <button class="btn btn-dark btn-lg">Shop Now !</button>
                </a>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12 justify-content-around d-flex">
            <section>
                <div class="row">
                    <div class="col-xl-6 col-md-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between p-md-1">
                                    <div class="d-flex flex-row">
                                        <div class="align-self-center">
                                            <i class="fa-solid fa-users text-dark fa-3x me-4"></i>
                                        </div>
                                        <div>
                                            <h4>Total Users</h4>
                                            <p class="mb-0">Lorem ipsum dolor sit</p>
                                        </div>
                                    </div>
                                    <div class="align-self-center">
                                        <h2 class="h1 mb-0">{{ $userCount }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between p-md-1">
                                    <div class="d-flex flex-row">
                                        <div class="align-self-center">
                                            <i class="fa-solid fa-cart-shopping fa-3x me-4"></i>
                                        </div>
                                        <div>
                                            <h4>Total Orders</h4>
                                            <p class="mb-0">Lorem ipsum dolor sit</p>
                                        </div>
                                    </div>
                                    <div class="align-self-center">
                                        <h2 class="h1 mb-0">{{ $orderCount }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-md-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between p-md-1">
                                    <div class="d-flex flex-row">
                                        <div class="align-self-center">
                                            <i class="fa-solid fa-box fa-3x me-4"></i>
                                        </div>
                                        <div>
                                            <h4>Total Products</h4>
                                            <p class="mb-0">Monthly Sales Products</p>
                                        </div>
                                    </div>
                                    <div class="align-self-center">
                                        <h2 class="h1 mb-0">{{ $productCount }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between p-md-1">
                                    <div class="d-flex flex-row">
                                        <div class="align-self-center">
                                            <i class="fa-regular fa-thumbs-up fa-3x me-4"></i>
                                        </div>
                                        <div>
                                            <h4>Reviews</h4>
                                            <p class="mb-0">Trustable</p>
                                        </div>
                                    </div>
                                    <div class="align-self-center">
                                        <h2 class="h1 mb-0">100%</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

@endsection
