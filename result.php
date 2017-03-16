

<?php 

/*if(isset($_POST['Login'])){

$username = $_POST['username'];
$password = $_POST['password'];

if($username=='admin' && $password=='admin'){

	echo "Login success";
}

else{

	echo "Failed to login";
}

$SUB = $username - $password;
	$MUL = $username * $password;

} */

if(isset($_POST['ADD'])){

	$username = $_POST['username'];
	$password = $_POST['password'];

	$ADD = $username + $password;
	
	echo "the sum is: $ADD";

}
if(isset($_POST['SUB'])){

	$username = $_POST['username'];
	$password = $_POST['password'];

	$SUB = $username - $password;
	
	echo "the diff is: $SUB";

}
if(isset($_POST['MUL'])){

	$username = $_POST['username'];
	$password = $_POST['password'];

	$MUL = $username * $password;
	
	echo "the mul is: $MUL";

}



 ?>
 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="calculator.php">
	<br>
<input type="submit" name="" value="GO BACK">

</form>
</body>
</html>