<?php
	session_start();  
	if(isset($_SESSION['email']))
	{
		 $name = "Hello: {$_SESSION['username']} you are logged in!";
	
?>
<!-- START NAVBAR -->
<div class="divNav">
	<!-- LOGO -->
	<ul class="main-nav">
		<li><a href="index.php">Home</a></li>
		<li><a href="index.php#line-up">Line-Up</a></li>
		<li><a href="index.php#tickets">Tickets</a></li>
		<li><a href="index.php#about-us">About Us</a></li>
		<li><a href="php/logout.php">Logout</a></li>
		<li><a href="#"><?php echo $name ?></a></li>
	</ul>
</div>
<div class="divLogo">
	<div class="divJump">
		<a href="index.php">
			<img class="logo" src="image/SVLogo.png" width="110px" height="100px"></i>
		</a>
	</div>
</div>
<!-- END NAVBAR -->	
<?php
	}
	else
	{
?>
<!-- START NAVBAR -->
<div class="divNav">
	<!-- LOGO -->
	<ul class="main-nav">
		<li><a href="index.php">Home</a></li>
		<li><a href="index.php#line-up">Line-Up</a></li>
		<li><a href="index.php#tickets">Tickets</a></li>
		<li><a href="index.php#about-us">About Us</a></li>
		<li><a href="php/login.php">Login</a></li>
	</ul>
</div>
<div class="divLogo">
	<div class="divJump">
		<a href="index.php">
			<img class="logo" src="image/SVLogo.png" width="110px" height="100px"></i>
		</a>
	</div>
</div>
<!-- END NAVBAR -->	
<?php
	}
?>