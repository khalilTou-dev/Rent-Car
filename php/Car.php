
<?php
    include_once("Connexion.php");
    class Car extends Connexion {
        private $matricule,$marque,$type,$prix,$image;
        function __construct($matricule="",$type="",$marque="",$prix="",$image=""){
            $this->matricule=$matricule;
            $this->marque=$marque;
            $this->type=$type;
            $this->prix=$prix;
            $this->image=$image;
            parent::__construct();
        }
        function insert($matricule,$marque,$type,$prix,$image){
            $query="insert into car (matricule,marque,type,prix,image) values ( ?, ?, ?, ?, ?)";
            $res=$this->pdo->prepare($query);
            return $res->execute(array($matricule,$marque,$type,$prix,$image));
        }
        function list(){
            $query = "select * from car";
            $res=$this->pdo->prepare($query);
            $res->execute();
            return $res;
        }
        function delete($idCar){
            $query = "delete from car where matricule=?";
            $res = $this->pdo->prepare($query);
            return $res->execute(array($idCar));
        }
        function update ($marque,$type,$prix,$matricule){
            $query="update car Set marque = ?,  type= ?, prix = ? where matricule = ?";
            $res=$this->pdo->prepare($query);
            return $res->execute(array($marque,$type,$prix,$matricule));
            //$res->debugDumpParams();
        }
        function listdistinctmarque(){
            $query = "select distinct marque from car";
            $res=$this->pdo->prepare($query);
            $res->execute();
            return $res;
        }
        function listcarBymarque($marque){
            $query = "select * from car where marque = ?";
            $res=$this->pdo->prepare($query);
            $res->execute(array($marque));
            return $res;
        }
        
        
        

    }