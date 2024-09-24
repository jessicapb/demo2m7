<?php
    require 'config.php';
    function router($url,$routes){
        if(in_array($url,$routes)){
            return $url;
        }
        return "home";
    }
    $url = $_SERVER["REQUEST_URI"];
    $path=parse_url($url)['path'];
    //$query=parse_url($url)['query'];
    //var_dump($path,$query);
    $path=explode("/",$path);
    //var_dump($path);
    $uri=array_filter($path,function($item){
        if($item!=""){
            return $item;
        }
    });
    $uri=array_values($uri);
    $contr=router($uri[0],$routes);
    var_dump($contr);
    //require CONTR.'add.php';