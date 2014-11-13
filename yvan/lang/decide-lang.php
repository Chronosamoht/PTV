<?php 
if (!isset($_GET['lang'])){
    $lang = explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);
    $lang = strtolower(substr(chop($lang[0]),0,2));
} else {
    $lang=$_GET['lang'];
}

if ($lang=='en') { 
	include('lang/en-lang.php');
} else {
	include('lang/fr-lang.php'); 
}
?>
