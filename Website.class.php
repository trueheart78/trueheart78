<?php
class Website {
	private $pageTitle = "trueheart78.com";
	private $shortVersion = false;
	private $headerImage = "";
	private $page = "";
	private $isAjaxCall = false;
	
	function __construct(){
		if(stristr($_SERVER['SERVER_NAME'],'th78')){
			$this->shortVersion = true;
			$this->pageTitle = "th78.me";
			$this->headerImage = "header-th78.png";
		} else {
			$this->shortVersion = false;
			$this->pageTitle = "trueheart78.com";
			$this->headerImage = "header.png";
		}
		$this->isAjaxCall = (!empty($_GET['ajax']) || !empty($_GET['ajax']));
		$this->director();
	}
	private function director(){
		if(!$this->isAjaxCall){
			$this->startHTML();
			$this->drawHeader();
		}
		switch($this->page){
			default:
				//print "Welcome to {$this->pageTitle}";
				break;
		}
		if(!$this->isAjaxCall){
			$this->drawFooter();
			$this->endHTML();
		}
	}
	private function startHTML(){
		print "<!DOCTYPE html>
		<html><head><title>{$this->pageTitle}</title>
		<script src='//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js'></script>
		<script src='assets/site.js'></script>
		<link rel='stylesheet' type='text/css' href='assets/site.css'>
		</head>
		<body>";
		
	}
	private function drawHeader(){
		print "<div align='center'>
			<br><img src='images/{$this->headerImage}' alt=''>
		</div>";
		
	}
	private function drawFooter(){
		
	}
	private function endHTML(){
		print "</body></html>";
	}
}

?>