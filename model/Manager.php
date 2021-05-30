<?php
class Manager
{
    protected $db;
    public function __construct()
    {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=gestion;charset=utf8', 'root', '',  array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
}
