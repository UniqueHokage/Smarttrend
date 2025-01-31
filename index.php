<?php 
include "db_conn.php";
$result = mysqli_query($conn, "SELECT * FROM `product`");
$result2 = mysqli_query($conn, "SELECT * FROM `product`");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Boxicons -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- Glide js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.css">
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="./css/styles.css" />
    <title>SmartTrand онлайн магазин</title>
  </head>
  <body>
    <!-- Header -->
    <header class="header" id="header">
      <!-- Top Nav -->
      <div class="top-nav">
        <div class="container d-flex">
          <p>Закажите онлайн или позвоните нам: 8 (800) 880 6565</p>
          <ul class="d-flex">
            <li><a href="#">О нас</a></li>
            <li><a href="#">Помощь</a></li>
            <li><a href="#">Контакты</a></li>
          </ul>
        </div>
      </div>
      <div class="navigation">
        <div class="nav-center container d-flex">
        <a href="index.php" class="logo"><h1>Smart<span class="logo2">Trand</span></h1></a>

          <ul class="nav-list d-flex">
            <li class="nav-item">
              <a href="product.php" class="nav-link">Каталог</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">О нас</a>
            </li>
            <li class="nav-item">
            <a href="#terms" class="nav-link">Контакты</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link">Гарантии</a>
            </li>
            <li class="nav-item">
              <a href="#contact" class="nav-link">Как купить</a>
            </li>
            <li class="icons d-flex">
            <a href="login.php" class="icon">
              <i class="bx bx-user"></i>
            </a>
            <div class="icon">
              <i class="bx bx-search"></i>
            </div>
            <div class="icon">
              <i class="bx bx-heart"></i>
              <span class="d-flex">0</span>
            </div>
            <a href="cart.html" class="icon">
              <i class="bx bx-cart"></i>
              <span class="d-flex">0</span>
            </a>
          </li>
          </ul>

          <div class="icons d-flex">
            <a href="home.php" class="icon">
              <i class="bx bx-user"></i>
            </a>
            <div class="icon">
              <i class="bx bx-search"></i>
            </div>
            <div class="icon">
              <i class="bx bx-heart"></i>
              <span class="d-flex">0</span>
            </div>
            <a href="cart.html" class="icon">
              <i class="bx bx-cart"></i>
              <span class="d-flex">0</span>
            </a>
          </div>

          <div class="hamburger">
            <i class="bx bx-menu-alt-left"></i>
          </div>
        </div>
      </div>

    <div class="hero">
      <div class="glide" id="glide_1">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            <li class="glide__slide">
              <div class="center">
                <div class="left">
                  <h1 class="">iPhone 16 pro</h1>
                  <p>Cила. Красота. Титан <br>Мощный процессор A18 Pro<br> Новое управление камерами <br>Уже в наличии</p>
                  <a href="#" class="hero-btn">Узнать цену</a>
                </div>
                <div class="right">
                    <img class="img1" src="./images/16prorekl.png" alt="">
                </div>
              </div>
            </li>
            <li class="glide__slide2">
              <div class="center">
                <div class="left2">
                  <h1>Техника Apple</h1>
                  <p>По выгодным ценам</p>
                  <a href="#" class="hero-btn">Купить</a>
                </div>
                <div class="right">
                  <img class="img2" src="./images/billboard-5.png" alt="">
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    </header>

    <!-- Categories Section -->
    <section class="onecat category">
      <div class="cat-center">
        <div class="cat">
          <img src="./images/cat3.jpg" alt="" />
          <div>
            <p>GOOGLE</p>
          </div>
        </div>
        <div class="cat">
          <img src="./images/cat2.jpg" alt="" />
          <div>
            <p>SAMSUNG</p>
          </div>
        </div>
        <div class="cat">
          <img src="./images/cat1.jpg" alt="" />
          <div>
            <p>APPLE</p>
          </div>
        </div>
      </div>
    </section>

    <!-- New Arrivals -->
    <section class="twocat new-arrival">
      <div class="title">
        <h1>Популярные смартфоны</h1>
        <p>Подборка смартфонов которые пользуются большим спросом</p>
      </div>

      <div class="product-center">
      <?php while ($row = mysqli_fetch_assoc($result))
 {  echo '
  <div class="product-item">
    <div class="overlay">
      <a href="productDetails.php?id='.$row["id"].'" class="product-thumb">
        <img src="'.$row["image"].'" alt=""/>
      </a>';
      if ($row["discount"] > 1) {
                echo '<span class="discount">'.$row["discount"].'%</span>';
            }

            echo '
    </div>
    <div class="product-info">
      <span>'.$row["brand"].'</span>
      <a href="productDetails.php?id='.$row["id"].'">'.$row["name"].'</a>
      <h4>'.$row["price"].'₽</h4>
    </div>
    <ul class="icons">
      <li><i class="bx bx-heart"></i></li>
      <li><i class="bx bx-search"></i></li>
      <li><i class="bx bx-cart"></i></li>
    </ul>
  </div>
 ';}?>
    </section>


    <!-- Promo -->

    <section class="section banner">
<div class="left">
  <h1>Google Pixel</h1>
  <p>Вся актуальная линейка Pixel <br>
  Смарфоны разоаботанные Google <br>
Яркий дисплей до 120Гц <br>
Собственный процессор Google Tensor <br>
Профессиональная система камер</p>
  <a href="#" class="btn btn-1">Посмотреть</a>
</div>
<div class="right">
  <img src="./images/banner.png" alt="">
</div>
    </section>




    <!-- Featured -->
  
    <section class="section new-arrival">
      <div class="title">
        <h1>Товары со скидкой</h1>
        <p>На эти смартфоны действуют скидки</p>
      </div>

      <div class="product-center">
      <?php 
      $count = 0;
    while ($row = mysqli_fetch_assoc($result2))
    {  if ($row["discount"] > 1) { 
        echo '
  <div class="product-item">
    <div class="overlay">
      <a href="productDetails.php?id='.$row["id"].'" class="product-thumb">
        <img src="'.$row["image"].'" alt=""/>
      </a>';
      if ($row["discount"] > 1) {
                echo '<span class="discount">'.$row["discount"].'%</span>';
            }
            echo '
    </div>
    <div class="product-info">
      <span>'.$row["brand"].'</span>
      <a href="productDetails.php?id='.$row["id"].'">'.$row["name"].'</a>
      <h4>'.$row["price"].'₽</h4>
    </div>
    <ul class="icons">
      <li><i class="bx bx-heart"></i></li>
      <li><i class="bx bx-search"></i></li>
      <li><i class="bx bx-cart"></i></li>
    </ul>
  </div>
 ';
 $count++; // Увеличиваем счетчик

 if ($count >= 4) { // Проверяем, достигли ли мы лимита
     break;}}}?>
    </section>

    <!-- Contact -->
    <section class="section contact">
      <div class="row">
        <div class="col">
          <h2>НАША ОТЗЫВЧИВАЯ ПОДДЕРЖКА</h2>
          <p>Мы любим наших клиентов, и они могут связаться с нами в любое время
            суток, мы будем к вашим услугам 24/7</p>
          <a href="" class="btn btn-1">Написать</a>
        </div>
        <div class="col">
          <form action="">
            <div>
              <input type="email" placeholder="Ваш e-mail">
            <a href="">Отправить</a>
            </div>
          </form>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
      <div class="row">
        <div class="col d-flex">
          <h4>Информация</h4>
          <a href="">О нас</a>
          <a href="">Контакты</a>
          <a href="">Гарантии</a>
          <a href="">Как купить</a>
        </div>
        <div class="col d-flex">
          <h4>Смартфоны</h4>
          <a href="">Каталог</a>
          <a href="">Google</a>
          <a href="">Apple</a>
          <a href="">Samsung</a>
        </div>
        <div class="col d-flex">
          <span><i class='bx bxl-facebook-square'></i></span>
          <span><i class='bx bxl-instagram-alt' ></i></span>
          <span><i class='bx bxl-github' ></i></span>
          <span><i class='bx bxl-twitter' ></i></span>
          <span><i class='bx bxl-pinterest' ></i></span>
        </div>
      </div>
    </footer>


  <!-- PopUp  -->
  <div class="popup hide-popup">
    <div class="popup-content">
      <div class="popup-close">
        <i class='bx bx-x'></i>
      </div>
      <div class="popup-left">
        <div class="popup-img-container">
          <img class="popup-img" src="./images/popup.jpg" alt="popup">
        </div>
      </div>
      <div class="popup-right">
        <div class="right-content">
          <h1>Получите скидку до <span>20%</span></h1>
          <p>Подпишитесь на нашу рассылку и получите купон на смартфоны SAMSUNG. Мы обещаем, что никакого спама!
          </p>
          <form action="#">
            <input type="email" placeholder="Введите вашу почту..." class="popup-form">
            <a href="#">Подписаться</a>
          </form>
        </div>
      </div>
    </div>
  </div>

  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
  <script src="./js/slider.js"></script>
  <script src="./js/index.js"></script>
</html>
