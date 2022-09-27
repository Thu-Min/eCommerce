@extends('admin.layout.app')

@section('content')
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
            <div class="row g-0">
                <div class="col fs-5">
                <div class="card">
                    <div class="card-body py-5 px-md-5">
                        <form action="{{ route('admin#addProduct') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example1">Product Name</label>
                                <input type="text" id="form2Example1" class="form-control" name="name"/>
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example1">Category Name</label>
                                <select class="form-control" name="categoryId" id="">
                                    <option value="">Choose Category</option>
                                    @foreach ($category as $item)
                                        <option value="{{ $item->category_id }}">{{ $item->cateogry_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example2">Image</label>
                                <input type="file" id="form2Example2" class="form-control" name="image"/>
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example2">Description</label>
                                <input type="text" id="form2Example2" class="form-control" name="description"/>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block btn-lg float-end">Add</button>
                        </form>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection

