@extends('appDashboard')
 
@section('title', 'Dashboard')

@section('title-page', 'Setting')

@section('setting', 'active')

@section('konten')

<form style="text-align: left;" action="{{ url('/settingEdit') }}" method="post">
{{ csrf_field() }}
        <table>
            <tr>
                <td width="30%">Nama Brand</td>
                <td width="5%">:</td>
                <td>
                    <input type="text" placeholder="Nama Brand" id="brand" name="brand" value="{{ $settings->brand }}" required>
                </td>
            </tr>
            <tr>
                <td>About</td>
                <td></td>
                <td>
                </td>
            </tr>
            <tr>
                <td>Deskripsi Singkat</td>
                <td>:</td>
                <td>
                    <input type="text" placeholder="Deskripsi Singkat" id="deskripsi_singkat" name="deskripsi_singkat" value="{{ $settings->deskripsi_singkat }}" required>
                </td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td>:</td>
                <td>
                    <textarea id="deskripsi" name="deskripsi" rows="5" cols="50">
                    {{ $settings->deskripsi }}
                    </textarea>
                </td>
            </tr>
            <tr>
                <td>Link Shoppe</td>
                <td>:</td>
                <td>
                    <input type="text" placeholder="Link Shoppe" id="linkShoppe" name="linkShoppe" value="{{ $settings->link_shoppe }}" required>
                </td>
            </tr>
            <tr>
                <td>Link Instagram</td>
                <td>:</td>
                <td>
                    <input type="text" placeholder="Link Instagram" id="linkInstagram" name="linkInstagram" value="{{ $settings->link_instagram }}" required>
                </td>
            </tr>
            <tr>
                <td>Nomor whatsapp</td>
                <td>:</td>
                <td>
                    <input type="text" placeholder="Nomor WhatsApp" id="whatsApp" name="whatsApp" value="{{ $settings->wa }}"  required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <button class="btn info" type="submit">Submit</button>
                </td>
            </tr>
        </table>
    </form>

@endsection