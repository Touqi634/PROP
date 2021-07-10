<?php
	session_start(); 
	if($_SESSION['succes'] == "succes")
		{
			echo '<script language="javascript">';
			echo 'alert("You have been succesfully registered!")';
			echo '</script>';	
			unset($_SESSION["succes"]);
		}	
?>
<html>
<head>
    <link rel="shortcut icon" href="../image/SVLogo.png">
    <title>SoundVibe</title>
    <link href="../css/index.css" rel="stylesheet">
</head>

<body>		
	<section class="section bckgrnd-second" id="about-us">
		<?php include 'header.php';?>	
		<div class="row">
			<div class="col-6">
				<div class="contentLogin">
					<h1 align="center"> Login to buy ticket!</h1>
					<div class="loginDiv">
						<form  action="process.php" method="POST">
							<div class="container">
								<label for="uname"><b>Email:</b></label>
								<input type="email" name="email" placeholder="Enter email" required/>

								<label for="psw"><b>Password:</b></label>
								<input type="password" placeholder="Enter Password" name="pass" required>
								
								<button type="submit" class="button" value="login">Login</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
    </section>
	<section class="section bckgrnd-second" id="about-us">
		<div class="row">
			<div class="col-6">
				<div class="contentRegister">
				<h1 class="" align="center">Register here!</h1>
					<div class="loginDiv">
						<form  action="addCustomer.php" method="POST">
							<div class="container">
								<label for="fname"><b>Full name:</b></label>
								<input type="text" name="fname" placeholder="Full name" required/>
								
								<label for="uname"><b>Email:</b></label>
								<input type="email" name="email" placeholder="Enter email" required/>

								<label for="psw"><b>Password:</b></label>
								<input type="password" placeholder="Enter Password" name="pass" required>
								
								<button type="submit" class="button" value="register">Register</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
    </section>
</body>
</html>