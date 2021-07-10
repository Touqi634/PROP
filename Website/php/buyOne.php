<?php	
	$selectBox = $_POST['nrOfDays'];
	
	$conn = mysqli_connect("studmysql01.fhict.local", "dbi400578","nuggetbiscuit","dbi400578");
	
	$email2 = $_POST['email2'];
	$email3 = $_POST['email3'];
	$sqlcheck = "SELECT * FROM customer WHERE email = '$email2' or email = '$email3'";	
	$resultcheckEmail1 = $conn->query($sqlcheck);
	
	if($rowcheck = mysqli_fetch_assoc($resultcheckEmail1)) // if this email exists in database then do something
	{					
		echo "<script>alert('This email is already registered!')</script>";
		echo "<script>location.href='ticket.php'</script>";
	}
	else
	{

		if($selectBox == "OneDay")
			{
				$email = $_POST['email'];
				$cardNr = $_POST['cardNr'];
				
				$price = 50;
				$category = "1day";
				$camping = 0;
				
				$sqlcheck = "SELECT * FROM customer WHERE email = '$email'";	
				$resultcheckEmail1 = $conn->query($sqlcheck);
				
				if($rowcheck = mysqli_fetch_assoc($resultcheckEmail1)) // if this email exists in database then do something
				{				
					$sqlGetId = "SELECT id FROM customer WHERE email = '$email'";
					$resultGetId = $conn->query($sqlGetId);				
						
					while($rowGetId = mysqli_fetch_assoc($resultGetId)) // Here you get the result which you use to get the id of the customer!
					{
						$customerId = $rowGetId['id'];	
						
						$sql = "INSERT INTO ticket (customer_id, price, category, camping) VALUES ('$customerId', '$price', '$category', '$camping')";	
						$result = $conn->query($sql);
						
						if($result)
						{
							session_start();
							$succes = "succes";
							$_SESSION['succes'] = $succes;
							
							header("Location: ticket.php");
						}
						
						
						/*$sql2 = "UPDATE customer SET card_id='$cardNr1' WHERE id='$customerId'";
						$result2 = $conn->query($sql);*/
					}					
				}
			}
		elseif($selectBox == "TwoDays")
			{
				$email = $_POST['email'];
				$cardNr = $_POST['cardNr'];
				
				$price = 100;
				$category = "TwoDay";
				$camping = 0;
				
				$sqlcheck = "SELECT * FROM customer WHERE email = '$email'";	
				$resultcheckEmail = $conn->query($sqlcheck);
				
				if($rowcheck = mysqli_fetch_assoc($resultcheckEmail)) // if this email exists in database then do something
				{				
					$sqlGetId = "SELECT id FROM customer WHERE email = '$email'";
					$resultGetId = $conn->query($sqlGetId);
					
					while($rowGetId = mysqli_fetch_assoc($resultGetId)) // Here you get the result which you use to get the id of the customer!
					{
						$customerId = $rowGetId['id'];	
						
						$sql = "INSERT INTO ticket (customer_id, price, category, camping) VALUES ('$customerId', '$price', '$category', '$camping')";	
						$result = $conn->query($sql);	
						
						if($result)
						{
							session_start();
							$succes = "succes";
							$_SESSION['succes'] = $succes;
							
							header("Location: ticket.php");
						}
					}					
				}
			}
		elseif($selectBox == "ThreeDays")
			{
				$email = $_POST['email'];
				$cardNr = $_POST['cardNr'];
				
				$price = 130;
				$category = "ThreeDay";
				$camping = 0;
				
				$sqlcheck = "SELECT * FROM customer WHERE email = '$email'";	
				$resultcheckEmail = $conn->query($sqlcheck);
				
				if($rowcheck = mysqli_fetch_assoc($resultcheckEmail)) // if this email exists in database then do something
				{				
					$sqlGetId = "SELECT id FROM customer WHERE email = '$email'";
					$resultGetId = $conn->query($sqlGetId);
					
					while($rowGetId = mysqli_fetch_assoc($resultGetId)) // Here you get the result which you use to get the id of the customer!
					{
						$customerId = $rowGetId['id'];	
						
						$sql = "INSERT INTO ticket (customer_id, price, category, camping) VALUES ('$customerId', '$price', '$category', '$camping')";	
						$result = $conn->query($sql);	
						
						if($result)
						{
							session_start();
							$succes = "succes";
							$_SESSION['succes'] = $succes;
							
							header("Location: ticket.php");
						}
					}					
				}
			}
		elseif($selectBox == "ThreeDaysCamp")
			{
				$email = $_POST['email'];
				$cardNr = $_POST['cardNr'];
				
				$price = 130;
				$category = "ThreeDay";
				$camping = 1;
				
				$sqlcheck = "SELECT * FROM customer WHERE email = '$email'";	
				$resultcheckEmail = $conn->query($sqlcheck);
				
				if($rowcheck = mysqli_fetch_assoc($resultcheckEmail)) // if this email exists in database then do something
				{				
					$sqlGetId = "SELECT id FROM customer WHERE email = '$email'";
					$resultGetId = $conn->query($sqlGetId);
					
					while($rowGetId = mysqli_fetch_assoc($resultGetId)) // Here you get the result which you use to get the id of the customer!
					{
						$customerId = $rowGetId['id'];	
						
						$sql = "INSERT INTO ticket (customer_id, price, category, camping) VALUES ('$customerId', '$price', '$category', '$camping')";	
						$result = $conn->query($sql);	
						
						if($result)
						{
							session_start();
							$succes = "succes";
							$_SESSION['succes'] = $succes;
							
							header("Location: ticket.php");
						}
					}					
				}
			}
			
	//THIS IS THE PHP PART FOR TICKET 2!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
			$selectBox2 = $_POST['nrOfDays2'];
			
			if($selectBox2 == "OneDay")
			{
				$fname2 = $_POST['fname2'];
				$email2 = $_POST['email2'];		
				$lastname = "none";
				$age = 0;
				$checkin = "0000-00-00";
				$checkout = "0000-00-00";
				$borrowing = 0;
				$ischeck = "";
				$password = "";
				
				$price = 50;
				$category = "1day";
				$camping = 0;
				
				$sqlcheck = "SELECT * FROM customer WHERE email = '$email2'";	
				$resultcheckEmail1 = $conn->query($sqlcheck);
				
				if($rowcheck = mysqli_fetch_assoc($resultcheckEmail1)) // if this email exists in database then do something
				{				
					echo "<script>alert('This email is already registered!')</script>";
				}
				else
				{
					$sqlMakeCust = "INSERT INTO customer (firstname, lastname, age, email, checkin, checkout, borrowing, ischeck, password) VALUES ('$fname2', '$lastname', '$age', '$email2', '$checkin', '$checkout', '$borrowing', '$ischeck', '$password')";
					
					if($result = $conn->query($sqlMakeCust))
					{
						$sqlGetId = "SELECT id FROM customer WHERE email = '$email2'";
						$resultGetId = $conn->query($sqlGetId);				
						
						while($rowGetId = mysqli_fetch_assoc($resultGetId)) // Here you get the result which you use to get the id of the customer!
						{
							$customerId = $rowGetId['id'];	
							
							$sql = "INSERT INTO ticket (customer_id, price, category, camping) VALUES ('$customerId', '$price', '$category', '$camping')";	
							$result = $conn->query($sql);	
							
							if($result)
							{
								session_start();
								$succes = "succes";
								$_SESSION['succes'] = $succes;
								
								header("Location: ticket.php");
							}
						}
					}		
				}
			}
		elseif($selectBox2 == "TwoDays")
			{
				$fname2 = $_POST['fname2'];
				$email2 = $_POST['email2'];		
				$lastname = "none";
				$age = 0;
				$checkin = "0000-00-00";
				$checkout = "0000-00-00";
				$borrowing = 0;
				$ischeck = "";
				$password = "";
				
				$price = 100;
				$category = "TwoDay";
				$camping = 0;
				
				$sqlcheck = "SELECT * FROM customer WHERE email = '$email2'";	
				$resultcheckEmail1 = $conn->query($sqlcheck);
				
				if($rowcheck = mysqli_fetch_assoc($resultcheckEmail1)) // if this email exists in database then do something
				{				
					echo "<script>alert('This email is already registered!')</script>";
				}
				else
				{
					$sqlMakeCust = "INSERT INTO customer (firstname, lastname, age, email, checkin, checkout, borrowing, ischeck, password) VALUES ('$fname2', '$lastname', '$age', '$email2', '$checkin', '$checkout', '$borrowing', '$ischeck', '$password')";
					
					if($result = $conn->query($sqlMakeCust))
					{
						$sqlGetId = "SELECT id FROM customer WHERE email = '$email2'";
						$resultGetId = $conn->query($sqlGetId);				
						
						while($rowGetId = mysqli_fetch_assoc($resultGetId)) // Here you get the result which you use to get the id of the customer!
						{
							$customerId = $rowGetId['id'];	
							
							$sql = "INSERT INTO ticket (customer_id, price, category, camping) VALUES ('$customerId', '$price', '$category', '$camping')";	
							$result = $conn->query($sql);	
							
							if($result)
							{
								session_start();
								$succes = "succes";
								$_SESSION['succes'] = $succes;
								
								header("Location: ticket.php");
							}
						}
					}		
				}
			}
		elseif($selectBox2 == "ThreeDays")
			{
				$fname2 = $_POST['fname2'];
				$email2 = $_POST['email2'];		
				$lastname = "none";
				$age = 0;
				$checkin = "0000-00-00";
				$checkout = "0000-00-00";
				$borrowing = 0;
				$ischeck = "";
				$password = "";
				
				$price = 130;
				$category = "ThreeDay";
				$camping = 0;
				
				$sqlcheck = "SELECT * FROM customer WHERE email = '$email2'";	
				$resultcheckEmail1 = $conn->query($sqlcheck);
				
				if($rowcheck = mysqli_fetch_assoc($resultcheckEmail1)) // if this email exists in database then do something
				{				
					echo "<script>alert('This email is already registered!')</script>";
				}
				else
				{
					$sqlMakeCust = "INSERT INTO customer (firstname, lastname, age, email, checkin, checkout, borrowing, ischeck, password) VALUES ('$fname2', '$lastname', '$age', '$email2', '$checkin', '$checkout', '$borrowing', '$ischeck', '$password')";
					
					if($result = $conn->query($sqlMakeCust))
					{
						$sqlGetId = "SELECT id FROM customer WHERE email = '$email2'";
						$resultGetId = $conn->query($sqlGetId);				
						
						while($rowGetId = mysqli_fetch_assoc($resultGetId)) // Here you get the result which you use to get the id of the customer!
						{
							$customerId = $rowGetId['id'];	
							
							$sql = "INSERT INTO ticket (customer_id, price, category, camping) VALUES ('$customerId', '$price', '$category', '$camping')";	
							$result = $conn->query($sql);	
							
							if($result)
							{
								session_start();
								$succes = "succes";
								$_SESSION['succes'] = $succes;
								
								header("Location: ticket.php");
							}
						}
					}		
				}
			}
		elseif($selectBox2 == "ThreeDaysCamp")
			{
				$fname2 = $_POST['fname2'];
				$email2 = $_POST['email2'];		
				$lastname = "none";
				$age = 0;
				$checkin = "0000-00-00";
				$checkout = "0000-00-00";
				$borrowing = 0;
				$ischeck = "";
				$password = "";
				
				$price = 150;
				$category = "ThreeDay";
				$camping = 1;
				
				$sqlcheck = "SELECT * FROM customer WHERE email = '$email2'";	
				$resultcheckEmail1 = $conn->query($sqlcheck);
				
				if($rowcheck = mysqli_fetch_assoc($resultcheckEmail1)) // if this email exists in database then do something
				{				
					echo "<script>alert('This email is already registered!')</script>";
				}
				else
				{
					$sqlMakeCust = "INSERT INTO customer (firstname, lastname, age, email, checkin, checkout, borrowing, ischeck, password) VALUES ('$fname2', '$lastname', '$age', '$email2', '$checkin', '$checkout', '$borrowing', '$ischeck', '$password')";
					
					if($result = $conn->query($sqlMakeCust))
					{
						$sqlGetId = "SELECT id FROM customer WHERE email = '$email2'";
						$resultGetId = $conn->query($sqlGetId);				
						
						while($rowGetId = mysqli_fetch_assoc($resultGetId)) // Here you get the result which you use to get the id of the customer!
						{
							$customerId = $rowGetId['id'];	
							
							$sql = "INSERT INTO ticket (customer_id, price, category, camping) VALUES ('$customerId', '$price', '$category', '$camping')";	
							$result = $conn->query($sql);	
							
							if($result)
							{
								session_start();
								$succes = "succes";
								$_SESSION['succes'] = $succes;
								
								header("Location: ticket.php");
							}
						}
					}		
				}
			}
			
	//THIS IS THE PHP PART FOR TICKET 3!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
			$selectBox3 = $_POST['nrOfDays3'];
			
			if($selectBox3 == "OneDay")
			{
				$fname3 = $_POST['fname3'];
				$email3 = $_POST['email3'];		
				$lastname = "none";
				$age = 0;
				$checkin = "0000-00-00";
				$checkout = "0000-00-00";
				$borrowing = 0;
				$ischeck = "";
				$password = "";
				
				$price = 50;
				$category = "1day";
				$camping = 0;
				
				$sqlcheck = "SELECT * FROM customer WHERE email = '$email3'";	
				$resultcheckEmail1 = $conn->query($sqlcheck);
				
				if($rowcheck = mysqli_fetch_assoc($resultcheckEmail1)) // if this email exists in database then do something
				{				
					echo "<script>alert('This email is already registered!')</script>";
				}
				else
				{
					$sqlMakeCust = "INSERT INTO customer (firstname, lastname, age, email, checkin, checkout, borrowing, ischeck, password) VALUES ('$fname3', '$lastname', '$age', '$email3', '$checkin', '$checkout', '$borrowing', '$ischeck', '$password')";
					
					if($result = $conn->query($sqlMakeCust))
					{
						$sqlGetId = "SELECT id FROM customer WHERE email = '$email3'";
						$resultGetId = $conn->query($sqlGetId);				
						
						while($rowGetId = mysqli_fetch_assoc($resultGetId)) // Here you get the result which you use to get the id of the customer!
						{
							$customerId = $rowGetId['id'];	
							
							$sql = "INSERT INTO ticket (customer_id, price, category, camping) VALUES ('$customerId', '$price', '$category', '$camping')";	
							$result = $conn->query($sql);	
							
							if($result)
							{
								session_start();
								$succes = "succes";
								$_SESSION['succes'] = $succes;
								
								header("Location: ticket.php");
							}
						}
					}		
				}
			}
		elseif($selectBox3 == "TwoDays")
			{
				$fname3 = $_POST['fname3'];
				$email3 = $_POST['email3'];		
				$lastname = "none";
				$age = 0;
				$checkin = "0000-00-00";
				$checkout = "0000-00-00";
				$borrowing = 0;
				$ischeck = "";
				$password = "";
				
				$price = 100;
				$category = "TwoDay";
				$camping = 0;
				
				$sqlcheck = "SELECT * FROM customer WHERE email = '$email3'";	
				$resultcheckEmail1 = $conn->query($sqlcheck);
				
				if($rowcheck = mysqli_fetch_assoc($resultcheckEmail1)) // if this email exists in database then do something
				{				
					echo "<script>alert('This email is already registered!')</script>";
				}
				else
				{
					$sqlMakeCust = "INSERT INTO customer (firstname, lastname, age, email, checkin, checkout, borrowing, ischeck, password) VALUES ('$fname3', '$lastname', '$age', '$email3', '$checkin', '$checkout', '$borrowing', '$ischeck', '$password')";
					
					if($result = $conn->query($sqlMakeCust))
					{
						$sqlGetId = "SELECT id FROM customer WHERE email = '$email3'";
						$resultGetId = $conn->query($sqlGetId);				
						
						while($rowGetId = mysqli_fetch_assoc($resultGetId)) // Here you get the result which you use to get the id of the customer!
						{
							$customerId = $rowGetId['id'];	
							
							$sql = "INSERT INTO ticket (customer_id, price, category, camping) VALUES ('$customerId', '$price', '$category', '$camping')";	
							$result = $conn->query($sql);	
							
							if($result)
							{
								session_start();
								$succes = "succes";
								$_SESSION['succes'] = $succes;
								
								header("Location: ticket.php");
							}
						}
					}		
				}
			}
		elseif($selectBox3 == "ThreeDays")
			{
				$fname3 = $_POST['fname3'];
				$email3 = $_POST['email3'];		
				$lastname = "none";
				$age = 0;
				$checkin = "0000-00-00";
				$checkout = "0000-00-00";
				$borrowing = 0;
				$ischeck = "";
				$password = "";
				
				$price = 130;
				$category = "ThreeDay";
				$camping = 0;
				
				$sqlcheck = "SELECT * FROM customer WHERE email = '$email3'";	
				$resultcheckEmail1 = $conn->query($sqlcheck);
				
				if($rowcheck = mysqli_fetch_assoc($resultcheckEmail1)) // if this email exists in database then do something
				{				
					echo "<script>alert('This email is already registered!')</script>";
				}
				else
				{
					$sqlMakeCust = "INSERT INTO customer (firstname, lastname, age, email, checkin, checkout, borrowing, ischeck, password) VALUES ('$fname3', '$lastname', '$age', '$email3', '$checkin', '$checkout', '$borrowing', '$ischeck', '$password')";
					
					if($result = $conn->query($sqlMakeCust))
					{
						$sqlGetId = "SELECT id FROM customer WHERE email = '$email3'";
						$resultGetId = $conn->query($sqlGetId);				
						
						while($rowGetId = mysqli_fetch_assoc($resultGetId)) // Here you get the result which you use to get the id of the customer!
						{
							$customerId = $rowGetId['id'];	
							
							$sql = "INSERT INTO ticket (customer_id, price, category, camping) VALUES ('$customerId', '$price', '$category', '$camping')";	
							$result = $conn->query($sql);	
							
							if($result)
							{
								session_start();
								$succes = "succes";
								$_SESSION['succes'] = $succes;
								
								header("Location: ticket.php");
							}
						}
					}		
				}
			}
		elseif($selectBox3 == "ThreeDaysCamp")
			{
				$fname3 = $_POST['fname3'];
				$email3 = $_POST['email3'];		
				$lastname = "none";
				$age = 0;
				$checkin = "0000-00-00";
				$checkout = "0000-00-00";
				$borrowing = 0;
				$ischeck = "";
				$password = "";
				
				$price = 150;
				$category = "ThreeDay";
				$camping = 1;
				
				$sqlcheck = "SELECT * FROM customer WHERE email = '$email3'";	
				$resultcheckEmail1 = $conn->query($sqlcheck);
				
				if($rowcheck = mysqli_fetch_assoc($resultcheckEmail1)) // if this email exists in database then do something
				{				
					echo "<script>alert('This email is already registered!')</script>";
				}
				else
				{
					$sqlMakeCust = "INSERT INTO customer (firstname, lastname, age, email, checkin, checkout, borrowing, ischeck, password) VALUES ('$fname3', '$lastname', '$age', '$email3', '$checkin', '$checkout', '$borrowing', '$ischeck', '$password')";
					
					if($result = $conn->query($sqlMakeCust))
					{
						$sqlGetId = "SELECT id FROM customer WHERE email = '$email3'";
						$resultGetId = $conn->query($sqlGetId);				
						
						while($rowGetId = mysqli_fetch_assoc($resultGetId)) // Here you get the result which you use to get the id of the customer!
						{
							$customerId = $rowGetId['id'];	
							
							$sql = "INSERT INTO ticket (customer_id, price, category, camping) VALUES ('$customerId', '$price', '$category', '$camping')";	
							$result = $conn->query($sql);	
							
							if($result)
							{
								session_start();
								$succes = "succes";
								$_SESSION['succes'] = $succes;
								
								header("Location: ticket.php");
							}
						}
					}		
				}
			}
	}
?>