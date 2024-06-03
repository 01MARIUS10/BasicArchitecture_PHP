<?php

class Panier_Item  extends Model{

    public function __construct(){
        Parent::__construct();
        $this->table = "Panier_Item";
        $this->column = ["id","nom"];
        $this->filliale = ['panier_id', 'collection_id', 'quantity'];
    }
}
