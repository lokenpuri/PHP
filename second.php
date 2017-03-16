<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>

<?php 
	$name1 = 'ram';
	$name2  = 'shyam';

	$roll1 = 101;
	$roll2 = 102; 
?>
<table border="1px" width="300px">
		<tr>
			<td>Name</td>
			<td>Roll no</td>

		</tr>

		<tr>
			<td><?php echo "$name1"; ?> </td>
			<td><?php echo "$roll1"; ?> </td>


		</tr>

		<tr>
			<td><?php echo "$name2"; ?> </td>
			<td><?php echo "$roll2"; ?> </td>


		</tr>




</table>
<?php
echo "<br>";
echo 'My name is '.$name1 .  ' My friend\'s name is ' .$name2;
echo "<br>";
echo "my friend is $name2";
?>

</body>
</html>