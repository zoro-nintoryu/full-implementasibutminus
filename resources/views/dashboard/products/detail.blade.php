@extends('layouts.master')
@section('title', 'Product Detail')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <img class="rounded img-fluid" src="{{ asset($product->image) }}" alt="{{ $product->name }}">
        </div>
        <div class="col-md-6">
            <h1 class="fw-bold">{{ $product->name }}</h1>
            <div class="mt-3 bg-dark mx-auto rounded" style="height: 3px;width: 75px"></div>
            <p class="mt-3">{{ $product->description }}</p>
            <div class="d-flex justify-content-between my-3">
                <p class="my-auto rounded py-1 bg-success px-2 text-white fw-semibold" style="font-size: 16px">
                    Stock: {{ $product->stock }}
                </p>
                <p class="my-auto rounded py-1 bg-info px-2 fw-semibold" style="font-size: 16px">
                    Price: Rp. {{ number_format($product->price, 0, ',', '.') }}
                </p>
                <p class="my-auto rounded py-1 bg-secondary text-white px-2 fw-semibold" style="font-size: 16px">
                    Weight: {{ $product->weight }} gr
                </p>
            </div>
            {{-- <div class="mt-4">
                <a href="{{ route('checkout', $product->id) }}" class="btn btn-primary w-100">Checkout</a>
            </div> --}}
        </div>
    </div>
</div>
@endsection
