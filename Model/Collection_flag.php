<?php

class Collection_flag  extends Model{

    public function __construct(){
        Parent::__construct();
        $this->table = "collection_flag";
        $this->column = ["id_collection","id_flag"];
        $this->filliale = ["id_collection","id_flag"];
    }
}
