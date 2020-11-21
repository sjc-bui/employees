@extends('layout.app')

@section('content')
    <h3>Payments</h3>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Customer Number</th>
                <th scope="col">Check Number</th>
                <th scope="col">Payment Date</th>
                <th scope="col">Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
                <tr>
                    <td>{{ $d->customerNumber }}</td>
                    <td>{{ $d->checkNumber }}</td>
                    <td>{{ $d->paymentDate }}</td>
                    <td>{{ $d->amount }}</td>
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
