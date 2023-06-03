<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="login">
        <div class="avatar">
            <i class="fa-solid fa-user"></i>
        </div>
        <h2> Login Form </h2>

        <div class="box-login">
            <i class="fa-solid fa-user"></i>
            <input type="text" placeholder="Username">
        </div>

        <div class="box-login">
            <i class="fa-solid fa-lock"></i>
            <input type="password" placeholder="Password">
        </div>
        <button type="submit" class="btn-login">
            Login
        </button>
        <div class="buttom">
            <a class="register-link">Register</a>
            <a href="">Forget Password</a>
        </div>
    </div>
    <div class="background">
        <img src="{{ asset('images/paman.png') }}">
    </div>

    <div class="overlay" id="register-overlay">
        <div class="popup">
            <span class="close" onclick="closeRegisterPopup()"><i class="fas fa-times" id="cancel"></i></span>
            <h2>Register Form</h2>
            <div class="box-login">
            <i class="fa-solid fa-user"></i>
            <input type="text" placeholder="Masukkan Username">
        </div>

        <div class="box-login">
            <i class="fa-solid fa-lock"></i>
            <input type="password" placeholder="Password">
        </div>
        <button type="submit" class="btn-login">
            Sign Up
        </button>
        </div>
    </div>






    <script>
        const registerLink = document.querySelector('.register-link');
        const registerOverlay = document.getElementById('register-overlay');

        registerLink.addEventListener('click', function () {
            registerOverlay.style.display = 'flex';
        });

        function closeRegisterPopup() {
            registerOverlay.style.display = 'none';
        }
    </script>
</body>

</html>
