<?php

//necesito query
$id=$_REQUEST['id'];
//sacar datos del libro id
$db=connectMysql($dsn,$dbuser,$dbpassword);
$book=query($db,"SELECT * FROM books WHERE id={$id}");
dd($book);