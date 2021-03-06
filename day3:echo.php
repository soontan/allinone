<?php
/*
PHP共有8中数据类型

四种标量类型：
string（字符串）
integer（整型）
float（浮点型）
boolean（布尔型）

两种复合类型：
array（数组）
object（对象）$obj=new person();

两种特殊类型：
resource（资源）
NULL（空）

php输出打印

echo 不返回值
print 返回0或1
print_r 数组
printf 格式化输出
sprintf 赋值
var_dump 类型和内容
*/

$a=1;
$b='hao';
$c=array('key0'=>2,'key1'=>'abc','xxxzzz');
$d='12345';
$e="1234567";
$f=1.777;
$g=null;
$h=true;
$i=$b.$e;//.connected
$j=$b+$d;//not added

echo "<pre>";//pre output in lines

echo $a,'<br />',$b,'<br />',$c,'<br />',$d,'<br />',$e,'<br />',$f,'<br />',$h,'<br />';//$c-array,$h-1
echo $g,'<br />';//no result

echo $c['0'],'<br />';//xxxzzz
echo $c[0],'<br />';//xxxzzz
echo $c['key1'],'<br />';//abc
echo $c[key1],'<br />';//abc,error notice-assumed key
echo $c["key1"],'<br />';//abc

define('yyy','key1');

echo $c['yyy'],'<br />';//error notice-undefinded index-yyy
echo $c[yyy],'<br />';//abc
echo $c["yyy"],'<br />';//error notice-undefinded index-yyy

var_dump($a,$b,$c,$d,$e,$f,$g,$h);
echo '<br />';
var_dump($g);//null
echo '<br />';

echo $i,'<br />';
var_dump($i);
echo '<br />';
echo $j,'<br />';
var_dump($j);
echo '<br />';

print $a;//print $a,$b;-prase error
echo '<br />';
print $c;//array
echo '<br />';

print_r($c);
echo '<br />';
print_r($b);//hao
echo '<br />';
print_r($h);//1
echo '<br />';

$res=print_r($c,true);//no result
echo $res;//$c

echo '</pre>';
?>
