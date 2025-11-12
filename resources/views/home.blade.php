@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4">Selamat Datang, {{ Auth::user()->name ?? 'Admin' }}</h4>

  <div class="row">
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card">
        <div class="card-body">
          <span class="fw-semibold d-block mb-1">Total Produk</span>
          <h3 class="card-title mb-2">25</h3>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
