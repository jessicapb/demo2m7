<?php
    //constantes
    define('VIEWS',__DIR__.'/src/views');
    define('CONTR',__DIR__.'/src/controllers');
    define('MODS',__DIR__.'/src/models');

    //DNS
    $dbhost = 'localhost';
    $dbname = 'demo';
    $dbuser = 'demo2';
    $dbpassword = 'linuxlinux';
    $dsn = 'mysql:host=' . $dbhost. ';dbname=' . $dbname;
    //var_dump($dsn);

    //routes
    $routes=[
        'home',
        'add',
        'admin',
        'add-book',
        'delete',
        'edit'
    ];
?>