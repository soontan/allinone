<?php
$a=1;
$b=345;

//算术 + - * / % ++ --
echo $a;//1
echo'<br />';
$a++;
echo $a;//2
echo'<br />';

//字符串 .
$c=$a.$b;
echo $c;
echo'<br />';

//赋值 = += -= *= /= %= .=
$a.=345;//$a=$a.345;
echo $a;//2345
echo'<br />';
$a=&$b;
echo $a;
echo'<br />';
echo $b;
echo'<br />';
$b=111;
echo $a;
echo'<br />';
$a=222;
echo $b;
echo'<br />';
unset($b);

//比较 > < >= <= == === != <> !==

//逻辑 && and || or ! not
var_dump(true && true);
echo'<br />';
var_dump(true && false);
echo'<br />';
var_dump(true || true);
echo'<br />';
var_dump(true || false);
echo'<br />';
var_dump(!true);
echo'<br />';
var_dump(true & $a++);//单数1，复数0-?
echo $a;//223
echo'<br />';
var_dump(true and false || true);//priority-&&-&-and-短路效果
echo'<br />';

//位 & | ^ ~ << >> >>>
$a=20;
$b=30;
$a&=$b;//二进制“位与”，$a=$a&$b;
echo $a;
echo'<br />';

//其他 ?: `` @ => -> :: & $

?>
