@extends('customer.layout.app')

@section('content')
<section style="background-color: #eee;">
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <table class="table table-hover">
                        <h1 style="text-align: center;" class="text-decoration-underline bg-primary text-white py-3 ps-3">Transactions</h1>

                        <thead class="fs-4">
                            <tr>
                                <th>Id</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Payment</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="fs-5 border border-rounded">
                            @foreach ($data as $item)
                               <tr>
                                    <td>{{ $item->order_id }}</td>
                                   <td>{{ $item->created_at }}</td>
                                   <td>{{ $item->amount }}</td>
                                   <td>{{ $item->method }}</td>
                               </tr>
                            @endforeach
                        </tbody>
                        <tfoot>

                        </tfoot>
                    </table>
                    <div class="px-2 pb-2">
                        <a href="{{ route('user#shopPage') }}">
                            <button class="btn btn-primary">Back</button>
                        </a>
                        <div class="">
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
