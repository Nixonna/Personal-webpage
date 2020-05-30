<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
	<form method="POST" action="#">
	<p>Enter the name of user to delete</p>
	USERNAME <input type="text" name="name"></br>
	<input type="button" name="insert" value="DELETE">
	</form>
	<?php
		if(isset($_REQUEST['insert'])){
				$xml= new DOMDocument('1.0','UTF-8');
				$xml->load('UserDetail.xml');
				
				$name = $_REQUEST('name');
				
				$xpath = new DOMXPATH($xml);
				
				foreach($xpath->query("/root/info[name = '$name']") as $node)
				{
						$node->parentNode->removeChild($node);
				}
				$xml->formatoutput = true;
				$xml->save('UserDetail.xml');
		}
	?>
</body>
</html>
