<?php

class Database {
    
    protected $pdo;
    protected $sth;
    
    private const HOST = '';
    private const USER = '';
    private const PASS = '';
    private const BDNAME = '';
    
    public function __cosntruct() {
        $this->pdo = new PDO("mysql:host=" . Database::HOST . ";dbname=" . 
        Database::BDNAME, Database::USER, Database::PASS);
    }
}