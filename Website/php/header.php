<?php
	session_start();  
	if(isset($_SESSION['email']))
	{
		 $name = "Hello: {$_SESSION['username']} you are logged in!";
	
?>
<div class="divNav">
	<!-- LOGO -->
	<ul class="main-nav">
		<li><a href="../index.php">Home</a></li>
		<li><a href="../index.php#line-up">Line-Up</a></li>
		<li><a href="ticket.php">Tickets</a></li>
		<li><a href="../index.php#about-us">About Us</a></li>
		<li><a href="logout.php">Logout</a></li>
		<li><a href="#"><?php echo $name ?></a></li>
	</ul>
</div>
<div class="divLogo">
	<div class="divJump">
		<a href="../index.php">
			<img src="../image/SVLogo.png" width="140px" height="125px"></i>
		</a>
	</div>
</div>
<?php
	}
	else
	{
?>
<div class="divNav">
	<!-- LOGO -->
	<ul class="main-nav">
		<li><a href="../index.php">Home</a></li>
		<li><a href="../index.php#line-up">Line-Up</a></li>
		<li><a href="ticket.php">Tickets</a></li>
		<li><a href="../index.php#about-us">About Us</a></li>
		<li><a href="login.php">Login</a></li>
	</ul>
</div>
<div class="divLogo">
	<div class="divJump">
		<a href="../index.php">
			<img src="../image/SVLogo.png" width="140px" height="125px"></i>
		</a>
	</div>
</div>
<?php
	}
?>