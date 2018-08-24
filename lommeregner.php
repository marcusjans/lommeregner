<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	
	<h1>Lommeregnerens lommeregner</h1>
	
<div>
	
	<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
		
		<input type="text" name="val1" placeholder="Skriv et tal" required><br><br>
		<button type="submit" name="operator" value="add">+</button>
		<button type="submit" name="operator" value="sub">-</button>
		<button type="submit" name="operator" value="mul">x</button>
		<button type="submit" name="operator" value="div">/</button><br><br>
		<input type="text" name="val2" placeholder="Skriv et tal" required><br><br>
		
	</form>	
	
	<?php
	
	//	$v1 = $_GET['val1'];
	//	$v2 = $_GET['val2'];
	
	// filter er for at begrænse input til kun "numbers", så man ikke kan skrive bogstaver.
	
		$v1 = filter_input(INPUT_GET, 'val1', FILTER_VALIDATE_INT) or die('missing or illegal val1 parameter');
		$v2 = filter_input(INPUT_GET, 'val2', FILTER_VALIDATE_INT) or die('missing or illegal val1 parameter');
		$op = $_GET['operator'];
		  
		  
		 
		switch($op){
			case 'add':
				$res = $v1+$v2;
				$opchar = '+';
				break;
			case 'sub':
				$res = $v1-$v2;
				$opchar = '-';
				break;
			case 'mul':
				$res = $v1*$v2;
				$opchar = 'x';
				break;
			case 'div':
				$res = $v1/$v2;
				$opchar = '/';
				break;
			default:
				echo $res = 'Unknown operator "'.$op.'"';
				break;
		}
		
		echo $v1.''.$opchar.''.$v2.' = '.$res;
	?>
</div>
</body>
</html>