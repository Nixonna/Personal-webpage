<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> WELCOME </title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
			transition: background-color .5s;
			background-color: #57a6a9;
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
</head>
<body>
    <header>
        <p id="header"> Welcome To My Page!! </p>
    </header>
    <div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="adminLogin.php" target="frame1" onclick="closeNav()">ADMIN LOGIN </a>
		<a href="signin.php" target="frame1" onclick="closeNav()">SIGNIN </a>
        <a href="signup.php" target="frame1" onclick="closeNav()">SIGNUP</a>

	</div>
	<div id="main">
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