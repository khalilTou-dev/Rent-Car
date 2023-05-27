<?php
    include_once("Connexion.php");
    class Chauffeur extends Connexion {
        private $idchauf,$name,$prix;
        function __construct($idchauf="",$name="",$prix=""){
            $this->idchauf=$idchauf;
            $this->name=$name;
            $this->prix=$prix;
            parent::__construct();
        }
        function insert($name,$prix){
            $query="insert into Chauffeur (name, prix) values ( ?, ? )";
            $res=$this->pdo->prepare($query);
            return $res->execute(array($name,$prix));
        }
        function delete($idChauf){
            $query = "delete from Chauffeur where idchauf=?";
            $res = $this->pdo->prepare($query);
            return $res->execute(array($idChauf));
        }
        function update ($nom,$prix,$id){
            $query="update chauffeur Set name = ?, prix = ? where idchauf = ?";
            $res=$this->pdo->prepare($query);
            return $res->execute(array($nom, $prix, $id));
            //$res->debugDumpParams();
        }
        function list(){
            $query = "select * from Chauffeur";
            $res=$this->pdo->prepare($query);
            $res->execute();
            return $res;
        }
        function findchauf($idchauf){
            $query = "select * from Chauffeur where idchauf = ?";
            $res=$this->pdo->prepare($query);
            $res->execute(array($idchauf));
            return $res;
        }
    }
?>