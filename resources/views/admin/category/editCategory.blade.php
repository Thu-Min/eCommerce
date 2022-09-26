@extends('admin.layout.app')

@section('content')
<div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
                <div class="card-body p-5">
                    <h2 class="text-uppercase text-center mb-5">Edit Category</h2>

                        <form action="{{ route('admin#editCategory', $data->category_id) }}" method="POST">
                            @csrf
                            <div class="form-outline mb-4">
                                <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="editName" required autocomplete="name" autofocus value="{{ $data->cateogry_name }}"/>
                                <label class="form-label" for="form3Example1cg"></label>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-center">
                                <a href="{{ route('admin#categoryPage') }}">
                                    <button type="button" class="btn btn-dark btn-block btn-lg gradient-custom-4 text-white mx-1">
                                        Back
                                    </button>
                                </a>
                                <button type="submit" class="btn btn-warning btn-block btn-lg gradient-custom-4 text-body">
                                Update
                                </button>
                            </div>
                        </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
