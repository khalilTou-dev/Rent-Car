
<?php
    include_once("Connexion.php");
    class Client extends Connexion {
        private $idCli,$nomCli,$emailCli,$passwordCli;
        function __construct($id="",$username="",$cin="",$email="",$password=""){
            $this->idCli=$id;
            $this->nomCli=$username;
            $this->emailCli=$email;
            $this->cin=$cin;
            $this->passwordCli=$password;
            parent::__construct();
        }
        function insert($name,$email,$cin,$password){
            $query="insert into client (username,email,cin,password) values ( ?, ?, ?, ?)";
            $res=$this->pdo->prepare($query);
            return $res->execute(array($name,$email,$cin,$password));
        }
        function update ($name,$email,$cin,$password,$idCli){
            $query="update client Set username = ?, email= ?, cin= ?, password = ? where id = ?";
            $res=$this->pdo->prepare($query);
            return $res->execute(array($name,$email,$cin,$password,$idCli));
        }
        function delete($idCli){
            $query = "delete from client where id=?";
            $res = $this->pdo->prepare($query);
            return $res->execute(array($idCli));
        }
        function liste(){
            $query = "select * from client";
            $res=$this->pdo->prepare($query);
            $res->execute();
            return $res;
        }
        function checkcompte($email){
            $query = "select * from client where email = ?";
            $res=$this->pdo->prepare($query);
            $res->execute(array($email));
            return $res;
            //$res->debugDumpParams();
        }
        function findcli($id){
            $query = "select * from client where id = ?";
            $res=$this->pdo->prepare($query);
            $res->execute(array($id));
            return $res;
        }
        

    }