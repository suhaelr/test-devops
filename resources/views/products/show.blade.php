@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>Detail Produk</span>
                <div>
                    <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="{{ route('products.index') }}" class="btn btn-sm btn-secondary">Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <dl class="row mb-0">
                    <dt class="col-sm-3">Nama</dt>
                    <dd class="col-sm-9">{{ $product->name }}</dd>
                    <dt class="col-sm-3">Deskripsi</dt>
                    <dd class="col-sm-9">{{ $product->description ?: '-' }}</dd>
                    <dt class="col-sm-3">Harga</dt>
                    <dd class="col-sm-9">Rp {{ number_format($product->price, 0, ',', '.') }}</dd>
                    <dt class="col-sm-3">Stok</dt>
                    <dd class="col-sm-9">{{ $product->stock }}</dd>
                    <dt class="col-sm-3">Dibuat</dt>
                    <dd class="col-sm-9">{{ $product->created_at->format('d M Y H:i') }}</dd>
                </dl>
            </div>
        </div>
    </div>
</div>
@endsection
