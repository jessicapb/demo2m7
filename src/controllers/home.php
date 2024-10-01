<?php

require MODS.'/home.php';

$db=connectMysql($dsn,$dbuser,$dbpassword);
$sql="SELECT * FROM books";
$stmt=$db->prepare($sql);
$stmt->execute();
$books = $stmt->fetchAll();

//dd($books);
require VIEWS.'/home.view.php';

