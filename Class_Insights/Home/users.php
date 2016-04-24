<?php

class Users extends Database{
    public function __construct() {
        parent::__construct(); //call parent constructor?
        
    }
    
    public function save($username, $first_name, $last_name, $password) {
        // todo fill this out
        $this->sth = $this->pdo->prepare("INSERT INTO Users (username, password, first_name, last_name, avatar_id) 
        VALUES (:username, :password, :first_name, :last_name, 0)");
        $this->sth->bindParam(':username',$username);
        $this->sth->bindParam(":password",$password);
        $this->sth->bindParam(":first_name",$first_name);
        $this->sth->bindParam(":last_name",$last_name);
        
        $this->sth->execute();
    }
    
    /**
     * 
     */
    public function getOne($username) {
        $this->sth = $this->pdo->prepare("SELECT username, password, first_name, last_name
        FROM Users
        WHERE username = :username LIMIT 1");
        
        $this->sth->bindParam(':username', $username);
        $this->sth->execute();
        
        $result = $this->sth->fetch(PDO::FETCH_ASSOC);
        
        return $result;
    
    }
}