<?php
/*
while
do-while
for
return;(返回值)
exit;(后面代码不执行，退出程序)
break;(下面不执行，不继续循环)
continue;(下面不执行，继续下次循环)
*/

$n=1;
do{
	$n++;
	echo "###do the $n line here while###.<br />";
}while ($n<=10);

$n=1;
while ($n<=10) {
	echo "the $n line here.<br />";
	$n++;
}

/*
1*1=1 
1*2=2 2*2=4 
1*3=3 2*3=6 3*3=9 
1*4=4 2*4=8 3*4=12 4*4=16 
1*5=5 2*5=10 3*5=15 4*5=20 5*5=25 
1*6=6 2*6=12 3*6=18 4*6=24 5*6=30 6*6=36 
1*7=7 2*7=14 3*7=21 4*7=28 5*7=35 6*7=42 7*7=49 
1*8=8 2*8=16 3*8=24 4*8=32 5*8=40 6*8=48 7*8=56 8*8=64 
1*9=9 2*9=18 3*9=27 4*9=36 5*9=45 6*9=54 7*9=63 8*9=72 9*9=81
*/
for($a=1;$a<=9;$a++){
	for ($i=1;$i<=$a;$i++) { 
		echo $i,'*',$a,'=',($a*$i),'  ';
	}
	echo '<br />';
}
/*
1*1=1 
1*2=2 2*2=4 
1*3=3 2*3=6 3*3=9 
1*4=4 2*4=8 3*4=12 4*4=16 
1*5=5 2*5=10 3*5=15 4*5=20 
1*6=6 2*6=12 3*6=18 4*6=24 
1*7=7 2*7=14 3*7=21 4*7=28 
1*8=8 2*8=16 3*8=24 4*8=32 
1*9=9 2*9=18 3*9=27 4*9=36
*/
echo '<br />';
for($a=1;$a<=9;$a++){
	for ($i=1;$i<=$a;$i++) { 
		if ($i==5) {
			break;
		}
		echo $i,'*',$a,'=',($a*$i),'  ';
	}
	echo '<br />';
}
/*
1*1=1 
1*2=2 2*2=4 
1*3=3 2*3=6 3*3=9 
1*4=4 2*4=8 3*4=12 4*4=16 
1*5=5 2*5=10 3*5=15 4*5=20
(the last <br /> was not showing)
*/
echo '<br />';
for($a=1;$a<=9;$a++){
	for ($i=1;$i<=$a;$i++) { 
		if ($i==5) {
			break 2;
		}
		echo $i,'*',$a,'=',($a*$i),'  ';
	}
	echo '<br />';
}
/*
1*1=1 
1*2=2 2*2=4 
1*3=3 2*3=6 3*3=9 
1*4=4 2*4=8 3*4=12 4*4=16 
1*5=5 2*5=10 3*5=15 4*5=20 
1*6=6 2*6=12 3*6=18 4*6=24 6*6=36 
1*7=7 2*7=14 3*7=21 4*7=28 6*7=42 7*7=49 
1*8=8 2*8=16 3*8=24 4*8=32 6*8=48 7*8=56 8*8=64 
1*9=9 2*9=18 3*9=27 4*9=36 6*9=54 7*9=63 8*9=72 9*9=81
*/
echo '<br />';
for($a=1;$a<=9;$a++){
	for ($i=1;$i<=$a;$i++) { 
		if ($i==5) {
			continue;
		}
		echo $i,'*',$a,'=',($a*$i),'  ';
	}
	echo '<br />';
}
/*
1*1=1 
1*2=2 2*2=4 
1*3=3 2*3=6 3*3=9 
1*4=4 2*4=8 3*4=12 4*4=16 
1*5=5 2*5=10 3*5=15 4*5=20 1*6=6 2*6=12 3*6=18 4*6=24 1*7=7 2*7=14 3*7=21 4*7=28 1*8=8 2*8=16 3*8=24 4*8=32 1*9=9 2*9=18 3*9=27 4*9=36
*/
echo '<br />';
for($a=1;$a<=9;$a++){
	for ($i=1;$i<=$a;$i++) { 
		if ($i==5) {
			continue 2;
		}
		echo $i,'*',$a,'=',($a*$i),'  ';
	}
	echo '<br />';
}
?>