<?php

session_start();
if(!$_SESSION['email']){
	header ('Location:'.$r.'index.php');
	exit();
}

?>