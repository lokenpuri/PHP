<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table border="1" width="200px">
	
<tr>
	<td>s.no</td>
	<td>name</td>
	<td>age</td>
</tr>

<tr>
	<td>1</td>
	<td>Ram</td>
	<td>22</td>
</tr>

<?php 

$a=$_POST['ini']; 
$b=$_POST['con'];

for($x=$a; $x<=$b; $x++) { 

	?>
<tr>
	<td>1</td>
	<td>Ram</td>
	<td>22</td>
</tr>

<?php
}
 ?>

</table>

</body>
</html>
