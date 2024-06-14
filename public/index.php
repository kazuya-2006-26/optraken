<?php
    $url = $_SERVER['REQUEST_URI'];
    switch($url){
        case '':{ #uri keyword 
            include_once ''; #path to the file 
        }break;

        case '/beeldhouwen':{
            include_once __DIR__. '/../views/Beeldpage.php'; #path to the file
        }break;

        case '/home':{
            include_once __DIR__. '/../views/hpage.php'; #path to the file
        }break;

        case '/texel':{
            include_once __DIR__. '/../views/texel.php'; #path to the file
        }break;

        case '/frankrijk':{
            include_once __DIR__. '/../views/frankrijk.php'; #path to the file
        }break;

        case '/api/verhalen':{ #Niet veranderen is voor de verhalen API 
            include_once __DIR__. '/../pkg/IFrame-api.php';
        }break;
        
        default:{
            include_once __DIR__. '/../views/404.php'; #path to the home page
        }break;
    }
?>