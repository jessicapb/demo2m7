<?php
    require 'config.php';
    require 'helper.php';
    require 'src/database.php';
    $db=connectMysql($dsn,$dbuser,$dbpassword);
    //$db=connectSqlite($dbname);


    $controller=router($routes);
    require CONTR.'/'.$controller.'.php';
    
?>