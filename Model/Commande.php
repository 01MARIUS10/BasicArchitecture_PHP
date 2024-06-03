<?php

class Commande  extends Model{

    public function __construct(){
        Parent::__construct();
        $this->table = "Commande";
        $this->column = ["id","nom"];
        $this->filliale =  ['slug', 'id_panier', 'totalPrice', 'is_paid', 'modePaiement'];
    }
}
