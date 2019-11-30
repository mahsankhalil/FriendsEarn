<?php include_once 'auth.php';
		include_once 'connection.php';
	if(isset($_POST['submit']))
	{
		$phone = $_POST['phone'];
		$query = "Select * from user where phone = $phone";
		$result = $conn->query($query);
		if($result->num_rows>0)
		{
			$_SESSION['error'] = "Phone Number Already Exist";
			header('Location: register.php');
		}else
		{
			$name = $_POST['name'];
			$password = $_POST['password'];
			$confirm_password = $_POST['confirm_password'];
			if($password == $confirm_password)
			{
				echo "half Success";
				$query = "Insert into user (phone,password,name,package_id,user_type) values ('$phone','$password','$name','1','2')";
				if($conn->query($query)===true)
				{
					echo "Success";
					$_SESSION['name'] = $name;
					$_SESSION['user_type'] = 2;
					$_SESSION['join_data'] = date("Y/m/d");
					$_SESSION['package_id'] = 1;
					$_SESSION['phone'] = $phone;
					$_SESSION['earning'] = 0;
					header('Location: client/index.php');
				}
				$_SESSION['error'] = "";
			}else
			{
				$_SESSION['error'] = "Password Mismatch";
				header('Location: register.php');
			}
		}

	}
	else
	{
		header("index.php");
	}


?>
