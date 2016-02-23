<?php
/*
array
foreach
reset();next();prev();end();current();key();
*****array func 1键值2计数3回调作用4排序5加减改造6堆栈队列
*/
$a=array('5'=>5,6,7,'one'=>'str',$b=array(11,12,array(13,14)));
define('ttt','sss');
$c[]=31;
$c[3]='str3';
$c['f']='str4';
$c[]=34;
$c['ttt']='ttt';
$c['sss']='sss';

echo '<pre>';

print_r($a);
print_r($b);
print_r($c);
echo $c['ttt'].'<br />';//ttt
echo $c[ttt].'<br />';//sss

echo '</pre>';

foreach ($a as $keya=>$vala) {
	echo 'this is the first time printing--'.$keya.'and'.$vala.'<br />';
	foreach($a[8] as $keyaa=>$valaa){
		echo 'this is the second time printing--'.$keyaa.'and'.$valaa.'<br />';
		foreach($a[8][2] as $keyaaa=>$valaaa){//$valaa[2] doesn't work,array needed
			echo 'this is the third time printing--'.$keyaaa.'and'.$valaaa.'<br />';
		}
	}
}

$d=array('one'=>array(1=>array(11,22,33),2=>array(21,22,23)),'two'=>array(3=>array(31,32,33),4=>array(41,42,43)));
print_r($d);
echo '<br />';
foreach ($d as $keya=>$vala) {
	echo 'this is the first time printing--'.$keya.'and'.$vala.'<br />';
	foreach($vala as $keyaa=>$valaa){
		echo 'this is the second time printing--'.$keyaa.'and'.$valaa.'<br />';
		foreach($valaa as $keyaaa=>$valaaa){
			echo 'this is the third time printing--'.$keyaaa.'and'.$valaaa.'<br />';
		}
	}
}

$e=array('id'=>'idn','user'=>'usern','post'=>'postid');
print_r($e);
echo '<br />';
//each()-get key=>val once a time ,1 and value as val ,0 and key as key，when all be done return false
//list()-用数组给变量赋值，仅限数组索引数据，key由小到大
echo key($e).'--is--'.current($e),'00000<br />';
while(list($keye,$vale)=each($e)){
	echo $keye.'=>'.$vale.'<br />';
}
echo key($e).'--is--'.current($e).'11111<br />';
while(list($keye,$vale)=each($e)){//doesn't work once again
	echo $keye.'=>'.$vale.'<br />';
}
print_r($e);
echo '<br />';

reset($e);
echo key($e).'--is--'.current($e).'22222<br />';
while(list($keye,$vale)=each($e)){
	echo $keye.'=>'.$vale.'<br />';
}
print_r($e);
echo '<br />';

reset($e);
next($e);
echo key($e).'--is--'.current($e).'33333<br />';
while(list($keye,$vale)=each($e)){
	echo $keye.'=>'.$vale.'<br />';
}
print_r($e);
echo '<br />';

reset($e);
next($e);
prev($e);
echo key($e).'--is--'.current($e).'44444<br />';
while(list($keye,$vale)=each($e)){
	echo $keye.'=>'.$vale.'<br />';
}
print_r($e);
echo '<br />';


end($e);
echo key($e).'--is--'.current($e).'55555<br />';
while(list($keye,$vale)=each($e)){
	echo $keye.'=>'.$vale.'<br />';
}
print_r($e);
echo '<br />';
prev($e);//the last one doesn't work
echo key($e).'--is--'.current($e).'55555<br />';
?>