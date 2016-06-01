<?php
echo __FILE__.'<br />';
echo basename(__FILE__).'<br />';
echo basename(__FILE__,'.php').'<br />';
echo dirname(__FILE__).'<br />';
echo trim(strrchr(__FILE__,'\\'),'\\').'<br />';

echo round(disk_total_space('.')/pow(1024,3),2).'<br />';
echo round(disk_free_space('/')/pow(1024,3),2).'<br />';

if(file_exists('appserv')){
	echo 'yyyyyyyyyyyyyyyyyyyy<br />';
}else{
	echo 'not exist<br />';
}

echo getcwd().'<br />';
chdir('appserv');
echo getcwd().'<br />';
chdir('..');
echo getcwd().'<br />';
chdir('..');
echo getcwd().'<br />';
//'/','\'both work
chdir('www/appserv');
echo getcwd().'<br />';
chdir('..');
echo getcwd().'<br />';

$dircon=scandir('.');
echo '<pre>';
print_r($dircon);
echo '</pre>';

function scandpt($dir){
	$dirarr=scandir($dir);
	foreach($dirarr as $doc){
		if($doc!='..' && $doc!='.'){
			$dirch=$dir.'\\'.$doc;
			echo $dirch.'<br />';
			if(is_dir($dirch)){
				scandpt($dirch);
			}
		}
	}
}
scandpt('.');
?>