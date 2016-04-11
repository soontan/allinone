<?php
//注释后浏览器也成功解析了
header("content-type:image/jpeg");
//输出后下文图片乱码，猜测有输出所以文件自动转为二进制文件后变乱码
/*
$imageinfo=getimagesize('1.jpg');
echo "<pre>";
print_r($imageinfo);
echo "</pre>";
$img=imagecreatefromjpeg('1.jpg');
echo imagesx($img).'x'.imagesy($img).'<br />';
*/
$imgjpeg=imagecreate(600,500);
$imgjpeg=imagecreatetruecolor(500,500);
//真彩色图片颜色无法像调色板直接显示
$color1=imagecolorallocate($imgjpeg,0,75,0);
$color2=imagecolorallocate($imgjpeg,255,255,0);
//真彩色需填充,坐标-相邻所有相同色素点均改变
imagefill($imgjpeg,0,0,$color1);
//imagefill($imgjpeg,30,30,$color2);

for ($i=1;$i<=30;$i++) {
	$x1=mt_rand(0,500);
	$y1=mt_rand(0,500);
	$x2=mt_rand(0,500);
	$y2=mt_rand(0,500);
	$color3=imagecolorallocate($imgjpeg,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
	imageline($imgjpeg,$x1,$y1,$x2,$y2,$color3);
	$x1=mt_rand(0,500);
	//$y1=mt_rand(0,500);
	//$x2=mt_rand(0,500);
	$y2=mt_rand(0,500);
	imagedashedline($imgjpeg,$x1,$y1,$x2,$y2,$color3);
}

for ($i=0;$i<=500;$i++) { 
	imagesetpixel($imgjpeg,$i,mt_rand(0,$i),$color2);
}

imagerectangle($imgjpeg,100,100,400,400,$color2);

//显示图片
imagejpeg($imgjpeg);
//释放资源
imagedestroy($imgjpeg);
?>
