
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	//index 
/*$name = array('Ram', 101, 'sita', 102);


echo "<pre>";
var_dump($name); #shows datatype 
echo "</pre>";
?>
<br>
<table border="1" width="400px">
	<tr>
		
		<td><?php echo $name[0] ?></td>
		<td><?php echo $name[1] ?></td>
	</tr>
	<tr>
	
		<td><?php echo $name[2] ?></td>
		<td><?php echo $name[3] ?></td>
	</tr>

</table>
<br>
<?php
define ('MESSAGE',"hello world!!"); #this is a constant defined
echo MESSAGE;

*/
?>




<?php 
	
	echo "******Student******";
	echo "<br><br>";
	$info = array(
		array('math'=>80, 'phy'=>35, 'chem'=>45),
		array('math'=>80, 'phy'=>35, 'chem'=>45),
		array('math'=>80, 'phy'=>35, 'chem'=>45)
		);
		

 ?>


 <table border="1" width="200px">
<tr>
	<td>Name</td>
	<td>Math</td>
	<td>Phy</td>
	<td>Chem</td>


</tr>
<tr>
	<td>Ram</td>
	<td><?php echo @$info[0][math] ?></td>
	<td><?php echo @$info[0][phy] ?></td>
	<td><?php echo @$info[0][chem] ?></td>

</tr>
<tr>
	<td>Sita</td>
	<td><?php echo @$info[1][math] ?></td>
	<td><?php echo @$info[1][phy] ?></td>
	<td><?php echo @$info[1][chem] ?></td>

</tr>
<tr>
	<td>Gita</td>
	<td><?php echo @$info[2][math] ?></td>
	<td><?php echo @$info[2][phy] ?></td>
	<td><?php echo @$info[2][chem] ?></td>

</tr>


</table>


<br>

<?php 

$student = array(
				array('rollno'=>1, 'address'=>'KTM'),
				array('rollno'=>2, 'address'=>array('Bkt','pkr'))
	);

echo "**********Information of the students************";
echo "<br>";
echo "<br>";

 ?>

<table border="1" width="400px">
		<tr>
			<td>Name</td>
			<td>Roll no</td>
			<td colspan="2">Address</td>
		</tr>

		<tr>
			<td>Ram</td>
			<td><?php echo @$student[0]['rollno'] ?></td>
			<td colspan="2"><?php echo @$student[0]['address'] ?></td>
		</tr>

		<tr>
			<td>Sita</td>
			<td><?php echo @$student[1]['rollno'] ?></td>
			
				
					
						<td><?php echo @$student[1][address][0] ?></td>
						<td><?php echo @$student[1][address][1] ?></td>

		</tr>	

</table>






</body>
</html>
