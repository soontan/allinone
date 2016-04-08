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
$imgjpeg=imagecreatetruecolor(400,300);
//真彩色图片颜色无法像调色板直接显示
$color1=imagecolorallocate($imgjpeg,0,75,0);
//$color2=imagecolorallocate($imgjpeg,0,0,255);
//真彩色需填充,坐标未搞清楚
imagefill($imgjpeg,0,0,$color1);
//imagefill($imgjpeg,30,30,$color2);
//显示图片
imagejpeg($imgjpeg);
//释放资源
imagedestroy($imgjpeg);
?>