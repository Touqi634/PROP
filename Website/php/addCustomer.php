<?php
	$fname = $_POST['fname'];
	$lastname = "none";
	$age = 0;
	$email = $_POST['email'];
	$checkin = "0000-00-00";
	$checkout = "0000-00-00";
	$borrowing = 0;
	$ischeck = "";
	$password = $_POST['pass'];

	$conn = mysqli_connect("studmysql01.fhict.local", "dbi400578","nuggetbiscuit","dbi400578");
	
	$sqlcheck = "SELECT * FROM customer WHERE email = '$email'";
	$resultcheck = $conn->query($sqlcheck);

	if($rowcheck = mysqli_fetch_assoc($resultcheck))
	{			
		echo "<script>alert('Account already exist with this email!')</script>";
		echo "<script>location.href='login.php'</script>";
	}
	else
	{
		$sql = "INSERT INTO customer (firstname, lastname, age, email, checkin, checkout, borrowing, ischeck, password) VALUES ('$fname', '$lastname', '$age', '$email', '$checkin', '$checkout', '$borrowing', '$ischeck', '$password')";
		$result = $conn->query($sql);
		
		if($result)
		{
			session_start();
			$succes = "succes";
			$_SESSION['succes'] = $succes;
			
			header("Location: login.php");
		}
		
		header("Location: login.php");
	}
?>