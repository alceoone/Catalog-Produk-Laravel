@extends('appDashboard')
 
@section('title', 'Dashboard')

@section('title-page', 'Product')

@section('product', 'active')

@section('konten')

<form style="text-align: left;" action="{{ url('/productEdit') }}" method="post">
{{ csrf_field() }}
        <table>
            <tr>
                <td width="30%">Id</td>
                <td width="5%">:</td>
                <td>
                    <input type="text" placeholder="id" id="id" name="id" value="{{ $products->id }}" required>
                </td>
            </tr>
            <tr>
                <td width="30%">Judul</td>
                <td width="5%">:</td>
                <td>
                    <input type="text" placeholder="Nama Item" id="namaItem" name="namaItem" value="{{ $products->nama_item }}" required>
                </td>
            </tr>
            <tr>
                <td>Link Image</td>
                <td>:</td>
                <td>
                    <input type="text" placeholder="Link Gambar" id="linkGambar" name="linkGambar" value="{{ $products->url_gambar }}" required>
                </td>
            </tr>
            <tr>
                <td>Deskripsi Singkat</td>
                <td>:</td>
                <td>
                    <textarea id="deskripsiSingkat" name="deskripsiSingkat" required rows="3" cols="50" >
                    {{ $products->deskripsi_singkat }}
                    </textarea>
                </td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td>:</td>
                <td>
                    <textarea id="deskripsi" name="deskripsi" rows="5" cols="50">
                    {{ $products->deskripsi_panjang }}
                    </textarea>
                </td>
            </tr>
            <tr>
                <td>Link Shoppe</td>
                <td>:</td>
                <td>
                    <input type="text" placeholder="Link Shoppe" id="linkShoppe" name="linkShoppe" value="{{ $products->link_shoppe }}" required>
                </td>
            </tr>
            <tr>
                <td>Nomor whatsapp</td>
                <td>:</td>
                <td>
                    <input type="text" placeholder="Nomor WhatsApp" id="noWa" name="noWa" value="{{ $products->wa }}" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <button class="btn info" type="submit">Submit</button>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <a href="dashboard-product.html">
                        <button class="btn danger" type="reset">Cancel</button>
                    </a>
                </td>
            </tr>
        </table>
    </form>

@endsection