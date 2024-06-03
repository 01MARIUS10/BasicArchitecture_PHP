<?php

class Role  extends Model{

    public function __construct(){
        Parent::__construct();
        $this->table = "parcour";
        $this->column = ["id","nom"];
        $this->filliale = ["label"];
    }
}
