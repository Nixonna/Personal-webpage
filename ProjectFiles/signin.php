<?php
	session_start();
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> SignIn </title>
        <script type="text/javascript">
         function generateCaptcha()
         {
             var alpha = new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','1','2','3','4','5','6','7','8','9','0');
             var i;
             for (i=0;i<4;i++){
               var a = alpha[Math.floor(Math.random() * alpha.length)];
               var b = alpha[Math.floor(Math.random() * alpha.length)];
               var c = alpha[Math.floor(Math.random() * alpha.length)];
               var d = alpha[Math.floor(Math.random() * alpha.length)];
              }
            var code = a + '' + b + '' + '' + c + '' + d;
            document.getElementById("mainCaptcha").value = code
          }
          function CheckValidCaptcha(){
              var string1 = removeSpaces(document.getElementById('mainCaptcha').value);
              var string2 = removeSpaces(document.getElementById('txtInput').value);
              if (string1 == string2){
                return true;
              }
              else{       
         document.getElementById('error').innerHTML = "Please enter a valid captcha."; 

                return false;
         
              }
          }
          function removeSpaces(string){
            return string.split(' ').join('');
          }
      </script>
    
    <script>
        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires="+d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        function checkCookie() {
            var username= document.getElementById("name").value;
            var user = getCookie(username);
            if (user != "") {
                document.getElementById("password").value=user;
                
        } else {
            user = document.getElementById("password").value;
            if (user != "" && user != null) {
                setCookie(username, user, 30);
                }
            }
        }

    
    </script>
</head>
<style>
    body{
        background-repeat: no-repeat;
        color: black;
        text-align: center;
        font-size: 20px;
		background-color:#b2cecf;
        }
    p{
        text-decoration: underline;
        font-weight: bold;
        color: black;
        text-align: center;
        font-size: 30px;
    }
    #mainCaptcha{
        font-weight: bolder;
        background-image: url(download.jpg);
        text-align: center;
        font-size: 30px;
    }

</style>
<body onload="generateCaptcha()">
    <section>
        <header>
            <p> SIGN IN </p>
        </header>
    </section>
    <form action="#" method="get" onsubmit="return CheckValidCaptcha()">
        Email-id <input required name="name" type="email" id="name"><br><br>
        Password <input required name="password" type="password" id="password" pattern="^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$" onfocus="checkCookie()"><br><br>
        <input type="text" id="mainCaptcha"readonly="readonly"/><br><br>
        <input type="button" id="refresh" value="Refresh" onclick="generateCaptcha();" />
        <input type="text" id="txtInput"/>
        <input type="submit" value="Submit" name="insert" onclick="CheckValidCaptcha()"><br>
        <span id="error" style="color:red"></span><br>
		<label style="color:black;"><input type="checkbox" name="check">Use Cookies</label><br>
        
    </form>
 <?php
	if(isset($_REQUEST['insert']))
	{
		
		$xml=simplexml_load_file('UserDetail.xml');
		$node = $xml->info;
		$value= 1;
		foreach($node as $node){
		if($_REQUEST['name'] == $node->email && $_REQUEST['password'] == $node->password){
			$value=1;
			print("<script type='text/javascript'>window.open('http://localhost/iwp/profileHome.php','_top');</script>");
			break;
		}
		else{
			$value=0;
		}
	}
		if($value == 0){
		$message = "wrong Email-id or password";
		print ($message);
		}
	}
?>
<?php
	if(isset($_REQUEST['insert'])){
		$_SESSION['cookie'] = 0;
		if(isset($_REQUEST['check'])){ $_SESSION['cookie'] = 1;}
		
	}
?>         
</body>
</html>