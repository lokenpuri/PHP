<?php 
$colors = array("red", "green","blue","yellow");

foreach ($colors as $value) {
	echo "$value <br>";
	
}

echo"<br>";

?>
<?php
$color =array('red','green','blue','yellow');
foreach ($color as $value) {
	echo "<table border='1' width='500px'>
	<tr>
	<td> $value </td>
	</tr>
	</table>";
}
?>



<?php 


$movie = array("title" => "Rear Window",
				"director" => "Alfred Hitchcock",
				"year" => 1954,
				"minutes" => 112 );

 
 echo"<dl>";

 foreach ($movie as $key => $value) {
 echo "<dt>$key: </dt>";
 echo "<dd>$value</dd>";	# code...
 }

 echo "<dl>";
 ?>