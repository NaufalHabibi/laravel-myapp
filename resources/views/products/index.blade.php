@extends('layouts.app')
@section('title', 'Daftar Produk')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    {{-- Breadcrumb --}}
    <x-breadcrumb :items="['Produk' => route('products.index'), 'Daftar Produk' => '']" />

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Daftar Produk</h5>
            <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm">
                <i class="bx bx-plus"></i> Tambah Produk
            </a>
        </div>

        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><img src="{{ asset('assets/img/avatars/5.png') }}" width="80" class="img-thumbnail"></td>
                            <td>Meja Kantor Kayu</td>
                            <td>Meja kantor berbahan kayu jati berkualitas tinggi.</td>
                            <td>Rp 2.500.000</td>
                            <td>10</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary"><i class="bx bx-edit"></i></a>
                                <a href="#" class="btn btn-sm btn-danger"><i class="bx bx-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
