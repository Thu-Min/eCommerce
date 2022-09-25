@extends('admin.layout.app')

@section('content')
<section class="vh-100 bg-image">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Update your account</h2>

                <form action="{{ route('admin#updateProfile', $userData->id) }}" method="post">
                @csrf

                    <div class="form-outline mb-4">
                        <input type="text" id="form3Example1cg" class="form-control form-control-lg @error('name') is-invalid @enderror" placeholder="Your Name" name="name" value="{{ old('name', $userData->name) }}" required autocomplete="name" autofocus/>
                        <label class="form-label" for="form3Example1cg"></label>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-outline mb-4">
                        <input type="email" id="form3Example3cg" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Your Email" name="email" value="{{ old('email', $userData->email) }}" required autocomplete="email"/>
                        <label class="form-label" for="form3Example3cg"></label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-outline mb-4">
                        <input type="number" id="form3Example3cg" class="form-control form-control-lg @error('phone') is-invalid @enderror" placeholder="Your Phone Number" name="phone" value="{{ old('phone', $userData->phone) }}" required autocomplete="phone"/>
                        <label class="form-label" for="form3Example3cg"></label>
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-outline mb-4">
                        <input type="text" id="form3Example3cg" class="form-control form-control-lg @error('address') is-invalid @enderror" placeholder="Your Address" name="address" value="{{ old('address', $userData->address) }}" required autocomplete="address"/>
                        <label class="form-label" for="form3Example3cg"></label>
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-center">
                        <a href="{{ route('admin#profile') }}">
                            <button type="button" class="btn btn-dark btn-block btn-lg gradient-custom-4 text-white mx-1">
                                Back
                            </button>
                        </a>
                        <button type="submit" class="btn btn-warning btn-block btn-lg gradient-custom-4 text-body">
                        Update
                        </button>
                    </div>

                    <p class="text-center text-muted mt-5 mb-0">Feel un-secure?
                        <a href="{{ route('admin#changePasswordPage',$userData->id) }}" class="fw-bold text-danger">
                            <u>
                                Change Password
                            </u>
                        </a>
                    </p>

                </form>

            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
@endsection
