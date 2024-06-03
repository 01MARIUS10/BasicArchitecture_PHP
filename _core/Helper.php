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



function requireAllIn($directoryPath){
    $files = scandir($directoryPath);

    foreach ($files as $file) {
        // Filtrer uniquement les fichiers.php
        if (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
            // Construit le chemin complet du fichier
            $filePath = $directoryPath. '/'. $file;
            
            // Charge le fichier
            require_once $filePath;
        }
    }
}




?>