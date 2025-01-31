<?php 
session_start(); 
include "db_conn.php";
if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	$email = validate($_POST['email']);
	$pass = validate($_POST['password']);

	if (empty($email)) {
		header("Location: auth.php?error=Введите почту");
	    exit();
	}else if(empty($pass)){
        header("Location: auth.php?error=Введите пароль");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);


		$sql = "SELECT * FROM `users` WHERE email='$email' AND password='$pass'";
		
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $pass) {
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['name'] = $row['name'];
				$_SESSION['cash'] = $row['cash'];
				$_SESSION['id'] = $row['id'];
            	header("Location: index.php");
		        exit();
            }else{
				header("Location: auth.php?error=Неправильная почта или пароль");
		        exit();
			}
		}else{
			header("Location: auth.php?error=Неправильная почта или пароль");
	        exit();
		}
	}
}
else{
	header("Location: auth.php");
	exit();
	
}
