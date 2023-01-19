<?php

abstract class CRUD extends PDO{
    public function __construct(){
    parent::__construct("mysql:host=localhost;dbname=stampee;charset=utf8",
    "root", "");
    }
    public function select(){
        if ($this->table == 'user'){
            $user_id = $_SESSION['user_id'];
            $sql = "SELECT * FROM $this->table WHERE user_id = $user_id";
        }else {
            $sql = "SELECT * FROM $this->table";
        }
    
        $query = $this->query($sql);
        return $query->fetchAll();
    }

    public function insert($data){
        $nomChamp = implode(", ", array_keys($data));
        $valeurChamp = ':'.implode(", :", array_keys($data));

        $sql = "INSERT INTO $this->table ($nomChamp) VALUES ($valeurChamp)";

        $stmt = $this->prepare($sql);
        foreach($data as $key=>$value){
            $stmt->bindValue(":$key", $value);
        }
        if(!$stmt->execute()){
            print_r($stmt->errorInfo());
        }
    }

    public function update($data){
        $champRequete = null;
        foreach($data as $key=>$value) {
            $champRequete .= "$key = :$key, ";
        }
        $champRequete = rtrim($champRequete, ", ");

        $sql = "UPDATE $this->table SET $champRequete WHERE $this->primaryKey = :$this->primaryKey;";
        $stmt = $this->prepare($sql);
        foreach($data as $key=>$value){
            $stmt->bindValue(":$key", $value);
        }
        if(!$stmt->execute()){
            print_r($stmt->errorInfo());
        }
    }

    public function delete($data){
        $sql = "DELETE FROM $this->table WHERE $this->primaryKey = :$this->primaryKey;";
        $stmt = $this->prepare($sql);
        foreach($data as $key=>$value){
            $stmt->bindValue(":$key", $value);
        }
        if(!$stmt->execute()){
            print_r($stmt->errorInfo());
        }
    }
}