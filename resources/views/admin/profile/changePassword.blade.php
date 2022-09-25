@extends('admin.layout.app')

@section('content')
<section class="vh-100 bg-image">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">change your password</h2>

                <form action="{{ route('admin#changePassword', Auth::user()->id) }}" method="POST">
                @csrf

                    <div class="form-outline mb-4">
                        <input type="password" id="form3Example4cg" class="form-control form-control-lg @error('oldPassword') is-invalid @enderror" placeholder="Old Password" name="oldPassword" autocomplete="new-password" />
                        <label class="form-label" for="form3Example4cg"></label>
                        @error('oldPassword')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-outline mb-4">
                        <input type="password" id="form3Example4cg" class="form-control form-control-lg @error('newPassword') is-invalid @enderror" placeholder="New Password" name="newPassword" autocomplete="new-password" />
                        <label class="form-label" for="form3Example4cg"></label>
                        @error('newPassword')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-outline mb-4">
                        <input type="password" id="form3Example4cdg" class="form-control form-control-lg" placeholder="Repeat your new password" name="password_confirmation" autocomplete="new-password"/>
                        <label class="form-label" for="form3Example4cdg"></label>
                    </div>

                    <div class="d-flex justify-content-center">
                        <a href="{{ route('admin#profile') }}">
                            <button type="button" class="btn btn-dark btn-block btn-lg gradient-custom-4 text-white mx-1">
                                Back
                            </button>
                        </a>
                        <button type="submit" class="btn btn-warning btn-block btn-lg gradient-custom-4 text-body mx-1">
                        Change
                        </button>
                    </div>

                </form>

            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
@endsection
