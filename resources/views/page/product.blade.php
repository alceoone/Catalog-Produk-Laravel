<!-- Menghubungkan dengan view template master -->
@extends('app')

@section('title', 'Product')
@section('product', 'active')
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
<div class="container">
        <div class="product-list">
            <h2>Product List</h2>
            @foreach($products as $product)
            <div class="list-product">
                <div class="card">
                    <img src="{{ $product->url_gambar }}" 
                    alt="Avatar" style="width:100%;">
                    <div class="container-card">
                        <h4><b>{{ $product->nama_item }}</b></h4>
                        <p>{{ $product->deskripsi_singkat }}</p>
                        <a href="{{ $product->link_shoppe }}"><button class="btn orange-shoppe">Order from shoppe</button></a>
                        <button class="btn success">Order from whatsapp</button>
                    </div>  
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection