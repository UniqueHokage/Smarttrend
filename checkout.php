<?php  
session_start();  
include "db_conn.php";  
  
$action = $_POST['action'];  

if ($action == "show") {  
    if (!(isset($_SESSION['cart']))) {  
        echo 'У вас нет заказов';  
        exit;  
    };  
    $cart = $_SESSION['cart'];  
    if (count($cart) == 0) {  
        echo 'У вас нет заказов';  
        exit;  
    }  
    $totalPrice = 0;

    echo '<div class="container cart">  
          <table>  
            <tr>  
              <th>Товар</th>  
              <th>Количество</th>  
              <th>Цена</th>  
            </tr>';  
    for ($i = 0; $i < count($cart); $i++) {  
        $idProduct = $cart[$i]["idProduct"];  
        $query = 'SELECT * FROM product WHERE id = '.$idProduct;  
        $results = $conn->query($query);  
        
        if (!$results) {
            echo 'Ошибка в запросе';
            exit;
        }

        while ($product = $results->fetch_assoc()) {  
            echo ' 
            <td>  
                <div class="cart-info">  
                <img src="'.$product["image"].'" alt="" />  
                <div>  
                    <p>'.$product["name"].'</p>   
                    <a class="delbtn" onClick="delFromCart('.$product["id"].')">удалить</a>  
                 </div>
            </div>
          </td>
          <td><input type="number" value="1" min="1" /></td>
          <td>'.$product["price"].'₽</td>
        </tr>
        </td>'; 
        $totalPrice += $product["price"]; 
        } 
    }
    echo '<div">  
    <p class="toprice">Итог: '.$totalPrice.'₽</p> <br>
    <a href="#" class="checkout btn">Оплатить</a>
  </div>';  
}   


if ($action == 'add') {  
    $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];  
    $id = $_POST['id'];  
    $exists = false;

    // Проверка на наличие товара в корзине
    foreach ($cart as $item) {
        if ($item["idProduct"] == $id) {
            $exists = true;  
            break;
        }
    }

    if (!$exists) {
        $newProduct["idProduct"] = $id;  
        $cart[] = $newProduct;  
        $_SESSION['cart'] = $cart;  
    } else {
        echo 'Товар уже в корзине';  
    }
}  

if ($action == 'del') {  
    $id = $_POST["id"];  
    $newCart = array();  

    $cart = $_SESSION['cart'];  
    for ($i = 0; $i < count($cart); $i++) {  
        $idProduct = $cart[$i]["idProduct"];  
        if ($id != $idProduct) {  
            $newCart[] = $cart[$i];  
        }  
    }  
    $_SESSION['cart'] = $newCart;  
}  
?> 
