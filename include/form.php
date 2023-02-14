<?php 
session_start();
require_once 'dbconnect.php';

	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$query = "SELECT * FROM customer WHERE email = '$email' and password = '$password'";
		$result = mysqli_query($conn,$query);
		if(mysqli_num_rows($result) == 1){
			$data = mysqli_fetch_assoc($result);
			$_SESSION['cid'] = $data['cust_id'];
			header('location:../index.php');
		}
		else{
			$_SESSION['error'] = "Invalid username or password";
			header('location:../login.php');
		}
	}

	if(isset($_POST['register'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        $contact = $_POST['number'];

        $query = "SELECT * FROM customer WHERE email = '$email'";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) == 1){
            $_SESSION['error'] = "This Email has been already taken, enter new one";
            header('location:../register.php');
        }else{
            $query = "INSERT INTO customer VALUES(NULL,'$name','$address','$email','$contact','$password')";
            $result = mysqli_query($conn,$query);
            if($result){
                $_SESSION['success'] = "Your account has been setup, please login to contiune";
                header('location:../login.php');
            }

        }
    }

    if(isset($_POST['book'])){
        $cid = $_POST['cid'];
        $car_id = $_POST['car_id'];
        $book_to = $_POST['book_to'];
        $price = $_POST['price'];
        $date = date('Y-m-d');
        $rent_days = ceil((strtotime($book_to) - strtotime($date))/60/60/24);
        $total_price = $rent_days * $price;
        $query = "INSERT INTO booking VALUES (NULL, '$cid','$car_id','$book_to','$total_price','$date');";
        $query.= "UPDATE tblcar set product_status = 1 WHERE car_id = '$car_id'";
        $result = mysqli_multi_query($conn,$query);
        if($result){
            $_SESSION['success'] = "A";
            header('location:../cars.php');
        }

        
    }
    



?>