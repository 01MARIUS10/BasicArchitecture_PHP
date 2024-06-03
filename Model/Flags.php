<?php

class Flags  extends Model{

    public function __construct(){
        Parent::__construct();
        $this->table = "Flags";
        $this->column = ["id","nom"];
        $this->filliale = ["label"];
    }
}
