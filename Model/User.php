<?php

class User  extends Model{

    public function __construct(){
        Parent::__construct();
        $this->table = "User";
        $this->column = ["id","nom"];
        $this->filliale = ['nom', 'email', 'address', 'password', 'role_id'];
    }
}
