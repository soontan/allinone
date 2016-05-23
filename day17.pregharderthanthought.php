<?php
//[]()数组多结果及多层结果多重匹配

$str='http://soontan.org/';
$preg='/[a-z]*:\/\/[a-z]*\.[a-z]*\//';

if (preg_match_all($preg,$str,$arr)) {
	echo '1<pre>';
	print_r($arr);
	$new=preg_replace('/\.[a-z]*/','.info',$str);
	echo $new;
}else{
	echo '0';
}
echo "<br />";

$preg0='/(.*)([^0-9a-z]*)(.*)(\.)(.*)/';
preg_match_all($preg0,$str,$arr0);
print_r($arr0);

echo "<br />";

$preg1='/(.*)([^0-9a-z]*)(.*)(\.)(.*)/';
preg_match($preg1,$str,$arr1);
print_r($arr1);

?>
