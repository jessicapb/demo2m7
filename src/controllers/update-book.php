<?php

    dd($_POST);
    if(!empty($_POST['title'])
        || !empty($_POST['author'])
        || !empty($_POST['year'])){
            $title=filter_input(INPUT_POST,'title');
            $author=filter_input(INPUT_POST,'author');
            $year=filter_input(INPUT_POST,'year');
            if(update($db,'books',[
                'title'=>$title,
                'author'=>$author,
                'year'=>$year
            ])){
                header('Location:admin');
            }else{
                header('Location:edit?id='.$book['id']);
            }
    }