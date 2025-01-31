<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['name']) && isset($_POST['password'])
     && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);

	$user_data = 'email='. $email. '&name='. $name;


	if (empty($email)) {
		header("Location: signup.php?error=Введите почту&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: signup.php?error=Введите пароль&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signup.php?error=Подтвердите пароль&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: signup.php?error=Введите имя&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: signup.php?error=Пароли не совпадают!&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM `users` WHERE email='$email' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=Почта занята введите другую&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO `users` (email, name, password) VALUES ('$email', '$name', '$pass')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signup.php?success=Вы успешно зарегестрировались!");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}