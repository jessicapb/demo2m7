<?php
//controlador home
require MODS . '/home.php';
$db=connectMysql($dsn,$dbuser,$dbpassword);
$sql="SELECT * FROM books";
$stmt=$db->prepare($sql);
$stmt->execute();
$books = $stmt->fetchAll();
var_dump($books);
die;

require VIEWS . '/home.view.php';