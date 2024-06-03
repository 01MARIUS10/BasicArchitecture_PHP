<?php

class Sous_categorie  extends Model{

    public function __construct(){
        Parent::__construct();
        $this->table = "Sous_categorie";
        $this->column = ["id","nom"];
        $this->filliale = ['categorie_id', 'name'];
    }
}
