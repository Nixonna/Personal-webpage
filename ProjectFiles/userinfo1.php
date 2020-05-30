<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
body{
		color: black;
		background-color:#b2cecf;
}

table,tr,td {
  border : 1px black;
  border-collapse: collapse;
}
tr,td {
  padding: 5px;
}
</style>
</head>
<body>
<h2 style="text-align:centre;">ALL RECORDS</h2><br>
Search records <br><br>

<form method="POST" action='#'>
UserName <input type="text" name="username"/><br><br>
<button type="submit" name="search"> SEARCH </button><br><br>
<table>
	<thead>
     <tr>
       <th><?php if(isset($_REQUEST['search'])){echo 'Name ' ;}?></th>
       <th><?php if(isset($_REQUEST['search'])){echo 'Gender ' ;}?></th>
       <th><?php if(isset($_REQUEST['search'])){echo 'Age ' ;}?></th>
       <th><?php if(isset($_REQUEST['search'])){echo 'Email ' ;}?></th>
       <th><?php if(isset($_REQUEST['search'])){echo 'Contact ' ;}?></th>
       <th><?php if(isset($_REQUEST['search'])){echo 'Branch ' ;}?></th>
       <th><?php if(isset($_REQUEST['search'])){echo 'Percentage ' ;}?></th>
     </tr>
    </thead>

	<tbody>
    <?php  if(isset($_REQUEST['search'])){
    $xml=simplexml_load_file('UserDetail.xml');

    $node = $xml->info;
	foreach($node as $node):
	if($_REQUEST['username'] == $node->name):?>
     <tr>
        <td><?php echo $node->name;?></td>
        <td><?php echo $node->gender;?></td>
        <td><?php echo $node->age;?></td>
        <td><?php echo $node->email;?></td>
        <td><?php echo $node->contact;?></td>
        <td><?php echo $node->branch;?></td>
        <td><?php echo $node->percentage;?></td>
     <tr>
	<?php endif;?>
	<?php endforeach;?>
	<?php } ?>
	</tbody>

    <thead>
     <tr>
       <th>Name</th>
       <th>Gender</th>
       <th>Age</th>
       <th>Email</th>
       <th>Contact</th>
       <th>Branch</th>
       <th>Percentage</th>
     </tr>
    </thead>
<tbody>
    <?php
    $xml=simplexml_load_file('UserDetail.xml');

    foreach($xml->info as $node):?>
     <tr>
        <td><?php echo $node->name;?></td>
        <td><?php echo $node->gender;?></td>
        <td><?php echo $node->age;?></td>
        <td><?php echo $node->email;?></td>
        <td><?php echo $node->contact;?></td>
        <td><?php echo $node->branch;?></td>
        <td><?php echo $node->percentage;?></td>
     <tr>
<?php endforeach;?>
  </tbody>
 
</table><br>
<button type="submit" onclick="location.href='admin.php'">BACK</button>
</form>
</body>
</html>