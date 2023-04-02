<?php
$dsn = 'mysql:host=localhost;dbname=colegzjq_comisionvendedor';
$username = 'colegzjq_comisionvendedor';
$password = 'sunm1cr0$$$'; 
$db = new PDO($dsn, $username, $password);
$db->exec("set names utf8");
?>