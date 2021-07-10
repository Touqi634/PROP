<?php
	$username = "";
	$password = $_POST['pass'];
	$email = $_POST['email'];
	
	$conn = mysqli_connect("studmysql01.fhict.local", "dbi400578","nuggetbiscuit","dbi400578");

	$sql = "SELECT * FROM customer WHERE email = '$email' AND password = '$password'";
	$result = $conn->query($sql);
	
	if($row = mysqli_fetch_assoc($result))
	{
		$username = $row['firstname'];	  
	
		if(mysqli_num_rows($result) > 0)
		{
			if(isset($_SESSION['email']))
			{ //Here you check if the session is already started or not!
			
				echo "<script>location.href='ticket.php'</script>";
			}
			else
			{	
					session_start();
					$_SESSION['email'] = $email;	//Here you start the session by putting $email into a SESSION var and you can check it in other pages!
					$_SESSION['username'] = $username; //Here you put the name into the session variable so you can display it in the other page for welcoming the user!
					echo "<script>location.href='ticket.php'</script>";
			}
		} 	
		else
		{
			echo "<script>alert('Account does not exist!')</script>";
			echo "<script>location.href='login.php'</script>";
		}
	}
	else
	{
		echo "<script>alert('Email or password incorrect!')</script>";
		echo "<script>location.href='login.php'</script>";
	}
	
?>
