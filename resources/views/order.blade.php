@extends('layout.app')

@section('content')
    <h3>Orders</h3>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Order Number</th>
                <th scope="col">Order Date</th>
                <th scope="col">Required Date</th>
                <th scope="col">Shipped Date</th>
                <th scope="col">Status</th>
                <th scope="col">Comments</th>
                <th scope="col">Customer Number</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
                <tr>
                    <td>{{ $d->orderNumber }}</td>
                    <td>{{ $d->orderDate }}</td>
                    <td>{{ $d->requiredDate }}</td>
                    <td>{{ $d->shippedDate }}</td>
                    <td>{{ $d->status }}</td>
                    <td>{{ $d->comments }}</td>
                    <td>{{ $d->customerNumber }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @if ($data->lastPage() > 1)
        <nav aria-label="Customers List">
            <ul class="pagination justify-content-center">
                @for ($i = 1; $i <= $data->lastPage(); $i++)
                    <li class="page-item {{ $data->currentPage() == $i ? ' active' : '' }}">
                        <a class="page-link" href="{{ $data->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
            </ul>
        </nav>
    @endif

@endsection
