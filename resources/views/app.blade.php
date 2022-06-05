<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/color.css">

</head>

<body>
    <div class="header">
        <a href="#default" class="logo">AlceoOne Clothes</a>
        <div class="header-right">
            <a class="@yield('home')" href="/">Home</a>
            <a class="@yield('product')" href="product">Product</a>
            <!-- <a href="/store">Store</a> -->
            <a href="/#contact">Contact</a>
            <a href="/#about">About</a>
            @if(!Session::get('login'))
            <a href="/login">Login</a>
            @else
            <a class="@yield('dashboard')" href="dashboard">Dashboard</a>
            <a href="logout">Log Out</a>
            @endif

        </div>
    </div>
    @yield('konten')
    <footer>
        &copy; AlceoOne - Melon Droid Art
    </footer>
</body>

</html>