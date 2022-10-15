@extends('admin.layout.app');

@section('content')
<section class="">

    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-6 mb-4 mb-lg-0">
          <div class="card mb-3" style="border-radius: .5rem;">
            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (Session::has('passSuccess'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('passSuccess') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="row g-0">
              <div class="col-md-4 gradient-custom text-center text-white"
                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem; background-color:rgb(255, 145, 0);">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                  alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                <h5>{{ $userData->name }}</h5>
                <p>Administrator</p>
                <a href="{{ route('admin#updateProfilePage', $userData->id) }}" class="text-decoration-none text-dark link-primary"><i class="far fa-edit mb-5"></i></a>
              </div>
              <div class="col-md-8">
                <div class="card-body p-4">
                  <h6>Information</h6>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h6>Email</h6>
                      <p class="text-muted">{{ $userData->email }}</p>
                    </div>
                    <div class="col-6 mb-3">
                      <h6>Phone</h6>
                      <p class="text-muted">{{ $userData->phone }}</p>
                    </div>
                  </div>
                  <h6>Jobs</h6>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h6>Recent</h6>
                      <p class="text-muted">Lorem ipsum</p>
                    </div>
                    <div class="col-6 mb-3">
                      <h6>Working Hours</h6>
                      <p class="text-muted">Lorem ipsum</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection
