
<?php
    include_once("Connexion.php");
    class Stats extends Connexion {
        function __construct(){
        }
        function nbclient(){
            $query="select count(*) from client";
            $res=$this->pdo->prepare($query);
            return $res->execute();
        }
        function nbcar(){
            $query = "select count(*) from car";
            $res=$this->pdo->prepare($query);
            $res->execute();
            return $res;
        }
        
        function nbcchauff(){
            $query = "select count(*) from chauffeur";
            $res=$this->pdo->prepare($query);
            $res->execute();
            return $res;
        }
        
        function nbres(){
            $query = "select count(*) from reservation";
            $res=$this->pdo->prepare($query);
            $res->execute();
            return $res;
        }
        
        
        

    }