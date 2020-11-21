@extends('layout.app')

@section('content')
    <h3>Employees</h3>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Last Name</th>
                <th scope="col">First Name</th>
                <th scope="col">Extension</th>
                <th scope="col">Email</th>
                <th scope="col">City</th>
                <th scope="col">Report To</th>
                <th scope="col">Job Title</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
                <tr>
                    <td>{{ $d->employeeNumber }}</td>
                    <td>{{ $d->lastName }}</td>
                    <td>{{ $d->firstName }}</td>
                    <td>{{ $d->extension }}</td>
                    <td>{{ $d->email }}</td>
                    <td>{{ $d->city }}</td>
                    <td>{{ $d->reportsTo }}</td>
                    <td>{{ $d->jobTitle }}</td>
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
