@extends('layouts.master')
@section('title', 'Product Page')

@section('content')

        <style>
        .label-margin {
            margin-right: 100px; /* Atur jarak sesuai kebutuhan */
        }
    </style>

<div class="container mt-5 vh-100 d-flex align-items-center justify-content-center">
    
    <div class="row">
        <div class="col-md-6 w-100">
            <div class="card">
                
                <div class="card-body">
                    <h3 class="mb-3">Halaman Dashboard User</h3>
                    <p class="card-text d-flex justify-content-between"><strong class="label-margin">Nama:</strong> <span>{{ $user->name }}</span></p>
                    <p class="card-text d-flex justify-content-between"><strong class="label-margin">Email:</strong> <span>{{ $user->email }}</span></p>
                    <p class="card-text d-flex justify-content-between"><strong class="label-margin">Birth:</strong> <span>{{ $user->birth }}</span></p>
                    <p class="card-text d-flex justify-content-between"><strong class="label-margin">Gender:</strong> <span>{{ $user->gender }}</span></p>
                    <p class="card-text d-flex justify-content-between"><strong class="label-margin">Address:</strong> <span>{{ $user->address }}</span></p>
                    <p class="nav-item">
                                <a class="fw-bold btn btn-danger text-black " href="{{ route('logout') }}">Logout</a>
                            </p>
                    <p class="nav-item">
                                <a class="fw-bold btn btn-info text-black " href="{{ route('dashboard.products.export') }}">Logout</a>
                            </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection