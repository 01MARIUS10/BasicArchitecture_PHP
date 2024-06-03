<?php

class Event  extends Model{

    public function __construct(){
        Parent::__construct();
        $this->table = "Event";
        $this->column = ["id","nom"];
        $this->filliale = ['nom', 'description', 'datetime'];
    }
}
