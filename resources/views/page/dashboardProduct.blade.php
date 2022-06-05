@extends('appDashboard')
 
@section('title', 'Dashboard')

@section('title-page', 'Product')

@section('product', 'active')

@section('konten')
<div class="profile" style="text-align: center;">
        <a href="dashboard-product-add" class="btn info" style="padding:5px 100px">Add Item</a>
        <div class="product-list">
            @foreach($products as $product)
            <div class="list-product" style="width: 225px;">
                <div class="card">
                    <img src="{{ $product->url_gambar }}" 
                    alt="Avatar" style="width:100%;">
                    <div class="container-card" style="text-align: left;">
                        <h4><b>{{ $product->nama_item }}</b></h4>
                        <p>{{ $product->deskripsi_singkat }}</p>
                        <div style="padding-top: 20px; padding-bottom: 20px; text-align: center;">
                        <a href="/product-edit/{{ $product->id }}" class="btn warning" style="padding:5px 20px">Edit</a>
                        <a href="/product-delete/{{ $product->id }}" class="btn danger" style="padding:5px 20px"> Delete</a>
                        </div>
                    </div>  
                </div>
            </div>
            @endforeach
        </div>
        <div class="pagination-container" style="clear: left; text-align: center;">
            <p>Next/Previous buttons:</p>
            <div class="pagination">
            <a href="#">❮</a>
            <a href="#">❯</a>
            </div>
        </div>
    </div>
@endsection