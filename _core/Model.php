<?php

class Model extends QueryBuilder{
    public $table;
    public $id;
    public $column=[];
    public $filliale=[];

    public function __construct(){
        Parent::__construct();
    }

    public function find($id){
        $this->query("SELECT * FROM ")
        ->query($this->table)
        ->where($this->id." = ?")
        ->execute($id);
        return $this->fetch();
    }
    public function findAll(){
        $this->query("SELECT * FROM ")
        ->query($this->table)
        ->execute();
        return $this->fetchAll();
    }
    public function create(array $value){
       return 
        $this->query("INSERT INTO ")
        ->query('`'. $this->table . '`')
        ->query( '(`'. implode("`,`", $this->filliale) .'`)')
        ->query(" VALUES ")
        ->query("(". implode(",",$value) . ")")
        ->execute();

    }


}