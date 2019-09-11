<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



function cast_styles()
{
	if(isset($GLOBALS['styles'])){
		if(is_array($GLOBALS['styles'])){
			foreach($GLOBALS['styles'] as $row => $value){
				echo "<link href=".$value." rel='stylesheet' type='text/css'>\n\t";
			}
		}else{
			echo "<link href=".$GLOBALS['styles']." rel='stylesheet' type='text/css'>";
		}	
	}
}

function cast_scripts()
{
	if(isset($GLOBALS['scripts'])){
		if(is_array($GLOBALS['scripts'])){
			foreach($GLOBALS['scripts'] as $row => $value){
				echo "<script src=".$value."></script>\n\t";
			}
		}else{
			echo "<script src=".$GLOBALS['scripts']."></script>";
		}	
	}
}