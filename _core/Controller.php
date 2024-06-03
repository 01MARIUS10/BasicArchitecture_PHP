<?php

class Controller{
    public $page ;

    public function __construct(){
        $this->page = new View();
    }
    public function getPage(){
        return $this->page;
    }
    public function renderJson($response){
        echo json_encode($response);
    }

}

?>