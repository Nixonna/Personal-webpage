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
  border : 1px solid black;
  border-collapse: collapse;
}
tr,td {
  padding: 5px;
}
</style>
</head>
<body>
<h2 style="text-align:centre;">FIRST RECORD</h2>
<table>
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
	$node = $xml->info[0];
?>
     <tr>
        <td><?php echo $node->name;?></td>
        <td><?php echo $node->gender;?></td>
        <td><?php echo $node->age;?></td>
        <td><?php echo $node->email;?></td>
        <td><?php echo $node->contact;?></td>
        <td><?php echo $node->branch;?></td>
        <td><?php echo $node->percentage;?></td>
     <tr>
  </tbody>
 
</table>
<button type="submit" onclick="location.href='admin.php'">BACK</button>
</body>
</html>
