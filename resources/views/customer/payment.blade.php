@extends('customer.layout.app')

@section('content')
<section style="background-color: #eee;">
    <div class="container py-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 col-lg-10 col-xl-8">
                <div class="card">
                    <form action="{{ route('user#paymentProcess', Auth::user()->id) }}" method="POST">
                        @csrf
                        <div class="card-body p-md-5">
                            <div class="px-3 py-4 border border-primary border-2 rounded mt-4 d-flex justify-content-between">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="d-flex flex-column">
                                        <h3>Total Amount</h3>
                                    </div>
                                </div>
                                <div class="d-flex flex-row align-items-center">
                                    <sup class="dollar font-weight-bold text-muted">$</sup>
                                    <span class="h2 mx-1 mb-0">{{ $price }}</span>
                                </div>
                            </div>

                            <h4 class="mt-5">Payment details</h4>

                            <div class="my-5 d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-row align-items-center">
                                    <i class="fa-regular fa-credit-card fs-1"></i>
                                    <div class="d-flex flex-column ms-3">
                                        <span class="h5 mb-1">Credit Card</span>
                                        <span class="small text-muted">1234 XXXX XXXX 2570</span>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="form-check">
                                        <input class="form-check-input fs-4" type="checkbox" value="" id="flexCheckDefault" name="creditCard">
                                        <label class="form-check-label" for="flexCheckDefault"></label>
                                    </div>
                                    <input type="text" class="form-control" placeholder="CVC" style="width: 70px;" />
                                </div>
                            </div>

                            <div class="my-5 d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-row align-items-center">
                                    <i class="fa-brands fa-cc-visa fs-1"></i>
                                    <div class="d-flex flex-column ms-3">
                                        <span class="h5 mb-1">Visa Card</span>
                                        <span class="small text-muted">2344 XXXX XXXX 8880</span>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="form-check">
                                        <input class="form-check-input fs-4" type="checkbox" value="" id="flexCheckDefault" name="visaCard">
                                        <label class="form-check-label" for="flexCheckDefault"></label>
                                    </div>
                                    <input type="text" class="form-control" placeholder="CVC" style="width: 70px;" />
                                </div>
                            </div>
                            <div class="my-5 d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-row align-items-center">
                                    <i class="fa-brands fa-cc-mastercard fs-1"></i>
                                    <div class="d-flex flex-column ms-3">
                                        <span class="h5 mb-1">Master Card</span>
                                        <span class="small text-muted">2344 XXXX XXXX 8880</span>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="form-check">
                                        <input class="form-check-input fs-4" type="checkbox" value="" id="flexCheckDefault" name="masterCard">
                                        <label class="form-check-label" for="flexCheckDefault"></label>
                                    </div>
                                    <input type="text" class="form-control" placeholder="CVC" style="width: 70px;" />
                                </div>
                            </div>
                            <div class="my-5 d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-row align-items-center">
                                    <i class="fa-brands fa-cc-paypal fs-1"></i>
                                    <div class="d-flex flex-column ms-3">
                                        <span class="h5 mb-1">PayPal</span>
                                        <span class="small text-muted">2344 XXXX XXXX 8880</span>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="form-check">
                                        <input class="form-check-input fs-4" type="checkbox" value="" id="flexCheckDefault" name="paypal">
                                        <label class="form-check-label" for="flexCheckDefault"></label>
                                    </div>
                                    <input type="text" class="form-control" placeholder="CVC" style="width: 70px;" />
                                </div>
                            </div>

                            <div class="form-outline mt-5">
                                <label class="form-label" for="formControlLg">Email address</label>
                                <input type="text" id="formControlLg" class="form-control form-control-lg" value="{{ $userData->email }}"/>
                            </div>
                            <div class="mt-3">
                                <a href="{{ route('user#cart', Auth::user()->id) }}">
                                    <button class="btn btn-warning btn-block btn-lg" type="button">
                                        <i class="fas fa-long-arrow-alt-left"></i> Back
                                    </button>
                                </a>
                                <button class="btn btn-primary btn-block btn-lg float-end" type="submit">
                                    Confirm <i class="fas fa-long-arrow-alt-right"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
