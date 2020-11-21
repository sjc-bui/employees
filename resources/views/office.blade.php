@extends('layout.app')

@section('content')
    <h3>Offices</h3>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Code</th>
                <th scope="col">City</th>
                <th scope="col">Phone</th>
                <th scope="col">Address 1</th>
                <th scope="col">Address 2</th>
                <th scope="col">State</th>
                <th scope="col">Country</th>
                <th scope="col">Postal Code</th>
                <th scope="col">Territory</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
                <tr>
                    <td>{{ $d->officeCode }}</td>
                    <td>{{ $d->city }}</td>
                    <td>{{ $d->phone }}</td>
                    <td>{{ $d->addressLine1 }}</td>
                    <td>{{ $d->addressLine2 }}</td>
                    <td>{{ $d->state }}</td>
                    <td>{{ $d->country }}</td>
                    <td>{{ $d->postalCode }}</td>
                    <td>{{ $d->territory }}</td>
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
