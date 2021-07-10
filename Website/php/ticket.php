<?php
	$logout = "";
	$logoutLink = "";
	
	session_start();  
	if(isset($_SESSION['email']))
	{
		$name = "Hello: {$_SESSION['username']} you are logged in!";		 
		$nameInput = $_SESSION['username'];
		$email = $_SESSION['email'];
		$logout = "Logout";
		$logoutLink = "logout.php";
		
		if($_SESSION['succes'] == "succes")
		{
			echo '<script language="javascript">';
			echo 'alert("You have bought your tickets succesfully!")';
			echo '</script>';	
			unset($_SESSION["succes"]);
		}	
	}
	else
	{
		header("location: login.php");
	}
?>
<html>
<head>
    <link rel="shortcut icon" href="../image/SVLogo.png">
    <title>SoundVibe</title>
    <link href="../css/index.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="../js/tickets.js"></script>	
</head>

<body>
	<section class="section bckgrnd-camping1" id="about-us">
        <div class="cont">
			<?php include 'header.php';?>	
            <div class="row">
                <div class="col-6">
					<div class="contentTicket">
					<h1 align="center">Buy your ticket here!</h1>
						<div class="loginDiv">
							<select id="formSelector">
							  <option value="OneTick" >One ticket</option>
							  <option value="TwoTick" >Two tickets</option>
							  <option value="ThreeTick" >Three tickets</option>
							</select>
							<div id="OneTick" class="formsShow">
								<form class="formTickets" action="buyOne.php" method="POST">
									<div class="container">										
										<label for="fname"><b>Full name:</b></label>
										<input readonly type="text" name="fname" value="<?php echo $nameInput ?>" placeholder="Full name" required/>
										
										<label for="uname"><b>Email:</b></label>
										<input readonly type="email" name="email" value="<?php echo $email ?>" placeholder="Enter email" required/>
										
										<label for="ticketDay"><b>Choose your day(s):</b></label>
										<select id="nrOfDays" name="nrOfDays">
											  <option value="OneDay" >1 Day ticket: 50 &#8364 </option>
											  <option value="TwoDays" >Two days ticket: 100 &#8364 </option>
											  <option value="ThreeDays" >Three days ticket: 130 &#8364 </option>
											  <option value="ThreeDaysCamp" >Three days ticket + camping spot: 150 &#8364 </option>
										</select>
										
										<label for="psw"><b>Card nr:</b></label>
										<input type="text" placeholder="Enter Cardnr: NLABNA..." name="cardNr" required pattern=".{6,}" oninvalid="setCustomValidity('Write atleast 6 characters!')"  oninput="setCustomValidity('')" />
																											
										<button type="submit" class="button" name="buy1" value="buy">Buy ticket</button>
									</div>
								</form>
							</div>
							
							<div id="TwoTick" class="formsShow" style="display: none;">
								<form class="formTickets" action="buyOne.php" method="POST">
									<div class="ticketInfoDiv">
										<label class="info2Tick1"><b>Ticket 1:</b></label>
										<label class="info2Tick2"><b>Ticket 2:</b></label>
									</div>
									<div class="Ticket">
										<input readonly class="inputTick1" name="fname" value="<?php echo $nameInput ?>" placeholder="Full name" required/>
										<input class="inputTick2" name="fname2" placeholder="Full name" required/>	
									</div>
									<div class="Ticket">
										<input readonly class="inputTick1" name="email"  value="<?php echo $email ?>" placeholder="Enter email" required/>									
										<input class="inputTick2" name="email2" placeholder="Enter email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required oninvalid="setCustomValidity('Write a valid email! Example: email@hotmail.com !')"  oninput="setCustomValidity('')"/>
									</div>	
									<div class="Ticket">
										<select class="inputTick1" id="nrOfDays" name="nrOfDays">
											  <option value="OneDay" >1 Day ticket: 50 &#8364 </option>
											  <option value="TwoDays" >Two days ticket: 100 &#8364 </option>
											  <option value="ThreeDays" >Three days ticket: 130 &#8364 </option>
											  <option value="ThreeDaysCamp" >Three days ticket + camping spot: 150 &#8364 </option>
										</select>
										<select class="inputTick2" id="nrOfDays" name="nrOfDays2">
											  <option value="OneDay" >1 Day ticket: 50 &#8364 </option>
											  <option value="TwoDays" >Two days ticket: 100 &#8364 </option>
											  <option value="ThreeDays" >Three days ticket: 130 &#8364 </option>
											  <option value="ThreeDaysCamp" >Three days ticket + camping spot: 150 &#8364 </option>
										</select>
									</div>
									<div class="Ticket">	
										<input class="inputTick1" placeholder="Enter Cardnr: NLABNA..." name="cardNr" required pattern=".{6,}" oninvalid="setCustomValidity('Write atleast 6 characters!')"  oninput="setCustomValidity('')" />						
										<input class="inputTick2" name="cardNr2" placeholder="Enter Cardnr">
									</div>
									<div class="btnCamp">											
										<button type="submit" class="button" name="buy2" value="buy">Buy ticket</button>
									</div>	
								</form>
							</div>
							
							<div  id="ThreeTick" class="formsShow" style="display: none;" >
								<form class="formTickets" action="buyOne.php" method="POST">
									<div class="ticketInfoDiv">
										<label class="infoTick1"><b>Ticket 1:</b></label>
										<label class="infoTick2"><b>Ticket 2:</b></label>
										<label class="infoTick3"><b>Ticket 3</b></label>
									</div>
									<div class="Ticket">
										<input readonly type="text" name="fname" value="<?php echo $nameInput ?>" placeholder="Full name" required/>
										<input type="text" name="fname2" placeholder="Full name" required/>
										<input type="text" name="fname3" placeholder="Full name" required/>	
									</div>
									<div class="Ticket">
										<input readonly type="text" name="email" value="<?php echo $email ?>" placeholder="Enter email" required/>									
										<input type="email" name="email2" placeholder="Enter email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required oninvalid="setCustomValidity('Write a valid email! Example: email@hotmail.com !')"  oninput="setCustomValidity('')"/>
										<input type="email" name="email3" placeholder="Enter email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required oninvalid="setCustomValidity('Write a valid email! Example: email@hotmail.com !')"  oninput="setCustomValidity('')"/>
									</div>	
									<div class="Ticket">
										<select class="selectNrDays" id="nrOfDays" name="nrOfDays">
											  <option value="OneDay" >1 Day ticket: 50 &#8364 </option>
											  <option value="TwoDays" >Two days ticket: 100 &#8364 </option>
											  <option value="ThreeDays" >Three days ticket: 130 &#8364 </option>
											  <option value="ThreeDaysCamp" >Three days ticket + camping spot: 150 &#8364 </option>
										</select>
										<select class="selectNrDays" id="nrOfDays" name="nrOfDays2">
											  <option value="OneDay" >1 Day ticket: 50 &#8364 </option>
											  <option value="TwoDays" >Two days ticket: 100 &#8364 </option>
											  <option value="ThreeDays" >Three days ticket: 130 &#8364 </option>
											  <option value="ThreeDaysCamp" >Three days ticket + camping spot: 150 &#8364 </option>
										</select>
										<select class="selectNrDays" id="nrOfDays" name="nrOfDays3">
											  <option value="OneDay" >1 Day ticket: 50 &#8364 </option>
											  <option value="TwoDays" >Two days ticket: 100 &#8364 </option>
											  <option value="ThreeDays" >Three days ticket: 130 &#8364 </option>
											  <option value="ThreeDaysCamp" >Three days ticket + camping spot: 150 &#8364 </option>
										</select>
									</div>
									<div class="Ticket">								
										<input type="text" placeholder="Enter Cardnr: NLABNA..." name="cardNr" required pattern=".{6,}" oninvalid="setCustomValidity('Write atleast 6 characters!')"  oninput="setCustomValidity('')" />
										<input type="text" placeholder="Enter Cardnr" name="cardNr2">	
										<input type="text" placeholder="Enter Cardnr" name="cardNr3">
									</div>
									<div class="btnCamp">											
										<button type="submit" class="button" name="buy3" value="buy">Buy ticket</button>
									</div>	
								</form>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>