@extends('layout.app')

@section('content')
    <h3>Order Details</h3>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Order Number</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Line</th>
                <th scope="col">Product Scale</th>
                <th scope="col">Product Vendor</th>
                <th scope="col">Product Description</th>
                <th scope="col">Quantity Ordered</th>
                <th scope="col">Price Each</th>
                <th scope="col">Order Line Number</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
                <tr>
                    <td>{{ $d->orderNumber }}</td>
                    <td>{{ $d->productName }}</td>
                    <td>{{ $d->productLine }}</td>
                    <td>{{ $d->productScale }}</td>
                    <td>{{ $d->productVendor }}</td>
                    <td>{{ $d->productDescription }}</td>
                    <td>{{ $d->quantityOrdered }}</td>
                    <td>{{ $d->priceEach }}</td>
                    <td>{{ $d->orderLineNumber }}</td>
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
