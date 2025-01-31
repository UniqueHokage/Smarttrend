<?php 
include "db_conn.php";
$result = mysqli_query($conn, "SELECT * FROM `product`");
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
    <title>Смартфоны</title>
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
          <a href="cart.php" class="icon">
            <i class="bx bx-cart"></i>
            <span class="d-flex">0</span>
          </a>
        </div>

        <div class="hamburger">
          <i class="bx bx-menu-alt-left"></i>
        </div>
      </div>
    </div>

    <!-- All Products -->
    <section class="section all-products" id="products">
      <div class="top container">
        <h1>Все смартфоны</h1>
        <form>
          <select>
            <option value="1">Сортировка по брендам</option>
            <option value="2">Сортировка по цене</option>
            <option value="3">Сортировка по популярности</option>
            <option value="4">Сортировка по скидкам</option>
            <option value="5">Сортировка стандартная</option>
          </select>
          <span><i class="bx bx-chevron-down"></i></span>
        </form>
      </div>
      <div class="product-center container">
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
    <section class="pagination">
      <div class="container">
        <span>1</span> <span>2</span> <span>3</span> <span>4</span>
        <span><i class="bx bx-right-arrow-alt"></i></span>
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
    <!-- Custom Script -->
    <script src="./js/index.js"></script>
  </body>
</html>
