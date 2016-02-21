<?php
/*
function(return)
global
static
*/

function sumadd($i,$j){
	return $i*$i+$j*$j;//return needed or NULL
}
echo sumadd(2,3).'<br />';
$name='sumadd';
echo $name(2,3).'<br />';
$name=sumadd;//notice error
echo $name(2,3).'<br />';

$a=5;
function addone($a){
	global $a;//functions after global acts;global in function acts(not for include and require)
	$a++;
}
addone($a);
echo $a.'<br />';
addone($a);
echo $a.'<br />';
addone($a);
echo $a.'<br />';

function quarter(){
	$b=1600;
	echo ($b/4).'<br />';
}
quarter();
quarter();
quarter();

function quarte(){
	static $b=1600;//$b=1600;static $b;--all 0 | static $b;$b=1600;--all 400
	$b=$b/4;
	echo $b.'<br />';
}
quarte();
quarte();
quarte();
quarte();
quarte();
$b=400;//no matter
quarte();
quarte(800);//no matter

/*
function differentthem($a,$b=4,&$c){//needed,not needed,modify
	func_get_args();//get all values
	func_num_args();//get number of values
	func_get_arg($i);//get the value with for or other requirements
}
*/

//内部函数-嵌套，递归函数，重用函数-函数库(require-static,include-dynamic)，系统函数-其他
function allback($i){
	echo $i.'<br />';
	if ($i>0)
		allback($i-1);//3210#0123-(--$i):3210#0012-($i--):endless loop
	else
		echo '#<br />';//if-else-default to the first ";"
	echo $i.'<br />'; 
}
allback(3);
?>