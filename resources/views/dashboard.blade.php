@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="row mb-4">
        <div class="col-lg-8 col-md-12 mb-4">
            <div class="card h-100">
                <div class="row g-0">
                    <div class="col-md-7 p-4">
                        <h5 class="card-title mb-3">Selamat datang di Dashboard UTS PPWL!</h5>
                        <p class="mb-0">
                            Selamat Datang, <strong>{{ Auth::user()->name }}</strong>
                            <br>
                        </p>
                    </div>
                    <div class="col-md-5 text-center p-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/921/921071.png"
                             alt="Dashboard Illustration"
                             width="150">
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 1 -->
        <div class="col-lg-2 col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <span class="fw-semibold d-block mb-1">Data User</span>
                    <h4 class="card-title mb-2">$12,628</h4>
                    <small class="text-success fw-semibold">
                        <i class="bx bx-up-arrow-alt"></i> +72.80%
                    </small>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-lg-2 col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <span class="fw-semibold d-block mb-1">Sales</span>
                    <h4 class="card-title mb-2">$4,679</h4>
                    <small class="text-success fw-semibold">
                        <i class="bx bx-up-arrow-alt"></i> +28.42%
                    </small>
                </div>
            </div>
        </div>

    </div>

    <!-- Card total produk -->
   

</div>
@endsection
