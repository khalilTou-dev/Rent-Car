<?php
    include_once("Connexion.php");
    class Reservation extends Connexion {
        private $idres,$nomcli,$cin,$numtel,$matricule,$datedeb,$datefin,$idchauf;
        function __construct($idres="",$nomcli="",$cin="",$numtel="",$matricule="",$datedeb="",$datefin="",$facture="",$idchauf=""){
            $this->idres=$idres;
            $this->nomcli=$nomcli;
            $this->cin=$cin;
            $this->numtel=$numtel;
            $this->matricule=$matricule;
            $this->datedeb=$datedeb;
            $this->datefin=$datefin;
            $this->facture=$facture;
            $this->idchauf=$idchauf;
            parent::__construct();
        }
        function insert($nomcli,$cin,$numtel,$matricule,$datedeb,$datefin,$facture,$idchauf){
            $query="insert into reservation (nomcli,cin,numtel,matricule,datedeb,datefin,facture,idchauf) values ( ?, ?, ?, ?, ?, ?, ?, ?)";
            $res=$this->pdo->prepare($query);
            return $res->execute(array($nomcli,$cin,$numtel,$matricule,$datedeb,$datefin,$facture,$idchauf));
            //$res->debugDumpParams();

        }
        function list(){
            $query = "select * from reservation";
            $res=$this->pdo->prepare($query);
            $res->execute();
            return $res;
        }
        function listres($cin){
            $query = "select * from reservation where cin = ? order by idres desc";
            $res=$this->pdo->prepare($query);
            $res->execute(array($cin));
            return $res;
        }
        function listparvoit($matricule){
            $query = "select * from reservation where matricule = ?";
            $res=$this->pdo->prepare($query);
            $res->execute(array($matricule));
            return $res;
        }
    }
?>