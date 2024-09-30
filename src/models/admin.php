<?php
    $books=[
        [
            'id'=>1,
            'author'=>'John Fitti',
            'title'=>'Clean code',
            'year'=>1998
        ],
        [
            'id'=>2,
            'author'=>'John Paldi',
            'title'=>'Mess code',
            'year'=>2005
        ],
        [
            'id'=>3,
            'author'=>'Peter Pank',
            'title'=>'Node jes de comer',
            'year'=>2024
            ]
            
    ];

    function filter($items,$key,$value){
        $filtered=[];
        foreach($items as $item){
            if($item[$key]===$value){
                $filtered[]=$item;
            }
        }
        return $filtered;
    }
    $items=$books;