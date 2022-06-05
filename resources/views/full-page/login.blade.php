<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/color.css">

</head>
<body>
<div class="login">
            @if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
            @endif
            
        <div class="card-login">
            <h1 style="text-align: center; margin-bottom: 20px;">Login</h1>
            <form action="{{ url('/loginPost') }}" method="post">
            {{ csrf_field() }}
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Email" id="email" name="email" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" id="password" name="password" required>

                <button class="btn info" type="submit">Login</button>
            </form>
            <a href="/">
                <button class="btn danger" type="submit">Cancel</button>
            </a>
        </div>
    </div>
</body>
</html>