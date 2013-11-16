<?php 
	
ini_set('display_errors','off');
ini_set('date.timezone', 'America/Mexico_City');
error_reporting(E_ALL ^ E_NOTICE);

class Index
{
	public $dataFile = "index.js";

	function __construct()
	{
		if (isset($_POST['index'])) {
			echo 'post [save_item]';
		} elseif (isset($_GET['index'])) {
			$this->get_index();
		} else {
			if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
				$uri = 'https://';
			} else {
				$uri = 'http://';
			}
			$uri .= $_SERVER['HTTP_HOST'];
			header('Location: '.$uri.'/index/index.html');
	exit;
		}
		
	}

	public function save_index()
	{
		if (isset($_POST['index']) && $_POST['index'] != "") {
			file_put_contents($this->dataFile, data);
		}
	}

	public function get_index(){
		if (isset($_GET['index'])) {
			echo file_get_contents($this->dataFile);	
		}
	}
}

$app = new Index();