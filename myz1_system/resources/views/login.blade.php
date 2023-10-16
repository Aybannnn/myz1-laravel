<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('style/login.css')}}">
    <link rel="stylesheet" href="{{url('style/animation.css')}}">
    <title>Login</title>
</head>
<style>
    center{
        animation: transitionIn-Y-bottom 0.5s;
    }
</style>
<body>
<center>
    <div class="login-logo">
        <img src="{{asset('images/zone-yt-cover-wht-2-removebg-preview.png')}}" width="50%">
    </div>
    <div class="container-fluid">
        <table border="0" style="margin: 0;padding: 0;width: 60%;">
            <tr>
                <td>
                    <p class="header-text">Welcome Back!</p>
                </td>
            </tr>
        <div class="form-body">
            <tr>
                <td>
                    <p class="sub-text">Login with your details to continue</p>
                </td>
            </tr>
            <tr>
            <form method="POST" action="{{ route('login') }}">
            @csrf <!-- CSRF token -->
            </tr>
            <tr>
                <td class="label-td">
                    <input type="email"  width="100%" name="useremail" class="input-text" placeholder="Email Address" required>
                </td>
            </tr>
            <tr>
                <td class="label-td">
                    <input type="Password" name="userpassword" class="input-text" placeholder="Password" required>
                </td>
            </tr>
            <tr>
                <td><br>
                </td>
            </tr>
            <tr>
                <td>
                <button type="submit">Login</button>
                </td>
            </tr>
        </div>
            <tr>
                <td>
                    <br>
                    <label for="" class="sub-text" style="font-weight: 280;">Don't have an account&#63; </label>
                    <a href="signup.php" class="hover-link1 non-style-link">Sign Up</a>
                    <br><br><br>
                </td>
            </tr>
                    </form>
        </table>
    </div>
    <div class="ellipse"></div>
    <div class="ellipse-2"></div>
    <div class="ellipse-3"></div>
    <div class="ellipse-4"></div>
</center>
</body>
</html>