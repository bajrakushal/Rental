<?php 
session_start();
require_once '../../include/dbconnect.php';

    if(isset($_POST['car_post'])){
        $error = false;
        $car_name = $_POST['car_name'];
        $capacity = $_POST['capacity'];
        $per_day_price = $_POST['per_day_price'];
        $model = $_POST['model'];
        $color = $_POST['color'];
        $year = $_POST['year'];
        $product_status = 0;
        $description = $_POST['description'];
        $image = $_FILES['image']['name'];
        $target = "../../assets/front/img/cars/".basename($image);
        $id = $_SESSION['seller_id'];

        $query = "INSERT INTO tblcar VALUES (NULL,'$car_name','$description','$capacity','$per_day_price','$product_status',
                                    '$image','$id','$year','$model','$color')";
        if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
            mysqli_query($conn,$query);
        }
        else{
            $error = true;
            $_SESSION['error'] = "ERROR";
            header('location:../add_car.php');
        }
        if($error == false){
            $_SESSION['success'] = "Car has been posted";
            header('location:../cars.php');
        }
    }

    if(isset($_POST['edit_car'])){
		$error = false;
		$id = $_POST['car_id'];
		$car_name = $_POST['car_name'];
		$capacity = $_POST['capacity'];
        $model = $_POST['model'];
        $color = $_POST['color'];
        $year = $_POST['year'];
		$per_day_price = $_POST['per_day_price'];
		$product_status = 1;
		$description = $_POST['description'];

		$query = "UPDATE tblcar set car_name = '$car_name',capacity = '$capacity',
					per_day_price = '$per_day_price', car_make = '$year',car_model = '$model',car_color='$color', car_desc = '$description' WHERE car_id = '$id'";
        mysqli_query($conn,$query);
		
		if($error == false){
			$_SESSION['success'] = "Car has been updated";
			header('location:../cars.php');
		}
	}

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM seller WHERE email = '$email' AND password = '$password'";

        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0){
            $data = mysqli_fetch_assoc($result);
            $_SESSION['seller_id'] = $data['seller_id'];
            $_SESSION['seller_email'] = $data['email'];
            $_SESSION['seller_name'] = $data['fname'];
            header('location:../index.php');
        }
        else{
            $_SESSION['error'] = "Username or password invalid !!";
            header('location:../login.php');

        }
    }

    if(isset($_POST['register'])){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$password = $_POST['password'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$query = "SELECT * FROM seller WHERE email = '$email'";
		$result = mysqli_query($conn,$query);
		if(mysqli_num_rows($result) == 0){
			$query = "INSERT INTO seller(fname,lname,password,address,email,phone)
				VALUES('$fname','$lname','$password','$address','$email','$phone')";
			$result = mysqli_query($conn,$query);
			if($result){
				$_SESSION['success'] = "Registered Successfully, please login to continue!!";
				header('location:../login.php');
			}
		}
		else{
			$_SESSION['error'] = "Email already taken, please use another email";
			header('location:../register.php');
		}

	}

?>