<!DOCTYPE HTML>
    <html>
        <head>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
				<title>Create Account</title>
				<style>
				    body{
                        background-repeat: no-repeat;
                        color: black;
						background-color:#b2cecf;
				    }
                    p{
                        color: black;
                        text-decoration:underline;
                        font-weight: bold;
                        text-align: center;
                        font-size: 30px;
                    }
				</style>
            <script src="signup_json.js"></script>
        </head>

        <body>
            <p> SIGNUP </p>
            <form method="post" id="Detail_form" enctype="multipart/form-data">
                UserName <input required name="name" type="text"><br><br>
				<?php
				$xmlValue= 0;
				if(isset($_REQUEST['insert']))
				{
					$xml=simplexml_load_file('UserDetail.xml');

					$node = $xml->info;
					foreach($node as $node){
					if($_REQUEST['name'] == $node->name){
						
						$xmlValue = 0;
						echo "<p style='color:red;font-size:15px;text-align:left;'>UserName already taken!!</p>";
						break;
		
					}
			
					else{
						
						$xmlValue = 1;
					}
				}
				if($xmlValue == 1){echo "<p style='color:green;font-size:15px;text-align:left;'>UserName available!!</p>";}
				}
				?>    
                Password <input required name="password" pattern="^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$" type="password"><br><br>
                Atleast length of 8 , atleast 1 lower and upper case letter and atleast 1 number.<br><br>				
				Gender <br>
                    <input type="radio" name="gender" value="male"> Male<br>
                    <input type="radio" name="gender" value="female"> Female<br>
                    <input type="radio" name="gender" value="other"> Other<br><br>
                   
                Age<br> 0<input name="age" required type="range" min="0" max="100" value="0" class="slider" id="myRange" onchange="updateTextInput(this.value)" onfocus="focusfunction()" onblur="onvalidate()">100 &nbsp;
                 <span id="age" style="color:black; display: none; font-family: cursive;"> (ABOVE 18 YEARS ONLY) </span><br>
                Value: <span id="demo"></span><br>
                <!--<output name="x" for="myRange"></output>--><br>

                Email    <input required name="email" type="email"><br><br>
                
                Contact <input required type="tel" pattern="[8-9]{1}[0-9]{9}" name="contact"><br><br>

                Branch <select required name="branch">
                        <option value="cse">CSE</option>
                        <option value="ece">ECE</option>
                        <option value="eee">EEE</option>
                        <option value="mec">MEC</option>
                </select><br><br>
                    
                Percentage in Class 12<br>
                <input required list="browsers" name="percentage">
                <datalist id="browsers">
                    <option value="80 - 100">
                    <option value="60 - 80">
                    <option value="40 - 60">
                </datalist>
                <br><br>

				Select  your image to upload <input type="file" name="fileToUpload" id="fileToUpload">
			    <br><br>

				<?php
				if(isset($_FILES['fileToUpload'])){
				$target_dir = "A:\\xampp\\htdocs\\iwp\\images/";
				$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
				$uploadOk = 1;
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				// Check if image file is a actual image or fake image
				if(isset($_POST["submit"])) {
					$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
					if($check !== false) {
						echo "<p style='color:green;font-size:15px;text-align:left;'>File is an image -</p> " . $check["mime"] . "<p style='color:green;font-size:15px;text-align:left;'>.</p>";
						$uploadOk = 1;
					} else {
						echo "<p style='color:red;font-size:15px;text-align:left;'>File is not an image.</p>";
						$uploadOk = 0;
					}
				}
				// Check if file already exists
				if (file_exists($target_file)) {
					echo "<p style='color:red;font-size:15px;text-align:left;'>Sorry, file already exists.</p>";
					$uploadOk = 0;
				}
				// Check file size
				if ($_FILES["fileToUpload"]["size"] > 500000) {
					echo "<p style='color:red;font-size:15px;text-align:left;'>Sorry, your file is too large.</p>";
					$uploadOk = 0;
				}
				// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
					echo "<p style='color:red;font-size:15px;text-align:left;'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.<p>";
					$uploadOk = 0;
				}
				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
					echo "<p style='color:red;font-size:15px;text-align:left;'>Sorry, your file was not uploaded.</p>";
				// if everything is ok, try to upload file
				} else {
					if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
						echo "<p style='color:green;font-size:15px;text-align:left;'>The file</p> ". basename( $_FILES["fileToUpload"]["name"]). " <p style='color:green;font-size:15px;text-align:left;'>has been uploaded.</p>";
					} else {
						echo "<p style='color:red;font-size:15px;text-align:left;'>Sorry, there was an error uploading your file.</p>";
					}
				}
				}
				?>
				
				
<br><br>                
				<input required type="checkbox" id="cbox" name="declare">I do hereby declare that above particulars of information and facts stated are true, correct and complete to the best of my knowledge and belief.<br><br>

                <input type="submit" value="Submit" name="insert" onclick="onvalidate()"><br><br>
                
                <input type="button" name="confirm" value="confirm" onclick="location.href='signin.php'">
                </form>
           <pre id="output"></pre>
        </body>

        <script>
            var slider = document.getElementById("myRange");
            output.innerHTML = slider.value; // Display the default slider value

            // Update the current slider value (each time you drag the slider handle)
            slider.oninput = function() {
            output.innerHTML = this.value;
            }
        </script>

            <script>
                var slider = document.getElementById("myRange");
                var output = document.getElementById("demo");
                output.innerHTML = slider.value;

                slider.oninput = function() {
                    output.innerHTML = this.value;
                }
            </script>
        
        

        <script>
            function updateTextInput(val) {
          document.getElementById('myRange').value=val; 
        }    
        </script>


        <script>
            function onvalidate(){
                document.getElementById("age").style.display = 'none';
                var a = document.getElementById('myRange').value;
                if (a>18)
                    {
                        document.getElementById('form').submit();
                        return true;
                    }
                else{
                        window.alert("Please enter a valid age between 18-100");
                        return false;   
                    }
                 
            }
        
        
        </script>
        
        <script>
            function focusfunction(){
                document.getElementById("age").style.display = 'inline'; 
            }
        
        
        </script>
        
        <?php
        if(isset($_REQUEST['insert']))
        {
			if($GLOBALS['uploadOk'] == 1 && $GLOBALS['xmlValue'] == 1){
            $xml = new DOMDocument('1.0','UTF-8');
            $xml->load('UserDetail.xml');
            
            
            $rootTag = $xml->getElementsByTagName('document')->item(0);
			
			$infoTag = $xml->createElement('info');
				$nameTag = $xml->createElement('name',$_REQUEST['name']);
				$passwordTag = $xml->createElement('password',$_REQUEST['password']);
				$genderTag = $xml->createElement('gender',$_REQUEST['gender']);
				$ageTag = $xml->createElement('age',$_REQUEST['age']);
				$emailTag = $xml->createElement('email',$_REQUEST['email']);
				$contactTag = $xml->createElement('contact',$_REQUEST['contact']);
				$branchTag = $xml->createElement('branch',$_REQUEST['branch']);
				$percentageTag = $xml->createElement('percentage',$_REQUEST['percentage']);
				
				$infoTag->appendChild($nameTag);
				$infoTag->appendChild($passwordTag);
				$infoTag->appendChild($genderTag);
				$infoTag->appendChild($ageTag);
				$infoTag->appendChild($emailTag);
				$infoTag->appendChild($contactTag);
				$infoTag->appendChild($branchTag);
				$infoTag->appendChild($percentageTag);
			
			$rootTag->appendChild($infoTag);
			$xml->save('UserDetail.xml');
			}   
        }
        
        ?>