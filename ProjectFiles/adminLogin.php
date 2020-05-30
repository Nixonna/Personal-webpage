<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Admin LogIn </title>
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
            <p> ADMIN LOGIN </p>
        </header>
    </section>
    <form action="#" method="get" onsubmit="return CheckValidCaptcha()">
        Enter Name <input required name="name" type="text" id="name"><br><br>
        Password <input required name="password" type="password" id="password"><br><br>
        <input type="text" id="mainCaptcha"readonly="readonly"/><br><br>
        <input type="button" id="refresh" value="Refresh" onclick="generateCaptcha();" />
        <input type="text" id="txtInput"/>
    
        <input type="submit" value="Submit" name="insert" onclick="CheckValidCaptcha()"><br>
        <span id="error" style="color:red"></span><br>
        
    </form>
 <?php
	if(isset($_REQUEST['insert']))
	{
		if($_REQUEST['name'] == 'admin' && $_REQUEST['password'] == 'password'){
			print("<script type='text/javascript'>location.href = 'admin.php';</script>");
		}
		else{
			$message = "wrong username or password";
			print ($message);
		}
	}
?>       
</body>

</html>