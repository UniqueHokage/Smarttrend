<?php 
session_start();
include "db_conn.php";
if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Box icons -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="./css/styles.css" />
    <title>Ваша корзина</title>
  </head>
  <body>
    <!-- Navigation -->
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
            <a href="product.html" class="nav-link">Каталог</a>
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
    <p class="picprof"><img src="images/profile.png" width="150" height="150" alt="" ></p>
    <div class="profile">
    <h1><?php echo $_SESSION['name']; ?></h1>

    <div class="param">
    <p>Почта: <?php echo $_SESSION['email']; ?></p>
    <p>Баланс: <?php echo $_SESSION['cash']; ?> руб.</p>
    </div>
    <a href="logout.php" class="logoutbtn">Выйти</a></div>

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

    <!-- Custom Script -->
    <script src="./js/index.js"></script>
  </body>
</html>
<?php 
}else{
     header("Location: auth.php");
     exit();
}
 ?>
 