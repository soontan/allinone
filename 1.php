<?php
//本机测试三位数四位数成功运行，五位及以上错误信息'错误码 101 (net::ERR_CONNECTION_RESET)'。
$tips='welcome!';
$start=0;
$pass=0;
$result=0;
//判断是否为空，赋值
if (empty($_GET['numzero'])) {
	$tips='please enter a number.';
}else{
	$start=$_GET['numzero'];
}
//自定义函数计算差值
function cal($start){
//转换为字符串
$startone=chunk_split($start,1,",");
//转换为数组
$arrone=explode(",",$startone,-1);
//数组排序并返回最大值和最小值
$big=0;
$lit=0;
global $pass;
global $result;
//不用全局最后if语句中return $pass;自定义函数外$result=cal($start);不成功
//return $big-$lit; 自定义函数外$pass=cal($start);可成功赋值
/*
<?php
function cal($start){
$startone=chunk_split($start,1,",");
$arrone=explode(",",$startone,-1);
$big=0;
$lit=0;
sort($arrone);
foreach ($arrone as $key=>$value){
	$big+=$value*pow(10,$key);
	$key++;
}
rsort($arrone);
foreach ($arrone as $key => $value){
	$lit+=$value*pow(10,$key);
	$key++;
}
return $big-$lit;
}
$pass=cal(675);			
echo $pass.'<br />';
?>
*/
sort($arrone);
foreach ($arrone as $key=>$value){
	$big+=$value*pow(10,$key);
	$key++;
}
rsort($arrone);
foreach ($arrone as $key => $value){
	$lit+=$value*pow(10,$key);
	$key++;
}
$pass=$big-$lit;
if($pass==$start){
	$result=$pass;
}else{
	cal($pass);
}
}

cal($start);
/*
echo $start.'<br />';
echo $result.'<br />';
//echo $startone.'<br />';
echo $big.'<br />';
echo $lit.'<br />';
echo $pass.'<br />';
echo '<pre>';
//print_r($arrone);
echo '</pre>';
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Kaprekar constant</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<style type="text/css">
	td {text-align:center;}
	</style>
</head>
<body>
	<table border="2px" align="center" width="70%">
		<form action="1.php" method="GET">
		<tr>
			<td>Kaprekar constant</td>
			<td>把一个多位（三位以上）整数的所有位数上的数字由大至小排列组成一个新数，又由小至大排列组成一个新数，这两个数相减，之后重复这个步骤，只要这个数字所有位数上的数字不完全相同，数字最终便会恒定为一个数字。</td>
		</tr>
		<tr>
			<td>请输入数字</td>
			<td><input type="text" name="numzero" /><br />tips:<?php echo $tips?></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="readygo" /></td>
		</tr>
		<tr>
			<td>result</td>
			<td><?php echo $result?></td>
		</tr>
		</form>
	</table>
</body>
</html>