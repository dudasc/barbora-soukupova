<?php
session_start();

if(isset($_GET['lang'])){
	$lang = $_GET['lang'];

	switch($lang){
		case 'pt':
			$_SESSION['lang'] = 'pt';
			break;
		case 'en':
			$_SESSION['lang'] = 'en';
			break;
		case 'cs':
		$_SESSION['lang'] = 'cs';
		break;
		default:
			$_SESSION['lang'] = 'cs';
	}
}

if(@$_SESSION['lang'] == null)
	$_SESSION['lang'] = 'cs';

include "lang.php";
?>