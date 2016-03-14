<?php
/*
删除文件操作和指定删除内容待添加
*/
//下面三行屏蔽错误用……
$thefile=fopen('3.txt','a');
$content=null;
$txt=null;
if(!empty($_GET['txt'])){	
	$content=$_GET['txt'];
	$content.='<br />';
	fwrite($thefile,$content);
	fclose($thefile);
}
	//用fread，后面也需要文件名而不是handle，不如直接用FGC
	$txt=file_get_contents('3.txt');
?>
<!DOCTYPE html>
<html>
<head>
	<title>guestbook</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<style type="text/css">
	td{text-align:center;}
	</style>
</head>
<body>
	<table border="2px" align="center" width="70%">
		<form action="1.php" method="GET">
		<tr>
			<td colspan="2">guestbook</td>
		</tr>
		<tr>
			<td>please fill in</td>
			<td><textarea cols="100%" rows="5" name="txt"></textarea></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="readygo" /></td>
		</tr>
		<tr>
			<td>content</td>
			<td><?php echo $txt?></td>
		</tr>
		</form>
	</table>
</body>
</html>