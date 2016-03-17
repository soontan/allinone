<?php
$solid=array('s'=>'scissor','r'=>'rock','p'=>'paper');
$com=NULL;
$result=NULL;
if(!empty($_GET['choice'])){
$com=$_GET['choice'];
}else{
	$result='you should choose one above!';
}
$act=array_rand($solid);
function play($act,$com){
global $result;
switch ($com) {
	case 'scissor':
		if($act=='s'){
			$result='draw this time.';
		}elseif($act=='r') {
			$result='you lose!';
		}else{
			$result='you win!';
		}
		break;
	case 'rock':
		if($act=='r'){
			$result='draw this time.';
		}elseif($act=='p') {
			$result='you lose!';
		}else{
			$result='you win!';
		}
		break;
	case 'paper':
		if($act=='p'){
			$result='draw this time.';
		}elseif($act=='s') {
			$result='you lose!';
		}else{
			$result='you win!';
		}
		break;
}
}
play($act,$com);
?>
<!DOCTYPE html>
<html>
<head>
	<title>srp-game</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<style type="text/css">
	td{text-align:center;}
	</style>
</head>
<body>
	<form action="1.php" method="GET">
		<table align="center" border="2" width="70%">
		<caption>THE SIMPLE SRP GAME</caption>
			<tr>
				<td>
					please choose one
				</td>
				<td>
					<input type="submit" name="choice" value="scissor"><br />
					<input type="submit" name="choice" value="rock"><br />
					<input type="submit" name="choice" value="paper"><br />
				</td>
			</tr>
			<tr>
				<td colspan="2">the computer chosed <?php echo $solid["$act"].' and '.$result ?></td>
			</tr>
		</table>
	</form>
</body>
</html>