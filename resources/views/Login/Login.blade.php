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
            <button type="submit" class="btn-login ">
                Login
            </button>
            <div class="buttom">
                <a href="">Register</a>
                <a href="">Forget Password</a>
            </div>
        </div>
        <div class="background">
        <img src="{{ asset('images/paman.png') }}">

        </div>

        <div>
      <a href="#wrab"><button class="btn"> Open modal</button></a>
</div>




<div href="" class="wrab" id="wrab">

        <div class="bg-color">
        <div class="modal" id="modal">
        <p><a href="">X</a></p>
        <h1 class="label">Login</h1>
   <form action="" method="get" accept-charset="utf-8">
        <label for="">Email:</label>
        <input type="text" placeholder="Masukan Email" id="name">
        <label for="">Password:</label>
        <input type="password" placeholder="Masukan Password" id="sandi">
        <button type="submit" class="btn2">Login</button>
  </form>
       </div>
        </div>
          </div>


    </body>

    </html>