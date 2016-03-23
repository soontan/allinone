<?php
if(empty($_GET['year']) || empty($_GET['month'])){
	$year=date('Y');
	$month=date('m');
}else{
	$year=$_GET['year'];
	$month=$_GET['month'];
}
//获取年月-notice error
//$year=$_GET['year']?$_GET['year']:date('Y');
//$month=$_GET['month']?$_GET['month']:date('m');
//获取所选月份天数
$numofdays=date('t',strtotime("$year-$month-1"));
//获取第一天是星期几
$numoffirst=date('w',strtotime("$year-$month-1"));
/*
32位系统php5.0版本后超出时间范围解决办法
$d="$year-$month-1";
$dd=new DateTime($d);
$dd->format('Y-m-d');
$numofdays=$dd->format('t');
$numoffirst=$dd->format('w');
*/
//echo $year.'--'.$month.'--'.$numofdays.'--'.$numoffirst;
?>
<!DOCTYPE html>
<html>
<head>
	<title>calendar</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<style type="text/css">
	th,td{width:10%;text-align:center;background-color:#cccccc;}
	</style>
</head>
<body>
	<h1 align="center"><?php echo $year.'年'.$month.'月' ?></h1>
	<table border="2px" align="center" width="70%">
		<tr>
			<th>Sunday</th>
			<th>Monday</th>
			<th>Tuesday</th>
			<th>Wednesday</th>
			<th>Thursday</th>
			<th>Friday</th>
			<th>Saturday</th>
		</tr>
<?php
for($i=1-$numoffirst;$i<=$numofdays;){
	echo '<tr>';
	for($j=1;$j<=7;$j++){
		if($i>=1 && $i<=$numofdays){
			echo '<td>'.$i.'</td>';
		}else{
			echo '<td></td>';
		}
		$i++;
	}
	echo '</tr>';
}
?>
	</table>
	<center><form action="1.php" method="GET">
		<input type="text" name="year" <?php echo 'value="'.$year.'"'?> />年
		<input type="text" name="month" <?php echo 'value="'.$month.'"'?> />月
		<input type="submit" value="submit">
	</form></center>
</body>
</html>
