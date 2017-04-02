<?php 

// $names = [
// 	'fname'	=>	'Ram',
// 	'lname'	=>	'Timsina'
// ];

// foreach($names as $in=>$n)
// {
// 	echo '<br>';
// 	echo $in . ': ' . $n;
// }

// die;

// $a = array('sdfds');

// echo is_array($a);

// die;



$circle = array(
	'childhood'		=>	array(
			array(
				'fname'			=>	'Ram',
				'lname'			=>	'Pandit',
				'location'		=>	array(
						'city'		=>	'Ktm',
						'country'	=>	'Nepal',
						'address'	=>	array(
								'street'	=>	'Aloknagar',
								'block'		=>	99,
								'latitude'	=>	100,
								'longitude'	=>	999
							)
					),
				'profession'	=>	'Doctor'	
			),
			array(
				'fname'			=>	'Shyam',
				'lname'			=>	'Gubaju',
				'location'		=>	array(
						'city'		=>	'Ktm',
						'country'	=>	'Nepal',
						'address'	=>	array(
								'street'	=>	'Aloknagar1',
								'block'		=>	88,
								'latitude'	=>	10000,
								'longitude'	=>	9999
							)
					),
				'profession'	=>	'Doctor'
				),
			array(
				'fname'			=>	'Hari',
				'lname'			=>	'gautam',
				'location'		=>	array(
						'city'		=>	'Ktm',
						'country'	=>	'Nepal',
						'address'	=>	array(
								'street'	=>	'Aloknagar',
								'block'		=>	99,
								'latitude'	=>	100,
								'longitude'	=>	999
							)
					),
				'profession'	=>	'Engineer'
			)
		),
	'college'		=>	array(
			array(
				'fname'			=>	'Rtaam',
				'lname'			=>	'Pandit',
				'location'		=>	array(
						'city'		=>	'Ktm',
						'country'	=>	'Nepal',
						'address'	=>	array(
								'street'	=>	'Aloknagar',
								'block'		=>	99,
							)
					),
				'profession'	=>	'Doctor'
			),
			array(
				'fname'			=>	'Gita',
				'lname'			=>	'Pandit',
				'location'		=>	array(
						'city'		=>	'Ktm',
						'country'	=>	'Nepal'
					),
				'profession'	=>	'Hawaldar'
			)
		),
	'professional'	=>	array(
			array(
				'fname'			=>	'E balaguru',
				'lname'			=>	'Sami',
				'location'		=>	array(
						'city'		=>	'Mumbai',
						'country'	=>	'India',
						'address'	=>	'Andheri Mumbai 808'
					),
				'profession'	=>	'Writer'
			)
		)
);

// echo '<pre>';
// print_r($circle);
// echo '</pre>';
?>

<center>
<table border="1" width="90%">
	<thead>
		<tr>
			<th>Sn</th>
			<th>Fname</th>
			<th>Lname</th>
			<th colspan="6">Location</th>
			<th>Profession</th>
		</tr>

		<tr>
			<th></th>
			<th></th>
			<th></th>
			<th>City</th>
			<th>Country</th>
			<th colspan="4">Address</th>
			<th></th>
		</tr>

		<tr>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th>Street</th>
			<th>Block</th>
			<th>Latitude</th>
			<th>Longitude</th>
			<th></th>
		</tr>
	</thead>

	<tbody>
	<?php $sn = 1;?>
	<?php foreach($circle as $cir=>$c) { ?>
		<tr>
			<td colspan="10"><strong>Circle: <?php echo ucfirst($cir);?></strong></td>
		</tr>


	
		<?php foreach($c as $cc) { ?>
			<tr>
				<td><?php echo $sn++;?></td>
				<td><?php echo $cc['fname'];?></td>
				<td><?php echo $cc['lname'];?></td>
				<td><?php echo $cc['location']['city'];?></td>
				<td><?php echo $cc['location']['country'];?></td>

				<?php 
				if(!isset($cc['location']['address'])) {
					?>
					<td colspan="4">---</td>
					<?php
				} else { 
				?>

					<?php if(is_array($cc['location']['address'])) {?>

					<td><?php 
					   if (isset($cc['location']['address']['street'])) {
					   		echo $cc['location']['address']['street'];
					   } else {
					   	echo '---';
					   }
						?>
					</td>
					<td>
						<?php 
					   if (isset($cc['location']['address']['block'])) {
					   		echo $cc['location']['address']['block'];
					   } else {
					   	echo '---';
					   }
						?>
					</td>
					<td>Lat</td>
					<td>Lon</td>

					<?php } else {  ?>
					<td colspan="4"><?php echo $cc['location']['address']?></td>
					<?php } ?>

					<?php } ?>
				<td><?php echo $cc['profession'];?></td>
			</tr>
		<?php } ?>

		<tr><td colspan="10">&nbsp;</td></tr>

	<?php } ?>


	</tbody>


	
</table>
</center>