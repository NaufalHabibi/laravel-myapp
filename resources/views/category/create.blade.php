@extends('layouts.sneat')
@section('title', 'Tambah Kategori')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <x-breadcrumb :items="['Kategori' => route('category.index'), 'Tambah Kategori' => '']" />

  <div class="mb-4">
    <a href="{{ route('category.index') }}" class="btn btn-secondary">
      <i class="bx bx-arrow-back"></i> Kembali
    </a>
  </div>

  <div class="card mb-4">
    <div class="card-body">
      <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Kategori</label>
          <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror"
                 placeholder="Masukkan nama kategori" value="{{ old('nama') }}">
          @error('nama')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>
</div>
@endsection
