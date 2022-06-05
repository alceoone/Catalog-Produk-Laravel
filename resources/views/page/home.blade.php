<!-- Menghubungkan dengan view template master -->
@extends('app')

@section('title', 'Home')
@section('home', 'active')
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

    
<div class="container">
        <div class="profile">
            <table width="100%">
                <tr>
                    <td>
                        <img src="asset/3255317.jpg"
                        width="600px">
                    </td>
                    <td>
                        <h2>{{ $settings->brand }}</h2>
                        {{ $settings->deskripsi_singkat }}
                    </td>
                </tr>
            </table>
        </div>
        <div class="product-list">
            <h2>Product List</h2>
            @foreach($productsLimit as $product)
            <div class="list-product">
                <div class="card">
                    <img src="{{ $product->url_gambar }}" 
                    alt="Avatar" style="width:100%;">
                    <div class="container-card">
                        <h4><b>{{ $product->nama_item }}</b></h4>
                        <p>{{ $product->deskripsi_singkat }}</p>
                        <a href="{{ $product->link_shoppe }}"><button class="btn orange-shoppe">Order from shoppe</button></a>
                        <a href="https://wa.me/{{ $product->wa }}"><button class="btn success">Order from whatsapp</button></a>
                    </div>  
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="see_products">
    <a href="/product"><button class="btn warning">
        See all products
        </button></a>
    </div>
    <div class="description" id="about">
        <div class="about-text" style="text-align: center;">
            <h3>{{ $settings->brand }}</h3><br>
            {{ $settings->deskripsi }}
        </div>
    </div>
    <div class="description" id="contact" style="padding-top: 15px; padding-bottom: 20px;">
        <h2>Contact</h2>
        <br style="padding-top: 15px; padding-bottom: 20px;">
        <p style="padding-top: 15px; padding-bottom: 20px;">Hubungi kami di Contact berikut:<p>
        <a href="https://wa.me/{{ $settings->wa }}" class="btn success">WhatsApp</a>
        <a href="{{ $settings->link_shoppe }}" class="btn orange-shoppe">Shoppe</a>
        <a href="{{ $settings->link_instagram }}" class="btn info">Instagram</a>
    </div>
@endsection