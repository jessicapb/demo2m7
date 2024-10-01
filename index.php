<?php
    require 'config.php';
    require 'helper.php';
    require 'src/database.php';
    
    //$db=connectSqlite($dbname);
    //var_dump($db);
    

    $controller=router($routes);
    require CONTR.'/'.$controller.'.php';
    
?>