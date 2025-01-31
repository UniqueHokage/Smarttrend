<?php 
include "db_conn.php";
if (isset($_GET["id"])) {
  $productId = intval($_GET["id"]); // Получаем id товара из URL
  $query = "SELECT * FROM product WHERE id = $productId"; // Запрос к базе данных
  $result = mysqli_query($conn, $query);
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
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/mycart.js"></script>
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

    <!-- Product Details -->
    <section class="section product-detail">
    <?php
    if ($result) {
        $product = mysqli_fetch_assoc($result); // Получаем информацию о товаре
        if ($product) {
          echo '<div class="details container"> 
                  <div class="left image-container"> 
                    <div class="main"> 
                      <img src="'.$product["image"].'" id="zoom" alt="" /> 
                    </div> 
                  </div> 
                  <div class="right"> 
                    <span>Каталог/'.$product["brand"].'</span> 
                    <h1>'.$product["name"].'</h1> 
                    <div class="price">'.$product["price"].'₽</div> 
                    <form> 
                      <div> 
                        <select> 
                          <option value="Select Size" selected disabled> 
                            Выбрать цвет 
                          </option> 
                          <option value="1">32</option> 
                          <option value="2">42</option> 
                          <option value="3">52</option> 
                          <option value="4">62</option> 
                        </select> 
                        <span><i class="bx bx-chevron-down"></i></span> 
                      </div>
                    </form>
                    <form class="form">
            <input type="text" placeholder="1" />
            <a href="cart.php" class="addCart" onClick="addToCart('.$product["id"].')">Купить</a>
          </form>
                    <h3>Описание</h3>
          <p>
            '.$product["discrip"].'  
          </p>
            </div> 
                </div>';
        } 
    } 
}
?>  
    </section>
    <!-- Related -->
    <section class="section featured">
      <div class="top container">
        <h1>Рекомендуем</h1>
        <a href="#" class="view-more">Показать больше</a>
      </div>
      <div class="product-center container">
        <div class="product-item">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/s24ultra.jpg" alt="" />
            </a>
          </div>
          <div class="product-info">
            <span>Samsung</span>
            <a href="">Смартфон Samsung Galaxy S24 Ultra 256 ГБ серый титан</a>
            <h4>116 990₽</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-search"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/pixel8.png" alt="" />
            </a>
          </div>
          <div class="product-info">
            <span>Google</span>
            <a href="">Смартфон Google Pixel 8 8Гб/128Гб розовый</a>
            <h4>79 990₽</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-search"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/15pro512.png" alt="" />
            </a>
          </div>
          <div class="product-info">
            <span>Apple</span>
            <a href="">Apple iPhone 15 Pro SIM 1 ТБ, «титановый бежевый»</a>
            <h4>179 990₽</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-search"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
        <div class="product-item">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="./images/pixel8pro.jpg" alt="" />
            </a>
          </div>
          <div class="product-info">
            <span>Google</span>
            <a href="">Смартфон Google Pixel 8 Pro 256/12Гб голубой залив</a>
            <h4>129 990₽</h4>
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-search"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
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
    <!-- Custom Script -->
    <script src="./js/index.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.4.0.min.js"
      integrity="sha384-JUMjoW8OzDJw4oFpWIB2Bu/c6768ObEthBMVSiIx4ruBIEdyNSUQAjJNFqT5pnJ6"
      crossorigin="anonymous"
    ></script>
    <script src="./js/zoomsl.min.js"></script>
    <script>
      $(function () {
        console.log("hello");
        $("#zoom").imagezoomsl({
          zoomrange: [4, 4],
        });
      });
    </script>
  </body>
</html>
