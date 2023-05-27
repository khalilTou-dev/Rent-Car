<?php
// Ceci c'est l connexion avec votre base
abstract class Connexion {
    protected $pdo;
    const host="localhost";
    const user="root";
    const login="";
    const bd="location";// le nom de votre base
    function __construct()
    {
        $this->pdo=new PDO("mysql:host=".self::host.";dbname=".self::bd, self::user, self::login);
    }
    function __destruct(){
        $this->pdo=null;
    }
}