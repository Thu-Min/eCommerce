@extends('admin.layout.app');

@section('content')
<div class="m-0">
    <div class="mb-3">
        <a href="{{ route('admin#userAccount') }}" class="text-decoration-none text-dark link-primary fs-4 pe-5">Members</a> |
        <a href="{{ route('admin#adminAccount') }}" class="text-decoration-none text-dark link-primary fs-4 ps-5">Admin</a>
    </div>
    Admin
    {{-- <table class="table table-hover fs-5">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table> --}}
</div>
@endsection
