<?php

class Categorie  extends Model{

    public function __construct(){
        Parent::__construct();
        $this->table = "Categorie";
        $this->column = ["id","name"];
        $this->filliale = ["name"];
    }
}
