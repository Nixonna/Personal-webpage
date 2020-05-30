<?php
	session_start();
?>

<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PROFILE </title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
			transition: background-color .5s;
			background-color:#57a6a9;
			color:black;
        }
        #header{
            text-align: center;
            color: black;
            
            padding: 40px;
            font-size: 40px;
        }
        .sidenav {
			height: 100%;
			width: 0;
			position: fixed;
			z-index: 1;
			top: 0;
			left: 0;
			background-color: #b2cecf;
			overflow-x: hidden;
			transition: 0.5s;
			padding-top: 60px;
		}

		.sidenav a {
			padding: 8px 8px 8px 32px;
			text-decoration: none;
			font-size: 25px;
			color: black;
			display: block;
			transition: 0.3s;
		}

		.sidenav a:hover {
			color: #f1f1f1;
		}

		.sidenav .closebtn {
			position: absolute;
			top: 0;
			right: 25px;
			font-size: 36px;
			margin-left: 50px;
		}

		#main {
			transition: margin-left .5s;
			padding: 16px;
		}

		@media screen and (max-height: 450px) {
			.sidenav {padding-top: 15px;}
			.sidenav a {font-size: 18px;}
		}
		iframe{
            align-content: center;
            width: 1500px;
            height: 500px;
            max-height: 100%;
            max-width: 100%;
            border:none;
        }
    </style>
	<script src="counter1.js"></script>
</head>
<body>
    <header>
        <p id="header"> Welcome to my profile!! </p>
    </header>
	
    <div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="profile.php" target="frame1" onclick="closeNav()">MY PROFILE</a></li><br>
        <a href="canvas.php" target="frame1" onclick="closeNav()">CANVAS</a></li><br>
        <a href="draw.php" target="frame1" onclick="closeNav()">DRAW</a>
        <a href="focusblur.php" target="frame1" onclick="closeNav()">FOCUS BLUR</a>
        <a href="load.php" target="frame1" onclick="closeNav()">LOAD</a>
        <a href="mouseoverout.php" target="frame1" onclick="closeNav()">MOUSE OVER</a>
        <a href="submitreset.php" target="frame1" onclick="closeNav()">SUBMIT</a>
		<a href="welcome.php" target="_top" onclick="closeNav()">LOGOUT</a>

	</div>
	<div id="main">
		<p style="text-align:right; color:black;">
		<?php
		if($_SESSION['cookie'] == 1){
		$inTwoMonths = 60 * 60 * 24 * 60 + time();
		date_default_timezone_set('Asia/Kolkata');
		setcookie('lastVisit', date("G:i- m/d/y"), $inTwoMonths);
		if(isset($_COOKIE['lastVisit']))
		{
			$visit = $_COOKIE['lastVisit'];
			print("Your last visit was ".$visit);
		}
		else{
			$visit = "This is your first visit!!";
		}
		}
		?>
		
		</p>
		<span style="font-size:20px;cursor:pointer;color:black;" onclick="openNav()" id="nav">&#9776; Navigate</span>
        <iframe name="frame1" id="frame1"></iframe>
    </div>
	
	<script>
		function openNav() {
			document.getElementById("mySidenav").style.width = "250px";
			document.getElementById("main").style.marginLeft = "250px";
			document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
			document.getElementById("nav").style.display="none";
		}

		function closeNav() {
			document.getElementById("mySidenav").style.width = "0";
			document.getElementById("main").style.marginLeft= "0";
			document.body.style.backgroundColor = "#57a6a9";
			document.getElementById("nav").style.display="inline";
		}
	</script>
</body>
</html>