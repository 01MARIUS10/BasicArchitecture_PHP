<?php

class Parcour  extends Model{

    public function __construct(){
        Parent::__construct();
        $this->table = "parcour";
        $this->column = ["id","nom"];
        $this->filliale = ["nom"];
    }
}
