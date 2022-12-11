<?php

class Route{
    private static $status= false;

    public static function request($url,$controller,$method){
        if(URL==$url && method_exists($controller,$method) && !self::$status){
            self::$status = true ;
            call_user_func([new $controller(new Etudiant(),new Parcour()),$method]);
        }

    }
    public static function get($url,$controller,$method){
        if(URL_METHOD=="GET" ){
            static::request($url,$controller,$method);
        }
    }
    public static function post($url,$controller,$method){
        if(URL_METHOD=="POST"){
            static::request($url,$controller,$method);
        }
    }

    

}
?>