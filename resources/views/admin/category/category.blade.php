@extends('admin.layout.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        @if (Session::has('added'))
            <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                {{ Session::get('added') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (Session::has('deleted'))
            <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                {{ Session::get('deleted') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (Session::has('updated'))
            <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                {{ Session::get('updated') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="col-3">
            <div class="d-flex flex-column flex-shrink-0 bg-light ">
                <a href="#" class="d-flex link-dark text-decoration-none">
                    <span class="fs-2 my-3">Categories</span>
                </a>

                <form action="{{ route('admin#addCategory') }}" method="post">
                    @csrf
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form4Example1">Name</label>
                        <input type="text" id="form4Example1" class="form-control" name="name"/>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block mb-4">Creat New Category</button>
                </form>

            </div>
        </div>

        <div class="col-5 ms-5" style="margin-top: 80px;">
            <div class="card p-3">
                <table class="table table-hover align-middle">
                    <thead class="fs-4">
                        <tr>
                            <th>Id</th>
                            <th>Category Name</th>
                        </tr>
                    </thead>
                    <tbody class="fs-5 border border-rounded">
                        @foreach ($categoryData as $item)
                            <tr>
                                <td>{{ $item->category_id }}</td>
                                <td>{{ $item->cateogry_name }}</td>
                                <form action="{{ route('admin#deleteCategory', $item->category_id) }}" method="post">
                                    @csrf
                                    <td>
                                        <button type="submit" class="btn btn-lg m-0 px-1"><i class="fa-solid fa-trash text-dark"></i></button>
                                    </td>
                                </form>
                                <td>
                                    <a href="{{ route('admin#editCategoryPage', $item->category_id) }}">
                                        <i class="fa-solid fa-pen-to-square text-dark"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot></tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
