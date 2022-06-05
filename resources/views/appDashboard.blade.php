<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/color.css">

</head>
<body>
@if(!Session::get('login'))
  <div style="text-align:center; margin:50px">
    <h1 style="text-align:center; margin:50px">Anda Belum Login</h1>
    <a href="/login" class="btn warning">Lanjut Login</a>
</div>
  @else
  
<div class="sidenav">
  <h2 style="text-align: center; padding-top: 15px; padding-bottom: 20px; font-size: 25px;
  font-weight: bold;">Dashboard</h2>
  <a href="/dashboard" class="@yield('dashboard')">Home</a>
  <a href="/dashboard-product" class="@yield('product')">Product</a>
  <a href="/dashboard-setting" class="@yield('setting')">Setting</a>
  <a href="/">Preview Website</a>
  <a href="logout">Log Out</a>
</div>

<div class="main">
    <div class="header-main">
    @yield('title-page')
    </div>
    <div class="container-main">
     @yield('konten')
</div>
  @endif
</body>
</html>