@extends('layouts.app')

@section('content')

<form action="{{ route('register') }}" method="POST">
@csrf
    <section class="vh-100 bg-image">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1cg" class="form-control form-control-lg @error('name') is-invalid @enderror" placeholder="Your Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                                    <label class="form-label" for="form3Example1cg"></label>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="email" id="form3Example3cg" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Your Email" name="email" value="{{ old('email') }}" required autocomplete="email"/>
                                    <label class="form-label" for="form3Example3cg"></label>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="number" id="form3Example3cg" class="form-control form-control-lg @error('phone') is-invalid @enderror" placeholder="Your Phone Number" name="phone" value="{{ old('phone') }}" required autocomplete="phone"/>
                                    <label class="form-label" for="form3Example3cg"></label>
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example3cg" class="form-control form-control-lg @error('address') is-invalid @enderror" placeholder="Your Address" name="address" value="{{ old('address') }}" required autocomplete="address"/>
                                    <label class="form-label" for="form3Example3cg"></label>
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="form3Example4cg" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password" />
                                    <label class="form-label" for="form3Example4cg"></label>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="form3Example4cdg" class="form-control form-control-lg" placeholder="Repeat your password" name="password_confirmation" required autocomplete="new-password"/>
                                    <label class="form-label" for="form3Example4cdg"></label>
                                </div>

                                <div class="form-check d-flex justify-content-center mb-5">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                                    <label class="form-check-label" for="form2Example3g">
                                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                                    </label>
                                </div>

                                <div class="my-2 d-flex justify-content-center">
                                    {!! NoCaptcha::renderJs() !!}
                                    {!! NoCaptcha::display(['data-theme' => 'dark']) !!}
                                </div>
                                <div class="text-danger mb-2 d-flex justify-content-center">
                                    @if ($errors->has('g-recaptcha-response'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">
                                    Register
                                    </button>
                                </div>

                                <p class="text-center text-muted mt-5 mb-0">Have already an account?
                                    <a href="{{ route('login') }}" class="fw-bold text-body">
                                        <u>
                                            Login here
                                        </u>
                                    </a>
                                    </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
@endsection
