<?php
	$lang = $_SESSION['lang'];
	if($lang == 'pt'){
		require "lang/pt.php";
	}

	if($lang == 'en'){
		require "lang/en.php";
	}

	if($lang == 'cs'){
		require "lang/cz.php";
	}

?>
