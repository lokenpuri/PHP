<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
</head>
<body>

<?php 

	$persons = array(
					array('fname' => 'Ram',
						  'lname' => 'Karki',
						  'address' => 'suichatar, ktm, #8'
						  ),

					array('fname' => 'Sam',
							'lname' => 'Thapa',
							'address' => array(
									'location' => 'baneshwor',
									'city' =>'KTM',
									'street' => '#8'

								)

							)

				 	);

 ?>

 <table border="1" width="50%">
 	<tr>
 		<th>Fname</th>
 		<th>Lname</th>
 		<th colspan="3">Address</th>

 	</tr>
 	


 	<tr>
 		<td><?php echo $persons[0]['fname'] ?></td>
 		<td><?php echo $persons[0]['lname'] ?></td>
 		<td colspan="3"><?php echo $persons[0]['address'] ?></td>
 	</tr>
 	
 	<tr>
 		<td><?php echo $persons[1]['fname'] ?></td>
 		<td><?php echo $persons[1]['lname'] ?></td>
 		<td><?php echo $persons[1]['address']['location'] ?></td>
 		<td><?php echo $persons[1]['address']['city'] ?></td>
 		<td><?php echo $persons[1]['address']['street'] ?></td>

 	</tr>


 </table>

</body>
</html>