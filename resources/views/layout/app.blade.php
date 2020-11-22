<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empoyees</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <a class="navbar-brand" href="#">Employees</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('customers*') ? 'nav__active' : '' }}"
                        href="{{ route('customers') }}">Customers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('employees*') ? 'nav__active' : '' }}"
                        href="{{ route('employees') }}">Employees</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('offices*') ? 'nav__active' : '' }}"
                        href="{{ route('offices') }}">Offices</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('orderdetails*') ? 'nav__active' : '' }}"
                        href="{{ route('orderdetails') }}">Order Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('orders*') ? 'nav__active' : '' }}"
                        href="{{ route('orders') }}">Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('payments*') ? 'nav__active' : '' }}"
                        href="{{ route('payments') }}">Payments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('productlines*') ? 'nav__active' : '' }}"
                        href="{{ route('productlines') }}">Product Lines</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('products*') ? 'nav__active' : '' }}"
                        href="{{ route('products') }}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Free API</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            @yield('content')
        </div>
    </div>
</body>

</html>
