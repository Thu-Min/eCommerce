@extends('admin.layout.app')

@section('content')
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
            <div class="row g-0">
                <div class="col fs-5">
                    <div class="card">
                        <form action="{{ route('admin#editProduct', $data->product_id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body py-5 px-md-5">
                                <div class="view overlay">
                                    <img class="card-img-top" src="{{ asset('product_album/' . $data->image) }}"
                                        alt="">
                                </div>
                                <hr>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example1">Product Name</label>
                                    <input type="text" id="form2Example1" class="form-control" name="name" value="{{ $data->product_name }}"/>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example1">Category Name</label>
                                    <select class="form-control" name="categoryId" id="">
                                        <option value="{{ $data->category_id }}">{{ $data->cateogry_name }}</option>
                                        @foreach ($category as $item)
                                            @if ($item->category_id != $data->category_id)
                                                <option value="{{ $item->category_id }}">{{ $item->cateogry_name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example2">Image</label>
                                    <input type="file" id="form2Example2" class="form-control" name="image"/>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example2">Description</label>
                                    <input type="text" id="form2Example2" class="form-control" name="description" value="{{ $data->description }}"/>
                                </div>

                                <div class="float-end mb-3">
                                    <a href="{{ route('admin#productPage') }}">
                                        <button type="button" class="btn btn-dark btn-block btn-lg me-3">Back</button>
                                    </a>
                                    <button type="submit" class="btn btn-dark btn-block btn-lg">Done</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection

