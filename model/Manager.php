<?php

class Manager
{

    private $host = 'localhost';
    private $dbName = 'gestion';
    private $username = 'root';
    private $password = '';

    public $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbName . ';charset=utf8', $this->username, $this->password);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return true;
    }

    public function __destruct()
    {
        $this->db = null;
    }
}
