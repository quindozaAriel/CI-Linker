<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class MY_Controller extends CI_Controller 
{
	protected $style_tags  = "";
	protected $script_tags = "";
	public function __construct()
	{
		parent::__construct();

		if (file_exists(APPPATH.'tags/tags.php'))
		{
			include(APPPATH.'tags/tags.php');
		}
		
		$this->style_tags  = $style_tags;
		$this->script_tags = $script_tags;
	}

	/*
		CI LINKER 
	*/
	public function include_style($tagName)
	{
		if(!empty($this->style_tags)){
			$_data       = [];
			$_return     = [];
			if(is_array($tagName)){
				$GLOBALS['styles'] = [];
				foreach($tagName as $row){
					foreach($this->style_tags as $datas => $values){
						if($datas == $row){
							$GLOBALS['styles'][] = $values;
						}
					}
				}
			}else{
				$GLOBALS['styles'] = "";
				foreach($this->style_tags as $index => $value){
					if($index == $tagName){
						$GLOBALS['styles'] = $value;
					}
				}
			}
		}else{
			return "No style declared.";
		}
	}

	public function include_script($tagName)
	{
		if(!empty($this->script_tags)){
			$_data       = [];
			$_return     = [];
			if(is_array($tagName)){
				$GLOBALS['scripts'] = [];
				foreach($tagName as $row){
					foreach($this->script_tags as $datas => $values){
						if($datas == $row){
							$GLOBALS['scripts'][] = $values;
						}
					}
				}
			}else{
				$GLOBALS['scripts'] = "";
				foreach($this->script_tags as $index => $value){
					if($index == $tagName){
						$GLOBALS['scripts'] = $value;
					}
				}
			}
		}else{
			return "No script declared.";
		}
	}
	/*
		CI LINKER
	*/
}