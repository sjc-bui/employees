@extends('layout.app')

@section('content')
    <h3>Product Lines</h3>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Product Line</th>
                <th scope="col">Text Description</th>
                <th scope="col">Html Description</th>
                <th scope="col">Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
                <tr>
                    <td>{{ $d->productLine }}</td>
                    <td>{{ $d->textDescription }}</td>
                    <td>{{ $d->htmlDescription }}</td>
                    <td>{{ $d->image }}</td>
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
