<?php
/*
object
class
__construct
__destruct
*/

class feel{
	var $pi;
	var $py;
	var $fe;
	function __construct($a='I',$b='hate',$c='you')
	{
		$this->pi=$a;
		$this->fe=$b;
		$this->py=$c;
		echo $this->pi.'-'.$this->fe.'-'.$this->py.'<br />';
	}

	function change(){
		$this->fe='have no feeling with';
		echo $this->pi.'--'.$this->fe.'--'.$this->py.'<br />';
	}

	function __destruct(){
		$this->fe='love';
		echo $this->pi.'---'.$this->fe.'---'.$this->py.'<br />';
	}
}

$play=new feel();//I-hate-you
$play=new feel('you');//you-hate-you,I---love---you,force to close up one
$play->pi='who';
$play->change();//who--have no feeling with--you
$play=7;//who---love---you,force to close
echo "<pre>";
var_dump($play=new feel('we','know','them'));//1.we-know-them,2.var_dump-#2
$play=null;//we---love---them,force to close
$play=new feel();//I-hate-you
$play->change();//I--have no feeling with--you
echo "</pre>";
//I---love---you,__destruct acts at the very last
?>
