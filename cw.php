<!DOCTYPE html>
<html>
<head>
	<title>
		<h3>Foreach loop</h3>
			
	</title>
</head>
<body>

<?php 

$persons = array(
				array(
				 'Fname' => 'Raja',
				 'Lname' => 'Babu',
				 'Address' => array(
				   		 'City' => 'Ktm',
				   		 'Country' => 'Nepal',
				   		 'Block' => '105'
				   		)	
				 ),

				 array(
				  'Fname' => 'Karishma',
				  'Lname' => 'Kapoor',
				  'Address' => 'India'

				 )

				);

 ?>

<table border="1" width="400px">
		<tr>
			<th>SN</th>
			<th>Fname</th>
			<th>Lname</th>
			<th colspan="3">Address</th>

		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<th>City</th>
			<th>Country</th>
			<th>Block</th>
		</tr>
<?php 
$SN = 1;
foreach ($persons as $p) { ?>

<tr>
	<td><?php echo $SN++ ?></td>
	<td><?php echo $p['Fname'] ?></td>
	<td><?php echo $p['Lname'] ?></td>

	<?php if(is_array($p['Address'])) { ?>
		<td><?php echo $p['Address']['City'] ?></td>
		<td><?php echo $p['Address']['Country']?></td>
		<td><?php echo $p['Address']['Block'] ?></td>

		<?php } 
		else {

		?>
		<td colspan="3"><?php echo $p['Address'] ?></td>

		<?php } ?>	
</tr>
<?php } ?>

</table>
<br><br>
<table border="1" width="400px">
			<tr>
			<th>SN</th>
			<th>Fname</th>
			<th>Lname</th>
			<th colspan="3">Address</th>

		</tr>

		<tr>
			<td></td>
			<td></td>
			<td></td>
			<th>City</th>
			<th>Country</th>
			<th>Block</th>
			

		</tr>

		<tr>
			<td>1</td>
			<td>Raja</td>
			<td>Babu</td>
			<td>Ktm</td>
			<td>Nepal</td>
			<td>105</td>
		</tr>

		<tr>
			<td>2</td>
			<td>Karishma</td>
			<td>Kapoor</td>
			<td colspan="3">India</td>
		</tr>
		
	</table>

</body>
</html>
