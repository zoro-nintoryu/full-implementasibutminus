<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a href="{{ route('products.index') }}"><img src="https://dashboard.amandemy.co.id/images/amandemy-logo.png"  height="50" width="140" alt=""></a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        @auth
                            @if (Auth::user()->roles[0]->name == 'superadmin')
                                <li class="nav-item">
                                    <a class="nav-link fw-bold" href="{{ route('dashboard.products') }}">Manage Product</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-bold" href="{{ route('dashboard.users') }}">Manage User</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link fw-bold" href="{{ route('dashboard.products') }}">Manage Product</a>
                                </li>
                            @endif

                            <li class="nav-item">
                                <a class="nav-link fw-bold" href="{{ route('logout') }}">Logout</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link fw-bold" href="{{ route('tampilan') }}">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold" href="{{ route('products.index') }}">PRODUCTS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold d-none " href="{{ route('register') }}">Register</a>
                            </li>


                            <li class="nav-item">
                                <a class="fw-bold btn btn-info text-black " href="{{ route('login') }}">LOGIN</a>
                            </li>

                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>