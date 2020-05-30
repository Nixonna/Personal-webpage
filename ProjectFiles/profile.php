<DOCTYPE html>
<!-- this is a comment -->
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8"/>
	<title> My profile</title>
</head>
<style>
#title{
	font-size: 50px;
	text-align: center;
	color:black;
}
#content{
	font-size: 30px;
	text-decoration: underline;
}
#personal, #qualification, #projects, #hobbies, #contacts{
	font-size:22px;
}
#personal1, #qualification1,#projects1, #hobbies1, #contacts1 {
	font-size: 30px;
	text-align: center;
	padding:40px;
	text-decoration: underline;
}
#personalContent, #qualificationContent, #projectsContent, #Hobbiescontent, #Contactcontent{
	font-size:20px;
}
body{
    font-family: Arial, Helvetica, sans-serif;
    color: black;
	transition: background-color .5s;
	background-color: #b2cecf;
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
</style>
<body>
	
	<p id="content"><?php echo "CONTENTS"?></p>
	<a id="personal", href="#PERSONAL"><?php echo "1.Personal" ?></a><br><br>
	<a id="qualification", href="#QUALIFICATION"><?php echo "2.Qualification" ?></a><br><br>
	<a id="projects" href="#PROJECTS"><?php echo "3.Projects" ?></a><br><br>
	<a id="hobbies" href="HOBBIES"><?php echo "4.Hobbies" ?></a><br><br>
	<a id="contacts" href="CONTACTS"><?php echo "5.Contacts" ?></a>
	
    <a name="PERSONAL"></a>
	<p id="personal1"><?php echo "PERSONAL" ?></p>
	<p id="personalContent"><?php 
		$xml=simplexml_load_file('profile.xml');
		$node = $xml->info;
		$node1 = $node->personal;
		echo $node1->line1 . '<br>';
		echo $node1->line2 .'<br>';
		echo $node1->line3 .'<br>';
		echo $node1->line4;
		?>
	</p>
	
    <a name="QUALIFICATION"></a>
	<p id="qualification1"><?php echo "QUALIFICATION" ?></p>
	<p id="qualificationContent"><?php 
		$xml=simplexml_load_file('profile.xml');
		$node = $xml->info;
		$node1 = $node->qualification;
		echo $node1->line1 . '<br>';
		echo $node1->line2;
		?>
	</p>
    <a name="PROJECTS"></a>
	<p id="projects1"><?php echo "PROJECTS" ?></p><a name="PROJECTS"></a>
	<p id="projectsContent"><?php 
		$xml=simplexml_load_file('profile.xml');
		$node = $xml->info;
		$node1 = $node->project;
		echo $node1->line1 . '<br>';
		echo $node1->line2;
		?>
		
		</p>
    <a name="HOBBIES"></a>
	<p id="hobbies1"><?php echo "HOBBIES" ?></p><a name="HOBBIES"></a>	
	<p id="Hobbiescontent"><?php 
		$xml=simplexml_load_file('profile.xml');
		$node = $xml->info;
		$node1 = $node->hobbies;
		echo $node1->line1 . '<br>';
		echo $node1->line2 . '<br>';
		echo $node1->line3;
		?>
		</p>
    <a name="CONTACTS"></a>
	<p id="contacts1"><?php echo "CONTACTS" ?></p><a name="CONTACTS"></a>
	<p id="Contactcontent">
	         <p>    
            <table border="5">
                <tr>
                    <td><p><?php echo "My phone number:" ?></td> <td><?php echo "+123456789" ?></td><br> </tr>
                <tr>
                    <td><p><?php echo "My email:" ?></td><td><a href=" nixonnna00@gmail.com"><?php echo "nixonnna00@gmail" ?></a></td>
                </tr>
            </table>
        </p>

</body>

</html>
	