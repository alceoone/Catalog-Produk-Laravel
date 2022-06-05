@extends('appDashboard')
 
@section('title', 'Dashboard')

@section('title-page', 'Home')

@section('dashboard', 'active')

@section('konten')
<div class="profile">
        <table width="100%">
            <tr>
                <td>
                    <img src="asset/3255317.jpg"
                    width="600px">
                </td>
                <td>
                <h2>
                    {{ $settings->brand }}</h2>
                    {{ $settings->deskripsi_singkat }}
                </td>
            </tr>
        </table>
    </div>
  </div>

@endsection