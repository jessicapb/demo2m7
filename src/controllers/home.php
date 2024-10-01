<?php

require MODS.'/home.php';
require VIEWS.'/home.view.php';

$db=connectMysql($dsn,$dbuser,$dbpassword);
$sql="SELECT * FROM books";
$stmt=$db->prepare($sql);
$stmt->execute();
$books = $stmt->fetchAll();
var_dump($books);
die;

