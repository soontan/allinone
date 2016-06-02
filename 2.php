<?php
$con=mysql_connect("localhost", "root", "1");
	
	if (!$con){
  		die('用户太多，请稍后再试。');
  	}

	mysql_select_db("testone",$con);

	$sql="SELECT * from hhh LIMIT 0,10";

	$datas=mysql_query($sql,$con);

	echo "<pre>";

	while($el=mysql_fetch_array($datas)){
		echo "$el[title]&nbsp&nbsp&nbsp&nbsp$el[name]的房间&nbsp&nbsp&nbsp&nbsp来源:$el[id]<hr />";
		echo 'wenzhanglaiyuan'.$el[0].'wenzhangmingcheng'.$el[1].'yonghushuliang'.$el[2].'<hr />';
		//error--echo 'wenzhanglaiyuan'.$el[].'wenzhangmingcheng'.$el[].'yonghushuliang'.$el[].'<hr />';
	};

mysql_close($con);

?>