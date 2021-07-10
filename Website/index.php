<?php	
	$logout = "";
	$logoutLink = "";
	
	session_start();  
	if(isset($_SESSION['email']))
	{
		 $name = "Hello: {$_SESSION['username']} you are logged in!";
		 $logout = "Logout";
		 $logoutLink = "php/logout.php";
	}
	else
	{
		$logoutLink = "php/login.php";
		$logout = "Login";
	}
?>
<html>
<head>
    <link rel="shortcut icon" href="image/SVLogo.png">
    <title>SoundVibe</title>
    <link href="css/index.css" rel="stylesheet">
	<script type="text/javascript" src="js/main.js"></script>
</head>

<body>
	<header>
		<?php include 'php/headerIndex.php';?>	
	</header>
	<!-- Line-Up -->
    <section class="section bckgrnd-lineup" id="line-up">
		<div class="row">
			<div class="col-12 text-center">
				<div class="title-box">
					<h1 class="title-alt ticket-alt">Line-Up</h1>
				</div>
			</div>
		</div> <!-- end row -->           
		<div class="row">
			<div class="col-12">
				<div class="row artist">
					<!-- first artist -->
					<div class="col-4">
						<div class="artist-member">
							<div class="containerA">
								<img src="image/dua_lipa.jpg" width="280px" height="250px" class="img-fluid">
								<div class="overlayA">
									<div class="textA">Dua Lipa is the most streamed female artist of the moment. She has won 26 awards within 2 years.</div>
								</div>
							</div>
							<h4 class="artistName">Singer</h4>
							<h3>18th-19th of Feb</h3>
							<p class="artistTag">Dua Lipa</p>
						</div>
					</div>
					<!-- second artist -->
					<div class="col-4">
						<div class="artist-member">
							<div class="containerA">
								<img src="image/martin_garrix.jpg" width="280px" height="250px" class="img-fluid">
								<div class="overlayA">
									<div class="textA">Martin Garrix is the youngest DJ to win the best DJ in the world award for three consecutive years!</div>
								</div>
							</div>							
							<h4 class="artistName">DJ</h4>
							<h3>18-19th of Feb</h3>
							<p class="artistTag">Martin Garrix</p>
						</div>
					</div>
					<!-- third artist -->
					<div class="col-4">
						<div class="artist-member">
							<div class="containerA">
								<img src="image/russ.jpg" width="280px" height="250px" class="img-fluid">
								<div class="overlayA">
									<div class="textA">Russ is an upcoming British artist who has made some serious impact this year with more then a billion views on youtube!</div>
								</div>
							</div>								
							<h4 class="artistName">Rapper</h4>
							<h3>19-20th of Feb</h3>
							<p class="artistTag">Russ</p>
						</div>
					</div>
					<!-- fourth artist -->
					<div class="col-4">
						<div class="artist-member">
							<div class="containerA">
								<img src="image/david-guetta.jpg" width="280px" height="250px" class="img-fluid">
								<div class="overlayA">
									<div class="textA">David Guetta one of the best DJ's off all time! Millions of records sold and more then 4 billion views in total!</div>
								</div>
							</div>							
							<h4 class="artistName">DJ</h4>
							<h3>20th of Feb</h3>
							<p class="artistTag">David Guetta</p>
						</div>
					</div>
					<!-- fifth artist -->
					<div class="col-4">
						<div class="artist-member">
							<div class="containerA">
								<img src="image/rihanna.jpg" width="280px" height="250px" class="img-fluid">
								<div class="overlayA">
									<div class="textA">Rihanna the girl on fire which broke a lot of musical records while only being 22 years old! </div>
								</div>
							</div>	
							<h4 class="artistName">Singer</h4>
							<h3>20th of Feb</h3>
							<p class="artistTag">Rihanna</p>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>
    <!-- END line-up -->
    <!-- Tickets -->
    <section class="section bckgrnd-tickets" id="tickets">
		<div class="col-12 text-center">
			<h1 class="title-alt ticket-alt">Get your tickets now!</h1>
		</div>
		<div class="row">
			<div class="col-10">
				<div class="tickets">
					<div class="col-5">
						<div class="ticket-box one">
							<div>
								<h2>One day ticket</h2>
								<h3>50€</h3>
							</div>
							<div>
								<ul>
									<li><i class="ion-checkmark">Access to the 1 day of the festival</i></li>
									<li><i class="ion-checkmark">Inventory loan possibility</i></li>
									<li><i class="ion-close">RFID card</i></li>
								</ul>
							</div>
							<div>
								<a href="php/ticket.php" class="btnBuy">Buy Now</a>
							</div>
						</div>
					</div>
					<div class="col-5">
						<div class="ticket-box two">
							<div>
								<h2>Two days ticket</h2>
								<h3>100€</h3>
							</div>
							<div>
								<ul>
									<li><i class="ion-checkmark">Access to the 1-2 day of the festival</i></li>
									<li><i class="ion-checkmark">Inventory loan possibility</i></li>
									<li><i class="ion-close">RFID card</i></li>
								</ul>
							</div>
							<div>
								<a href="php/ticket.php" class="btnBuy">Buy Now</a>
							</div>
						</div>
					</div>
					<div class="col-5">
						<div class="ticket-box three">
							<div>
								<h2>Three days ticket</h2>
								<h3>130€</h3>
							</div>
							<div>
								<ul>
									<li><i class="ion-checkmark">Access to the all the days of the festival</i></li>
									<li><i class="ion-checkmark">Inventory loan possibility</i></li>
									<li><i class="ion-checkmark">RFID card</i></li>
								</ul>
							</div>
							<div>
								<a href="php/ticket.php" class="btnBuy">Buy Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>
    <!-- END tickets -->

    <!-- AboutUs -->
	<section class="section bckgrnd-aboutus" id="about-us">
		<div class="row">
			<div class="col-12 text-center">
				<h1 class="title-alt ticket-alt">About SoundVibe</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<div class="about-soundV">
					<ul class="ulList">
						<li>We are SoundVibe and we are specialized in organizing music related events. 
							This year we are going to organize for you one of the biggest musical festivals in the Netherlands. 
							This event will take place on the 18-20th of January 2019 in Molecaten Park in Drenthe. 
							The duration of the event will be 3 days long, you will have an option to have a camping spot where you can rest and talk with your friends. 
							We hope this music festival becomes a tradition and to see you at our festival every year.
						</li>
					</ul>
				</div>
			</div>
		</div>
    </section>
	
    <!-- END AboutUs -->
	<button onclick="topFunction()" id="btnGoTop" title="Go to top">Top</button>
    <!-- FOOTER -->
	<?php include 'php/footer.php';?>	
    <!-- END FOOTER -->
</body>
</html>