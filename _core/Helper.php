<?php 

function dump($var){
    echo '<br> __________dump__________';
    // if(is_array($var)){
    //     foreach ($var as $v){
    //         echo '<pre>';
    //         print_r($v);
    //         echo '</pre>';
    //     }
    // }
    // else{
        echo '<pre>';
        print_r($var);
        echo '</pre>';
    // }
    echo '------------------------------------<br>';
}

function path($root){
    return ROOTPATH.$root;
}

function style($style){
    return SERVER_ROUTE."View/_style/".$style;
}



?>