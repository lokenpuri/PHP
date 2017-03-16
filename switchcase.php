
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

$O = $_POST['operation'];

switch ($O) {
	case 'ADD':
		$n3 = $n1 + $n2;
		echo "the sum is: $n3";
		break;
	case 'SUB':
		$n3 = $n1 - $n2;
		echo "the diff is: $n3";
		break;
	case 'MUL':
		$n3 = $n1 * $n2;
		echo "the product is: $n3";
		break;
	case 'DIV':
		$n3 = $n1 / $n2;
		echo "the division is: $n3";
		break;
	
	default:
		echo "wrong seletcion";# code...
		break;
}

 ?>


 <form method="post" action="calculator.php">
 <br>
 	
<input type="submit" name="" value="Run Again">

 </form>
</body>
</html>


