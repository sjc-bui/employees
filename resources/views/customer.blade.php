@extends('layout.app')

@section('content')
    <h3>Customers</h3>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">First Name</th>
                <th scope="col">Phone</th>
                <th scope="col">City</th>
                <th scope="col">State</th>
                <th scope="col">Postal Code</th>
                <th scope="col">Country</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
                <tr>
                    <td>{{ $d->customerNumber }}</td>
                    <td>{{ $d->customerName }}</td>
                    <td>{{ $d->contactLastName }}</td>
                    <td>{{ $d->contactFirstName }}</td>
                    <td>{{ $d->phone }}</td>
                    <td>{{ $d->city }}</td>
                    <td>{{ $d->state }}</td>
                    <td>{{ $d->postalCode }}</td>
                    <td>{{ $d->country }}</td>
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
