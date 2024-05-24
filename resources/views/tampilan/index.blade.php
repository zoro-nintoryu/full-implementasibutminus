@extends('layouts.master')
@section('title', 'Product Page')

@section('content')
  <style>
    .vh-100 {
      min-height: 100vh;
    }
    .custom {
      width: 20%;
    }
  </style>
<div class="container vh-100 d-flex align-items-center justify-content-center">
    <div class="row ">
      <!-- Bagian Kiri -->
      <div class="col-md-6  d-flex flex-column justify-content-center">
        <div>
          <h3>Discover.Connect.Thrive.</h3>
          <h1 >Tranform Your Shopping Exprience</h1>
          <p class="text-secondary fw-medium">
            Welcome to Amandemy Shopping.where you sheres meet their perfect match immerse yourself in a world of endless possibilities,curated just for you.whether you’re hunting unique finds,everyday essentials,or extradionary gift, we’ve got you covereted.
          </p>
          
        </div>
    
        <a class="btn btn-info text-black fw-bold custom p-2 mt-3 " href="{{ route('products.index') }}">Buy Now!</a>
      </div>
      <!-- Bagian Kanan -->
      <div class="col-md-6 d-flex justify-content-center align-items-center">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6wIrF5eHd3AKcqld9MBRE2pPw1WU3tj9ilXZIGt8XNA&s" class="img-fluid" alt="Gambar Placeholder">
      </div>
    </div>
  </div>
@endsection