<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html> 

<!-- <head>
	<title>View Users</title>
</head> 

<body>
	<table border=1px>
 		<tr>
 			<th>Field</th>
 			<th>Contents</th>
 		</tr>
 		<tr>
 			<td>ID</td>
 			<td><?php echo $ID; ?></td>
 		</tr> 
 		<tr>
 			<td>Note</td>
 			<td><?php echo $Name; ?></td>
 		</tr> 
	</table> 
</body> -->
<head>
	<title>View Messages</title>
</head>

<body>
	<table border=1px>
		<tr>
			<th>ID</th>
			<th>Text</th>
			<th>Email</th>
		</tr>
		<?php foreach ($results as $row) {?>
  			<tr>
   				 <td><?php echo $row['id']; ?></td>
   				 <td><?php echo $row['text']; ?></td>
   				 <td><?php echo $row['email']; ?></td>
  			</tr>
		<?php } ?>


</html>
