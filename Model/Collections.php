<?php

class Collections  extends Model{

    public function __construct(){
        Parent::__construct();
        $this->table = "Collections";
        $this->column = ["id","nom"];
        $this->filliale = ['nom', 'image_url', 'old_price', 'new_price', 'description', 'note'];
    }
}
