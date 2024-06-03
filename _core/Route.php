<?php

class Route{
    private static $status= false;

    public static function request($url,$controller,$method,array $models = []){
        if(isset($url[1])){
            $params =  self::matchUrlAndExtractParams(URL,$url[0],$url[1]) ;
        }
        
        // print_r($params);
        if( $params && method_exists($controller,$method) && !self::$status){
            self::$status = true ;
            call_user_func([new $controller(...$models),$method],$params);
        }

    }
    public static function get($url,$controller,$method,array $models = []){
        if(URL_METHOD=="GET" ){
            static::request($url,$controller,$method,$models);
        }
    }
    public static function post($url,$controller,$method,array $models = []){
        if(URL_METHOD=="POST"){
            static::request($url,$controller,$method,$models);
        }
    }
    public static function matchUrlAndExtractParams($urlSpecifique, $motifDeRoute,$cle) {
        $pattern = str_replace('{'.$cle.'}', '(?P<'.$cle.'>[^/]+)', $motifDeRoute); 
        
        if (preg_match("#^{$pattern}$#", $urlSpecifique, $matches)) {
            $params = [];
            foreach ($matches as $key => $value) {
                if (!is_int($key)) { 
                    $params[strtolower(str_replace('(', '', $key))] = $value;
                }
            }
            return $params;
        } else {
            return false;
        }
    }



    

}
?>