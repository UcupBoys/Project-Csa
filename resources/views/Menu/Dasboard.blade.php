<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Halaman Utama</title>
    <link href="{{ asset('css/Dasboard.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  </head>
  <body>
    <div>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
    <header>
        <div class="fontlogo">
    <a>Chicken</a><br>
    <a>Shop</a><br>
    <a>Apps</a><br>
    </div>
    <div class="logo"><img src="{{ asset('images/ayam.png') }}">
</div>    
    </header>
  <ul>
    <li><a href="#home"><i class="fa-solid fa-house"></i></i>Home</a></li>
    <li><a href="#"><i class="fa-brands fa-product-hunt"></i></i>Produk</a></li>
    <li><a href="#"><i class="fa-solid fa-clipboard-user"></i></i>Pegawai</a></li>
    <li><a href="#"><i class="far fa-envelope"></i>Contact</a></li>
    <li><a href=""><i class="fa-sharp fa-solid fa-right-to-bracket"></i>Log IN</a></li>

  </ul>
</div>
<div>
</div>
<section class="home" id="home">
  <div class="home-slider">
    <div class="wrapper">
      <div class="slide">
        <div class="gambar">
          <img src="{{ asset('images/ayampotong.png') }}" alt="Ayam Potong" />
          <div class="content">
          <span>Ayam Potong</span><br>
          <a href="#" class="btn">Order</a>
        </div>
        </div>
      </div>
      <div class="slide">
        <div class="gambar">
          <img src="{{ asset('images/bibitAyam.png') }}" alt="Ayam Potong" />
          <div class="content">
          <span>Bibit Ayamku</span><br>
          <a href="#" class="btn">Order</a>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>



  </body>
</html>
