<?php
/*
if-elseif-else
switch-case-default..break..(continue)
*/
$a=$_GET['numone'];
$b=$_GET['numtwo'];
$c=$_GET['cal'];

print_r($_GET) ;

switch ($c) {
	case '+':
		$result=$a+$b;
		break;
	case '-':
		$result=$a-$b;
		break;
	case '*':
		$result=$a*$b;
		break;
	case '/':
		$result=$a/$b;
		break;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>四则运算</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
	<form action="1.php" method="GET">
		<input type="text" name="numone"/>
		<select name="cal">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
		</select>
		<input type="text" name="numtwo"/>
		<input type="submit" name="submit" value="计算" />
	</form>
	<?php echo '结果是:'.$result;?>
</body>
</html>
