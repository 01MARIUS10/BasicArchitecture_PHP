<?php

class Etudiant extends Model{

    public function __construct(){
        Parent::__construct();
        $this->table = "etudiant";
        $this->column = ["id","nom","age","parcourId"];
        $this->filliale = ["etudiant_nom","etudiant_age","etudiant_parcourId"];
    }

}
